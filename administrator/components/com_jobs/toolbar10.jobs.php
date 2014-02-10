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



class lknJobsToolbar {

		

	function controlPanel()

	{

	}

	function list_fields() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        JToolBarHelper::addNew( 'new_field', 'New Field');//

        mosMenuBar::spacer();

        JToolBarHelper::trash('delete_field','Delete');//

        mosMenuBar::spacer();

        JToolBarHelper::editListX('edit_field','Edit');//

        mosMenuBar::spacer();

        JToolBarHelper::publishList ('publish_field', 'Publish');//

        mosMenuBar::spacer();

        JToolBarHelper::publishList ('unpublish_field', 'UnPublish');

        mosMenuBar::spacer();

		JToolBarHelper::save('panel','Control Panel');//

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_field(){

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_field', 'Save' );//

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_and_new_field', 'Save & New' );

		mosMenuBar::spacer();

		JToolBarHelper::apply ( 'apply_field', 'Apply' );//

		mosMenuBar::spacer();

		JToolBarHelper::cancel ('list_fields','List Fields');//

		mosMenuBar::spacer();

		JToolBarHelper::save('panel','Control Panel');//

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_field(){

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		JToolBarHelper::save('update_field','Update');

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_as_new_field', 'Save as new' );

		mosMenuBar::spacer();

		JToolBarHelper::apply ( 'apply_field', 'Apply' );

		mosMenuBar::spacer();

		JToolBarHelper::cancel ('list_fields','List Fields');//

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'panel', 'Control Panel' );//

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_field_categories() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        JToolBarHelper::addNew( 'new_field_category', 'Add new catefory');//

        mosMenuBar::spacer();

        JToolBarHelper::trash('delete_field_category','Delete');

        mosMenuBar::spacer();

        JToolBarHelper::editListX('edit_field_category','Edit');//

        mosMenuBar::spacer();

        JToolBarHelper::publishList ('publish_field_category', 'Publish');

        mosMenuBar::spacer();

        JToolBarHelper::publishList ('unpublish_field_category', 'UnPublish');

        mosMenuBar::spacer();

		JToolBarHelper::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_field_category(){

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_field_category', 'Save' );//

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_and_new_field_category', 'Save & New' );

		mosMenuBar::spacer();

		JToolBarHelper::apply ( 'apply_field_category', 'Apply' );

		mosMenuBar::spacer();

		JToolBarHelper::cancel ('list_field_categories','List Categories');

		mosMenuBar::spacer();

		JToolBarHelper::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_field_category(){

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		JToolBarHelper::save('update_field_category','Update');

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_as_new_field_category', 'Save as new' );

		mosMenuBar::spacer();

		JToolBarHelper::apply ( 'apply_field_category', 'Apply' );

		mosMenuBar::spacer();

		JToolBarHelper::cancel ('list_field_categories','List Categories');

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'panel', 'Control Panel' );

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_files() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		JToolBarHelper::addNew( 'new_file', 'Add new file');

		mosMenuBar::spacer();

        JToolBarHelper::trash('delete_file','Delete');

        mosMenuBar::spacer();

        JToolBarHelper::editListX('edit_file','Edit');//

        mosMenuBar::spacer();

        JToolBarHelper::publishList ('publish_file', 'Publish');//

        mosMenuBar::spacer();

        JToolBarHelper::publishList ('unpublish_file', 'UnPublish');//

        mosMenuBar::spacer();

		JToolBarHelper::save('panel','Control Panel');//

		mosMenuBar::spacer();

		mosMenuBar::endTable();	

	}

	

	function new_file()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_file', 'Save' );

		mosMenuBar::spacer();

		JToolBarHelper::save ( 'save_and_new_file', 'Save & New' );

		mosMenuBar::spacer();

		JToolBarHelper::apply ( 'apply_file', 'Apply' );

		mosMenuBar::spacer();

		JToolBarHelper::cancel ('list_files','List Files');

		mosMenuBar::spacer();

		JToolBarHelper::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();	

	}

	

	function edit_file()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_file','Update');

		mosMenuBar::spacer();

		mosMenuBar::apply ( 'apply_file', 'Apply' );

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_files','List Files');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'panel', 'Control Panel' );

		mosMenuBar::spacer();

