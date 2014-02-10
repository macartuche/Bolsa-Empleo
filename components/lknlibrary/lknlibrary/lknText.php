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
 * bu class text işlemlerini yapar
 *
 */
class lknText
{
	
	function cleanFirst($str,$what)
	{
		return substr($str,strlen($what));
	}
	
	function spaceToPlus($str)
	{
		return str_replace(' ','+',$str);
	}
	
	/**
	 * UTF-8 aware alternative to strpos
	 * Find position of first occurrence of a string
	 *
	 * @static
	 * @access public
	 * @param $str - string String being examined
	 * @param $search - string String being searced for
	 * @return mixed Number of characters before the first match or FALSE on failure
	 * @see http://www.php.net/strpos
	 */
	function strpos($str, $search)
	{
		return strpos($str, $search);
	}
	
	/**
	 * gönderilen metni küçük harfe çevirir
	 *
	 * @param string $text
	 * @return string
	 */
	function strToLower($text){
		//echo "1$text<BR />";
		$search = array("Ç", "İ", "I", "Ğ", "Ö", "Ş", "Ü");
		$replace = array("ç", "i", "ı", "ğ", "ö", "ş", "ü");
		$text = str_replace($search, $replace, $text);
		
		$convert_to = array(
		    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
		    "v", "w", "x", "y", "z", "à", "á", "â", "ã", "ä", "å", "æ", "ç", "è", "é", "ê", "ë", "ì", "í", "î", "ï",
		    "ð", "ñ", "ò", "ó", "ô", "õ", "ö", "ø", "ù", "ú", "û", "ü", "ý", "а", "б", "в", "г", "д", "е", "ё", "ж",
		    "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ы",
		    "ь", "э", "ю", "я",
		  );
		  $convert_from = array(
		    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
		    "V", "W", "X", "Y", "Z", "À", "Á", "Â", "Ã", "Ä", "Å", "Æ", "Ç", "È", "É", "Ê", "Ë", "Ì", "Í", "Î", "Ï",
		    "Ð", "Ñ", "Ò", "Ó", "Ô", "Õ", "Ö", "Ø", "Ù", "Ú", "Û", "Ü", "Ý", "А", "Б", "В", "Г", "Д", "Е", "Ё", "Ж",
		    "З", "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Ъ", "Ъ",
		    "Ь", "Э", "Ю", "Я"
		  );

  		$text=str_replace($convert_from, $convert_to, $text); 
  	
		return $text;
		
	}
	
	/**
	 * bir metin içerisinde belirli sayıda karakteri alır
	 *
	 * @param string $string
	 * @param integer $length
	 * @param string $replacer
	 * @return string
	 */
	function limitText($string, $length, $replacer = '...')
	{
  		if(strlen($string) > $length)
  		{
  			return (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
  		}else{
  			return $string;
  		}
	} 
	
	/**
	 * \n , \r\n , \r ile <br /> yer değiştirmesi yapar
	 *
	 * @param string $text
	 * @param string $replac
	 * @return string
	 */
	function nl2br($text, $replac=" <br />") {
		return preg_replace("/\r\n|\n|\r/", $replac, $text);
	}
	
	/**
	 * bir cümle veya kelime içerisindeki white-space'leri temizler
	 *
	 * @param string $text
	 * @return string
	 */
	function cleanWhiteSpace($text) {
		$text = preg_replace('/[s]+/', '', $text); // Clean white space
		return $text;
		
	}
	
}
?>