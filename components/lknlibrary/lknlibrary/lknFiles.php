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
 * dosya sistemi
 *
 */
class lknFiles {
	
	function __construct()
	{
		
	}
	
	/**
	 * Makes directory and returns BOOL(TRUE) if exists OR made.
	 *
	 * @param  $path Path name
	 * @return bool
	 */
	function rmkdir($path, $mode = 0755) {
	    $path = rtrim(preg_replace(array("/\\\\/", "/\/{2,}/"), "/", $path), "/");
	    $e = explode("/", ltrim($path, "/"));
	    if(substr($path, 0, 1) == "/") {
	        $e[0] = "/".$e[0];
	    }
	    
	    $c = count($e);
	    $cp = $e[0];
	    for($i = 1; $i < $c; $i++) {
	        if(!is_dir($cp) && !@mkdir($cp, $mode)) {
	            return false;
	        }
	        $cp .= "/".$e[$i];
	    }
	    return @mkdir($path, $mode);
	}

	function is_dir( $filename ) {

		return is_dir( $filename );

	}

	

	/**

	 * DIRECTORY LISTING METHODS:

	 */	

	function opendir( $path, $context = null ) {

			return ( is_null( $context ) ? opendir( $path ) : opendir( $path, $context ) );
	}
	
	function dirlist($dir, $bool = "dirs"){
	   $truedir = $dir;
	   $dir = scandir($dir);
	   if($bool == "files"){ // dynamic function based on second pram
	      $direct = 'is_dir';
	   }elseif($bool == "dirs"){
	      $direct = 'is_file';
	   }
	   
	   foreach($dir as $k => $v){
	      if(($direct($truedir.$dir[$k])) || $dir[$k] == '.' || $dir[$k] == '..' ){
	         unset($dir[$k]);
	      }
	   }
	   $dir = array_values($dir);
	   return $dir;
	}

	function closedir( $dir_handle ) {
			closedir( $dir_handle );
	}
	/**
	 * FILES/DIRECTORY METHODS:
	 */
	function rename( $old_name, $new_name, $context = null ) {

			return ( is_null( $context ) ? rename( $old_name, $new_name ) : rename( $old_name, $new_name, $context ) );
		
	}
	function file_exists( $filename ) {
			return file_exists( $filename );
	}
	/**
	 * FILES METHODS:
	 */
	function is_writable( $filename ) {

			return is_writable( $filename );
		
	}
	function is_file( $filename ) {
			return is_file( $filename );
	}
	function chmod( $pathname, $mode ) {

			return chmod( $pathname, $mode );
		
	}
	function copy( $source, $dest, $context = null ) {

			return ( is_null( $context ) ? copy( $source, $dest ) : copy( $source, $dest, $context ) );
		
	}
	function unlink( $filename, $context = null ) {
			return ( is_null( $context ) ? unlink( $filename ) : unlink( $filename, $context ) );
	}
	function file_put_contents( $file, $data, $flags = null, $context = null ) {
		if( is_callable( 'file_put_contents' ) ) {
			return ( is_null( $context ) ? file_put_contents( $file, $data, $flags ) : file_put_contents( $file, $data, $flags, $context ) );
		} else {
			// php 4 emulation:
			// define('FILE_APPEND', 1);
			$mode				=	( ( $flags == 1 ) || ( strtoupper( $flags ) == 'FILE_APPEND' ) ) ? 'a' : 'w';
			$f					=	@fopen( $file, $mode );
			if ( $f !== false) {
				if ( is_array( $data ) ) {
					$data		=	implode( '', $data );
				}
				$bytes_written	=	fwrite( $f, $data );
				fclose( $f );
				if ( ( $bytes_written === false ) && ( $mode == 'w' ) ) {
					@unlink( $file );
				}
				return $bytes_written;
			} else {
				return false;
			}
		}
	}
	function move_uploaded_file( $path, $new_path ) {

			return move_uploaded_file( $path, $new_path );
		
	}
	
