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

class lknSef
{
	
	function getAlias($string)
	{
		//turkish non-english start
		$search=array('Ü','Ğ','I','Ş','Ç','Ö','ü','ğ','İ','ş','ç','ö','ı');
		$replace=array('u','g','i','s','c','o','u','g','i','s','c','o','i');
		$string=str_replace($search,$replace,$string);
		//turkish non-english finish
		
		//french non-english start
			$search=array('À','à','Â','â','Æ','æ','Ç','ç','È','è','É','é','Ê','ê','Ë','ë','Î','î','Ï','ï','Ô','ô','Œ','œ','Ù','ù','Û','û','Ü','ü','«','»','₣','€');
			$replace=array('a','a','a','a','a','a','c','c','e','e','e','e','e','e','e','e','i','i','i','i','o','o','e','e','u','u','u','u','u','u','','','f','e');
			$string=str_replace($search,$replace,$string);
		//french non-english finish
		
		//spanish non-english start
			$search=array('Á','á','É','é','Í','í','Ñ','ñ','Ó','ó','Ú','ú','Ü','ü','«','»','¿','¡','€','₧');
			$replace=array('a','a','e','e','i','i','n','n','o','o','u','u','u','u','','','','i','e','e');
			$string=str_replace($search,$replace,$string);
		//spanish non-english finish
		
		
		$string = htmlentities(utf8_decode($string));
		$string = str_replace(' ','-',$string);		
		$string = preg_replace("@[^A-Za-z0-9\-_]+@i","",$string);
		$string=lknText::strToLower($string);
		
		return $string; 	
	}
	
	/**
	 * joomla için sef işlemi
	 *
	 * @param string $url 
	 * @return string : sef url dönderir
	 */
	function url($url){
		if(class_exists('JRoute'))
			return JRoute::_($url);
		elseif(function_exists('sefRelToAbs'))
			return sefRelToAbs($url);
		else
			return $url;
	}
}
?>