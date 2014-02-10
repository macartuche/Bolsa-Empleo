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

class lknhtmlMaker
{
	/**
	 * html select kutusu yapar
	 *
	 * @param array $data:select kutusunu dolduracak değerler
	 * @param string $name: select kutusu adı
	 * @param mixed $selectValue : seçili olan değerler
	 * @param string $extra
	 * @param integer $first:1 ->ilk değere boş bir option eklenir
	 * @return unknown
	 */
	function selectList($data,$name,$selectValue='',$tag_attribs='',$first=1)
	{
		$select='';
		$select="<select name=\"$name\" id=\"$name\" $tag_attribs>";
		if ($first==1) {
			$select.="<option></option>";	
		}
		
		foreach ($data as $key=>$value)
		{
			$select.="<option value=\"$key\"";
			
			if (is_array($selectValue)) {
				foreach ($selectValue as $val)
					{
						if ($val==$key) {
							$select.=" selected=\"selected\"";
						}
					}
			}elseif ($selectValue==$key) 
			{
				$select.=" selected=\"selected\"";
			}
			$value=temizleSlash($value);
			$select.=">$value</option>";
		}
		$select.="</select>";
		return $select;
	}
	
	function makeOption( $value, $text='', $value_name='value', $text_name='text' ) {
			$obj = new stdClass;
			$obj->$value_name = $value;
			$obj->$text_name = trim( $text ) ? $text : $value;
			return $obj;
	}

	
	function yesNoSelectList($name,$selectValue='',$f=0,$yes=_lkn_yes,$no=_lkn_no,$tag_att='')
	{
		$data=array();
		$data['1']=$yes;
		$data['0']=$no;		
		return lknhtmlMaker::selectList($data,$name,$selectValue,$tag_att,$f);
		
	}
	
	function publishedSelectList($name,$selectValue='',$extra='',$published=_lkn_published,$published_x=_lkn_published_x,$select_state=_lkn_select_state)
	{
			$data=array();
			$data['1']=$published;
			$data['0']=$published_x;
			$data['']=$select_state;
			return lknhtmlMaker::selectList($data,$name,$selectValue,$extra,0);
	}
	
	/**
	* Writes Back Button
	*/
	function BackButton ( $back=_lkn_back ) {
		// Back Button
		
			?>
			<div class="back_button">
				<a href='javascript:history.go(-1)'>
					<?php echo $back; ?></a>
			</div>
			<?php
	}
}

class lknTabs {
	function __construct(){
		
	}
	
	/**
	 * tab için gerekli js ve css dosylarını ekler ve tab panele başlangıç yapar
	 *
	 * @param integer $id
	 */
	function startTabPanel($id='1'){
		global $_lknBaseFramework;
		
		$tabsFolder=LIVE_SITE . '/components/lknlibrary/js/tabs/';
		$_lknBaseFramework->addCss($tabsFolder . 'tab.webfx.css');
		$_lknBaseFramework->addJavaScript($tabsFolder . 'tabpane.js');
		
		?>
		<div class="tab-pane" id="tab-pane-<?php echo $id?>">
		<?php 
	}
	
	function endTabPanel(){
		?>
		</div>
		<script type="text/javascript">
			setupAllTabs();
		</script>
		<?php 
	}
	
	function startTab($title){
		?>
		<div class="tab-page">
			<h2 class="tab">
				<?php echo $title;?>
			</h2>
		<?php 
		
	}
	
	function endTab(){
		echo '</div>';
	}
}


