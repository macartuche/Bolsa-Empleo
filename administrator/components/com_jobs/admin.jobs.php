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



global $task,$_lknBaseFramework,$_config;





include_once(dirname(dirname(dirname(dirname(__FILE__)))) . "/components/com_jobs/libs/common.php");



$task=lknGetParamatre($_REQUEST,'task');

$template=$_config['lknjobstemplate'];

if ($template=='') {

	$template='default';

}

$template_url=$_lknBaseFramework->lknGetPath('live') . "/components/com_jobs/templates/$template";

$_lknBaseFramework->addCss("$template_url/$template.css");



require_once($_lknBaseFramework->lknGetPath('root') ."/administrator/components/com_jobs/admin.jobs.html.php");



if (lknFiles::file_exists($_lknBaseFramework->lknGetPath('root') ."/components/com_jobs/language/" . $_config['languageFile'] . ".php")) {

	require_once($_lknBaseFramework->lknGetPath('root') ."/components/com_jobs/language/" . $_config['languageFile'] . ".php");

}else 

{

	require_once($_lknBaseFramework->lknGetPath('root') ."/components/com_jobs/language/english.php");	

}

//print_r($_REQUEST);
switch( $task ) {

	case 'list_categories':

		list_categories();

		break;

	case 'new_category':

		new_category();

		break;

	case 'save_category':

		save_category();

		break;

	case 'save_and_new_category':

		save_and_new_category();

		break;

	case 'save_as_new_category':

		save_as_new_category();

		break;

	case 'apply_category':

		apply_category();

		break;	

	case 'edit_category':

		edit_category();

		break;

	case 'update_category':

		update_category();

		break;

	case 'publish_category':

		publish_category();

		break;

	case 'unpublish_category':

		unpublish_category();

		break;

	case 'delete_category':

		delete_category();

		break;



	case 'list_companies':

		list_companies();

		break;

	case 'new_company':

		new_company();

		break;

	case 'save_company':

		save_company();

		break;

	case 'save_and_new_company':

		save_and_new_company();

		break;

	case 'save_as_new_company':

		save_as_new_company();

		break;

	case 'edit_company':

		edit_company();

		break;

	case 'apply_company':

		apply_company();

		break;

	case 'update_company':

		update_company();

		break;

	case 'publish_company':

		publish_company();

		break;

	case 'unpublish_company':

		unpublish_company();

		break;

	case 'delete_company':

		delete_company();

		break;

		

	case 'list_field_categories':

		list_field_categories();

		break;

	case 'new_field_category':

		new_field_category();

		break;

	case 'save_field_category':

		save_field_category();

		break;

	case 'save_and_new_field_category':

		save_and_new_field_category();

		break;

	case 'save_as_new_field_category':

		save_as_new_field_category();

		break;

	case 'apply_field_category':

		apply_field_category();

		break;

	case 'edit_field_category':

		edit_field_category();

		break;

	case 'update_field_category':

		update_field_category();

		break;

	case 'move_up_field_category':

		move_up_field_category();

		break;

	case 'move_down_field_category':

		move_down_field_category();

		break;

	case 'saveorder':

		saveOrder();

		break;

	case 'publish_field_category':

		publish_field_category();

		break;

	case 'unpublish_field_category':

		unpublish_field_category();

		break;

	case 'delete_field_category':

		delete_field_category();

		break;

		

	case 'list_fields':

		list_fields();

		break;

	case 'move_down_field':

		move_down_field();

		break;

	case 'move_up_field':

		move_up_field();

		break;

	case 'new_field':

		new_field();

		break;

	case 'save_field':

		save_field();

		break;

	case 'save_and_new_field':

		save_and_new_field();

		break;

	case 'edit_field':

		edit_field();

		break;

	case 'update_field':

		update_field();

		break;

	case 'apply_field':

		apply_field();

		break;

	case 'publish_field':

		publish_field();

		break;

	case 'unpublish_field':

		unpublish_field();

		break;

	case 'delete_field':

		delete_field();

		break;

						

	case 'list_jobs':

		list_jobs();

		break;

	case 'new_job':

		new_job();

		break;

	case 'save_job':

		save_job();

		break;

	case 'save_and_new_job':

		save_and_new_job();

		break;

	case 'save_as_new_job':

		save_as_new_job();

		break;

	case 'edit_job':

		edit_job();

		break;

	case 'update_job':

		update_job();

		break;

	case 'apply_job':

		apply_job();

		break;

	case 'publish_job':

		publish_job();

		break;

	case 'unpublish_job':

		unpublish_job();

		break;

	case 'delete_job':

		delete_job();

		break;		



	case 'list_countries':

		list_countries();

		break;

	case 'new_country':

		new_country();

		break;

	case 'save_country':

		save_country();

		break;

	case 'save_and_new_country':

		save_and_new_country();

		break;

	case 'save_as_new_country':

		save_as_new_country();

		break;

	case 'apply_country':

		apply_country();

		break;

	case 'edit_country':

		edit_country();

		break;

	case 'update_country':

		update_country();

		break;

	case 'publish_country':

		publish_country();

		break;

	case 'unpublish_country':

		unpublish_country();

		break;

	case 'delete_country':

		delete_country();

		break;

		

	case 'list_cover_letters':

		list_cover_letters();

		break;

	case 'new_cover_letter':

		new_cover_letter();

		break;

	case 'save_cover_letter':

		save_cover_letter();

		break;

	case 'save_and_new_cover_letter':

		save_and_new_cover_letter();

		break;

	case 'save_as_new_cover_letter':

		save_as_new_cover_letter();

		break;

	case 'apply_cover_letter':

		apply_cover_letter();

		break;

	case 'edit_cover_letter':

		edit_cover_letter();

		break;

	case 'update_cover_letter':

		update_cover_letter();

		break;

	case 'publish_cover_letter':

		publish_cover_letter();

		break;

	case 'unpublish_cover_letter':

		unpublish_cover_letter();

		break;

	case 'delete_cover_letter':

		delete_cover_letter();

		break;

		

	case 'list_status':

		list_status();

		break;

	case 'new_status':

		new_status();

		break;

	case 'save_status':

		save_status();

		break;

	case 'save_and_new_status':

		save_and_new_status();

		break;

	case 'save_as_new_status':

		save_as_new_status();

		break;

	case 'apply_status':

		apply_status();

		break;

	case 'edit_status':

		edit_status();

		break;

	case 'update_status':

		update_status();

		break;

	case 'publish_status':

		publish_status();

		break;

	case 'unpublish_status':

		unpublish_status();

		break;

	case 'delete_status':

		delete_status();

		break;



	case 'list_resumes':

		list_resumes();

		break;

	case 'new_resume':

		new_resume();

		break;

	case 'save_resume':

		save_resume();

		break;

	case 'save_and_new_resume':

		save_and_new_resume();

		break;

	case 'save_as_new_resume':

		save_as_new_resume();

		break;

	case 'apply_resume':

		apply_resume();

		break;

	case 'edit_resume':

		edit_resume();

		break;

	case 'update_resume':

		update_resume();

		break;

	case 'publish_resume':

		publish_resume();

		break;

	case 'unpublish_resume':

		unpublish_resume();

		break;

	case 'delete_resume':

		delete_resume();

		break;

	case 'print_resume':

		print_resume();

		break;

	case 'resume_search_form':

		resume_search_form();

		break;

	case 'search_resume':

		search_resume();

		break;

		

	case 'list_email_templates':

		list_email_templates();

		break;

	case 'new_email_template':

		new_email_template();

		break;

	case 'save_email_template':

		save_email_template();

		break;

	case 'edit_email_template':

		edit_email_template();

		break;

	case 'update_email_template':

		update_email_template();

		break;

	case 'publish_email_template':

		publish_email_template();

		break;

	case 'unpublish_email_template':

		unpublish_email_template();

		break;

	case 'delete_email_template':

		delete_email_template();

		break;

		

	case 'list_credit_history':

		list_credit_history();

		break;

	case 'edit_credit_history':

		edit_credit_history();

		break;

	case 'update_credit_history':

		update_credit_history();

		break;

	case 'credit_history_full_payment_detail':

		credit_history_full_payment_detail();

		break;

	case 'add_new_credit':

		//manual credit adding form

		//elle kredi ekleme formunu gösterir

		add_new_credit();

		break;

	case 'save_credit':

		save_credit();

		break;

	case 'list_pending_credits':

		list_pending_credits();

		break;

	case 'edit_pending_credit':

		edit_pending_credit();

		break;

	case 'approve_pending_credit':

		approve_pending_credit();

		break;

	case 'reject_pending_credit':

		reject_pending_credit();

		break;

		

		

	case 'list_applications':

		list_applications();

		break;

	case 'edit_application':

		edit_application();

		break;

	case 'update_application':

		update_application();

		break;

	case 'apply_application':

		apply_application();

		break;

	case 'send_mail_to_applicant':

		send_mail_to_applicant();

		break;

	case 'delete_application':

		delete_application();

		break;





	case 'list_education_levels':

		list_education_levels();

		break;

	case 'new_education_level':

		new_education_level();

		break;

	case 'save_education_level':

		save_education_level();

		break;

	case 'edit_education_level':

		edit_education_level();

		break;

	case 'save_and_new_education_level':

		save_and_new_education_level();

		break;

	case 'save_as_new_education_level':

		save_as_new_education_level();

		break;

	case 'apply_education_level':

		apply_education_level();

		break;

	case 'update_education_level':

		update_education_level();

		break;

	case 'delete_education_level':

		delete_education_level();

		break;	

	case 'publish_education_level':

		publish_education_level();

		break;

	case 'unpublish_education_level':

		unpublish_education_level();

		break;



  case 'list_job_types':

		list_job_types();

		break;

	case 'new_job_type':

		new_job_type();

		break;

	case 'save_job_type':

		save_job_type();

		break;

	case 'edit_job_type':

		edit_job_type();

		break;

	case 'save_and_new_job_type':

		save_and_new_job_type();

		break;

	case 'save_as_new_job_type':

		save_as_new_job_type();

		break;

	case 'apply_job_type':

		apply_job_type();

		break;

	case 'update_job_type':

		update_job_type();

		break;

	case 'delete_job_type':

		delete_job_type();

		break;	

	case 'publish_job_type':

		publish_job_type();

		break;

	case 'unpublish_job_type':

		unpublish_job_type();

		break;

		

	case 'list_files':

		list_files();

		break;

	case 'new_file':

		new_file();

		break;

	case 'apply_file':

		apply_file();

		break;

	case 'save_file':

		save_file();

		break;

	case 'save_and_new_file':

		save_and_new_file();

		break;

	case 'edit_file':

		edit_file();

		break;

	case 'update_file':

		update_file();

		break;

	case 'publish_file':

		publish_file();

		break;

	case 'unpublish_file':

		unpublish_file();

		break;

	case 'delete_file':

		delete_file();

		break;

	case 'send_resume_file':

		send_resume_file();

		break;

		

	case 'show_config':

		show_config();

		break;

	case 'save_config':

		save_config();

		break;

		

	case 'preview':

		preview();

		break;

	case 'list_employers':

		list_employers();

		break;	

	case 'list_workers':

		list_workers();

		break;

	

	case 'list_tools':

		list_tools();

		break;

	case 'tool':

		tool();

		break;

						

	case 'license':

		license();

		break;	

	case 'credits':

		credits();

		break;

	case 'support':

		support();

		break;

	//<macf>
	//2011-02-03
	//Anadir las funcionalidades de estadisticas en la parte administrativa del componente com_jobs
	
	//estadisticas de empleados
	case 'statistic_employees':
		statistic_employees();
	break;
	
	//estadisticas de companias
	case 'statistic_companies':
		statistic_companies();
	break;
	
	//estadisticas de trabajos
	case 'statistic_applications':
		statistic_applications();
	break;
	//fin
	
	case 'panel':
	

	default:

		panel();

		break;

}

	//<macf>
	//2011-02-03
	//Funciones estadisticas
	
	//estadisitcas de empleado
	function statistic_employees(){
		HTML_jobs::statistic_employees();
	}
	
	//estadisticas de companias
	function statistic_companies(){
				HTML_jobs::statistic_companies();
	}
	
	//estadisticas de trabajos
	function statistic_applications(){
		HTML_jobs::statistic_applications();
	}
	//fin


	function panel(){

		global $_db;

		

		$where=array();

		

		$where[]="c.published='0'";	

		$where[]="c.country=cl.id";

		$where[]="c.memberid=u.id";

		$where[]="cl.published='1'";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		

		$sql="SELECT c.*,cl.title AS country,u.username AS company_owner";

		$sql.="\n FROM #__jobs_companies AS c,";

		$sql.="\n #__jobs_countries AS cl,";

		$sql.="\n #__users AS u";

		$sql.=$where;

		$sql.="\n GROUP BY c.id";

		$_db->query($sql);

		//echo $sql;

		$_db->setQuery();

		$rows=$_db->loadObjectList();

			

		

		HTML_jobs::control_panel($rows);

	}

	

	function list_tools(){

		HTML_jobs::list_tools();

	}



	function tool(){

		global $_lknBaseFramework;

		$name=lknGetParamatre($_GET,'name');

		require_once($_lknBaseFramework->lknGetPath('root') ."/administrator/components/com_jobs/jobs.tools.php");

		

		$msg=lknJobsTools::$name();

		

		yonledir("index2.php?option=com_jobs&task=list_tools",$msg);

		

	}

	

	function list_field_categories(){

		global $_db;

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_field_categories AS c";

		$sql.="\n ORDER BY c.parent_id ASC, c.ordering ASC";

		$_db->query($sql);

		$_db->setQuery();

		$rows=$_db->loadObjectList();

		

			// establish the hierarchy of the menu

			$children = array();

			// first pass - collect children

			foreach ($rows as $v ) {

				$pt = $v->parent_id;

				$list = @$children[$pt] ? $children[$pt] : array();

				array_push( $list, $v );

				$children[$pt] = $list;

			}

			

			

		$cats=lknJobsFields::fieldCategoriesTreeRecurse( 0, '', array(), $children, max( 0, 10 ) );

		HTML_jobs::list_field_categories($cats);

	}





	

	function new_field_category(){

		

		$cats2=resumeFieldCategoryList();

		

		HTML_jobs::field_category_form('',$cats2);

	}

	

	function save_field_category()

	{

		lknJobsFunctions::save_field_category();

		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_added);

		

	}

	

	/**

	 * bir kategoriyi kaydeder.

	 *

	 */

	function save_and_new_field_category(){

		lknJobsFunctions::save_field_category();	

		yonledir("index2.php?option=com_jobs&task=new_field_category",_lkn_added);	

	}

	

	/**

	 * update ekranındaki bir kategoriyi yeni kategori olarak kaydeder

	 *

	 */

	

	function save_as_new_field_category(){

		//yani yeni bir kategori eklemişler

		$id=lknJobsFunctions::save_field_category();

		yonledir ( "index2.php?option=com_jobs&task=edit_field_category&cid=$id&hidemainmenu=1", _lkn_added );

	}

	

	function apply_field_category(){

		$id = lknGetParamatre ($_REQUEST,'cid' );

		if ($id=='') {

			//yani yeni bir kategori eklemişler

			$id=lknJobsFunctions::save_field_category();

			$msg=_lkn_added;

	

		}else {

			lknJobsFunctions::update_field_category();

			$msg=_lkn_updated;

			

		}

		yonledir ( "index2.php?option=com_jobs&task=edit_field_category&cid=$id&hidemainmenu=1", $msg );

	}

	

	

	function update_field_category()

	{

		lknJobsFunctions::update_field_category();	

		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_updated);

			

	}

	

	function edit_field_category(){

		global $_db;

		$cid=lknGetParamatre($_REQUEST,'cid');

		if (is_array($cid)) {

			$cid=(int)$cid[0];

		}

		if ($cid!='' && isset($cid)) {

			

		$where[]="c.id='$cid'";	

			

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_field_categories AS c";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row_cat=$_db->getFistRecord();

		

		$cats2=resumeFieldCategoryList();

		HTML_jobs::field_category_form($row_cat,$cats2);

		

		}else 

		{

			echo _lkn_error;

		}

	}

	

	

	function resumeFieldCategoryList(){

			$db=&lknDb::createInstance();

		

			$sql="SELECT c.*";

			$sql.="\n FROM #__jobs_field_categories AS c";

			$sql.="\n ORDER BY c.parent_id DESC, c.ordering ASC";

			$db->query($sql);

			$db->setQuery();

			$rows_cats=$db->loadObjectList();

			

				// establish the hierarchy of the menu

				$children = array();

				// first pass - collect children

				foreach ($rows_cats as $v ) {

					$pt = $v->parent_id;

					$list = @$children[$pt] ? $children[$pt] : array();

					array_push( $list, $v );

					$children[$pt] = $list;

				}

				

				

			$cats=lknJobsFields::fieldCategoriesTreeRecurse( 0, '', array(), $children, max( 0, 10 ),0,1,0 );

			$cats2=array();

			foreach ($cats as $c){

				$cats2[$c->id]=$c->title;

			}

			

			return $cats2;

	}

	

	function move_up_field_category(){

		$db=&lknDb::createInstance();

		

		$id=lknGetParamatre($_REQUEST,'cid');

		$ordering=lknGetParamatre($_REQUEST,'ordering');

		$new_order=$ordering-1;

		$parent_id=lknGetParamatre($_REQUEST,'parent_id');

		

		$sql="SELECT * FROM #__jobs_field_categories WHERE parent_id='$parent_id' AND ordering='$new_order'";

		$db->query($sql);

		$db->setQuery();

		$count=$db->num_rows();

		

		if ($count>0) {

			//yeni ordering'e sahip bir tane kayıt var. bunu yukarı çıkar

			$row=$db->loadObject();

			$id2=$row->id;

			$ordering2=$row->ordering;

			$db2=&lknDb::createInstance();

			

			$data2=array();

			$data2['ordering']=$ordering2+1;

			$sql=$db2->CreateUpdateSql($data2,'#__jobs_field_categories',"id='$id2'");

			$db2->query($sql);

			$db2->setQuery();

		}

		

			$data=array();

			$data['ordering']=$new_order;

			

			$sql=$db->CreateUpdateSql($data,'#__jobs_field_categories',"id='$id'");

			$db->query($sql);

			$db->setQuery();



		

		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_updated);

	}

	

	function move_down_field_category(){

		$db=&lknDb::createInstance();

		

		$id=lknGetParamatre($_REQUEST,'cid');

		$ordering=lknGetParamatre($_REQUEST,'ordering');

		$new_order=$ordering+1;

		$parent_id=lknGetParamatre($_REQUEST,'parent_id');

		

		$sql="SELECT * FROM #__jobs_field_categories WHERE parent_id='$parent_id' AND ordering='$new_order'";

		$db->query($sql);

		$db->setQuery();

		$count=$db->num_rows();

		

		if ($count>0) {

			//yeni ordering'e sahip bir tane kayıt var. bunu yukarı çıkar

			$row=$db->loadObject();

			$id2=$row->id;

			$ordering2=$row->ordering;

			$db2=&lknDb::createInstance();

			

			$data2=array();

			$data2['ordering']=$ordering2-1;

			$sql=$db2->CreateUpdateSql($data2,'#__jobs_field_categories',"id='$id2'");

			$db2->query($sql);

			$db2->setQuery();

		}

		

			$data=array();

			$data['ordering']=$new_order;

			

			$sql=$db->CreateUpdateSql($data,'#__jobs_field_categories',"id='$id'");

			$db->query($sql);

			$db->setQuery();



		

		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_updated);

	}

	

	function saveOrder()

	{



		// Initialize variables

		$db			= & lknDb::createInstance();



		$cid		= lknGetParamatre($_POST,'cid' );

		$order		= lknGetParamatre($_POST,'order');



		$total		= count($cid);

		

		lknArrayHelper::toInteger($cid, array(0));

		lknArrayHelper::toInteger($order, array(0));

	

		// Update the ordering for items in the cid array

		for ($i = 0; $i < $total; $i ++)

		{

			$id=(int)$cid[$i];

			$sql="SELECT * FROM #__jobs_field_categories WHERE id='$id'";

			$row=lknDb::loadTable($sql);

			if ($row->ordering != $order[$i]) {

				$sql="UPDATE #__jobs_field_categories SET ordering='" .$order[$i] ."' WHERE id='$id'";

				$db->query($sql);

				$db->setQuery();

			}

		}

		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_updated);

		



	}

	

	function publish_field_category()

	{

		global $_db;

		$id=lknGetParamatre($_REQUEST,'cid');

				

		if (is_array($id)) {

				foreach ($id as $value)

				{

					$_db->query("UPDATE #__jobs_field_categories SET published='1' WHERE id='$value'");

					$_db->setQuery();



				}

		}else 

		{

			$id=(int)$id;

			$_db->query("UPDATE #__jobs_field_categories SET published='1' WHERE id='$id'");

			$_db->setQuery();

		}

		

		

		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_updated);

				

	}

	

	function unpublish_field_category()

	{

		global $_db;

		$id=lknGetParamatre($_REQUEST,'cid');

		

		if (is_array($id)) {

				foreach ($id as $value)

				{

					if ($value=='1') {

						//1: Genel

						//kategori id'si 1 ise General Settings. Bunu silemez ve unpublish edemez

					}else {

						$_db->query("UPDATE #__jobs_field_categories SET published='0' WHERE id='$value'");

						$_db->setQuery();

					}

				}

		}else 

		{

			$id=(int)$id;

				if ($value=='1') {

					//1: Genel

					//kategori id'si 1 ise General Settings. Bunu silemez ve unpublish edemez

				}else {

					$_db->query("UPDATE #__jobs_field_categories SET published='0' WHERE id='$id'");

					$_db->setQuery();					

				}



		}



		yonledir("index2.php?option=com_jobs&task=list_field_categories",_lkn_updated);

		

	}

	

	function delete_field_category(){

		global $_db;

		$id=lknGetParamatre($_POST,'cid');

		$msg=array();

		if (is_array($id)) {

				foreach ($id as $value)

				{

					if ($value=='1' || $value=='2' || $value=='3' || $value=='4' || $value=='5') {

						$msg[]=$value;

					}else {					

						$sql="SELECT id FROM #__jobs_field_categories WHERE parent_id='$value'";

						$hasChild=lknGetCount($sql);

						if ($hasChild==0) {

							$sql="SELECT id FROM #__jobs_fields WHERE cat_id='$value'";

							$hasJobs=lknGetCount($sql);	

							

							if ($hasJobs==0) {

								$_db->query("DELETE FROM #__jobs_field_categories WHERE id='$value'");

								$_db->setQuery();

							}else{

									$msg[]=$value;

							}

						}else{

							$msg[]=$value;

						}

					}

				}

		}

		

		if (count( $msg ) > 0) {

			$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

		}else {

			$msg=_lkn_delete_info;

		}	

		

		yonledir("index2.php?option=com_jobs&task=list_field_categories",$msg);

	

	}

	

	function list_fields(){	

		global $_db;

		$params=array();

		$where=array();

		

		$published=lknGetParamatre($_REQUEST,'published');

		$cat_id=(int)lknGetParamatre($_REQUEST,'cat_id');

		$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

		$field_type=lknText::strToLower(lknGetParamatre($_REQUEST,'field_type'));



		if ($published!='' && isset($published)) {

			$where[]="f.published='$published'";

		}



		if ($cat_id!='' && isset($cat_id)) {

			$where[]="f.cat_id='$cat_id'";

		}

		

		if ($field_type!='' && isset($field_type)) {

			$where[]="f.type='$field_type'";

		}

		

		if (($search!='' && isset($search))) {

			$where[]="((f.title LIKE '%$search%') OR

				(f.description LIKE '%$search%') OR

				(f.name='$search'))";

		}







		$where[]="f.cat_id=fc.id";

		$where[]="fc.published='1'";



		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );



		$sql="SELECT f.id";

		$sql.="\n FROM #__jobs_fields AS f,";

		$sql.="\n #__jobs_field_categories AS fc";

		$sql.=$where;



		$params['count']=lknGetCount($sql);



		$sql="SELECT f.*, fc.title AS field_category";

		$sql.="\n FROM #__jobs_fields AS f,";

		$sql.="\n #__jobs_field_categories AS fc";

		$sql.=$where;

		$sql.="\n ORDER BY f.cat_id, f.ordering ASC";

		$sql.=$_db->getLimit();

		//echo $sql;

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->loadObjectList();

		HTML_jobs::list_fields($row,$params);

	

	

	}

	

	function apply_field(){

		$id = lknGetParamatre ($_REQUEST,'cid' );

		if ($id=='') {

			//yani yeni bir kategori eklemişler

			$id=lknJobsFunctions::save_field();



			if ($id!='0') {

				$msg=_lkn_added;

			}else {

				$msg='Field is not created';

				yonledir("index2.php?option=com_jobs&task=list_fields",$msg);

				return ;

			}

			



		}else {

			lknJobsFunctions::update_field();

			$msg=_lkn_updated;

			

		}

		yonledir ( "index2.php?option=com_jobs&task=edit_field&cid=$id&hidemainmenu=1", $msg );

	}

	

	function new_field(){



		global $_db,$option;

		$lists = array();//genel container

		

		//field türleri oluşturulmaya başladı

		$types = lknJobsFields::getFieldTypes();

					 

		$lists['type'] = lknhtmlMaker::selectList( $types, 'db_type','' ,'class="inputbox" size="1" mosReq=1 mosLabel="Field Type" onchange="selType(this.options[this.selectedIndex].value);"');

		//field türleri oluşturuldu

		

		//gereklimi olayı oluşturuluyor

			$lists['required'] = lknhtmlMaker::yesNoSelectList( 'db_required','', 0,_lkn_yes,_lkn_no,'class="inputbox" size="1"' );

		//gereklimi olayı oluşturulması bitti

		

		//published mi? başladı

			$lists['published'] = lknhtmlMaker::publishedSelectList('db_published','', 'class="inputbox" size="1"');

		//published mi? bitti

		

		//searchable mı sorusu

			$lists['searchable'] = lknhtmlMaker::yesNoSelectList( 'db_searchable','' ,0,_lkn_yes,_lkn_no,'class="inputbox" size="1"' );

		//searchable mı sorusu

		

		//kategoriler başladı

			$cats=resumeFieldCategoryList();

			$lists['cats']=lknhtmlMaker::selectList($cats,'db_cat_id','',' mosReq=1 mosLabel="Category"');

		//kategoriler bitti

		

		$fieldvalues=array();

		

		HTML_jobs::field_form('', $lists, $fieldvalues, $option);//'',$types,$cats);

	}

	

	function save_field(){

		$id=lknJobsFunctions::save_field();

		if ($id!='0') {

			$msg=_lkn_added;

		}else {

			$msg='Field is not created';

		}

				

		yonledir("index2.php?option=com_jobs&task=list_fields",$msg);

	}

	

	function save_and_new_field(){

		$id=lknJobsFunctions::save_field();

		if ($id!='0') {

			$msg=_lkn_added;

			yonledir("index2.php?option=com_jobs&task=new_field",$msg);

		}else {

			$msg='Field is not created';

			yonledir("index2.php?option=com_jobs&task=list_fields",$msg);

			return ;

		}

				

		

	}

	

	function edit_field(){



		global $_db,$option;

		

		$cid=lknGetParamatre($_REQUEST,'cid');

		if (is_array($cid)) {

			$cid=$cid[0];

		}

		

		if ($cid=='') {

			return ;

		}

		

		$where=array();

		



		$where[]="f.id='$cid'";



		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );



		$sql="SELECT f.*";

		$sql.="\n FROM #__jobs_fields AS f";

		$sql.=$where;

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->loadObject();

		

		$system_field=$row->can_unpublish;

		if ($system_field=='0') {

			 $extra=' disabled="disabled"';

		}else {

			$extra='';

		}

		

		

		$lists = array();//genel container

		

		//field türleri oluşturulmaya başladı

		$types = $types = lknJobsFields::getFieldTypes('1');

							 

		$lists['type'] = lknhtmlMaker::selectList( $types, 'db_type',$row->type ,'class="inputbox" size="1" mosReq=1 mosLabel="Field Type" disabled="disabled" onchange="selType(this.options[this.selectedIndex].value);"');

		//field türleri oluşturuldu

		

		//gereklimi olayı oluşturuluyor

			$lists['required'] = lknhtmlMaker::yesNoSelectList( 'db_required',$row->required, 0,_lkn_yes,_lkn_no,'class="inputbox" size="1"' );

		//gereklimi olayı oluşturulması bitti

		

		//published mi? başladı

			$lists['published'] = lknhtmlMaker::publishedSelectList('db_published',$row->published, 'class="inputbox" size="1"' . $extra);

		//published mi? bitti

		

		//searchable mı sorusu

			$lists['searchable'] = lknhtmlMaker::yesNoSelectList( 'db_searchable',$row->searchable ,0,_lkn_yes,_lkn_no,'class="inputbox" size="1"' );

		//searchable mı sorusu

		

		//kategoriler başladı

			$cats=resumeFieldCategoryList();

			$lists['cats']=lknhtmlMaker::selectList($cats,'db_cat_id',$row->cat_id,' mosReq=1 mosLabel="Category"' . $extra);

		//kategoriler bitti

		

		//field için seçenekler var mı kontrol et

			$fieldvalues=array();

			$id=$row->id;

			$sql="SELECT id FROM #__jobs_field_values WHERE fieldid='$id'";

			$count=lknGetCount($sql);

			if ($count>0) {

				$db_values=&lknDb::createInstance();

				$sql="SELECT * FROM #__jobs_field_values WHERE fieldid='$id'";

				$db_values->query($sql);

				$db_values->setQuery();

				$fieldvalues=$db_values->loadObjectList();

			}

			

		//field için seçenekler var mı kontrol etme bitti

		

		HTML_jobs::field_form($row, $lists, $fieldvalues, $option);//'',$types,$cats);

	}

	

	function update_field(){

		lknJobsFunctions::update_field();

		yonledir("index2.php?option=com_jobs&task=list_fields",_lkn_updated);

	}

	

	function delete_field(){

		$db=&lknDb::createInstance();

		

		$cid=lknGetParamatre($_POST,'cid');

		$msg=array();

		foreach ($cid as $id){

			$row=lknDb::loadTable("SELECT * FROM #__jobs_fields WHERE id='$id'");

			$name=$row->name;

			$can_delete=$row->can_delete;

			

			if ($can_delete=='1') {

				$sql="ALTER TABLE #__jobs_resumes DROP `$name`";

				$db->query($sql);

				$db->setQuery();

				

				$sql="DELETE FROM #__jobs_field_values WHERE fieldid='$id'";

				$db->query($sql);

				$db->setQuery();

	

				$sql="DELETE FROM #__jobs_fields WHERE id='$id'";

				$db->query($sql);

				$db->setQuery();

				

				$msg[]="Field with $id is deleted<br />";

			}else {

				$msg[]="You can not delete field with $id<br />";

			}

		}

		

		$msg=implode('',$msg);

		

		yonledir("index2.php?option=com_jobs&task=list_fields",$msg);

		

	}

	

	function publish_field()

	{

		global $_db;

		$id=lknGetParamatre($_REQUEST,'cid');

				

		if (is_array($id)) {

				foreach ($id as $value)

				{

					$_db->query("UPDATE #__jobs_fields SET published='1' WHERE id='$value'");

					$_db->setQuery();



				}

		}else 

		{

			$id=(int)$id;

			$_db->query("UPDATE #__jobs_fields SET published='1' WHERE id='$id'");

			$_db->setQuery();

		}

		

		

		yonledir("index2.php?option=com_jobs&task=list_fields",_lkn_updated);

				

	}

	

	function unpublish_field(){

		$db=&lknDb::createInstance();

		

		$cid=lknGetParamatre($_POST,'cid');

		$msg=array();

		foreach ($cid as $id){

			$row=lknDb::loadTable("SELECT * FROM #__jobs_fields WHERE id='$id'");

			$name=$row->name;

			$can_unpublish=$row->can_unpublish;

			

			if ($can_unpublish=='1') {

				$db->query("UPDATE #__jobs_fields SET published='0' WHERE id='$id'");

				$db->setQuery();

				

				$msg[]="Field with $id is unpublished<br />";

			}else {

				$msg[]="You can not unpublish field with ID $id<br />";

			}

		}

		

		$msg=implode('',$msg);

		

		yonledir("index2.php?option=com_jobs&task=list_fields",$msg);

		

	}

	

	function move_up_field(){

		$db=&lknDb::createInstance();

		

		$id=lknGetParamatre($_REQUEST,'cid');

		$ordering=lknGetParamatre($_REQUEST,'ordering');

		$new_order=$ordering-1;

		$cat_id=lknGetParamatre($_REQUEST,'cat_id');

		

		$sql="SELECT * FROM #__jobs_fields WHERE cat_id='$cat_id' AND ordering='$new_order'";

		$db->query($sql);

		$db->setQuery();

		$count=$db->num_rows();

		if ($count>0) {

			//yeni ordering'e sahip bir tane kayıt var. bunu yukarı çıkar

			$row=$db->loadObject();

			$id2=$row->id;

			$ordering2=$row->ordering;

			$db2=&lknDb::createInstance();

			

			$data2=array();

			$data2['ordering']=$ordering2+1;

			$sql=$db2->CreateUpdateSql($data2,'#__jobs_fields',"id='$id2'");

			$db2->query($sql);

			$db2->setQuery();



		}

		

			$data=array();

			$data['ordering']=$new_order;

			

			$sql=$db->CreateUpdateSql($data,'#__jobs_fields',"id='$id'");

			$db->query($sql);

			$db->setQuery();

		

		yonledir("index2.php?option=com_jobs&task=list_fields",_lkn_updated);

	}

	

	function move_down_field(){

		$db=&lknDb::createInstance();

		

		$id=lknGetParamatre($_REQUEST,'cid');

		$ordering=lknGetParamatre($_REQUEST,'ordering');

		$new_order=$ordering+1;

		$cat_id=lknGetParamatre($_REQUEST,'cat_id');

		

		$sql="SELECT * FROM #__jobs_fields WHERE cat_id='$cat_id' AND ordering='$new_order'";

		$db->query($sql);

		$db->setQuery();

		$count=$db->num_rows();

		

		if ($count>0) {

			//yeni ordering'e sahip bir tane kayıt var. bunu yukarı çıkar

			$row=$db->loadObject();

			$id2=$row->id;

			$ordering2=$row->ordering;

			$db2=&lknDb::createInstance();

			

			$data2=array();

			$data2['ordering']=$ordering2-1;

			$sql=$db2->CreateUpdateSql($data2,'#__jobs_fields',"id='$id2'");

			$db2->query($sql);

			$db2->setQuery();

		}

		

			$data=array();

			$data['ordering']=$new_order;

			

			$sql=$db->CreateUpdateSql($data,'#__jobs_fields',"id='$id'");

			$db->query($sql);

			$db->setQuery();



		

		yonledir("index2.php?option=com_jobs&task=list_fields",_lkn_updated);

	}



	



