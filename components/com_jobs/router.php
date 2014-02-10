<?php

/*======================================================================*\

|| #################################################################### ||

|| # ---------------------------------------------------------------- # ||

|| # com_jobs is a native Job Management Component for Joomla  	  # ||

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



defined( '_JEXEC' ) or die( 'Restricted access' );



function jobsBuildRoute(&$query)

{

	$segments = array();

	

	if(isset($query['task']))

	{

		$segments[] = $query['task'];		

		unset($query['task']);

	};

	

	if(isset($query['id']))

	{

		$segments[] = $query['id'];		

		unset($query['id']);

	};	

	

	



	return $segments;

}



function jobsParseRoute($segments)

{

	$vars = array();



	// Count route segments

	$count = count($segments);

//	print_r($segments);



	if(isset($segments[0])) {

		$vars['task'] = $segments[0];

	}

	

	if (isset($segments[$count-1])) {

		$vars['id'] = $segments[$count-1];

	}

	

	return $vars;

}

?>