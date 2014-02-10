<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class lknJobsLknworkerAdmin {
	/**
	 * 
	 * @var array
	 */
	private $_params=array();
	function __construct($params){
		$this->_params=$params;
		
	}
    /**
     * Enter description here...
     *
     */
    function showConfig() {
    	lknTabs::startTab('Example Worker Plugin');
    		$this->test_tab();
    		//$this->test_tab2('Test 2 Tab Title');
    		//$this->test_tab3('Test 3 Tab Title');
    	lknTabs::endTab();

    }
    
    function test_tab(){
    	$params=$this->_params;
    	?>
			Here comes the plugin parameters<br />
			You can the plugin parameters with $this->_params in this tab
			<?php 
    }

}
?>