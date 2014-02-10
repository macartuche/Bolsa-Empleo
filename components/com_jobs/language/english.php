<?php
/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_jobs is a native Job Management Component for Joomla  	      # ||
|| # This component is not free or public.			      			  # ||
|| # It's for only our licensed customer			      			  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN					      					  # ||
|| # Date: April 2009						      					  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.instantphp.com |  www.instantphp.com/license.html?start=1    # ||
|| #################################################################### ||
\*======================================================================*/
//spelling errors are corrected by Gary Hessler. Thanks to Gary
 
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

//Admin Panel
define('_lkn_control_panel','Control Panel');
define('_lkn_list_category','Listar categorías de trabajos');
define('_lkn_list_company','Lista de empresas');
define('_lkn_list_jobs','Lista de trabajos');
define('_lkn_list_credit_history','List Credit History');
define('_lkn_list_cover_letters','Lista de cartas de presentación');
define('_lkn_list_countries','Lista de paises');
define('_lkn_list_status','List Application Status');
define('_lkn_list_resumes','Lista de curriculum');
define('_lkn_list_applications','Lista de aplicaciones');
define('_lkn_list_email_templates','Lista de plantillas de correo electónico');
define('_lkn_list_configuration','Configuración');

define('_lkn_credit_total','Total Credits');
define('_lkn_credit_can_search','This user can use resume search until');
define('_lkn_credit_history_full_payment_detail','Full Payment Details');
define('_lkn_credit_history_for','Credit History for {USERNAME}');//Credit History for jack
define('_lkn_credit_buying_history','Credit Buying History');
define('_lkn_credit_buying_history_curreny','Currency');
define('_lkn_credit_buying_history_payer_email','Payer Email');
define('_lkn_credit_buying_history_transaction_id','Transaction ID');
define('_lkn_credit_buying_history_verify_sign','Verify Sign');
define('_lkn_credit_buying_history_attribs','Other Details');
define('_lkn_credit_buying_history_payment_date','Payment Date');
define('_lkn_credit_buying_history_credit_count','Bought Credits');
define('_lkn_credit_buying_history_credit_cost','Payment Amount');
define('_lkn_credit_buying_history_no_result','<h2>This user has not bought any credits</h2>');
define('_lkn_credit_speding_history','Credit Spending History');
define('_lkn_credit_speding_history_desc','You can see when and where you have spent your credits');
define('_lkn_credit_speding_history_action','Action');
define('_lkn_credit_speding_history_action_add_job','Job Posting');
define('_lkn_credit_speding_history_action_search_resume_database','Resume Search');
define('_lkn_credit_speding_history_spent_credit','Spent Credits');
define('_lkn_credit_speding_history_spent_date','Date');
define('_lkn_credit_speding_history_no_result','This user has not spent any credits');



define('_lkn_category_name','Category Name');
define('_lkn_category_select','--Select Category--');
define('_lkn_parent_category','Parent Category');
define('_lkn_category_add','Add New Category');
define('_lkn_category_update','Update Category');
define('_lkn_category_no','There is no category');

define('_lkn_country','Company Country');
define('_lkn_country_select','--Select Country--');
define('_lkn_country_add','Add New Country');
define('_lkn_country_update','Update Country');

define('_lkn_status','Status');
define('_lkn_status_add','Add New Status');
define('_lkn_status_update','Update Status');

define('_lkn_email_template','Email Template');
define('_lkn_email_template_add','Add New Email Template');
define('_lkn_email_template_update','Update Email Template');
define('_lkn_email_template_desc','<p>Email Template will help you while you are responding to your applicants. This template will be shown to you while you are judging the application. There are some parameters you can use.</p><p><u>Parameters</u><br />{COMPANY_NAME}:Company name<br />{APPLICANT_NAME}:Applicant Name<br />{JOB_TITLE}:Job Title</p>');

define('_lkn_company','Company');
define('_lkn_company_owner','Company Owner');
define('_lkn_company_add','Add New Company');
define('_lkn_company_update','Update Company');
define('_lkn_company_logo','Company Logo');
define('_lkn_company_logo_desc','Only {IMAGE_TYPES} file types are allowed. You are allowed to upload maximum of {LOGO_SIZE} Kb file size');//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size 
define('_lkn_company_details','Company Details');
define('_lkn_company_map','The company location on the map');

define('_lkn_company_address','Address');
define('_lkn_company_city','City');
define('_lkn_company_zipcode','Zip Code');
define('_lkn_company_companyurl','Company Url');
define('_lkn_company_contactname','Contact Name');
define('_lkn_company_contactphone','Contact Phone');
define('_lkn_company_contactemail','Contact Email');
define('_lkn_company_owner_credits','Company Owner Credits');

define('_lkn_job','Job');
define('_lkn_job_latest','Latest Jobs');
define('_lkn_job_details','Job Details');
define('_lkn_job_search','Job Search');
define('_lkn_job_reference','Reference Number');
define('_lkn_ref_short','Ref');//job reference number
define('_lkn_job_number_of_jobs','Number of Jobs');
define('_lkn_job_job_type','Job Type');
define('_lkn_job_description','Job Description');
define('_lkn_job_country','Job Country');
define('_lkn_job_qualifications','Job Qualifications');
define('_lkn_job_salary','Yearly Job Salary');
define('_lkn_job_show_salary','Show Salary?');
define('_lkn_job_publish_up','Start Publishing');
define('_lkn_job_publish_down','Stop Publishing');
define('_lkn_job_hits','Hits');
define('_lkn_job_experience','Experience (year)');
define('_lkn_job_category','Job Category');
define('_lkn_job_add','Add New Job');
define('_lkn_job_update','Update Job');
define('_lkn_job_degree','Preferred Degree');
define('_lkn_job_apply','Apply for this job');
define('_lkn_job_add_cover_letter','Add cover letter for this job');

define('_lkn_cover_letter','Cover Letter');
define('_lkn_cover_letter_front_desc','You can find your cover letters which you have created on your "My Tools" page or you can create a new cover letter:');
define('_lkn_cover_letter_what','A cover letter or motivation letter is a letter of introduction attached to, or accompanying another document such as a résumé');
define('_lkn_cover_letter_add','Add New Cover Letter');
define('_lkn_cover_letter_update','Update Cover letter');

define('_lkn_resume','Resume');
define('_lkn_resume_selection','Resume Selection');
define('_lkn_resume_selection_desc','Your resumes which you can use for applying for this job are listed below. Please select one of them.');
define('_lkn_resume_add','Add New Resume');
define('_lkn_resume_update','Update Resume');
define('_lkn_general_information','General');
define('_lkn_resume_title','Resume Title');
define('_lkn_resume_posting_language','Resume Language');
define('_lkn_resume_posting_language_desc','Write the full name of the language. Example: English, German, French, Spanish. (Not Eng. or Ger. )');
define('_lkn_personal_information','Personal');
define('_lkn_resume_name','Full Name');
define('_lkn_resume_home_phone','Home Phone');
define('_lkn_resume_map','Location on the map');
define('_lkn_resume_work_phone','Work Phone');
define('_lkn_resume_cell_phone','Cell Phone');
define('_lkn_resume_email_address','Email Address');
define('_lkn_resume_currently_working','I\'m currently working');
define('_lkn_resume_created','Created Date');
define('_lkn_resume_update_date','Last Modified Date');
define('_lkn_current_address','Current Address');
define('_lkn_resume_street','Street');
define('_lkn_resume_city','City');
define('_lkn_resume_state','State');
define('_lkn_resume_zip_code','Zip Code');
define('_lkn_education','Education');
define('_lkn_high_school','High School');
define('_lkn_university','University');
define('_lkn_grad_school','Grad School');
define('_lkn_other_school','Other School');
define('_lkn_resume_school','School');
define('_lkn_resume_school_diploma','Diploma');
define('_lkn_resume_diploma_finished','Graduate');
define('_lkn_resume_diploma_student','Student');
define('_lkn_resume_diploma_text','Degree/Certification/Diploma');
define('_lkn_resume_study_area','Area of Study');
define('_lkn_resume_languages','Languages');//çoğul - plural
define('_lkn_resume_language','Language');//tekil - single
define('_lkn_resume_language_reading','Reading');
define('_lkn_resume_language_writing','Writing');
define('_lkn_resume_language_understanding','Understanding');
define('_lkn_resume_language_place','Where did you learn?');
define('_lkn_employment_information','Employment');
define('_lkn_resume_available_date','Date You Can Start');
define('_lkn_resume_desired_pay','Desired Yearly Salary');
define('_lkn_resume_job_type','Job Type');
define('_lkn_can_you_work','Can you work');
define('_lkn_resume_weekends','Weekends');
define('_lkn_resume_evenings','Evenings');
define('_lkn_available','Available');
define('_lkn_monday','Monday');
define('_lkn_tuesday','Tuesday');
define('_lkn_wednesday','Wednesday');
define('_lkn_thursday','Thursday');
define('_lkn_friday','Friday');
define('_lkn_saturday','Saturday');
define('_lkn_sunday','Sunday');
define('_lkn_resume_unavailability','Unavailability');
define('_lkn_recent_employers','Recent Employers');//plural
define('_lkn_total_experience','Total Experience');
define('_lkn_total_experience_years','year(s)');
define('_lkn_most_recent_employer','Most Recent Employer');
define('_lkn_prior_employer','Prior Employer');
define('_lkn_resume_employer','Employer');
define('_lkn_resume_employer_city','Employer City');
define('_lkn_resume_employer_state','Employer State');
define('_lkn_resume_employer_phone','Employer Phone');
define('_lkn_resume_employer_pos','Position Held');
define('_lkn_resume_employer_from','From (m/yyyy)');
define('_lkn_resume_employer_to','To (m/yyyy)');
define('_lkn_resume_employer_pay','Pay Upon Leaving');
define('_lkn_resume_employer_sup','Supervisor');
define('_lkn_resume_employer_dut','Duties');
define('_lkn_resume_employer_leave','Reason For Leaving');
define('_lkn_job_skills','Job Skills');
define('_lkn_resume_driver_license','Do you have a drivers license?');
define('_lkn_resume_dl_number','If yes, Driver\'s License Number');
define('_lkn_resume_skills','Skills');
define('_lkn_references','References');//plural
define('_lkn_reference','Reference');
define('_lkn_resume_ref_name','Name');
define('_lkn_resume_ref_address','Address');
define('_lkn_resume_ref_telephone','Telephone');
define('_lkn_resume_ref_relationship','Relationship');
define('_lkn_resume_ref_years','Years');
define('_lkn_resume_text_resume','Text Resume');
define('_lkn_resume_image','Photo');
define('_lkn_resume_banned_companies','Banned Companies');

