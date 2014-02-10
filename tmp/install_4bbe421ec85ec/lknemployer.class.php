<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class lknJobsLknemployerFront {
	
	/**
	 * 
	 * @var array
	 */
	private $_params=array();
	function __construct($params){
		$this->_params=$params;
		
	}
	
	/**
	 * works before employer panel is loaded
	 *
	 */
	function onBeforeEmployerPanelLoaded(){
		
	}
	
	/**
	 * works after company data is pulled in employer panel
	 *
	 * @param object $rows
	 */
	function onAfterCompanyDataPulled(&$rows){
		//$rows[0]->title='This title has been setted from the sample plugin for the 1th company name';
	}
	
	/**
	 * works employer panel is fully loaded
	 *
	 */
	function onAfterEmployerPanelLoaded(){
		
	}

	
	/**
	 * works before new job form is loaded
	 *
	 */
	function onBeforeNewJobFormLoaded(){
		
	}
	
	/**
	 * works after credit data is pulled from the database.
	 *
	 * @param object $credit_data
	 */
	function onAfterNewJobCreditDataPulled(&$credit_data){
		//$credit_data is the object which holds the credit data
		//for example, $credit_data->credits is the active credit count of active user
	}
	
	/**
	 * works after the new job form is fuly loaded
	 *
	 */
	function onAfterNewJobFormLoaded(){
		
	}
	
	/**
	 * works after the job data is pulled for editing
	 *
	 * @param object $row
	 */
	function onAfterEditJobDataPulled(&$row){
		//$row->title will give the job title which pulled for editing
	}
	
	/**
	 * works after job editing form is loaded
	 *
	 */
	function onAfterEditJobFormLoaded(){
		
	}
	
	/**
	 * works before saving the job
	 *
	 */
	function onBeforeJobSave(){
		
	}
	
	/**
	 * works if the employer is choosen to save job as draft
	 *
	 * @param integer $id
	 */
	function onAfterJobSaveAsDraft($id){
		//$id the job id which inserted to the database
	}
	
	/**
	 * works after successful job saving with credit system
	 *
	 * @param integer $id
	 */
	function onAfterJobSavingWithCreditSystem($id){
		
	}
	
	/**
	 * user tries to save job but he has no credit to save the job
	 *
	 * @param integer $id
	 */
	function onAfterJobSavingAsDraftWithCreditSystem($id){
		
	}
	
	/**
	 * works after successful job saving without credit system
	 *
	 * @param integer $id
	 */
	function onAfterJobSavingWithoutCreditSystem($id){
		
	}
	
	/**
	 * works saving job as draft
	 *
	 * @param integer $id
	 */
	function onAfterJobSave($id){
		//$id the job id which inserted to the database
		/**
		 * this method will be called on after job saving.
		 */
	}
	
	function onBeforeUpdateJob(){
		
	}
	
	/**
	 * user updates the job as a draft which is a draft job. updating draft as draft (that means user wants to continue working on text)
	 *
	 * @param integer $id
	 */
	function onAfterJobUpdateAsDraft($id){
		
	}
	
	/**
	 * works after succesful update . that means user has used his credits for one time or admin is published this job from admin panel
	 *
	 * @param integer $id
	 */
	function onAfterJobUpdateWithCreditSystem($id){
		
	}
	
	/**
	 * works after unsuccessful update (user tries to publish a job which was a draft job perviously but he has no credit to do this)
	 *
	 * @param integer $id
	 */
	function onAfterJobUpdateWithCreditSystemNoSuccess($id){
		
	}
	
	/**
	 * works after a successfull update without using credit system
	 *
	 * @param integer $id
	 */
	function onAfterJobUpdateWithoutCreditSystem($id){
		
	}
	
	/**
	 * works after job update
	 * 
	 * IF YOU THINK THAT THERE IS TOO MANY UPDATE, WE CAN SUGGEST YOU TO WRITE YOUR CODES HERE
	 * 
	 * BECAUSE THIS METHOD WILL WORK AFTER EVERY UPDATE. THIS METHOD WILL NOT CARE CREDIT SYSTEM OR DRAFT OPTIONS
	 * 
	 *
	 * @param integer $id
	 */
	function onAfterJobUpdate($id){
		
	}
	
	/**
	 * works before new company form is loaded
	 *
	 */
	function onBeforeNewCompanyLoaded(){
		
	}
	
	/**
	 * works after new company form is loaded
	 *
	 */
	function onAfterNewCompanyLoaded(){
		
	}
	
	/**
	 * works before saving new company
	 *
	 */
	function onBeforeNewCompanySave(){
		
	}
	
	/**
	 * works after saving the company
	 *
	 * @param integer $id
	 */
	function onAfterNewCompanySave($id){
		
	}
	
	/**
	 * works before company editing form is loaded
	 *
	 * @param object $row
	 */
	function onBeforeEditCompanyLoaded(&$row){
		
	}
	
	/**
	 * works after company editing form is loaded
	 *
	 */
	function onAfterEditCompanyLoaded(){
		
	}
	
	/**
	 * works before updating company
	 *
	 * @param integer $id
	 */
	function onBeforeUpdateCompany($id){
		
	}
	
	/**
	 * works after updating company
	 *
	 * @param integer $id
	 */
	function onAfterUpdateCompany($id){
		
	}
	
	/**
	 * works before employer to see the resume
	 *
	 * @param array $f
	 */
	function onResumeView($f){
		if ($task=='edit_employer_application') {
			//$task=$f[0];
			//$name=$f[1]; name of the field
			//$id=$f[2];id of the resume
			//$application_id=$f[3]; application id
			//$value=$f[4]; field value . user is entered this value to the resume
			//return '0';Jobs! will hide the field if you send 0 (zero)
			//return '';Jobs! will hide the field if you send an empty value
			//return 'My Value';Jobs! will show "My Value" for the $name named field
		}elseif ($task=='view_resume' || $task=='print_resume'){
			//$task=$f[0];
			//$name=$f[1]; name of the field
			//$id=$f[2];id of the resume
			//$value=$f[3]; field value . user is entered this value to the resume
			//return '0';Jobs! will hide the field if you send 0 (zero)
			//return '';Jobs! will hide the field if you send an empty value
			//return 'My Value';Jobs! will show "My Value" for the $name named field
		}
	}
	
	function onBeforeSendingEmail(){
		
	}

}
?>