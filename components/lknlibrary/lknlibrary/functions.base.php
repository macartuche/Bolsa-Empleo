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
 * çalıştığın joomla türü ve onunla ilgili değişkenleri tutar
 *
 * @return array
 */
function joomlaVersion()
{
	$joomlaDetaylari=array();
		if(class_exists('JFactory')){
			//joomla 1.5.X
			$dbo = & JFactory::getDBO();
            $joomlaDetaylari['db']   	=& $dbo->_resource;
            $config         = new JConfig(); 
            $joomlaDetaylari['prefix']  = $config->dbprefix; 
            $joomlaDetaylari['version']  = "JOOMLA15"; 
//            $joomlaDetaylari['editor']=&JFactory::getEditor();
            $joomlaDetaylari['my']=& JFactory::getUser();
            //$joomlaDetaylari['my']=& JUser::getInstance();
		} else if(class_exists('joomlaVersion')){
		    #Joomla 1.0.X
		     global $database,$mosConfig_dbprefix,$my;
            $joomlaDetaylari['db']   	=& $database->_resource;; //joomla veritabanı
            $joomlaDetaylari['prefix']  = $mosConfig_dbprefix; //tablo öneki jos_tablo_adi
            $joomlaDetaylari['version']  = "JOOMLA10";
//            $joomlaDetaylari['editor']='';
            $joomlaDetaylari['my']=& $my;
		} 
		$joomlaDetaylari['prefix_mask'] ="#__";

		return $joomlaDetaylari;
	
}


/**

 * Utility function to return a value from a named array or a specified default.
 * TO CONTRARY OF MAMBO AND JOOMLA mos Get Param:
 * 1) DOES NOT MODIFY ORIGINAL ARRAY
 * 2) Does sanitize ints
 * 3) Does return default array() for a default value array(0) which indicates sanitizing an array of ints.
 *
 * @param array A named array
 * @param string The key to search for
 * @param mixed The default value to give if no key found
 * @param int An options mask: _MOS_NOTRIM prevents trim, _MOS_ALLOWHTML allows safe html, _MOS_ALLOWRAW allows raw input
 */
define( "_NOTRIM", 0x0001 );
//define( "_MOS_ALLOWHTML", 0x0002 );
define( "_ALLOWRAW", 0x0004 );
function lknGetParamatre( &$arr, $name, $def=null, $mask=0 ) {
	static $noHtmlFilter	=	null;
	global $_lknBaseFramework,$option;
	

	if ( isset( $arr[$name] ) ) {
        if ( is_array( $arr[$name] ) ) {
        	$ret			=	array();
        	foreach ( array_keys( $arr[$name] ) as $k ) {
        		$ret[$k]	=	lknGetParamatre( $arr[$name], $k, $def, $mask);
        		if ( $def === array( 0 ) ) {
        			$ret[$k] =	(int) $ret[$k];
        		}
        		
        		
        	}
        } else {
        	        		
			$ret			=	$arr[$name];
			if ( is_string( $ret ) ) {
				if ( ! ( $mask & _NOTRIM ) ) {
					$ret	=	trim( $ret );
				}
				if ( ! ( $mask & _ALLOWRAW ) ) {
					if ( is_null( $noHtmlFilter ) ) {
						include_once(JOOMLA_ROOT . LKN_DS . 'components'.LKN_DS.'lknlibrary'.LKN_DS.'phpinputfilter'.LKN_DS.'phpinputfilter.inputfilter.php');
						$noHtmlFilter = new lknInputFilter( /* $tags, $attr, $tag_method, $attr_method, $xss_auto */ );
						        		
					}
					$ret	=	$noHtmlFilter->process( $ret );
					        		
				}
				if ( is_int( $def ) ) {
					$ret	=	(int) $ret;
				} elseif ( is_float( $def ) ) {
					$ret	=	(float) $ret;
					
				} elseif ( !  get_magic_quotes_gpc() ) {
					$ret	=	addslashes( $ret );
					
				}
			}
        }
		return $ret;
	} elseif ( false !== ( $firstSeparator = strpos( $name, '[' )  ) ) {
		// html-input-name-encoded array selection, e.g. a[b][c]
		$indexes			=	null;
		$mainArrName		=	substr( $name, 0, $firstSeparator );
		$count				=	preg_match_all( '/\\[([^\\[\\]]+)\\]/', substr( $name, $firstSeparator ), $indexes );
		if ( isset( $arr[$mainArrName] ) && ( $count > 0 ) ) {
			$a				=	$arr[$mainArrName];
			for ( $i = 0; $i < ( $count - 1 ); $i++ ) {
				if ( ! isset( $a[$indexes[1][$i]] ) ) {
					$a		=	null;
					break;
				}
				$a			=	$a[$indexes[1][$i]];
			}
		} else {
			$a				=	null;
		}
		if ( $a !== null ) {
			return lknGetParamatre( $a, $indexes[1][$i], $def, $mask );
		}
	}
	if ( $def === array( 0 ) ) {
		return array();
	}
	return $def;
}

/**
 * field_prefix değeri ile başlayan form field'leribi alır ve güvenlik kontrolü yapar
 *
 * @param string $field_prefix
 * @return array
 */
function lknGetFormValues($field_prefix='db_'){
		$data=array();
		foreach ($_POST as $key=>$v)
		{
			if (strstr($key,$field_prefix)) {
				$data[lknText::cleanFirst($key,$field_prefix)]=lknGetParamatre($_POST,$key);
				
			}		
		}

		return $data;
}
?>