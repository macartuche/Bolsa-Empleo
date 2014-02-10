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
 * joomla ile ilgili genel verileri tutar
 *
 */
class lknBaseFramework {
	
	/**
	 * veritabanı kaynağı
	 */
	private $_db;
	
	/**
	 * tablo öneki
	 *
	 * @var string
	 */
	private $_prefix;
	
	/**
	 * tablo önek maskesi. "#__"
	 *
	 * @var string
	 */
	private $_prefix_mask;
	
	/**
	 * joomla türü : JOOMLA15 veya JOOMLA10
	 *
	 * @var string
	 */
	private $_joomlaVersion;
	
	/**
	 * dizin veya site url'si
	 *
	 * @var string
	 */
	private $_paths = null;
	
	/**
	 * joomla yazı editör bağlantısı
	 *
	 */
	//private $_editor;
	
	/**
	 * joomla kullanıcı class'ı
	 *
	 */
	private $_my;
	
	function __construct(&$jdetaylari)
	{
		$this->_db			=&	$jdetaylari['db'];
		$this->_prefix		=$jdetaylari['prefix'];
		$this->_prefix_mask =$jdetaylari['prefix_mask'];
		$this->_joomlaVersion=$jdetaylari['version'];
		//$this->_editor=$jdetaylari['editor'];
		$this->_my=$jdetaylari['my'];
		
	}
	
	/**
	 * joomla klasörlerinin yolunu verir
	 *
	 * @param string $path
	 * 1)root: site ana yolu (dizin)\n
	 * 2)component: components dizini yolu (dizin)\n
	 * 3)modules: modules klasörünün yolu (dizin)\n
	 * 4)plugins : JOOMLA10'da mambots, JOOMLA15'da plugins klasörünün yolunu verir (dizin)\n
	 * 5)live: site url'si (URL VERiR)\n
	 * 6)plugin-live: plugin (veya mambots) klasör url'si (URL VERiR)\n
	 * @return string
	 */
	function lknGetPath($path = ''){	
		if(!isset($this->path)){
			global $mosConfig_absolte_path;
			global $mosConfig_live_site;
			
			$siteroot = '';
			$https = isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS']: 'off';
			
			// $mosConfig_absolte_path varsa onu kullan
			if(!empty($mosConfig_absolte_path)){
				$siteroot = ltrim($mosConfig_absolte_path, '\\/');
				
			} else{
				$siteroot = dirname(dirname(dirname(dirname(__FILE__))));
			}
					
			$this->paths = array(
				'root' => $siteroot, 
				'component' => $siteroot . '/components',
				'modules' => $siteroot . '/modules',
				'plugins' => $siteroot
				);
				if ($this->_joomlaVersion =="JOOMLA15") {
					$this->paths['plugins'] .= '/plugins';
				}elseif ($this->_joomlaVersion =="JOOMLA10") {
					$this->paths['plugins'] .= '/mambots';		
				}
			
			
			// $mosConfig_live_site varsa onu live olarak al
			if(!empty($mosConfig_live_site)){
				$this->paths['live']  = $mosConfig_live_site;
				if((strtolower($https) == 'on')){
					$this->paths['live']  = str_replace('http:', 'https:', $this->paths['live']);
				}
				
			} else{
				// JURI::base() değerini site url'si için kullan				
				$this->paths['live'] = rtrim(JURI::base(), '/');
				
				// '/administrator' olması durumunu değerlendir
				if(stristr($this->paths['live'], 'administrator'))
				{
					$this->paths['live']	= str_replace('/administrator', '', $this->paths['live']);

				}				
			}
			
			
			if ($this->_joomlaVersion =="JOOMLA15") {
				$this->paths['plugin-live'] = $this->paths['live'] .'/plugins';
			}
			else
			{
				$this->paths['plugin-live'] = $this->paths['live'] .'/mambots';
			}
				
		}
		
		return $this->paths[$path];
	}
	
	/**
	* class içerisindeki herhangi bir de?eri d?nderirir
	*
	* @param  string  $var  class de?i?ken ad?
	* @return mixed
	*/
	function get( $var ) {
		if ( isset( $this->$var ) ) {
			return $this->$var;
		} else {
			return null;
		}
	}
	
	/**
	 * class içerisindeki bir değişkene dışarıdan değer atar
	 *
	 * @param mixed $var
	 * @param mixed $newVal
	 */
	function set( $var, $newVal ) {
		$this->$var		=	$newVal;
	}
	
	/**
	 * döküman başlığına atama yapar
	 *
	 * @param string $baslik
	 */
	function setPageTitle($baslik){
		if($this->_joomlaVersion=='JOOMLA15'){
			$dokuman =& JFactory::getDocument();
			$dokuman->setTitle($baslik);
		} elseif($this->_joomlaVersion=='JOOMLA10') {
			global $mainframe;
			$mainframe->setPageTitle($baslik);
		}
	}
	/**
	 * meta tag ekler
	 * <meta name="$tagAdi" content="$tagicerik" />
	 *
	 * @param string $tagAdi
	 * @param string $tagicerik
	 */
	function setMetaData($tagAdi,$tagicerik)
	{
		if($this->_joomlaVersion=='JOOMLA15'){
			$dokuman =& JFactory::getDocument();
			$dokuman->setMetaData( $tagAdi, $tagicerik );

		} elseif($this->_joomlaVersion=='JOOMLA10') {
			global $mainframe;
			$mainframe->appendMetaTag( $tagAdi,$tagicerik );
		}
	}
	