define('_lkn_app','Application');
define('_lkn_app_details','Application Details');
define('_lkn_app_update','Update Application');
define('_lkn_app_last_update_date','Last Modified Date');
define('_lkn_app_date','Application Date');
define('_lkn_app_status','Application Status');
define('_lkn_app_comments','Application Comments');
define('_lkn_app_respond','Response to Applicant');
define('_lkn_app_email_from','Your E-mail');
define('_lkn_app_email_to','Application E-mail');
define('_lkn_app_email_subject','E-mail Subject');
define('_lkn_app_email_body','E-mail Body');
define('_lkn_app_email_template','Your E-mail Templates');
define('_lkn_app_email_history','E-mail History');
define('_lkn_app_email_sender','E-mail Sender');
define('_lkn_app_email_date','E-mail Date');
define('_lkn_app_email_send','Send E-mail to Applicant');
define('_lkn_app_count','Applications');

//genel
define('_lkn_id','ID');
define('_lkn_published','Published');
define('_lkn_published_x','Unpublished');
define('_lkn_published_deleted','Deleted by user');
define('_lkn_management','Management');
define('_lkn_alias','Alias');
define('_lkn_no','No');
define('_lkn_yes','Yes');
define('_lkn_support','Support');
define('_lkn_filter','Filter');
define('_lkn_submit','Submit');
define('_lkn_cancel','Cancel');
define('_lkn_go','Go');
define('_lkn_back','Back');
define('_lkn_currency','$');
define('_lkn_reset','Reset');
define('_lkn_edit','Editar');
define('_lkn_select_state','--Select State--');
define('_lkn_paging_first','&lsaquo; First');
define('_lkn_paging_pervious','<');
define('_lkn_paging_next','>');
define('_lkn_paging_last','Last &rsaquo;');
define('_lkn_mail_send','Your e-mail has been sent to {NAME}'); //You mail is sent to Ulas Alkan
define('_lkn_mail_send_error','Your e-mail has not sent. Please inform site editor');
define('_lkn_added','Record has been inserted Succesfully');
define('_lkn_updated','Record has been updated successfully');
define('_lkn_delete_info','Record has been deleted successfully');
define('_lkn_delete_problem','Record {ID} has not been deleted because of active records');
define('_lkn_credits','Credits');
define('_lkn_info','Information');
define('_lkn_license','License');
define('_lkn_meta','Metadata');
define('_lkn_meta_desc','Meta Description');
define('_lkn_meta_keywords','Meta Keywords');
define('_lkn_image','Image');
define('_lkn_username','Username');
define('_lkn_title','Title');
define('_lkn_created','Created Date');
define('_lkn_login_to_continue','You must be registered and logged in to apply for this job');

define('_lkn_config','Configuration');
define('_lkn_config_job_posting','Job Posting');
define('_lkn_config_job_publish_down','Default Publish Down Time');
define('_lkn_config_job_publish_down_months','month(s)');
define('_lkn_config_job_publish_down_desc','This setting affects job publish down time.<em> for example, If you select 2 for this value, a Job will be unpublished after 2 months from its created time</em>');
define('_lkn_config_job_publish_down_up_time_is_editable','Publish Down Time Editable');
define('_lkn_config_job_publish_down_up_time_is_editable_desc','Company owners can edit the publish up and publish down time whenever they want. SUGGESTED: No');
define('_lkn_config_general','General Settings');
define('_lkn_config_date_format','Date Format');
define('_lkn_config_default_status','Default Status');
define('_lkn_config_default_status_desc','Status when a user applies for a job');
define('_lkn_config_date_format_desc','Select the date format you want to use');
define('_lkn_config_records_per_page','Records on a page');
define('_lkn_config_records_per_page_desc','maximum number of the records on one page');
define('_lkn_config_language','Language');
define('_lkn_config_language_desc','Component language');
define('_lkn_config_email','Email');
define('_lkn_config_email_desc','* If you select gmail as e-mail sender, You need to write your gmail account details. username: youremail@gmail.com , password: your_password. <br />* If you select gmail as your mail sender, You server will need an ssl certificate<br />* if you choose smtp option, The necessary values will be taken from your Joomla Configuration file');
define('_lkn_config_email_mailer','Mailer');
define('_lkn_config_email_mailer_mail','PHP Mail Function');
define('_lkn_config_email_mailer_sendmail','Sendmail');
define('_lkn_config_email_mailer_smtp','SMTP Server');
define('_lkn_config_email_mailer_gmail','Gmail');
define('_lkn_config_gmail_username','Gmail Username');
define('_lkn_config_gmail_password','Gmail Password');
define('_lkn_config_credit_system_inform_me','Credit Buying');
define('_lkn_config_credit_system_inform_me_desc','You will get an email whenever someone buys credit (If Credit system is active)');
define('_lkn_config_company_adding_inform_me','Adding or updating company');
define('_lkn_config_company_adding_inform_me_desc','You will get an email whenever someone adds a new company or updates the company information');

define('_lkn_config_inform_email','Notification E-Mail');
define('_lkn_config_inform_email_desc','Specify where all notification emails should be sent.');
define('_lkn_config_image','Image');
define('_lkn_config_image_logo_image_folder','Logo Image Folder');
define('_lkn_config_image_logo_image_folder_desc','This folder must be written according to your root. Folder must exist. Component will not check for the folders existence. Folder path must start and finish with / Default: /images/stories/jobs/logos/');
define('_lkn_config_image_resume_image_folder','Resume Image Folder');
define('_lkn_config_image_resume_image_folder_desc','This folder must be written according to your root. Folder must exist. Component will not check for the folders existence. Folder path must start and finish with / Default: /images/stories/jobs/cv_images/');
define('_lkn_config_image_allowedimages','Allowed Image Types');
define('_lkn_config_image_allowedimages_desc','Write them comma seperated. Default: jpeg,jpg,png,gif');
define('_lkn_config_image_uploadSizeLimit','Image size (Kb)');
define('_lkn_config_image_uploadSizeLimit_desc','The maximum size of the images for uploading in Kb. Default : 200');
define('_lkn_config_home_page','Home Page');
define('_lkn_config_home_page_categories','Show Job Catgories');
define('_lkn_config_home_page_categories_desc','Show Job Categories on component home page');
define('_lkn_config_home_page_latest_jobs','Show Latest Jobs');
define('_lkn_config_home_page_latest_jobs_desc','Show Latest Jobs on component home page');
define('_lkn_config_home_page_latest_jobs_count','Latest Jobs Count');
define('_lkn_config_home_page_latest_jobs_count_desc','If the latest jobs will shown on home page, How many?');
define('_lkn_config_home_page_simple_search_form','Show Simple Search Form');
define('_lkn_config_home_page_simple_search_form_desc','Show simple search form on component home page');
define('_lkn_config_company_activate','Activate Company functions');
define('_lkn_config_company_activate_desc','<p>If you select \'Yes\' , Your users will be able to add their companies (and using related function like job posting, responding to the applicants, searching the resume database) to your web site.</p><p>This  is an ideal solution , if you are using com_jobs for only your company (only one company)</p><p>If you are using our component to run a career portal like monster.com, Select \'Yes\' for this option.</p><p>Note: \'Super Administrator\' user group is out of this criteria</p>');
define('_lkn_config_thank_you_message','Thank you message');
define('_lkn_config_thank_you_message_desc','This message will be shown to the applicants when they have made a successful application.<br /><p>The parameters are listed below.<br /><br />{APPLICANT}: Full name of the applicant<br />{JOB_NAME}:Job name<br /> {COMPANY_NAME}: Company Name</p><p>Default one is below: </p><p>Hi {APPLICANT};</p><p>We have recieved you application for {JOB_NAME} . We will contact you as soon as possible.</p><p>Regards<br /> {COMPANY_NAME} Human resources</p>');
define('_lkn_config_credit_system','Credit System');
define('_lkn_config_credit_system_note','Note: \'Super Administrator\' user group is out of Credit System');
define('_lkn_config_credit_system_active_desc','Credit System For <strong>Employers</strong> active or not. If the credit system is active, their credit count will be checked. If they do not have enough credit, they will not be able to post.<br />If the credit system is not active, Company owners will be able to post jobs without your confirmation');
define('_lkn_config_credit_system_active','Credit System Active?');
define('_lkn_config_credit_system_paypal_email','PayPal e-mail');
define('_lkn_config_credit_system_paypal_email_desc','Enter your PayPal e-mail where the payments will be sent');
define('_lkn_config_credit_system_sandbox_email','Sandbox e-mail');
define('_lkn_config_credit_system_sandbox_email_desc','Enter Sandbox e-mail. Sandbox is a set of tools and resources to enable developers and merchants to develop eCommerce web sites and applications using PayPal web services. <br /><br />You can learn more about sandbox at <a href="https://developer.paypal.com/" target="_new">https://developer.paypal.com/</a>');
define('_lkn_config_credit_system_sandbox','Sandbox');
define('_lkn_config_credit_system_sandbox_desc','Sandbox mode is active or not');
define('_lkn_config_credit_system_cost','One Credit Cost ($)');
define('_lkn_config_credit_system_cost_desc','<p>How much does one credit cost? </p><p>For example , if one credit costs $0.5 and your user wants to buy 20 credits, The user will be charged $10 (0.5*20=$10)</p>');
define('_lkn_config_credit_system_adding_a_job_cost','Job Cost');
define('_lkn_config_credit_system_adding_a_job_cost_desc','How many credits does adding a job cost?');
define('_lkn_config_credit_system_resume_search_one_day_cost','1 Day Resume Search Cost');
define('_lkn_config_credit_system_resume_search_one_day_cost_desc','<p>Your company owners can buy <em>resume database search</em> with their credits.</p><p>If you select 4 credits for <em>1 day resume database search</em> and your company owner wants to buy 5 days resume database search, He will be charged 20 credits for 5 days of resume database search</p>');


