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


global $_lknBaseFramework,$option;

define('LKN_DS',DIRECTORY_SEPARATOR);

define("JOOMLA_ROOT", $_lknBaseFramework->lknGetPath('root'));

define("LIVE_SITE", $_lknBaseFramework->lknGetPath('live'));

define("COMPONENT_PATH_FRONT", JOOMLA_ROOT . LKN_DS . 'components' . LKN_DS . $option);

define("COMPONENT_PATH_ADMIN", JOOMLA_ROOT . LKN_DS. 'administrator'.LKN_DS . 'components' . LKN_DS . $option);

?>