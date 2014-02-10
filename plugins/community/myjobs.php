<?php

// no direct access
defined('_JEXEC') or die('Restricted access');
//gerekli dosyaları ekle
if (!class_exists('lknJobsFunctions')) {
	if (!file_exists(JPATH_BASE . DS.'components'.DS.'com_jobs'.DS.'libs'.DS.'common.php')) {
		//echo "Jobs! is not installed";
		return ;
	}
	
	require_once(JPATH_BASE . DS.'components'.DS.'com_jobs'.DS.'libs'.DS.'common.php');	
}

class plgCommunityMyJobs extends CApplications
{
	var $_user		= null;
	var $name		= 'Jobs';
	var $_name		= 'jobs';
	
	
    function plgCommunityMyJobs(& $subject, $config)
    {
		$this->_user	=& CFactory::getActiveProfile();
		$this->db 		= JFactory::getDBO();
		$this->_path	= JPATH_BASE . DS . 'administrator' . DS . 'components' . DS . 'com_jobs';
		//$this->_my		=& CFactory::getUser();
		
		parent::__construct($subject, $config);
    }

	/**
	 * Ajax function to save a new wall entry
	 * 	 
	 * @param message	A message that is submitted by the user
	 * @param uniqueId	The unique id for this group
	 * 
	 **/	 	 	 	 	 		
	function onProfileDisplay(){	
		JPlugin::loadLanguage( 'plg_myjobs', JPATH_ADMINISTRATOR );
		
		
		// Attach CSS
		$document	=& JFactory::getDocument();
		$css		= JURI::base() . 'plugins/community/myjobs/style.css';
		$document->addStyleSheet($css);
		
		
		$userid	= $this->_user->id;
				
		$cats = $this->params->get("cats", '');
		$row = $this->getJob($userid,$this->params,$cats);
		$total = $row['count'];
		$row = $row['rows'];
		$ItemId = lknJobsItemId();
		//print_r($row);
		
		$introtext = $this->params->get("introtext", 0);
		
		$cache =& JFactory::getCache('plgCommunityMyJobs');
		$cache->setCaching($this->params->get('cache', 1));
		$callback = array('plgCommunityMyJobs', '_getArticleHTML');		
		$content = $cache->call($callback, $userid, $row, $ItemId, $introtext, $this->params);	
		
		return $content;
	}
	
	function _getArticleHTML($userid, $row, $Itemid, $introtext, $params){
		
		JPluginHelper::importPlugin('content');
		$dispatcher	=& JDispatcher::getInstance();
		$html = "";
		$show_user_type=$params->get('show_user_type', 'show');
		
		if ($show_user_type=='show') {		
				//kullanıcı türünü araştırma başladı
					$isWorker=lknJobsFunctions::isWorker($userid);
					if ($isWorker=='1') {
						$type='worker';
					}
					
					$isEmployer=lknJobsFunctions::isEmployer($userid);
					if ($isEmployer=='1') {
						$type='employer';
					}
				
					if ($isEmployer=='0' AND $isWorker=='0') {
						//ya giriş yapmamış kullanıcı ya da henüz kayıt olmuş ve company veya resume eklememiş kullanıcı
						$type='new';
					}
					
					lknRegistry::add('usertype',$type);
				//kullanıcı türünü araştırma bitti	
				$userType=lknRegistry::get('usertype');	
			if ($userType=='employer') {
				$html.="<div>".JText::_("PLG_MYJOBS IS AN EMPLOYER")."</div>";
			}elseif ($userType=='worker') {
				$html.="<div>".JText::_("PLG_MYJOBS IS AN JOB SEEKER")."</div>";
			}
		}
			if(!empty($row))
			{	
				foreach($row as $data)
				{		
					//print_r($data);		
					$text_limit = $params->get('limit', 50);				
					if(JString::strlen($data->description) > $text_limit)
					{
						$content = strip_tags(JString::substr($data->description, 0, $text_limit));
						$content .= " .....";
					}
					else
					{
						$content = $data->description;
					}		
							
					$data->text =& $content;
					$result = $dispatcher->trigger('onPrepareContent', array (& $data, $params, 0));
					
					$link = plgCommunityMyJobs::buildLink($data->id, $data->alias, $Itemid);
					
					$date = cGetDate($data->created);
					$html .= "<div>";
						$html .= "<div style='margin-top:10px;margin-bottom:5px'>";
						$html .= "	<div style='float:left;font-weight:bold'><a href='".$link."'>".$data->title."</a></div>";
						$html .= "	<div style='float:right;font-weight:bold' class='createdate'>".$date->toFormat()."</div>";
						$html .= "	<div style='clear:both;'></div>";
						$html .= "</div>";
						$html .= "<div style='border-bottom:1px solid #CCCCCC; margin-bottom:4px'></div>";	
						if($introtext == 1){
							$html .= "<div style='margin-bottom:20px'>".$content."</div>";
						}
					$html .= "</div>";		
				}
				
			}else{
				$html .= "<div>".JText::_("PLG_MYJOBS NO JOBS")."</div>";
			}	
				
		$html .= "<div style='clear:both;'></div>";
		
		return $html;
	}
	
	function onAppDisplay(){
		ob_start();
		$limit=0;
		$html= $this->onProfileDisplay($limit);
		echo $html;
		
		$content	= ob_get_contents();
		ob_end_clean(); 
	
		return $content;		
	}
	
	function buildLink($id, $alias, $ItemId){

		$link = JRoute::_( "index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $ItemId );
		
		return $link;
	}
	
	function getJob($userid,$params,$catid){
		$count=$params->get('count', 10);
		$display_type=$params->get('display_type', 'latest');
		// Ordering
		switch ($display_type)
		{
			case 'latest':
				$ordering		= ' ORDER BY j.id DESC';
				break;
			case 'random':
				$ordering		= ' ORDER BY RAND()';
				break;
		}
		
		if ($count!='') {
			$limit=" LIMIT 0," . (int)$count;
		}
		
		global $_db;
		
		$date=new lknDate();
		$now= $date->getDate();
		
		$nullDate	= $_db->getNullDate();



		$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
		$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";	
		$where[]="j.cat_id=c.id";
		$where[]="j.company_id=company.id";
		$where[]="j.country=country.id";
		$where[]="company.published='1'";
		$where[]="j.hide_company_name='0'";//gizlenmemiş işler gösterilsin
		$where[]="country.published='1'";
		$where[]="company.memberid='$userid'";
		$where[]="c.published='1'";
		$where[] ="j.published='1'";
		if ($catid!='')
		{
			$where[] = "j.cat_id IN ($catid)";
		}
			
		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
		
		$sql="SELECT j.*,c.title AS category_name,company.title AS company_name,";
		$sql.="\n company.alias AS company_alias, c.alias AS category_alias,country.title AS country";
		$sql.="\n FROM #__jobs_jobs AS j,";
		$sql.="\n #__jobs_categories AS c,";
		$sql.="\n  #__jobs_countries AS country,";
		$sql.="\n #__jobs_companies AS company";
		$sql.=$where;
		$sql.="\n $ordering";
		$sql.="\n LIMIT 0,$count";
		//echo $sql;
		$_db->query($sql);
		$_db->setQuery();
		$rows=$_db->loadObjectList();
		$count=$_db->num_rows();
		
		$results=array();
		
		$results['rows']=$rows;
		$results['count']=$count;			
		return $results;
	}

}