define('_lkn_home_page','Home Page');


define('_lkn_worker','Job Tools for {NAME}');//Job Tools for Ulas Alkan
define('_lkn_worker_my_details','My Membership Details');
define('_lkn_worker_worker_name','Name Surname');
define('_lkn_worker_worker_email','E-mail');
define('_lkn_worker_worker_last_visit_date','Last visit date');
define('_lkn_worker_no_resume','You have no resumes on file');
define('_lkn_worker_my_tools','My Tools');
define('_lkn_worker_my_cover_letters','Cover Letters');
define('_lkn_worker_my_cover_letters_desc','You can create your own cover letters with different templates. You can select one of these cover letters when you are making a new application. This will help you to save time when making a new application.');
define('_lkn_worker_my_applications','My Applications');
define('_lkn_worker_my_applications_desc','You can view all applications together under My Applications module! If the company has reponded to your application, You will see an envelope near your application.');
define('_lkn_worker_response_date','Response Date');
define('_lkn_worker_response','Response');
define('_lkn_worker_application_no','You have not applied for any jobs');
define('_lkn_worker_applicant_email','Applicant E-mail');
define('_lkn_worker_company_email','Company E-mail');
define('_lkn_worker_app_info_table_job_active','The job you have applied for is active');
define('_lkn_worker_app_info_table_job_inactive','The job you have applied for is inactive');
define('_lkn_worker_app_info_table_read_message','You have read messages');
define('_lkn_worker_app_info_table_unread_message','You have unread messages');
define('_lkn_worker_app_info_table_has_cover_letter','The application has a cover letter. You can edit the cover letter by clicking the icon');
define('_lkn_worker_app_info_table_has_not_cover_letter','The application has no cover letter. You can add a cover letter by clicking the icon');
define('_lkn_worker_total_applications','Total Applications : {NUMBER}');//Total Applications	: 856

define('_lkn_employer_tools','Herramientas de empleador');//Employer Tools
define('_lkn_employer_add_new_job','Post a job');
define('_lkn_employer_add_new_job_desc','Now that more job seekers use the Internet in their search, posting your job online has to be part of your hiring strategy. We can help you to get your jobs noticed by more qualified candidates');
define('_lkn_employer_no_company','There is no company');
define('_lkn_employer_list_jobs','List My Jobs');
define('_lkn_employer_list_jobs_desc','You will find all details about your company jobs under this module. Save time and money fulfilling your staffing requirements.');
define('_lkn_employer_list_jobs_desc_','<p>You can find all the jobs you have posted here! You will be able to see the status of your jobs<br/>You can also edit the details of your jobs with this module.<p/>');
define('_lkn_employer_info_table_job_is_published','Su trabajo esta activo y se publicó. Usted puede anular la publicación haciendo clic en este icono');//Your job is active and being published. You can unpublish it by clicking this icon
define('_lkn_employer_info_table_job_is_unpublished','Your job is not active and not being published.You can publish it by clicking this icon');
define('_lkn_employer_info_table_view','If your job is active and being published. You can view how it looks by clicking this icon');
define('_lkn_employer_info_table_edit','You can use this button to edit your job details');
define('_lkn_employer_info_table_email_template_published','Your email template is published. You can now use it. If you want, you can unpublish it by clicking this icon');
define('_lkn_employer_info_table_email_template_published_x','Your email template is unpublished. You can not use it now. If you want, you can publish it by clicking this icon');
define('_lkn_employer_info_table_email_template_edit','You can edit your email template by clicking this icon');
define('_lkn_employer_info_table_email_template_delete','You can delete your email template by clicking this icon');
define('_lkn_employer_info_inactive','Your job is not being published because of publish down time. Publish down time has passed.');
define('_lkn_employer_email_templates','E-mail templates');
define('_lkn_employer_email_templates_desc','You can create an email template for responding to your applicant. This e-mail template will be shown to you while you are responding to your applicants.');
define('_lkn_employer_applications','View your appplicants');
define('_lkn_employer_applications_desc','You will be able to view the applications to your jobs and the applicant resumes. You will also be able to contact your applicant with the module');
define('_lkn_employer_buy_credits','Buy Credits');
define('_lkn_employer_buy_credits_desc','You will need credits to add jobs on our web site. This module will help you buy credits');
define('_lkn_employer_search_resume','Search Our Resume Database');
define('_lkn_employer_search_resume_desc','If the Right person did not apply for your job, You can find him/her by searching our resume database. Filter the resumes with your specific criteria');
define('_lkn_employer_total_credit','Total Credits: {NUMBER}'); //somethink like Total Credits: 56
define('_lkn_employer_total_jobs_can_post','You can post {NUMBER} job(s) with these credits'); //somethink like You can post 52 job(s) with this credit
define('_lkn_employer_can_search_resume_database','You can search our resume database until {DATE}');
define('_lkn_employer_can_search_resume_database_extend_this','Extend this date');
define('_lkn_employer_can_not_search_resume_database','You are not allowed to search our resume database');//this will be shown on employer tools page
define('_lkn_employer_can_not_search_resume_database_buy','Buy this permission');
define('_lkn_employer_can_not_search_resume_database_','Your resume database search permission has expired. You can extend this permission from your <strong><a href="index.php?option=com_jobs&task=employer">Employer Panel</a></strong>');//this will shown on search results
define('_lkn_employer_view_credit_buying_history','Show my credit buying history');
define('_lkn_employer_view_credit_buying_history_desc','You will find all the details of your credit buying history. To see the full details of credit purchases, You need to click the Transaction IDs');
define('_lkn_employer_view_credit_speding_history','Show my credit spending history');

define('_lkn_employer_extend_resume_database_search','Extend (or buy) resume database search time');
//when company owner wants extend his current accessing date
define('_lkn_employer_extend_resume_database_search_desc1','You currently have permission to search our resume database until {DATE}. This module will help you to extend this date.');
define('_lkn_employer_extend_resume_database_search_desc2','You currently do not have permission to search our resume database . This module will help you buy this permission.');
define('_lkn_employer_extend_resume_database_search_days','How many days?');
define('_lkn_employer_extend_resume_database_search_days_desc','How many days do you want to search our resume database? One day searching costs {COST} credits and you have {CREDIT} credits');
define('_lkn_employer_extend_resume_database_search_confirm','<p><strong>Please check the details</strong>:</p><p>Additional days you want to add:{DAYS} days<br />Total Cost for this<sup>*</sup>: {COST} credits</p><p><sup>*</sup> You have {CREDIT_COUNT} credits</p>');
define('_lkn_employer_extend_resume_database_search_complete','You can search our resume database until {NEW_DATE}');

define('_lkn_search','Buscar');
define('_lkn_search_detailed','Advanced Search');
define('_lkn_search_new','New Job Search »');
define('_lkn_search_detail','Detailed');//this is showed on search result pages
define('_lkn_search_brief','Brief');//this is showed on search result pages
define('_lkn_search_word','Buscar palabra');
define('_lkn_search_view','View');
define('_lkn_search_count_display',' Search Results ({START} to {END} from {TOTAL}) ');
define('_lkn_search_adv_desc','<ul><li>select your job search criteria below and click the "Search" button for results.</li></ul>');
define('_lkn_search_job_category','<strong>Job Category:</strong>');
define('_lkn_search_job_country','<strong>Job Location:</strong><br/>(To choose multiple items hold the CTRL key while selecting.)');
define('_lkn_search_job_title_','Job Title');
define('_lkn_search_job_title_example','examples: Consultant, IT');
define('_lkn_search_job_cat_country','Specify Job Category and Job Location');
define('_lkn_search_job_salary_range','Specify Salary Range');
define('_lkn_search_job_salary_range_','<strong>Salary Range:<br/></strong>(e.g. "60000 - 75000")');
define('_lkn_search_job_salary_range_from','From');
define('_lkn_search_job_salary_range_to','To');
define('_lkn_search_job_salary_range_yearly','(Yearly salary)');
define('_lkn_search_job_emp_type','Specify Employment Type');
define('_lkn_search_job_education_level','Specify Education Type');
define('_lkn_search_job_education_level_','Education Level:');
define('_lkn_search_not_necessary','<strong>*ATTENTION:</strong>: This field is not a necessary field for the companies. If you did not find enough jobs to apply for, you can experiment with removing this.');
define('_lkn_search_job_experience','Specify Experience');
define('_lkn_search_job_experience_','<strong>Experience (years):</strong>');
define('_lkn_search_job_experience_min','Minimum:');
define('_lkn_search_job_experience_max','Maximum:');

define('_lkn_search_resume','Find a resume');
define('_lkn_search_resume_desc','<ul><li>Select your resume search criteria below and click the "Search" button to see the results.</li></ul>');
define('_lkn_search_resume_search_attention','<font size="1"><strong><font color="#ff0000">*ATTENTION</font>:</strong>Some fields may not be a neccesary field for job seekers. If a job seeker did not specify this field for his/her resume posting and you enter this as search criteria, those resumes will be ommited. To see all resumes leave this section empty.</font>');
define('_lkn_search_resume_new','New Resume Search »');

