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

global $_lknBaseFramework,$task,$mainframe;
require_once ($mainframe->getPath('toolbar_default'));
$version=$_lknBaseFramework->get('_joomlaVersion');
$folder=$_lknBaseFramework->lknGetPath('root') .'/administrator/components/com_jobs/';

if ($version=='JOOMLA15') {
	require($folder .'toolbar15.jobs.php');
}elseif ($version=='JOOMLA10') {
	require($folder .'toolbar10.jobs.php');
}
$task=lknGetParamatre($_REQUEST,'task');

switch( $task ) {
	case 'list_job_types':
		lknJobsToolbar::list_job_types();
		break;
	case 'new_job_type':
		lknJobsToolbar::new_job_type();
		break;
	case 'edit_job_type':
		lknJobsToolbar::edit_job_type();
		break;
		
	case 'list_education_levels':
		lknJobsToolbar::list_education_levels();
		break;
	case 'new_education_level':
		lknJobsToolbar::new_education_level();
		break;
	case 'edit_education_level':
		lknJobsToolbar::edit_education_level();
		break;
				
	case 'list_files':
		lknJobsToolbar::list_files();
		break;
	case 'new_file':
		lknJobsToolbar::new_file();
		break;
	case 'edit_file':
		lknJobsToolbar::edit_file();
		break;
		
	case 'list_categories':
		lknJobsToolbar::list_categories();
		break;
	case 'new_category':
		lknJobsToolbar::new_category();
		break;
	case 'edit_category':
		lknJobsToolbar::edit_category();
		break;
		
	case 'list_countries':
		lknJobsToolbar::list_countries();
		break;
	case 'new_country':
		lknJobsToolbar::new_country();
		break;
	case 'edit_country':
		lknJobsToolbar::edit_country();
		break;
		
	case 'list_employers':
		lknJobsToolbar::list_employers();
		break;
		
	case 'list_companies':
		lknJobsToolbar::list_companies();
		break;
	case 'new_company':
		lknJobsToolbar::new_company();
		break;
	case 'edit_company':
		lknJobsToolbar::edit_company();
		break;

	case 'list_jobs':
		lknJobsToolbar::list_jobs();
		break;
	case 'new_job':
		lknJobsToolbar::new_job();
		break;
	case 'edit_job':
		lknJobsToolbar::edit_job();
		break;

	case 'list_cover_letters':
		lknJobsToolbar::list_cover_letters();
		break;
	case 'new_cover_letter':
		lknJobsToolbar::new_cover_letter();
		break;
	case 'edit_cover_letter':
		lknJobsToolbar::edit_cover_letter();
		break;
		
	case 'list_status':
		lknJobsToolbar::list_status();
		break;
	case 'new_status':
		lknJobsToolbar::new_status();
		break;
	case 'edit_status':
		lknJobsToolbar::edit_status();
		break;	

	case 'list_email_templates':
		lknJobsToolbar::list_email_templates();
		break;
	case 'new_email_template':
		lknJobsToolbar::new_email_template();
		break;
	case 'edit_email_template':
		lknJobsToolbar::edit_email_template();
		break;	
		
	case 'list_field_categories':
		lknJobsToolbar::list_field_categories();
		break;
	case 'new_field_category':
		lknJobsToolbar::new_field_category();
		break;
	case 'edit_field_category':
		lknJobsToolbar::edit_field_category();
		break;
		
	case 'list_fields':
		lknJobsToolbar::list_fields();
		break;
	case 'new_field':
		lknJobsToolbar::new_field();
		break;		
	case 'edit_field':
		lknJobsToolbar::edit_field();
		break;		
		
	case 'list_resumes':
		lknJobsToolbar::list_resumes();
		break;
	case 'new_resume':
		lknJobsToolbar::new_resume();
		break;
	case 'edit_resume':
		lknJobsToolbar::edit_resume();
		break;
		
	case 'resume_search_form':
		lknJobsToolbar::resume_search_form();
		break;
	case 'search_resume':
		lknJobsToolbar::search_resume();
		break;
		
	case 'list_applications':
		lknJobsToolbar::list_applications();
		break;
	case 'edit_application':
		lknJobsToolbar::edit_application();
		break;
		
	case 'list_credit_history':
		lknJobsToolbar::list_credit_history();
		break;
	case 'edit_credit_history':
		lknJobsToolbar::edit_credit_history();
		break;
	case 'credit_history_full_payment_detail':
		lknJobsToolbar::credit_history_full_payment_detail();
		break;
	case 'add_new_credit':
		lknJobsToolbar::add_new_credit();
		break;
		
	case 'list_pending_credits':
		lknJobsToolbar::list_pending_credits();
		break;
	case 'edit_pending_credit':
		lknJobsToolbar::edit_pending_credit();
		break;
		
	case 'show_config':
		lknJobsToolbar::show_config();
		break;
		
	case 'list_tools':
		lknJobsToolbar::list_tools();
		break;
				
	case 'license':
		lknJobsToolbar::license();
		break;
	case 'support':
		lknJobsToolbar::support();
		break;		
	case 'credits':
		lknJobsToolbar::credits();
		break;
	case 'panel':
	default:
		lknJobsToolbar::controlPanel();
		break;
}
?>