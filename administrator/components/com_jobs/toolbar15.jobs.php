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

		JToolBarHelper::title( JText::_( 'Professional Job Management' ), 'plugin.png' );

	}

	

	function list_education_levels() {

		JToolBarHelper::title( 'List Education Levels', 'generic.png' );

        JToolBarHelper::addNew( 'new_education_level', 'Add New Education Level');

        JToolBarHelper::trash('delete_education_level','Delete');

        JToolBarHelper::editListX('edit_education_level','Edit');

        JToolBarHelper::publishList ('publish_education_level', 'Publish');

        JToolBarHelper::publishList ('unpublish_education_level', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_education_level()

	{

		JToolBarHelper::title ( 'Add new education level', 'systeminfo.png' );

		JToolBarHelper::save ( 'save_education_level', 'Save' );

		JToolBarHelper::save ( 'save_and_new_education_level', 'Save & New' );

		JToolBarHelper::apply ( 'apply_education_level', 'Apply' );

		JToolBarHelper::cancel ('list_education_levels','List Education Levels');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_education_level()

	{

		JToolBarHelper::title( 'Update Education Level', 'systeminfo.png' );

		JToolBarHelper::save('update_education_level','Update');

		JToolBarHelper::save ( 'save_as_new_education_level', 'Save as new' );

		JToolBarHelper::apply ( 'apply_education_level', 'Apply' );

		JToolBarHelper::cancel ('list_education_levels','List Education Levels');

		JToolBarHelper::save ( 'panel', 'Control Panel' );

	}

	

	function list_job_types() {

		JToolBarHelper::title( 'List Job Types', 'generic.png' );

        JToolBarHelper::addNew( 'new_job_type', 'Add New Job Type');

        JToolBarHelper::trash('delete_job_type','Delete');

        JToolBarHelper::editListX('edit_job_type','Edit');

        JToolBarHelper::publishList ('publish_job_type', 'Publish');

        JToolBarHelper::publishList ('unpublish_job_type', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_job_type()

	{

		JToolBarHelper::title ( 'Add new job type', 'systeminfo.png' );

		JToolBarHelper::save ( 'save_job_type', 'Save' );

		JToolBarHelper::save ( 'save_and_new_job_type', 'Save & New' );

		JToolBarHelper::apply ( 'apply_job_type', 'Apply' );

		JToolBarHelper::cancel ('list_job_types','List Job Types');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_job_type()

	{

		JToolBarHelper::title( 'Update Job Type', 'systeminfo.png' );

		JToolBarHelper::save('update_job_type','Update');

		JToolBarHelper::save ( 'save_as_new_job_type', 'Save as new' );

		JToolBarHelper::apply ( 'apply_job_type', 'Apply' );

		JToolBarHelper::cancel ('list_job_types','List Job Types');

		JToolBarHelper::save ( 'panel', 'Control Panel' );

	}

	

	

	function list_tools() {

		JToolBarHelper::title( 'List Jobs! Tools', 'generic.png' );

		JToolBarHelper::save('panel','Control Panel');//

	}

	

	function list_files() {

		JToolBarHelper::title( 'List Resume Files', 'generic.png' );

        JToolBarHelper::addNew( 'new_file', 'Add new file');

        JToolBarHelper::trash('delete_file','Delete');

        JToolBarHelper::editListX('edit_file','Edit');//

        JToolBarHelper::publishList ('publish_file', 'Publish');//

        JToolBarHelper::publishList ('unpublish_file', 'UnPublish');//

		JToolBarHelper::save('panel','Control Panel');//

	}

	

	function new_file()

	{

		JToolBarHelper::title ( 'Add new resume file', 'systeminfo.png' );

		JToolBarHelper::save ( 'save_file', 'Save' );

		JToolBarHelper::save ( 'save_and_new_file', 'Save & New' );

		JToolBarHelper::apply ( 'apply_file', 'Apply' );

		JToolBarHelper::cancel ('list_files','List Files');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_file()

	{

		JToolBarHelper::title( 'Update resume file', 'systeminfo.png' );

		JToolBarHelper::save('update_file','Update');

		JToolBarHelper::apply ( 'apply_file', 'Apply' );

		JToolBarHelper::cancel ('list_files','List Files');

		JToolBarHelper::save ( 'panel', 'Control Panel' );

	}

	

	function list_fields() {

		JToolBarHelper::title( 'List Resume Fields', 'generic.png' );

        JToolBarHelper::addNew( 'new_field', 'New Field');//

        JToolBarHelper::trash('delete_field','Delete');//

        JToolBarHelper::editListX('edit_field','Edit');//

        JToolBarHelper::publishList ('publish_field', 'Publish');//

        JToolBarHelper::publishList ('unpublish_field', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');//

	}

	

	function new_field(){

		JToolBarHelper::title ( 'Add Resume Field', 'systeminfo.png' );

		JToolBarHelper::save ( 'save_field', 'Save' );//

		JToolBarHelper::save ( 'save_and_new_field', 'Save & New' );

		JToolBarHelper::apply ( 'apply_field', 'Apply' );//

		JToolBarHelper::cancel ('list_fields','List Fields');//

		JToolBarHelper::save('panel','Control Panel');//

	}

	

	function edit_field(){

		JToolBarHelper::title( 'Update Resume Field', 'systeminfo.png' );

		JToolBarHelper::save('update_field','Update');

		JToolBarHelper::apply ( 'apply_field', 'Apply' );

		JToolBarHelper::cancel ('list_fields','List Fields');//

		JToolBarHelper::save ( 'panel', 'Control Panel' );//

	}

	

	function list_field_categories() {

		JToolBarHelper::title( 'List Resume Field Categories', 'generic.png' );

        JToolBarHelper::addNew( 'new_field_category', 'Add new catefory');//

        JToolBarHelper::trash('delete_field_category','Delete');

        JToolBarHelper::editListX('edit_field_category','Edit');//

        JToolBarHelper::publishList ('publish_field_category', 'Publish');

        JToolBarHelper::publishList ('unpublish_field_category', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_field_category(){

		JToolBarHelper::title ( 'Add Resume Field Category', 'systeminfo.png' );

		JToolBarHelper::save ( 'save_field_category', 'Save' );//

		JToolBarHelper::save ( 'save_and_new_field_category', 'Save & New' );

		JToolBarHelper::apply ( 'apply_field_category', 'Apply' );

		JToolBarHelper::cancel ('list_field_categories','List Categories');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_field_category(){

		JToolBarHelper::title( 'Update Resume Field Category', 'systeminfo.png' );

		JToolBarHelper::save('update_field_category','Update');

		JToolBarHelper::save ( 'save_as_new_field_category', 'Save as new' );

		JToolBarHelper::apply ( 'apply_field_category', 'Apply' );

		JToolBarHelper::cancel ('list_field_categories','List Categories');

		JToolBarHelper::save ( 'panel', 'Control Panel' );

	}

	

	

	function list_categories() {

		JToolBarHelper::title( 'List Categories', 'generic.png' );

        JToolBarHelper::addNew( 'new_category', 'Agregar una categoria');

        JToolBarHelper::trash('delete_category','Delete');

        JToolBarHelper::editListX('edit_category','Edit');

        JToolBarHelper::publishList ('publish_category', 'Publish');

        JToolBarHelper::publishList ('unpublish_category', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_category()

	{

		JToolBarHelper::title ( 'Add new category', 'systeminfo.png' );

		JToolBarHelper::save ( 'save_category', 'Save' );

		JToolBarHelper::save ( 'save_and_new_category', 'Save & New' );

		JToolBarHelper::apply ( 'apply_category', 'Apply' );

		JToolBarHelper::cancel ('list_categories','List Categories');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_category()

	{

		JToolBarHelper::title( 'Update category', 'systeminfo.png' );

		JToolBarHelper::save('update_category','Update');//

		JToolBarHelper::save ( 'save_as_new_category', 'Save as new' );//

		JToolBarHelper::apply ( 'apply_category', 'Apply' );//

		JToolBarHelper::cancel ('list_categories','List Categories');

		JToolBarHelper::save ( 'panel', 'Control Panel' );

	}

	

	function list_countries() {

		JToolBarHelper::title( 'List Company Countries', 'generic.png' );

        JToolBarHelper::addNew( 'new_country', 'Agregar un pais');

        JToolBarHelper::trash('delete_country','Delete');

        JToolBarHelper::editListX('edit_country','Edit');

        JToolBarHelper::publishList ('publish_country', 'Publish');

        JToolBarHelper::publishList ('unpublish_country', 'Unpublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_country()

	{

		JToolBarHelper::title( 'Add new country', 'systeminfo.png' );

		JToolBarHelper::save('save_country','Save');//

		JToolBarHelper::save('save_and_new_country','Save & New');//

		JToolBarHelper::apply ( 'apply_country', 'Apply' );//

		JToolBarHelper::cancel ('list_countries','List Countries');//

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_country()

	{

		JToolBarHelper::title( 'Update company country', 'systeminfo.png' );

		JToolBarHelper::save('update_country','Update');//

		JToolBarHelper::save ( 'save_as_new_country', 'Save as new' );//

		JToolBarHelper::apply ( 'apply_country', 'Apply' );//

		JToolBarHelper::cancel ('list_countries','List Countries');//

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function list_employers() {

		JToolBarHelper::title( 'List Employers', 'generic.png' );

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function list_companies() {

		JToolBarHelper::title( 'List Companies', 'generic.png' );

        JToolBarHelper::addNew( 'new_company', 'Agregar una empresa');

        JToolBarHelper::trash('delete_company','Delete');

        JToolBarHelper::editListX('edit_company','Edit');

        JToolBarHelper::publishList ('publish_company', 'Publish');

        JToolBarHelper::publishList ('unpublish_company', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_company()

	{

		JToolBarHelper::title( 'Add new company', 'systeminfo.png' );

		JToolBarHelper::save('save_company','Guardar');//

		JToolBarHelper::save ( 'save_and_new_company', 'Guardar como nuevo' );//

		JToolBarHelper::apply('apply_company','Aplicar');//

		JToolBarHelper::cancel ('list_companies','Lista de empresas');//

		JToolBarHelper::save('panel','Panel de control');

	}

	

	function edit_company()

	{

		JToolBarHelper::title( 'Update company', 'systeminfo.png' );

		JToolBarHelper::save('update_company','Actualizar');

		JToolBarHelper::save ( 'save_as_new_company', 'Guardar como nuevo' );

		JToolBarHelper::apply('apply_company','Aplicar');

		JToolBarHelper::trash('delete_company','Borrar');


		JToolBarHelper::save('panel','Panel de control');

	}

	

	function list_jobs() {

		JToolBarHelper::title( 'List Jobs', 'generic.png' );

        JToolBarHelper::addNew( 'new_job', 'Agregar un empleo');

        JToolBarHelper::trash('delete_job','Delete');

        JToolBarHelper::editListX('edit_job','Edit');

        JToolBarHelper::publishList ('publish_job', 'Publish');

        JToolBarHelper::publishList ('unpublish_job', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_job()

	{

		JToolBarHelper::title( 'Add new job', 'systeminfo.png' );

		JToolBarHelper::save('save_job','Save');//

		JToolBarHelper::save ( 'save_and_new_job', 'Save & New' );//

		JToolBarHelper::apply('apply_job','Apply');//

		JToolBarHelper::cancel ('list_jobs','List Jobs');//

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}

	

	function edit_job()

	{

		JToolBarHelper::title( 'Update job', 'systeminfo.png' );

		JToolBarHelper::save('update_job','Update');//

		JToolBarHelper::save ( 'save_as_new_job', 'Save as new' );

		JToolBarHelper::apply('apply_job','Apply');

		JToolBarHelper::cancel ('list_jobs','List Jobs');

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}

	

	function list_cover_letters() {

		JToolBarHelper::title( 'List Cover Letters', 'generic.png' );

        JToolBarHelper::addNew( 'new_cover_letter', 'Agregar una carta de presentación');

        JToolBarHelper::trash('delete_cover_letter','Delete');

        JToolBarHelper::editListX('edit_cover_letter','Edit');

        JToolBarHelper::publishList ('publish_cover_letter', 'Publish');

        JToolBarHelper::publishList ('unpublish_cover_letter', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_cover_letter()

	{

		JToolBarHelper::title( 'Add new cover letter', 'systeminfo.png' );

		JToolBarHelper::save('save_cover_letter','Save');//

		JToolBarHelper::save ( 'save_and_new_cover_letter', 'Save & New' );

		JToolBarHelper::apply('apply_cover_letter','Apply');

		JToolBarHelper::cancel ('list_cover_letters','List Cover Letters');//

		JToolBarHelper::save('panel','Control Panel');//

		JToolBarHelper::back();//

	}

	

	function edit_cover_letter()

	{

		JToolBarHelper::title( 'Update cover letter', 'systeminfo.png' );

		JToolBarHelper::save('update_cover_letter','Update');

		JToolBarHelper::save ( 'save_as_new_cover_letter', 'Save as new' );

		JToolBarHelper::apply('apply_cover_letter','Apply');

		JToolBarHelper::cancel ('list_cover_letters','List Cover Letters');

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}

	

	function list_status() {

		JToolBarHelper::title( 'List Status', 'generic.png' );

        JToolBarHelper::addNew( 'new_status', 'Agregar un estado');

        JToolBarHelper::trash('delete_status','Delete');

        JToolBarHelper::editListX('edit_status','Edit');

        JToolBarHelper::publishList ('publish_status', 'Publish');

        JToolBarHelper::publishList ('unpublish_status', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_status()

	{

		JToolBarHelper::title( 'Add new status', 'systeminfo.png' );

		JToolBarHelper::save('save_status','Save');

		JToolBarHelper::save ( 'save_and_new_status', 'Save & New' );

		JToolBarHelper::apply('apply_status','Apply');

		JToolBarHelper::cancel ('list_status','List Application Status');//

		JToolBarHelper::save('panel','Control Panel');//

		JToolBarHelper::back();

	}

	

	function edit_status()

	{

		JToolBarHelper::title( 'Update status', 'systeminfo.png' );

		JToolBarHelper::save('update_status','Update');

		JToolBarHelper::save ( 'save_as_new_status', 'Save as new' );

		JToolBarHelper::apply('apply_status','Apply');

		JToolBarHelper::cancel ('list_status','List Application Status');

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}	



	function list_resumes() {

		JToolBarHelper::title( 'List Resumes', 'generic.png' );

        JToolBarHelper::addNew( 'new_resume', 'Agregar un currículum vitae');

        JToolBarHelper::trash('delete_resume','Delete');

        JToolBarHelper::editListX('edit_resume','Edit');

        JToolBarHelper::publishList ('publish_resume', 'Publish');

        JToolBarHelper::publishList ('unpublish_resume', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_resume()

	{

		JToolBarHelper::title( 'Add new resume', 'systeminfo.png' );

		JToolBarHelper::save('save_resume','Save');//

		JToolBarHelper::save ( 'save_and_new_resume', 'Save & New' );

		JToolBarHelper::apply('apply_resume','Apply');

		JToolBarHelper::cancel ('list_resumes','List Resumes');//

		JToolBarHelper::save('panel','Control Panel');//

		JToolBarHelper::back();

	}

	

	function edit_resume()

	{

		$id=lknGetParamatre($_REQUEST,'cid');

		$url="index.php?option=com_jobs&id=$id&tmpl=component&action=admin&object=preview_resume";

		$url_print="index.php?option=com_jobs&id=$id&tmpl=component&action=admin&object=print_resume";

		JToolBarHelper::title( 'Update resume', 'systeminfo.png' );

		JToolBarHelper::save('update_resume','Update');

		JToolBarHelper::save ( 'save_as_new_resume', 'Save as new' );

		JToolBarHelper::apply('apply_resume', $alt= 'Apply');

		JToolBarHelper::preview ($url);

		print_button($url_print);

		JToolBarHelper::cancel ('list_resumes','List Resumes');//

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}

	

	function list_applications() {

		JToolBarHelper::title( 'List Applications', 'generic.png' );

        JToolBarHelper::trash('delete_application','Delete');

        JToolBarHelper::editListX('edit_application','Edit');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_application()

	{

		JToolBarHelper::title( 'Update application', 'systeminfo.png' );

		JToolBarHelper::save('update_application','Actualizar');

		JToolBarHelper::apply('apply_application', $alt= 'Apply');

		JToolBarHelper::cancel ('list_applications','List Applications');

		JToolBarHelper::save('send_mail_to_applicant','Send E-mail to Applicant');

		JToolBarHelper::back();

	}

	

	function list_pending_credits() {

		JToolBarHelper::title( 'List Pending Credits', 'generic.png' );

        JToolBarHelper::editListX('edit_pending_credit','Approve/Reject');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_pending_credit()

	{

		JToolBarHelper::title( 'Approve or Reject The Pending Credit', 'systeminfo.png' );

		JToolBarHelper::apply('approve_pending_credit', $alt= 'Approve Credit');

		JToolBarHelper::cancel ($task= 'reject_pending_credit', $alt= 'Reject Credit');

		JToolBarHelper::save('list_pending_credits','List Pending Credits');

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}

	

	function list_credit_history() {

		JToolBarHelper::title( 'List Users Credits', 'generic.png' );

		JToolBarHelper::addNew('add_new_credit','Agregar un crédito');

        JToolBarHelper::editListX('edit_credit_history','Ver/Editar');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function edit_credit_history()

	{

		JToolBarHelper::title( 'Update/View Credit', 'systeminfo.png' );

		JToolBarHelper::save('update_credit_history','Actualizar');

		JToolBarHelper::save('list_credit_history','List Credit History');

		JToolBarHelper::back();

	}

	

	

	function add_new_credit()

	{

		JToolBarHelper::title( _lkn_credit_add_new_credit, 'systeminfo.png' );

		JToolBarHelper::save('save_credit','Save');

		JToolBarHelper::back();

	}

	

	function credit_history_full_payment_detail()

	{

		JToolBarHelper::title( 'View Details of a payment', 'systeminfo.png' );

		JToolBarHelper::save('list_credit_history','List Credit History');		

		JToolBarHelper::back();

	}

	

	function list_email_templates() {

		JToolBarHelper::title( 'List Email Templates', 'generic.png' );

        JToolBarHelper::addNew( 'new_email_template', 'Agregar plantilla de correo electrónico');

        JToolBarHelper::trash('delete_email_template','Delete');

        JToolBarHelper::editListX('edit_email_template','Edit');

        JToolBarHelper::publishList ('publish_email_template', 'Publish');

        JToolBarHelper::publishList ('unpublish_email_template', 'UnPublish');

		JToolBarHelper::save('panel','Control Panel');

	}

	

	function new_email_template()

	{

		JToolBarHelper::title( 'Add new email template', 'systeminfo.png' );

		JToolBarHelper::save('save_email_template','Save');

		JToolBarHelper::save('list_email_templates','List Email Templates');

		JToolBarHelper::back();

	}

	

	function edit_email_template()

	{

		JToolBarHelper::title( 'Update email template', 'systeminfo.png' );

		JToolBarHelper::save('update_email_template','Update');

		JToolBarHelper::back();

	}

	

	function show_config()

	{

		JToolBarHelper::title( 'Edit Component Settings', 'systeminfo.png' );

		JToolBarHelper::save('save_config','Update');

		JToolBarHelper::save('panel','Control Panel');

		JToolBarHelper::back();

	}	

	

	

	function credits_menu()

	{

		JToolBarHelper::save('panel',_lkn_control_panel);

		JToolBarHelper::back();		

	}

	

	function license()

	{

		JToolBarHelper::title( 'License', 'systeminfo.png' );

		JToolBarHelper::save('panel',_lkn_control_panel);

		JToolBarHelper::back();		

	}	

	

	function credits()

	{

		JToolBarHelper::title( 'Credits', 'systeminfo.png' );

		JToolBarHelper::save('panel',_lkn_control_panel);

		JToolBarHelper::back();		

	}

	

	function support()

	{

		JToolBarHelper::title( _lkn_support, 'systeminfo.png' );

		JToolBarHelper::save('panel',_lkn_control_panel);

		JToolBarHelper::back();		

	}

	

	function search_resume(){

		JToolBarHelper::title( 'Resume Search Result', 'systeminfo.png' );

		JToolBarHelper::addNew('resume_search_form','New Resume Search');

		JToolBarHelper::save('panel',_lkn_control_panel);

		JToolBarHelper::back();		

	}

	

	function resume_search_form()

	{

		JToolBarHelper::title( 'Resume Search', 'systeminfo.png' );

		JToolBarHelper::save('panel',_lkn_control_panel);

		JToolBarHelper::back();		

	}

}



	/**

	* Writes a preview button for a given option (opens a popup window)

	* @param string The name of the popup file (excluding the file extension)

	* @since 1.0

	*/

	function print_button($url = '', $updateEditors = false)

	{

		global $_lknBaseFramework;

		$jversion=$_lknBaseFramework->get('_joomlaVersion');

		if ($jversion=='JOOMLA15') {

			$bar = & JToolBar::getInstance('toolbar');

			// Add a preview button

			$bar->appendButton( 'Popup', 'preview', 'Print', "$url&task=preview" );

		}else {

			//@todo:diğer versionlarda bu olay nasıl olacak

		}

		



	}

	

?>

