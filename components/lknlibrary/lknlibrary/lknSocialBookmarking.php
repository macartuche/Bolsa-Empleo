<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class lknSocialBookmarking {

  /**
   * @var string imagesFolder
   * @access private
   */
  private $imagesFolder;

  /**
   * @var string imageWidth
   * @access private
   */
  private $imageWidth = 16;

  /**
   * @var string imageHeight
   * @access private
   */
  private $imageHeight = 16;

  /**
   * @var string url
   * @access private
   */
  private $url;

  /**
   * @var string target
   * @access private
   */
  private $target = '_blank';

  /**
   * @var string siteTitle
   * @access private
   */
  private $siteTitle;

  /**
   * @var string siteKeywords
   * @access private
   */
  private $siteKeywords;

  /**
   * @var string AddThisID
   * @access private
   */
  private $addThisID;
  
  private $addThisButton;
  
  private $type;
    
  function __construct($type='local',$url = '', $siteTitle = '', $siteKeywords = '',$addThisID='',$addThisButton='') {

  	$this->type = $type;
    $this->url = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    $this->siteTitle = $siteTitle;
    $this->siteKeywords = $siteKeywords;
    $this->addThisID = $addThisID;
    $this->addThisButton = $addThisButton;
    $this->target = '_new';
    
    $this->imagesFolder=LIVE_SITE . '/components/lknlibrary/lknlibrary/social-bookmark-images/';
    
  }
  
  function getCode(){
  	$type=$this->type;
      if ($type=='local') {
    	return $this->localButtons();
    }elseif ($type=='addthis'){
    	return $this->addThisCode();		
    }
  }
  
  function addThisCode(){
  	
  	if ($this->addThisButton!='') {
  		$button=$this->addThisButton;
  	}else {
  		$button='http://s7.addthis.com/static/btn/lg-share-en.gif';
  	}
  	
  	
  	$outputValue='';
  	$outputValue .="<!-- AddThis Bookmark Button BEGIN -->\r\n";
	$outputValue .= "<script type='text/javascript'>";
	$outputValue .= "var addthis_pub = \"" . $this->addThisID . "\";";
	$outputValue .= "</script>";
	$outputValue .= "<a href=\"http://www.addthis.com/bookmark.php?v=20\" onmouseout=\"addthis_close()\" onclick=\"return addthis_sendto()\" onmouseover=\"return addthis_open(this,'', '" . $this->url . "', '" . $this->siteTitle . "')\">";
	$outputValue .= "<img src='$button' border='0' alt='Bookmark and Share' />";
	$outputValue .= "</a><script type='text/javascript' src='http://s7.addthis.com/js/200/addthis_widget.js'></script>\r\n";
	$outputValue .= "<!-- AddThis Bookmark Button END -->";
	
	return $outputValue;
			
  }


  function localButtons() {
    $local = '';
    $local .= ' <a href="http://www.google.com/bookmarks/mark?op=add&amp;hl=de&amp;bkmk='.$this->url.'&amp;annotation=&amp;labels='.$this->siteKeywords.'&amp;title='.$this->siteTitle.'" target="'.$this->target.'" title=" &#64; to Google Bookmark " rel="nofollow"><img src="'.$this->imagesFolder.'google_bmarks.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="add to Google Bookmark" title=" &#64; to Google Bookmark " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://www.furl.net/storeIt.jsp?u='.$this->url.'&amp;keywords='.$this->siteKeywords.'&amp;t='.$this->siteTitle.'" target="'.$this->target.'" title=" &#64; to FURL "><img src="'.$this->imagesFolder.'furl.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="add to FURL" title=" &#64; to FURL " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://digg.com/submit?phase=2&amp;url='.$this->url.'" target="'.$this->target.'" title=" &#64; to digg "><img src="'.$this->imagesFolder.'digg.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="add to digg" title=" &#64; to digg " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://myweb2.search.yahoo.com/myresults/bookmarklet?t='.$this->siteTitle.'&amp;d=&amp;tag=&amp;u='.$this->url.'" target="'.$this->target.'" title=" &#64; to Yahoo MyWeb "><img src="'.$this->imagesFolder.'yahoo_myweb.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="add to Yahoo MyWeb" title=" &#64; to Yahoo MyWeb " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://del.icio.us/post?url='.$this->url.'" target="'.$this->target.'" title=" Bookmark &#64; del.icio.us "><img src="'.$this->imagesFolder.'delicious.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="Bookmark del.icio.us" title=" Bookmark &#64; del.icio.us " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://reddit.com/submit?url='.$this->url.'&amp;title='.$this->siteTitle.'" target="'.$this->target.'" title=" Bookmark &#64; reddit "><img src="'.$this->imagesFolder.'reddit.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="Bookmark reddit" title=" Bookmark &#64; reddit " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://www.stumbleupon.com/submit?url='.$this->url.'&amp;title='.$this->siteTitle.'" target="'.$this->target.'" title=" Bookmark &#64; StumbleUpon "><img src="'.$this->imagesFolder.'stumbleupon.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="Bookmark StumbleUpon" title=" Bookmark &#64; StumbleUpon " border="0"/></a>';
    $local .= ' <a rel="nofollow" href="http://slashdot.org/bookmark.pl?url='.$this->url.'&amp;title='.$this->siteTitle.'" target="'.$this->target.'" title=" Bookmark &#64; Slashdot "><img src="'.$this->imagesFolder.'slashdot.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="Bookmark Slashdot" title=" Bookmark &#64; Slashdot " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://technorati.com/faves?add='.$this->url.'" target="'.$this->target.'" title=" Bookmark &#64; technorati "><img src="'.$this->imagesFolder.'technorati.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="Bookmark technorati" title=" Bookmark &#64; technorati " border="0" /></a>';
    $local .= ' <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=' . $this->url . '&amp;t='.$this->siteTitle.'" target="'.$this->target.'" title=" Bookmark &#64; facebook "><img src="'.$this->imagesFolder.'facebook.gif" width="'.$this->imageWidth.'" height="'.$this->imageHeight.'" alt="Bookmark facebook" title=" Bookmark &#64; facebook " border="0" /></a>';
    return $local;
  }

	/**
	 * class içerisindeki bir değişkene dışarıdan değer atar
	 *
	 * @param mixed $var
	 * @param mixed $newVal
	 */
	function set( $var, $newVal ) {
		$this->$var		=	$newVal;
	}
}
?>