function list_categories(){

	global $_db;

	$params=array();

	$where=array();

	$published=lknGetParamatre($_REQUEST,'published');

	$parent_id=(int)lknGetParamatre($_REQUEST,'parent_id');

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	

	if ($published!='' && isset($published)) {

		$where[]="c.published='$published'";	

	}

	

	if ($parent_id!='' && isset($parent_id)) {

		$where[]="c.parent_id='$parent_id'";	

	}

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(c.title) LIKE '%$search%'";	

	}

	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_categories AS c";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_categories AS c";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_categories($params);

}



function new_category(){

	HTML_jobs::category_form();

}



function save_category()

{

	lknJobsFunctions::save_category();

	yonledir("index2.php?option=com_jobs&task=list_categories",_lkn_added);

		

}



/**

 * bir kategoriyi kaydeder.

 *

 */

function save_and_new_category(){

	lknJobsFunctions::save_category();	

	yonledir("index2.php?option=com_jobs&task=new_category",_lkn_added);	

}



/**

 * update ekranındaki bir kategoriyi yeni kategori olarak kaydeder

 *

 */



function save_as_new_category(){

	//yani yeni bir kategori eklemişler

	$id=lknJobsFunctions::save_category();

	yonledir ( "index2.php?option=com_jobs&task=edit_category&cid=$id&hidemainmenu=1", _lkn_added );

}