/**
* Utility function to provide ToolTips
*/
function lknToolTip( $tooltip, $text='',$link=0,$href='void(0)',$title=_lkn_info, $width='') {
	
	
	if (!defined('_lkntooltip')) {
		lknImport('overlib');
		define('_lkntooltip',1);		
	}
				
	        $tooltip = str_replace( "\n", "", 
                        str_replace( "&lt;", "<", 
                        str_replace( "&gt;", ">", 
                        str_replace( "&amp;", "&", 
                        @htmlentities( str_replace("'",'',$tooltip), ENT_QUOTES )))));
                    
                        
	        $title = str_replace( "\n", "", 
                        str_replace( "&lt;", "<", 
                        str_replace( "&gt;", ">", 
                        str_replace( "&amp;", "&", 
                        @htmlentities( str_replace("'",'',$title), ENT_QUOTES )))));
                        	
	if ( $width ) {
		$width = ', WIDTH, \''.$width .'\'';
	}
	
	
	if ( $title ) {
		$title = ', CAPTION, \''.$title .'\'';
	}

	$style = '';//'style="text-decoration: none; color: #333;"';
	if ( $href ) {
		$style = '';
	} else{
		$href = '#';
	}

	$mousover = 'return overlib(\''. $tooltip .'\''. $title .', BELOW, RIGHT'. $width .');';
	

	$tip = "<!-- Tooltip -->\n";
	if ( $link ) {
		$tip .= '<a href="'. $href .'" onmouseover="'. $mousover .'" onmouseout="return nd();" '. $style .'>'. $text .'</a>';
	} else {
		$tip .= "<span onmouseover=\"". $mousover ."\" onmouseout=\"return nd();\"". $style .">". $text ."</span>";
	}
	
	return $tip;
}

	/**
	* Replaces &amp; with & for xhtml compliance
	*
	*
	* @static
	* @since 1.5
	*/
	function lknAmpReplace( $text )
	{
		$text = str_replace( '&&', '*--*', $text );
		$text = str_replace( '&#', '*-*', $text );
		$text = str_replace( '&amp;', '&', $text );
		$text = preg_replace( '|&(?![\w]+;)|', '&amp;', $text );
		$text = str_replace( '*-*', '&#', $text );
		$text = str_replace( '*--*', '&&', $text );

		return $text;
	}
	
	/**

 * Converts all special chars to html entities
 *
 * @param string $string
 * @param string $quote_style
 * @param boolean $only_special_chars Only Convert Some Special Chars ? ( <, >, &, ... )
 * @return string
 */

function lknMakeHtmlSafe( $string, $quote_style='ENT_QUOTES', $use_entities=false ) {

	if( defined( $quote_style )) {
		$quote_style = constant($quote_style);
	}

	if( $use_entities ) {
		$string = @htmlentities( $string, constant($quote_style), lknGetCharset() );
	} else {
		$string = @htmlspecialchars( $string, $quote_style, lknGetCharset());
	}

	return $string;

}

/**
 * Returns the charset string from the global _ISO constant
 *
 * @return string UTF-8 by default
 */

function lknGetCharset() {
	$iso = explode( '=', @constant('_ISO') );
	if( !empty( $iso[1] )) {
		return $iso[1];
	}else {
		return 'UTF-8';
	}

}

class lknCustomFields {
	
	function getTextFieldHTML( $field ,$value)
	{
		// If maximum is not set, we define it to a default
		if ($field->maxlength==NULL || $field->maxlength=='0') {
			$field->maxlength=255;
		}
		
		if ($field->size=='' || $field->size=='0' || $field->size==NULL) {
			$field->size=50;
		}
		
		
		$field->name=temizleSlash($field->name);
		$field->description=temizleSlash($field->description);

		$html	= '<input type="text" value="'.$value.'" name="db_' . $field->name . '" maxlength="' . $field->maxlength . '" size="' . $field->size . '" class="text_area" />';

		return $html;
	}
	
	function getTextFieldValue($value)
	{
		return temizleSlash($value);
		
		
	}
	function getIntegerFieldValue( $value)
	{

		if ($value=='0') {
			$value='';
		}
		return $value;
	}
		
	function getIntegerFieldHTML( $field ,$value)
	{
		// If maximum is not set, we define it to a default
		if ($field->maxlength==NULL || $field->maxlength=='0') {
			$field->maxlength=255;
		}
		
		if ($field->size==NULL || $field->size=='0') {
			$field->size=50;
		}
		
		
		$field->name=temizleSlash($field->name);
		$field->description=temizleSlash($field->description);
		

			if ($value=='0') {
				$value='';
			}

		$html	= '<input type="text" value="'.$value.'" name="db_' . $field->name . '" maxlength="' . $field->maxlength . '" size="' . $field->size . '" class="text_area" />';

		return $html;
	}
	
