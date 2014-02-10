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

// ensure this file is being included by a parent file

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

define("JR", dirname(dirname(dirname(dirname(__FILE__)))) );

function com_install() {
	
	global $_lknBaseFramework,$option;
	lknJobsInstaller::installLibrary();
	lknJobsInstaller::installAdminSide();
	lknJobsInstaller::installFrontSide();
	lknJobsInstaller::doCleaning();
	doSqlJobs();//veritabanı tablo değişleri yapılacak
	
	
	$logo_folder=lknJobsInstaller::makeDir(JR . DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'stories'.DIRECTORY_SEPARATOR.'jobs'.DIRECTORY_SEPARATOR.'logos');
	
	$cv_images=lknJobsInstaller::makeDir(JR . DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'stories'.DIRECTORY_SEPARATOR.'jobs'.DIRECTORY_SEPARATOR.'cv_images');
	
	$files=lknJobsInstaller::makeDir(JR . DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'stories'.DIRECTORY_SEPARATOR.'jobs'.DIRECTORY_SEPARATOR.'files');
	
	
}




function doSqlJobs(){
	//kurulum bitti
	$file=JR . DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_jobs'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'common.php';
	require_once ($file);
	
	global $_db;
	
	$fieldlist_j=$_db->getTableFields('#__jobs_jobs');
	$fieldlist_r=$_db->getTableFields('#__jobs_resumes');
	$fieldlist_c=$_db->getTableFields('#__jobs_categories');
	
	//1.0.10 için değişen fieldları kontrol başladı
		if (array_key_exists('state',$fieldlist_j)) {
			//eğer state varsa city'de var demektir.
			//city ve state Jobs! 1.0.10 için eklendi
		}else {
			//jobs_jobs tablosuna city ve state sütunlarını ekle
			$sql="ALTER TABLE #__jobs_jobs ADD state VARCHAR( 100 ) NOT NULL AFTER country ,
					ADD city VARCHAR( 100 ) NOT NULL AFTER state";
			$_db->query($sql);
			$_db->setQuery();
		}
		
		if (array_key_exists('hits',$fieldlist_r)) {
			//eğer resume tablosunda hits varsa bi şey yapma
		}else {
			//resume tablosuna hits değeri eklendi
			$sql="ALTER TABLE #__jobs_resumes ADD hits INT( 11 ) NOT NULL DEFAULT '0' AFTER image";
			$_db->query($sql);
			$_db->setQuery();
		}
		
		if (array_key_exists('currently_working',$fieldlist_r)) {
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `currently_working` `lknjobs_currentlyworking` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `school_diploma` `lknjobs_schooldiploma` VARCHAR( 255 ) NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `school_diploma1` `lknjobs_schooldiplomauniversity` VARCHAR( 255 ) NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `school_diploma2` `lknjobs_schooldiplomagrad` VARCHAR( 255 ) NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `school_diploma3` `lknjobs_schooldiplomaother` VARCHAR( 255 ) NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `available_date` `available_date` DATETIME NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `desired_pay` `desired_pay` INT( 11 ) NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `unavailability` `unavailability` MEDIUMTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `employer_pay` `employer_pay` INT( 11 ) NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `employer1_pay` `employer1_pay` INT( 11 ) NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `employer2_pay` `employer2_pay` INT( 11 ) NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `employer3_pay` `employer3_pay` INT( 11 ) NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `driver_license` `lknjobs_dl` VARCHAR( 255 ) NOT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes` CHANGE `dl_number` `lknjobs_dlnumber` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE #__jobs_resumes ADD `lknjobs_canwork` MEDIUMTEXT";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE #__jobs_resumes ADD `lknjobs_available` MEDIUMTEXT";
			$_db->query($sql);
			$_db->setQuery();
			
			$sql="ALTER TABLE `#__jobs_resumes`
			  DROP `evenings`,
			  DROP `weekends`,
			  DROP `monday`,
			  DROP `tuesday`,
			  DROP `wednesday`,
			  DROP `thursday`,
			  DROP `friday`,
			  DROP `saturday`,
			  DROP `sunday`;";
			$_db->query($sql);
			$_db->setQuery();
			echo $_db->getErrorMessage();
		}
		
		//	
			
		if (array_key_exists('image',$fieldlist_c)) {
			//jobs_categories tablosundan image sütunu kaldır		
			$sql="ALTER TABLE #__jobs_categories DROP image ";
			$_db->query($sql);
			$_db->setQuery();
		}
	//1.0.10 için değişen fieldları kontrol bitti
	
	//1.0.12 için değişen değerler başlangıcı
		if (array_key_exists('inform_me',$fieldlist_j)) {
			//inform_me sütunu eklendi #__jobs_jobs tablosuna
		}else {
			$sql="ALTER TABLE #__jobs_jobs ADD inform_me TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER hits";
			$_db->query($sql);
			$_db->setQuery();
		}
	//1.0.12 için değişen değerler bitişi
	
	//1.1 için değişiklikler başladı
		$db_fields2=&lknDb::createInstance();
			
		$sql="CREATE TABLE IF NOT EXISTS `#__jobs_field_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldid` int(11) NOT NULL DEFAULT '0',
  `fieldvalue` varchar(50) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
	$db_fields2->query($sql);
		$db_fields2->setQuery();

$sql="CREATE TABLE IF NOT EXISTS `#__jobs_field_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(3) NOT NULL,
  `can_unpublish` tinyint(1) NOT NULL DEFAULT '1',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
$db_fields2->query($sql);
		$db_fields2->setQuery();

		$sql="CREATE TABLE IF NOT EXISTS `#__jobs_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `search_tooltip` mediumtext NOT NULL,
  `error_message` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `maxlength` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `required` tinyint(4) DEFAULT '0',
  `cat_id` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `cols` int(11) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `searchable` tinyint(1) NOT NULL DEFAULT '0',
  `can_unpublish` tinyint(1) NOT NULL DEFAULT '1',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tabid_pub_prof_order` (`cat_id`,`published`,`ordering`),
  KEY `readonly_published_tabid` (`published`,`cat_id`),
  KEY `registration_published_order` (`published`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
$db_fields2->query($sql);
		$db_fields2->setQuery();
		$db_fields=&lknDb::createInstance();
		$sql="SELECT id FROM #__jobs_field_categories WHERE id='1'";
		$db_fields->query($sql);
		$db_fields->setQuery();
		$count=$db_fields->num_rows();
		//echo $db_fields->getErrorMessage();
		if ($count==0) {
			$sql="INSERT INTO `#__jobs_field_categories` (`id`, `parent_id`, `title`, `ordering`, `can_unpublish`, `can_delete`, `published`) VALUES 
			(1, 0, 'General', 1, 0, 0, 1),
			(2, 0, 'Photo', 2, 1, 0, 1),
			(3, 0, 'Resume Files', 13, 1, 0, 1),
			(4, 0, 'Banned Companies', 12, 1, 0, 1),
			(5, 0, 'Text Resume', 11, 1, 0, 1),
			(6, 0, 'Personal', 4, 1, 1, 1),
			(7, 0, 'Current Address', 3, 1, 1, 1),
			(8, 0, 'Education', 5, 1, 1, 1),
			(9, 0, 'Languages', 6, 1, 1, 1),
			(10, 0, 'Employment', 7, 1, 1, 1),
			(11, 0, 'Recent Employers', 8, 1, 1, 1),
			(12, 0, 'Job Skills', 9, 1, 1, 1),
			(13, 0, 'References', 10, 1, 1, 1),
			(14, 8, 'High School', 1, 1, 1, 1),
			(15, 8, 'University', 2, 1, 1, 1),
			(16, 8, 'Grad School', 3, 1, 1, 1),
			(17, 8, 'Other School', 4, 1, 1, 1),
			(18, 9, 'Language 1', 1, 1, 1, 1),
			(19, 9, 'Language 2', 2, 1, 1, 1),
			(20, 9, 'Language 3', 3, 1, 1, 1),
			(21, 9, 'Language 4', 4, 1, 1, 1),
			(22, 11, 'Total Experience', 1, 1, 1, 1),
			(23, 11, 'Most Recent Employer', 2, 1, 1, 1),
			(24, 11, 'Prior Employer (1)', 3, 1, 1, 1),
			(25, 11, 'Prior Employer (2)', 4, 1, 1, 1),
			(26, 11, 'Prior Employer (3)', 5, 1, 1, 1),
			(27, 13, 'Reference (1)', 1, 1, 1, 1),
			(28, 13, 'Reference (2)', 2, 1, 1, 1),
			(29, 13, 'Reference (3)', 3, 1, 1, 1),
			(30, 13, 'Reference (4)', 4, 1, 1, 1)";
			$db_fields->query($sql);
			$db_fields->setQuery();
			
			$sql="INSERT INTO `#__jobs_fields` (`id`, `name`, `title`, `description`, `search_tooltip`, `error_message`, `type`, `maxlength`, `size`, `required`, `cat_id`, `ordering`, `cols`, `rows`, `published`, `searchable`, `can_unpublish`, `can_delete`) VALUES
		(1, 'title', 'Resume Title', 'Enter the title of this resume', '', '', 'text', 50, 50, 1, 1, 1, NULL, NULL, 1, 1, 0, 0),
		(2, 'alias', 'Alias', 'You can enter tis or leave the alias value empty. If you leave empty, It will be created automatically. Alias will be used to create SEF urls', '', '', 'text', 255, 50, 0, 1, 2, NULL, NULL, 1, 0, 0, 0),
		(3, 'memberid', 'Username', 'Select the owner from the drop down list. NOTE: You will see users with J, B, E and without letters next to their names.J : This user is a Job Seeker . You can not assign company (or a company related think like credit adding) this user. E: This user is an Employer. You can assign resume (or any job seeker related think like cover letter) to this user.  B: This user is blocked by you or The user is not confirmed the e-mail address', '', '', 'pre-defined', NULL, 0, 1, 1, 3, NULL, NULL, 1, 0, 0, 0),
		(4, 'language', 'Resume Language', 'You must write language of this resume. Write full name of the language like English. Not english or ENGlish or ENGLISH', '', '', 'text', 30, 50, 1, 1, 4, 0, 0, 1, 1, 0, 0),
		(5, 'created', 'Created Date', 'The creation date of this resume', '', '', 'pre-defined', NULL, 0, 0, 1, 5, NULL, NULL, 1, 0, 0, 0),
		(6, 'update_date', 'Last Modified Date', 'Last Modified Date of this resume', '', '', 'pre-defined', NULL, 0, 0, 1, 6, NULL, NULL, 1, 0, 0, 0),
		(7, 'hits', 'Resume Hits', 'How many times does this resume viewed?', '', '', 'pre-defined', NULL, 0, 0, 1, 7, NULL, NULL, 1, 1, 0, 0),
		(8, 'published', 'Published', 'Select the publishing status of the resume', '', '', 'pre-defined', NULL, 0, 1, 1, 8, NULL, NULL, 1, 0, 0, 0),
		(9, 'image', 'Photo', 'You can upload an image for your resume. Click on the button and select the image from your computer', '', '', 'pre-defined', NULL, 0, 0, 2, 1, NULL, NULL, 1, 1, 1, 0),
		(10, 'name', 'Full Name', 'Enter your full name like John Brown', '', '', 'text', 255, 50, 1, 6, 1, NULL, NULL, 1, 1, 0, 0),
		(11, 'home_phone', 'Home Phone', 'enter your home phone', '', '', 'text', 20, 50, 0, 6, 2, NULL, NULL, 1, 0, 1, 1),
		(12, 'work_phone', 'Work Phone', 'If you are currently working, write your work phone', '', '', 'text', 20, 50, 0, 6, 3, NULL, NULL, 1, 0, 1, 1),
		(13, 'cell_phone', 'Cell Phone', 'Your cell phone number', '', '', 'text', 20, 50, 0, 6, 4, NULL, NULL, 1, 0, 1, 1),
		(14, 'email_address', 'Email Address', 'Enter your e-mail address', '', '', 'emailaddress', 255, 50, 1, 6, 5, NULL, NULL, 1, 0, 1, 1),
		(17, 'street', 'Street', 'Enter your current address', '', '', 'textarea', 255, 0, 0, 7, 1, 30, 5, 1, 1, 1, 1),
		(18, 'city', 'City', 'Enter the city that you live', '', '', 'text', 255, 50, 0, 7, 2, NULL, NULL, 1, 1, 0, 0),
		(19, 'state', 'State', 'Enter your state', '', '', 'text', 20, 50, 0, 7, 3, NULL, NULL, 1, 1, 0, 0),
		(20, 'zip_code', 'Zip Code', 'Enter your zip code', '', '', 'text', 20, 50, 0, 7, 4, NULL, NULL, 1, 0, 1, 1),
		(21, 'school', 'School', 'Enter the name of the school', '', '', 'text', 255, 50, 0, 14, 1, NULL, NULL, 1, 0, 1, 1),
		(22, 'school_city', 'City', 'Enter the city of the school', '', '', 'text', 255, 50, 0, 14, 2, NULL, NULL, 1, 0, 1, 1),
		(23, 'school_state', 'State', 'Enter the state of the school', '', '', 'text', 255, 50, 0, 14, 3, NULL, NULL, 1, 0, 1, 1),
		(25, 'school1', 'School', 'Enter the name of the school', '', '', 'text', 255, 50, 0, 15, 1, 0, 0, 1, 0, 1, 1),
		(26, 'school_city1', 'City', 'Enter the city of the school', '', '', 'text', 255, 50, 0, 15, 2, NULL, NULL, 1, 0, 1, 1),
		(27, 'school_state1', 'State', 'Enter the state of the school', '', '', 'text', 255, 50, 0, 15, 3, NULL, NULL, 1, 0, 1, 1),
		(29, 'diploma_text1', 'Degree/Certification/Diploma', 'Your Degree/Certification/Diploma at this school', '', '', 'textarea', 255, 0, 0, 15, 5, 30, 5, 1, 0, 1, 1),
		(30, 'study_area1', 'Area of Study', 'Your study area at this school', '', '', 'textarea', 255, 0, 0, 15, 6, 30, 5, 1, 0, 1, 1),
		(31, 'school2', 'School', 'Enter the name of the school', '', '', 'text', 255, 50, 0, 16, 1, NULL, NULL, 1, 0, 1, 1),
		(32, 'school_city2', 'City', 'Enter the city of the school', '', '', 'text', 255, 50, 0, 16, 2, NULL, NULL, 1, 0, 1, 1),
		(33, 'school_state2', 'State', 'Enter the state of the school', '', '', 'text', 255, 50, 0, 16, 3, NULL, NULL, 1, 0, 1, 1),
		(35, 'diploma_text2', 'Degree/Certification/Diploma', 'Your Degree/Certification/Diploma at this school', '', '', 'textarea', 255, 0, 0, 16, 5, 30, 5, 1, 0, 1, 1),
		(36, 'study_area2', 'Area of Study', 'Your study area at this school', '', '', 'textarea', 255, 0, 0, 16, 6, 30, 5, 1, 0, 1, 1),
		(37, 'school3', 'School', 'Enter the name of the school', '', '', 'text', 255, 50, 0, 17, 1, NULL, NULL, 1, 0, 1, 1),
		(39, 'school_city3', 'City', 'Enter the city of the school', '', '', 'text', 255, 50, 0, 17, 2, NULL, NULL, 1, 0, 1, 1),
		(40, 'school_state3', 'State', 'Enter the state of the school', '', '', 'text', 255, 50, 0, 17, 3, NULL, NULL, 1, 0, 1, 1),
		(42, 'diploma_text3', 'Diploma', 'Your Degree/Certification/Diploma at this school', '', '', 'textarea', 255, 0, 0, 17, 5, 30, 5, 1, 0, 1, 1),
		(43, 'study_area3', 'Area of Study', 'Your study area at this school', '', '', 'textarea', 255, 0, 0, 17, 6, 30, 5, 1, 0, 1, 1),
		(44, 'lang_1', 'Language', 'The languages that you can read, write , understand', '', '', 'text', 10, 50, 0, 18, 1, NULL, NULL, 1, 0, 1, 1),
		(45, 'lang_1_reading', 'Reading', 'At what level can you read this language . 1: Worst - 10: Best', '', '', 'select', NULL, 0, 0, 18, 2, NULL, NULL, 1, 0, 1, 1),
		(46, 'lang_1_writing', 'Writing', 'At what level can you write this language', '', '', 'select', NULL, 0, 0, 18, 3, NULL, NULL, 1, 0, 1, 1),
		(47, 'lang_1_understanding', 'Understanding', 'At what level can you understand this language', '', '', 'select', NULL, 0, 0, 18, 4, NULL, NULL, 1, 0, 1, 1),
		(48, 'lang_1_where', 'Where did you learn?', 'Where did you learn this language?', '', '', 'text', 255, 50, 0, 18, 5, NULL, NULL, 1, 0, 1, 1),
		(57, 'lang_2_understanding', 'Understanding', 'At what level can you understand this language', '', '', 'select', NULL, 0, 0, 19, 4, NULL, NULL, 1, 0, 1, 1),
		(56, 'lang_2_writing', 'Writing', 'At what level can you write this language', '', '', 'select', NULL, 0, 0, 19, 3, NULL, NULL, 1, 0, 1, 1),
		(55, 'lang_2_reading', 'Reading', 'At what level can you read this language . 1: Worst - 10: Best', '', '', 'select', NULL, 0, 0, 19, 2, NULL, NULL, 1, 0, 1, 1),
		(54, 'lang_2', 'Language', 'The languages that you can read, write , understand', '', '', 'text', 10, 50, 0, 19, 1, NULL, NULL, 1, 0, 1, 1),
		(58, 'lang_2_where', 'Where did you learn?', 'Where did you learn this language?', '', '', 'text', 255, 50, 0, 19, 5, NULL, NULL, 1, 0, 1, 1),
		(59, 'lang_3', 'Language', 'The languages that you can read, write , understand', '', '', 'text', 10, 50, 0, 20, 1, NULL, NULL, 1, 0, 1, 1),
		(60, 'lang_3_reading', 'Reading', 'At what level can you read this language . 1: Worst - 10: Best', '', '', 'select', NULL, 0, 0, 20, 2, NULL, NULL, 1, 0, 1, 1),
		(61, 'lang_3_writing', 'Writing', 'At what level can you write this language', '', '', 'select', NULL, 0, 0, 20, 3, NULL, NULL, 1, 0, 1, 1),
		(62, 'lang_3_understanding', 'Understanding', 'At what level can you understand this language', '', '', 'select', NULL, 0, 0, 20, 4, NULL, NULL, 1, 0, 1, 1),
		(63, 'lang_3_where', 'Where did you learn?', 'Where did you learn this language?', '', '', 'text', 255, 50, 0, 20, 5, NULL, NULL, 1, 0, 1, 1),
		(64, 'lang_4', 'Language', 'The languages that you can read, write , understand', '', '', 'text', 10, 50, 0, 21, 1, NULL, NULL, 1, 0, 1, 1),
		(65, 'lang_4_reading', 'Reading', 'At what level can you read this language . 1: Worst - 10: Best', '', '', 'select', NULL, 0, 0, 21, 2, NULL, NULL, 1, 0, 1, 1),
		(66, 'lang_4_writing', 'Writing', 'At what level can you write this language', '', '', 'select', NULL, 0, 0, 21, 3, NULL, NULL, 1, 0, 1, 1),
		(67, 'lang_4_understanding', 'Understanding', 'At what level can you understand this language', '', '', 'select', NULL, 0, 0, 21, 4, NULL, NULL, 1, 0, 1, 1),
		(68, 'lang_4_where', 'Where did you learn?', 'Where did you learn this language?', '', '', 'text', 255, 50, 0, 21, 5, NULL, NULL, 1, 0, 1, 1),
		(69, 'available_date', 'Date You Can Start', 'Date You Can Start to work', '', '', 'date', 0, 50, 0, 10, 1, 0, 0, 1, 1, 1, 1),
		(70, 'desired_pay', 'Desired Yearly Salary', 'Desired Yearly Salary?', '', '', 'integer', NULL, 50, 0, 10, 2, NULL, NULL, 1, 0, 0, 0),
		(72, 'experience', 'Total Experience', 'How many years experience do you have?', '', '', 'select', NULL, 0, 0, 22, 1, NULL, NULL, 1, 0, 0, 0),
		(109, 'employer1_pay', 'Pay Upon Leaving', 'Your salary before you left the company?', '', '', 'integer', NULL, 50, 0, 24, 7, NULL, NULL, 1, 0, 1, 1),
		(108, 'employer1_from', 'From (m/yyyy)', 'When did you start working for this company?', '', '', 'text', 20, 50, 0, 24, 6, NULL, NULL, 1, 0, 1, 1),
		(102, 'employer_leave', 'Reason For Leaving', 'Why have you left this company?', '', '', 'text', 255, 50, 0, 23, 10, NULL, NULL, 1, 0, 1, 1),
		(103, 'employer1', 'Employer', 'Employer Name', '', '', 'text', 255, 50, 0, 24, 1, NULL, NULL, 1, 0, 1, 1),
		(104, 'employer1_city', 'Employer City', 'The city of employer', '', '', 'text', 255, 50, 0, 24, 2, NULL, NULL, 1, 0, 1, 1),
		(105, 'employer1_state', 'Employer State', 'The state of employer', '', '', 'text', 255, 50, 0, 24, 3, NULL, NULL, 1, 0, 1, 1),
		(106, 'employer1_phone', 'Employer Phone', 'Phone that we can contact them', '', '', 'text', 20, 50, 0, 24, 4, NULL, NULL, 1, 0, 1, 1),
		(107, 'employer1_pos', 'Position Held', 'What position did you hold before leaving the company?', '', '', 'text', 50, 50, 0, 24, 5, NULL, NULL, 1, 0, 1, 1),
		(101, 'employer_dut', 'Duties', 'Your resposibilities or duties at this company', '', '', 'textarea', 255, 50, 0, 23, 9, 30, 5, 1, 0, 1, 1),
		(100, 'employer_sup', 'Supervisor', 'What was the full name of your supervisor at this company?', '', '', 'text', 255, 50, 0, 23, 8, NULL, NULL, 1, 0, 1, 1),
		(93, 'employer', 'Employer', 'Employer Name', '', '', 'text', 255, 50, 0, 23, 1, NULL, NULL, 1, 0, 1, 1),
		(94, 'employer_city', 'Employer City', 'The city of employer', '', '', 'text', 255, 50, 0, 23, 2, NULL, NULL, 1, 0, 1, 1),
		(95, 'employer_state', 'Employer State', 'The state of employer', '', '', 'text', 255, 50, 0, 23, 3, NULL, NULL, 1, 0, 1, 1),
		(96, 'employer_phone', 'Employer Phone', 'Phone that we can contact them', '', '', 'text', 20, 50, 0, 23, 4, NULL, NULL, 1, 0, 1, 1),
		(97, 'employer_pos', 'Position Held', 'What position did you hold before leaving the company?', '', '', 'text', 50, 50, 0, 23, 5, NULL, NULL, 1, 0, 1, 1),
		(98, 'employer_from', 'From (m/yyyy)', 'When did you start working for this company?', '', '', 'text', 20, 50, 0, 23, 6, NULL, NULL, 1, 0, 1, 1),
		(99, 'employer_pay', 'Pay Upon Leaving', 'Your salary before you left the company?', '', '', 'integer', NULL, 50, 0, 23, 7, NULL, NULL, 1, 0, 1, 1),
		(110, 'employer1_sup', 'Supervisor', 'What was the full name of your supervisor at this company?', '', '', 'text', 255, 50, 0, 24, 8, NULL, NULL, 1, 0, 1, 1),
		(111, 'employer1_dut', 'Duties', 'Your resposibilities or duties at this company', '', '', 'textarea', 255, 50, 0, 24, 9, 30, 5, 1, 0, 1, 1),
		(112, 'employer1_leave', 'Reason For Leaving', 'Why have you left this company?', '', '', 'text', 255, 50, 0, 24, 10, NULL, NULL, 1, 0, 1, 1),
		(113, 'employer2', 'Employer', 'Employer Name', '', '', 'text', 255, 50, 0, 25, 1, NULL, NULL, 1, 0, 1, 1),
		(114, 'employer2_city', 'Employer City', 'The city of employer', '', '', 'text', 255, 50, 0, 25, 2, NULL, NULL, 1, 0, 1, 1),
		(115, 'employer2_state', 'Employer State', 'The state of employer', '', '', 'text', 255, 50, 0, 25, 3, NULL, NULL, 1, 0, 1, 1),
		(116, 'employer2_phone', 'Employer Phone', 'Phone that we can contact them', '', '', 'text', 20, 50, 0, 25, 4, NULL, NULL, 1, 0, 1, 1),
		(117, 'employer2_pos', 'Position Held', 'What position did you hold before leaving the company?', '', '', 'text', 50, 50, 0, 25, 5, NULL, NULL, 1, 0, 1, 1),
		(118, 'employer2_from', 'From (m/yyyy)', 'When did you start working for this company?', '', '', 'text', 20, 50, 0, 25, 6, NULL, NULL, 1, 0, 1, 1),
		(119, 'employer2_pay', 'Pay Upon Leaving', 'Your salary before you left the company?', '', '', 'integer', NULL, 50, 0, 25, 7, NULL, NULL, 1, 0, 1, 1),
		(120, 'employer2_sup', 'Supervisor', 'What was the full name of your supervisor at this company?', '', '', 'text', 255, 50, 0, 25, 8, NULL, NULL, 1, 0, 1, 1),
		(121, 'employer2_dut', 'Duties', 'Your resposibilities or duties at this company', '', '', 'textarea', 255, 50, 0, 25, 9, 30, 5, 1, 0, 1, 1),
		(122, 'employer2_leave', 'Reason For Leaving', 'Why have you left this company?', '', '', 'text', 255, 50, 0, 25, 10, NULL, NULL, 1, 0, 1, 1),
		(123, 'employer3', 'Employer', 'Employer Name', '', '', 'text', 255, 50, 0, 26, 1, NULL, NULL, 1, 0, 1, 1),
		(124, 'employer3_city', 'Employer City', 'The city of employer', '', '', 'text', 255, 50, 0, 26, 2, NULL, NULL, 1, 0, 1, 1),
		(125, 'employer3_state', 'Employer State', 'The state of employer', '', '', 'text', 255, 50, 0, 26, 3, NULL, NULL, 1, 0, 1, 1),
		(126, 'employer3_phone', 'Employer Phone', 'Phone that we can contact them', '', '', 'text', 20, 50, 0, 26, 4, NULL, NULL, 1, 0, 1, 1),
		(127, 'employer3_pos', 'Position Held', 'What position did you hold before leaving the company?', '', '', 'text', 50, 50, 0, 26, 5, NULL, NULL, 1, 0, 1, 1),
		(128, 'employer3_from', 'From (m/yyyy)', 'When did you start working for this company?', '', '', 'text', 20, 50, 0, 26, 6, NULL, NULL, 1, 0, 1, 1),
		(129, 'employer3_pay', 'Pay Upon Leaving', 'Your salary before you left the company?', '', '', 'integer', NULL, 50, 0, 26, 7, NULL, NULL, 1, 0, 1, 1),
		(130, 'employer3_sup', 'Supervisor', 'What was the full name of your supervisor at this company?', '', '', 'text', 255, 50, 0, 26, 8, NULL, NULL, 1, 0, 1, 1),
		(131, 'employer3_dut', 'Duties', 'Your resposibilities or duties at this company', '', '', 'textarea', 255, 50, 0, 26, 9, 30, 5, 1, 0, 1, 1),
		(132, 'employer3_leave', 'Reason For Leaving', 'Why have you left this company?', '', '', 'text', 255, 50, 0, 26, 10, NULL, NULL, 1, 0, 1, 1),
		(135, 'skills', 'Skills', 'Write your job skills like computer knowledge etc', '', '', 'textarea', 0, 0, 0, 12, 5, 40, 5, 1, 0, 1, 1),
		(136, 'ref1_name', 'Name', 'The name of your reference', '', '', 'text', 255, 50, 0, 27, 1, NULL, NULL, 1, 0, 1, 1),
		(137, 'ref1_address', 'Address', 'The address of your reference', '', '', 'textarea', 255, 0, 0, 27, 2, 30, 5, 1, 0, 1, 1),
		(138, 'ref1_telephone', 'Telephone', 'The phone number of your reference that we can contact him or her, if needed', '', '', 'text', 20, 50, 0, 27, 3, NULL, NULL, 1, 0, 1, 1),
		(139, 'ref1_relationship', 'Relationship', 'What is the relation between this reference and you (ie. friend, supervisor from a previous company, etc.)', '', '', 'text', 20, 50, 0, 27, 4, NULL, NULL, 1, 0, 1, 1),
		(140, 'ref1_years', 'Years', 'How many years have you known this reference?', '', '', 'integer', NULL, 50, 0, 27, 5, NULL, NULL, 1, 0, 1, 1),
		(141, 'ref2_name', 'Name', 'The name of your reference', '', '', 'text', 255, 50, 0, 28, 1, NULL, NULL, 1, 0, 1, 1),
		(142, 'ref2_address', 'Address', 'The address of your reference', '', '', 'textarea', 255, 0, 0, 28, 2, 30, 5, 1, 0, 1, 1),
		(143, 'ref2_telephone', 'Telephone', 'The phone number of your reference that we can contact him or her, if needed', '', '', 'text', 20, 50, 0, 28, 3, NULL, NULL, 1, 0, 1, 1),
		(144, 'ref2_relationship', 'Relationship', 'What is the relation between this reference and you (ie. friend, supervisor from a previous company, etc.)', '', '', 'text', 20, 50, 0, 28, 4, NULL, NULL, 1, 0, 1, 1),
		(145, 'ref2_years', 'Years', 'How many years have you known this reference?', '', '', 'integer', NULL, 50, 0, 28, 5, NULL, NULL, 1, 0, 1, 1),
		(146, 'ref3_name', 'Name', 'The name of your reference', '', '', 'text', 255, 50, 0, 29, 1, NULL, NULL, 1, 0, 1, 1),
		(147, 'ref3_address', 'Address', 'The address of your reference', '', '', 'textarea', 255, 0, 0, 29, 2, 30, 5, 1, 0, 1, 1),
		(148, 'ref3_telephone', 'Telephone', 'The phone number of your reference that we can contact him or her, if needed', '', '', 'text', 20, 50, 0, 29, 3, NULL, NULL, 1, 0, 1, 1),
		(149, 'ref3_relationship', 'Relationship', 'What is the relation between this reference and you (ie. friend, supervisor from a previous company, etc.)', '', '', 'text', 20, 50, 0, 29, 4, NULL, NULL, 1, 0, 1, 1),
		(150, 'ref3_years', 'Years', 'How many years have you known this reference?', '', '', 'integer', NULL, 50, 0, 29, 5, NULL, NULL, 1, 0, 1, 1),
		(151, 'ref4_name', 'Name', 'The name of your reference', '', '', 'text', 255, 50, 0, 30, 1, NULL, NULL, 1, 0, 1, 1),
		(152, 'ref4_address', 'Address', 'The address of your reference', '', '', 'textarea', 255, 0, 0, 30, 2, 30, 5, 1, 0, 1, 1),
		(153, 'ref4_telephone', 'Telephone', 'The phone number of your reference that we can contact him or her, if needed', '', '', 'text', 20, 50, 0, 30, 3, NULL, NULL, 1, 0, 1, 1),
		(154, 'ref4_relationship', 'Relationship', 'What is the relation between this reference and you (ie. friend, supervisor from a previous company, etc.)', '', '', 'text', 20, 50, 0, 30, 4, NULL, NULL, 1, 0, 1, 1),
		(155, 'ref4_years', 'Years', 'How many years have you known this reference?', '', '', 'integer', NULL, 50, 0, 30, 5, NULL, NULL, 1, 0, 1, 1),
		(156, 'text_resume', 'Text Resume', 'You can enter your text resume here. If you want, You can copy and paste from your Microsoft Word resume. This field is used for resume search and this field is also visible by the employers when you submit an application.', '', '', 'editor', 0, 0, 0, 5, 1, 0, 0, 1, 1, 1, 0),
		(189, 'lknjobs_schooldiplomagrad', 'Diploma', 'Are you currently a student or have you graduated?', '', '', 'select', 20, 0, 0, 16, 7, 0, 0, 1, 0, 1, 1),
		(162, 'resume_files', 'Resume Files', 'Select the files that you want to attach to this resume. You can use Ctrl key to select more than one file', '', '', 'pre-defined', 0, 0, 0, 3, 1, 0, 0, 1, 0, 1, 0),
		(161, 'banned', 'Banned Companies', 'You can prevent certain companies from viewing your resume. The companies that you select from this list will not be able to view any part of your resume', '', '', 'pre-defined', NULL, 0, 0, 4, 1, NULL, NULL, 1, 0, 1, 0),
		(178, 'lknjobs_canwork', 'Can you work weekends and evenings?', 'Can you work weekends and evenings?', '', '', 'multicheckbox', 20, 0, 0, 10, 14, 0, 0, 1, 0, 1, 1),
		(173, 'unavailability', 'Unavailability', 'If there is a reason you are unavailable, enter it here', '', '', 'textarea', 255, 0, 0, 10, 13, 40, 5, 1, 0, 1, 1),
		(185, 'lknjobs_currentlyworking', 'I''m currently working', 'Are you currently working?', '', '', 'select', 20, 0, 0, 6, 6, 0, 0, 1, 0, 1, 1),
		(187, 'lknjobs_schooldiploma', 'Diploma', 'Are you currently a student or have you graduated?', '', '', 'select', 20, 0, 0, 14, 4, 0, 0, 1, 0, 1, 1),
		(188, 'lknjobs_schooldiplomauniversity', 'Diploma', 'Are you currently a student or have you graduated?', '', '', 'select', 20, 0, 0, 15, 7, 0, 0, 1, 0, 1, 1),
		(183, 'job_type', 'Job Type', 'Which jobs types are you interested in?', '', 'you need to select the job types you are intrested', 'pre-defined', 20, 0, 1, 10, 16, 0, 0, 1, 1, 1, 0),
		(190, 'lknjobs_schooldiplomaother', 'Diploma', 'Are you currently a student or have you graduated?', '', '', 'select', 20, 0, 0, 17, 7, 0, 0, 1, 0, 1, 1),
		(191, 'lknjobs_available', 'Avaible', 'Can you work these days?', '', '', 'multicheckbox', 20, 0, 0, 10, 17, 0, 0, 1, 1, 1, 1),
		(192, 'lknjobs_dl', 'Do you have a drivers license?', 'Do you have driver license?', '', '', 'select', 20, 0, 0, 12, 3, 0, 0, 1, 0, 1, 1),
		(193, 'lknjobs_dlnumber', 'If yes, Driver''s License Number', 'If yes, Driver License Number', '', '', 'text', 255, 50, 0, 12, 4, 0, 0, 1, 0, 1, 1)";
			$db_fields->query($sql);
			$db_fields->setQuery();
			
			$sql="INSERT INTO `#__jobs_field_values` (`id`, `fieldid`, `fieldvalue`, `ordering`, `sys`) VALUES
				(15, 45, '1', 0, 0),
				(16, 45, '2', 1, 0),
				(17, 45, '3', 2, 0),
				(18, 45, '4', 3, 0),
				(19, 45, '5', 4, 0),
				(20, 45, '6', 5, 0),
				(21, 45, '7', 6, 0),
				(22, 45, '8', 7, 0),
				(23, 45, '9', 8, 0),
				(24, 45, '10', 9, 0),
				(25, 46, '1', 0, 0),
				(26, 46, '2', 1, 0),
				(27, 46, '3', 2, 0),
				(28, 46, '4', 3, 0),
				(29, 46, '5', 4, 0),
				(30, 46, '6', 5, 0),
				(31, 46, '7', 6, 0),
				(32, 46, '8', 7, 0),
				(33, 46, '9', 8, 0),
				(34, 46, '10', 9, 0),
				(35, 47, '1', 0, 0),
				(36, 47, '2', 1, 0),
				(37, 47, '3', 2, 0),
				(38, 47, '4', 3, 0),
				(39, 47, '5', 4, 0),
				(40, 47, '6', 5, 0),
				(41, 47, '7', 6, 0),
				(42, 47, '8', 7, 0),
				(43, 47, '9', 8, 0),
				(44, 47, '10', 9, 0),
				(45, 55, '1', 0, 0),
				(46, 55, '2', 1, 0),
				(47, 55, '3', 2, 0),
				(48, 55, '4', 3, 0),
				(49, 55, '5', 4, 0),
				(50, 55, '6', 5, 0),
				(51, 55, '7', 6, 0),
				(52, 55, '8', 7, 0),
				(53, 55, '9', 8, 0),
				(54, 55, '10', 9, 0),
				(55, 55, '', 10, 0),
				(56, 56, '1', 0, 0),
				(57, 56, '2', 1, 0),
				(58, 56, '3', 2, 0),
				(59, 56, '4', 3, 0),
				(60, 56, '5', 4, 0),
				(61, 56, '6', 5, 0),
				(62, 56, '7', 6, 0),
				(63, 56, '8', 7, 0),
				(64, 56, '9', 8, 0),
				(65, 56, '10', 9, 0),
				(66, 57, '1', 0, 0),
				(67, 57, '2', 1, 0),
				(68, 57, '3', 2, 0),
				(69, 57, '4', 3, 0),
				(70, 57, '5', 4, 0),
				(71, 57, '6', 5, 0),
				(72, 57, '7', 6, 0),
				(73, 57, '8', 7, 0),
				(74, 57, '9', 8, 0),
				(75, 57, '10', 9, 0),
				(144, 72, '1', 0, 0),
				(77, 60, '1', 0, 0),
				(78, 60, '2', 1, 0),
				(79, 60, '3', 2, 0),
				(80, 60, '4', 3, 0),
				(81, 60, '5', 4, 0),
				(82, 60, '6', 5, 0),
				(83, 60, '7', 6, 0),
				(84, 60, '8', 7, 0),
				(85, 60, '9', 8, 0),
				(86, 60, '10', 9, 0),
				(143, 72, '2', 1, 0),
				(142, 72, '3', 2, 0),
				(89, 61, '1', 0, 0),
				(90, 61, '2', 1, 0),
				(91, 61, '3', 2, 0),
				(92, 61, '4', 3, 0),
				(93, 61, '5', 4, 0),
				(94, 61, '6', 5, 0),
				(95, 61, '7', 6, 0),
				(96, 61, '8', 7, 0),
				(97, 61, '9', 8, 0),
				(98, 61, '10', 9, 0),
				(114, 65, '3', 2, 0),
				(113, 65, '2', 1, 0),
				(112, 65, '1', 0, 0),
				(102, 62, '1', 0, 0),
				(103, 62, '2', 1, 0),
				(104, 62, '3', 2, 0),
				(105, 62, '4', 3, 0),
				(106, 62, '5', 4, 0),
				(107, 62, '6', 5, 0),
				(108, 62, '7', 6, 0),
				(109, 62, '8', 7, 0),
				(110, 62, '9', 8, 0),
				(111, 62, '10', 9, 0),
				(115, 65, '4', 3, 0),
				(116, 65, '5', 4, 0),
				(117, 65, '6', 5, 0),
				(118, 65, '7', 6, 0),
				(119, 65, '8', 7, 0),
				(120, 65, '9', 8, 0),
				(121, 65, '10', 9, 0),
				(122, 66, '1', 0, 0),
				(123, 66, '2', 1, 0),
				(124, 66, '3', 2, 0),
				(125, 66, '4', 3, 0),
				(126, 66, '5', 4, 0),
				(127, 66, '6', 5, 0),
				(128, 66, '7', 6, 0),
				(129, 66, '8', 7, 0),
				(130, 66, '9', 8, 0),
				(131, 66, '10', 9, 0),
				(132, 67, '1', 0, 0),
				(133, 67, '2', 1, 0),
				(134, 67, '3', 2, 0),
				(135, 67, '4', 3, 0),
				(136, 67, '5', 4, 0),
				(137, 67, '6', 5, 0),
				(138, 67, '7', 6, 0),
				(139, 67, '8', 7, 0),
				(140, 67, '9', 8, 0),
				(141, 67, '10', 9, 0),
				(145, 72, '4', 3, 0),
				(146, 72, '5', 4, 0),
				(147, 72, '6', 5, 0),
				(148, 72, '7', 6, 0),
				(149, 72, '8', 7, 0),
				(150, 72, '9', 8, 0),
				(151, 72, '10', 9, 0),
				(152, 72, '11', 10, 0),
				(153, 72, '12', 11, 0),
				(154, 72, '13', 12, 0),
				(155, 72, '14', 13, 0),
				(156, 72, '15', 14, 0),
				(157, 72, '16', 15, 0),
				(158, 72, '17', 16, 0),
				(159, 72, '18', 17, 0),
				(162, 72, '20', 18, 0),
				(163, 72, '21', 19, 0),
				(164, 72, '22', 20, 0),
				(165, 72, '23', 21, 0),
				(166, 72, '24', 22, 0),
				(167, 72, '25', 23, 0),
				(168, 72, '26', 24, 0),
				(169, 72, '27', 25, 0),
				(170, 72, '28', 26, 0),
				(171, 72, '29', 27, 0),
				(172, 72, '30', 28, 0),
				(179, 177, 'Weekdays', 1, 0),
				(178, 177, 'Weekends', 0, 0),
				(180, 178, 'Evening', 0, 0),
				(181, 178, 'Weekdays', 1, 0),
				(194, 187, 'Student', 1, 0),
				(190, 185, 'No', 1, 0),
				(189, 185, 'Yes', 0, 0),
				(193, 187, 'Graduate', 0, 0),
				(195, 188, 'Graduate', 0, 0),
				(196, 188, 'Student', 1, 0),
				(197, 189, 'Graduate', 0, 0),
				(198, 189, 'Student', 1, 0),
				(199, 190, 'Graduate', 0, 0),
				(200, 190, 'Student', 1, 0),
				(201, 191, 'Monday', 0, 0),
				(202, 191, 'Tuesday', 1, 0),
				(203, 191, 'Wednesday', 2, 0),
				(204, 191, 'Thursday', 3, 0),
				(205, 191, 'Friday', 4, 0),
				(206, 191, 'Sunday', 5, 0),
				(207, 192, 'Yes', 0, 0),
				(208, 192, 'No', 1, 0)";
			$db_fields->query($sql);
			$db_fields->setQuery();
		}
	//1.1 için değişiklikler bitti
	
		//1.1.2 için başladı
			if (array_key_exists('hide_company_name',$fieldlist_j)) {
				//eğer hide_company_name var demektir.
				//bi şey yapma
			}else {
				//jobs_jobs tablosuna city ve state sütunlarını ekle
				$sql="ALTER TABLE `#__jobs_jobs` ADD `hide_company_name` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `hits`";
				$_db->query($sql);
				$_db->setQuery();
			} 
			
			$db_job_types=&lknDb::createInstance();
			$sql="CREATE TABLE IF NOT EXISTS `#__jobs_job_types` (
			  `id` int(3) NOT NULL AUTO_INCREMENT,
			  `published` int(1) NOT NULL,
			  `title` varchar(150) NOT NULL,
			  PRIMARY KEY (`id`),
			  KEY `title` (`title`),
			  KEY `published` (`published`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
			
				$db_job_types->query($sql);
				$db_job_types->setQuery();
				$sql="SELECT * FROM #__jobs_job_types";
				$count=lknGetCount($sql);
				if ($count=='0') {
					$sql="INSERT INTO `#__jobs_job_types` (`id`, `published`, `title`) VALUES
					(1, 1, 'Temporary'),
					(2, 1, 'Student'),
					(3, 1, 'Intern'),
					(4, 1, 'Contract'),
					(5, 1, 'Part Time'),
					(6, 1, 'Full Time')";
					$db_job_types->query($sql);
					$db_job_types->setQuery();
				}
					$sql="CREATE TABLE IF NOT EXISTS `#__jobs_education_levels` (
					  `id` int(3) NOT NULL AUTO_INCREMENT,
					  `published` int(1) NOT NULL,
					  `title` varchar(150) NOT NULL,
					  PRIMARY KEY (`id`),
					  KEY `title` (`title`),
					  KEY `published` (`published`)
					) ENGINE=MyISAM  DEFAULT CHARSET=utf8";	
					
				$db_edcucation_level=&lknDb::createInstance();
				$db_edcucation_level->query($sql);
				$db_edcucation_level->setQuery();				
				$sql="SELECT * FROM #__jobs_education_levels";
				$count=lknGetCount($sql);
				
			if ($count=='0') {
					$sql="INSERT INTO `#__jobs_education_levels` (`id`, `published`, `title`) VALUES
						(1, 1, 'Unspecified'),
						(2, 1, 'High School'),
						(3, 1, 'Tech School'),
						(4, 1, 'Associates'),
						(5, 1, 'Bachelors'),
						(6, 1, 'Masters'),
						(7, 1, 'Doctorate')";
				$db_job_types->query($sql);
				$db_job_types->setQuery();
			}
			
		//1.1.2 için bitti
		
}