function apply_category(){

	$id = lknGetParamatre ($_REQUEST,'cid' );

	if ($id=='') {

		//yani yeni bir kategori eklemişler

		$id=lknJobsFunctions::save_category();

		$msg=_lkn_added;



	}else {

		lknJobsFunctions::update_category();

		$msg=_lkn_updated;

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_category&cid=$id&hidemainmenu=1", $msg );

}





function update_category()

{

	lknJobsFunctions::update_category();	

	yonledir("index2.php?option=com_jobs&task=list_categories",_lkn_updated);

		

}





function edit_category()

{

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_categories AS c";

	$sql.=$where;

	

	$_db->query($sql);

	$_db->setQuery();

	$row=$_db->getFistRecord();

	HTML_jobs::category_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function publish_category()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_categories SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_categories SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_categories",_lkn_updated);

	

}



function unpublish_category()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_categories SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_categories SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_categories",_lkn_updated);

	

}



function delete_category()

{

	global $_db;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$sql="SELECT id FROM #__jobs_categories WHERE parent_id='$value'";

				$hasChild=lknGetCount($sql);

				if ($hasChild==0) {

					$sql="SELECT id FROM #__jobs_jobs WHERE cat_id='$value'";

					$hasJobs=lknGetCount($sql);	

					

					if ($hasJobs==0) {

						$_db->query("DELETE FROM #__jobs_categories WHERE id='$value'");

						$_db->setQuery();

					}else 

					{

							$msg[]=$value;

					}

				}else 

				{

					$msg[]=$value;

				}

			}

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}	

	

	yonledir("index2.php?option=com_jobs&task=list_categories",$msg);

	

}



function list_files()

{

	global $_db;

	$params=array();

	$where=array();



	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$published=lknGetParamatre($_REQUEST,'published');

	if (($search!='' && isset($search))) {

		$where[]="u.username='$search'";	

	}

	

	if (($published!='' && isset($published))) {

		$where[]="uf.published='$published'";	

	}

		

	$where[]="uf.memberid=u.id";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT u.id";

	$sql.="\n FROM #__jobs_resume_files AS uf,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	

	$count=lknGetCount($sql);

	

	$sql="SELECT uf.*, u.username AS username";

	$sql.="\n FROM ";

	$sql.="\n #__users AS u, #__jobs_resume_files AS uf";

	$sql.=$where;

	$sql.=$_db->getLimit();

	//echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	

	HTML_jobs::list_files($rows,$count);

	

}



function edit_file()

{

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		

		$where[]="uf.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		

		$sql="SELECT uf.*";

		$sql.="\n FROM ";

		$sql.="\n #__jobs_resume_files AS uf";

		$sql.=$where;



		//echo $sql;

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		//print_r($row);

		

		$resume_rows=lknJobsFunctions::getFileResumes($cid);

		HTML_jobs::file_form($row,$resume_rows);

	}else 

	{

		echo _lkn_error;

	}

}



function update_file()

{

	$id=lknGetParamatre($_POST,'cid');

	$msg=lknJobsFunctions::update_file($id);

	

	yonledir("index2.php?option=com_jobs&task=list_files",$msg);

		

}



function new_file()

{

	HTML_jobs::file_form();

}



function apply_file()

{

	$id=lknGetParamatre($_POST,'cid');

	global $_db;

	

	if ($id=='') {

		//yani ilk defa milli oluyosa

		$msg=lknJobsFunctions::save_file();

		$id=$msg['id'];

		$msg=$msg['msg'];



		yonledir("index2.php?option=com_jobs&task=edit_file&cid=$id",$msg);

	}else 

	{

		$msg=lknJobsFunctions::update_file($id);	

		yonledir("index2.php?option=com_jobs&task=edit_file&cid=$id",$msg);		

	}

	

}



function save_file()

{

	$msg=lknJobsFunctions::save_file();

	

//	lknJobsFunctions::save_banned_companies($msg['inserted_id']);

	yonledir("index2.php?option=com_jobs&task=list_files",$msg['msg']);

		

}



function save_and_new_file(){

	$msg=lknJobsFunctions::save_file();	

	yonledir("index2.php?option=com_jobs&task=new_file",$msg['msg']);	

}





function publish_file()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_resume_files SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_resume_files SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_files",_lkn_updated);

	

}



function delete_file()

{

	global $_db,$_lknBaseFramework,$_config;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

					

					$_db->query("DELETE FROM FROM #__jobs_resume_files2resumes WHERE file_id='$value'");

					$_db->setQuery();

					

					$_db->query("SELECT * FROM #__jobs_resume_files WHERE id='$value'");

					$_db->setQuery();

					$row=$_db->loadObject();

					$file=$row->file_name;

					

					$_db->query("DELETE FROM #__jobs_resume_files WHERE id='$value'");

					$_db->setQuery();

					

					if ($file!=''){

						$upload_folder=JOOMLA_ROOT;

						$upload_folder=str_replace('/',LKN_DS,$upload_folder . $_config['files_folder']);

						unlink($upload_folder. $file);

					}

			

			}

	}else {

		$value=(int)$id;

		

		$_db->query("DELETE FROM FROM #__jobs_resume_files2resumes WHERE file_id='$value'");

		$_db->setQuery();

					

		$_db->query("SELECT * FROM #__jobs_resume_files WHERE id='$value'");

		$_db->setQuery();

		$row=$_db->loadObject();

		$file=$row->file_name;

					

		$_db->query("DELETE FROM #__jobs_resume_files WHERE id='$value'");

		$_db->setQuery();

					

		if ($file!=''){

			$upload_folder=JOOMLA_ROOT;

			$upload_folder=str_replace('/',LKN_DS,$upload_folder . $_config['files_folder']);

			unlink($upload_folder. $file);

		}

				

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}	

	

	yonledir("index2.php?option=com_jobs&task=list_files",$msg);

	

}



function unpublish_file()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_resume_files SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_resume_files SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_files",_lkn_updated);

	

}



function send_resume_file(){

	$id=lknGetParamatre($_GET,'id');

	$resume_id=lknGetParamatre($_GET,'resume_id');

	lknJobsSendFile($id,$resume_id);

}



function list_employers()

{

	global $_db;

	$params=array();

	$where=array();



	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));



	

	if (($search!='' && isset($search))) {

		$where[]="u.username='$search'";	

	}

	

	$where[]="c.memberid=u.id";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT u.id";

	$sql.="\n FROM #__jobs_companies AS c,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.="\n GROUP BY u.id";

	

	$count=lknGetCount($sql);

	

	$sql="SELECT u.*, COUNT(c.id) AS company_count";

	$sql.="\n FROM ";

	$sql.="\n #__users AS u, #__jobs_companies AS c";

	$sql.=$where;

	$sql.="\n GROUP BY u.id";

	$sql.=$_db->getLimit();

	//echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	

	HTML_jobs::list_employers($rows,$count);

	

}



function list_companies()

