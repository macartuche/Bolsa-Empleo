<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

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
class lknSayfalama
{
	/**
	 * sayfalama yapılacak url.
	 * örneğin index.php?option=component_adi&degisken=$deger gibi
	 *
	 * @var string
	 */
	private $sayfaUrl;

	/**
	 * toplam kaç adet kayıt var. 
	 *
	 * @var integer
	 */
	private $toplamKayit  		= '';
	
	/**
	 * bir sayfada maksimum kaç kayıt olacak. $_config array'ından okunacak
	 *
	 * @var integer
	 */
	private $sayfadakiKayitSayisi;

	/**
	 * ilk sayfa için gösterilecek değer. dil dosyasından okunacak
	 *
	 * @var string
	 */
	private $ilkSayfaLinki;
	
	/**
	 * Sonraki Sayfayı belirmek için kullanıcak değer
	 *
	 * @var string
	 */
	private $sonrakiSayfa;
	/**
	 * Önceki Sayfayı belirmek için kullanılcak değer
	 *
	 * @var string
	 */
	private $oncekiSayfa;
	/**
	 * En son sayfayı göstermek için kullanılacak değer. Dil dosyasından okunacak
	 *
	 * @var string
	 */
	private $sonSayfaLinki;
	
	/**
	 * sayfalamaya başlanacak kayıt sayısı
	 *
	 * @var integer
	 */
	private $baslangic;

	/**
	 * sayfalama i�in gerekli olan bilgileri de�i�kenlere ata
	 *
	 * @param integer $toplam : toplam ka� adet kay�t var
	 * @param integer $baslangic : baslang�� noktas�. 
	 * bir sonraki sayfa= $baslangic+$sayfaBasinaKayit olacak
	 */
	function __construct($link,$toplam)
	{
		global $_config;
		$this->toplamKayit=(int)$toplam;
		$this->sayfadakiKayitSayisi=(int)$_config['recordPerPage'];
		$this->baslangic=(int)lknGetParamatre($_GET,'start','1');
		$this->sayfaUrl=$link;
		$this->ilkSayfaLinki  = _lkn_paging_first;
		$this->oncekiSayfa	=_lkn_paging_pervious;
		$this->sonrakiSayfa	=_lkn_paging_next;
		$this->sonSayfaLinki	=_lkn_paging_last;
	}
	
	/**
	 * sayfa linklerini yazar
	 *
	 * @return string
	 */
	function sayfaLinkiYaz() {
		$txt = '';

		$displayed_pages = 10;
		$link=$this->sayfaUrl;
		$toplamSayfa = $this->sayfadakiKayitSayisi ? ceil($this->toplamKayit / $this->sayfadakiKayitSayisi ) : 0;
		$aktifSayfa=$this->baslangic;
		$start_loop = (floor(($aktifSayfa-1)/$displayed_pages))*$displayed_pages+1;
		if ($start_loop + $displayed_pages - 1 < $toplamSayfa) {
			$stop_loop = $start_loop + $displayed_pages - 1;
		} else {
			$stop_loop = $toplamSayfa;
		}
		
//		echo "toplamKayit" . $this->toplamKayit. "<br />";
//		echo "sayfadaki kayıt" . $this->sayfadakiKayitSayisi. "<br />";
//		echo "toplam sayfa" . $toplamSayfa. "<br />";
		
		if ($aktifSayfa > 2) {
			$sayfa=$aktifSayfa-1;
			$txt .= '<a href="'. lknsef::url( $link ) .'" class="pagenav" title="'. $this->ilkSayfaLinki .'">'. $this->ilkSayfaLinki .'</a> ';
			$txt .= '<a href="'. lknsef::url( "$link&amp;start=$sayfa" ) .'" class="pagenav" title="'. $this->oncekiSayfa .'">'. $this->oncekiSayfa .'</a> ';
		}elseif ($aktifSayfa == 2) {
			$txt .= '<a href="'. lknsef::url( $link ) .'" class="pagenav" title="'. $this->ilkSayfaLinki .'">'. $this->ilkSayfaLinki .'</a> ';
			$txt .= '<a href="'. lknsef::url( "$link" ) .'" class="pagenav" title="'. $this->oncekiSayfa .'">'. $this->oncekiSayfa .'</a> ';
		} else {
			$txt .= '<span class="pagenav">'. $this->ilkSayfaLinki .'</span> ';
			$txt .= '<span class="pagenav">'. $this->oncekiSayfa .'</span> ';
		}
		
		for ($i=$start_loop; $i <= $stop_loop; $i++) {
			
			if ($i == $aktifSayfa) {
				$txt .= '<span class="pagenav">'. $i .'</span> ';
			} elseif ($i == 1) {
				$txt .= '<a href="'. lknsef::url( $link ) .'" class="pagenav"><strong>'. $i .'</strong></a> ';
			}
			else 
			{
				$txt .= '<a href="'. lknsef::url( $link .'&amp;start='. $i ) .'" class="pagenav"><strong>'. $i .'</strong></a> ';
			}
		}
		if ($aktifSayfa < $toplamSayfa) {
			$sayfa = $aktifSayfa+1;
			$txt .= '<a href="'. lknsef::url( $link .'&amp;start='. $sayfa ) .'" class="pagenav" title="'. $this->sonrakiSayfa .'">'. $this->sonrakiSayfa .'</a> ';
			$txt .= '<a href="'. lknsef::url( $link .'&amp;start='. $toplamSayfa ) .'" class="pagenav" title="'. $this->sonSayfaLinki .'">'. $this->sonSayfaLinki .'</a>';
		} else {
			$txt .= '<span class="pagenav">'. $this->sonrakiSayfa .'</span> ';
			$txt .= '<span class="pagenav">'. $this->sonSayfaLinki .'</span>';
		}
		return "<div align=\"center\" id=\"page_link\" class=\"page_link\">$txt</div>";
	}
	
	function getPageLinks($link,$total,$itemid=''){
		
		$sayfa = new lknSayfalama ( $link, (int)$total );
		return $sayfa->sayfaLinkiYaz();
	}
}

?>