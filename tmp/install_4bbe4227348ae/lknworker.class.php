<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class lknJobsLknworkerFront {
	
	/**
	 * 
	 * @var array
	 */
	private $_params=array();
	function __construct($params){
		$this->_params=$params;
		
	}
	
	/**
	 * works after resume data is pulled from the database
	 *
	 * @param object $params
	 */
	function onAfterResumeDataPulled(&$params){
		//$params: contains all resume data;
		
		
	}
	
	/**
	 * works after the worker panel printed to the screen
	 *
	 */
	function onAfterWorkerPanelLoaded(){
		
	}
	
	/**
	 * works before job seeker panel is loaded
	 *
	 */
	function onBeforeWorkerPanelLoaded(){
		
	}
	
	/**
	 * works before new resume form is loaded
	 *
	 */
	function onBeforeNewResumeFormLoaded(){
		
	}
	
	/**
	 * works after resume data is pulled for displaying on job seeker panel
	 *
	 * @param object $params
	 */
	function onAfterResumeDataPulled(&$params){
		
	}
	
	/**
	 * works before edit resume form is loaded
	 *
	 */
	function onBeforeEditResumeFormLoaded(){
		
	}
	
	/**
	 * works after resume data is pulled for editing
	 *
	 * @param object $params
	 */
	function onAfterResumeEditDataPulled(&$params){
		
	}
	
	/**
	 * works after resume fields are pulled from the database (new_resume, edit_resume, update_resume, save_resume)
	 *
	 * @param object $params
	 */
	function onAfterResumeFieldsPulled(&$params){
		//@todo: bu resume editleme, yeni resume, resume update öncesi çalışıcak
		/**
		 * new_resume: done
		 * edit_resume:done
		 * update_resume, save_resume
		 */
		
		
	}
	
	function onAfterEditResumeFormLoaded(){
		
	}
	
	/**
	 * works after resume form is fully loaded
	 *
	 */
	function onAfterResumeFormLoaded(){
		
	}
	
	function onBeforeSaveResume(){
		
	}
	
	function onAfterSaveResume($id){
		
	}
	
	function onAfterUpdateResume($id){
			
	}
	
	function onBeforeUpdateResume($id){
			
	}
	
	function onBeforeApplyJob(){
		
	}
	
	function onAfterApplySuccess(){
		
	}
	
	function onAfterApplyUnsuccess(){
		
	}
}
?>