{

	global $_db;

	$params=array();

	$where=array();



	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$published=lknGetParamatre($_REQUEST,'published');

	$memberid=lknGetParamatre($_REQUEST,'memberid');

	$country=lknGetParamatre($_REQUEST,'country');

	

	if ($published!='' && isset($published)) {

		$where[]="c.published='$published'";	

	}

	

	if ($memberid!='' && isset($memberid)) {

		$where[]="c.memberid='$memberid'";	

	}



	if ($country!='' && isset($country)) {

		$where[]="c.country='$country'";	

	}

	

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(c.title) LIKE '%$search%'";	

	}

	

	$where[]="c.country=cl.id";

	$where[]="c.memberid=u.id";

	$where[]="cl.published='1'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_companies AS c,";

	$sql.="\n #__jobs_countries AS cl,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*,cl.title AS country,u.username AS company_owner";

	$sql.="\n FROM #__jobs_companies AS c,";

	$sql.="\n #__jobs_countries AS cl,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_companies($params);
}
function new_company()
{
	HTML_jobs::company_form();
}
function save_company()
{
	global $_db;
	$msg=lknJobsFunctions::save_company();	
	$id=$msg['inserted_id'];
	$msg=$msg['msg'];
	$longitud 	= $_POST['longitud'];
	$latitud 	= $_POST['latitud'];
	$rojo = $_POST["rojo"];
	$sql="UPDATE #__jobs_companies SET lat = '$latitud', lng='$longitud', type='$rojo' WHERE id=".$id;
	$_db->query($sql);
    $_db->setQuery();
	
	    	//obtener la img de la bd
    	
		$query="select logo from #__jobs_companies  WHERE id=".$id;
		$_db->query($query);
    	$_db->setQuery();
		$rows=$_db->loadObjectList();

		//imagen de la base de datos
		$imgDB = $rows[0]->logo;
		$imgDB = strtolower($imgDB);
		$dir = getcwd()."/../images/stories/jobs/logos/";
		
		$thubmnailC = $dir.$imgDB;
		
		//Verificar tipo de extension del archivo
		
		$extension = explode(".",$thubmnailC);
		$ext = count($extension)-1; 
		
		if ($extension[$ext]=="jpg")
		{
			$original = imagecreatefromjpeg($thubmnailC);
		}
		if ($extension[$ext]=="png")
		{
			$original = imagecreatefrompng($thubmnailC);
		}
		if ($extension[$ext]=="gif")
		{
			$original = imagecreatefromgif($thubmnailC);
		}
		
		//Crear thumbnail
		//cargar imagen a redimensionar
		
		
		//Convertir imagen thumbnail
		$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
		$ancho = imagesx($original);
		$alto = imagesy($original);
		imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

		$nuevaimg = "thumb_".$imgDB;
		//Lugar de almacenamiento
		if ($extension[$ext]=="jpg")
		{
			imagejpeg($thumb, $dir.$nuevaimg, 90);
		}
		if ($extension[$ext]=="png")
		{
			imagepng($thumb, $dir.$nuevaimg);
		}
		if ($extension[$ext]=="gif")
		{
			imagegif($thumb, $dir.$nuevaimg);
		}
	
		$sql="UPDATE #__jobs_companies SET thumb_img = '$nuevaimg' WHERE id=".$id;
		$_db->query($sql);
    	$_db->setQuery();
	
	yonledir("index2.php?option=com_jobs&task=list_companies",$msg['msg']);
}

function save_and_new_company()
{
	global $_db;
	$msg=lknJobsFunctions::save_company();	
	$id=$msg['inserted_id'];
	$msg=$msg['msg'];	
	$longitud 	= $_POST['longitud' ];
	$latitud 	= $_POST['latitud' ];
	$rojo = $_POST["rojo"];
	$sql="UPDATE #__jobs_companies SET lat = '$latitud', lng='$longitud', type='$rojo' WHERE id=".$id;
	$_db->query($sql);
    $_db->setQuery();
	
	//obtener la img de la bd
	
	$query="select logo from #__jobs_companies  WHERE id=".$id;
	$_db->query($query);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//imagen de la base de datos
	$imgDB = $rows[0]->logo;
	$imgDB = strtolower($imgDB);
	$dir = getcwd()."/../images/stories/jobs/logos/";
	
	$thubmnailC = $dir.$imgDB;
	
	//Verificar tipo de extension del archivo
	
	$extension = explode(".",$thubmnailC);
	$ext = count($extension)-1; 
	
	if ($extension[$ext]=="jpg")
	{
		$original = imagecreatefromjpeg($thubmnailC);
	}
	if ($extension[$ext]=="png")
	{
		$original = imagecreatefrompng($thubmnailC);
	}
	if ($extension[$ext]=="gif")
	{
		$original = imagecreatefromgif($thubmnailC);
	}
	
	//Convertir imagen thumbnail
	$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
	$ancho = imagesx($original);
	$alto = imagesy($original);
	imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

	$nuevaimg = "thumb_".$imgDB;
	//Lugar de almacenamiento
	if ($extension[$ext]=="jpg")
	{
		imagejpeg($thumb, $dir.$nuevaimg, 90);
	}
	if ($extension[$ext]=="png")
	{
		imagepng($thumb, $dir.$nuevaimg);
	}
	if ($extension[$ext]=="gif")
	{
		imagegif($thumb, $dir.$nuevaimg);
	}

	$sql="UPDATE #__jobs_companies SET thumb_img = '$nuevaimg' WHERE id=".$id;
	$_db->query($sql);
	$_db->setQuery();
	yonledir("index2.php?option=com_jobs&task=new_company",_lkn_added);	
}
/**
 * update ekranındaki bir kategoriyi yeni kategori olarak kaydeder
 *
 */

function save_as_new_company(){

	//yani yeni bir kategori eklemişler
	global $_db;

	$id=lknJobsFunctions::save_company();

	$id=$id['inserted_id'];
	
	$longitud 	= $_POST['longitud' ];
	$latitud 	= $_POST['latitud' ];
	$rojo = $_POST["rojo"];
	
	$sql="UPDATE #__jobs_companies SET lat = '$latitud', lng='$longitud', type='$rojo' WHERE id=".$id;
	$_db->query($sql);
    $_db->setQuery();
	
	//obtener la img de la bd
	
	$query="select logo from #__jobs_companies  WHERE id=".$id;
	$_db->query($query);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//imagen de la base de datos
	$imgDB = $rows[0]->logo;
	$imgDB = strtolower($imgDB);
	$dir = getcwd()."/../images/stories/jobs/logos/";
	
	$thubmnailC = $dir.$imgDB;
	//Verificar tipo de extension del archivo
	
	$extension = explode(".",$thubmnailC);
	$ext = count($extension)-1; 
	
	if ($extension[$ext]=="jpg")
	{
		$original = imagecreatefromjpeg($thubmnailC);
	}
	if ($extension[$ext]=="png")
	{
		$original = imagecreatefrompng($thubmnailC);
	}
	if ($extension[$ext]=="gif")
	{
		$original = imagecreatefromgif($thubmnailC);
	}
	
	//Crear thumbnail
	//cargar imagen a redimensionar
	
	
	//Convertir imagen thumbnail
	$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
	$ancho = imagesx($original);
	$alto = imagesy($original);
	imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

	$nuevaimg = "thumb_".$imgDB;
	
	//Lugar de almacenamiento
	if ($extension[$ext]=="jpg")
	{
		imagejpeg($thumb, $dir.$nuevaimg, 90);
	}
	if ($extension[$ext]=="png")
	{
		imagepng($thumb, $dir.$nuevaimg);
	}
	if ($extension[$ext]=="gif")
	{
		imagegif($thumb, $dir.$nuevaimg);
	}

	$sql="UPDATE #__jobs_companies SET thumb_img = '$nuevaimg' WHERE id=".$id;
	$_db->query($sql);
	$_db->setQuery();

	yonledir ( "index2.php?option=com_jobs&task=edit_company&cid=$id&hidemainmenu=1", _lkn_added );

}



function edit_company()

{

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_companies AS c";

		$sql.=$where;

		

	//	echo $sql;

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();
	
		HTML_jobs::company_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function update_company()

{

	global $_config, $_db;

	

	$msg 	= lknJobsFunctions::update_company();
   
    //<macf>
	//2011-02-03
	$id=lknGetParamatre($_POST,'cid');
	$rhumanos = lknGetParamatre($_POST,'db_rhumanos');
	$data = array();
	$data['rhumanos']=$rhumanos;
	$sql=$_db->CreateUpdateSql($data,'#__jobs_companies',"id='$id'");
	//utilizar el framework de joomla
	$_db->query($sql);
	$_db->setQuery();		
	//fin

	//employer'a mail başladı

			$inform_user=$_config['employer_inform_on_company_submission'];

			

			$old_published='';

			$published='';

			if ($inform_user=='1') {

				$id=lknGetParamatre($_POST,'cid');

				$old_published=lknGetParamatre($_POST,'old_published');

				$published=lknGetParamatre($_POST,'db_published');

				if ($old_published=='0' and $published=='1') {

					lknJobsFunctions::employerMail('publish_company',$id);

				}

			}

	//emmployer'a mail başladı

	

	yonledir("index2.php?option=com_jobs&task=list_companies",$msg);

}



function apply_company()

{

	$id=lknGetParamatre($_POST,'cid');

	global $_db, $_config;

	

	if ($id=='') {

		$msg=array();

		//yani ilk defa milli oluyosa

		$msg=lknJobsFunctions::save_company();

		$id=$_db->get_insert_id();
		$id=$msg['inserted_id'];
		$msg=$msg['msg'];
		$longitud 	= $_POST['longitud'];
		$latitud 	= $_POST['latitud'];
		$rojo = $_POST["rojo"];
		$sql="UPDATE #__jobs_companies SET lat = '$latitud', lng='$longitud', type='$rojo' WHERE id=".$id;
		$_db->query($sql);
    	$_db->setQuery();
		
		//obtener la img de la bd
	
	$logo="select logo from #__jobs_companies  WHERE id=".$id;
	$_db->query($logo);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//imagen de la base de datos
	$imgDB = $rows[0]->logo;
	
	$dir = getcwd()."/../images/stories/jobs/logos/";
	
	$thubmnailC = $dir.$imgDB;
	strtolower($thubmnailC);
	
	//Verificar tipo de extension del archivo
	
	$extension = explode(".",$thubmnailC);
	$ext = count($extension)-1; 
	
	if ($extension[$ext]=="jpg")
	{
		$original = imagecreatefromjpeg($thubmnailC);
	}
	if ($extension[$ext]=="png")
	{
		$original = imagecreatefrompng($thubmnailC);
	}
	if ($extension[$ext]=="gif")
	{
		$original = imagecreatefromgif($thubmnailC);
	}
	
	//Crear thumbnail
	//cargar imagen a redimensionar
	
	
	//Convertir imagen thumbnail
	$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
	$ancho = imagesx($original);
	$alto = imagesy($original);
	imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

	$nuevaimg = "thumb_".$imgDB;
	//Lugar de almacenamiento
	if ($extension[$ext]=="jpg")
	{
		imagejpeg($thumb, $dir.$nuevaimg, 90);
	}
	if ($extension[$ext]=="png")
	{
		imagepng($thumb, $dir.$nuevaimg);
	}
	if ($extension[$ext]=="gif")
	{
		imagegif($thumb, $dir.$nuevaimg);
	}

	$sql="UPDATE #__jobs_companies SET thumb_img = '$nuevaimg' WHERE id=".$id;
	$_db->query($sql);
	$_db->setQuery();

		

		yonledir("index2.php?option=com_jobs&task=edit_company&cid=$id",$msg['msg']);

	}else 

	{

		$msg='';

		$old_published='';

		$published='';

		$msg=lknJobsFunctions::update_company($id);

		

			//employer'a mail başladı

				$inform_user=$_config['employer_inform_on_company_submission'];

				if ($inform_user=='1') {

					

					$id=lknGetParamatre($_POST,'cid');

					$old_published=lknGetParamatre($_POST,'old_published');

					$published=lknGetParamatre($_POST,'db_published');

					//die("$old_published-$published");

					if ($old_published=='0' and $published=='1') {

						lknJobsFunctions::employerMail('publish_company',$id);

					}

				}

			//emmployer'a mail başladı

	

		yonledir("index2.php?option=com_jobs&task=edit_company&cid=$id",$msg);		

	}

	

}



function publish_company()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_companies SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_companies SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_companies",_lkn_updated);

	

}



function unpublish_company()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_companies SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_companies SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_companies",_lkn_updated);

	

}



function delete_company()

{

	global $_db,$_lknBaseFramework,$_config;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$sql="SELECT id FROM #__jobs_jobs WHERE company_id='$value'";

				$hasJobs=lknGetCount($sql);

				if ($hasJobs==0) {

					$_db->query("SELECT * FROM #__jobs_companies WHERE id='$value'");

					$_db->setQuery();

					$image=$_db->loadObjectList();

					

					$image=$image[0]->logo;				

					

					$_db->query("DELETE FROM #__jobs_companies WHERE id='$value'");

					$_db->setQuery();

					

					$_db->query("DELETE FROM #__jobs_resumes_banned_companies WHERE company_id='$value'");

					$_db->setQuery();

					

					if ($image!=''){

						$upload_folder=JOOMLA_ROOT;

						$upload_folder=str_replace('/',LKN_DS,$upload_folder . $_config['logo_image_folder']);

						unlink($upload_folder. $image);

					}

				

				}else 

				{

					$msg[]=$value;

				}

			}

	}else {

		$value=(int)$id;

				$sql="SELECT id FROM #__jobs_jobs WHERE company_id='$value'";

				$hasJobs=lknGetCount($sql);

				if ($hasJobs==0) {

					$_db->query("SELECT * FROM #__jobs_companies WHERE id='$value'");

					$_db->setQuery();

					$image=$_db->loadObjectList();

					

					$image=$image[0]->logo;				

					

					$_db->query("DELETE FROM #__jobs_companies WHERE id='$value'");

					$_db->setQuery();

					

					$_db->query("DELETE FROM #__jobs_resumes_banned_companies WHERE company_id='$value'");

					$_db->setQuery();

					

					if ($image!=''){

						$upload_folder=JOOMLA_ROOT;

						$upload_folder=str_replace('/',LKN_DS,$upload_folder . $_config['logo_image_folder']);

						unlink($upload_folder. $image);

					}

				

				}else 

				{

					$msg[]=$value;

				}

		

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}	

	

	yonledir("index2.php?option=com_jobs&task=list_companies",$msg);

	

}



function list_jobs()

{

	$memberid=lknGetParamatre($_REQUEST,'memberid');

	$row=lknJobsFunctions::list_jobs($memberid);

	$params=$row['params'];

	$row=$row['row'];

	HTML_jobs::list_jobs($row,$params);

}