	function getCheckBoxValue( $value,$multiple='0')
	{
		if ($multiple=='0') {
			
			if ($value==_lkn_yes) {
				$value=_lkn_yes;
			}elseif ($value==_lkn_no) {
				$value=_lkn_no;			
			}else {
				$value='';
			}
			
		}else {
			if ($value==NULL) {
				$value='';
			}elseif ($value==''){
				$value='';
			}else {
				$value=trim(temizleSlash($value));
				$value=str_replace(',','<br />',$value);
			}
			

		}
		
		return $value;

	}
	
	function getCheckBoxHTML( $field ,$value,$multiple='0')
	{
		if ($multiple=='0') {
			$field->name=temizleSlash($field->name);
			$field->description=temizleSlash($field->description);
			
			if ($value!='') {
				$value=_lkn_yes;
				$selected=' checked="checked"';
			}else {
				$value=_lkn_no;
				$selected='';			
			}
			
			$html = '<input type="checkbox" name="db_' . $field->name . '"  value="' . $value . '"' . $selected . ' class="checkbox" style="margin: 0 5px 5px 0;" /> '.$value.' ';
		}else {
			$id=$field->id;
			$db=&lknDb::createInstance();
			$sql="SELECT * FROM #__jobs_field_values WHERE fieldid='$id' ORDER BY ordering ASC";
			$db->query($sql);
			$db->setQuery();
			
			if (isset($value)) {
				$value=explode(',',$value);
			}else {
				$value='';
				$selected='';
			}
			
			
			
			$count=$db->num_rows();
			if ($count>0) {
				
				$field->name=temizleSlash($field->name);
				$field->description=temizleSlash($field->description);
								
				$rows=$db->loadObjectList();
				$html='';
				foreach ($rows as $row) {
					$fieldvalue=temizleSlash($row->fieldvalue);
						if ($value!='') {
							if (in_array($fieldvalue,$value)) {
								$selected=' checked="checked"';
							}else {
									$selected='';			
							}
							
						}
					$html.= '<input type="checkbox" name="db_' . $field->name . '[]"  value="' . $fieldvalue . '"' . $selected . ' class="checkbox" style="margin: 0 5px 5px 0;" /> '.$fieldvalue.' ';
				}				
			}else {
				$html="No value is created for this checkbox";
			}
			
		}
		
		return $html;

	}
	
	function getRadioButtonValue( $value)
	{
		$value=temizleSlash($value);
		if ($value==NULL) {
			$value='';
		}
		
		return $value;
	}
	
	function getRadioButtonHTML( $field ,$value)
	{

			$id=$field->id;
			$db=&lknDb::createInstance();
			$sql="SELECT * FROM #__jobs_field_values WHERE fieldid='$id' ORDER BY ordering ASC";
			$db->query($sql);
			$db->setQuery();
			
			if ($value!='') {
				$value=explode(',',$value);
			}else {
				$value='';
				$selected='';
			}
			
			
			
			$count=$db->num_rows();
			if ($count>0) {
				
				$field->name=temizleSlash($field->name);
				$field->description=temizleSlash($field->description);
								
				$rows=$db->loadObjectList();
				$html='';
				foreach ($rows as $row) {
					$fieldvalue=temizleSlash($row->fieldvalue);
						if ($value!='') {
							foreach ($value as $k=>$v){
								if ($v==$fieldvalue) {
									$selected=' checked="checked"';
								}else {
									$selected='';			
								}
							}
						}
					$html.= '<input type="radio" name="db_' . $field->name . '"  value="' . $fieldvalue . '"' . $selected . ' class="radio" style="margin: 0 5px 5px 0;" /> '.$fieldvalue;
				}				
			}else {
				$html="No value is created for this radio button";
			}
		
		return $html;

	}
	
