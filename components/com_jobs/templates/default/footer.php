<?php 
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
global $_config;
$footer=$_config['templates_footer'];
if ($footer!='') 
{
	echo $footer;
}
?>