	/**
	 * bir klasörü ve içeriğini başka bir klasöre taşır
	 *
	 * @param string $source:testcopy/one-c/two-a
	 * @param string $dest:testcopy/one-4/two-5
	 * @return boolen
	 */
	function copy_folder($source, $dest)
	{
	    // Check for symlinks
	    if (is_link($source)) {
	        return symlink(readlink($source), $dest);
	    }
	 
	    // Simple copy for a file
	    if (is_file($source)) {
	        return copy($source, $dest);
	    }
	 
	    // Make destination directory
	    if (!is_dir($dest)) {
	        mkdir($dest);
	    }
	 
	    // Loop through the folder
	    $dir = dir($source);
	    while (false !== $entry = $dir->read()) {
	        // Skip pointers
	        if ($entry == '.' || $entry == '..') {
	            continue;
	        }
	 
	        // Deep copy directories
	        lknFiles::copy_folder("$source/$entry", "$dest/$entry");
	    }
	 
	    // Clean up
	    $dir->close();
	    return true;
	}
	
	/**
	 * bir dizini altına ne var ne yoksa hepsiyle diler. TİKKAT ET :D
	 *
	 * @param string $dirname
	 * @return mixed
	 */
	function remove_directory($dirname){
	    // Sanity check
	    if (!file_exists($dirname)) {
	        return false;
	    }
	 
	    // Simple delete for a file
	    if (is_file($dirname) || is_link($dirname)) {
	        return unlink($dirname);
	    }
	 
	    // Loop through the folder
	    $dir = dir($dirname);
	    while (false !== $entry = $dir->read()) {
	        // Skip pointers
	        if ($entry == '.' || $entry == '..') {
	            continue;
	        }
	 
	        // Recurse
	        lknFiles::remove_directory($dirname . DIRECTORY_SEPARATOR . $entry);
	    }
	 
	    // Clean up
	    $dir->close();
	    return rmdir($dirname);
	}

	/**
	* belirtilen dizideki resim dosyalarını bulur
	*
 	* @param string $dir : : kontrol edilecek dizin
	* @param string $ext : bakılacak uzantı
	* @return array
	*/

	function findImages($dir,$ext=array('jpeg','jpg','png','gif'))
	{
		  $dir = $this->opendir($dir);
		  $files=array();
		  $fileChunks=array();
		  while(false != ($file = readdir($dir)))
		  {
		    if(($file != ".") and ($file != ".."))
		    {
		      if ($ext!="" &&isset($ext)) {
		      	$fileChunks = explode(".", $file);
		      		if (isset($fileChunks[1])) {
		      			if(in_array($fileChunks[1],$ext)){      
			    			$files[$file]=$file;
				    	}
		      		}
		      	
		      }
		    }
		  }
		  $this->closedir($dir);
		  return $files;
	}
	
	/**
	 * belirtilen dizideki, belli bir uzantıya
	 *
 	 * @param string $dir : : kontrol edilecek dizin
	 * @param string $ext : bakılacak uzantı
	 * @return array

	 */

	function findFiles($dir,$ext='')
	{
		  $dir = $this->opendir($dir);
		  $files=array();
		  while(false != ($file = readdir($dir)))
		  {
		    if(($file != ".") and ($file != ".."))
		    {
		      if ($ext!="" &&isset($ext)) {
		      	$fileChunks = explode(".", $file);
		      	if (is_array($ext)) {
				    if(in_array($fileChunks[1],$ext))
			    		{      
			    			$files[$fileChunks[0]]=$fileChunks[0];
				    	}		      		
		      	}else 
		      	{
					    if($fileChunks[1] == $ext)
					    {      
					    	$files[$fileChunks[0]]=$fileChunks[0];
					    }
		      	}
		      }else 
		      {

					$files[]=$file;	
					
		      }
		    }
		  }
		  $this->closedir($dir);
		  return $files;
	}
	/**
	 * bir dizindeki text dosyasını okur
	 *
	 * @param string $file: dosya adı. dosyaadi.txt, license.html gibi
	 * @param string $path : dosya yolu. /joomla-root/file/folder/ . '/' ile bitmeli
	 * @return text
	 */
	function readTextFile($file,$path)
	{
		
		$myFile=$path . $file;
		$fh = fopen($myFile, 'r');
		$theData = fread($fh, filesize($myFile));
		fclose($fh);
		return $theData;
	}
	