define('_lkn_credit_buy','Buy Credits');
define('_lkn_credit_count','How many?');
define('_lkn_credit_count_desc','How many credits do you want to buy? One credit is ${COST}'); //{COST} ile value from on configuration
define('_lkn_credit_buying_confirm','<p><strong>Please check the details</strong>:</p><p>Payment Type: {PAYMENT_TYPE}<br />Credits you want to buy: {NUMBER}<br />Total Cost for these credits<sup>*</sup>: '._lkn_currency.'{COST}<br /><br /><sup>*</sup> One credit is ${UNIT} </p>');
define('_lkn_credit_paypal_item_name','{NUMBER} credits for {USER}');
define('_lkn_credit_paypal_redirect_page_title','Processing Payment...');
define('_lkn_credit_paypal_order_thanks','<h3>Thank you for your order.</h3>');
define('_lkn_credit_paypal_redirect_form_header','<center><h2>Please wait, your order is being processed and you will be redirected to the paypal website.</h2></center>');
define('_lkn_credit_paypal_redirect_form_footer','<center><br/><br/>If you are not automatically redirected to paypal within 2 seconds...<br/><br/>');
define('_lkn_credit_paypal_order_canceled_page_title','Cancelled');
define('_lkn_credit_paypal_order_canceled','<h3>The order was cancelled.</h3>');

define('_lkn_error','I can not understand what you are doing. Please inform the site administrator or webmaster');
define('_lkn_error_application_made_before','Hi {FULL_NAME},<br /><br />You have applied for this job on {DATE} with your {RESUME_TITLE} resume!<br /><br />Please remember! When you make a change to your resume, The companies that you have applied to will be able to see the latest version.<br /><br />You can see your applications and responses to your applications from our "My applications" module.');
define('_lkn_error_acl_permission','<h1>You can not do this action.</h1><p>The reason may be one of the below ones.</p><ol><li class="smallfont">You are not logged in </li><li class="smallfont">You may not have sufficient privileges to access this page. Are you trying to edit someone else\'s resume, access administrative features or some other privileged system?</li><li class="smallfont">If you are trying to do a company function such as posting job, the administrator may have disabled this function</li><li class="smallfont">If you are trying to do a job seeker function such as posting resume, the administrator may have disabled this function</li></ol><p>Please <a href="index.php?option=com_jobs">click here</a> to continue from the home page</p>');
//this will be showed when somebody tries to do something which he/she has not permission to do.
//for example, trying edit other people's resume
define('_lkn_error_form','Some fields need correction:');
define('_lkn_error_no_input_for_job_search','You must write or select something to search');
define('_lkn_error_no_input_for_resume_search','You must write or select something to find resumes');
define('_lkn_error_form_empty','The required field has not been filled in.');
define('_lkn_error_form_resume_title','Resume must have a Title');
define('_lkn_error_form_resume_name','You must enter Full Name');
define('_lkn_error_form_resume_email','You must enter e-mail');
define('_lkn_error_form_resume_language','You must enter the resume language');

define('_lkn_error_form_company_title','Company must have a Title');
define('_lkn_error_form_company_country','You must select the company country');
define('_lkn_error_form_company_email','You must enter company e-mail');

define('_lkn_error_form_cover_title','Cover Letter must have a Title');
define('_lkn_error_form_cover_body','You must enter the cover letter');
define('_lkn_error_no_response','There is no response for your application');

define('_lkn_error_form_job_title','Job must have a title');
define('_lkn_error_form_job_category','You must select the job category');
define('_lkn_error_form_job_company','You must select the company');
define('_lkn_error_form_job_country','You must select the country');

define('_lkn_error_form_employer_email_template','E-mail template must have a title');
define('_lkn_error_form_employer_email_template_body','E-mail template body must be written');