		mosMenuBar::endTable();	

	}

	

	function list_categories() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_category', 'Add new catefory');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_category','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_category','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_category', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_category', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();	

	}

	

	function new_category()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_category', 'Save' );

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_and_new_category', 'Save & New' );

		mosMenuBar::spacer();

		mosMenuBar::apply ( 'apply_category', 'Apply' );

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_categories','List Categories');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_category()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_category','Update');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_category', 'Save as new' );//

		mosMenuBar::spacer();

		mosMenuBar::apply ( 'apply_category', 'Apply' );//

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_categories','List Categories');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'panel', 'Control Panel' );

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_countries() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_country', 'Add new country');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_country','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_country','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_country', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_country', 'Unpublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_country()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_country','Save');//

		mosMenuBar::spacer();

		mosMenuBar::save('save_and_new_country','Save & New');//

		mosMenuBar::spacer();

		mosMenuBar::apply ( 'apply_country', 'Apply' );//

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_countries','List Countries');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_country()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_country','Update');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_country', 'Save as new' );//

		mosMenuBar::spacer();

		mosMenuBar::apply ( 'apply_country', 'Apply' );//

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_countries','List Countries');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_employers() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_companies() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_company', 'Add new company');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_company','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_company','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_company', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_company', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_company()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_company','Save');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_and_new_company', 'Save & New' );//

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_company','Apply');//

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_companies','List Companies');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_company()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_company','Update');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_company', 'Save as new' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_company','Apply');

		mosMenuBar::spacer();

		mosMenuBar::trash('delete_company','Delete');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_companies','List Companies');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_jobs() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_job', 'Add new job');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_job','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_job','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_job', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_job', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_job()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_job','Save');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_and_new_job', 'Save & New' );//

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_job','Apply');//

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_jobs','List Jobs');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_job()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_job','Update');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_job', 'Save as new' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_job','Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_jobs','List Jobs');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_cover_letters() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_cover_letter', 'Add cover letter');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_cover_letter','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_cover_letter','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_cover_letter', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_cover_letter', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_cover_letter()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_cover_letter','Save');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_and_new_cover_letter', 'Save & New' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_cover_letter','Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_cover_letters','List Cover Letters');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');//

		mosMenuBar::spacer();

		mosMenuBar::back();//

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_cover_letter()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_cover_letter','Update');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_cover_letter', 'Save as new' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_cover_letter','Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_cover_letters','List Cover Letters');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_status() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_status', 'Add new status');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_status','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_status','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_status', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_status', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_status()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_status','Save');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_and_new_status', 'Save & New' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_status','Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_status','List Application Status');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');//

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_status()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_status','Update');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_status', 'Save as new' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_status','Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_status','List Application Status');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}	



	function list_resumes() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_resume', 'Add resume');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_resume','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_resume','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_resume', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_resume', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_resume()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_resume','Save');//

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_and_new_resume', 'Save & New' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_resume','Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_resumes','List Resumes');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');//

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_resume()

	{

		$id=lknGetParamatre($_REQUEST,'cid');

		$url="index.php?option=com_jobs&id=$id&tmpl=component&action=admin&object=preview_resume";

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_resume','Update');

		mosMenuBar::spacer();

		mosMenuBar::save ( 'save_as_new_resume', 'Save as new' );

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_resume', $alt= 'Apply');

		mosMenuBar::spacer();

		mosMenuBar::preview ($url);

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_resumes','List Resumes');//

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_applications() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::trash('delete_application','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_application','Edit');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_application()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_application','Update');

		mosMenuBar::spacer();

		mosMenuBar::apply('apply_application', $alt= 'Apply');

		mosMenuBar::spacer();

		mosMenuBar::cancel ('list_applications','List Applications');

		mosMenuBar::spacer();

		mosMenuBar::save('send_mail_to_applicant','Send E-mail to Applicant');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_pending_credits() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::editListX('edit_pending_credit','Approve/Reject');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_pending_credit()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::apply('approve_pending_credit', $alt= 'Approve Credit');

		mosMenuBar::spacer();

		mosMenuBar::cancel ($task= 'reject_pending_credit', $alt= 'Reject Credit');

		mosMenuBar::spacer();

		mosMenuBar::save('list_pending_credits','List Pending Credits');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_credit_history() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::addNew('add_new_credit','Add new credit');

		mosMenuBar::spacer();

        mosMenuBar::editListX('edit_credit_history','Edit/View');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_credit_history()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_credit_history','Update');

		mosMenuBar::spacer();

		mosMenuBar::save('list_credit_history','List Credit History');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	

	function add_new_credit()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_credit','Save');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function credit_history_full_payment_detail()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('list_credit_history','List Credit History');

		mosMenuBar::spacer();		

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function list_email_templates() {

		mosMenuBar::startTable();

		mosMenuBar::spacer();

        mosMenuBar::addNew( 'new_email_template', 'Add new email template');

        mosMenuBar::spacer();

        mosMenuBar::trash('delete_email_template','Delete');

        mosMenuBar::spacer();

        mosMenuBar::editListX('edit_email_template','Edit');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('publish_email_template', 'Publish');

        mosMenuBar::spacer();

        mosMenuBar::publishList ('unpublish_email_template', 'UnPublish');

        mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function new_email_template()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_email_template','Save');

		mosMenuBar::spacer();

		mosMenuBar::save('list_email_templates','List Email Templates');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function edit_email_template()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('update_email_template','Update');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}

	

	function show_config()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('save_config','Update');

		mosMenuBar::spacer();

		mosMenuBar::save('panel','Control Panel');

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();

	}	

	

	

	function credits_menu()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('panel',_lkn_control_panel);

		mosMenuBar::spacer();

		mosMenuBar::back();	

		mosMenuBar::spacer();

		mosMenuBar::endTable();	

	}

	

	function license()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('panel',_lkn_control_panel);

		mosMenuBar::spacer();

		mosMenuBar::back();	

		mosMenuBar::spacer();

		mosMenuBar::endTable();		

	}	

	

	function credits()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('panel',_lkn_control_panel);

		mosMenuBar::spacer();

		mosMenuBar::back();	

		mosMenuBar::spacer();

		mosMenuBar::endTable();		

	}

	

	function support()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('panel',_lkn_control_panel);

		mosMenuBar::spacer();

		mosMenuBar::back();	

		mosMenuBar::spacer();

		mosMenuBar::endTable();		

	}

	

	function search_resume(){

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::addNew('resume_search_form','New Resume Search');

		mosMenuBar::spacer();

		mosMenuBar::save('panel',_lkn_control_panel);

		mosMenuBar::spacer();

		mosMenuBar::back();	

		mosMenuBar::spacer();

		mosMenuBar::endTable();		

	}

	

	function resume_search_form()

	{

		mosMenuBar::startTable();

		mosMenuBar::spacer();

		mosMenuBar::save('panel',_lkn_control_panel);

		mosMenuBar::spacer();

		mosMenuBar::back();

		mosMenuBar::spacer();

		mosMenuBar::endTable();			

	}

}	

?>