	/**
	 * dosyayı bir klasöre radom isim oluşturarak upload eder
	 *
	 * @param string $field_name: upload için alan adı
	 * @param string $folder:upload edilecek folder
	 * @param string $allowed_ext:hangi dosya uzantılarına izin veriliyor
	 * @param integer $max_size:izin verilen maksimum boyut
	 * @return boolen|string : eğer upload işlemi başarılıysa true, değilse hata mesajı döner
	 */
	function upload2($field_name,$folder,$allowed_ext,$max_size,$prefix='')
	{
		global $_config,$_lknBaseFramework;
		
		$error='';
		
		$upload_folder=$_lknBaseFramework->lknGetPath('root');
		$upload_folder=$upload_folder . str_replace('/',LKN_DS,$folder);
		
		$file='';
		if ($prefix!='') {
			$file=$upload_folder . $prefix .  $_FILES[$field_name]["name"];
		}else 
		{
			$file=$upload_folder . $_FILES[$field_name]["name"];
		}
				
		$document_size=$_FILES[$field_name]["size"] / 1024; //Kb
		
		if($document_size > $max_size){
			$error.= 'File size too large. ';
		}
		
		if(file_exists($file)){
			$error.= 'File exist';
		}
		
		$allowed_ext=explode(',',$allowed_ext);
		
		$fileChunks = explode(".", $_FILES[$field_name]["name"]);
		
		if(!in_array($fileChunks[count($fileChunks)-1],$allowed_ext)){
			$error.= 'This file type is not allowed. ';
		}
		
//		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
			
		if ($error=='')
		{
			move_uploaded_file($_FILES[$field_name]["tmp_name"],$file);
			return TRUE;
		}else {
			return $error;
		}
					
//		if ($_FILES[$field_name]["error"] > 0) {
//			
//		}else 
//		{
//			return true;
//		}
	}
	
