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

class lknDate
{
	/**
	 * @var int The year
	 */
	var $year;
	/**
	 * @var int The month
	 */
	var $month;
	/**
	 * @var int The day
	 */
	var $day;
	/**
	 * @var int The hour
	 */
	var $hour;
	/**
	 * @var int The minute
	 */
	var $minute;
	/**
	 * @var int The second
	 */
	var $second;
	/**
	 * @var float Part second
	 */
	var $partsecond;

	/**
	 * zaman farkı. configuration.php dosyasından okunacak
	 */
	var $offset;


	function __construct($date = null)
	{
		global $_lknBaseFramework;
		$version=$_lknBaseFramework->get('_joomlaVersion');
		if ($version=="JOOMLA15") {
			$d=& JFactory::getDate();
			
			if (is_null( $date )) {
				$this->setDate( $d->toFormat() );
			} else {
				$this->setDate( date( 'Y-m-d H:i:s' ) );
			}
		}else {
			$this->setDate( date( 'Y-m-d H:i:s' ) );
		}
	
	}

	
	function setDate( $date )
	{
		$regex = '/^(\d{4})-?(\d{2})-?(\d{2})([T\s]?(\d{2}):?(\d{2}):?(\d{2})(\.\d+)?(Z|[\+\-]\d{2}:?\d{2})?)?$/i';

		if (preg_match( $regex, $date, $regs ))
		{
			$this->year	   = $regs[1];
			$this->month	  = $regs[2];
			$this->day		= $regs[3];
			$this->hour	   = isset( $regs[5] ) ? $regs[5] : 0;
			$this->minute	 = isset( $regs[6] ) ? $regs[6] : 0;
			$this->second	 = isset( $regs[7] ) ? $regs[7] : 0;
			$this->partsecond = (float) isset( $regs[8] ) ? $regs[8] : 0;
		}
	}

	function getDate( $format = '%Y-%m-%d %H:%M:%S' )
	{

		return $this->format( $format );
	}

	/**
	 * Formats the date
	 */
	function format( $format )
	{
		$timestamp = mktime( $this->hour, $this->minute, $this->second, $this->month, $this->day, $this->year );
     
		return strftime( $format, $timestamp );
	}

	function getTimestamp()
	{
		$timestamp = mktime( $this->hour, $this->minute, $this->second, $this->month, $this->day, $this->year );
		return $timestamp;
	}
	
	
	/**
	 * mevcut tarihe + veya - olarak ay ekler
	 * @param integer: + ve - olarak kaç ay ekleneceği
	 */
	function addMonths( $n )
	{
		$an = abs( $n );
		$years = floor( $an / 12 );
		$months = $an % 12;

		if ($n < 0)
		{
			$this->year -= $years;
			$this->month -= $months;
			if ($this->month < 1) {
				$this->year--;
				$this->month = 12 + $this->month;
			}
		}
		else
		{
			$this->year += $years;
			$this->month += $months;
			if ($this->month > 12) {
				$this->year++;
				$this->month -= 12;
			}
		}
	}

	/**
	 * tarih'e gün ekler
	 * @param integer: kaç gün eklenecek
	 */
	function addDays( $x ,$format = '%Y-%m-%d %H:%M:%S')
	{
		$date=strftime( $format, $this->getTimestamp()+ ($x*60*60*24) );
		$this->setDate(  $date );
	}
	
	/**
	 * mevcut tarihe saat ekler
	 * @param integer:kaç ssat ekleneceği
	 */
	function addHours( $x ,$format = '%Y-%m-%d %H:%M:%S')
	{
		$date=strftime( $format, $this->getTimestamp()+ ($x*60*60) );
		$this->setDate(  $date );
	}

	/**
	 * yazdırılacak tarihi formatlar
	 *
	 * @param date $date
	 * @return date
	 * 
	 */
	function formatDate($date,$date_format='')
	{
		global $_config,$_db;
		if ($date_format=='') {
			$format=$_config['dateFormat'];
		}else {
			$format=$date_format;
		}
		
		
		$nullDate=$_db->getNullDate();
		if ($date==$nullDate || $date=='' || is_null($date)) {
			return '-';
		}
		
		if ( $date && ereg( "([0-9]{4})-([0-9]{2})-([0-9]{2})[ ]([0-9]{2}):([0-9]{2}):([0-9]{2})", $date, $regs ) ) {
			$jconfig=new lknJoomlaConfig();
			$offset=$jconfig->get('offset');
		
			$date = mktime( $regs[4], $regs[5], $regs[6], $regs[2], $regs[3], $regs[1] );
//			$date = $date > -1 ? strftime( $format, $date + ($offset*60*60) ) : '-';
			$date = $date > -1 ? strftime( $format, $date+ ($offset*60*60) ) : '-';
		}
		
		return $date;

	}

}

/**
 * iki tarih arasındaki gün farkını yazılı olarak gösterir
 *
 * @param date/time $time
 * @param string $today
 * @param string $yesterday
 * @param string $days_ago
 * @return string
 */
function lknDateDiffToString($time,$today=_lkn_today,$yesterday=_lkn_yesterday,$days_ago=_lkn_days_ago) {
  $dayToday = date('z');
  $dayTime = date('z', $time);
  
  $diff=$dayToday-$dayTime;
  
  if ($diff == 0) {
    return $today;
  } elseif ($diff== 1 ) {
    return $yesterday;
  } elseif ($diff>1){
    $days_ago=str_replace('{DIFFENCE}',$diff,$days_ago);
    //{DIFFENCE} days ago
    return $days_ago;
  }else {
  	return '-';//'"diff=$diff:$dayToday:$dayTime";
  }
}  

?>