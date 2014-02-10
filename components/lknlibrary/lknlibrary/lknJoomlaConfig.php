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
 * joomla genel configuration bilgileri
 *
 */
class lknJoomlaConfig {

/* Site Settings */
private $offline = '0';
private $offline_message = '';
private $sitename = '';
private $editor = '';
private $list_limit = '20';
private $legacy = '0';

/* Debug Settings */
private $debug = '0';
private $debug_db = '0';
private $debug_lang = '0';

/* Database Settings */
private $dbtype = '';
private $host = '';
private $user = '';
private $password = '';
private $db = '';
private $dbprefix = '';

	/* Server Settings */
	private $secret = '';
	private $gzip = '';
	private $error_reporting = '';
	private $helpurl = '';
	private $xmlrpc_server = '';
	private $ftp_host = '';
	private $ftp_port = '';
	private $ftp_user = '';
	private $ftp_pass = '';
	private $ftp_root = '';
	private $ftp_enable = '';
	
	/* Locale Settings */
	private $offset = '';
	private $offset_user = '';
	
	/* Mail Settings */
	private $mailer = '';
	private $mailfrom = '';
	private $fromname = '';
	private $sendmail = '';
	private $smtpauth = '';
	private $smtpuser = '';
	private $smtppass = '';
	private $smtphost = '';
	
	/* Cache Settings */
	private $caching = '';
	private $cachetime = '';
	private $cache_handler = '';
	
	/* Meta Settings */
	private $MetaDesc = '';
	private $MetaKeys = '';
	private $MetaTitle = '';
	private $MetaAuthor = '';
	
	/* SEO Settings */
	private $sef           = '';
	private $sef_rewrite   = '';
	
	/* Feed Settings */
	private $feed_limit   = 10;
	private $feed_summary = 0;
	private $log_path = '';
	private $tmp_path = '';
	
	/* Session Setting */
	private $lifetime = '';
	private $session_handler = '';

	
	function __construct(){

		
		if(class_exists('JApplication')){
			//joomla 1.5'da JConfig class'�na bak
			$cfg = new JConfig();
			$class_vars = get_class_vars(get_class($cfg));
			foreach ($class_vars as $name => $value) {
			   $this->$name = $value;
			}

		} else {
			// J1.0
			$class_vars = get_class_vars(get_class($this));
			foreach ($class_vars as $name => $value) {
				$varname = 'mosConfig_'.$name;
				if(isset($GLOBALS[$varname]))
			   $this->$name = $GLOBALS[$varname];
			}
		} 
	}
	
	/**
	 * joomla genel parametrelerini dönderir
	 *
	 * @param string $arg
	 * @return string
	 */
	function get($arg){
		if(isset($this->$arg))
			return $this->$arg;
		else
			return  '';
	}
}
?>