	function getTextAreaValue( $value ){
		$value=temizleSlash($value);
		$value=lknText::nl2br($value);
		return $value;
	}
	
	function getTextAreaHTML( $field , $value ){
		// If maximum is not set, we define it to a default
		
		if (!defined('MaxLenJSAdded')) {
			echo '<script language="javascript" type="text/javascript">
				<!--
				function ismaxlength(obj){
					var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
					if (obj.getAttribute && obj.value.length>mlength)
					obj.value=obj.value.substring(0,mlength)
				}
				-->
				</script>';
			define('MaxLenJSAdded',1);
		}
		
		
		$field->name=temizleSlash($field->name);
		$field->description=temizleSlash($field->description);
		
		if ($field->cols=='0') {
			$field->cols=30;
		}
		
		if ($field->rows=='0') {
			$field->rows=5;
		}
		
		if ($field->maxlength>0) {
			$cl=$field->maxlength;
			$cl=" maxlength=\"$cl\" onkeyup=\"return ismaxlength(this);\"";
		}else {
			$cl='';
		}
		
	 
		$html	= '<textarea ' . $cl . ' cols= "'.$field->cols.'" rows= "'.$field->rows.'" name="db_' . $field->name . '" class="text_area">' . $value . '</textarea>';
		
		return $html;
	}
	
	function getSelectListValue($value){
		
		if ($value!='') {
			$value=trim(temizleSlash($value));
			$value=str_replace(',','<br />',$value);
		}

		return $value;

	}
	
	function getSelectListHTML($field,$value,$multiple='0'){
		$id=$field->id;
		$db=&lknDb::createInstance();
		$sql="SELECT * FROM #__jobs_field_values WHERE fieldid='$id' ORDER BY ordering ASC";
		$db->query($sql);
		$db->setQuery();
		
		$count=$db->num_rows();
		if ($count>0) {
			
			if ($value!='') {
				$value=explode(',',$value);
			}else {
				$value=NULL;
				$selected='';
			}
			
			$field->name=temizleSlash($field->name);
			$field->description=temizleSlash($field->description);
			$size=$field->size;
			
			$data=array();
			
			$rows=$db->loadObjectList();
			foreach ($rows as $row) {
				$fieldvalue=temizleSlash($row->fieldvalue);
				$data[$fieldvalue]=$fieldvalue;
			}
			
			if ($multiple=='1') {
				if ($size=='' || $size==NULL) {
					$size=5;
				}
				
				$title=" size=\"$size\" multiple=\"multiple\"";
				$name='db_'.$field->name . '[]';
			}else {
				$name='db_'.$field->name;
				$title="";
			}
			
			$html=lknhtmlMaker::selectList($data,$name,$value,$title);
		}else {
			$html='No Value is created for this select list';
		}
		return $html;

	}
	function getEditorAreaValue($value){
		$value=temizleSlash($value);
		return $value;
	}
	
	function getEditorAreaHTML($field,$value){
		$editor = new lknEditor();
			if (!isset($value)) {
				$value='';
			}
			
			$field->name=temizleSlash($field->name);
			return $editor->display( 'db_'. $field->name,  $value, '100%;', '350', '75', '20', array('pagebreak', 'readmore', 'image') ) ;
	}
	
	function getDateValue($value){
		$value=lknDate::formatDate($value);
		if ($value=='-') {
			$value='';
		}
		
		
		return $value;
	}
		
	function getDateHTML($field,$value){
		lknImport('calendar');
		$name=temizleSlash($field->name);
		$description=temizleSlash($field->description);
			
		$f="<input type=\"text\" name=\"db_$name\" id=\"db_$name\" size=\"30\" maxlength=\"100\" value=\"$value\"><input type=\"reset\" onclick=\"return showCalendar('db_$name', '%Y-%m-%d', '24', true);\" value=\" ... \" />";
		
		return $f;
	}
}
?>