function new_job()

{

	lknImport('calendar');

	

	HTML_jobs::job_form();

}



function save_job()

{

	lknJobsFunctions::save_job();

	yonledir("index2.php?option=com_jobs&task=list_jobs",_lkn_added);

}



function save_and_new_job(){

	lknJobsFunctions::save_job();	

	yonledir("index2.php?option=com_jobs&task=new_job",_lkn_added);	

}



function save_as_new_job(){

	$id=lknJobsFunctions::save_job();	

	yonledir("index2.php?option=com_jobs&task=edit_job&cid=$id&hidemainmenu=1",_lkn_added);	

}



function apply_job(){

	$id = lknGetParamatre ($_REQUEST,'cid' );

	if ($id=='') {

		$id=lknJobsFunctions::save_job();

		$msg=_lkn_added;



	}else {

		$msg=lknJobsFunctions::update_job();

		$msg=$msg['msg'];

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_job&cid=$id&hidemainmenu=1", $msg );

}



function edit_job()

{

	lknImport('calendar');

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_jobs AS c";

	$sql.=$where;

	

	$_db->query($sql);

	$_db->setQuery();

	$row=$_db->getFistRecord();

	HTML_jobs::job_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function update_job()

{

	$msg=lknJobsFunctions::update_job();

	yonledir("index2.php?option=com_jobs&task=list_jobs",$msg['msg']);

		

}



function publish_job()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_jobs SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_jobs SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_jobs",_lkn_updated);

	

}



function unpublish_job()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_jobs SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_jobs SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_jobs",_lkn_updated);

	

}



function delete_job()

{

	global $_db,$_lknBaseFramework,$_config;

	$id=lknGetParamatre($_POST,'cid');

			foreach ($id as $key=>$value)

			{

				$sql="SELECT id FROM #__jobs_applications WHERE job_id='$value'";

				$hasApplications=lknGetCount($sql);

				if ($hasApplications==0) {

					//kredi harcanırken iş eklemiş olabilir. bunu silme başladı

						$_db->query("DELETE FROM #__jobs_credits_spending_history WHERE job_id='$value'");

						$_db->setQuery();

					//kredi harcanırken iş eklemiş olabilir. bunu silme bitti

										

					$_db->query("DELETE FROM #__jobs_jobs WHERE id='$value'");

					$_db->setQuery();



				

				}else 

				{

					$db_a=&lknDb::createInstance();

					$sql="SELECT id FROM #__jobs_applications WHERE job_id='$value'";

					$db_a->query($sql);

					$db_a->setQuery();

					$rows=$db_a->loadObjectList();

					foreach ($rows AS $row){

						$id=$row->id;

						$_db->query("DELETE FROM #__jobs_email_history WHERE application='$id'");

						$_db->setQuery();

						



					}

						//kredi harcanırken iş eklemiş olabilir. bunu silme başladı

							$_db->query("DELETE FROM #__jobs_credits_spending_history WHERE job_id='$value'");

							$_db->setQuery();

						//kredi harcanırken iş eklemiş olabilir. bunu silme bitti

						

					$_db->query("DELETE FROM #__jobs_applications WHERE job_id='$value'");

					$_db->setQuery();

						

					//şimdi sıra işin silisine geldi

						$_db->query("DELETE FROM #__jobs_jobs WHERE id='$value'");

						$_db->setQuery();

					//işin silmesi bitti

				}

			}

	

	

	yonledir("index2.php?option=com_jobs&task=list_jobs",_lkn_delete_info);

	

}



function list_job_types()

{

	global $_db;

	$params=array();

	$where=array();

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$published=lknGetParamatre($_REQUEST,'published');

	

	if ($published!='' && isset($published)) {

		$where[]="c.published='$published'";	

	}

	

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(c.title) LIKE '%$search%'";	

	}

	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_job_types AS c";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_job_types AS c";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	

	HTML_jobs::list_job_types($rows,$params);

}



function new_job_type()

{

	HTML_jobs::job_type_form();

}



function edit_job_type()

{

	lknImport('tabs');

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_job_types AS c";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		HTML_jobs::job_type_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function publish_job_type()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_job_types SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_job_types SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_job_types",_lkn_updated);

	

}



function unpublish_job_type()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_job_types SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_job_types SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_job_types",_lkn_updated);

	

}



function save_job_type()

{

	lknJobsFunctions::save_job_type();

	yonledir("index2.php?option=com_jobs&task=list_job_types",_lkn_added);

		

}



function save_and_new_job_type(){

	lknJobsFunctions::save_job_type();

	yonledir("index2.php?option=com_jobs&task=new_job_type",_lkn_added);

}





function save_as_new_job_type(){

	$id=lknJobsFunctions::save_job_type();

	yonledir ( "index2.php?option=com_jobs&task=edit_job_type&cid=$id&hidemainmenu=1", _lkn_added );

}



function apply_job_type(){

	global $_db;

	$id = lknGetParamatre ($_REQUEST,'cid' );

	$data=lknGetFormValues();

	

	if ($id=='') {

		$id=lknJobsFunctions::save_job_type();

		$msg=_lkn_added;



	}else {

		lknJobsFunctions::update_job_type();

		$msg=_lkn_updated;

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_job_type&cid=$id&hidemainmenu=1", $msg );

}



function update_job_type()

{

	lknJobsFunctions::update_job_type();	

	yonledir("index2.php?option=com_jobs&task=list_job_types",_lkn_updated);

		

}



function delete_job_type()

{

	global $_db;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				

				$sql="SELECT id FROM #__jobs_jobs WHERE job_type='$value'";

				$hasJobs=lknGetCount($sql);

				

				if ($hasJobs==0) {

					$_db->query("DELETE FROM #__jobs_job_types WHERE id='$value'");

					$_db->setQuery();					

				

				}else 

				{

					$msg[]=$value;

				}

			}

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_job_types",$msg);

	

}





function list_education_levels()

{

	global $_db;

	$params=array();

	$where=array();

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$published=lknGetParamatre($_REQUEST,'published');

	

	if ($published!='' && isset($published)) {

		$where[]="c.published='$published'";	

	}

	

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(c.title) LIKE '%$search%'";	

	}

	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_education_levels AS c";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_education_levels AS c";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	

	HTML_jobs::list_education_levels($rows,$params);

}



function new_education_level()

{

	HTML_jobs::education_level_form();

}



function edit_education_level()

{

	lknImport('tabs');

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_education_levels AS c";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		HTML_jobs::education_level_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function publish_education_level()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_education_levels SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_education_levels SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_education_levels",_lkn_updated);

	

}



function unpublish_education_level()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_education_levels SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_education_levels SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_education_levels",_lkn_updated);

	

}



function save_education_level()

{

	lknJobsFunctions::save_education_level();

	yonledir("index2.php?option=com_jobs&task=list_education_levels",_lkn_added);

		

}



function save_and_new_education_level(){

	lknJobsFunctions::save_education_level();

	yonledir("index2.php?option=com_jobs&task=new_education_level",_lkn_added);

}





function save_as_new_education_level(){

	$id=lknJobsFunctions::save_education_level();

	yonledir ( "index2.php?option=com_jobs&task=edit_education_level&cid=$id&hidemainmenu=1", _lkn_added );

}



function apply_education_level(){

	global $_db;

	$id = lknGetParamatre ($_REQUEST,'cid' );

	$data=lknGetFormValues();

	

	if ($id=='') {

		$id=lknJobsFunctions::save_education_level();

		$msg=_lkn_added;



	}else {

		lknJobsFunctions::update_education_level();

		$msg=_lkn_updated;

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_education_level&cid=$id&hidemainmenu=1", $msg );

}



function update_education_level()

{

	lknJobsFunctions::update_education_level();	

	yonledir("index2.php?option=com_jobs&task=list_education_levels",_lkn_updated);

		

}



function delete_education_level()

{

	global $_db;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				

				$sql="SELECT id FROM #__jobs_jobs WHERE degree='$value'";

				$hasJobs=lknGetCount($sql);

				

				if ($hasJobs==0) {

					$_db->query("DELETE FROM #__jobs_education_levels WHERE id='$value'");

					$_db->setQuery();					

				

				}else 

				{

					$msg[]=$value;

				}

			}

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_education_levels",$msg);

	

}





function list_countries()

{

	global $_db;

	$params=array();

	$where=array();

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$published=lknGetParamatre($_REQUEST,'published');

	

	if ($published!='' && isset($published)) {

		$where[]="c.published='$published'";	

	}

	

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(c.title) LIKE '%$search%'";	

	}

	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_countries AS c";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_countries AS c";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_countries($params);

}



function new_country()

{

	HTML_jobs::country_form();

}





function save_country()

{

	global $_db;

	$data=lknGetFormValues();

	

	$sql=$_db->CreateInsertSql($data,"#__jobs_countries");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=list_countries",_lkn_added);

		

}



function save_and_new_country(){

		global $_db;





		$data=lknGetFormValues();

	

	$sql=$_db->CreateInsertSql($data,"#__jobs_countries");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=new_country",_lkn_added);

}



//@todo:bu country fonksiyonlarını common.php içine taşı

function save_as_new_country(){

	global $_db;

	$data=lknGetFormValues();

	

	$sql=$_db->CreateInsertSql($data,"#__jobs_countries");

	$_db->query($sql);

	$_db->setQuery();

	$id=$_db->get_insert_id();

	$msg=_lkn_added;

			

	yonledir ( "index2.php?option=com_jobs&task=edit_country&cid=$id&hidemainmenu=1", _lkn_added );

}



function apply_country(){

	global $_db;

	$id = lknGetParamatre ($_REQUEST,'cid' );

	$data=lknGetFormValues();

	

	if ($id=='') {

		//yani yeni bir kategori eklemişler

			$sql=$_db->CreateInsertSql($data,"#__jobs_countries");

			$_db->query($sql);

			$_db->setQuery();

			$id=$_db->get_insert_id();

			$msg=_lkn_added;



	}else {

			$sql=$_db->CreateUpdateSql($data,"#__jobs_countries","id='$id'");

			$_db->query($sql);

			$_db->setQuery();

			$msg=_lkn_updated;

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_country&cid=$id&hidemainmenu=1", $msg );

}



function update_country()

{

	global $_db;

	//$data=array();

	$id=(int)lknGetParamatre($_POST,'cid');



	$data=lknGetFormValues();

	

	

	$sql=$_db->CreateUpdateSql($data,"#__jobs_countries","id='$id'");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=list_countries",_lkn_updated);

		

}





function edit_country()

{

	lknImport('tabs');

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_countries AS c";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		HTML_jobs::country_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function publish_country()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_countries SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_countries SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_countries",_lkn_updated);

	

}



function unpublish_country()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_countries SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_countries SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_countries",_lkn_updated);

	

}



function delete_country()

{

	global $_db;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$sql="SELECT id FROM #__jobs_companies WHERE country='$value'";

				$hasCompanies=lknGetCount($sql);

				

				$sql="SELECT id FROM #__jobs_jobs WHERE country='$value'";

				$hasJobs=lknGetCount($sql);

				

				if ($hasCompanies==0 and $hasJobs==0) {

					$_db->query("DELETE FROM #__jobs_countries WHERE id='$value'");

					$_db->setQuery();					

				

				}else 

				{

					$msg[]=$value;

				}

			}

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_countries",$msg);

	

}



function list_cover_letters()

{

	global $_db;

	$params=array();

	$where=array();

	

	$published=lknGetParamatre($_REQUEST,'published');

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$memberid=lknGetParamatre($_REQUEST,'memberid');

	

	if ($published!='' && isset($published)) {

		$where[]="c.published='$published'";	

	}

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(c.title) LIKE '%$search%'";	

	}

	

	if (($memberid!='' && isset($memberid))) {

		$where[]="c.memberid='$memberid'";	

	}

		

	$where[]="c.memberid=u.id";	

	

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_cover_letters AS c,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*,u.username as username";

	$sql.="\n FROM #__jobs_cover_letters AS c,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_cover_letters($params);

}



function new_cover_letter()

{

	HTML_jobs::cover_letter_form();

}



function save_cover_letter()

{

	lknJobsFunctions::save_cover_letter();

	yonledir("index2.php?option=com_jobs&task=list_cover_letters",_lkn_added);

		

}





function save_and_new_cover_letter(){

	lknJobsFunctions::save_cover_letter();

	yonledir("index2.php?option=com_jobs&task=new_cover_letter",_lkn_added);	

}



function save_as_new_cover_letter(){

	$id=lknJobsFunctions::save_cover_letter();	

	yonledir("index2.php?option=com_jobs&task=edit_cover_letter&cid=$id&hidemainmenu=1",_lkn_added);

}



function apply_cover_letter(){

	$id = lknGetParamatre ($_REQUEST,'cid' );

	if ($id=='') {

		$id=lknJobsFunctions::save_cover_letter();

		$msg=_lkn_added;



	}else {

		lknJobsFunctions::update_cover_letter();

		$msg=_lkn_updated;

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_cover_letter&cid=$id&hidemainmenu=1", $msg );

}



function edit_cover_letter()

{

	lknImport('tabs');

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.*";

	$sql.="\n FROM #__jobs_cover_letters AS c";

	$sql.=$where;

	

	$_db->query($sql);

	$_db->setQuery();

	$row=$_db->getFistRecord();

	HTML_jobs::cover_letter_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function update_cover_letter()

{

	$msg=lknJobsFunctions::update_cover_letter();	

	yonledir("index2.php?option=com_jobs&task=list_cover_letters",$msg);

		

}



function publish_cover_letter()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_cover_letters SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_cover_letters SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_cover_letters",_lkn_updated);

	

}



function unpublish_cover_letter()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_cover_letters SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_cover_letters SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_cover_letters",_lkn_updated);

	

}



function delete_cover_letter()

{

	global $_db,$_lknBaseFramework,$_config;

	$id=lknGetParamatre($_POST,'cid');



	if (is_array($id)) {

			foreach ($id as $value)

			{



				$_db->query("DELETE FROM #__jobs_cover_letters WHERE id='$value'");

				$_db->setQuery();





			}

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_cover_letters",_lkn_delete_info);

	

}



function list_credit_history()

{

	global $_db;

	$params=array();

	$where=array();



	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));



	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(u.username) LIKE '%$search%'";	

	}

	

	$where[]="c.user_id=u.id";	

	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT c.id";

	$sql.="\n FROM #__jobs_credits AS c,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT c.*,u.username AS username";

	$sql.="\n FROM #__jobs_credits AS c,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	

	HTML_jobs::list_credit_history($rows,$params);

}



function edit_credit_history()