		/**
	 * dosyayı bir klasöre radom isim oluşturarak upload eder
	 *
	 * @param string $field_name: upload için alan adı
	 * @param string $folder:upload edilecek folder
	 * @param string $allowed_ext:hangi dosya uzantılarına izin veriliyor
	 * @param integer $max_size:izin verilen maksimum boyut
	 * @param array/null
	 * @param string $file : dosya adı
	 * @return boolen|string : eğer upload işlemi başarılıysa true, değilse hata mesajı döner
	 * 
	 */
	function upload($field_name,$folder,$allowed_ext,$max_size,$file,$params=''){
		global $_config,$_lknBaseFramework;

		$upload_folder=$_lknBaseFramework->lknGetPath('root');
		$upload_folder=$upload_folder . str_replace('/',LKN_DS,$folder);
		//print_r($params);

		//gelen parametreleri işlemeye başla
		if ($params!='') {	
			if (isset($params['image_resize_active'])) {
				$image_resize=$params['image_resize_active'];
				$width=$params['width'];
				$height=$params['height'];
			}else {
				$image_resize='0';
			}
				
			if (isset($params['image_watermark_text'])) {
				$image_text=$params['image_watermark_text'];
				$image_watermark_text_color=$params['image_watermark_text_color'];
				$image_watermark_text_background_color=$params['image_watermark_text_background_color'];
			}else {
				$image_text='';
			}
		}else {
			$image_text='';
			$image_resize='';
		}
		//gelen parametreleri işlemeye başla
		
		
		$upload_class=JOOMLA_ROOT . LKN_DS . 'components' . LKN_DS . 'lknlibrary' . LKN_DS . 'upload_class' . LKN_DS;
		require_once($upload_class . 'class.upload.php');
		
		  $handle = new upload($_FILES[$field_name]);
		  if ($handle->uploaded) {
		  		
		      $handle->file_new_name_body 	= $file;
		      $handle->file_auto_rename = 	FALSE; 
		      	if ($image_resize=='1') {
		      		$handle->image_ratio = true;
		      		$handle->image_resize = true;
		      		$handle->image_x = $width;
		      		$handle->image_y = $height;
		      	}
		      	
		      	if ($image_text!='') {
		      		$handle->image_text=$image_text;
		      		$handle->image_text_color=$image_watermark_text_color;
		      		$handle->image_text_background=$image_watermark_text_background_color;
		      		$handle->image_text_position="BLR";
		      	}
		      	
		      $handle->file_max_size 		= 1024*$max_size; // 1KB
		      $handle->allowed = $allowed_ext;

		      $handle->process($upload_folder);

		      if ($handle->processed) {		      
		          $handle->clean();
		          return '1';
		      } else {
		          return $handle->error;
		      }
		  }
		  
		 

	}
	
}

	/**
	 * upload class'ı için  array oluşturur
	 *
	 * @param string $text
	 * @param string $type
	 * @return array
	 */
	function lknCreateArrayForUpload($text,$type='image'){
		
		$upload_array=array();
		$text=explode(',',$text);
			foreach ($text as $value)
			{
				$upload_array[]="$type/$value";
			}
			//print_r($upload_array);
		return $upload_array;
	}


function lknGetFilenameForUpload($file){
	$file=explode('.',$file);
	
	$file_2=$file[count($file)-1];
	
	$prefix = substr ( md5(uniqid(rand(),1)), 3, 10) . '_';
	
	
	$file_1 = str_replace(array(' ', '-'), array('_','_'), $file[0]) ;
    $file_1 = ereg_replace('[^A-Za-z0-9_]', '', $file_1) ;
    $file_1=$prefix . $file_1;
    $file_1=lknText::strToLower($file_1);
    
    $file_data=array($file_1,$file_2);
	
	return $file_data;
}

class lknHttpDownload {
	
		/**
	* @access public
	* @var string
	*/
    var $path 			= null;
	/**
	* @access public
	* @var string
	*/
    var $name 			= null;
	/**
	* @access public
	* @var string
	*/
    var $mime 			= null;
    /**
	* @access public
	* @var string
	*/
    var $ext 			= null;

    /**
	* @access public
	* @var string
	*/
    var $size			= null;

    /**
	* @access public
	* @var string
	*/
    var $date			= null;

    /**
	* @access private
	* @var string
	*/
    var $_err    		= null;
	
	function __construct($path,$name){
			$path = lknHttpDownload::mosPathName( $path );
			if (!is_dir( $path )) {
				$path = dirname( $path );
				// Make sure there's a trailing slash in the path
	            $path = lknHttpDownload::mosPathName($path);
			}
			
			$this->name = trim($name);
			$this->path = $path;
						
			$this->size = @filesize($this->path.$this->name);
			$this->mime	= lknMIMEMagic::filenameToMIME($this->name, false);
	

	}
	

	/**
	*    Downloads a file from the server
	*
	*    @desc This is the function handling files downloading using HTTP protocol
	*    @param void
	*    @return void
	*/