define('_lkn_error_no_job','<h1>There are no jobs for this search criteria</h1>');//this is used for category pages
define('_lkn_error_job_is_not_found','<h1>The job you are trying to reach has been removed or unpublished</h1><br />
<a href="javascript:history.go(-1)">Return back</a> 
');//if a job is unpublished or removed

define('_lkn_error_email_body_empty','You must enter e-mail body to send');
define('_lkn_error_email_subject_empty','E-mail subject is empty');

define('_lkn_error_credit_number_empty','You must enter the credit you want to buy');
define('_lkn_error_credit_not_enough_to_add_job','You do not have enough credits to post a job. You need to buy credits from employer panel.');
define('_lkn_error_credit_not_enough_to_search_resume_database','You do not have enough credits to search our resume database. Please visit your <strong><a href="index.php?option=com_jobs&task=employer">Employer Panel</a></strong> to see the details or to buy more credits');
define('_lkn_error_credit_has_no_credit','You do not have any credits available. Please <a href="index.php?option=com_jobs&task=buy_credits">buy some credits</a> and retry this');

define('_lkn_error_search_job_no_result','<h1>We did not find any jobs which match your criteria</h1>');
define('_lkn_error_search_resume_no_result','<h1>We did not find any resumes which match your criteria</h1>');

define('_lkn_error_extend_resume_database_search_day_is_empty','You must enter the number of days you want to add for searching resumes');
define('_lkn_error_extend_resume_database_search_enough_credits','You do not have enough credits. You will need {CREDIT_COUNT} credits');

define('_lkn_error_no_application','<h1>You have not received any applications</h1>');

//added for 1.0.3
define('_lkn_admin_rss','Rss Feeds');
define('_lkn_admin_rss_desc','Feeds will help you to get the latest news and product updates from instantphp.com');
define('_lkn_admin_rss_title','Title');

//added for 1.0.6
define('_lkn_error_date_field','You need to enter the date format');//used for configuration form
define('_lkn_error_records_on_page','You need to enter the Records on pages value');//used for configuration form

define('_lkn_worker_rss','Rss Feeds');
define('_lkn_worker_rss_desc','Getting latest jobs from our web site is one click away from you. You will be able to create your own feed in this page. Subscribe to our RSS (Really Simple Syndication) job feeds to get fresh job content delivered directly to your desktop!');

define('_lkn_worker_rss_rss_page_desc','<strong>What is RSS?</strong><br />RSS (which stands for Really Simple Syndication) is a web feed format which can be used to publish any frequently updated content such as news, blogs and jobs.<br /><br /><strong>How will it benefit me?</strong><br />RSS is an easy way to keep updated on the jobs that are of interest to you. Instead of having to go to websites to see if there\'s a new job, you can use RSS to tell you every time the jobs you want are updated. Online Jobs contains up-to-date content of all the latest jobs, sent automatically through a feed reader. It offers a simple way of keeping track of the latest jobs every day, so you won\'t miss out on your ideal job!<br /><br /><strong>How to use this form?</strong><br />You can choose which types of jobs you want to get.You can use Ctrl key for selecting more than one criteria or removing selected criteria.');

define('_lkn_worker_rss_category','Category :');//used on getting rss form
define('_lkn_worker_rss_country','Country :');//used on getting rss form
define('_lkn_worker_rss_company','Company :');//used on getting rss form
define('_lkn_worker_rss_address','Rss Address:');//used on getting rss form
define('_lkn_worker_rss_address_desc','After you have created your own RSS feed, Copy and paste the feed url to the address section of feed reader');//used on getting rss form
define('_lkn_worker_rss_disabled','<h1>RSS feeds are disabled</h1>');
define('_lkn_worker_rss_max_category_select','You can select maximum {NUMBER} category');//used on getting rss form
define('_lkn_worker_rss_max_country_select','You can select maximum {NUMBER} country');//used on getting rss form
define('_lkn_worker_rss_max_company_select','You can select maximum {NUMBER} company');//used on getting rss form

define('_lkn_worker_resume_count','You have {ACTIVE_RESUME_COUNT} resume(s) and You can have maximum {ALLOWED_RESUME_COUNT} resume(s)');
define('_lkn_worker_no_new_resume_allowed','You can\'t add a new resume');


define('_lkn_config_rss_feeds','Rss Feeds');
define('_lkn_config_rss_feeds_active','Rss Feeds Active?');
define('_lkn_config_rss_feeds_active_desc','You can open or close the rss feeds for you job site');
define('_lkn_config_rss_feeds_categories','Category Feeds?');
define('_lkn_config_rss_feeds_categories_desc','Users will be able to get rss feeds from categories');
define('_lkn_config_rss_feeds_company','Company Feeds?');
define('_lkn_config_rss_feeds_company_desc','Users will be able to get rss feeds from company profiles');
define('_lkn_config_rss_feeds_country','Country Feeds?');
define('_lkn_config_rss_feeds_country_desc','Users will be able to get rss feeds from countries');
define('_lkn_config_rss_feeds_count','Feed Count');
define('_lkn_config_rss_feeds_count_desc','How many jobs will be displayed for feeds. Default: 20');
define('_lkn_config_rss_feeds_limit_job_description','Limit Job Description');
define('_lkn_config_rss_feeds_limit_job_description_desc','How many characters will be displayed for description in feeds. If you want to show all of the job description in your feeds, Write 0 (zero) for this parameter. Default:300');
define('_lkn_config_rss_feeds_criteria_select_count','How many?');
define('_lkn_config_rss_feeds_criteria_select_count_desc','How many criteria are your user allowed to select while they are creating feeds? . For Example, if you write 10 for this parameter, Your users will be able to select a maximum of 10 categories while they are creating their own RSS feeds from the Job Seeker panel. Default: 10');
define('_lkn_config_rss_feeds_description','Description');
define('_lkn_config_rss_feeds_description_desc','Write a short sentence about the feed maximum 100 character. This will be displayed as the description of your RSS Feed');

define('_lkn_config_worker','Job Seeker Panel');
define('_lkn_config_worker_resume_count','Resume Count');
define('_lkn_config_worker_resume_count_desc','How many resumes are job seekers allowed to have? For example: If you write 5 for this parameter, A job seeker can create a maximum of 5 resumes from their worker panel.<br /><br />Write 0 (zero) to close this parameter. 0 (zero) means that a job seeker can create unlimited resumes from the worker panel. <br /><br />Default : 5');


define('_lkn_config_employer','Employer Panel');
define('_lkn_config_employer_company_count','Company Count');
define('_lkn_config_employer_company_count_desc','How many companies are your employers allowed to have? For example: If you write 5 for this parameter, An employer can submit a maximum of 5 companies from their employer panel.<br /><br />Write 0 (zero) to close this parameter. 0 (zero) means that an employer can submit & manage unlimited companies from the employer panel. <br /><br />Default : 1');

define('_lkn_employer_company_count','You have {ACTIVE_COMPANY_COUNT} companies and you can have a maximum of {ALLOWED_COMPANY_COUNT} companies');
define('_lkn_employer_no_new_company_allowed','You can\'t add company');

//added for 1.0.7
define('_lkn_support_forum','Support Forum');
define('_lkn_support_bug_tracker','Bug and Feature Tracker');
define('_lkn_show','Show');
define('_lkn_hide','Hide');

define('_lkn_country_tip','Write the country like USA, England , Turkey etc');

define('_lkn_category_name_tip','Write the name of the category');

define('_lkn_published_tip','Select the publishing status');
define('_lkn_alias_tip','You can enter tis or leave the alias value empty. If you leave empty, It will be created automatically. Alias will be used to create SEF urls');
define('_lkn_parent_category_tip','Select the parent category. If you do not select anything, It will use the root category');
define('_lkn_meta_desc_tip','Enter metadata description');
define('_lkn_meta_keywords_tip','Enter metadata keywords');

define('_lkn_company_tip','Enter company name');
define('_lkn_company_logo_tip','You can upload logo for this company. Click the button an select logo from your computer');
define('_lkn_company_address_tip','Enter the company address');
define('_lkn_company_country_tip','Select the company country from drop down list');
define('_lkn_company_city_tip','Enter the company city');
define('_lkn_company_zipcode_tip','Enter the company zip code');
define('_lkn_company_companyurl_tip','Write the full company url like http://www.google.com');
define('_lkn_company_contactname_tip','Enter the company contact name');
define('_lkn_company_contactphone_tip','Enter the company contact phone');
define('_lkn_company_contactemail_tip','Enter the company e-mail.');
define('_lkn_company_description_tip','Enter the description text for your company. This information will be visible by all site visitors');

define('_lkn_job_tip','Enter job title');
define('_lkn_job_category_name_tip','Select the category of this job');
define('_lkn_job_description_tip','Enter the job description');
define('_lkn_job_qualifications_tip','Enter the job qualifications');
define('_lkn_job_company_tip','You must select company for this job');
define('_lkn_job_reference_tip','You can write a requisition number for this job. It will be used on the job display. Job seeker will see "Ref: This_Reference_Number" in job detail pages. It can be numbers or strings');
define('_lkn_job_number_of_jobs_tip','How many people are you looking for? You may leave this field empty');
define('_lkn_job_job_type_tip','Select the job type from the drop down list');
define('_lkn_job_country_tip','Select the job country');
define('_lkn_job_experience_tip','Enter the minimum experience level for this job. Like 5 or 7 or leave empty');
define('_lkn_job_degree_tip','Select the preferred education level for this job');
define('_lkn_job_salary_tip','Enter the "Yearly Job Salary" for this job');
define('_lkn_job_show_salary_tip','You can choose whether the job seeker can see the job salary or not');
define('_lkn_job_publish_up_tip','Start Publishing::Start Publishing date/time');
define('_lkn_job_publish_down_tip','Finish Publishing::Finish Publishing date/time');
define('_lkn_job_hits_tip','Job hits.');

define('_lkn_cover_letter_title_tip','Enter a title for this cover letter like "Teaching Cover Letter" , "Web Design Cover Letter" etc.');
define('_lkn_cover_letter_tip','Enter your cover letter.');

define('_lkn_credit_total_tip','How many credits does this user currently have?');
define('_lkn_credit_can_search_tip','This user can use the resume database until this date');

define('_lkn_status_tip','Statuses are like the categories of an application. Status Example: Rejected, Called for first interview, Rejected etc. You can define more status according to your company or jobs');

define('_lkn_email_template_title_tip','Write the title of this e-mail template');
define('_lkn_email_template_tip','Write the email template here. E-mail template will be shown to you when you are evaluating your applications. It will help you save time. For example, You can create an e-mail template to reject the application or You can create an e-mail template to accept the application, etc');

define('_lkn_app_status_tip','You can change the status of this application');
define('_lkn_app_date_tip','Application was created on this date');
define('_lkn_app_last_update_date_tip','The last modified date of of this application');
define('_lkn_app_comments_tip','You can enter comments for this application like "This application is rejected for X reason", "Applicant has been called for the first interview on X date" or any other comment you want to add');
define('_lkn_app_email_template_tip','Your e-mails that you have created from E-mail templates section. When you select any e-mail template, All values on this form will be filled in automatically');
define('_lkn_app_email_from_tip','Your e-mail address');
define('_lkn_app_email_to_tip','Applicants e-mail address');
define('_lkn_app_email_subject_tip','The subject of the e-mail');
define('_lkn_app_email_body_tip','E-mail Body. The message you want to send to the applicant');

define('_lkn_credit_count_tip','Enter number of credits you want to buy like 5 or 7 or 4.5');

define('_lkn_search_job_search_word_tip','This word will be searched in Job Titles, Job Descriptions, Job Qualifications');
define('_lkn_search_job_category_tip','You can select a specific category or categories of jobs to search');
define('_lkn_search_job_country_tip','You can select specific country or countries to search jobs. Use Ctrl key to select more than one country');
define('_lkn_search_job_salary_range_tip','You can enter a salary range like (e.g. "60000 - 75000")');
define('_lkn_search_job_experience_tip','You can specify the experience level range for job search');
define('_lkn_search_job_education_level_tip','You can specify prefered education level for job search');
define('_lkn_search_job_emp_type_tip','You can specify job types');

define('_lkn_company_description','Company Description');

define('_lkn_config_image_resize_desc','<strong>Image Resize and Watermarking of the images will require GD2+ library.</strong>');
define('_lkn_config_image_resize_gd_yes','We have detected GD2+ library on your server. These functions will work on your server');
define('_lkn_config_image_resize_gd_no','We did not find the required GD library version on your server. You need to contact your hosting provider. Image Watermarking feature will not work on this server');
define('_lkn_config_image_resize_desc2','<h2>One suggestion: Enter your values to this section and never change them</h2>');

define('_lkn_config_image_resize_active','Image Resize Active?');
define('_lkn_config_image_resize_active_desc','If you select yes, your resume images and company logos will be resized.');
define('_lkn_config_image_watermark_text','Watermark Text');
define('_lkn_config_image_watermark_text_desc','Creates a text label on the image (your web site name or url etc). Leave Empty to disable this feature.');
define('_lkn_config_image_watermark_text_color','Watermark Text Color');
define('_lkn_config_image_watermark_text_color_desc','Text color for the text label, in hexadecimal (default: #000000)');
define('_lkn_config_image_watermark_text_background_color','Watermark Text Background Color');
define('_lkn_config_image_watermark_text_background_color_desc','Text label background color, in hexadecimal (default: #FFFFFF)');

define('_lkn_config_image_dimensions','<h2>Image Dimensions</h2>');

define('_lkn_config_resume_image_watermark','Watermark Resume Images');
define('_lkn_config_resume_image_watermark_desc','If you select yes, Watermark text which you have configured above will be inserted onto the resume images');
define('_lkn_config_resume_image_width','Resume Image Width');
define('_lkn_config_resume_image_width_desc','Maximum width of the resume image. Default: 100');
define('_lkn_config_resume_image_height','Resume Image Height');
define('_lkn_config_resume_image_height_desc','Maximum Height of the resume imageDefault: 160');
define('_lkn_config_company_logo_watermark','Watermark Company Logos');
define('_lkn_config_company_logo_watermark_desc','If you select yes, Watermark text which you have configured above will be inserted onto the company logos');
define('_lkn_config_company_logo_width','Company Logo Width');
define('_lkn_config_company_logo_width_desc','Maximum width of company logo. Default: 150');
define('_lkn_config_company_logo_height','Company Logo Height');
define('_lkn_config_company_logo_height_desc','Maximum Height of the company logo. Default: 40');

//added for Jobs! 1.0.8
define('_lkn_config_home_page_category_column','Category Column Count');
define('_lkn_config_home_page_category_column_desc','Display categories in multi column html table. For example, If you write 2 for this , The categories on the home page will be displayed in 2 coloumns. Default:2');
define('_lkn_config_home_page_category_job_count','Job Counts');
define('_lkn_config_home_page_category_job_count_desc','Show job counts under a category. If you select yes, job counts under categories will be shown');

define('_lkn_category_categories','Categorias');//plural

define('_lkn_credit_system','Credit System');
define('_lkn_credit_add_new_credit','Add New Credit');
define('_lkn_credit_add_new_credit_currency_tip','Write currency for the payment you received like USD, TRY, EURO. This value is showed Employer Credit Buying History');
define('_lkn_credit_add_new_credit_payer_email_tip','If you have received the payment from a web site like Paypal, Write payer e-mail');
define('_lkn_credit_add_new_credit_verify_sign_tip','You can enter whether to verify and sign for the payment');
define('_lkn_credit_add_new_credit_credit_cost_tip','How much money did you recieve for adding this credit?');
define('_lkn_credit_add_new_credit_credit_count_tip','How many credits do you want to add for this session? If the user has 10 credits and you enter 20 to this value, 20 credits will be added to the users account. So the user wll have 30 credits after you have completed this');
define('_lkn_credit_add_new_credit_tnx_id_tip','What is the Transaction ID for the payment? You need to write a unique ID for this');
define('_lkn_credit_add_new_credit_attribs_tip','You can write the other details of the payment here');
define('_lkn_error_member_is_a_employer','The member you have selected is an employer. Employers can not have resumes or cover letters or use any of the job seeker tools');
define('_lkn_error_member_is_a_job_seeker','The user you have selected is a Job Seeker. Job Seekers can not own a company or have credits or use the company functions.');
define('_lkn_config_resume_user_name_desc','Select the owner of the resume. NOTE: IF THE USER YOU HAVE SELECTED IS AN EMPLOYER (RELATED WITH A COMPANY) , YOU WILL NOT BE ABLE TO ADD/UPDATE THE RESUME');
define('_lkn_config_employer_inform_on_company_approve','Inform Employer?');
define('_lkn_config_employer_inform_on_company_approve_desc','Employer will get an e-mail when his or her company is approved');
define('_lkn_config_employer_inform_on_company_submission','Submission Confirm E-mail?');
define('_lkn_config_employer_inform_on_company_submission_desc','Employer will get an e-mail when he has submitted company');

define('_lkn_toolbar_employer_tools','Herramientas de empleador');//Employer Tools
define('_lkn_toolbar_job_seeker_tools','Job Seeker Tools');
define('_lkn_toolbar_job_categories','Categorías de trabajo');
define('_lkn_toolbar_message','Hello  {USERNAME}');
define('_lkn_toolbar_message_guest','Guest');

define('_lkn_error_employer_can_not_apply','Employers can not apply for jobs');
define('_lkn_error_employer_can_visit_worker_panel','Employers can not visit the Job Seeker Panel or use Job Seeker Panel functions');
define('_lkn_error_worker_can_visit_employer_panel','Job Seekers can not visit the Employer Panel or use Employer Panel functions');

define('_lkn_credit_payment_method','Payment Method');
define('_lkn_credit_payment_method_tip','If you buy credits with paypal, It will be applied to your account after you have completed the payment. If you choose the bank transfer');
define('_lkn_credit_payment_method_paypal','Paypal');
define('_lkn_credit_payment_method_bank_transfer','Bank Transfer');
define('_lkn_error_payment_type_is_empty','You need to select payment type');
define('_lkn_credit_payment_method_bank_transfer_result_message','The first step is completed for the credit buying with the bank transfer. Now, You need to complete the payment to our bank account and inform us about your payment with the help of "Pending Credits" link from your "Employer Panel".');


define('_lkn_config_show_tool_bar','Show Toolbar?');
define('_lkn_config_show_tool_bar_desc','You can show or hide the component toolbar. Suggested setting is Show.');
define('_lkn_config_credit_system_paypal_active','Paypal Active?');
define('_lkn_config_credit_system_paypal_active_desc','If yes, users will be able to buy credit with their paypal accounts. Default: Yes');
define('_lkn_config_credit_system_bank_transfer_active','Bank Transfer Active?');
define('_lkn_config_credit_system_bank_transfer_active_desc','<p>If yes, users will be able to buy credit with bank transfer.</p><ol><li>User can buy credits by choosing bank transfer as the payment option</li><li>(If you have selected \'Inform me on credit buying\' parameter \'Yes\' under \'Email Tab\'), You will recieve an e-mail when an employer buys credits</li><li>After the user has completed the payment to your bank account, the user can inform you or send the payment details from the \'Employer Panel\'. When user does this, you will get a second e-mail</li><li>After you confirm the payment from the admin panel, Credits will applied to the users account</li></ol><em>Note: When you activate this, We suggest you to edit _lkn_employer_pending_credit_desc variable in your language file. Insert somethink like "Our payment details is this url" with a link to the page that contains your payment details</em>');
define('_lkn_config_credit_system_bank_transfer_inform_user','Inform User?');
define('_lkn_config_credit_system_bank_transfer_inform_user_desc','When you & the user have completed the the step above, User will recieve an e-mail when his credit is approved or rejected');

define('_lkn_list_pending_credits','List Pending Credits');
define('_lkn_employer_pending_credit','Pending Credits');
define('_lkn_employer_pending_credit_desc','<p>Pending credits are the credits you have requested to buy but you did not complete the payments. This tool will help you to send the details of the payment to the site administrator. After site administrator confirms your payment, The credits will be applied to your account.</p><p>You can find our payment details on this url (CHANGE THIS TO YOUR PAYMENT DETAIL PAGE)</p>');
define('_lkn_employer_pending_credit_date','Requested Date');
define('_lkn_employer_pending_payment_date','Payment Date');
define('_lkn_employer_pending_inform_date','Inform Date');
define('_lkn_employer_pending_credit_payment_made','Pending Approval . You have completed payment for this credit and informed the site administrator. You can resend the payment details to the site administrator with the help of the button.');
define('_lkn_employer_pending_credit_payment_not_made','You have not completed payment yet. You can send the payment details to the site administrator');
define('_lkn_employer_pending_credit_credit_cost_tip','The amount of money you have paid for buying these credits');
define('_lkn_employer_pending_credit_credit_count_tip','The number of credits you want to buy');
define('_lkn_employer_pending_credit_date_tip','The date you have requested to buy the these credits');
define('_lkn_employer_pending_payment_date_tip','When did you make the payment to our bank account? Please select the date by clicking the button');
define('_lkn_employer_pending_inform_date_tip','The date you have sent the payment details to the site administrator . The date is calculated automatically when you hit the button below.');
define('_lkn_employer_pending_credit_tnx_id_tip','The unique Transaction ID of payment that you have taken from the bank transfer');
define('_lkn_employer_pending_credit_other_details_tip','Other details of the payment you may want to add');
define('_lkn_employer_pending_credit_inform_site_editor','Inform the site administrator about your payment');
define('_lkn_employer_pending_credit_warn','<p>Please take care</p><ol><li>Please double check the details because you will not be able to edit the details later</li><li>An e-mail will be sent to the site administrator about your payment details after you hit the button</li></ol>');

define('_lkn_employer_pending_credit_payment_sent','Payment information has been sent by the user. You can approve the credits');
define('_lkn_employer_pending_credit_payment_is_not_sent','Payment information has not been sent by the user. You can not approve the credits');
define('_lkn_employer_pending_credit_action','Approve or reject the pending credit');
define('_lkn_employer_pending_credit_approved','You have successfuly approved the pending credits');
define('_lkn_employer_pending_credit_rejected','You have successfuly rejected the pending credits');
define('_lkn_employer_pending_credit_count_zero','<h1>There are no pending credits</h1>');
define('_lkn_employer_pending_saved','You have successfuly sent the payment details to us with an e-mail. Please let us to confirm your payment');

define('_lkn_error_pending_credit_tnx_id_empty','You must enter the Transaction ID');
define('_lkn_error_pending_credit_payment_date_empty','You must select the payment date');

define('_lkn_employer_forced_company_saved_message','We have received your company submission. We will review it shortly');

//added for 1.0.10
define('_lkn_job_location','Location');
define('_lkn_new_to_jobs','New to lknJobs?');
define('_lkn_new_to_jobs_desc','<a href="http://www.instantphp.com/store/details/6/jobs.html">lknJobs is a professional job portal management component for Joomla 1.0.x and Joomla 1.5.x . (CHANGE THIS FROM YOUR LANGUAGE FILE) >></a>');
define('_lkn_home_page_who_are_we','Who We Are');
define('_lkn_home_page_who_are_we_desc','<p>Your are currently looking at <a href="http://www.instantphp.com/store/details/6/jobs.html" target="_blank">Joomla Jobs</a> . Our component is a full featured jobs component for Joomla 1.0.x and Joomla 1.5.x. This is an example of text about your Job web site. You can edit this text from your language file</p>');

define('_lkn_config_home_page_ads','Ads on home page?');
define('_lkn_config_home_page_ads_desc','You can insert your ads code like adsense or another here. Html is allowed. The code you have inserted here will be inserted to the home page on right panel. You have to leave this field empty to disable this.');
define('_lkn_jobs','Jobs');//plural - çoğul
define('_lkn_job_city','Ciudad de trabajo');
define('_lkn_job_city_tip','Enter job city (or cities). If you are going to write more than one city, separate them with commas like New York, Istanbul, London');
define('_lkn_job_state','Job State');
define('_lkn_job_state_tip','Enter state (or states) where job is located. If you are going to enter more than one state, seperate them with commas like GA, NE, DC');
define('_lkn_job_city_search_tip','Enter the city you want to search for jobs in like Chicago, New York');
define('_lkn_job_state_search_tip','Enter the state you want to search for jobs in like IL, NY');

define('_lkn_config_templates','Templates');
define('_lkn_config_templates_select','Select The Template');
define('_lkn_config_templates_select_desc','<p>Select the component template</p><p>Notes for templates system:</p><ol><li>All templates are located under the /components/com_jobs/templates/ folder</li><li>Make sure that template names do not contain any illegal characters. Templates names must only contain letters and numbers</li><li>Template names and template css file name must have the same name</li></ol><p>We are currently writing documentation for the template system. If you have any questions about templates, you can use our support forum</p>');
define('_lkn_config_templates_advice_title','Advice Title');
define('_lkn_config_templates_advice','Advice');
define('_lkn_config_templates_advice_desc','<p>Advice is shown on the job detail pages so the user will see this advice before they apply for a job.</p><p><span style="text-decoration: underline;">An Example of Advice</span></p><p><em>Para su privacidad y la protección, al solicitar un trabajo en líneasadfasdfasfd:<br />Never give your social security number to a prospective employer, provide credit card or bank account information, or perform any sort of monetary transaction.<br /><br />By applying for a job using YourSite.Com you are agreeing to comply with and be subject to the YourSite.com Terms and Conditions for use of our website. To use our website, you must agree with the Terms and Conditions and both meet and comply with their provisions.</em></p><p>You can write html to the advice description section. If you want to disable this feature, leave the advice title empty</p>');


define('_lkn_company_has_active_jobs','{COMPANY_NAME} has {COUNT} active jobs');
define('_lkn_worker_no_cover_letter','<h1>There are no cover letters</h1>');
define('_lkn_job_print','Print this job');

define('_lkn_config_social_bookmarking','Social Bookmarking');
define('_lkn_config_social_bookmarking_active','Social Bookmarking Active?');
define('_lkn_config_social_bookmarking_active_desc','If yes, Social Bookmarking buttons will be inserted into the job detail pages. (Under company logo and company link)');
define('_lkn_config_social_bookmarking_type','Button Type');
define('_lkn_config_social_bookmarking_type_local','Local Buttons');
define('_lkn_config_social_bookmarking_type_addthis','Addthis.com Button');
define('_lkn_config_social_bookmarking_type_desc','<p><strong>Local Buttons</strong>: Social Bookmaking buttons wll be displayed from your local server</p><p><strong>Addthis.com button</strong>: An addthis.com button will be inserted</p>');
define('_lkn_config_social_bookmarking_addthis_id','AddThis.com ID');
define('_lkn_config_social_bookmarking_addthis_id_desc','If you have selected Addthis.com button from above, write your AddThis.com ID you have gotten from their web site');
define('_lkn_config_social_bookmarking_addthis_button_url','AddThis.com Button');
define('_lkn_config_social_bookmarking_addthis_button_url_desc','You can choose button for addthis.com button. Write the full url for the addthis.com button. Default is http://s7.addthis.com/static/btn/lg-share-en.gif');

define('_lkn_list_employers','List Employers');
define('_lkn_list_employers_count','Company Count');
define('_lkn_list_employers_jobs','Jobs owned by this user');
define('_lkn_list_employers_et','Email Templates owned by this user');
define('_lkn_list_workers','List Job Seekers');
define('_lkn_list_workers_count','Resume Count');

define('_lkn_home_page_indeed','Indeed Jobroll'); 
define('_lkn_config_home_page_indeed','Indeed Jobroll?');
define('_lkn_config_home_page_indeed_desc','You can show or hide the Indeed Jobroll. The parameters are below. Note: There indeed jobroll modules for Joomla 1.0 and Joomla 1.5 in the package you have downloaded. You can also use them.');

define('_lkn_home_page_post_resume','Post your resume and have employers find you!');
define('_lkn_home_page_rss_feeds','Getting latest jobs from our web site is one click away from you');
define('_lkn_home_page_cover_letter_desc','Create cover letters for your applications');
define('_lkn_home_page_my_application_desc','View all of your applications together and follow the responses');
define('_lkn_resume_hits','Resume Hits');
define('_lkn_config_employer_approve_all_companies','Approve All New Companies?');
define('_lkn_config_employer_approve_all_companies_desc','<p><strong>Yes</strong>:  The companies which are submitted by the employers will not be active until you approve it. You need to approve all companies before they add jobs for the companies.</p><p>Users will not be able to change the company publishing status. SUGGESTED SETTING IS YES FOR THIS PARAMETER</p><p><strong>No</strong>: Users can submit company and Company becomes active instantly</p><p><strong>Note</strong>: You can get an e-mail when the user submits a company by selecting \'<em>Inform me of Additions or updates of companies</em>\' parameter under \'<em>Email</em>\' tab.</p>');
define('_lkn_config_worker_prevent_to_delete_last_resume','Prevent Deleting of the last resume?');
define('_lkn_config_worker_prevent_to_delete_last_resume_desc','If you select yes, Jobs! will prevent the job seeker from deleting the last resume the user has. SUGGESTED SETTING IS YES FOR THIS PARAMETER');
define('_lkn_error_worker_prevent_to_delete_last_resume','This resume is your last resume. You can not delete it. If you want, You can unpublish the resume or create another resume and then delete it.');
define('_lkn_apply','Apply');
define('_lkn_save_as_new','Save As New');

//added for Jobs! 1.0.11
define('_lkn_config_category_order','Category Order');
define('_lkn_config_category_order_desc','Select the order for job categories');

//added for Jobs! 1.0.12
define('_lkn_list_files','List Resume Files');
define('_lkn_files_file_name','File Name');
define('_lkn_config_files','User Files System');
define('_lkn_config_files_desc','Job Seekers can attach files (like pdf, doc files etc) or images to their resumes with the help of <strong>U</strong>ser <strong>F</strong>iles <strong>S</strong>ystem (UFS)');
define('_lkn_config_files_active','UFS active?');
define('_lkn_config_files_active_desc','You open/close UFS');
define('_lkn_config_files_closed','<h1>User Files System is closed from your configuration system</h1>');
define('_lkn_config_files_folder','Files Folder');
define('_lkn_config_files_folder_desc','Which folder will be used for UFS. You must be sure that folder exist and must be writable (Chmod 777). This value must start and finish with a / . Default: /images/stories/jobs/files/');
define('_lkn_config_files_file_types','Allowed File Types');
define('_lkn_config_files_file_types_desc','Which file types can be used for resume attachments. Default: zip,rar,txt');
define('_lkn_config_files_image_types','Allowed Image Types');
define('_lkn_config_files_image_types_desc','Which image types can be used for attachments. Default: jpeg,jpg,png,gif');
define('_lkn_config_files_image_rezize_desc','If you select yes, The images uploaded by job seekers will be will be resized'); 
define('_lkn_config_files_size','File size (Kb)');
define('_lkn_config_files_size_desc','The maximum size of the files for uploading in Kb. Default : 1024 . Note: 1024 Kb= 1MB');
define('_lkn_config_files_image_watermark_active','Image Watermark Active?');
define('_lkn_config_files_image_watermark_active_desc','If you select yes, Watermark text which you have configured on "Email Tab>Watermark Text, Watermark Text Color, Watermark Text Background Color" will be inserted onto the UFS images');
define('_lkn_config_files_own_count','Owned File Count');
define('_lkn_config_files_own_count_desc','If you write 10 to this parameter, The user will be allowed to have max. 10 files. Write 0 (zero) to close this feature');
define('_lkn_config_files_attach_count','Attach Count');
define('_lkn_config_files_attach_count_desc','If you write 10 to this parameter, The user will be allowed to attach max. 10 files to one resume Default : 5 . Write 0 (zero) to close this feature');
define('_lkn_files_file_new','Add new file');
define('_lkn_files_file_new_is_not_allowed','You can\'t add new file');
define('_lkn_files_file_update','Update file');
define('_lkn_files_owner','File Owner');
define('_lkn_owner_tip','Select the owner from the drop down list. NOTE: You will see users with J, B, E and without letters next to their names.<br /><br />J : This user is a Job Seeker . You can not assign company (or a company related think like credit adding) this user. <br /><br />E: This user is an Employer. You can assign resume (or any job seeker related think like cover letter) to this user.  <br /><br />B: This user is blocked by you or The user is not confirmed the e-mail address');
define('_lkn_file_notes','File Notes');
define('_lkn_file_notes_tip','You can take notes for this file. This note is not visible for the employers. It\'s only for you (Max. 255 letters)');
define('_lkn_file_upload_tip','You can upload file/image. Click the button an select file/image from your computer');
define('_lkn_file_is_used','The file you are looking for is used for the resumes below');
define('_lkn_resume_files','Resume Files');
define('_lkn_resume_files_tip','Select the files that you want to attach to this resume. You can use Ctrl key to select more than one file');
define('_lkn_file_hits','File Hit(s)');
define('_lkn_worker_files','My Resume Files');
define('_lkn_worker_files_desc','You can upload files like MS Word documents , pdf documents for attaching to your resume. Upload your resume and make changes at any time. ');
define('_lkn_worker_files_count_info','You have {COUNT} file(s) and You can have maximum {TOTAL} file(s)');
define('_lkn_list_files_no','<h1>There is  no file to display</h1>');
define('_lkn_error_files_no','You must select file to upload');
define('_lkn_error_files_attach_count','You can attach maximum {COUNT} file(s) to this resume');
define('_lkn_error_attachment_can_not_download','<h1>You can not download the attachment.</h1><p>The reason may be one of the below ones.</p><ol><li class="smallfont">The attachment is deleted by the site administrator </li><li class="smallfont">You may not have sufficient privileges to to download this attachment. </li></ol>');
define('_lkn_draft','Draft');
define('_lkn_error_job_has_app','You can not make this job draft because it has applications');
define('_lkn_employer_info_draft','This job is a draft. It is not published yet.');
define('_lkn_error_saved_as_draft','Job is saved as draft');
define('_lkn_error_updated_as_draft','Job is updated as draft');
define('_lkn_job_inform_me','Inform me');
define('_lkn_job_inform_me_tip','If you select yes, You will get an e-mail when a job seeker applies to this job');

define('_lkn_config_employer_inform_on_application','Inform employer on application?');
define('_lkn_config_employer_inform_on_application_desc','* <u>Let Employer to Choose</u> : Employers will need to select \'Inform me?\' parameter while they are creating the job.<br />* <u>Allways Inform Employer</u>: Employer will allways get an email when they recieve application<br/>* <u>Do not Inform Employer</u>: Employer will not get e-mail about applications.');

define('_lkn_app_history','Application History');
define('_lkn_app_history_desc','You can find the details of other applications by this user to job owner company');

define('_lkn_config_make_jobs_national','Make Jobs! National');
define('_lkn_config_make_jobs_national_desc','<p>Country Field is used for company details and Job Details for Jobs! design. This parameter helps you to <strong>hide</strong> the country field for your employers and job seekers. Country Fied will continue to exist but any of your visitors/employers/job seeker will see it. You will continue to see the country fields on admin panel</p><p>* Write country id you want to use. Visit <em>Joomla Admin Panel&gt;Components&gt;Jobs&gt;List Countries</em> . Add new country and write the id of your country. Make sure that country is published</p><p>* write 0 (zero) to close this feature</p>');
define('_lkn_resume_add_quick_resume','Add Quick Resume');

define('_lkn_config_job_seeker_activate','Activate Job Seeker Functions');
define('_lkn_config_job_seeker_activate_desc','<p>If you select \'Yes\' , Your users will be able to add their resumes (and using related job seeker functions like job cover letters, making applications to the jobs) to your web site.</p><p>Note: \'Super Administrator\' user group is out of this criteria</p>');
define('_lkn_config_home_page_companies','Home Page Companies');
define('_lkn_config_home_page_companies_desc','You can show the latest or random companies on your home page. Jobs! will select the companies which has a logo. Latest Companies will show latest companies . Random Companies will show random companies on your home page. Hide will close this feature');
define('_lkn_config_home_page_company_count','Home Page Company Count');
define('_lkn_home_page_hiring','Now Hiring');
define('_lkn_error_upload','File is not Uploaded');

//lknJobs 1.1
define('_lkn_order','Order');
define('_lkn_list_field_categories','List Resume Field Categories');
define('_lkn_field_category_order','Order');
define('_lkn_field_category_order_tip','Select the order of Resume Field Categories. Small order numbers will be displayed first');
define('_lkn_field_category_add','Add New Resume Field Category');
define('_lkn_field_category_update','Update Resume Field Category');

//lknJobs 1.1.2
define('_lkn_config_hide_company','Hide Company?');
define('_lkn_config_hide_company_all','Show All Company Details');
define('_lkn_config_hide_company_choose','Allow Company Choose');
define('_lkn_config_hide_company_hide','Hide All Company Details');
define('_lkn_config_hide_company_desc','<p>* <span style="text-decoration: underline;">Show All Company Details</span>: Jobs! will show company details to the job seekers and public</p><p>* <span style="text-decoration: underline;">Allow Company Choose</span>: A "Hide Company Name?" option will appear on job form. This will be an option employers to be able to post jobs anonymously.</p><p>* <span style="text-decoration: underline;">Hide All Company Details</span>: This will hide "Company Details" from job seekers and public. Job Seeker will be able to see company details after he makes an application to the job</p>');
define('_lkn_job_hide_company_name','Hide Company Name?');
define('_lkn_job_hide_company_name_tip','If you select YES, Job Seeker will not be able to see the company name until they make an application');
define('_lkn_job_company_name_is_hidden','Company Name is secret');

define('_lkn_list_education_levels','List Education Levels');
define('_lkn_education_level_add','Add New Education Level');
define('_lkn_education_level_update','Update Education Level');
define('_lkn_education_level','Education Level');
define('_lkn_education_level_tip','Write the name of education level. Education Level will be created automaticly');
define('_lkn_education_level_value','Education Level Value');

define('_lkn_list_job_types','List Job Types');
define('_lkn_job_type_add','Add New Job Type');
define('_lkn_job_type_update','Update Job Type');
define('_lkn_job_type_level','Job Type');
define('_lkn_job_type_level_tip','Write the name of job type. Job Type Value will be created automaticly');
define('_lkn_job_type_value','Job Type Value');

define('_lkn_job_search_cats_select_all','Select All');
define('_lkn_job_search_cats_select_all_clear','Clear Selection');

define('_lkn_job_posting_redirect_payment_page_message','You must have {REQUIRED_CREDIT} credit(s) to post a job on our web site but you have {CURRENT_CREDIT_COUNT} credits');
define('_lkn_config_job_posting_redirect_payment_page','Redirect to payment page?');
define('_lkn_config_job_posting_redirect_payment_page_desc','THIS PARAMETER WILL USED , IF YOUR CREDIT SYSTEM ACTIVE<br /><br />* <strong>Yes</strong>: If your employers visits the "Job Posting" page without having enough credits to post job, They will be redirected to the credit buying page with a message. You can change the message from your language file . Your current message is like "You must have 5 credit(s) to post a job on our web site but you have 1 credits" <br /><br /><strong>No</strong>: The redirect mentioned above will not be done but if they have not enough credits to post job, Their job will be saved as draft');

define('_lkn_config_job_apply','Job Apply Page');
define('_lkn_config_job_apply_new_resume_create','Create New Resume On Job Apply Page');
define('_lkn_config_job_apply_new_resume_create_desc','YES: Job Seekers are allowed to create on Job Apply Page (Job Seeker Panel>Resume Count will effect this parameter)<br /><br />NO: Users are not allowed to create on Job Apply Page. <br /><br />You can read <a href="http://www.instantphp.com/support/33-completed/2708-redirect-to-add-rew-resume-when-applying.html" target="_new">this thread</a> which is idea behind this parameter');
define('_lkn_job_apply_new_resume_create','or Create New Resume');
define('_lkn_job_apply_new_resume_createand_apply','Create A New Resume & Apply Job');

define('_lkn_config_credit_system_googlecheckout_active','Google Checkout Active?');
define('_lkn_config_credit_system_googlecheckout_merchant_id','Your Merchant ID');
define('_lkn_config_credit_system_googlecheckout_merchant_key','Your Merchant Key');
define('_lkn_config_credit_system_googlecheckout_sandbox','Sandbox Mode Active?');
define('_lkn_config_credit_system_googlecheckout_currency','Your Currency');
define('_lkn_config_credit_system_googlecheckout_currency_desc','You MUST write the currency code of your country.');
define('_lkn_config_credit_system_googlecheckout_notes','Your API callback URL is {API_URL}');

define('_lkn_config_credit_system_active_for_job_seekers','Credit System Active For Job Seeekers?');
define('_lkn_config_credit_system_for_job_seekers_adding_a_resume_cost','Creating A Resume Cost');
define('_lkn_config_credit_system_for_job_seekers_adding_a_resume_cost_desc','How many credits does adding a resume cost? Write zero to close this');
define('_lkn_config_credit_system_for_job_seekers_applying_a_job_cost','Applying A Job Cost');
define('_lkn_config_credit_system_for_job_seekers_applying_a_job_cost_desc','How many credits does applying a job? Write zero to close this');

define('_lkn_worker_credit_system_resume_create','<li>You can create {COUNT} resume(s)</li>');//do not remove <li> or </li>
define('_lkn_worker_credit_system_apply_job','<li>You can apply {COUNT} job(s)</li>');//do not remove <li> or </li>
define('_lkn_worker_buy_credits_desc','You will need credits to make certain actions. This module will help you buy credits');
define('_lkn_error_worker_need_more_credits_to_apply_job','You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits');
define('_lkn_credit_speding_history_action_apply_job','Applying A Job');
define('_lkn_error_worker_need_more_credits_to_create_new_resume','You do not have enough credits to create a new resume. Creating a new resume requires {COST} credits but you have {CURRENT_CREDITS} credits');
define('_lkn_credit_speding_history_action_create_resume','Creating A Resume');

define('_lkn_resume_title_tip','Write the of your resume');
define('_lkn_resume_name_tip','Write your full name');
define('_lkn_resume_email_address_tip','Write your e-mail');
define('_lkn_resume_posting_language_tip','Write your resume language');
define('_lkn_config_download_id_desc','You need to write your DownloadID to validate your installation. If you do not know your DownloadID, Please <a href="http://www.instantphp.com/index.php?option=com_instant" target="_blank">click here</a> to edit your license details');
define('_lkn_config_credit_system_paypal_currency','Paypal Currency');
define('_lkn_config_credit_system_paypal_currency_desc','The currency for paypal payments. The selectlist shows the currencies supported by Paypal. Please <a href="https://www.paypal.com/cgi-bin/webscr?cmd=p/sell/mc/mc_wa-outside" target="_blank">click here</a> to see more details');
define('_lkn_config_user_registration','Profile Creation Method');
define('_lkn_config_user_registration_force','On First Visit');
define('_lkn_config_user_registration_plugins','With Plugins');
define('_lkn_config_user_registration_desc','<p>* <span style="text-decoration: underline;">On First Visit</span>: Jobs! will force your users to create their employer or job seeker profile on first visit to Jobs! . See <a href="' . LIVE_SITE.'/administrator/components/com_jobs/images/registration_force.gif" target="_new">this screenshot</a> to have better idea. WE SUGEGST YOU TO SELECT THIS OPTION FOR THIS PARAMETER</p><p>* <span style="text-decoration: underline;">With Plugins</span>: You need to install the seperate registration related plugins which are provided with Jobs! package</p>');
define('_lkn_user_registration_create_profile','Create Profile');
define('_lkn_user_registration_create_profile_worker_message','<h1>REGISTER AS A JOB SEEKER</h1><ul><li>Post your Resume for ease in Applying Online</li><li>Set up Career Agents</li><li>Let employers find you</li><li>Stay up to date on job fairs in your area</li></ul>');
define('_lkn_user_registration_create_profile_worker_link_message','Create Job Seeker Profile');
define('_lkn_user_registration_create_profile_employer_message','<h1>REGISTER AS AN EMPLOYER</h1><ul><li>Post Jobs</li><li>Search the Applicant Database</li><li>Post Volunteer Jobs for FREE!</li><li>...and much more!</li></ul>');
define('_lkn_user_registration_create_profile_employer_link_message','Create Employer Profile');

//added for Jobs! 1.2.1
define('_lkn_config_employer_inform_on_application_let_employer_to_choose','Let Employer To Choose');
define('_lkn_config_employer_inform_on_application_allways_inform','Allways Inform');
define('_lkn_config_employer_inform_on_application_do_not_inform','Do Not Inform');

?>