{

	lknImport('calendar');

		

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.user_id='$cid'";	

		$where[]="c.user_id=u.id";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*,u.username AS username";

		$sql.="\n FROM #__jobs_credits AS c,";

		$sql.="\n #__users AS u";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		HTML_jobs::credit_history_form($row);

	}else 

	{

		echo _lkn_error;

	}

}





function update_credit_history()

{

	global $_db;



	$data=lknGetFormValues();

	$id=$data['user_id'];

	$sql=$_db->CreateUpdateSql($data,"#__jobs_credits","user_id='$id'");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=list_credit_history",_lkn_updated);

		

}







function credit_history_full_payment_detail()

{

	$row=lknJobsFunctions::credit_history_full_payment_detail();

	HTML_jobs::credit_history_full_payment_detail($row);

	

}



function add_new_credit()

{

	HTML_jobs::add_new_credit_form();



}



function save_credit(){

	global $_db;

	

	$user_id=lknGetParamatre($_POST,'db_user_id');

	//$resume_count=lknJobsFunctions::getResumeCount($user_id);

	//if ($resume_count==0) {	

		//inserted for history - start

			$data=lknGetFormValues();

			lknJobsFunctions::credit_history_insert($data);

		//inserted for history finished

		

		$credit=lknGetParamatre($_POST,'db_credits');

		

		$select="SELECT user_id FROM #__jobs_credits WHERE user_id='$user_id'";

		$count=lknGetCount($select);

		           	           		

		if ($count=='' || $count==0) {

			//beginner

		    $insert=array();

		    $insert['user_id']=$user_id;

		    $insert['credits']=$credit;

	

		   	$sql=$_db->CreateInsertSql($insert,'#__jobs_credits');

	

			$_db->query($sql);

			$_db->setQuery();	           	

		}else {

		    $sql="UPDATE #__jobs_credits SET credits = ( credits + $credit ) WHERE user_id='$user_id'";

		    $_db->query($sql);

		    $_db->setQuery();

		}

		$msg=_lkn_added;

	//}else {

		//$msg=_lkn_error_member_is_a_job_seeker;	

	//}

	yonledir("index2.php?option=com_jobs&task=list_credit_history",$msg);

}



function list_pending_credits(){

	

	global $_db;

	$params=array();

	$where=array();

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	

	if ($search!='' && isset($search)) {

		$where[]="u.username='$search'";	

	}

	

	$where[]="pc.user_id=u.id";

	

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT pc.id FROM #__jobs_credits_pending AS pc,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);



	

	$sql="SELECT pc.*,u.username FROM #__jobs_credits_pending AS pc,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.="\n ORDER BY pc.inform_date DESC";

	$sql.=$_db->getLimit();

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	

	HTML_jobs::list_pending_credits($rows,$params);

	

}



function edit_pending_credit(){

		global $_lknBaseFramework,$_config,$_db;



		$id=lknGetParamatre($_REQUEST,'cid');

		if (is_array($id)) {

			$id=(int)$id[0];

		}

		

		$where[]="pc.id='$id'";

		$where[] ="pc.user_id=u.id";

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

		$sql="SELECT pc.*,u.username,u.email AS user_email FROM #__jobs_credits_pending AS pc,";

		$sql.="\n #__users AS u";

		$sql.=$where;

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->loadObject();

			

	HTML_jobs::edit_pending_credit($row);

}



function approve_pending_credit(){

	global $_db,$_config;

	$cid=lknGetParamatre($_POST,'cid');

	

	$can_approve=lknGetParamatre($_POST,'can_approve');	

	

	if ($can_approve=='0') {

		yonledir("index2.php?option=com_jobs&task=edit_pending_credit&cid=$cid",_lkn_employer_pending_credit_payment_is_not_sent);

	}elseif ($can_approve=='1'){

		

		//inserted for history - start

			$data=lknGetFormValues();

			lknJobsFunctions::credit_history_insert($data);

		//inserted for history finished



		//kredi tablosuna işleme başladı

		$user_id=lknGetParamatre($_POST,'db_user_id');

		$credit=lknGetParamatre($_POST,'db_credits');

		

		$select="SELECT user_id FROM #__jobs_credits WHERE user_id='$user_id'";

		$count=lknGetCount($select);

		           	           		

		if ($count=='' || $count==0) {

			//beginner

		    $insert=array();

		    $insert['user_id']=$user_id;

		    $insert['credits']=$credit;

	

		   	$sql=$_db->CreateInsertSql($insert,'#__jobs_credits');

	

			$_db->query($sql);

			$_db->setQuery();	           	

		}else {

		    $sql="UPDATE #__jobs_credits SET credits = ( credits + $credit ) WHERE user_id='$user_id'";

		    $_db->query($sql);

		    $_db->setQuery();

		}

		

		//kredi tablosuna işleme başladı

		

		//#__jobs_credits_pending tablosundaki bekleyen kaydını sil

			$sql="DELETE FROM #__jobs_credits_pending WHERE id='$cid'";

			$_db->query($sql);

			$_db->setQuery();

		//#__jobs_credits_pending tablosundaki bekleyen kaydını silme bitti

		    

			//onaylandığına dair mail gönderme başladı

			$inform_user=$_config['credit_system_bank_transfer_inform_user'];

						

			if ($inform_user=='1') {

				//email dosyasını yüklema ebaşladı

					$language=$_config['languageFile'];

					$email_texts=JOOMLA_ROOT;

					$email_texts.=LKN_DS . 'components' . LKN_DS . 'com_jobs' . LKN_DS . 'emails' . LKN_DS;

		

					if (file_exists($email_texts . $language.'.php')) {

						require_once($email_texts . $language.'.php');  // include the email text file

					}else{

						require_once($email_texts . 'english.php');  // include the email text file

					}

				//e-mail dosyasını yükleme bitti.

		

			//e-mail'in gönderileceği yeri bul

				$jconfig=new lknJoomlaConfig();

				$site_email=$jconfig->get('mailfrom');

				$site_name=$jconfig->get('sitename');

				$inform_email=lknGetParamatre($_POST,'user_email');

				

				$domain=$_SERVER['HTTP_HOST'];//google.com

				

				$body=_lkn_employer_bank_payment_credit_approved_text;

				$body=str_replace('{LIVE_SITE}',LIVE_SITE,$body);

				

				//You Credit site Aproved on {DOMAIN}

				$subject=_lkn_employer_bank_payment_credit_approved;

				$subject=str_replace('{DOMAIN}',$domain,$subject);

	           	lknSendMail($site_email,$site_name,$inform_email,$subject,$body);

			}

			//onaylandığına dair mail gönderme bitti

			

			yonledir('index2.php?option=com_jobs&task=list_pending_credits',_lkn_employer_pending_credit_approved);

	}else {

		die("$can_approve is not the correct paramater");

	}

}





function reject_pending_credit(){

	global $_db,$_config;

	$cid=lknGetParamatre($_POST,'cid');

	

		

		//#__jobs_credits_pending tablosundaki bekleyen kaydını sil

			$sql="DELETE FROM #__jobs_credits_pending WHERE id='$cid'";

			$_db->query($sql);

			$_db->setQuery();

		//#__jobs_credits_pending tablosundaki bekleyen kaydını silme bitti

		    

			//onaylandığına dair mail gönderme başladı

			$inform_user=$_config['credit_system_bank_transfer_inform_user'];

						

			if ($inform_user=='1') {

				//email dosyasını yüklema ebaşladı

					$language=$_config['languageFile'];

					$email_texts=JOOMLA_ROOT;

					$email_texts.=LKN_DS . 'components' . LKN_DS . 'com_jobs' . LKN_DS . 'emails' . LKN_DS;

		

					if (file_exists($email_texts . $language.'.php')) {

						require_once($email_texts . $language.'.php');  // include the email text file

					}else{

						require_once($email_texts . 'english.php');  // include the email text file

					}

				//e-mail dosyasını yükleme bitti.

		

			//e-mail'in gönderileceği yeri bul

				$jconfig=new lknJoomlaConfig();

				$site_email=$jconfig->get('mailfrom');

				$site_name=$jconfig->get('sitename');

				$inform_email=lknGetParamatre($_POST,'user_email');

				

				$domain=$_SERVER['HTTP_HOST'];//google.com

				

				$body=_lkn_employer_bank_payment_credit_rejected_text;

				$body=str_replace('{LIVE_SITE}',LIVE_SITE,$body);

				

				//You Credit site Aproved on {DOMAIN}

				$subject=_lkn_employer_bank_payment_credit_rejected;

				$subject=str_replace('{DOMAIN}',$domain,$subject);

	           	lknSendMail($site_email,$site_name,$inform_email,$subject,$body);

			}

			//onaylandığına dair mail gönderme bitti

			

			yonledir('index2.php?option=com_jobs&task=list_pending_credits',_lkn_employer_pending_credit_rejected);



}



function list_status()

{

	global $_db;

	$params=array();

	$where=array();



	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$published=lknGetParamatre($_REQUEST,'published');

	

	if ($published!='' && isset($published)) {

		$where[]="s.published='$published'";	

	}

	

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(s.title) LIKE '%$search%'";	

	}

	

		

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT s.id";

	$sql.="\n FROM #__jobs_status AS s";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT s.*";

	$sql.="\n FROM #__jobs_status AS s";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_status($params);

}



function new_status()

{

	HTML_jobs::status_form();

}





function save_status()

{

	global $_db;



	$data=lknGetFormValues();

	

	$sql=$_db->CreateInsertSql($data,"#__jobs_status");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=list_status",_lkn_added);

		

}



function save_and_new_status(){

	global $_db;



	$data=lknGetFormValues();

	

	$sql=$_db->CreateInsertSql($data,"#__jobs_status");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=new_status",_lkn_added);	

}



function save_as_new_status(){

	global $_db;

	$data=lknGetFormValues();

	

	$sql=$_db->CreateInsertSql($data,"#__jobs_status");

	$_db->query($sql);

	$_db->setQuery();

	$id=$_db->get_insert_id();

	

	yonledir("index2.php?option=com_jobs&task=edit_status&cid=$id&hidemainmenu=1",_lkn_added);

}



function apply_status(){

	global $_db;

	

	$data=lknGetFormValues();

			

	$id = lknGetParamatre ($_REQUEST,'cid' );

	if ($id=='') {			

			$sql=$_db->CreateInsertSql($data,"#__jobs_status");

			$_db->query($sql);

			$_db->setQuery();

			$id=$_db->get_insert_id();

			$msg=_lkn_added;



	}else {

			$sql=$_db->CreateUpdateSql($data,"#__jobs_status","id='$id'");

			$_db->query($sql);

			$_db->setQuery();

			$msg=_lkn_updated;

		

	}

	yonledir ( "index2.php?option=com_jobs&task=edit_status&cid=$id&hidemainmenu=1", $msg );

}





function update_status()

{

	global $_db;

	//$data=array();

	$id=(int)lknGetParamatre($_POST,'cid');

	$data=lknGetFormValues();	

	

	$sql=$_db->CreateUpdateSql($data,"#__jobs_status","id='$id'");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=list_status",_lkn_updated);

		

}





function edit_status()

{

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_status AS c";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		HTML_jobs::status_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function publish_status()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_status SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_status SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_status",_lkn_updated);

	

}



function unpublish_status()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_status SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_status SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_status",_lkn_updated);

	

}



function delete_status()

{

	global $_db,$_config;

	$default_status=$_config['default_status'];

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$sql="SELECT id FROM #__jobs_applications WHERE status='$value'";

				$hasApplication=lknGetCount($sql);

				//default durum olabilirmi onu kontrol et

				if ($hasApplication==0 AND $value!=$default_status) {

					$_db->query("DELETE FROM #__jobs_status WHERE id='$value'");

					$_db->setQuery();					

				

				}else 

				{

					$msg[]=$value;

				}

			}

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}		

	

	yonledir("index2.php?option=com_jobs&task=list_status",$msg);

	

}



function list_workers()

{

	global $_db;

	$params=array();

	$where=array();

	

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	

	

	if ($search!='' && isset($search)) {

		$where[]="u.username='$search'";	

	}



	$where[]="r.memberid=u.id";

			

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT u.id";

	$sql.="\n FROM #__jobs_resumes AS r,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.="\n GROUP BY u.id";

	

	$count=lknGetCount($sql);

	

	$sql="SELECT COUNT(r.id) AS resume_count,u.*";

	$sql.="\n FROM #__jobs_resumes AS r,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.="\n GROUP BY u.id";

	$sql.=$_db->getLimit();

	

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

	HTML_jobs::list_workers($rows,$count);

}



function list_resumes()

{

	global $_db;

	$params=array();

	$where=array();

	

	$published=lknGetParamatre($_REQUEST,'published');

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$memberid=lknGetParamatre($_REQUEST,'memberid');

	

	if ($published!='' && isset($published)) {

		$where[]="r.published='$published'";	

	}

	

	if ($memberid!='' && isset($memberid)) {

		$where[]="r.memberid='$memberid'";	

	}

	

	if (($search!='' && isset($search))) {

		$where[]="( LOWER(r.title) LIKE '%$search%' or cedula = '$search' or LOWER(r.name) like '%$search%')";	


	}



	$where[]="r.memberid=u.id";

			

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

 

	$sql="SELECT r.id";

	$sql.="\n FROM #__jobs_resumes AS r,";

	$sql.="\n #__users AS u";

	$sql.=$where;
 

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT r.*,u.username AS username";

	$sql.="\n FROM #__jobs_resumes AS r,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList(); 

	HTML_jobs::list_resumes($rows,$params);

}





function new_resume()

{

	lknImport('calendar');

		//resume field kategorileri alınmaya başladı

			$cats=lknJobsFields::getFieldCategories();

			$parent_id_array=lknJobsFields::getParentIdArray($cats);

		//resume field kategorileri alınması bitti

		//resume fieldları alınmaya başladı

			$row_fields=lknJobsFields::getResumeFields();

		//resume fieldları alınması bitti

		

	HTML_jobs::resume_form('',$cats,$row_fields,$parent_id_array);

}



function apply_resume()