    function download($inline = false)
    {
		// Fix [3164]
		while (@ob_end_clean());


		$fsize = @filesize($this->path.$this->name);
		$mod_date = date('r', filemtime( $this->path.$this->name ) );

		$cont_dis = $inline ? 'inline' : 'attachment';

		// required for IE, otherwise Content-disposition is ignored
		if(ini_get('zlib.output_compression'))  {
			ini_set('zlib.output_compression', 'Off');
		}

        header("Pragma: public");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Expires: 0");

        header("Content-Transfer-Encoding: binary");
		header('Content-Disposition:' . $cont_dis .';'
			. ' filename="' . $this->name . '";'
			. ' modification-date="' . $mod_date . '";'
			. ' size=' . $fsize .';'
			); //RFC2183
        header("Content-Type: "    . $this->mime );			// MIME type
        header("Content-Length: "  . $fsize);

        if( ! ini_get('safe_mode') ) { // set_time_limit doesn't work in safe mode
		    @set_time_limit(0);
        }

 		// No encoding - we aren't using compression... (RFC1945)
		//header("Content-Encoding: none");
		//header("Vary: none");


        $this->readfile_chunked($this->path.$this->name);
        // The caller MUST 'die();'
    }
    
    function readfile_chunked($filename,$retbytes=true)
    {
   		$chunksize = 1*(1024*1024); // how many bytes per chunk
   		$buffer = '';
   		$cnt =0;
   		$handle = fopen($filename, 'rb');
   		if ($handle === false) {
       		return false;
   		}
   		while (!feof($handle)) {
       		$buffer = fread($handle, $chunksize);
       		echo $buffer;
			@ob_flush();
			flush();
       		if ($retbytes) {
           		$cnt += strlen($buffer);
       		}
   		}
       $status = fclose($handle);
   	   if ($retbytes && $status) {
       		return $cnt; // return num. bytes delivered like readfile() does.
   		}
   		return $status;
	}
    
