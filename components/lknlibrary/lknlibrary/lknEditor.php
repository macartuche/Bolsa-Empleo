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

/**
 * joomla editörü ile ara katman
 *
 */
class lknEditor
{
	function __construct()
	{
		
	}
	function display($areaname, $content, $width, $height, $rows, $cols,$params='')
	{
		global $_lknBaseFramework;
		$joomlaVersion=$_lknBaseFramework->get("_joomlaVersion");
		if ($joomlaVersion=="JOOMLA10") {
			// parameters : areaname, content, hidden field, width, height, rows, cols
			return editorArea( $areaname, $content, $areaname,$width, $height, $rows, $cols,$params ) ; 
		}
		if ($joomlaVersion=='JOOMLA15') {
			$editor=&JFactory::getEditor();
			return $editor->display($areaname, $content, $width, $height, $cols, $rows ,$params);
		}
	}
	
	/**
	 * joomla editor veya basit text metin kutusu gösterir
	 *
	 * @param integer $type
	 * @param string $areaname
	 * @param string $content
	 * @param integer $width
	 * @param integer $height
	 * @param integer $rows
	 * @param integer $cols
	 * @param array $params
	 * @return string
	 */
	function printEditor($type='1',$areaname, $content, $width, $height, $rows, $cols,$params=''){
		
		if ($type=='1') {
			$editor = new lknEditor();
			return $editor->display ($areaname, $content, $width, $height, $rows, $cols,$params);
		}else {
			$editor="<textarea rows=\"$height\" cols=\"$width\" id=\"$areaname\" name=\"$areaname\">$content</textarea>";
			return $editor;
		}
		
		
	}
	
}
?>