{

	$id=lknGetParamatre($_POST,'cid');

	global $_db;
	//Oskar
	$db_civil = $_POST['db_civil'];
	$db_text_resume_discapacidad = $_POST['db_text_resume_discapacidad'];
	//Actualizar nuevos datos del usuario
	//<2011-03-17>

	$sqlUpdate="UPDATE #__jobs_resumes SET civil = '$db_civil', discapacidad = '$db_text_resume_discapacidad' WHERE id=".$id;
	$_db->query($sqlUpdate);
	$_db->setQuery();
	if ($id=='') {

		//yani ilk defa milli oluyosa

		$msg=lknJobsFunctions::save_resume();
	

		$id=$msg['id'];

		$msg=$msg['msg'];
		
		//obtener la img de la bd
    	
		$query="select image from #__jobs_resumes  WHERE id=".$id;
		$_db->query($query);
    	$_db->setQuery();
		$rows=$_db->loadObjectList();

		//imagen de la base de datos
		$imgDB = $rows[0]->image;
		
		$dir = getcwd()."/images/stories/jobs/cv_images/";
		
		$thubmnailC = $dir.$imgDB;
		strtolower($thubmnailC);
		
		//Verificar tipo de extension del archivo
		
		$extension = explode(".",$thubmnailC);
		$ext = count($extension)-1; 
		
		if ($extension[$ext]=="jpg")
		{
			$original = imagecreatefromjpeg($thubmnailC);
		}
		if ($extension[$ext]=="png")
		{
			$original = imagecreatefrompng($thubmnailC);
		}
		if ($extension[$ext]=="gif")
		{
			$original = imagecreatefromgif($thubmnailC);
		}
		
		//Crear thumbnail
		//cargar imagen a redimensionar
		
		
		//Convertir imagen thumbnail
		$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
		$ancho = imagesx($original);
		$alto = imagesy($original);
		imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

		$nuevaimg = "thumb_".$imgDB;
		//Lugar de almacenamiento
		if ($extension[$ext]=="jpg")
		{
			imagejpeg($thumb, $dir.$nuevaimg, 90);
		}
		if ($extension[$ext]=="png")
		{
			imagepng($thumb, $dir.$nuevaimg);
		}
		if ($extension[$ext]=="gif")
		{
			imagegif($thumb, $dir.$nuevaimg);
		}
		
		//Actualizamos la nueva img en la base de datos
	
		$sql="UPDATE #__jobs_resumes SET thumb_img_r = '$nuevaimg' WHERE id=".$id;
		$_db->query($sql);
    	$_db->setQuery();

		yonledir("index2.php?option=com_jobs&task=edit_resume&cid=$id",$msg);

	}else 

	{

		$msg=lknJobsFunctions::update_resume($id);	

		yonledir("index2.php?option=com_jobs&task=edit_resume&cid=$id",$msg);		

	}

	

}



function save_resume()

{

	global $_db;
	$msg=lknJobsFunctions::save_resume();
	$id=$msg['id'];	
	//Oskar
	$db_civil = $_POST['db_civil'];
	$db_text_resume_discapacidad = $_POST['db_text_resume_discapacidad'];
	//Actualizar nuevos datos del usuario
	//<2011-03-17>

	$sqlUpdate="UPDATE #__jobs_resumes SET civil = '$db_civil', discapacidad = '$db_text_resume_discapacidad' WHERE id=".$id;
	$_db->query($sqlUpdate);
	$_db->setQuery();
	//obtener la img de la bd
    	
		$query="select image from #__jobs_resumes  WHERE id=".$id;
		$_db->query($query);
    	$_db->setQuery();
		$rows=$_db->loadObjectList();

		//imagen de la base de datos
		$imgDB = $rows[0]->image;
		$imgDB = strtolower($imgDB);
		$dir = getcwd()."/images/stories/jobs/cv_images/";
		
		$thubmnailC = $dir.$imgDB;

		
		//Verificar tipo de extension del archivo
		
		$extension = explode(".",$thubmnailC);
		$ext = count($extension)-1; 
		
		if ($extension[$ext]=="jpg")
		{
			$original = imagecreatefromjpeg($thubmnailC);
		}
		if ($extension[$ext]=="png")
		{
			$original = imagecreatefrompng($thubmnailC);
		}
		if ($extension[$ext]=="gif")
		{
			$original = imagecreatefromgif($thubmnailC);
		}
		
		//Crear thumbnail
		//cargar imagen a redimensionar
		
		
		//Convertir imagen thumbnail
		$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
		$ancho = imagesx($original);
		$alto = imagesy($original);
		imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

		$nuevaimg = "thumb_".$imgDB;
		//Lugar de almacenamiento
		if ($extension[$ext]=="jpg")
		{
			imagejpeg($thumb, $dir.$nuevaimg, 90);
		}
		if ($extension[$ext]=="png")
		{
			imagepng($thumb, $dir.$nuevaimg);
		}
		if ($extension[$ext]=="gif")
		{
			imagegif($thumb, $dir.$nuevaimg);
		}
	
		$sql="UPDATE #__jobs_resumes SET thumb_img_r = '$nuevaimg' WHERE id=".$id;
		$_db->query($sql);
    	$_db->setQuery();
	
//	lknJobsFunctions::save_banned_companies($msg['inserted_id']);
	yonledir("index2.php?option=com_jobs&task=list_resumes",$msg['msg']);

		

}



function save_and_new_resume()
{
	global $_db;
	$msg=lknJobsFunctions::save_resume();	
	$id=$msg['id'];	
	//Oskar
	$db_civil = $_POST['db_civil'];
	$db_text_resume_discapacidad = $_POST['db_text_resume_discapacidad'];
	//Actualizar nuevos datos del usuario
	//<2011-03-17>

	$sqlUpdate="UPDATE #__jobs_resumes SET civil = '$db_civil', discapacidad = '$db_text_resume_discapacidad' WHERE id=".$id;
	$_db->query($sqlUpdate);
	$_db->setQuery();
	
	//obtener la img de la bd
    	
		$query="select image from #__jobs_resumes  WHERE id=".$id;
		$_db->query($query);
    	$_db->setQuery();
		$rows=$_db->loadObjectList();

		//imagen de la base de datos
		$imgDB = $rows[0]->image;
		$imgDB = strtolower($imgDB);
		$dir = getcwd()."/images/stories/jobs/cv_images/";
		
		$thubmnailC = $dir.$imgDB;
		
		//Verificar tipo de extension del archivo
		
		$extension = explode(".",$thubmnailC);
		$ext = count($extension)-1; 
		
		if ($extension[$ext]=="jpg")
		{
			$original = imagecreatefromjpeg($thubmnailC);
		}
		if ($extension[$ext]=="png")
		{
			$original = imagecreatefrompng($thubmnailC);
		}
		if ($extension[$ext]=="gif")
		{
			$original = imagecreatefromgif($thubmnailC);
		}
		
		//Crear thumbnail
		//cargar imagen a redimensionar
		
		
		//Convertir imagen thumbnail
		$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
		$ancho = imagesx($original);
		$alto = imagesy($original);
		imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

		$nuevaimg = "thumb_".$imgDB;
		//Lugar de almacenamiento
		if ($extension[$ext]=="jpg")
		{
			imagejpeg($thumb, $dir.$nuevaimg, 90);
		}
		if ($extension[$ext]=="png")
		{
			imagepng($thumb, $dir.$nuevaimg);
		}
		if ($extension[$ext]=="gif")
		{
			imagegif($thumb, $dir.$nuevaimg);
		}
	
		$sql="UPDATE #__jobs_resumes SET thumb_img_r = '$nuevaimg' WHERE id=".$id;
		$_db->query($sql);
    	$_db->setQuery();
		
		
	yonledir("index2.php?option=com_jobs&task=new_resume",$msg['msg']);	
}



function save_as_new_resume(){
	global $_db;
	$msg=lknJobsFunctions::save_resume();

	$id=$msg['id'];	
	//Oskar
	$db_civil = $_POST['db_civil'];
	$db_text_resume_discapacidad = $_POST['db_text_resume_discapacidad'];
	//Actualizar nuevos datos del usuario
	//<2011-03-17>

	$sqlUpdate="UPDATE #__jobs_resumes SET civil = '$db_civil', discapacidad = '$db_text_resume_discapacidad' WHERE id=".$id;
	$_db->query($sqlUpdate);
	$_db->setQuery();
	
	//obtener la img de la bd
    	
		$query="select image from #__jobs_resumes  WHERE id=".$id;
		$_db->query($query);
    	$_db->setQuery();
		$rows=$_db->loadObjectList();

		//imagen de la base de datos
		$imgDB = $rows[0]->image;
		$imgDB = strtolower($imgDB);
		$dir = getcwd()."/images/stories/jobs/cv_images/";
		
		$thubmnailC = $dir.$imgDB;
		
		//Verificar tipo de extension del archivo
		
		$extension = explode(".",$thubmnailC);
		$ext = count($extension)-1; 
		
		if ($extension[$ext]=="jpg")
		{
			$original = imagecreatefromjpeg($thubmnailC);
		}
		if ($extension[$ext]=="png")
		{
			$original = imagecreatefrompng($thubmnailC);
		}
		if ($extension[$ext]=="gif")
		{
			$original = imagecreatefromgif($thubmnailC);
		}
		
		//Crear thumbnail
		//cargar imagen a redimensionar
		
		
		//Convertir imagen thumbnail
		$thumb = imagecreatetruecolor(60,60); // Lo haremos de un tamaño 60x50
		$ancho = imagesx($original);
		$alto = imagesy($original);
		imagecopyresampled($thumb,$original,0,0,0,0,60,60,$ancho,$alto);

		$nuevaimg = "thumb_".$imgDB;
		//Lugar de almacenamiento
		if ($extension[$ext]=="jpg")
		{
			imagejpeg($thumb, $dir.$nuevaimg, 90);
		}
		if ($extension[$ext]=="png")
		{
			imagepng($thumb, $dir.$nuevaimg);
		}
		if ($extension[$ext]=="gif")
		{
			imagegif($thumb, $dir.$nuevaimg);
		}
	
		$sql="UPDATE #__jobs_resumes SET thumb_img_r = '$nuevaimg' WHERE id=".$id;
		$_db->query($sql);
    	$_db->setQuery();

	yonledir("index2.php?option=com_jobs&task=edit_resume&cid=$id&hidemainmenu=1",$msg['msg']);	

}





function update_resume()

{
	global $_db;

	$id=lknGetParamatre($_POST,'cid');

	$msg=lknJobsFunctions::update_resume($id);

	
		//Oskar
	$db_civil = $_POST['db_civil'];
	$db_text_resume_discapacidad = $_POST['db_text_resume_discapacidad'];
	//Actualizar nuevos datos del usuario
	//<2011-03-17>

	$sqlUpdate="UPDATE #__jobs_resumes SET civil = '$db_civil', discapacidad = '$db_text_resume_discapacidad' WHERE id=".$id;
	$_db->query($sqlUpdate);
	$_db->setQuery();
	
	yonledir("index2.php?option=com_jobs&task=list_resumes",$msg);

		

}





function edit_resume()

{

	lknImport('calendar');

	global $_db;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		//eskisi başladı

			$where[]="c.id='$cid'";	

			

			$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

			

			$sql="SELECT c.*";

			$sql.="\n FROM #__jobs_resumes AS c";

			$sql.=$where;

			

			$_db->query($sql);

			$_db->setQuery();

			$row=$_db->getFistRecord();

		//eskisi bitti

		

		//resume field kategorileri alınmaya başladı

			$cats=lknJobsFields::getFieldCategories();

			$parent_id_array=lknJobsFields::getParentIdArray($cats);

		//resume field kategorileri alınması bitti

		//resume fieldları alınmaya başladı

			$row_fields=lknJobsFields::getResumeFields();

		//resume fieldları alınması bitti			

		HTML_jobs::resume_form($row,$cats,$row_fields,$parent_id_array);

		

	}else 

	{

		echo _lkn_error;

	}

}



function publish_resume()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_resumes SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_resumes SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_resumes",_lkn_updated);

	

}



function unpublish_resume()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_resumes SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_resumes SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_resumes",_lkn_updated);

	

}



function delete_resume()

{

	global $_db,$_config;

	$id=lknGetParamatre($_POST,'cid');

	$msg=array();

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$resume_data=lknDb::loadTable("SELECT * FROM #__jobs_resumes WHERE id='$value'");

				

				

				$prevent_to_delete_last=$_config['worker_prevent_to_delete_last_resume'];

				if ($prevent_to_delete_last=='1') {

					$resume_count=lknJobsFunctions::getResumeCount($resume_data->memberid);

				}else {

					$resume_count='2';//1'den büyük bir rakam girdim

				}

				

				if ($resume_count>1) {

					$sql="SELECT id FROM #__jobs_applications WHERE resume_id='$value'";

					$hasApplications=lknGetCount($sql);

					

					if ($hasApplications==0) {

						$image=$resume_data->image;				

						if ($image!=''){

							$upload_folder=JOOMLA_ROOT;

							$upload_folder=str_replace('/',LKN_DS,$upload_folder . $_config['resume_image_folder']);

							unlink($upload_folder. $image);

						}

						

						$_db->query("DELETE FROM #__jobs_resumes WHERE id='$value'");

						$_db->setQuery();

						

						$_db->query("DELETE FROM #__jobs_resume_files2resumes WHERE resume_id='$value'");

						$_db->setQuery();

												

					}else 

					{

						$msg[]=$value;

					}

				}else {

					$msg[]=$value;

				}

			}

	}

	

	if (count( $msg ) > 0) {

		$msg=str_replace('{ID}',implode( ' and ', $msg ),_lkn_delete_problem);

	}else {

		$msg=_lkn_delete_info;

	}		

	

	yonledir("index2.php?option=com_jobs&task=list_resumes",$msg);

	

}



function list_email_templates()

{

	global $_db;

	$params=array();

	$where=array();

	

	$published=lknGetParamatre($_REQUEST,'published');

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$memberid=lknGetParamatre($_REQUEST,'memberid');

	
	if ($published!='' && isset($published)) {

		$where[]="e.published='$published'";	

	}

	

	if (($search!='' && isset($search))) {

		$where[]="LOWER(e.title) LIKE '%$search%'";	

	}

	

	if (($memberid!='' && isset($memberid))) {

		$where[]="e.memberid='$memberid'";	

	}



	$where[]="e.memberid=u.id";

			

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT e.id";

	$sql.="\n FROM #__jobs_email_templates AS e,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT e.*,u.username AS username";

	$sql.="\n FROM #__jobs_email_templates AS e,";

	$sql.="\n #__users AS u";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_email_templates($params);

}



function new_email_template()

{

	HTML_jobs::email_template_form();

}





function save_email_template()

{

	$msg=lknJobsFunctions::save_email_template();

	

	yonledir("index2.php?option=com_jobs&task=list_email_templates",$msg);

		

}



function edit_email_template()