	function mosPathName($p_path,$p_addtrailingslash = true) {
	    $retval = "";
	  
	      $isWin = (substr(PHP_OS, 0, 3) == 'WIN');
	  
	      if ($isWin)    {
	          $retval = str_replace( '/', '\\', $p_path );
	          if ($p_addtrailingslash) {
	              if (substr( $retval, -1 ) != '\\') {
	                  $retval .= '\\';
	              }
	          }
	          // Remove double \\
	          $retval = str_replace( '\\\\', '\\', $retval );
	      } else {
	          $retval = str_replace( '\\', '/', $p_path );
	          if ($p_addtrailingslash) {
	              if (substr( $retval, -1 ) != '/') {
	                  $retval .= '/';
	              }
	          }
	          // Remove double //
	          $retval = str_replace('//','/',$retval);
	      }
	  
	      return $retval;
  }
    
    
} 

    class lknMIMEMagic {
    /**
    * Returns a copy of the MIME extension map.
    *
    * @access private
    * @return array The MIME extension map.
    */
    function &_getMimeExtensionMap()
    {
        static $mime_extension_map;

        if (!isset($mime_extension_map)) {
            require dirname(__FILE__) . '/mime.mapping.php';
        }

        return $mime_extension_map;
    }

    /**
    * Returns a copy of the MIME magic file.
    *
    * @access private
    * @return array The MIME magic file.
    */
    function &_getMimeMagicFile()
    {
        static $mime_magic;

        if (!isset($mime_magic)) {
            require dirname(__FILE__) . '/mime.magic.php';
        }

        return $mime_magic;
    }

    /**
    * Attempt to convert a file extension to a MIME type
    *
    * If we cannot map the file extension to a specific type, then
    * we fall back to a custom MIME handler 'x-extension/$ext'
    *
    * @access public
    * @param string $ext The file extension to be mapped to a MIME type.
    * @return string The MIME type of the file extension.
    */
    function extToMIME($ext)
    {
        if (empty($ext)) {
            return 'application/octet-stream';
        } else {
            $ext = lknText::strToLower($ext);
            $map = &lknMIMEMagic::_getMimeExtensionMap();
            $pos = 0;
            while (!isset($map[$ext]) && $pos !== false) {
                $pos = strpos($ext, '.');
                if ($pos !== false) {
                    $ext = substr($ext, $pos + 1);
                }
            }

            if (isset($map[$ext])) {
                return $map[$ext];
            } else {
                return 'x-extension/' . $ext;
            }
        }
    }

    /**
    * Attempt to convert a filename to a MIME type, based on the
    * global Horde and application specific config files.
    *
    * @access public
    * @param string $filename The filename to be mapped to a MIME type.
    * @param optional $ boolean $unknown  How should unknown extensions be handled?
    *                                    If true, will return 'x-extension/xtd' types.
    *                                    If false, will return 'application/octet-stream'.
    * @return string The MIME type of the filename.
    */
    function filenameToMIME($filename, $unknown = true)
    {
        $pos = strlen($filename) + 1;
        $type = '';

        $map = &lknMIMEMagic::_getMimeExtensionMap();
        for ($i = 0;
            $i <= $map['__MAXPERIOD__'] &&
            strrpos(substr($filename, 0, $pos - 1), '.') !== false;
            $i++) {
            $pos = strrpos(substr($filename, 0, $pos - 1), '.') + 1;
        }
        $type = lknMIMEMagic::extToMIME(substr($filename, $pos));

        if (empty($type) ||
                (!$unknown && (strpos($type, 'x-extension') !== false))) {
            return 'application/octet-stream';
        } else {
            return $type;
        }
    }

    /**
    * Attempt to convert a MIME type to a file extension
    *
    * If we cannot map the type to a file extension, we return false.
    *
    * @access public
    * @param string $type The MIME type to be mapped to a file extension.
    * @return string The file extension of the MIME type.
    */
    function MIMEToExt($type)
    {
        if (empty($type)) {
            return false;
        }

        $key = array_search($type, lknMIMEMagic::_getMimeExtensionMap());
        if ($key === false) {
            list($major, $minor) = explode('/', $type);
            if ($major == 'x-extension') {
                return $minor;
            }
            if (strpos($minor, 'x-') === 0) {
                return substr($minor, 2);
            }
            return false;
        } else {
            return $key;
        }
    }

    /**
    * Uses variants of the UNIX "file" command to attempt to determine the
    * MIME type of an unknown file.
    *
    * @access public
    * @param string $path The path to the file to analyze.
    * @return string The MIME type of the file.  Returns false if either
    *                  the file type isn't recognized or the file command is
    *                  not available.
    */
    function analyzeFile($path)
    {
        /* If the PHP Mimetype extension is available, use that. */
        if (Util::extensionExists('fileinfo')) {
            $res = finfo_open(FILEINFO_MIME);
            $type = finfo_file($res, $path);
            finfo_close($res);
            return $type;
        } else {
            /* Use a built-in magic file. */
            $mime_magic = &lknMIMEMagic::_getMimeMagicFile();
            if (!($fp = @fopen($path, 'rb'))) {
                return false;
            }
            foreach ($mime_magic as $offset => $odata) {
                foreach ($odata as $length => $ldata) {
                    @fseek($fp, $offset, SEEK_SET);
                    $lookup = @fread($fp, $length);
                    if (!empty($ldata[$lookup])) {
                        fclose($fp);
                        return $ldata[$lookup];
                    }
                }
            }
            fclose($fp);
        }

        return false;
    }

    /**
    * Uses variants of the UNIX "file" command to attempt to determine the
    * MIME type of an unknown byte stream.
    *
    * @access public
    * @param string $data The file data to analyze.
    * @return string The MIME type of the file.  Returns false if either
    *                  the file type isn't recognized or the file command is
    *                  not available.
    */
    function analyzeData($data)
    {
        /* Use a built-in magic file. */
        $mime_magic = &lknMIMEMagic::_getMimeMagicFile();
        foreach ($mime_magic as $offset => $odata) {
            foreach ($odata as $length => $ldata) {
                $lookup = substr($data, $offset, $length);
                if (!empty($ldata[$lookup])) {
                    return $ldata[$lookup];
                }
            }
        }

        return false;
    }
}
?>