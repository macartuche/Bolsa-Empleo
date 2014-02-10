<?php
/**
 * Version information
 *
 */
class lknJobsVersion
{
	/** @var string Product */
	var $PRODUCT 	= 'Jobs!';
	/** @var int Main Release Level */
	var $RELEASE 	= '1.2';
	/** @var string Development Status */
	var $DEV_STATUS = 'Stable';
	/** @var string Build Number */
	var $BUILD = 'Build 25';
	/** @var int Sub Release Level */
	var $DEV_LEVEL 	= '';
	/** @var string Date */
	var $RELDATE 	= '16-03-2010';
	/** @var string Time */
	var $RELTIME 	= '15:00';
	/** @var string Timezone */
	var $RELTZ 	= 'GMT+2';
	/** @var string Copyright Text */
	var $COPYRIGHT 	= 'Copyright (C) 2006 - 2009 InstantPhp.Com. All rights reserved.';
	/** @var string URL */
	var $URL 	= '<a href="http://www.instantphp.com/store/details/6/jobs.html">Jobs!</a> is commercial Joomla component';

	/**
	 *
	 *
	 * @return string Long format version
	 */
	function getLongVersion()
	{
		return $this->PRODUCT .' '. $this->RELEASE .'.'. $this->DEV_LEVEL .' '
			. $this->DEV_STATUS . ' '
			. $this->BUILD . ' '
			. $this->RELDATE .' '
			. $this->RELTIME .' '. $this->RELTZ;
	}

	/**
	 *
	 *
	 * @return string Short version format
	 */
	function getShortVersion() {
		return $this->RELEASE .'.'. $this->DEV_LEVEL;
	}

	/**
	 *
	 *
	 * @return string Version suffix for help files
	 */
	function getHelpVersion()
	{
		if ($this->RELEASE > '1.0') {
			return '.' . str_replace( '.', '', $this->RELEASE );
		} else {
			return '';
		}
	}
}