{



	global $_db;

	$cid=lknGetParamatre($_POST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}else 

	{

		$cid=(int)$cid;

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="c.id='$cid'";	

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT c.*";

		$sql.="\n FROM #__jobs_email_templates AS c";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		

//		print_r($row);

		HTML_jobs::email_template_form($row);

	}else 

	{

		echo _lkn_error;

	}

}



function update_email_template()

{

	$msg=lknJobsFunctions::update_email_template();

	

	yonledir("index2.php?option=com_jobs&task=list_email_templates",$msg);

		

}



function publish_email_template()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_email_templates SET published='1' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_email_templates SET published='1' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_email_templates",_lkn_updated);

	

}



function unpublish_email_template()

{

	global $_db;

	$id=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("UPDATE #__jobs_email_templates SET published='0' WHERE id='$value'");

				$_db->setQuery();

			}

	}else 

	{

		$id=(int)$id;

		$_db->query("UPDATE #__jobs_email_templates SET published='0' WHERE id='$id'");

		$_db->setQuery();

	}

	

	

	yonledir("index2.php?option=com_jobs&task=list_email_templates",_lkn_updated);

	

}



function delete_email_template()

{

	global $_db,$_config;

	$id=lknGetParamatre($_POST,'cid');

	$msg='';

	if (is_array($id)) {

			foreach ($id as $value)

			{

				$_db->query("DELETE FROM #__jobs_email_templates WHERE id='$value'");

				$_db->setQuery();					

				

			}

	}

	

	$msg 		= _lkn_delete_info ;

	

	

	yonledir("index2.php?option=com_jobs&task=list_email_templates",$msg);

	

}



function list_applications()

{

	global $_db;

	$params=array();

	$where=array();

	

	$cat_id=intval(lknGetParamatre($_REQUEST,'cat_id'));

	$company_id=lknGetParamatre($_REQUEST,'company_id');

	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	$status=lknGetParamatre($_REQUEST,'status');

	

	if ($cat_id!='' && isset($cat_id)) {

		$where[]="j.cat_id='$cat_id'";	

	}

	

	if ($company_id!='' && isset($company_id)) {

		$where[]="j.company_id='$company_id'";	

	}

	

	if (($search!='' && isset($search))) {

		$where[]="(r.memberid='$search')";

	}



	if ($status!='' && isset($status)) {

		$where[]="a.status='$status'";	

	}

	

	$where[]="a.job_id=j.id";

	$where[]="a.resume_id=r.id";

	$where[]="r.memberid=u.id";

	$where[]="a.status=s.id";

	$where[]="j.cat_id=c.id";

	$where[]="j.company_id=company.id";

	

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	

	$sql="SELECT a.id";

	$sql.="\n FROM #__jobs_applications AS a,";

	$sql.="\n #__jobs_resumes AS r,";

	$sql.="\n #__jobs_status AS s,";

	$sql.="\n #__jobs_categories AS c,";

	$sql.="\n #__jobs_companies AS company,";

	$sql.="\n #__users AS u,";

	$sql.="\n #__jobs_jobs AS j";

	$sql.=$where;

//	echo $sql;

	$params['count']=lknGetCount($sql);

	

	$sql="SELECT a.*,r.name AS resume_name, r.title AS resume_title,j.title AS job_title,company.title AS company_title,";

	$sql.="c.title AS category_name,s.title AS status_name,u.username AS username";

	$sql.="\n FROM #__jobs_applications AS a,";

	$sql.="\n #__jobs_resumes AS r,";

	$sql.="\n #__jobs_status AS s,";

	$sql.="\n #__jobs_categories AS c,";

	$sql.="\n #__jobs_companies AS company,";

	$sql.="\n #__users AS u,";

	$sql.="\n #__jobs_jobs AS j";

	$sql.=$where;

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	

	HTML_jobs::list_applications($params);

}





function edit_application()

{

	global $_db,$_config;

	$cid=lknGetParamatre($_REQUEST,'cid');

	

	if (is_array($cid)) {

		$cid=(int)$cid[0];

	}

	

	if ($cid!='' && isset($cid)) {

		$where[]="a.job_id=j.id";

		$where[]="a.resume_id=r.id";

		$where[]="a.status=s.id";

		$where[]="j.cat_id=c.id";

		$where[]="j.company_id=company.id";

		$where[]="j.country=country.id";

		$where[]="r.memberid=u.id";

		$where[]="a.id='$cid'";

		

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		

		$sql="SELECT a.*,r.*,a.id AS application_id,j.title AS job_title,company.title AS company_title,company.contactemail as contactemail,";

		$sql.="c.title AS category_name,s.title AS status_name,u.username AS username,company.memberid AS company_owner_id,company.id AS company_id,";

		$sql.="j.reference AS reference,j.number_of_jobs AS number_of_jobs,j.job_type as job_job_type,";

		$sql.="country.title AS country_name,j.qualifications AS qualifications,j.city AS job_city,j.state AS job_state,";

		$sql.="j.experience AS job_experience,j.degree AS degree,j.salary AS salary,j.publish_up AS publish_up,";

		$sql.="j.created AS job_created, j.publish_down AS publish_down,a.update_date AS application_update";

		$sql.="\n FROM #__jobs_applications AS a,";

		$sql.="\n #__jobs_resumes AS r,";

		$sql.="\n #__jobs_status AS s,";

		$sql.="\n #__jobs_categories AS c,";

		$sql.="\n #__jobs_countries AS country,";

		$sql.="\n #__users AS u,";

		$sql.="\n #__jobs_companies AS company,";

		$sql.="\n #__jobs_jobs AS j";

		$sql.=$where;

		

		$_db->query($sql);

		$_db->setQuery();

		$row=$_db->getFistRecord();

		

		

		$row_app_history=lknJobsFunctions::getPerviousApplications($row->company_id,$row->memberid,$cid);



		lknJobsFunctions::increaseResumeHit($row->id);//resume hitini bir artır

			

			$template=lknRegistry::get('lknjobstemplate');//tema için başladık

			$tmpl=new lknTemplate($template);

			

			//resume file kontrolü başladı

				$files_active=$_config['files_active'];

				if ($files_active=='1') {

					$row_files=lknJobsFunctions::getResumeFilesObject($row->id);

					$file_count=count($row_files);



				}else {

					$file_count='0';

				}

			//resume file kontrolü bitti

		

			

			//resume field kategorileri alınmaya başladı

				$cats=lknJobsFields::getFieldCategories();

				$parent_id_array=lknJobsFields::getParentIdArray($cats);

			//resume field kategorileri alınması bitti

			//resume fieldları alınmaya başladı

				$row_fields=lknJobsFields::getResumeFields();

			//resume fieldları alınması bitti

			

			$field_values=lknJobsFields::getFieldsValueArray($row_fields,$row,$row_files,$file_count,'1');

			$value=lknJobsFields::getViewResume($cats,$field_values,$parent_id_array);

			

			$tmpl->set('top','');

			$tmpl->set('footer','');

			$tmpl->set('value',$value);

			

			

			$resume_text=$tmpl->fetch('view.resume.php');

			

		HTML_jobs::application_form($row,$row_files,$row_app_history,$resume_text);

	}else 

	{

		echo _lkn_error;

	}

}



function update_application()

{

	lknJobsFunctions::update_application();	

	yonledir("index2.php?option=com_jobs&task=list_applications",_lkn_updated);

	

}



function apply_application()

{

	global $_db;

	//$data=array();

	$id=(int)lknGetParamatre($_POST,'cid');



	

	$data=lknGetFormValues();

		

	$date=new lknDate();

	$data['update_date']=$date->getDate();

	

	$sql=$_db->CreateUpdateSql($data,"#__jobs_applications","id='$id'");

	$_db->query($sql);

	$_db->setQuery();

	

	yonledir("index2.php?option=com_jobs&task=edit_application&cid=$id",_lkn_updated);

		

}



function send_mail_to_applicant()

{

	$application=(int)lknGetParamatre($_POST,'cid');

	$msg=lknJobsFunctions::send_mail_to_applicant();	

	yonledir("index2.php?option=com_jobs&task=edit_application&cid=$application",$msg);

}





function delete_application()

{

	global $_db,$_config;

	$id=lknGetParamatre($_POST,'cid');



	if (is_array($id)) {

			foreach ($id as $value)

			{		

					

					$_db->query("DELETE FROM #__jobs_email_history WHERE application='$value'");

					$_db->setQuery();

					$_db->query("DELETE FROM #__jobs_applications WHERE id='$value'");

					$_db->setQuery();					

			

			}

	}

	

	$msg 		= _lkn_delete_info;

	

	

	

	yonledir("index2.php?option=com_jobs&task=list_applications",$msg);

	

}



function show_config()

{

	global $_db;

		$_db->query("SELECT id FROM #__menu WHERE link = 'index.php?option=com_jobs' AND published=1");

		$_db->setQuery();

		$Itemid = $_db->fetch_array();

		$Itemid=$Itemid['id'];

			

	HTML_jobs::configuration_form($Itemid);

}



function save_config()

{

	global $_lknBaseFramework,$_db,$_config;

	

	$sql="INSERT INTO #__jobs_config (`name`, `value`) VALUES ";

	$sql2='';

	foreach ($_POST as $key=>$val)

	{

		if (strstr($key,'config_')) {

			$name=lknText::cleanFirst($key,'config_');

			$val=lknAmpReplace(str_replace("'",'"',$val));// bu satırda ' -> " değişimi yap

			$sql2.=",('$name', '$val')";

		}

	}

	

	$sql2=lknText::cleanFirst($sql2,',');

	$sql.=$sql2;

	$_db->query("DELETE FROM #__jobs_config");

	$_db->setQuery();

	

	$_db->query($sql);

	$_db->setQuery();

	

	$msg="Configuration file is saved";



	yonledir("index2.php?option=com_jobs&task=show_config", $msg );

}





function license()

{

	global $_lknBaseFramework;

	$adminFolder=$_lknBaseFramework->lknGetPath('root') .'/administrator/components/com_jobs/';

	$text=lknFiles::readTextFile('license.html',$adminFolder);

	HTML_jobs::license($text);

}



function preview(){

	$object=lknGetParamatre($_GET,'object');

	if ($object=='preview_resume') {

		lknJobsFunctions::view_resume();

	}elseif ($object=='print_resume'){

		lknJobsFunctions::print_resume();

	}

	

}



function credits()

{

	HTML_jobs::credits();

}



function support(){

	HTML_jobs::support();

}



function print_resume(){

	lknJobsFunctions::print_resume();

}



function resume_search_form(){

	lknJobsFunctions::employer_resume_search_form(0,0);

	//do not delete this form

	//required for toolbar

	?>

	<form action="index2.php" method="POST" name="adminForm">

		<input type="hidden" name="option" value="com_jobs">

		<input type="hidden" name="task" value="">

	</form>

	

	<?php 

}



function search_resume()

{

	//required for toolbar. DO NOT DELETE

	?>

	<form action="index2.php" method="POST" name="adminForm">

		<input type="hidden" name="option" value="com_jobs">

		<input type="hidden" name="task" value="">

	</form>

	<?php 

	

	

	global $_db,$_lknBaseFramework;



	$Itemid=lknJobsItemId();

	$user=new lknUser();

	$user_id=$user->getUserID();

	

	$detailed_results=lknGetParamatre($_GET,'detailed_results',0);

	$link_search="index2.php?option=com_jobs&task=search_resume";

	$link_search.="&user_id=$user_id";

	

	$searchParams=lknJobsFields::searchParams($link_search);

	

	$where=$searchParams['where'];

	$link_search=$searchParams['link_search'];

	$hasValue=$searchParams['hasValue'];

	

	

	

	if ($hasValue==0) {

		//kullanıcı arama için hiçbir değer girmemiş.

		echo '<h1>' . _lkn_error_no_input_for_resume_search . '</h1><br />';

		echo "<a href=\"" . lknSef::url("index2.php?option=com_jobs&task=resume_search_form") . "\">". _lkn_search_resume_new. "</a>";

		return ;

	}

	

	

	$where[]="r.published='1'";



	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );



	$sql="SELECT r.id";

	$sql.="\n FROM #__jobs_resumes AS r";

	$sql.=$where;

//	exit($sql);

	$count=lknGetCount($sql);



	

	if ($count==0) {

		echo _lkn_error_search_resume_no_result.'<br />';

		echo "<a href=\"" . lknSef::url("index2.php?option=com_jobs&task=resume_search_form" . $Itemid) . "\">". _lkn_search_resume_new. "</a>";

		return ;

	}

	

	$sql="SELECT r.*";

	$sql.="\n FROM #__jobs_resumes AS r";

	$sql.=$where;

	$sql.="\n ORDER BY r.update_date DESC";

	$sql.=$_db->getLimit();

//	echo $sql;

	$_db->query($sql);

	$_db->setQuery();

	$rows=$_db->loadObjectList();

//	print_r($rows);



		//resume count message başladı

		$limit_start=$_db->get('limit_start');

		$limit_end=$_db->get('limit_end');

		if ($limit_end>$count) {

			$limit_end=$count;

		}

		//Search Results ({START} to {END} from {TOTAL})

		$resume_count_message=_lkn_search_count_display;

		$resume_count_message=str_replace('{START}',$limit_start,$resume_count_message);

		$resume_count_message=str_replace('{END}',$limit_end,$resume_count_message);

		$resume_count_message=str_replace('{TOTAL}',$count,$resume_count_message);

	//resume count message bitti

	

	//detay/özet göster linkleri başladı

		$detail="$link_search&detailed_results=1";

		$detail=lknSef::url($detail);



		$brief="$link_search&detailed_results=0";

		$brief=lknSef::url($brief);

		if ($detailed_results==1) {

			//detail linksiz

			$detail_link=_lkn_search_detail;

			$brief_link="<a href=\"$brief\">" . _lkn_search_brief. "</a>";



		}else

		{

			$detail_link="<a href=\"$detail\">" . _lkn_search_detail. "</a>";

			$brief_link=_lkn_search_brief;



		}

	//detay/özet göster linkleri

	

		//sayfalama linkleri başladı

			$paging_links="$link_search&detailed_results=$detailed_results";

			$paging_links=new lknSayfalama($paging_links,$count);

			$paging_links=$paging_links->sayfaLinkiYaz();

		//sayfalama linkleri bitti

		

	//yeni arama linki başladı

		$new_search_link='index2.php?option=com_jobs&task=resume_search_form';

		$new_search_link="<a href=\"$new_search_link\">" . _lkn_search_resume_new . "</a>";

	//yeni arama linki bitti



	HTML_jobs::resume_search_results($rows,$count,$paging_links,$detail_link,$brief_link,$detailed_results,$new_search_link,$resume_count_message);



}



?>