<?php
/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_jobs is a native Job Management Component for Joomla  		  # ||
|| # This component is not free or public.							  # ||
|| # It's for only our licensed customer							  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN											  # ||
|| # Date: April 2009												  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.instantphp.com |  www.instantphp.com/license.html?start=1 	  # ||
|| #################################################################### ||
\*======================================================================*/

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class lknRss {

    private $_title;
    private $_description;
    private $_generator;
    private $_version;
    private $_option;
    private $_itemid;
    private $_task;
    private $_limit_description;

    
    function __construct($title,
    							$description,
    							$generator,
    							$option,
    							$task,
    							$limit_description,
    							$itemid
    							) {
        $this->_title=$title;
        $this->_description=$description;
        $this->_generator=$generator;
        $this->_option=$option;
        $this->_itemid=$itemid;
        $this->_task=$task;
        $this->_limit_description=$limit_description;

    }
    
    function html2txt($document){
		$search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
		               '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		               '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
		);
		$text = preg_replace($search, '', $document);
		return $text; 
    }

    /**
    Make an xml document of the rss stream
    @param: items: n row of associative array with theses field:
            'title': title of the item
            'description': short description of the item
            'pubData': publication timestamp of the item
            'link': url to show the item
    @result: xml document of rss stream
    **/
    public function get($rows) {
    	$option=$this->_option;
    	$itemid=$this->_itemid;
    	$task=$this->_task;
    	$version=$this->_version;
    	$title=$this->_title;
    	$limit_description=$this->_limit_description;
	header ('Content-type: application/xml');
	//header('<?xml version="1.0" encoding="UTF-8" >');
	$rss="<?xml version=\"1.0\" encoding=\"utf-8\"";
	$rss="<!-- generator=\"". $this->_generator . "\"> -->";
	$rss.="<rss version=\"2.0\">";
	$rss.="<channel>";
	$rss.='<title>'  . stripslashes(htmlspecialchars($title)) . '</title>';
	$rss.='<description>' . htmlspecialchars($this->_description) . '</description>';
	$rss.='<link>' . htmlspecialchars(LIVE_SITE) . '</link>';
	$rss.='<lastBuildDate>'. date("r"). '</lastBuildDate>';
	$rss.='<generator>' . htmlspecialchars($this->_generator) . '</generator>';
		//items
        foreach($rows as $row) {
        	$title=	lknAmpReplace($row->title);
        	$description=lknRss::html2txt($row->description);
        	$description=str_replace('&nbsp;','',$description);
        	$title=str_replace('&nbsp;','',$title);
        	if ($limit_description=='0') {
        		$description=lknAmpReplace($description);
        	}elseif ($limit_description>0){
        		$description=lknText::limitText(lknAmpReplace($description),$limit_description);
        	}else {
        		$description=lknText::limitText(lknAmpReplace($description),300);
        	}

        	$pubdate=lknDate::formatDate($row->pubDate);
        	$id=$row->id;
        	$alias=$row->alias;
        	$link='http://'.$_SERVER['HTTP_HOST'].lknSef::url("index.php?option=$option&task=$task&id=$id:$alias" . $itemid);
        	$rss.='<item>';
        	$rss.='<title>' . $title . '</title>';
        	$rss.='<description>' . $description . '</description>';
        	$rss.='<pubDate>' . $pubdate .'</pubDate>';
        	$rss.='<link>' . stripslashes($link) .'</link>';
        	$rss.='<guid>' . stripslashes($link) .'</guid>';
        	$rss.='</item>';
            

        }
        $rss.='</channel>';
        $rss.='</rss>';
        //footer
        echo $rss;
    }
}

?>