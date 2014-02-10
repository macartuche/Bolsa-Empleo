<?php
/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_library is a native Library Management Component for Joomla  # ||
|| # This component is not free or public.							  # ||
|| # It's for only our licensed customer							  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN											  # ||
|| # Date: Jan 2009													  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.ulasalkan.com |  www.ulasalkan.com/forum/showthread.php?t=12 # ||
|| #################################################################### ||
\*======================================================================*/

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

//gerekli dosyaları ekle
		if (!class_exists('lknJobsFunctions')) {
			$file=dirname(dirname(dirname(dirname(dirname(__FILE__))))). DIRECTORY_SEPARATOR.'com_jobs'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'common.php';
			//die($file);
			if (!file_exists($file)) {
				//die("common yok");
				return ;
			}
			require_once($file);
		}


class getJobsTab extends cbTabHandler {
	
	function getJobsTab(){
		$this->cbTabHandler();
	}

	function _nl2brStrict($text, $replac=" <br />") {
		return preg_replace("/\r\n|\n|\r/", $replac, $text);
	}
	
	function getItemid(){
		return lknJobsItemId();
	}
	
	function getDisplayTab($tab,$user,$ui) {
		global $mainframe;
		
		require_once(JOOMLA_ROOT. LKN_DS.'components'.LKN_DS.'com_comprofiler'.LKN_DS.'plugin' . LKN_DS. 'user'. LKN_DS. 'plug_jobstab' . LKN_DS . 'languages' . LKN_DS.'english.php');
		
		
		$user_id=$user->id;	

	//parametreleri al
	$params			= $this->params;	
	$count		= trim( $params->get( 'count' ,'5') );
	$display_type		= trim( $params->get( 'display_type' ) );
	$catid	= trim( $params->get( 'catid' ) );
	$show_category=trim( $params->get( 'show_category','yes' ) );
	$show_country=trim( $params->get( 'show_country','yes' ) );
	$show_user_type=$params->get('show_user_type', 'show');
	$text=$params->get('text','');
	$text=$this->_nl2brStrict($text);
	$show_tab_for=$params->get('show_tab_for','both');
	

	$txtJob=_lkn_cb_job_title;
	$txtLocation=_lkn_cb_location_title;
	$txtCategory=_lkn_cb_category_title;
					
	//css dosyasını ekle
		$css=LIVE_SITE ."/components/com_comprofiler/plugin/user/plug_jobstab/plug.jobs.css";
		$css="<link rel=\"stylesheet\" href=\"$css\" type=\"text/css\" />";
		$mainframe->addCustomHeadTag($css);
	//css dosyası eklendi
	
		// Ordering
		switch ($display_type)
		{
			case 'latest':
				$ordering		= ' ORDER BY j.id DESC';
				break;
			case 'random':
				$ordering		= ' ORDER BY RAND()';
				break;
			default:
				$ordering		= ' ORDER BY j.id DESC';
				break;
		}
		
		if ($count!='') {
			$limit=" LIMIT 0," . $count;
		}
		
		$returnHtml='';
		
			//kullanıcı türünü araştırma başladı
					$isWorker=lknJobsFunctions::isWorker($user_id);
					if ($isWorker=='1') {
						$type='worker';
						if ($show_tab_for=='employers') {
							//profil sahibi job seeker ama employer için gösterilsin seçilmiş.
							//geri bas uleyyyyyyynnnnnnnnnnn
							return '';
						}
					}
						
					$isEmployer=lknJobsFunctions::isEmployer($user_id);
					if ($isEmployer=='1') {
						$type='employer';
						
						if ($show_tab_for=='seekers') {
							//profil sahibi employer ama job seeker için gösterilsin seçilmiş.
							//geri bas uleyyyyyyynnnnnnnnnnn
							return '';
						}
						
					}
					
					if ($isEmployer=='0' AND $isWorker=='0') {
						//ya giriş yapmamış kullanıcı ya da henüz kayıt olmuş ve company veya resume eklememiş kullanıcı
						$type='new';
					}
						
					lknRegistry::add('usertype',$type);
			//kullanıcı türünü araştırma bitti


					
			if ($show_user_type=='show') {	
				
				$userType=lknRegistry::get('usertype');
				if ($userType=='employer') {
					$returnHtml.="<div>"._lkn_cb_user_is_an_employer."</div><br />";
				}elseif ($userType=='worker') {
					$returnHtml.="<div>"._lkn_cb_user_is_a_job_seeker."</div><br />";
				}
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
		$where[]="company.memberid='$user_id'";
		$where[]="c.published='1'";
		$where[] ="j.published='1'";
		$where[]="j.hide_company_name='0'";//gizlenmemiş işler gösterilsin
		$where[]="country.published='1'";
		if ($catid)
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

		$Itemid=getJobsTab::getItemid();
		

		if ($count=='0') {
			$returnHtml.="<div>"._lkn_cb_no_job."</div><br />";
		}else {
		
			$returnHtml.="<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"latest_jobs_table\">";
			$returnHtml.="<thead>";
			$returnHtml.="<tr>";
			$returnHtml.="<th class=\"sectiontableheader\" ><strong>$txtJob</strong></th>";
					if ($show_category=='yes') {
						$returnHtml.="<th class=\"sectiontableheader\" ><strong>$txtCategory</strong></th>";
					}
					if ($show_country=='yes') {
						$returnHtml.="<th class=\"sectiontableheader\" ><strong>$txtLocation</strong></th>";
					}
					$returnHtml.="</tr>";
					$returnHtml.="</thead>";
		
			$k=1;
	
			foreach ($rows as $row) {
				$title=temizleSlash($row->title);
				$id=$row->id;
				$published=$row->published;
				$alias=$row->alias;
				
				$company_name=temizleSlash($row->company_name);
				$company_alias=$row->company_alias;
				$company_id=$row->company_id;
				
				$cat_id=$row->cat_id;
				$category_name=temizleSlash($row->category_name);
				$category_alias=$row->category_alias;
				
				$created=$row->created;
				$created=lknDate::formatDate($created);
	
					$link_company="index.php?option=com_jobs&amp;task=detail_company&amp;id=$company_id:$company_alias" . $Itemid;
					$link_company=lknSef::url($link_company);
					$company_name="<a href=\"$link_company\">$company_name</a>";
					
					$link_job="index.php?option=com_jobs&amp;task=detail_job&amp;id=$id:$alias" . $Itemid;
					$link_job=lknSef::url($link_job);
					$title="<a href=\"$link_job\">$title</a>";
					
					$link_category="index.php?option=com_jobs&amp;task=detail_category&amp;id=$cat_id:$category_alias" . $Itemid;
					$link_category=lknSef::url($link_category);
					$category_name="<a href=\"$link_category\">$category_name</a>";
					
					$returnHtml.="<tr class=\"sectiontableentry$k\">";
					$returnHtml.="<td>$title</td>";
				
					if ($show_category=='yes') {
						$returnHtml.="<td>$category_name</td>";
					}
					
					if ($show_country=='yes') {
						$returnHtml.="<td>$company_name</td>";
					}
					
					$returnHtml.="</tr>";
		
	
				$k=3-$k;
			}
			
			$returnHtml.="</table>";
		}
		return $returnHtml;			
	}
	
	
}




			