	/**
	 * <head></head> arasına <script type="text/javascript" src="http://www.siteurl.com/js/script.js"></script> ekler
	 *
	 * @param string $js: Full Url olmalı
	 */
	function addJavaScript($js)
	{

			global $mainframe;
			$js="<script type=\"text/javascript\" src=\"$js\"></script>";
			$mainframe->addCustomHeadTag($js);
		
	}
	
	/**
	 * css dosyası ekler
	 *
	 * @param string $link: css dosyasının full url'si
	 */
	function addCss($link)
	{
		if($this->_joomlaVersion=='JOOMLA15'){
			$doc =& JFactory::getDocument();
			$doc->addStyleSheet($link);
		} elseif($this->_joomlaVersion=='JOOMLA10') {
			global $mainframe;
			$css = "<link rel=\"stylesheet\" type=\"text/css\" href=\"$link\" />";
			$mainframe->addCustomHeadTag($css);
		}		

	}
	
	function addToPathWay($title,$link)
	{
		global $mainframe;
	
		if($this->_joomlaVersion=='JOOMLA15'){
			$pathway	= &$mainframe->getPathway();
			$pathway->addItem($title, $link);
		}elseif ($this->_joomlaVersion=='JOOMLA10') {
			$title = "<a href=\"$link\">$title</a>";
			$mainframe->appendPathWay($title);
		}
	}
	
	function AddCustomHeadTags( $headTag )
	{
//		/* Save the existing output buffer */
//		$buf = ob_get_contents();
//		$buf = trim( $buf );
//		if( !strstr( $buf, "<head>" ) ) {
//			return false;
//		}
//	   	if ( !empty( $buf ) && !headers_sent() ) {
//			/* Clean (erase) the output buffer */
//			ob_clean();
//			/* 'i' for case-insensitive search */
//        	$strMatch = '/<\/head>/i';
//         	$strReplace = $headTag."</head>";
//         	/* find and replace the first string match only */
//         	if( !( $buf = preg_replace( $strMatch, $strReplace, $buf, 1 ) ) ) {
//         		echo $buf;
//         		return false;
//         	}
//         	if( !strstr( $buf, $headTag ) ) {
//         		echo $buf;
//         		return false;
//         	}
//         	/* Output the updated output buffer */
//         	echo $buf;
//         	return true;
//	   }
//	   return false;

			global $mainframe;
			
			$mainframe->addCustomHeadTag( $headTag );
	}
	
	
	/**
	 * mevcut temanın adının dönderir
	 *
	 * @return string: aktif tema adı
	 */
	function getTemplate(){
		
		$version=$this->get('_joomlaVersion');
		if ($version=="JOOMLA10"){
			global $mainframe;
			return $mainframe->getTemplate();
		}elseif ($version=="JOOMLA15"){
			$mainframe		=& JFactory::getApplication();
			return $mainframe->getTemplate();
		}
		
	}
	
	/**
	* Exit the application.
	*
	* @access	public
	* @param	int	Exit code
	*/
	function close( $code = 0 ) {
		exit($code);
	}
	
}

class lknCache {
	
	function clean($option='com_jobs'){
		global $_lknBaseFramework;
		$jversion=$_lknBaseFramework->get('_joomlaVersion');
		if ($jversion=='JOOMLA15') {
			$cache = & JFactory::getCache($option);
			$cache->clean();
		}elseif ($jversion=='JOOMLA10'){
			// clean any existing cache files
			mosCache::cleanCache( $option );
		}
			
	}
}

/**
 * herhangi bir modül içeriğini geri dönderir
 *
 * @param string $module
 * @return string
 */
function lknGetModuleContent($module,$style='raw'){
	global $_lknBaseFramework;

	$jversion=$_lknBaseFramework->get('_joomlaVersion');
	
	if ($jversion=='JOOMLA15') {
		jimport( 'joomla.application.module.helper' );
		$module = JModuleHelper::getModule($module);
		$params		= array('style'=>$style);
		  
		$document = &JFactory::getDocument();
		$renderer = $document->loadRenderer('module');
		return $renderer->render($module,$params,NULL);
	}else {		
		return '';
	}
}

function lknLoadModule($text,$before='',$after=''){
	
	// {lknloadposition login} var mı yok mu kontrol et
	if ( lknText::strpos( $text, 'lknloadposition' ) === false ) {
		return $text;
	}
		
	$regex = '/{lknloadposition\s*.*?}/i';

 	// find all instances of plugin and put in $matches
	preg_match_all( $regex, $text, $matches );
	
	// Number of plugins
 	$count = count( $matches[0] );
 	
 	// plugin only processes if there are any instances of the plugin in the text
 	if ( $count ) {
		// Get plugin parameters
	 	$style	= -2 ;
 	 	for ( $i=0; $i < $count; $i++ )
		{
	 		$load = str_replace( 'lknloadposition', '', $matches[0][$i] );
	 		$load = str_replace( '{', '', $load );
	 		$load = str_replace( '}', '', $load );
	 		$load = trim( $load );
	
			$modules	= $before . lknGetModuleContent( $load, $style ) . $after;
			$text 	= str_replace($matches[0][$i], $modules, $text );
 		}
 	
 		return $text;
	}else {
		return $text;
	}
		
}
?>