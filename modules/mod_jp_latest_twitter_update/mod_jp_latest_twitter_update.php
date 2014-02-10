<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

if(!defined('JP_LATEST_TWITTER_UPDATE'))
{
	define('JP_LATEST_TWITTER_UPDATE', 1);

	$username = $params->get( 'username');
	$limit = intval($params->get( 'limit', 5));
	
	$document =& JFactory::getDocument();
	$document->addCustomTag( '<link rel="stylesheet" href="'. JURI::base() . 'modules/mod_jp_latest_twitter_update/twitter.css" type="text/css" media="all">' );
	
	echo '
	<div id="twitter_div">
		<ul id="twitter_update_list">
			<li></li>
		</ul>
		<p><a href="http://twitter.com/'.$username.'" title="Follow me on Twitter" target="Twitter">Follow me on Twitter</a></p>
	</div>';
	echo '<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
	echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$username.'.json?callback=twitterCallback2&amp;count='.$limit.'"></script>';
}

?>