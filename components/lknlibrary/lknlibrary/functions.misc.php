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

 /* dosyaları ekler
 *
 * @param string $what:tabs
 */
function lknImport($what)
{
	
	//TODO: SYSTEM PLUGIN'İ YAZ. BU KÖTÜ BİR FONKSİYON
	
	global $_lknBaseFramework,$_config;
	
	if ($what=='tabs') {
		$tabsFolder=$_lknBaseFramework->lknGetPath('live') . '/components/lknlibrary/js/tabs/';
		$_lknBaseFramework->addCss($tabsFolder . 'tab.webfx.css');
		$_lknBaseFramework->addJavaScript($tabsFolder . 'tabpane.js');
	}elseif ($what=='jquery'){
		$tabsFolder=$_lknBaseFramework->lknGetPath('live') . '/components/lknlibrary/js/jquery/';
		$_lknBaseFramework->addJavaScript($tabsFolder . 'jquery-1.3.2.min.js');
	}elseif ($what=='calendar')
	{
		if (!defined('lknCalendarIsLoaded')) {
			$calendarFolder=$_lknBaseFramework->lknGetPath('live').'/components/lknlibrary/js/calendar/';
			$_lknBaseFramework->addCss($calendarFolder . 'calendar.css');
			$_lknBaseFramework->addJavaScript($calendarFolder . 'calendar.js');
			$_lknBaseFramework->addJavaScript($calendarFolder . 'lang/calendar-en.js');
			$_lknBaseFramework->addJavaScript($calendarFolder . 'calendar-setup.js');
			define('lknCalendarIsLoaded',1);
		}
		
	}elseif ($what=='library')
	{
		$libFolder=dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . 'components'.DIRECTORY_SEPARATOR.'lknlibrary'.DIRECTORY_SEPARATOR.'lknlibrary'.DIRECTORY_SEPARATOR;
		
		require_once($libFolder . 'functions.base.php');
		require_once($libFolder . 'lknBaseFramework.php');
		require_once($libFolder . 'lknDb.php');
		require_once($libFolder . 'lknJoomlaConfig.php');
		require_once($libFolder . 'lknEditor.php');
		require_once($libFolder . 'lknFiles.php');
		require_once($libFolder . 'lknSayfalama.php');
		require_once($libFolder . 'lknhtml.php');
		require_once($libFolder . 'lknText.php');
		require_once($libFolder . 'lknSef.php');
		require_once($libFolder . 'lknUser.php');
		require_once($libFolder . 'lknDate.php');
		//require_once($libFolder . 'lknCsv.php');
		require_once($libFolder . 'lknRss.php');
		require_once($libFolder . 'lknMail.php');//class değil. 3 tane fonksiyon var
		require_once($libFolder . 'lknSocialBookmarking.php');
		require_once($libFolder . 'lknTemplate.php');
		require_once($libFolder . 'lknRegistry.php');	
	}elseif ($what=='defines')
	{
		$libFolder=$_lknBaseFramework->lknGetPath('root'). DIRECTORY_SEPARATOR . 'components'.DIRECTORY_SEPARATOR.'lknlibrary'.DIRECTORY_SEPARATOR.'lknlibrary'.DIRECTORY_SEPARATOR;
		
		require_once($libFolder . 'lknDefines.php');
	}elseif ($what=='overlib')
	{
		$tooltip=$_lknBaseFramework->lknGetPath('live').'/components/lknlibrary/js/overlib';
		?>
		<script language="javascript" type="text/javascript" src="<?php echo $tooltip;?>/overlib_mini.js"></script>		
		<?php 		
	}
	return ;
}

	/**
	 * slash temizleme fonksiyonu
	 *
	 * @param string veya array $value
	 * @return string veya array
	 */
	function temizleSlash( $value ) {
		$temizlenmis			=	'';
		if ( is_string( $value ) ) {
			$temizlenmis				=	stripslashes( $value );
		} else {
			if ( is_array( $value ) ) {
				$temizlenmis			=	array();
				foreach ( array_keys( $value ) as $k ) {
					$temizlenmis[$k]	=	temizleSlash( $value[$k] );
				}
			} else {
				$temizlenmis			=	$value;
			}
		}
		return $temizlenmis;
	}
	
	/**
	 * belirli bir sayfaya yönlendirme yapar
	 *
	 * @param string $url
	 * @param string $msg
	 */
	function yonledir($url,$msg=''){
	    global $_lknBaseFramework, $mainframe;
		$joomlaVersion=$_lknBaseFramework->get("_joomlaVersion");
		if ($joomlaVersion=="JOOMLA10") {
			mosRedirect($url, $msg);
		}
		
		if ($joomlaVersion=="JOOMLA15")
		{
			$mainframe->redirect($url, $msg);
		}
		
		
	}
	
	/**
	 * kullanıcının ip adresini dönderir
	 *
	 * @return string
	 */
	function lknGetIp(){
		return $_SERVER['REMOTE_ADDR']; 
	}
	
	/**
	 * belirli bir uzunlukta random şifre üretir
	 *
	 * @param integer $length
	 * @param integer $strength
	 * @return string
	 */
	function lknGenerateRandomPassword($length=9, $strength=4) {
		$vowels = 'aeuy';
		$consonants = 'bdghjmnpqrstvz';
		if ($strength & 1) {
			$consonants .= 'BDGHJLMNPQRSTVWXZ';
		}
		if ($strength & 2) {
			$vowels .= "AEUY";
		}
		if ($strength & 4) {
			$consonants .= '2301456789';
		}
		if ($strength & 8) {
			$consonants .= '@#$%';
		}
	 
		$password = '';
		$alt = time() % 2;
		for ($i = 0; $i < $length; $i++) {
			if ($alt == 1) {
				$password .= $consonants[(rand() % strlen($consonants))];
				$alt = 0;
			} else {
				$password .= $vowels[(rand() % strlen($vowels))];
				$alt = 1;
			}
		}
		return $password;
	}
	
	/**
	* Get which version of GD is installed, if any.
	* http://tr.php.net/manual/tr/function.gd-info.php adresinden aldım
	*
	* Returns the version (1 or 2) of the GD extension.
	*/
	function lknGdVersion($user_ver = 0)
	{
	    if (! extension_loaded('gd')) { return; }
	    static $gd_ver = 0;
	    // Just accept the specified setting if it's 1.
	    if ($user_ver == 1) { $gd_ver = 1; return 1; }
	    // Use the static variable if function was called previously.
	    if ($user_ver !=2 && $gd_ver > 0 ) { return $gd_ver; }
	    // Use the gd_info() function if possible.
	    if (function_exists('gd_info')) {
	        $ver_info = gd_info();
	        preg_match('/\d/', $ver_info['GD Version'], $match);
	        $gd_ver = $match[0];
	        return $match[0];
	    }
	    // If phpinfo() is disabled use a specified / fail-safe choice...
	    if (preg_match('/phpinfo/', ini_get('disable_functions'))) {
	        if ($user_ver == 2) {
	            $gd_ver = 2;
	            return 2;
	        } else {
	            $gd_ver = 1;
	            return 1;
	        }
	    }
	    // ...otherwise use phpinfo().
	    ob_start();
	    phpinfo(8);
	    $info = ob_get_contents();
	    ob_end_clean();
	    $info = stristr($info, 'gd version');
	    preg_match('/\d/', $info, $match);
	    $gd_ver = $match[0];
	    return $match[0];
	}
	
	/**
	 * &no_html=1 veya &tmpl=component değerini dönderir
	 *
	 * @return string
	 */
	function lknGetNoHtml(){
		global $_lknBaseFramework;
		$v=$_lknBaseFramework->get('_joomlaVersion');
		if($v=='JOOMLA15'){
			return "&tmpl=component";
		}elseif ($v=='JOOMLA10') {
			return "&no_html=1";
		}	
	}
	

	/**
	 * bu class tarayıcı türünü ve versiyonunu alır
	 * http://www.phpclasses.org/browse/package/2827.html adresinden aldım
	 * GPL lisanslı 
	 *
	 */
	class lknBrowser{

    var $Name = "Unknown";
    var $Version = "Unknown";
    var $Platform = "Unknown";
    var $UserAgent = "Not reported";
    var $AOL = false;

    function browser(){
        $agent = $_SERVER['HTTP_USER_AGENT'];

        // initialize properties
        $bd['platform'] = "Unknown";
        $bd['browser'] = "Unknown";
        $bd['version'] = "Unknown";
        $this->UserAgent = $agent;

        // find operating system
        if (eregi("win", $agent))
            $bd['platform'] = "Windows";
        elseif (eregi("mac", $agent))
            $bd['platform'] = "MacIntosh";
        elseif (eregi("linux", $agent))
            $bd['platform'] = "Linux";
        elseif (eregi("OS/2", $agent))
            $bd['platform'] = "OS/2";
        elseif (eregi("BeOS", $agent))
            $bd['platform'] = "BeOS";

        // test for Opera        
        if (eregi("opera",$agent)){
            $val = stristr($agent, "opera");
            if (eregi("/", $val)){
                $val = explode("/",$val);
                $bd['browser'] = $val[0];
                $val = explode(" ",$val[1]);
                $bd['version'] = $val[0];
            }else{
                $val = explode(" ",stristr($val,"opera"));
                $bd['browser'] = $val[0];
                $bd['version'] = $val[1];
            }

        // test for WebTV
        }elseif(eregi("webtv",$agent)){
            $val = explode("/",stristr($agent,"webtv"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
        
        // test for MS Internet Explorer version 1
        }elseif(eregi("microsoft internet explorer", $agent)){
            $bd['browser'] = "MSIE";
            $bd['version'] = "1.0";
            $var = stristr($agent, "/");
            if (ereg("308|425|426|474|0b1", $var)){
                $bd['version'] = "1.5";
            }

        // test for NetPositive
        }elseif(eregi("NetPositive", $agent)){
            $val = explode("/",stristr($agent,"NetPositive"));
            $bd['platform'] = "BeOS";
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];

        // test for MS Internet Explorer
        }elseif(eregi("msie",$agent) && !eregi("opera",$agent)){
            $val = explode(" ",stristr($agent,"msie"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
        
        // test for MS Pocket Internet Explorer
        }elseif(eregi("mspie",$agent) || eregi('pocket', $agent)){
            $val = explode(" ",stristr($agent,"mspie"));
            $bd['browser'] = "MSPIE";
            $bd['platform'] = "WindowsCE";
            if (eregi("mspie", $agent))
                $bd['version'] = $val[1];
            else {
                $val = explode("/",$agent);
                $bd['version'] = $val[1];
            }
            
        // test for Galeon
        }elseif(eregi("galeon",$agent)){
            $val = explode(" ",stristr($agent,"galeon"));
            $val = explode("/",$val[0]);
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
            
        // test for Konqueror
        }elseif(eregi("Konqueror",$agent)){
            $val = explode(" ",stristr($agent,"Konqueror"));
            $val = explode("/",$val[0]);
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
            
        // test for iCab
        }elseif(eregi("icab",$agent)){
            $val = explode(" ",stristr($agent,"icab"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];

        // test for OmniWeb
        }elseif(eregi("omniweb",$agent)){
            $val = explode("/",stristr($agent,"omniweb"));
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];

        // test for Phoenix
        }elseif(eregi("Phoenix", $agent)){
            $bd['browser'] = "Phoenix";
            $val = explode("/", stristr($agent,"Phoenix/"));
            $bd['version'] = $val[1];
        
        // test for Firebird
        }elseif(eregi("firebird", $agent)){
            $bd['browser']="Firebird";
            $val = stristr($agent, "Firebird");
            $val = explode("/",$val);
            $bd['version'] = $val[1];
            
        // test for Firefox
        }elseif(eregi("Firefox", $agent)){
            $bd['browser']="Firefox";
            $val = stristr($agent, "Firefox");
            $val = explode("/",$val);
            $bd['version'] = $val[1];
            
      // test for Mozilla Alpha/Beta Versions
        }elseif(eregi("mozilla",$agent) && 
            eregi("rv:[0-9].[0-9][a-b]",$agent) && !eregi("netscape",$agent)){
            $bd['browser'] = "Mozilla";
            $val = explode(" ",stristr($agent,"rv:"));
            eregi("rv:[0-9].[0-9][a-b]",$agent,$val);
            $bd['version'] = str_replace("rv:","",$val[0]);
            
        // test for Mozilla Stable Versions
        }elseif(eregi("mozilla",$agent) &&
            eregi("rv:[0-9]\.[0-9]",$agent) && !eregi("netscape",$agent)){
            $bd['browser'] = "Mozilla";
            $val = explode(" ",stristr($agent,"rv:"));
            eregi("rv:[0-9]\.[0-9]\.[0-9]",$agent,$val);
            $bd['version'] = str_replace("rv:","",$val[0]);
        
        // test for Lynx & Amaya
        }elseif(eregi("libwww", $agent)){
            if (eregi("amaya", $agent)){
                $val = explode("/",stristr($agent,"amaya"));
                $bd['browser'] = "Amaya";
                $val = explode(" ", $val[1]);
                $bd['version'] = $val[0];
            } else {
                $val = explode("/",$agent);
                $bd['browser'] = "Lynx";
                $bd['version'] = $val[1];
            }
        
        // test for Safari
        }elseif(eregi("safari", $agent)){
            $bd['browser'] = "Safari";
            $bd['version'] = "";

        // remaining two tests are for Netscape
        }elseif(eregi("netscape",$agent)){
            $val = explode(" ",stristr($agent,"netscape"));
            $val = explode("/",$val[0]);
            $bd['browser'] = $val[0];
            $bd['version'] = $val[1];
        }elseif(eregi("mozilla",$agent) && !eregi("rv:[0-9]\.[0-9]\.[0-9]",$agent)){
            $val = explode(" ",stristr($agent,"mozilla"));
            $val = explode("/",$val[0]);
            $bd['browser'] = "Netscape";
            $bd['version'] = $val[1];
        }
        
        // clean up extraneous garbage that may be in the name
        $bd['browser'] = ereg_replace("[^a-z,A-Z]", "", $bd['browser']);
        // clean up extraneous garbage that may be in the version        
        $bd['version'] = ereg_replace("[^0-9,.,a-z,A-Z]", "", $bd['version']);
        
        // check for AOL
        if (eregi("AOL", $agent)){
            $var = stristr($agent, "AOL");
            $var = explode(" ", $var);
            $bd['aol'] = ereg_replace("[^0-9,.,a-z,A-Z]", "", $var[1]);
        }
        
        // finally assign our properties
        $this->Name = $bd['browser'];
        $this->Version = $bd['version'];
        $this->Platform = $bd['platform'];
        $this->AOL = $bd['aol'];
    }
}

	/**
  	 * Provides a secure hash based on a seed
 	 *
 	 * @param string Seed string
 	 * @return string
 	 */
	function lknGetHash( $seed )
	{
		
		return md5( $seed  );
	}
	
	/**
	 * array işlemleri . 
	 * bu fonksiyon /joomla-root/libraries/joomla/utilities/arrayhelper.php
	 *
	 */
	class lknArrayHelper
	{
		/**
		 * Function to convert array to integer values
		 *
		 * @static
		 * @param	array	$array		The source array to convert
		 * @param	mixed	$default	A default value (int|array) to assign if $array is not an array
		 * @since	1.5
		 */
		function toInteger(&$array, $default = null)
		{
			if (is_array($array)) {
				foreach ($array as $i => $v) {
					$array[$i] = (int) $v;
				}
			} else {
				if ($default === null) {
					$array = array();
				} elseif (is_array($default)) {
					lknArrayHelper::toInteger($default, null);
					$array = $default;
				} else {
					$array = array( (int) $default );
				}
			}
		}
		
		/**
		 * array'ı string olarak dönderir
		 *
		 * @param array $array
		 * @param string $pre
		 * @param string $pad
		 * @param string $sep
		 * @return string
		 */
		function array2str($array, $pre = '.', $pad = '.', $sep = ', ')
		{
			$str = '';
			if(is_array($array)) {
				if(count($array)) {
					foreach($array as $v) {
						if(is_array($v)){
							$str .= lknArrayHelper::array2str($v, $pre, $pad, $sep);
						}else {
							$str .= $pre.$v.$pad.$sep;
						}
					}
					$str = substr($str, 0, -strlen($sep));
				}
			} else {
				$str .= $pre.$array.$pad;
			}
		
			return $str;
		}
		
		/* Returns true if a given variable represents an associative array */
		function is_associative_array( $var ) {
		   return is_array( $var ) && !is_numeric( implode( '', array_keys( $var ) ) );
		}
		
		  /* In case the XML API contains multiple open tags
	     with the same value, then invoke this function and
	     perform a foreach on the resultant array.
	     This takes care of cases when there is only one unique tag
	     or multiple tags.
	     Examples of this are "anonymous-address", "merchant-code-string"
	     from the merchant-calculations-callback API
	  */
	  function get_arr_result($child_node) {
	    $result = array();
	    if(isset($child_node)) {
	      if(lknArrayHelper::is_associative_array($child_node)) {
	        $result[] = $child_node;
	      }
	      else {
	        foreach($child_node as $curr_node){
	          $result[] = $curr_node;
	        }
	      }
	    }
	    return $result;
	  }
	}
   
?>