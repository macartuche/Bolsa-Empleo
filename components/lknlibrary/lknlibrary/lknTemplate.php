<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


class lknTemplate {
    private $vars; // Holds all the template variables
    
    private $template_folder;
    

    /**
     * Constructor
     *
     */
    function __construct($template_folder='default') {
    	$this->template_folder=$template_folder;
    }

    /**
     * Set a template variable.
     */
    function set($name, $value) {
        $this->vars[$name] = $value;
    }


    /**
     * Open, parse, and return the template file.
     *
     * @param $file string : the template file name
     */
    function fetch($file){    	
		global $_lknBaseFramework,$option;
	   		// Test if template override exists in joomla's template folder
    		$site_tamplate=$_lknBaseFramework->getTemplate();    		

    		$component_template=$this->template_folder;
    		
    		
    		$overridePath	= JOOMLA_ROOT . LKN_DS . 'templates' . LKN_DS . $site_tamplate. LKN_DS . 'html';
			$template	= COMPONENT_PATH_FRONT . LKN_DS . 'templates' . LKN_DS . $component_template . LKN_DS . $file;
   
    		// Test override path first
    		if( file_exists( $overridePath . LKN_DS . $option . LKN_DS . $file) )
    		{
    			// Load the override template.
				$file	= $overridePath . LKN_DS . $option . LKN_DS . $file;
			}else if( file_exists( $template ) )
    		{
	   			// If override fails try the template set in config
				$file	= $template;
    		} else
    		{	
    			// We assume to use the default template
    			$file	= COMPONENT_PATH_FRONT . LKN_DS . 'templates' . LKN_DS . 'default' . LKN_DS . $file;
			}
			
    	
		if($this->vars){
			extract($this->vars, EXTR_REFS);          // Extract the vars to local namespace
		}
		
        ob_start();                    // Start output buffering
        require($file);                // Include the file
        $contents = ob_get_contents(); // Get the contents of the buffer
        ob_end_clean();                // End buffering and discard
        return $contents;              // Return the contents
        
        //TODO: file caching olayı nereye gelecek?
    }
}
?>