class lknJobsInstaller {
	
	function installLibrary(){
	
		//1)eskisini kaldır
		lknJobsInstaller::removeDir(JR . DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'lknlibrary');
		lknJobsInstaller::extractLibraryFiles();
			
	}
	
	function installFrontSide(){
		
	    lknJobsInstaller::extractArchive(JR . DIRECTORY_SEPARATOR .'administrator'.DIRECTORY_SEPARATOR .'components'.DIRECTORY_SEPARATOR.'com_jobs' .DIRECTORY_SEPARATOR . 'front.zip', 
			JR . DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_jobs' . DIRECTORY_SEPARATOR);
	}
	
	function installAdminSide(){
		
	    lknJobsInstaller::extractArchive(JR . DIRECTORY_SEPARATOR .'administrator'.DIRECTORY_SEPARATOR .'components'.DIRECTORY_SEPARATOR.'com_jobs' .DIRECTORY_SEPARATOR . 'admin.zip', 
			JR . DIRECTORY_SEPARATOR.'administrator'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_jobs' . DIRECTORY_SEPARATOR);
	}
	
	function doCleaning(){
		//admin dosyasını sil
		@unlink(JR . DIRECTORY_SEPARATOR .'administrator'.DIRECTORY_SEPARATOR .'components'.DIRECTORY_SEPARATOR.'com_jobs' .DIRECTORY_SEPARATOR . 'admin.zip');
		//ön yüze ait dosyaları sil
		@unlink(JR . DIRECTORY_SEPARATOR .'administrator'.DIRECTORY_SEPARATOR .'components'.DIRECTORY_SEPARATOR.'com_jobs' .DIRECTORY_SEPARATOR . 'front.zip');
		//library dosyalarını sil
		@unlink(JR . DIRECTORY_SEPARATOR .'administrator'.DIRECTORY_SEPARATOR .'components'.DIRECTORY_SEPARATOR.'com_jobs' .DIRECTORY_SEPARATOR . 'lknlibrary.zip');
			
	}
	
	function extractArchive($src, $destDir){
		if(class_exists('JFactory') && defined('_JEXEC')){
			
			$destDir =  JPath::clean($destDir);
			$src 	=  JPath::clean($src);
			
			JArchive::extract($src, $destDir);
		} else {
			if(!class_exists('PclZip')){
			    #BC compatibilities.
		        include_once(JR. "/administrator/includes/pcl/pclzip.lib.php");
			}
			
			$archive = new PclZip($src);
			$list = $archive->extract(PCLZIP_OPT_PATH, $destDir);
		}
		
		return true;
	}
	
	
	function extractLibraryFiles(){
	
		$lib_folder=lknJobsInstaller::makeDir(JR . DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'lknlibrary');
		
	    lknJobsInstaller::extractArchive(JR . DIRECTORY_SEPARATOR .'administrator'.DIRECTORY_SEPARATOR .'components'.DIRECTORY_SEPARATOR.'com_jobs' .DIRECTORY_SEPARATOR . 'lknlibrary.zip', 
			JR . DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'lknlibrary' . DIRECTORY_SEPARATOR);
	}
	
	function makeDir($dir){
		if(class_exists('JFactory') && defined('_JEXEC')){
			JFolder::create($dir);
		} else {
			mkdir($dir);
		}
		
		return true;
	}
	
	function removeDir($dir){	
		if(class_exists('JFactory') && defined('_JEXEC')){
			$dir =  JPath::clean($dir);
			if (is_dir($dir)) {		
				JFolder::delete($dir);
			}
		} else {
			@unlink($dir);
		}
		
		return true;
	}
}
?>