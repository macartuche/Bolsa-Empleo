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

include_once('components/com_jobs/libs/common.php');


//@todo: tüm fonskiyon isimlerinin başında "lkn" olduğundan emin ol
global $option,$_lknBaseFramework,$_config,$_db,$task;


$task=lknGetParamatre($_REQUEST,'task');

//dil dosyasını eklemeye başladım
	if (lknFiles::file_exists(JOOMLA_ROOT .LKN_DS.'components'.LKN_DS.'com_jobs'.LKN_DS.'language'.LKN_DS . $_config['languageFile'] . ".php")) {
		require_once(JOOMLA_ROOT .LKN_DS.'components'.LKN_DS.'com_jobs'.LKN_DS.'language'.LKN_DS . $_config['languageFile'] . ".php");
	}else{
		require_once(JOOMLA_ROOT .LKN_DS.'components'.LKN_DS.'com_jobs'.LKN_DS.'language'.LKN_DS.'english.php');
	}
//dil dosyasını eklemeyi bitirdim
	
//tema ile ilgili işler başladı
$template=$_config['lknjobstemplate'];
if ($template=='')
{
	$template='default';
}

lknRegistry::add('lknjobstemplate',$template);

$template_url=LIVE_SITE . "/components/com_jobs/templates/$template/";

define('TEMPLATE_ROOT',$template_url);
define('TEMPLATE_IMAGE_PATH',TEMPLATE_ROOT . "images/");

$css=JOOMLA_ROOT .LKN_DS.'components'.LKN_DS.'com_jobs'.LKN_DS.'templates'.LKN_DS.$template.LKN_DS;
if (file_exists($css)) {
	$css=TEMPLATE_ROOT. "$template.css";
	$_lknBaseFramework->addCss($css);
}else {
	$css=LIVE_SITE . "/components/com_jobs/templates/default/default.css";
	$_lknBaseFramework->addCss($css);
}
//tema ile ilgili işler bitti


//print_r($_REQUEST);
//die();
//if you want to use it as a function;

if ($task!='rss') {
	lknJobsFunctions::detectUser();
	//htmlFrontJobs::toolbar();
}

force_check();

switch( $task ) {
	case 'force':
		force();
		break;
		
	case 'list_all_jobs':
		list_all_jobs();
		break;
	case 'detail_category':
		detail_category();
		break;
	case 'detail_job':
		detail_job();
		break;
	case 'print_job':
		print_job();
		break;

	case 'apply_job'://gerekli formu göster
		apply_job();
		break;
	case 'apply_job_'://eğer herşey doğruysa başvuruyu kabul et
		apply_job_();
		break;

	case 'detail_company':
		detail_company();
		break;

	case 'worker':
		worker();
		break;
	case 'edit_resume':
		edit_resume();
		break;
	case 'update_resume':
		update_resume();
		break;
	case 'quick_resume':
		quick_resume();
		break;
	case 'new_resume':
		new_resume();
		break;
	case 'save_resume':
		save_resume();
		break;
	case 'save_resume_quick':
		save_resume_quick();
		break;
	case 'apply_resume':
		apply_resume();
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

	case 'list_worker_files':
		list_worker_files();
		break;
	case 'new_worker_file':
		new_worker_file();
		break;
	case 'apply_worker_file':
		apply_worker_file();
		break;
	case 'save_worker_file':
		save_worker_file();
		break;
	case 'edit_worker_file':
		edit_worker_file();
		break;
	case 'update_worker_file':
		update_worker_file();
		break;
	case 'send_resume_file':
		send_resume_file();
		break;
	case 'list_worker_cover_letters':
		list_worker_cover_letters();
		break;
	case 'new_worker_cover_letter':
		new_worker_cover_letter();
		break;
	case 'edit_worker_cover_letter':
		edit_worker_cover_letter();
		break;
	case 'save_worker_cover_letter':
		save_worker_cover_letter();
		break;
	case 'update_worker_cover_letter':
		update_worker_cover_letter();
		break;
	case 'publish_worker_cover_letter':
		publish_worker_cover_letter();
		break;
	case 'unpublish_worker_cover_letter':
		unpublish_worker_cover_letter();
		break;
	case 'delete_worker_cover_letter':
		delete_worker_cover_letter();
		break;

	case 'list_worker_applications':
		list_worker_applications();
		break;
	case 'edit_worker_application_cover_letter':
		//başvuruda yapılan önyazıyı değiştirir
		edit_worker_application_cover_letter();
		break;
	case 'update_worker_application_cover_letter':
		update_worker_application_cover_letter();
		break;

	case 'print_worker_application_email_history':
		print_worker_application_email_history();
		break;

	case 'search_jobs':
		search_jobs();
		break;
	case 'advanced_search':
		//burası yalnızca detaylı arama formunu gösterir. arama sonuçları gene
		//search_jobs fonksiyonuna gider.
		advanced_search();
		break;


	case 'view_resume':
		view_resume();
		break;
	case 'print_resume':
		print_resume();
		break;
	case 'employer':
		employer();
		break;
	case 'new_company':
		new_company();
		break;
	case 'new_company_with_forcing':
		new_company_with_forcing();
		break;
	case 'save_company':
		save_company();
		break;
	case 'apply_company':
		apply_company();
		break;
	case 'save_company_with_forcing':
		save_company_with_forcing();
		break;
	case 'edit_company':
		edit_company();
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

	case 'list_employer_jobs':
		list_employer_jobs();
		break;
	case 'edit_employer_job':
		edit_employer_job();
		break;
	case 'employer_new_job':
		employer_new_job();
		break;
	case 'save_employer_job':
		save_employer_job();
		break;
	case 'save_as_new_employer_job':
		save_as_new_employer_job();
		break;
	case 'apply_employer_job':
		apply_employer_job();
		break;
	case 'update_employer_job':
		update_employer_job();
		break;
	case 'unpublish_employer_job':
		unpublish_employer_job();
		break;
	case 'publish_employer_job':
		publish_employer_job();
		break;
	case 'delete_employer_job':
		delete_employer_job();
		break;
	case 'list_employer_email_templates':
		list_employer_email_templates();
		break;
	case 'new_employer_email_template':
		new_employer_email_template();
		break;
	case 'save_employer_email_template':
		save_employer_email_template();
		break;
	case 'edit_employer_email_template':
		edit_employer_email_template();
		break;
	case 'update_employer_email_template':
		update_employer_email_template();
		break;
	case 'publish_employer_email_template':
		publish_employer_email_template();
		break;
	case 'unpublish_employer_email_template':
		unpublish_employer_email_template();
		break;
	case 'delete_employer_email_template':
		delete_employer_email_template();
		break;
	case 'list_employer_applications':
		list_employer_applications();
		break;
	case 'edit_employer_application':
		edit_employer_application();
		break;
	case 'update_employer_application':
		update_employer_application();
		break;
	case 'send_mail_to_applicant':
		send_mail_to_applicant();
		break;
	case 'buy_credits':
		buy_credits();
		break;
	case 'paypal':
		paypal();
		break;
	case 'bank_transfer':
		bank_transfer();
		break;
	case 'google_checkout':
		google_checkout();
		break;
	case 'list_employer_credit_buying_history':
		list_employer_credit_buying_history();
		break;
	case 'employer_credit_history_full_payment_detail':
		employer_credit_history_full_payment_detail();
		break;
	case 'list_employer_credit_speding_history':
		list_employer_credit_speding_history();
		break;
	case 'list_employer_pending_credits':
		list_employer_pending_credits();
		break;
	case 'pending_credit_payment_details':
		pending_credit_payment_details();
		break;
	case 'save_pending_credit':
		save_pending_credit();
		break;		
	case 'employer_resume_search_form':
		employer_resume_search_form();
		break;
	case 'search_resume':
		search_resume();
		break;
	case 'employer_extend_resume_search':
		employer_extend_resume_search();
		break;
	case 'rss_page':
		rss_page();
		break;
	case 'rss':
		rss();
		break;
	case 'admin':
		admin();
		break;
	case 'home':
	default:
		home();
		break;
}

//MACF
//FUNCION PARA LISTAR TODOS LOS EMPLEOS

function list_all_jobs(){
	global $_config, $_lknBaseFramework;
	$_db = &lknDb::createInstance ();

	$Itemid = lknJobsItemId ();
	//featured jobs allowed mu
	if ($_config['job_posting_featured_allowed']=='1') {
		$ordering="j.is_featured DESC,";
	}else {
		$ordering="";
	}
	//featured jobs allowed mu?

	$date = new lknDate ();
	$now = $date->getDate ();

	$nullDate = $_db->getNullDate ();

	$where [] = "( j.publish_up = '" . $_db->_escape ( $nullDate ) . "' OR j.publish_up <= '" . $_db->_escape ( $now ) . "')";
	$where [] = "( j.publish_down = '" . $_db->_escape ( $nullDate ) . "' OR j.publish_down >= '" . $_db->_escape ( $now ) . "')";
	$where [] = "j.cat_id=c.id";
	$where [] = "j.company_id=company.id";
	$where [] = "company.published='1'";
	$where [] = "j.country=country.id";

	$where [] = "c.published='1'";
	$where [] = "j.published='1'";
	$where [] = "country.published='1'";
	$where [] = "company.memberid=u.id";
	$where [] = "u.block='0'";

	$where = (count ( $where ) ? ' WHERE ' . implode ( ' AND ', $where ) : '');

	$sql = "SELECT j.id";
	$sql .= "\n FROM #__jobs_jobs AS j,";
	$sql .= "\n #__jobs_categories AS c,";
	$sql .= "\n #__jobs_companies AS company,";
	$sql .= "\n #__users AS u,";
	$sql .= "\n #__jobs_countries AS country";
	$sql .= $where;
	//echo $sql;
	$job_count = lknGetCount ( $sql );

	$sql = "SELECT j.*, c.title AS category_name,company.title AS company_name,country.title AS job_location,";
	$sql .= "\n company.alias AS company_alias, c.alias AS category_alias,c.meta_keywords AS category_meta_keywords,c.meta_description AS category_meta_description";
	$sql .= "\n FROM #__jobs_jobs j,";
	$sql .= "\n #__jobs_categories AS c,";
	$sql .= "\n #__jobs_companies AS company,";
	$sql .= "\n #__jobs_countries AS country,";
	$sql .= "\n #__users AS u";
	$sql .= $where;
	$sql .= "\n ORDER BY $ordering j.id DESC";
	$sql .= $_db->getLimit ();

	$_db->query( $sql );
	$_db->setQuery();
	$rows = $_db->loadObjectList();
	//print_r($rows);
	//buraya kadar veri topladık. şimdi verileri ekrana yazdırma vakti
	$template = lknRegistry::get ( 'lknjobstemplate' ); //tema için başladık
	$tmpl = new lknTemplate ( $template );

	$top = fetch_jobs_top ( $tmpl );
	$footer = $tmpl->fetch ( 'footer.php' );
	//pathway için başladı			
	$link = "index.php?option=com_jobs&task=list_all_jobs" . $Itemid;
	$link = lknSef::url ( $link );

	$_lknBaseFramework->addToPathWay ( _lkn_list_jobs, $link );
	setMetaData ( _lkn_list_jobs );
	//pathway için bitti
	//sayfalama linkleri oluşturulmaya başladı
	$job_count = ( int ) $job_count;
	$link_category = "index.php?option=com_jobs&task=list_all_jobs" . $Itemid;
	$sayfa = new lknSayfalama ( $link_category, $job_count );
	$paging_links = $sayfa->sayfaLinkiYaz ();
	//sayfalama linkleri bitti


	//tepedeki basit arama kutusu başlangıcı	
	$cat = new lknCategory ();
	$categories = $cat->getCategoryList ( 'job_cat', '', '', 1 );
	$tmpl->set ( 'categories', $categories );
	$simple_search_box_wide = $tmpl->fetch ( 'simple.search.box.wide.php' );
	//tepedeki basit arama kutusu bitişi
	$tmpl->set ( 'top', $top );
	$tmpl->set ( 'footer', $footer );
	$tmpl->set ( 'rows', $rows );
	$tmpl->set ( 'paging_links', $paging_links );
	$tmpl->set ( 'simple_search_box_wide', $simple_search_box_wide );
	$tmpl->set ( 'job_count', $job_count );
	$tmpl->set ( 'header_message', _lkn_job . ' (' .$job_count . ')' );
	$tmpl->set ( 'Itemid', $Itemid );
	$home_page = $tmpl->fetch ( 'list.all.jobs.php' );

	$tmpl->set ( 'value', $home_page );
	echo $tmpl->fetch ( 'public.container.php' );
} 


function force_check()
{
	global $task;
	global $_config, $_db;
	$user=new lknUser();
	$user_id=$user->getUserID();
	if ($user_id=='' || $user_id=='0')
	{	
		//do nothing
	}else{	
		if ($task=='force' || $task=='new_company_with_forcing' || $task=='save_company_with_forcing' || $task=='new_resume' || $task=='save_resume' || $task=='apply_resume' ) {
		//disable check on resume or company creation tasks (and savings)	

		
		}else{ 
			$user_type=$user->getUserType();//joomla user group

			if ($user_type!='Super Administrator') {
				$userType=lknJobsFunctions::getType();//employer/worker/new. new means Jobs! does not know who is this?
				if ($userType=='new') {
					$itemid=lknJobsItemId();
					
					//$link="index.php?option=com_jobs&task=force".$itemid;
				
					//MACF
					//Por defecto los usuarios registrados van a ser empresa
					//para lograr eso se redirige al link de crear company
					$link="index.php?option=com_jobs&task=new_company_with_forcing".$itemid;
					//$link=lknSef::url($link);
					yonledir($link);
				}

				//Oskar 
				$userJoomla = &JFactory::getUser(); 
				$db = &JFactory::getDBO();  
				$db->setQuery("Select * from #__users where id = ".$userJoomla->id);
				$UserJ = $db->loadObjectList();
				 
				
				//if ( ($userType=='worker') and ($userJoomla->lastvisitDate == "0000-00-00 00:00:00") 
				//	and ($task !='edit_resume'))
				if ( ($userType=='worker') and ($UserJ[0]->firstime==0 ) and ($task !='edit_resume'))
				{
  
 					//actualizar porque ya no es la primera vez que ingresa
					/*$user = new stdClass;
	 				$user->id = $userJoomla->id;
	 				$user->firstime = 1;
	 				$db->updateObject('users', $user, 'id');
					*/
					$updateQuery = "Update jos_users ".
								" SET firstime = 1".
								" Where id=".$UserJ[0]->id;

 					$db->setQuery($updateQuery); 
					$db->query();  
					$db->setQuery("Select * from #__users where id = ".$userJoomla->id);
			 
					$sql="SELECT c.*";
					$sql.="\n FROM #__jobs_resumes AS c";
					$sql.="\n WHERE c.memberid =".$userJoomla->id;

					$_db->query($sql);
					$_db->setQuery();
					$row=$_db->loadObject();
					
					$itemid=lknJobsItemId();
					//edit_resume($row->id.":".$row->alias);
					$link="index.php?option=com_jobs&task=edit_resume&id=".$row->id.":".$row->alias.$itemid;
					yonledir($link);
					/*
					$itemid=lknJobsItemId();
					//Obtener el id del resumen del usuario
					$_db =&JFactory::getDBO();
					$query = 'SELECT c.* FROM #__jobs_resumes as c WHERE memberid='.$user_id;
    				$_db->setQuery($query);
					$_db->query();
					$row = $_db->loadResult();
					print_r($idresuenuser); 
					//Link para redireccionar
					$resume_alias=$row->alias;
					$link="index.php?option=com_jobs&task=edit_resume&id=$id:$resume_alias:".$itemid;
					yonledir($link);*/
				}
			}
		}
	}
}

function force()
{
	global $_db,$_config,$_lknBaseFramework;

	$Itemid=lknJobsItemId();

	$userType=lknJobsFunctions::getType();
	if ($userType=='employer')
	{
		$link="index.php?option=com_jobs&task=employer" . $Itemid;
		$link=lknSef::url($link);
		yonledir($link);
		
	}
	elseif ($userType=='worker')
	{
		$link="index.php?option=com_jobs&task=worker" . $Itemid;
		$link=lknSef::url($link);
		yonledir($link);		
	}
	

	//buraya kadar veri topladık. şimdi verileri ekrana yazdırma vakti

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');

		//pathway için başladı			
			$link="index.php?option=com_jobs&task=force" . $Itemid;
					
			$_lknBaseFramework->addToPathWay('Create Profile',$link);
		//pathway için bitti
		
		//resume oluşturma linki
			$create_resume_link="index.php?option=com_jobs&task=new_resume$Itemid";
			$create_resume_link=lknSef::url($create_resume_link);
		//resume oluşturma linki
		
		//resume oluşturma linki
			$new_company_link="index.php?option=com_jobs&task=new_company_with_forcing$Itemid";
			$new_company_link=lknSef::url($new_company_link);
		//resume oluşturma linki
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('create_resume_link',$create_resume_link);
	$tmpl->set('new_company_link',$new_company_link);
	$home_page=$tmpl->fetch('force.profile.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::list_jobs($job_count,$rows,'category');

}


function buy_credits(){
	global $_lknBaseFramework,$_config,$_db;
	
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	if ($credit_system_for_job_seekers=='0') {
		//job seeker için kredi sistemi kapalı.
		//ne diye görsün
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
		$company=true;
	}else {
		$company=checkCompanyFunctions();
	}
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
	$itemid=lknJobsItemId();
	$itemid_number=lknJobsItemId(true);
	$action=lknGetParamatre($_POST,'action');
	
	$credit_number=lknGetParamatre($_POST,'credit_number');
		
	$payment_type=lknGetParamatre($_POST,'payment_type','');
	
	$credit_cost=floatval(str_replace(',','.',$_config['credit_cost']));
	
	$payment_amount=$credit_number * $credit_cost;
	
	//pathway için başladı
			$userType=lknRegistry::get('usertype');
			if ($userType=='worker') {
				$user=new lknUser();
				$link="index.php?option=com_jobs&task=worker" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(str_replace('{NAME}',$user->getName(),_lkn_worker),$link);
			}else {
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);
			}

		$link="index.php?option=com_jobs&task=buy_credits" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_buy_credits,$link);
	//pathway için bitti
	
	if ($action=='confirm' || $action=='') {
			$template=lknRegistry::get('lknjobstemplate');//tema için başladık
			$tmpl=new lknTemplate($template);
			
			$top=fetch_jobs_top($tmpl);
			$footer=$tmpl->fetch('footer.php');
			
			//kredi mesajı başladı
				$credit_cost_message=_lkn_credit_count_desc;
				$credit_cost_message=str_replace('{COST}',$credit_cost,$credit_cost_message);
			//kredi mesajı başladı
				if ($action=='') {
					//ödeme seçenekleri kutusu başladı
						$bank_trasnfer_active=$_config['credit_system_bank_transfer_active'];
						$paypal_active=$_config['credit_system_paypal_active'];
						$googlecheckout=$_config['credit_system_googlecheckout_active'];
						
						$data=array();
						$data['']='';
						if ($paypal_active=='1') {
							$data['1']=_lkn_credit_payment_method_paypal;
						}
						
						if ($bank_trasnfer_active=='1') {
							$data['2']=_lkn_credit_payment_method_bank_transfer;
						}

						if ($googlecheckout=='1') {
							$data['3']='Google Checkout';
						}
									
						$payment_type_select_list=lknhtmlMaker::selectList($data,'payment_type',$payment_type,'',0);
					//ödeme seçenekleri kutusu bitti
					
		
					$tmpl->set('payment_type',$payment_type);
					$tmpl->set('action',$action);
					$tmpl->set('credit_cost_message',$credit_cost_message);
					$tmpl->set('credit_number',$credit_number);
					$tmpl->set('payment_type_select_list',$payment_type_select_list);
					$tmpl->set('itemid_number',$itemid_number);
					$jdp=$tmpl->fetch('employer.buy.credits.php');
				}else {
					if ($credit_number=='') {
						//kredi yazmamış
						$tmpl->set('error_msg',_lkn_error_credit_number_empty);
						$tmpl->set('credit_number',$credit_number);
						$tmpl->set('payment_type',$payment_type);
						$tmpl->set('itemid_number',$itemid_number);
						$jdp=$tmpl->fetch('employer.buy.credits.error.form.php');

					}elseif ($payment_type=='') {
						//ödeme türünü seçmemiş
						$tmpl->set('error_msg',_lkn_error_payment_type_is_empty);
						$tmpl->set('credit_number',$credit_number);
						$tmpl->set('payment_type',$payment_type);
						$tmpl->set('itemid_number',$itemid_number);
						$jdp=$tmpl->fetch('employer.buy.credits.error.form.php');
					}else{
						//en son onay mesajı burada olacak	
							$credit_number=(int)$credit_number;
							if ($credit_number==0) {
								//kredi için rakam yazmamış. jfh5djfh gibi bi şey yazmış
								$tmpl->set('error_msg',_lkn_error_credit_number_empty);
								$tmpl->set('credit_number',$credit_number);
								$tmpl->set('payment_type',$payment_type);
								$tmpl->set('itemid_number',$itemid_number);
								$jdp=$tmpl->fetch('employer.buy.credits.error.form.php');
							}else {
									$credits_final_message=_lkn_credit_buying_confirm;
									/*
									Please check the details:
			
									Payment Type: {PAYMENT_TYPE}
									Credits you want to buy: {NUMBER}
									Total Cost for these credits*: {COST}
			
									* One credit is ${UNIT}
									*/
									
									if ($payment_type=='1') {
										$credits_final_message=str_replace('{PAYMENT_TYPE}',_lkn_credit_payment_method_paypal,$credits_final_message);
										$payment_type_task='paypal';
									}elseif ($payment_type=='2'){
										$credits_final_message=str_replace('{PAYMENT_TYPE}',_lkn_credit_payment_method_bank_transfer,$credits_final_message);
										$payment_type_task='bank_transfer';
									}elseif ($payment_type=='3'){
										$credits_final_message=str_replace('{PAYMENT_TYPE}','Google Checkout',$credits_final_message);
										$payment_type_task='google_checkout';
									}else {
										die('wrong payment type');
									}
									
			
									$credits_final_message=str_replace('{NUMBER}',$credit_number,$credits_final_message);
									$credits_final_message=str_replace('{COST}',$payment_amount,$credits_final_message);
									
									$credits_final_message=str_replace('{UNIT}',$credit_cost,$credits_final_message);
									
																		
									$tmpl->set('action',$action);
									$tmpl->set('payment_type_task',$payment_type_task);
									$tmpl->set('credit_number',$credit_number);
									$tmpl->set('payment_amount',$payment_amount);
									$tmpl->set('payment_type',$payment_type);
									$tmpl->set('itemid',$itemid);
									$tmpl->set('itemid_number',$itemid_number);
									$tmpl->set('credits_final_message',$credits_final_message);
									$jdp=$tmpl->fetch('employer.buy.credits.php');

							}
				
					}
				}
			
			$tmpl->set('top',$top);
			$tmpl->set('footer',$footer);
			$tmpl->set('value',$jdp);
			echo $tmpl->fetch('public.container.php');
	
		//htmlFrontJobs::employer_buy_credits($action,$credit_number,$payment_type,$itemid,$payment_amount,$credit_cost);
	}else {
		die("wrong action");
	}
	
	
}

function bank_transfer(){
	
	global $_db,$_config;
	$userType=lknRegistry::get('usertype');
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	if ($credit_system_for_job_seekers=='0') {
		//job seeker için kredi sistemi kapalı.
		//ne diye görsün
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
		$company=true;
	}else {
		$company=checkCompanyFunctions();
	}
	
	//beklenen kullanıcı değilse geri gitsin. ACL
		$canDo=checkAcl('r');
		if ($canDo==false || $company==false) {
			echo _lkn_error_acl_permission;
			return ;
		}
	//beklenen kullanıcı değilse geri gitsin. ACL
	
	$user=new lknUser();	
	$date=new lknDate();
	$itemid=lknJobsItemId();
	
	//verileri topla başladı
		$user_id=$user->getUserID();
		$credit_count=lknGetParamatre($_POST,'credit_number');
		$current_date=$date->getDate();
		$user_name=$user->getUserName();
		$total_payment=lknGetParamatre($_POST,'total');	
	//verileri toplama bitti
	
	$data=array();
	$data['user_id']=$user_id;//krediyi hangi kullanıcı almak istiyor
	$data['requested_date']=$current_date;
	$data['credits']=$credit_count;//kaç kredi almak istiyor
	$data['payment_gross']=$total_payment;//kaç para ödedi
	$sql=$_db->CreateInsertSql($data,'#__jobs_credits_pending');
	$_db->query($sql);
	$_db->setQuery();
	
	//admin mail olayı başladı
		$params=array();
		$params['credit_count']=$credit_count;
		$params['current_date']=$current_date;
		$params['user_name']=$user_name;
		$params['total_payment']=$total_payment;
		lknJobsFunctions::adminMail('bank','',$params);
	//admin mail olayı bitti
	           		
	//$inserted_id=$_db->get_insert_id();
	$url="index.php?option=com_jobs&task=list_employer_pending_credits&user_id=$user_id".$itemid;
	$url=lknSef::url($url);
	
	yonledir($url,_lkn_credit_payment_method_bank_transfer_result_message);
	
}

function google_checkout(){
	$root_f=JOOMLA_ROOT . LKN_DS .  'components' . LKN_DS . 'lknlibrary' . LKN_DS . 'googlecheckout' . LKN_DS;

	// if there is not action variable, set the default action of 'process'
	$action=lknGetParamatre($_GET,'action');
	if ($action=='')
	{
		$action = 'process';
	}

	if ($action!='ipn') {
			//beklenen kullanıcı değilse geri gitsin. ACL.
			//yalnız ipn hariç
			$canDo=checkAcl('r');
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
	}
	
  	global $_lknBaseFramework,$_config;

	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

		$link="index.php?option=com_jobs&task=buy_credits" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_buy_credits,$link);
	//pathway için bitti
	
	$this_script = LIVE_SITE .  '/index.php?option=com_jobs&task=google_checkout' . $itemid;
	
	
	//cart ile ilgili genel verileri tutar
			$merchant_id = $_config['credit_system_googlecheckout_merchant_id'];  // Your Merchant ID
		    $merchant_key = $_config['credit_system_googlecheckout_merchant_key'];  // Your Merchant Key
		    $sandbox=$_config['credit_system_googlecheckout_sandbox'];
		    $gc_currency=$_config['credit_system_googlecheckout_currency'];
		    $unit_price=$_config['credit_cost'];
		    if ($sandbox=='1') {
		    	$server_type = "sandbox";
		    }else {
		    	$server_type = "";
		    }
		    $currency = $gc_currency;
	//cart ile ilgili genel veriler 
	
	if ($action=='process') {
		require_once($root_f . 'library'.LKN_DS.'googlecart.php');
	  	require_once($root_f . 'library'.LKN_DS.'googleitem.php');
	  	require_once($root_f . 'library'.LKN_DS.'googleshipping.php');
	  	require_once($root_f . 'library'.LKN_DS.'googletax.php');
  	
		//yani google'a post edilecek data'yı oluştur
		    // Create a new shopping cart object
		    $cart = new GoogleCart($merchant_id, $merchant_key, $server_type, $currency);

		    $credit_number=lknGetParamatre($_POST,'credit_number');
			if ($credit_number=='') {
				echo _lkn_error_credit_number_empty;
				return ;
			}

			$total=floatval(lknGetParamatre($_POST,'total'));
			if ($total==0 || $total<0) {
				echo _lkn_error;
				return ;
			}

			$user=new lknUser();
			$user_id=$user->getUserID();
			$user_name=$user->getUserName();
			
	        // Add items to the cart
		    $item_1 = new GoogleItem("$credit_number credits", 
		        "$credit_number credits for $user_name on " . LIVE_SITE, $credit_number, $unit_price);
		    $item_1->SetMerchantPrivateItemData(
                      new MerchantPrivateItemData(array("user_id" => "$user_id",
                                                        "credit_count" => "$credit_number",
                                                        "total" => "$total")));
             $item_1->SetEmailDigitalDelivery('true');
               // Add tax rules
			  $tax_rule = new GoogleDefaultTaxRule(0);
			  $cart->AddDefaultTaxRules($tax_rule);
  
             $cart->AddItem($item_1);
             
            // Specify <edit-cart-url>
		    $cart->SetEditCartUrl( LIVE_SITE . '/index.php?option=com_jobs&task=buy_credits' . $itemid);
		
		    // Specify "Return to xyz" link
		    $cart->SetContinueShoppingUrl(LIVE_SITE . '/index.php?option=com_jobs' . $itemid);
		    
		    //Display XML data
/*		     echo "<pre>";
		     echo htmlentities($cart->GetXML());
		     echo "</pre>";*/
		    
		    // Display a medium size button
    		echo $cart->CheckoutButtonCode("MEDIUM");
    			      echo "
	      <script language=\"JavaScript\" type=\"text/javascript\">
	      <!--
	      window.setTimeout('document.forms[\'checkout_form\'].submit();',2000);
	      //-->
	      </script>\n";
	}elseif ($action=='ipn'){
		require_once($root_f . 'library'.LKN_DS.'googleresponse.php');
		require_once($root_f . 'library'.LKN_DS.'googlemerchantcalculations.php');
		require_once($root_f . 'library'.LKN_DS.'googleresult.php');
		require_once($root_f . 'library'.LKN_DS.'googlerequest.php');	
		
		define('RESPONSE_HANDLER_ERROR_LOG_FILE', $root_f . LKN_DS.'googleerror.log');
	  	define('RESPONSE_HANDLER_LOG_FILE', $root_f. LKN_DS.'googlemessage.log');
	
	  $Gresponse = new GoogleResponse($merchant_id, $merchant_key);
	
	  $Grequest = new GoogleRequest($merchant_id, $merchant_key, $server_type, $currency);
	
	  //Setup the log file
	  $Gresponse->SetLogFiles(RESPONSE_HANDLER_ERROR_LOG_FILE, 
	                                        RESPONSE_HANDLER_LOG_FILE, L_ALL);
	
	  // Retrieve the XML sent in the HTTP POST request to the ResponseHandler
	  $xml_response = isset($HTTP_RAW_POST_DATA)?
	                    $HTTP_RAW_POST_DATA:file_get_contents("php://input");
	  if (get_magic_quotes_gpc()) {
	    $xml_response = stripslashes($xml_response);
	  }
	  list($root, $data) = $Gresponse->GetParsedXML($xml_response);
	  $Gresponse->SetMerchantAuthentication($merchant_id, $merchant_key);

	  $status = $Gresponse->HttpAuthentication();
	  if(! $status) {
	    die('authentication failed');
	  }	
	  
	  switch ($root) {
	    case "request-received": {
	      break;
	    }
	    case "error": {
	      break;
	    }
	    case "diagnosis": {
	      break;
	    }
	    case "checkout-redirect": {
	      break;
	    }
	    case "merchant-calculation-callback": {
	      // Create the results and send it
	      break;
	    }
	    case "new-order-notification": {
	    	$newOrderState=$data[$root]['fulfillment-order-state']['VALUE'];
	    	$google_order_id=$data[$root]['google-order-number']['VALUE'];
	    	$sql="SELECT * FROM #__jobs_credits_pending WHERE txn_id='$google_order_id'";
	    	$count=lknGetCount($sql);
	    	
	    	if ($count==0) { 
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
				
	    				$jconfig=new lknJoomlaConfig();
						$site_email=$jconfig->get('mailfrom');
						$site_name=$jconfig->get('sitename');

						$domain=$_SERVER['HTTP_HOST'];//google.com
				
				    	$md = lknArrayHelper::get_arr_result($data[$root]['shopping-cart']['items']['item']['merchant-private-item-data']);
				    	foreach ($md as $m){
				    		$credit_number=$m['credit_count']['VALUE'];
				    		$user_id=$m['user_id']['VALUE'];
				    		$total_payment=$m['total']['VALUE'];
				    	}
				    	
						//gönderilecek e-mail mesajo oluşturukuyor
				    		$subject=_lkn_employer_google_checkout_order_recieved_subject;
				    		$subject=str_replace('{DOMAIN}',$domain,$subject);
				    		
				    		$pending_credits_url=LIVE_SITE . "/index.php?option=com_jobs&task=list_employer_pending_credits&user_id=$user_id";
				    		$text=_lkn_employer_google_checkout_order_recieved_text;
				    		$text=str_replace('{CREDIT_COUNT}',$credit_number,$text);
				    		$text=str_replace('{LIVE_SITE}',LIVE_SITE,$text);
				    		$text=str_replace('{PENDING_CREDITS_URL}',$pending_credits_url,$text);
						//gönderilecek e-mail mesajı oluştu
						
				    		$db=&lknDb::createInstance();
				    		$sql="SELECT * FROM #__users WHERE id='$user_id'";
				    		$db->query($sql);
				    		$db->setQuery();
				    		$row=$db->loadObject();
				    		$inform_email=$row->email;
			    		
			    		$x=lknSendMail($site_email,$site_name,$inform_email,$subject,$text);
			    	//yeni bir order geldi. kredi alan kışıyi bilgilendirme bitti

			    	//kredi detaylarını daha sonra kullanmak üzere #__jobs_credits_pending tablosuna girme işlemi başladı
			    		$date=new lknDate();
			    		$current_date=$date->getDate();
			    		
			    		$db2=&lknDb::createInstance();
			    		$data2=array();
			    		$data2['user_id']=$user_id;//krediyi hangi kullanıcı almak istiyor
						$data2['requested_date']=$current_date;
						$data2['payment_date']=$current_date;
						$data2['inform_date']=$current_date;
						$data2['txn_id']=$google_order_id;
						$data2['credits']=$credit_number;//kaç kredi almak istiyor
						$data2['payment_gross']=$total_payment;//kaç para ödedi
						$data2['attribs']='Google Checkout - ' . $data2['txn_id'];
						$sql=$db2->CreateInsertSql($data2,'#__jobs_credits_pending');
						$db2->query($sql);
						$db2->setQuery();
			    	//kredi detaylarını daha sonra kullanmak üzere #__jobs_credits_pending tablosuna girme işlemi bitti
	    	
	    	}
	      $Gresponse->SendAck();
	      break;
	    }
	    case "order-state-change-notification": {
	      
	      $new_financial_state = $data[$root]['new-financial-order-state']['VALUE'];
	      $new_fulfillment_order = $data[$root]['new-fulfillment-order-state']['VALUE'];
			
	      switch($new_financial_state) {
	        case 'REVIEWING': {
	          break;
	        }
	        case 'CHARGEABLE': {
	          //$Grequest->SendProcessOrder($data[$root]['google-order-number']['VALUE']);
	          //$Grequest->SendChargeOrder($data[$root]['google-order-number']['VALUE'],'');
	    	
	          break;
	        }
	        case 'CHARGING': {
	          break;
	        }
	        case 'CHARGED': {
	        		    $jconfig=new lknJoomlaConfig();
						$site_email=$jconfig->get('mailfrom');
						$site_name=$jconfig->get('sitename');
						$domain=$_SERVER['HTTP_HOST'];//google.com
						
	        	//para hesaba güvenli olarak geçti kredi işlemleri başladı
	        		$google_order_id=$data[$root]['google-order-number']['VALUE'];
	        		
	        		
	        		$db3=&lknDb::createInstance();
	        		$sql="SELECT * FROM #__jobs_credits_pending WHERE txn_id='$google_order_id'";
	        		$db3->query($sql);
	        		$db3->setQuery();
	        		$count=$db3->num_rows();
	        		//google pings 2 times to 'CHARGED'!!
	        		//bu yüzden sorgu çalışıyor kontrol için
	        		if ($count>0){
	        			//böyle bir işlem id'si var
	        			$rows=$db3->loadObjectList();
	        			$row=$rows[0];
	        			$user_id=$row->user_id;
	        			
	        			$db_user=&lknDb::createInstance();
	        			$sql="SELECT * FROM #__users WHERE id='$user_id'";
	        			$db_user->query($sql);
	        			$db_user->setQuery();
	        			$count_user=$db_user->num_rows();
	        			if ($count_user>0) {
	        				$row_user=$db_user->loadObject();
	        				$user_name=$row_user->username;
	        				$user_email=$row_user->email;
	        			
		        			//kredi log'lama başladı
			        			$data_log=array();
			        			$data_log['user_id']=$row->user_id;
			        			$data_log['credits']=$row->credits;
			        			$data_log['mc_currency']=$gc_currency;
			        			$data_log['payer_email']=$user_email;
			        			$data_log['payment_gross']=$row->payment_gross;
			        			$data_log['txn_id']=$google_order_id;
			        			$data_log['attribs']='Google Checkout - ' . $google_order_id;
					
						        lknJobsFunctions::credit_history_insert($data_log);
						    //kredi loglama bitti
						     //inform me start
						     	$date=new lknDate();
						     	$current_date=$date->getDate();
						     	
				         	   $paypal_params=array();
					           $paypal_params['payer_email']=$user_email;
					           $paypal_params['current_date']=$current_date;
					           $paypal_params['user_name']=$user_name;
					           $paypal_params['attribs']='Google Checkout - ' . $google_order_id;
				           		
					           lknJobsFunctions::adminMail('paypal','',$paypal_params);
				           //inform me finish
          			    	//kredi onaylandı. employer'a bilgi verme başladı
          			    		$subject=_lkn_employer_bank_payment_credit_approved;
								$body=_lkn_employer_bank_payment_credit_approved_text;
									
								$body=str_replace('{LIVE_SITE}',LIVE_SITE,$body);
								$subject=str_replace('{DOMAIN}',$domain,$subject);
          			    		
								lknSendMail($site_email,$site_name,$user_email,$subject,$body);
								//mail('ulasalkan@gmail.com','datas',"$site_email,$site_name,$user_email,$subject,$body,0,'ulasalkan@gmail.com'");
          			    		
					    	//kredi onaylandı. employer'a bilgi verme bitti
				           //sıra kullanıcının kredisini güncellemeye geldi. başladım
					           $select="SELECT user_id FROM #__jobs_credits WHERE user_id='$user_id'";
					           $count=lknGetCount($select);
								$db_credit=&lknDb::createInstance();
								$credit=$row->credits;
					           if ($count=='' || $count==0) {
					           		//beginner
					           		$insert=array();
					           		$insert['user_id']=$user_id;
					           		$insert['credits']=$credit;
				
					   	           $sql=$db_credit->CreateInsertSql($insert,'#__jobs_credits');
				
						           $db_credit->query($sql);
						           $db_credit->setQuery();
					           }else
					           {
									$sql="UPDATE #__jobs_credits SET credits = ( credits + $credit ) WHERE user_id='$user_id'";
					           		$db_credit->query($sql);
					           		$db_credit->setQuery();
					           }
				           //sıra kullanıcının kredisini güncellemeye geldi. bitirdim
				           //herşey bitti şimdi sıra temizlik işine geldi. gereksiz kaydı pending_credit tablosundan kaldırma başladı
				           	$db_c=&lknDb::createInstance();
				           	$sql="DELETE FROM #__jobs_credits_pending WHERE txn_id='$google_order_id'";
				           	$db_c->query($sql);
				           	$db_c->setQuery();
  				           //herşey bitti şimdi sıra temizlik işine geldi. gereksiz kaydı pending_credit tablosundan kaldırma başladı
				           
				           
	        			}else {
	        				//kullanıcı bulunamadı
	        				$subject="User with $user_id ID is not found on $domain";
	        				$text="Jobs! is not able find User with $user_id ID is not found on your web site. Google Checkout Order ID : $google_order_id";
	        				$x=lknSendMail($site_email,$site_name,$site_email,$subject,$text);
	        			}
	        			
	        		}
	        	//para hesaba güvenli olarak geçti kredi işlemleri başladı	
	    	
	          break;
	        }
	        case 'PAYMENT_DECLINED': {
	          break;
	        }
	        case 'CANCELLED': {
	          break;
	        }
	        case 'CANCELLED_BY_GOOGLE': {
	          //$Grequest->SendBuyerMessage($data[$root]['google-order-number']['VALUE'],
	          //    "Sorry, your order is cancelled by Google", true);
	          break;
	        }
	        default:
	          break;
	      }
	
	      switch($new_fulfillment_order) {
	        case 'NEW': {
	          break;
	        }
	        case 'PROCESSING': {
	          break;
	        }
	        case 'DELIVERED': {
	          break;
	        }
	        case 'WILL_NOT_DELIVER': {
	          break;
	        }
	        default:
	          break;
	      }
	      break;
	      
	      $Gresponse->SendAck();
	    }
	    case "charge-amount-notification": {
	      //$Grequest->SendDeliverOrder($data[$root]['google-order-number']['VALUE'],
	      //    <carrier>, <tracking-number>, <send-email>);
	      //$Grequest->SendArchiveOrder($data[$root]['google-order-number']['VALUE'] );
	      $Gresponse->SendAck();
	      break;
	    }
	    case "chargeback-amount-notification": {
	      $Gresponse->SendAck();
	      break;
	    }
	    case "refund-amount-notification": {
	      $Gresponse->SendAck();
	      break;
	    }
	    case "risk-information-notification": {
	      $Gresponse->SendAck();
	      break;
	    }
	    default:
	      $Gresponse->SendBadRequestStatus("Invalid or not supported Message");
	      break;
	  }
	}
	
}



function paypal()
{

	// if there is not action variable, set the default action of 'process'
	$action=lknGetParamatre($_GET,'action');
	if ($action=='')
	{
		$action = 'process';
	}

	if ($action!='ipn') {
			//beklenen kullanıcı değilse geri gitsin. ACL.
			//yalnız ipn hariç
			$canDo=checkAcl('r');
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
	}

	global $_lknBaseFramework,$_config;
	$msg='';
	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

		$link="index.php?option=com_jobs&task=buy_credits" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_buy_credits,$link);
	//pathway için bitti




	$base_url=$_lknBaseFramework->lknGetPath('live');

	$payment_folder=JOOMLA_ROOT;
	$payment_folder.=LKN_DS . 'components' . LKN_DS . 'lknlibrary' . LKN_DS . 'lknlibrary' . LKN_DS;

	// Setup class
	require_once($payment_folder . 'lknPaypal.php');  // include the class file
	$p = new paypal_class();             // initiate an instance of the class

	$this_script = $base_url .  '/index.php?option=com_jobs&task=paypal' . $itemid;

	//1:evet
	//0:hayır
	$test_mode=$_config['sandbox'];

	if ($test_mode==1) {
		//eğer test_mode aktifse kullanılacak
		$email=$_config['sandbox_email'];
		$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
	}elseif ($test_mode==0)
	{
		$email=$_config['paypal_email'];
		$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
	}

	switch ($action) {

	   case 'process':      // Process and order...

	      // There should be no output at this point.  To process the POST data,
	      // the submit_paypal_post() function will output all the HTML tags which
	      // contains a FORM which is submited instantaneously using the BODY onload
	      // attribute.  In other words, don't echo or printf anything when you're
	      // going to be calling the submit_paypal_post() function.

	      // This is where you would have your form validation  and all that jazz.
	      // You would take your POST vars and load them into the class like below,
	      // only using the POST values instead of constant string expressions.

	      // For example, after ensureing all the POST variables from your custom
	      // order form are valid, you might have:
	      //

	      	$credit_number=lknGetParamatre($_POST,'credit_number');
			if ($credit_number=='') {
				echo _lkn_error_credit_number_empty;
				return ;
			}

			$total=floatval(lknGetParamatre($_POST,'total'));
			if ($total==0 || $total<0) {
				echo _lkn_error;
				return ;
			}

			$user=new lknUser();
			$user_id=$user->getUserID();
			$user_name=$user->getName();

			  $p->add_field('custom',$user_id .'-'.$credit_number);
		      $p->add_field('business', $email);
		      $p->add_field('return', $this_script.'&action=success');
		      $p->add_field('cancel_return', $this_script.'&action=cancel');
		      $p->add_field('notify_url', $this_script.'&action=ipn');
			  $p->add_field('currency_code', $_config['credit_system_paypal_curreny']);
	      $item_name=_lkn_credit_paypal_item_name;
	      //{NUMBER} credits for {USER}
	      $item_name=str_replace('{NUMBER}',$credit_number,$item_name);
	      $item_name=str_replace('{USER}',$user_name,$item_name);
	      $item_name.=' - ' . $base_url;

	      $p->add_field('item_name', $item_name);
	      $p->add_field('amount', $total);

	      $_lknBaseFramework->setPageTitle(_lkn_credit_paypal_redirect_page_title);

	      // this function actually generates an entire HTML page consisting of
	      // a form with hidden elements which is submitted to paypal via the
	      // BODY element's onLoad attribute.  We do this so that you can validate
	      // any POST vars from you custom form before submitting to paypal.  So
	      // basically, you'll have your own form which is submitted to your script
	      // to validate the data, which in turn calls this function to create
	      // another hidden form and submit to paypal.

	      // The user will briefly see a message on the screen that reads:
	      // "Please wait, your order is being processed..." and then immediately
	      // is redirected to paypal.
	      $msg.=_lkn_credit_paypal_redirect_form_header;
	      $msg.="<form method=\"post\" name=\"paypal_form\" ";
	      $msg.="action=\"".$p->paypal_url."\">\n";

	      foreach ($p->fields as $name => $value) {
	         $msg.="<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
	      }

	      $msg.=_lkn_credit_paypal_redirect_form_footer;
	      $msg.="<input type=\"submit\" value=\"" . _lkn_submit . "\"></center>\n";
	      $msg.="</form>\n";
	      $msg.="
	      <script language=\"JavaScript\" type=\"text/javascript\">
	      <!--
	      window.setTimeout('document.forms[\'paypal_form\'].submit();',2000);
	      //-->
	      </script>\n";

	      //$p->dump_fields();      // for debugging, output a table of all the fields
	      break;

	   case 'success':      // Order was successful...

	      // This is where you would probably want to thank the user for their order
	      // or what have you.  The order information at this point is in POST
	      // variables.  However, you don't want to "process" the order until you
	      // get validation from the IPN.  That's where you would have the code to
	      // email an admin, update the database with payment status, activate a
	      // membership, etc.



	      $msg.=_lkn_credit_paypal_order_thanks;
	      /*
	      * variables are https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables
	      */
	      
	      


	      // You could also simply re-direct them to another page, or your own
	      // order status page which presents the user with the status of their
	      // order based on a database (which can be modified with the IPN code
	      // below).

	      break;

	   case 'cancel':       // Order was canceled...

	      // The order was canceled before being completed.

	      $_lknBaseFramework->setPageTitle(_lkn_credit_paypal_order_canceled_page_title);
	      $msg.=_lkn_credit_paypal_order_canceled;

	      break;

	   case 'ipn':          // Paypal is calling page for IPN validation...

	      // It's important to remember that paypal calling this script.  There
	      // is no output here.  This is where you validate the IPN data and if it's
	      // valid, update your database to signify that the user has payed.  If
	      // you try and use an echo or printf function here it's not going to do you
	      // a bit of good.  This is on the "backend".  That is why, by default, the
	      // class logs all IPN data to a text file.

	      if ($p->validate_ipn()) {

	         // Payment has been recieved and IPN is verified.  This is where you
	         // update your database to activate or process the order, or setup
	         // the database with the user's order details, email an administrator,
	         // etc.  You can access a slew of information via the ipn_data() array.

	         // Check the paypal documentation for specifics on what information
	         // is available in the IPN POST variables.  Basically, all the POST vars
	         // which paypal sends, which we send back for validation, are now stored
	         // in the ipn_data() array.

	         // For this example, we'll just email ourselves ALL the data.
	         global $_db;

	         $date=new lknDate();
	         $current_date=$date->getDate();

	         $attribs='';
	         foreach ($p->ipn_data as $key => $value) {
	         	$attribs .= "$key: $value\n";
	         }

	           $data=array();
	           $custom=explode('-',$p->ipn_data['custom']);
	           $credit=floatval($custom[1]);

	           $data['user_id']=$custom[0];
	           $data['credits']=$credit;
	           $data['payer_email']=$p->ipn_data['payer_email'];
	           $data['mc_currency']=$p->ipn_data['mc_currency'];
	           $data['payment_gross']=$p->ipn_data['payment_gross'];
	           $data['verify_sign']=$p->ipn_data['verify_sign'];
	           $data['txn_id']=$p->ipn_data['txn_id'];
	           $data['attribs']=$attribs;

	           lknJobsFunctions::credit_history_insert($data);
				//inform me start
	         	   $paypal_params=array();
		           $paypal_params['payer_email']=$p->ipn_data['payer_email'];
		           $paypal_params['current_date']=$current_date;
		           $paypal_params['user_name']=$p->ipn_data['user_name'];
		           $paypal_params['attribs']=$attribs;
	           		
		           lknJobsFunctions::adminMail('paypal','',$paypal_params);
	           //inform me finish

	           $user_id=$data['user_id'];
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
	           }else
	           {
					$sql="UPDATE #__jobs_credits SET credits = ( credits + $credit ) WHERE user_id='$user_id'";
	           		$_db->query($sql);
	           		$_db->setQuery();
	           }
	      }
	      break;
 	}
 	
 		global $_db,$_config;

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	

	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('msg',$msg);
	$home_page=$tmpl->fetch('paypal.messages.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
}

function list_employer_credit_buying_history(){

	global $_lknBaseFramework,$_config;
	$itemid=lknJobsItemId();
	$user_id=lknGetParamatre($_GET,'user_id');
	$userType=lknRegistry::get('usertype');
	
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	if ($credit_system_for_job_seekers=='0') {
		//job seeker için kredi sistemi kapalı.
		//ne diye görsün
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
		$company=true;
	}else {
		$company=checkCompanyFunctions();
	}
	

		
			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$user_id;
			$canDo=checkAcl('o',$params);
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
	//pathway için başladı
		
			if ($userType=='worker') {
				$user=new lknUser();
				$link="index.php?option=com_jobs&task=worker" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(str_replace('{NAME}',$user->getName(),_lkn_worker),$link);
			}else {
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);
			}
	
		$link="index.php?option=com_jobs&task=employer_credit_buying_history" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_list_credit_history,$link);
	//pathway için bitti
	
	$rows=lknJobsFunctions::getCreditsBuyingHistory($user_id);
	$record_count=count($rows);
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	

	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('itemid',$itemid);
	$tmpl->set('record_count',$record_count);
	$home_page=$tmpl->fetch('list.employer.credit.buying.history.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	
	//htmlFrontJobs::list_employer_credit_buying_history($rows);
	$itemid=lknJobsItemId();
}

function list_employer_credit_speding_history(){

	global $_lknBaseFramework,$_db,$_config;
	$userType=lknRegistry::get('usertype');
	
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	if ($credit_system_for_job_seekers=='0') {
		//job seeker için kredi sistemi kapalı.
		//ne diye görsün
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
		$company=true;
	}else {
		$company=checkCompanyFunctions();
	}
	
		$user_id=lknGetParamatre($_GET,'user_id');
			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$user_id;
			$canDo=checkAcl('o',$params);
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
	
	$itemid=lknJobsItemId();

	//pathway için başladı
			if ($userType=='worker') {
				$user=new lknUser();
				$link="index.php?option=com_jobs&task=worker" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(str_replace('{NAME}',$user->getName(),_lkn_worker),$link);
			}else {
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);
			}

			$link="index.php?option=com_jobs&task=employer_credit_speding_history".$itemid;
			$link=lknSef::url($link);
		
			$_lknBaseFramework->addToPathWay(_lkn_list_credit_history,$link);


	//pathway için bitti

	$rows=lknJobsFunctions::getCreditsSpedingHistory($user_id);

	$record_count=count($rows);
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	

	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('_db',$_db);
	$tmpl->set('itemid',$itemid);
	$tmpl->set('record_count',$record_count);
	$home_page=$tmpl->fetch('list.employer.credit.spending.history.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::list_employer_credit_speding_history($rows);


}

function list_employer_pending_credits(){

	global $_lknBaseFramework,$_config,$_db;
	$itemid=lknJobsItemId();
	
	$userType=lknRegistry::get('usertype');
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	if ($credit_system_for_job_seekers=='0') {
		//job seeker için kredi sistemi kapalı.
		//ne diye görsün
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
		$company=true;
	}else {
		$company=checkCompanyFunctions();
	}
	

		$user_id=lknGetParamatre($_GET,'user_id');
			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$user_id;
			$canDo=checkAcl('o',$params);
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
	
	//pathway başladı
			if ($userType=='worker') {
				$user=new lknUser();
				$link="index.php?option=com_jobs&task=worker" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(str_replace('{NAME}',$user->getName(),_lkn_worker),$link);
			}else {
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);
			}
	
		$link="index.php?option=com_jobs&task=list_employer_pending_credits" . $itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_employer_pending_credit,$link);
	//pathway bitti

	$bank_transfer_active=$_config['credit_system_bank_transfer_active'];
	if ($bank_transfer_active=='0') {
		echo _lkn_error_acl_permission;
		return ;
	}
	
	$rows=lknJobsFunctions::getPendingCredits($user_id);
	$count=count($rows);
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	$null_date=$_db->getNullDate();	

	//BİLGİ TABLOSU alınmaya başladı
		$info_table=$tmpl->fetch('list.employer.pending.credits.info.table.php');
	//BİLGİ TABLOSU alındı
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('null_date',$null_date);
	$tmpl->set('itemid',$itemid);
	$tmpl->set('info_table',$info_table);
	$tmpl->set('count',$count);
	$home_page=$tmpl->fetch('list.employer.pending.credits.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::list_employer_pending_credits($rows);

}

function pending_credit_payment_details(){
	
		global $_lknBaseFramework,$_config,$_db;
		$itemid=lknJobsItemId();
		$userType=lknRegistry::get('usertype');
		$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
		if ($credit_system_for_job_seekers=='0') {
			//job seeker için kredi sistemi kapalı.
			//ne diye görsün
			lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			$company=true;
		}else {
			$company=checkCompanyFunctions();
		}
	
		
		lknImport('calendar');

		$id=lknGetParamatre($_GET,'id');
		$where=array();
		
		$where[]="pc.id='$id'";
		$where[]="pc.user_id=u.id";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
	
		$sql="SELECT pc.*,u.username FROM #__jobs_credits_pending AS pc,";
		$sql.="\n #__users AS u";
		$sql.=$where;
		//echo $sql;
		$_db->query($sql);
		$_db->setQuery();
		$row=$_db->loadObjectList();
		$count=$_db->num_rows();
		
		if ($count>0) {	
			$row=$row[0];	
			$user_id=$row->user_id;
		
			//beklenen kullanıcı değilse geri gitsin. ACL
				$params['memberid']=$user_id;
				$canDo=checkAcl('o',$params);
				if ($canDo==false || $company==false) {
					echo _lkn_error_acl_permission;
					return ;
				}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
	//pathway başladı
		
		if ($userType=='worker') {
				$user=new lknUser();
				$link="index.php?option=com_jobs&task=worker" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(str_replace('{NAME}',$user->getName(),_lkn_worker),$link);
			}else {
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);
			}
	
		$link="index.php?option=com_jobs&task=list_employer_pending_credits&user_id=$user_id" . $itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_employer_pending_credit,$link);
	
		$_lknBaseFramework->addToPathWay(_lkn_edit,'');
	//pathway bitti
	
	
/*	$bank_transfer_active=$_config['credit_system_bank_transfer_active'];
	if ($bank_transfer_active=='0') {
		echo _lkn_error_acl_permission;
		return ;
	}*/
	
	$null_date=$_db->getNullDate();
		
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');

	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row',$row);
	$tmpl->set('null_date',$null_date);
	$home_page=$tmpl->fetch('pending.credit.payment.details.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::pending_credit_payment_details($row);
	
	
	
	}else {
		echo _lkn_error_acl_permission;
	}
}

function save_pending_credit(){

		global $_lknBaseFramework,$_config,$_db;		
		$userType=lknRegistry::get('usertype');
		$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
		if ($credit_system_for_job_seekers=='0') {
			//job seeker için kredi sistemi kapalı.
			//ne diye görsün
			lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			$company=true;
		}else {
			$company=checkCompanyFunctions();
		}
				
			//beklenen kullanıcı değilse geri gitsin. ACL
			$user_id=lknGetParamatre($_POST,'db_user_id');
			$params['memberid']=$user_id;
			$canDo=checkAcl('o',$params);
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
	
	
	$bank_transfer_active=$_config['credit_system_bank_transfer_active'];
	if ($bank_transfer_active=='0') {
		echo _lkn_error_acl_permission;
		return ;
	}
	
	$id=lknGetParamatre($_POST,'cid');
	
	$date=new lknDate();
	$current_date=$date->getDate();
	
	$data=lknGetFormValues();
	$data['inform_date']=$current_date;
	$sql=$_db->CreateUpdateSql($data,'#__jobs_credits_pending',"id='$id'");
	//echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$effected_row=$_db->getAffectedRows();
	if ($effected_row=='1') {
		//admin mail
			lknJobsFunctions::adminMail('bank_second_mail');
		//admin mail
		
		$msg=_lkn_employer_pending_saved;
	}else {
		$msg=_lkn_error_acl_permission;
	}
	
	$itemid=lknJobsItemId();
		
	$url="index.php?option=com_jobs&task=list_employer_pending_credits&user_id=$user_id" . $itemid;
	$url=lknSef::url($url);
	
	yonledir($url,$msg);
}

function employer_extend_resume_search(){
	global $_lknBaseFramework,$_db,$_config;

	$user_id=lknGetParamatre($_GET,'user_id');
	//beklenen kullanıcı değilse geri gitsin. ACL
		$params['memberid']=$user_id;
		$canDo=checkAcl('o',$params);
		$company=checkCompanyFunctions();
		if ($canDo==false || $company==false) {
			echo _lkn_error_acl_permission;
			return ;
		}
		unset($params);
	//beklenen kullanıcı değilse geri gitsin. ACL
	
	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN

		$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

		$link="index.php?option=com_jobs&task=employer_extend_resume_search" . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_extend_resume_database_search,$link);

	//pathway için bitti

	$action=lknGetParamatre($_GET,'action');
	$days_count=lknGetParamatre($_GET,'days_count');

	$one_day_search_cost=$_config['credit_system_resume_search_one_day_cost'];

	$credit_data=lknJobsFunctions::getUserCredit($user_id);

	//if ($action=='') {
	if ($action!='submit') {
		
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$date=new lknDate();
		$now=$date->getDate();
		
		//elemanın kaç kredisi olduğunu değişkenlere atama başladı
		if (count($credit_data)==0) {
			$credits=0;
			$can_search_end=$_db->getNullDate();
		}else {
			$can_search_end=$credit_data->can_search_end;
			$credits=$credit_data->credits;
			$user_id=$credit_data->user_id;
		}
		//elemanın kaç kredisi olduğunu değişkenlere atama bitti
		
				//tepedeki açıklama oluşrulmaya başladı
				if ($can_search_end>$now) {
					$search_description=str_replace('{DATE}',lknDate::formatDate($can_search_end),_lkn_employer_extend_resume_database_search_desc1);
				}else {
					$search_description=_lkn_employer_extend_resume_database_search_desc2;
				}
				//tepedeki açıklama bitti
		
				//gün sayısı kutusunun sağındaki açıklama başladı
					//How many days do you want to search our resume? One day searching costs {COST} credits and You have {CREDIT} credits
					$days_description=_lkn_employer_extend_resume_database_search_days_desc;
					$days_description=str_replace('{COST}',$one_day_search_cost,$days_description);
					$days_description=str_replace('{CREDIT}',$credits,$days_description);
				//gün sayısı kutusunun sağındaki açıklama oluşturuldu
				
				
		if ($action=='') {
			
				if ($credits==0) {
					echo _lkn_error_credit_has_no_credit;
					return;
				}
		
				//$tmpl->set('row',$rows);
				$tmpl->set('action',$action);
				$tmpl->set('days_count',$days_count);
				$tmpl->set('days_description',$days_description);
				$tmpl->set('search_description',$search_description);
				$tmpl->set('itemid',$itemid);
				$tmpl->set('user_id',$user_id);
				$jdp=$tmpl->fetch('employer.extend.resume.search.php');
		}else {
			
			if ($days_count=='') {
				//gün değeri boş geliyor
				$url=lknSef::url('index.php?option=com_jobs&task=employer_extend_resume_search&user_id=' . $user_id . $itemid);
				yonledir( $url,_lkn_error_extend_resume_database_search_day_is_empty);
			}else{
				$days_count=(int)$days_count;
				//die("$action-$days_count-$one_day_search_cost");
				if ($days_count==0) {
					$url=lknSef::url('index.php?option=com_jobs&task=employer_extend_resume_search&user_id=' . $user_id . $itemid);
					yonledir($url,_lkn_error_extend_resume_database_search_day_is_empty);
					return ;
				}


				$total_cost=$one_day_search_cost * $days_count;
				//sahip olması gerekli toplam kredi
				if ($total_cost>$credits) {
					//You do not have enough to credits. You need {CREDIT_COUNT} credits
					$msg=_lkn_error_extend_resume_database_search_enough_credits;
					$msg=str_replace('{CREDIT_COUNT}',$total_cost,$msg);

					$url=lknSef::url('index.php?option=com_jobs&task=employer_extend_resume_search&user_id=' . $user_id . $itemid);
					yonledir($url,$msg);
					return ;
				}
				
				
				$credits_final_message=_lkn_employer_extend_resume_database_search_confirm;
				/*
					Please check the details:

					Days count you want to use more: {DAYS}
					Total Cost for this*: {COST} credits

					* You have {CREDIT_COUNT} credits

				*/

				$credits_final_message=str_replace('{DAYS}',$days_count,$credits_final_message);
				$credits_final_message=str_replace('{COST}',$total_cost,$credits_final_message);
				$credits_final_message=str_replace('{CREDIT_COUNT}',$credits,$credits_final_message);

				
				$tmpl->set('credits',$credits);
				$tmpl->set('total_cost',$total_cost);
				$tmpl->set('action',$action);
				$tmpl->set('days_count',$days_count);
				$tmpl->set('days_description',$days_description);
				$tmpl->set('search_description',$search_description);
				$tmpl->set('itemid',$itemid);
				$tmpl->set('user_id',$user_id);
				$tmpl->set('credits_final_message',$credits_final_message);
				$jdp=$tmpl->fetch('employer.extend.resume.search.php');
				
				
			}
					
		}
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('value',$jdp);
		
		echo $tmpl->fetch('public.container.php');
	
		//htmlFrontJobs::employer_extend_resume_search($credit_data,$days_count,$one_day_search_cost);

	}else{
				$credit=$credit_data->credits;

				$total_cost=$one_day_search_cost * $days_count;
				//sahip olması gerekli toplam kredi
				if ($total_cost>$credit) {
					//You do not have enough to credits. You need {CREDIT_COUNT} credits
					$msg=_lkn_error_extend_resume_database_search_enough_credits;
					$msg=str_replace('{CREDIT_COUNT}',$total_cost,$msg);
					yonledir('index.php?option=com_jobs&task=employer_extend_resume_search&user_id=' . $user_id . $itemid,$msg);
					return ;
				}

		$params=array();//loaglama için kullanılacak
		$params['action']='2';
		$params['user_id']=$user_id;
		$params['credits']=$total_cost;

		$can_search_end=$credit_data->can_search_end;

		$date=new lknDate();
		$now=$date->getDate();

		if ($can_search_end>$now) {
			//yani tarih uzatılıyor
			//$can_search_end üzerine $days_count eklenerek yeni tarih bulunacak
			$new_date=$date->setDate($can_search_end);
			$date->addDays($days_count);
			$new_date=$date->getDate();

			$params['old_date']=$can_search_end;
			$params['new_date']=$new_date;

		}else {
			//yani şimdinin üzerine $days_count eklenerek yeni tarih bulunacak
			$date->addDays($days_count);
			$new_date=$date->getDate();

			$params['old_date']=$now;
			$params['new_date']=$new_date;
		}

		lknJobsFunctions::log_user_credits($params);

		//You can search search our resume database until and {NEW_DATE}
		$msg=_lkn_employer_extend_resume_database_search_complete;
		$msg=str_replace('{NEW_DATE}',$params['new_date'],$msg);

		yonledir('index.php?option=com_jobs&task=employer',$msg);

	}



}

function employer_credit_history_full_payment_detail()
{
	global $_lknBaseFramework,$_config;
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	if ($credit_system_for_job_seekers=='0') {
		//job seeker için kredi sistemi kapalı.
		//ne diye görsün
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
		$company=true;
	}else {
		$company=checkCompanyFunctions();
	}
	$userType=lknRegistry::get('usertype');
		
	$row=lknJobsFunctions::credit_history_full_payment_detail();

			//beklenen kullanıcı değilse geri gitsin. ACL
				$params=array();
				$user_id=$row->user_id;
				$params['memberid']=$user_id;
				$canDo=checkAcl('o',$params);
				
				if ($canDo==false || $company==false) {
					echo _lkn_error_acl_permission;
					return ;
				}
			//beklenen kullanıcı değilse geri gitsin. ACL

			$itemid=lknJobsItemId();
			
	//pathway için başladı
			if ($userType=='worker') {
				$user=new lknUser();
				$link="index.php?option=com_jobs&task=worker" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(str_replace('{NAME}',$user->getName(),_lkn_worker),$link);
			}else {
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);
		
				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);
			}
		$link="index.php?option=com_jobs&task=list_employer_credit_buying_history&user_id=" . $row->user_id . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_list_credit_history,$link);

		$link="index.php?option=com_jobs&task=employer_credit_history_full_payment_detail&id=" . $row->id . $itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_credit_history_full_payment_detail,$link);

	//pathway için bitti
	
	 $link="index.php?option=com_jobs&task=list_employer_credit_buying_history&user_id=$user_id" . $itemid;
	 $link=lknSef::url($link);
		 
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');

	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row',$row);
	$tmpl->set('link',$link);
	$home_page=$tmpl->fetch('employer.credit.history.full.payment.detail.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
		//htmlFrontJobs::employer_credit_history_full_payment_detail($row);

}

function detail_category()
{
	global $_db,$_config,$_lknBaseFramework;

	$Itemid=lknJobsItemId();

	$id=lknGetParamatre($_GET,'id');
	$id=explode(':',$id);
	$id=(int)$id[0];

	addRssFeedToHead("&category=$id");
		
	//kategorileri almaya başladım
			$cat=new lknCategory();
			$categories=$cat->getCategoryList('job_cat',$id,'',1);
			//$categories=$cat->getCategoryCheckBox('job_category[]');
			
			$cat_array=array();
			$c=$cat->get('list');
			$cat_array2=array();
			//print_r($c);
			foreach ($c as $cats){
				$parent_id=$cats->parent_id;
				$cat_id=$cats->id;
				if ($parent_id==$id) {
					$cat_array2[]=$cat_id;
					$cat_array[$cat_id]=",$cat_id";
				}
				
				if (in_array($parent_id,$cat_array2)) {
					$cat_array[$parent_id].=",$cat_id";
				}
			}
			//print_r($cat_array);
			$cat_ids='';
			foreach ($cat_array as $k => $v) {
				$cat_ids.=',' . $k . $v;
			}
			$cat_ids=$id . $cat_ids;
	//kategori alma işi bitti	
		
		$date=new lknDate();
		$now= $date->getDate();

		$nullDate	= $_db->getNullDate();

	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";
	$where[]="j.cat_id=c.id";
	$where[]="j.company_id=company.id";
	$where[]="company.published='1'";
	$where[]="j.country=country.id";
	$where[]="j.cat_id IN ($cat_ids)";
	$where[]="c.published='1'";
	$where[] ="j.published='1'";
	$where[] ="country.published='1'";
	
	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT j.id";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_companies AS company,";
	$sql.="\n #__jobs_countries AS country";
	$sql.=$where;

	$job_count=lknGetCount($sql);


	$sql="SELECT j.*,c.title AS category_name,company.title AS company_name,country.title AS job_location,";
	$sql.="\n company.alias AS company_alias, c.alias AS category_alias,c.meta_keywords AS category_meta_keywords,c.meta_description AS category_meta_description";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_companies AS company,";
	$sql.="\n #__jobs_countries AS country";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
	$sql.=$_db->getLimit();
	//echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();


		//buraya kadar veri topladık. şimdi verileri ekrana yazdırma vakti

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	


		

		//pathway için başladı			
			$db_path=&lknDb::createInstance();
			$sql="SELECT * FROM #__jobs_categories WHERE id='$id'";
			$db_path->query($sql);
			$db_path->setQuery();
			$row_path=$db_path->loadObject();
			
			$parent_id=$row_path->parent_id;
			if ($parent_id!='0') {
				$db_path2=&lknDb::createInstance();
				$sql="SELECT * FROM #__jobs_categories WHERE id='$parent_id'";
				$db_path2->query($sql);
				$db_path2->setQuery();
				$row_path2=$db_path2->loadObject();
				$cat_id=$row_path2->id;
				$category_name=temizleSlash($row_path2->title);
				$category_name=str_replace('.','',$category_name);
				$category_alias=$row_path2->alias;
				$link="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
				$link=lknSef::url($link);
				$_lknBaseFramework->addToPathWay($category_name,$link);			
			}
			
			$cat_id=$row_path->id;
			$category_name=temizleSlash($row_path->title);
			$category_name=str_replace('.','',$category_name);
			$category_alias=$row_path->alias;
			$meta_description=$row_path->meta_description;
			$meta_keywords=$row_path->meta_keywords;
												
			$link="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
			$link=lknSef::url($link);
					
			$_lknBaseFramework->addToPathWay($category_name,$link);
		//pathway için bitti
	//sayfalama linkleri oluşturulmaya başladı
			$job_count=(int)$job_count;
			$link_category="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
			$sayfa=new lknSayfalama($link_category,$job_count);
			$paging_links=$sayfa->sayfaLinkiYaz();	
	//sayfalama linkleri bitti
	
	//meta tag'ları set etme başlangıcı
				setMetaData($category_name,temizleSlash($meta_keywords),temizleSlash($meta_description));
		//meta tag'ları set etme bitişi
			
	//kategorilerin bilgisi alınmaya başladı
			$db_cats=&lknDb::createInstance();
			$sql="SELECT * FROM #__jobs_categories WHERE parent_id='$id'";
			$db_cats->query($sql);
			$db_cats->setQuery();
			$cat_list=$db_cats->loadObjectList();
			$tmpl->set('count',$db_cats->num_rows());
			$tmpl->set('cats',$cat_list);
			$tmpl->set('cat_array',$cat_array);
			$tmpl->set('active_id',$id);
			$subcats=$tmpl->fetch('detail.category.list.categories.php');
			
	//kategori bilgisi alınması bitti
		
	//tepedeki basit arama kutusu başlangıcı	
		//$tmpl->set('job_countries',$job_countries);
		$tmpl->set('categories',$categories);
		$simple_search_box_wide=$tmpl->fetch('simple.search.box.wide.php');
	//tepedeki basit arama kutusu bitişi
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('simple_search_box_wide',$simple_search_box_wide);
	$tmpl->set('job_count',$job_count);
	$tmpl->set('cat_name',$category_name);
	$tmpl->set('subcats',$subcats);
	$tmpl->set('Itemid',$Itemid);
	$home_page=$tmpl->fetch('detail.category.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::list_jobs($job_count,$rows,'category');

}

function print_job(){
	lknJobsFunctions::print_job();
}

function detail_job()
{
	global $_db,$_config,$_lknBaseFramework;

	$id=lknGetParamatre($_GET,'id');
	$id=explode(':',$id);
	$id=(int)$id[0];

		$date=new lknDate();
		$now= $date->getDate();

		$nullDate	= $_db->getNullDate();



	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";
	$where[]="j.cat_id=c.id";
	$where[]="j.company_id=company.id";
	$where[]="j.country=country.id";
	$where[]="j.id='$id'";
	$where[]="c.published='1'";
	$where[] ="j.published='1'";
	$where[]="company.published='1'";
	$where[]="country.published='1'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );


	$sql="SELECT j.*,country.title AS country_name,";
	$sql.="\n company.alias AS company_alias,company.title AS company_name,company.logo AS company_logo,";
	$sql.="\n c.alias AS category_alias,c.title AS category_name";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n  #__jobs_countries AS country,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	if (count($rows)==0) {
		//yani bu iş aktif değil veya yayından kaldırılmış
		echo _lkn_error_job_is_not_found;
		return ;
	}else {
		$rows=$rows[0];
	}
	//print_r($rows);
	//pathway için başladı
		$Itemid=lknJobsItemId();
	
		//$_lknBaseFramework->addToPathWay(_lkn_home_page,lknSef::url('index.php?option=com_jobs' . $Itemid));
	
		$cat_id=$rows->cat_id;
		$category_name=temizleSlash($rows->category_name);
		$category_alias=$rows->category_alias;
	
		$link="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay($category_name,$link);
	
		$id=$rows->id;
		$title=temizleSlash($rows->title);
		$alias=$rows->alias;
	
		$link="index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $Itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay($title,$link);

	//pathway için bitti

	//meta tag'ları set etme başlangıcı
				if (isset($rows->meta_keywords)) {
					$meta_keywords=$rows->meta_keywords;
				}else {
					$meta_keywords='';
				}

				if (isset($rows->meta_description)) {
					$meta_description=$rows->meta_description;
				}else {
					$meta_description='';
				}

		setMetaData($title,temizleSlash($meta_keywords),temizleSlash($meta_description));
	//meta tag'ları set etme bitişi
	
	lknJobsFunctions::increaseJobHit($id);
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	//iş araçlarının bulunduğu toolbar alınmaya başladı
			//print linki oluşturuluyor
			$print="index.php?option=com_jobs&task=print_job&id=$id:$alias" . $Itemid . lknGetNoHtml();
			$print=lknSef::url($print);
		//print linki bitti
		
		$job_seeker_functions=checkJobSeekerFunctions();
	
		$tmpl->set('id',$rows->id);
		$tmpl->set('print_link',$print);
		$tmpl->set('alias',$rows->alias);
		$tmpl->set('Itemid',$Itemid);
		$tmpl->set('job_seeker_functions',$job_seeker_functions);
		$apply_bar=$tmpl->fetch('detail.job.apply.bar.php');
	//iş araçlarının bulunduğu toolbar alındı
	
	//iş detaylaru alınmaya başladı
		$make_national=$_config['make_jobs_national'];
		$tmpl->set('row',$rows);
		$tmpl->set('make_national',$make_national);
		$tmpl->set('Itemid',$Itemid);
		$job_description=$tmpl->fetch('detail.job.job.detail.php');
	//iş detayları alındı
	
	//advice alınıyor
		$advice_title=$_config['templates_advice_title'];
		if ($advice_title!='') {
			$advice=$_config['templates_advice'];
			$advice=lknText::nl2br($advice);
			$tmpl->set('advice_title',$advice_title);
			$tmpl->set('advice',$advice);
			$tmpl->set('Itemid',$Itemid);
			$advice=$tmpl->fetch('detail.job.advice.php');
		}else {
			$advice='';
		}
		
	//advice alındı
	
		//bookmarking buttonları başladı
			$sbb=lknJobsFunctions::getSocialBookmarkingButtons($link,$title);			
		//bookmarking buttonları bitti
		
	$tmpl->set('apply_bar',$apply_bar);
	$tmpl->set('job_description',$job_description);
	$tmpl->set('row',$rows);
	$tmpl->set('sbb',$sbb);
	$tmpl->set('advice',$advice);
	$tmpl->set('Itemid',$Itemid);
	$jdp=$tmpl->fetch('detail.job.php');
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('value',$jdp);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::detail_job($rows);

}

function detail_company()
{
	global $_db,$_config,$_lknBaseFramework;

	$id=lknGetParamatre($_GET,'id');
	$id=explode(':',$id);
	$id=(int)$id[0];
	
			$sql="SELECT * FROM #__jobs_companies WHERE id='$id' AND published='1'";
			$row_cat=lknDb::loadTable($sql);
			$count=count($row_cat);
			if ($count==0) {
				header("HTTP/1.0 404 Not Found");
				header('Location: ' . LIVE_SITE);
				return ;
			}
			
	addRssFeedToHead("&company=$id");

		$date=new lknDate();
		$now= $date->getDate();

		$nullDate	= $_db->getNullDate();


	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";
	$where[]="j.cat_id=c.id";
	$where[]="j.hide_company_name='0'";
	$where[]="j.company_id=company.id";
	$where[]="j.country=country.id";
	$where[]="company.published='1'";
	$where[]="company.id='$id'";
	$where[]="company.published='1'";
	$where[]="c.published='1'";
	$where[] ="country.published='1'";
	$where[] ="j.published='1'";
	
	
	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT j.id";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_countries AS country,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;

	$job_count=lknGetCount($sql);


	$sql="SELECT j.*,c.title AS category_name,company.title AS company_name,country.title AS job_location,";
	$sql.="\n company.description AS company_description,company.meta_description AS company_meta_description,company.meta_keywords AS company_meta_keywords,";
	$sql.="\n company.alias AS company_alias, company.logo AS company_logo,c.alias AS category_alias";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_countries AS country,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	
			//pathway için başladı
			$Itemid=lknJobsItemId();
			
			$company_id=$row_cat->id;
			$company_name=temizleSlash($row_cat->title);
			$company_alias=$row_cat->alias;

			$link="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" . $Itemid;
			$link=lknSef::url($link);

			$_lknBaseFramework->addToPathWay($company_name,$link);
			//pathway için bitti


			//meta tag'ları set etme başlangıcı
				if (isset($rows->meta_keywords)) {
					$meta_keywords=$rows->meta_keywords;
				}else {
					$meta_keywords='';
				}

				if (isset($rows->meta_description)) {
					$meta_description=$rows->meta_description;
				}else {
					$meta_description='';
				}

				setMetaData($company_name,temizleSlash($meta_keywords),temizleSlash($meta_description));
			//meta tag'ları set etme bitişi
			
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');

			
	//tepedeki basit arama kutusu başlangıcı
		//kategorileri almaya başladım
			$cat=new lknCategory();
			$categories=$cat->getCategoryList('job_category[]','','',1);
		//kategori alma iişi bitti	
	
		//$tmpl->set('job_countries',$job_countries);
		$tmpl->set('categories',$categories);
		$simple_search_box_wide=$tmpl->fetch('simple.search.box.wide.php');
		
	//tepedeki basit arama kutusu bitişi
	//sayfalama linkleri alınmaya başladı
		$job_count=(int)$job_count;
		$link_company="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" . $Itemid;
		$sayfa=new lknSayfalama($link_company,$job_count);
		$paging_links=$sayfa->sayfaLinkiYaz();
	//sayfalama linkleri bitti
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('simple_search_box_wide',$simple_search_box_wide);
	$tmpl->set('job_count',$job_count);
	$tmpl->set('Itemid',$Itemid);
	$jobs=$tmpl->fetch('detail.company.jobs.php');
	
	$tmpl->set('row',$row_cat);
	$company_details=$tmpl->fetch('detail.company.company.detail.php');
	
	$tmpl->set('jobs',$jobs);
	$tmpl->set('company_details',$company_details);
	$value=$tmpl->fetch('detail.company.php');

	$tmpl->set('value',$value);
	echo $tmpl->fetch('public.container.php');
	

	//htmlFrontJobs::list_jobs($job_count,$rows,'company');
	//htmlFrontJobs::print_company_detail($row_cat);
}

function apply_job(){
	global $_db,$_config,$_lknBaseFramework;
	$Itemid=lknJobsItemId();

	$userType=lknJobsFunctions::getType();
	
	$user=new lknUser();

	addRssFeedToHead("");
	//beklenen kullanıcı değilse geri gitsin. ACL
		$canDo=checkAcl('r');
		if ($canDo==false) {
			echo _lkn_error_acl_permission;
			return ;
		}
	//beklenen kullanıcı değilse geri gitsin. ACL
	
	if ($userType=='employer') {
		$link="index.php?option=com_jobs" . $Itemid;
		$link=lknSef::url($link);
		yonledir($link,_lkn_error_employer_can_not_apply);
	}
	
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	$credit_cost=$_config['credit_system_for_job_seekers_applying_a_job_cost'];
	if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
		//kredi sistemi açık. kredisi yeterlimi
		
			$credit_data=lknJobsFunctions::getUserCredit($user->getUserID());
			
			if (count($credit_data)>0) {
				$total_credit=floatval($credit_data->credits);//toplam kredi
			}else {
				$total_credit=0;
			}
			
			
			//bir işe başvurmak için kaç kredi gerekli
			if ($total_credit>=$credit_cost) {
				//eğer 1 işe başvurmak için gerekli kredi veya daha
				//fazlası varsa OK
			}else {
				$worker_panel='index.php?option=com_jobs&task=buy_credits' . $Itemid;
				$worker_panel=lknSef::url($worker_panel);
				$msg=_lkn_error_worker_need_more_credits_to_apply_job;
				$msg=str_replace('{COST}',$credit_cost,$msg);
				$msg=str_replace('{CURRENT_CREDITS}',$total_credit,$msg);
				//You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits;
				yonledir($worker_panel,$msg);
				return ;
			}
			
	}

	$id=lknGetParamatre($_GET,'id');
	$id=explode(':',$id);
	$id=(int)$id[0];


		$date=new lknDate();
		$now= $date->getDate();

		$nullDate	= $_db->getNullDate();



	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";
	$where[]="j.cat_id=c.id";
	$where[]="j.company_id=company.id";
	$where[]="j.country=country.id";
	$where[]="j.id='$id'";
	$where[]="c.published='1'";
	$where[] ="j.published='1'";
	$where[]="company.published='1'";
	$where[]="country.published='1'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );


	$sql="SELECT j.*,country.title AS country_name,";
	$sql.="\n company.alias AS company_alias,company.title AS company_name,company.logo AS company_logo,";
	$sql.="\n c.alias AS category_alias,c.title AS category_name";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n  #__jobs_countries AS country,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
//	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObject();
	$count=$_db->num_rows();
	if ($count=='0') {
		echo _lkn_error_job_is_not_found;
		return ;
	}
	
	
	//pathway için başladı
		$cat_id=$rows->cat_id;
		$category_name=temizleSlash($rows->category_name);
		$category_alias=$rows->category_alias;

		$link="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay($category_name,$link);

		$id=$rows->id;
		$title=temizleSlash($rows->title);
		$alias=$rows->alias;

		$link="index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $Itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay($title,$link);

		$link="index.php?option=com_jobs&task=apply_job&id=$id:$alias" . $Itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_job_apply . ': ' . $title,$link);
	//pathway için bitti

		//meta tag'ları set etme başlangıcı
				if (isset($rows->meta_keywords)) {
					$meta_keywords=$rows->meta_keywords;
				}else {
					$meta_keywords='';
				}

				if (isset($rows->meta_description)) {
					$meta_description=$rows->meta_description;
				}else {
					$meta_description='';
				}

			setMetaData($title,temizleSlash($meta_keywords),temizleSlash($meta_description));
		//meta tag'ları set etme bitişi
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
			//yeni resume oluşturma kısmı başladı
		$new_resume_allowed=$_config['job_apply_new_resume_create'];
		if ($new_resume_allowed=='1') {
			$config_resume_count=$_config['worker_resume_count'];
			if ($config_resume_count=='0') {
				//yani resume oluşturabilir
				$can_create_new_resume='1';
			}else {
				//resume sayısı kontrol edilecek
				$user_id=$user->getUserID();
				$db=&lknDb::createInstance();
				$sql="SELECT id FROM #__jobs_resumes WHERE memberid='$user_id' AND published!='-2'";
				$db->query($sql);
				$db->setQuery();
				$resume_count=$db->num_rows();
				
				if ($resume_count>=$config_resume_count) {
					//yeni resume oluşturamaz . 
					//çünkü configurasyonda belirtilenden fazla resume sahibi
					$can_create_new_resume='0';
				}else {
					$can_create_new_resume='1';
				}
				
			}
			
		}else {
			//burada yeni resume oluşturamaz seçilmiş
			$can_create_new_resume='0';
		}
		
		if ($can_create_new_resume=='1') {
			//resume file kontrolü başladı
			$files_active=$_config['files_active'];
			if ($files_active=='1') {
				$tmpl->set('id',0);
				$tmpl->set('memberid',$user->getUserID());
				$attach_count=$_config['files_attach_count'];
				if ($attach_count=='0') {
					$files_extra='';
				}else {
					//You must attach maximum {COUNT} files to this resume
					$msg=_lkn_error_files_attach_count;
					$msg=str_replace('{COUNT}',$attach_count,$msg);
					$files_extra='onchange="checkPos(this,\''.$msg.'\');"';
					echo '<script language="javascript">
							function checkPos(sel,err)
							{
								scount=checkSelect(sel,' . $attach_count.');
								if (scount>' . $attach_count.') 
								{
									alert (err);
								}
								return true;
							}
							function checkSelect(sel,smax)
							{
								scount=0;
								for(i=0;i<sel.length;i++)
								{
									if (sel.options[i].selected) scount++;
									if (scount>smax) sel.options[i].selected=false;
								}	
								return (scount);
							}
					</script>';
						
					}
					//$tmpl->set('attach_count',$attach_count);//@js nereye yazılacak
				}
			//resume file kontrolü bitti
			
			//resume field kategorileri alınmaya başladı
				$cats=lknJobsFields::getFieldCategories();
			
				$parent_id_array=lknJobsFields::getParentIdArray($cats);
				
			//resume field kategorileri alınması bitti
			//resume fieldları alınmaya başladı
				$row_fields=lknJobsFields::getResumeFields();
			//resume fieldları alınması bitti
			
			$fields=lknJobsFields::getFieldsArray($row_fields,'','0',$files_extra);
			$js=lknJobsFields::getJsCode($row_fields,'front');
			
				
				$tmpl->set('row_cats',$cats);
				$tmpl->set('fields_array',$fields);
				$tmpl->set('parent_id_array',$parent_id_array);
				$tmpl->set('memberid',$user->getUserID());
				$tmpl->set('action',_lkn_resume_add);
				$tmpl->set('task','apply_job_');
				$tmpl->set('id','');
				$tmpl->set('js',$js);
				$tmpl->set('_buttons','1');
				$resume_form=$tmpl->fetch('resume.form.php');
				
		
		}else {
			$resume_form='';
		}
		
		
	//yeni resume oluşturma kısmı bitti	
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
	
		$tmpl->set('user',$user);
		$tmpl->set('row',$rows);
		$tmpl->set('can_create_new_resume',$can_create_new_resume);
		$tmpl->set('resume_form',$resume_form);
		$jdp=$tmpl->fetch('apply.job.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('value',$jdp);
		echo $tmpl->fetch('public.container.php');

	//htmlFrontJobs::apply_job($rows);
}

function worker()
{
	//beklenen kullanıcı değilse geri gitsin. ACL
	$canDo=checkAcl('r');
	

	$c=checkJobSeekerFunctions();
	if ($canDo==false || $c==FALSE) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db,$_lknBaseFramework,$_config,$UserWL;

	$itemid=lknJobsItemId();

	$params=array();
	$user=new lknUser();
	$user_id=$user->getUserID();
	$UserWL = $user_id;
	
	//eğer bir veya daha fazla ŞİRKETE SAHİPSE. bu kişi bir EMPLOYER.
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
	//BURAYI GÖRMESİN

	$where[]="r.memberid=u.id";
	$where[]="r.published!='-2'";
	$where[]="r.memberid='$user_id'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT r.id";
	$sql.="\n FROM #__jobs_resumes AS r,";
	$sql.="\n #__users AS u";
	$sql.=$where;

	$resume_count=lknGetCount($sql);

	$sql="SELECT r.*,u.username AS username";
	$sql.="\n FROM #__jobs_resumes AS r,";
	$sql.="\n #__users AS u";
	$sql.=$where;
	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=worker".$itemid;
		$link=lknSef::url($link);
		$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

		$_lknBaseFramework->addToPathWay($name,$link);
	//pathway için bitti

	//title
		$_lknBaseFramework->setPageTitle($name);
	//title
		
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	

	//worker tools alınmaya başladı
		$feeds_active=$_config['rss_feeds_active'];//rss feed aktif mi?
		$files_active=$_config['files_active'];
		$credit_system_active=$_config['credit_system_active_for_job_seekers'];
		
		//consultar si el resumen-usuario tiene subido un video
		$sql="SELECT r.videoYoutube ";
		$sql.="\n FROM #__jobs_resumes AS r ";
		$sql.="\n where r.memberid='$user_id';";
	
		$_db->query($sql);
		$_db->setQuery();
		$rows1=$_db->loadObjectList();
	
		if (!empty($rows1)) {
			foreach ($rows1 as $row1)
				$videoY = $row1->videoYoutube;
			
		} else	{
			$videoY = '';
		}	
		
		$tmpl->set('itemid',$itemid);
		$tmpl->set('feeds_active',$feeds_active);
		$tmpl->set('files_active',$files_active);
		$tmpl->set('credit_system_active',$credit_system_active);
		$tmpl->set('videoYoutube',$videoY);
		$tmpl->set('idUser',$user_id);
	
		$job_seeker_tools=$tmpl->fetch('jobseeker.panel.home.tools.php');
	//worker tools alınması bitti
	
	//başvuru sayısı linki oluşturulmaya başladı
			unset($where);
			$where=array();
			$user_id=$user->getUserID();
			$where[]="a.resume_id=r.id";
			$where[]="r.memberid='$user_id'";
			
			$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
			
			$sql="SELECT a.id";
			$sql.="\n FROM #__jobs_applications AS a,";
			$sql.="\n #__jobs_resumes AS r";
			$sql.=$where;
			$count=lknGetCount($sql);
			
			$application_count_link=_lkn_worker_total_applications;
			$application_count_link=str_replace('{NUMBER}',$count,$application_count_link);
			$application_count_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_worker_applications" . $itemid)."\">$application_count_link</a>";	
	//başvuru sayısı linki oluşturuldu
	
	//işçi için sayfalama linkleri oluşturulmaya başladı
		$link="index.php?option=com_jobs&task=worker".$itemid;
		$sayfa=new lknSayfalama($link,$resume_count);
		$resume_paging_links=$sayfa->sayfaLinkiYaz();
	//işçi için sayfalama linkleri oluşturuldu
	
	//resume count message başladı	
		$resume_count_config=$_config['worker_resume_count'];
		if ($resume_count_config!='0') {
			//eğer belirli sayıda özgeçimişe izin veriliyorsa
			//bunu kullanıcıya göster
			//You have {ACTIVE_RESUME_COUNT} resume(s) and You can have total {ALLOWED_RESUME_COUNT} resume(s)
			$resume_count_message=_lkn_worker_resume_count;
			$resume_count_message=str_replace('{ACTIVE_RESUME_COUNT}',$resume_count,$resume_count_message);
			$resume_count_message=str_replace('{ALLOWED_RESUME_COUNT}',$resume_count_config,$resume_count_message); 
		}else {
			$resume_count_message='';
		}
		
		$tmpl->set('msg',$resume_count_message);
		$resume_count_message=$tmpl->fetch('jobseeker.panel.home.resume.count.message.php');
	//resume count message bitti
	
	//yeni resume ekleme butonu oluşturma başladı
		if (($resume_count_config>$resume_count) || $resume_count_config=='0') {
			$link="index.php?option=com_jobs&task=new_resume" . $itemid;
			$link=lknSef::url($link);
			$link_text=_lkn_resume_add;
			$quick_resume_builder="index.php?option=com_jobs&task=quick_resume".$itemid;
			$quick_resume_builder=lknSef::url($quick_resume_builder);
			$quick_resume_builder=" <a href=\"$quick_resume_builder\" class=\"btn\">" . _lkn_resume_add_quick_resume . '</a>';
		}else {
			$link='javascript:void(0)';
			$link_text=_lkn_worker_no_new_resume_allowed;
			$quick_resume_builder='';
		}
		
		$tmpl->set('link',$link);
		$tmpl->set('link_text',$link_text);
		$tmpl->set('quick_resume_builder',$quick_resume_builder);
		$submit_resume_button=$tmpl->fetch('jobseeker.panel.home.company.submit.resume.php');
	//yeni resume ekleme butonu oluşturma bitti
	
	//configurasyon dosyasından verileri okuma başladı
		
		if ($credit_system_active=='1') {
			$credit_data=lknJobsFunctions::getUserCredit($user_id);
			
			if (count($credit_data)>0) {
				$total_credit=floatval($credit_data->credits);//toplam kredi
			}else {
				$total_credit=0;
			}
		
			$total_credit_message=_lkn_employer_total_credit;
			$total_credit_message=str_replace('{NUMBER}',$total_credit,$total_credit_message);
			
			$resume_post_cost=$_config['credit_system_for_job_seekers_adding_a_resume_cost'];
			if ($resume_post_cost=='0') {
				$you_can_create_x_resumes='';
			}else {
				$resume_post_cost=$total_credit/$resume_post_cost;
				$resume_post_cost=(int)$resume_post_cost;
				$you_can_create_x_resumes=_lkn_worker_credit_system_resume_create;
				//<li>You can create {COUNT} resume(s)</li>
				$you_can_create_x_resumes=str_replace('{COUNT}',$resume_post_cost,$you_can_create_x_resumes);
			}
			
			$apply_job_cost=$_config['credit_system_for_job_seekers_applying_a_job_cost'];
			if ($apply_job_cost=='0') {
				$you_can_apply_x_jobs='';
			}else {
				//$apply_job_cost=floatval($apply_job_cost);
				$apply_job_cost=$total_credit/$apply_job_cost;
				//echo $apply_job_cost;
				$apply_job_cost=(int)$apply_job_cost;
				$you_can_apply_x_jobs=_lkn_worker_credit_system_apply_job;
				//<li>You can create {COUNT} resume(s)</li>
				$you_can_apply_x_jobs=str_replace('{COUNT}',$apply_job_cost,$you_can_apply_x_jobs);
			}
			
			$credit_buying_history_link=_lkn_employer_view_credit_buying_history;
			$credit_buying_history_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_credit_buying_history&user_id=$user_id" . $itemid) ."\">$credit_buying_history_link</a>";
			
			$credit_speding_history_link=_lkn_employer_view_credit_speding_history;
			$credit_speding_history_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_credit_speding_history&user_id=$user_id" . $itemid) ."\">$credit_speding_history_link</a>";
			
			$bank_transfer_active=$_config['credit_system_bank_transfer_active'];
			if ($bank_transfer_active=='1') {
				$bank_transfer_link=_lkn_employer_pending_credit;
				$bank_transfer_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_pending_credits&user_id=$user_id" . $itemid) ."\">$bank_transfer_link</a>";
				$bank_transfer_link="<li>$bank_transfer_link</li>";
			 }else {
			 	$bank_transfer_link='';
			 }
			 
			$tmpl->set('total_credit_message',$total_credit_message);
			$tmpl->set('credit_buying_history_link',$credit_buying_history_link);
			$tmpl->set('credit_speding_history_link',$credit_speding_history_link);
			$tmpl->set('bank_transfer_link','banka transfer linki');
			$tmpl->set('you_can_create_x_resumes',$you_can_create_x_resumes);
			$tmpl->set('you_can_apply_x_jobs',$you_can_apply_x_jobs);
			$tmpl->set('bank_transfer_link',$bank_transfer_link);
			$credit_system_links=$tmpl->fetch('jobseeker.panel.home.credit.links.php');
			
		}else {
			$credit_system_links='';
		}
		
	//configurasyon dosyasından verileri okuma başladı
	
		
	$tmpl->set('rows',$rows);
	$tmpl->set('itemid',$itemid);
	$tmpl->set('resume_paging_links',$resume_paging_links);
	$tmpl->set('submit_resume_button',$submit_resume_button);
	$tmpl->set('resume_count',$resume_count);
	$tmpl->set('resume_count_message',$resume_count_message);
	$tmpl->set('job_seeker_tools',$job_seeker_tools);
	$tmpl->set('application_count_link',$application_count_link);
	$tmpl->set('credit_system_links',$credit_system_links);
	$jdp=$tmpl->fetch('jobseeker.panel.home.php');
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('value',$jdp);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::worker($rows,$params,$user);
}

function employer()
{
	//beklenen kullanıcı değilse geri gitsin. ACL
	$canDo=checkAcl('r');
	$company=checkCompanyFunctions();
	if ($canDo==false || $company==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db,$_lknBaseFramework,$_config;
	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer" .$itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

	//pathway için bitti

	//title
		$_lknBaseFramework->setPageTitle(_lkn_employer_tools);
	//title

	
	$user=new lknUser();
	$user_id=$user->getUserID();
	$user_type=$user->getUserType();

	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN

	$where[]="c.memberid='$user_id'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT c.id";
	$sql.="\n FROM #__jobs_companies AS c";
	$sql.=$where;

	$company_count=lknGetCount($sql);

	$sql="SELECT c.*";
	$sql.="\n FROM #__jobs_companies AS c";
	$sql.=$where;
	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	//configurasyon dosyasından verileri okuma başladı
		$credit_system_active=$_config['credit_system_active'];
		$bank_transfer_active=$_config['credit_system_bank_transfer_active'];
	//configurasyon dosyasından verileri okuma başladı
	
	
	//employer tools alınmaya başladı
		$tmpl->set('Itemid',$itemid);
		$tmpl->set('credit_system_active',$credit_system_active);
		$employer_tools=$tmpl->fetch('employer.panel.home.tools.php');
	//employer tools alınması bitti
	
	//şirketlerin sayafalama linkleri oluşturulmaya başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$sayfa=new lknSayfalama($link,$company_count);
		$company_paging_links=$sayfa->sayfaLinkiYaz();
	//şirketlerin sayfalama linkleri oluşturuldu
	
	//credit system linkleri
		if ($credit_system_active=='1' AND $user_type!='Super Administrator') {
			//eğer credi sistemi aktif ise bununla ilgili verileri göster
			$date=new lknDate();
			$now=$date->getDate();
			$credit_data=lknJobsFunctions::getUserCredit($user_id);
			
			if (count($credit_data)>0) {
				$total_credit=floatval($credit_data->credits);//toplam kredi
				$can_search_end=$credit_data->can_search_end;
			}else {
				$total_credit=0;
				$can_search_end=$_db->getNullDate();
			}
		
			$employer_total_credit_message=_lkn_employer_total_credit;
			$employer_total_credit_message=str_replace('{NUMBER}',$total_credit,$employer_total_credit_message);
			
			$job_cost=$_config['credit_system_adding_a_job_cost'];
			$count=floor($total_credit/$job_cost);
			//You can post {NUMBER} job(s) with this credits
			$you_can_post_x_message=str_replace('{NUMBER}',$count,_lkn_employer_total_jobs_can_post);

			if ($can_search_end>$now) {
				//You can can search our resume database untill {DATE};
				$you_can_search_until=str_replace('{DATE}',lknDate::formatDate($can_search_end),_lkn_employer_can_search_resume_database);
				$you_can_search_until.=" (<a href=\"".lknSef::url("index.php?option=com_jobs&task=employer_extend_resume_search&user_id=$user_id" . $itemid) ."\">" . _lkn_employer_can_search_resume_database_extend_this . "</a>)";
			}else {
				$you_can_search_until=_lkn_employer_can_not_search_resume_database;
				$you_can_search_until.=" (<a href=\"".lknSef::url("index.php?option=com_jobs&task=employer_extend_resume_search&user_id=$user_id" . $itemid) ."\">" . _lkn_employer_can_not_search_resume_database_buy . "</a>)";
			}
			
			$credit_buying_history_link=_lkn_employer_view_credit_buying_history;
			$credit_buying_history_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_credit_buying_history&user_id=$user_id" . $itemid) ."\">$credit_buying_history_link</a>";
			
			$credit_speding_history_link=_lkn_employer_view_credit_speding_history;
			$credit_speding_history_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_credit_speding_history&user_id=$user_id" . $itemid) ."\">$credit_speding_history_link</a>";

			if ($bank_transfer_active=='1') {
				$bank_transfer_link=_lkn_employer_pending_credit;
				$bank_transfer_link="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_pending_credits&user_id=$user_id" . $itemid) ."\">$bank_transfer_link</a>";
				$bank_transfer_link="<li>$bank_transfer_link</li>";
			 }else {
			 	$bank_transfer_link='';
			 }
			
			$tmpl->set('employer_total_credit_message',$employer_total_credit_message);
			$tmpl->set('credit_buying_history_link',$credit_buying_history_link);
			$tmpl->set('credit_speding_history_link',$credit_speding_history_link);
			$tmpl->set('bank_transfer_link',$bank_transfer_link);
			$tmpl->set('you_can_post_x_message',$you_can_post_x_message);
			$tmpl->set('you_can_search_until',$you_can_search_until);
			$credit_system_links=$tmpl->fetch('employer.panel.home.credit.links.php');
			
		}else {
			$credit_system_links='';
		}
	//credit system linkleri
	
	//company count message başladı	
	$company_count_config=$_config['employer_company_count'];
	if ($company_count_config!='0') {
			$company_count_active=lknJobsFunctions::getCompanyCount($user_id);
			//You have {ACTIVE_COMPANY_COUNT} company and You can have maximum {ALLOWED_COMPANY_COUNT} company
			$msg=_lkn_employer_company_count;
			$msg=str_replace('{ACTIVE_COMPANY_COUNT}',$company_count_active,$msg);
			$msg=str_replace('{ALLOWED_COMPANY_COUNT}',$company_count_config,$msg);
			$tmpl->set('msg',$msg);
			$company_count_message=$tmpl->fetch('employer.panel.home.company.count.message.php');
	}else {
		$company_count_message='';
	}
	//company count message bitti
	//yeni şirket ekleme butonu oluşturma başladı
		if (($company_count_config>$company_count_active) || $company_count_config=='0') {
			$link="index.php?option=com_jobs&task=new_company" . $itemid;
			$link=lknSef::url($link);
			$link_text=_lkn_company_add;
		}else {
			$link='javascript:void(0)';
			$link_text=_lkn_employer_no_new_company_allowed;
		}
		
		$tmpl->set('link',$link);
		$tmpl->set('link_text',$link_text);
		$submit_company_button=$tmpl->fetch('employer.panel.home.company.submit.button.php');
	//yeni şirket ekleme butonu oluşturma bitti
			
		
	$tmpl->set('rows',$rows);
	$tmpl->set('bank_transfer_active',$bank_transfer_active);
	$tmpl->set('credit_system_links',$credit_system_links);
	$tmpl->set('company_count',$company_count);
	$tmpl->set('submit_company_button',$submit_company_button);
	$tmpl->set('company_count_message',$company_count_message);
	$tmpl->set('company_paging_links',$company_paging_links);
	$tmpl->set('employer_tools',$employer_tools);
	$tmpl->set('Itemid',$itemid);
	$jdp=$tmpl->fetch('employer.panel.home.php');
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('employer_tools',$employer_tools);
	$tmpl->set('value',$jdp);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::employer($rows,$params,$user);
}

function list_employer_jobs()
{
	global $_lknBaseFramework,$_db;
	
	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN
	
	$user=new lknUser();
	$user_id=$user->getUserID();

	$rows=lknJobsFunctions::list_jobs($user_id);
	$job_count=$rows['params'];
	$job_count=$job_count['count'];
	$rows=$rows['row'];

			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$company=checkCompanyFunctions();
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
	
	$itemid=lknJobsItemId();

	//pathway için başladı
	$link="index.php?option=com_jobs&task=employer" . $itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

	$link="index.php?option=com_jobs&task=list_employer_jobs" . $itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_employer_list_jobs,$link);


	//pathway için bitti

	//title
		$_lknBaseFramework->setPageTitle(_lkn_employer_tools);
	//title
	
	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));
	$search2=urlencode($search);
	$published=lknGetParamatre($_REQUEST,'published');
	$cat_id=lknGetParamatre($_REQUEST,'cat_id');
	
	//filteleme için tüm kategorileri almaya başla
		$extra='onchange="document.adminForm.submit();"';
		$cat=new lknCategory();
		$category_select_list=$cat->getCategoryList('cat_id',$cat_id,$extra);
	//filtreleme için kategorileri alma işlemi bitti
	
	//publish select list başladı
		
		$publish_list=lknJobsFunctions::publishSelectList_( 'published', $published,$extra );
	//publish select list bitti
	
	//tarihler başladı
		$date=new lknDate();
		$now=$date->getDate();
		
		$null_date=$_db->getNullDate();
		
	//tarih işlemleri bitti
	
	//sayfalama için linkler oluşturulmaya başladı
		$link="index.php?option=com_jobs&task=list_employer_jobs&cat_id=$cat_id&search=$search2&published=$published".$itemid;
		$sayfa=new lknSayfalama($link,$job_count);
		$paging_links=$sayfa->sayfaLinkiYaz();
	//sayfalama için linkler oluşturulmaya başladı	
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	//info table alınmaya başladı
		$info_table=$tmpl->fetch('list.employer.jobs.info.table.php');
	//info table alınması bitti
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('job_count',$job_count);
	$tmpl->set('null_date',$null_date);
	$tmpl->set('now',$now);
	$tmpl->set('info_table',$info_table);
	$tmpl->set('search',$search);
	$tmpl->set('category_select_list',$category_select_list);
	$tmpl->set('publish_list',$publish_list);
	$tmpl->set('Itemid',$itemid);
	$home_page=$tmpl->fetch('list.employer.jobs.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	
	//htmlFrontJobs::list_employer_jobs($rows,$params);

}

function employer_new_job()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$company=checkCompanyFunctions();
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
			//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
					lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			//BURAYI GÖRMESİN
			
					//@todo: ülke gizlenmiş mi bunu kontrol et

		global $_lknBaseFramework,$_config;
		$itemid=lknJobsItemId();

		//kredi kontrolü başladı
		$user=new lknUser();
		$credit=lknJobsFunctions::getUserCredit($user->getUserID());
		if (count($credit)>0){
			$credit=(int)$credit->credits;
		}else {
			$credit=0;
		}
	//kredi kontrolü bitti
	$credit_system_active=$_config ['credit_system_active'];
	$check_credit=$_config ['job_posting_redirect_payment_page'];
	if ($credit_system_active=='1') {
		if ($check_credit=='1') {
			//yeterli kredi yoksa yönlendir seçeneği aktive edilmiş
			$job_cost=$_config ['credit_system_adding_a_job_cost'];
			if ($job_cost>$credit) {
				$msg=_lkn_job_posting_redirect_payment_page_message;
				//You must have {REQUIRED_CREDIT} credit(s) to post a job on our web site but you have {CURRENT_CREDIT_COUNT}
				$msg=str_replace('{REQUIRED_CREDIT}',$job_cost,$msg);
				$msg=str_replace('{CURRENT_CREDIT_COUNT}',$credit,$msg);
				$url="index.php?option=com_jobs&task=buy_credits" . $itemid;
				$url=lknSef::url($url);
				yonledir($url,$msg);
				return ;
			}
			
		}
	}
	
	
		
		//pathway için başladı
			$link="index.php?option=com_jobs&task=employer" . $itemid;
			$link=lknSef::url($link);

			$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

			$link="index.php?option=com_jobs&task=new_job".$itemid;
			$link=lknSef::url($link);

			$_lknBaseFramework->addToPathWay(_lkn_employer_add_new_job,$link);
		//pathway için bitti

	lknImport('calendar');
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');


	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('credit',$credit);
	$tmpl->set('row','');
	$home_page=$tmpl->fetch('job.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::job_form('',$credit);

}

function edit_employer_job()
{
			$company=checkCompanyFunctions();//şirket fonksiyonları aktif mi?
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
					lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			//BURAYI GÖRMESİN

	lknImport('calendar');
					//@todo: ülke gizlenmiş mi bunu kontrol et
	global $_db,$_lknBaseFramework;
	$cid=lknGetParamatre($_GET,'id');

	if ($cid!='' && isset($cid)) {
		$where[]="j.id='$cid'";
		$where[]="j.company_id=company.id";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT j.*,company.memberid AS memberid";
		$sql.="\n FROM #__jobs_jobs AS j,";
		$sql.="\n #__jobs_companies AS company";
		$sql.=$where;

		$_db->query($sql);
		$_db->setQuery();
		$row=$_db->getFistRecord();

			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$row->memberid;//lknGetParamatre($_POST,'db_memberid');
			$canDo=checkAcl('o',$params);
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

				$itemid=lknJobsItemId();
				//pathway için başladı
				$link="index.php?option=com_jobs&task=employer" . $itemid;
				$link=lknSef::url($link);

				$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

				$link="index.php?option=com_jobs&task=list_employer_jobs" .  $itemid;
				$link=lknSef::url($link);

				$_lknBaseFramework->addToPathWay(_lkn_employer_list_jobs,$link);

				$id=$row->id;
				$link="index.php?option=com_jobs&task=edit_employer_job&id=$id" . $itemid;
				$link=lknSef::url($link);

				$_lknBaseFramework->addToPathWay(_lkn_edit . ': ' . $row->title,$link);
				//pathway için bitti

	//kredi kontrolü başladı
		$user=new lknUser();
		$credit=lknJobsFunctions::getUserCredit($user->getUserID());
		//print_r($credit);
		if (count($credit)>0){
			$credit=(int)$credit->credits;
		}else {
			$credit=0;
		}
	//kredi kontrolü bitti
	
			
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');


	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('credit',$credit);
	$tmpl->set('row',$row);
	$home_page=$tmpl->fetch('job.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	//htmlFrontJobs::job_form($row);

	}else
	{
		echo _lkn_error;
	}
}

function save_employer_job()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	
	$msg=save_job();
	yonledir("index.php?option=com_jobs&task=list_employer_jobs",$msg['msg']);
}

function save_as_new_employer_job()
{
	$company=checkCompanyFunctions();
	if ($company==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	
	//işçi adayının burayı görmesini engelle
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//işiçi adayının burayı görmesi engellendi
	
	global $_config;
	
		$return=save_job();
		$msg=$return['msg'];
		$id=$return['job_id'];
		
		if ($id=='') {
			//iş eklenmemiş kredi yetersiz
			$url=lknSef::url("index.php?option=com_jobs&task=list_employer_jobs" . lknJobsItemId());
		}else {
			$url=lknSef::url("index.php?option=com_jobs&task=edit_employer_job&id=$id" . lknJobsItemId());
		}
		
	
	
	yonledir ( $url, $msg );
}

function update_job(){
	global $_config;
	
	$credit_system_active=$_config['credit_system_active'];
	
	$return=array();
	
	$id=lknGetParamatre($_POST,'cid');
	$old_published=lknGetParamatre($_POST,'old_published');
	$published=lknGetParamatre($_POST,'db_published');
	//old_published='' ilk defa bi şey ekliyo
	//old_published='-1' draft olan bi şeyi gene draft olarak kayıt ediyo
	//old_published='1' veya old_published='0' daha önce yayınlanmış bi şeyi update ediyor
	
	if (($old_published=='' and $published=='-1') || ($old_published=='-1' and $published=='-1')) {
		//yani draft olarak kayıt ediyor
		$msg=lknJobsFunctions::update_job();
		$return['msg']=$msg['msg'];
		$return['job_id']=$id;
	}else {
		if ($credit_system_active=='1') {
			$credit_must_have=$_config['credit_system_adding_a_job_cost'];
			
			$credit=(int)lknGetParamatre($_POST,'credit');
			
			$user=new lknUser();
			$user_type=$user->getUserType();
			
			if ($user_type=='Super Administrator') {
				$msg=lknJobsFunctions::update_job();
				
				$return['msg']=$msg['msg'];
				$return['job_id']=$id;
//				$return['msg']=_lkn_added;
//				$return['job_id']=lknJobsFunctions::save_job();
			}else {
				if ($old_published=='1' || $old_published=='0') {
					//daha önce save_job fonksiyonu bunu iş için kredi tahsil etmiş;
					//VEYA admin onaylamış
					$msg=lknJobsFunctions::update_job();
					$return['msg']=$msg['msg'];
					$return['job_id']=$id;
				}else {
					//yani adam daha önce bunun için para ödediyse 
					if ($credit>=$credit_must_have) {
		
							$msg=lknJobsFunctions::update_job();
							$return['msg']=$msg['msg'];
							$return['job_id']=$id;
	
							$params=array();
							$params['action']='1';
							$params['job_id']=$id;
							$params['user_id']=$user->getUserID();
							$params['credits']=$credit_must_have;
							lknJobsFunctions::log_user_credits($params);
					}else {
						$return['msg']=_lkn_error_credit_not_enough_to_add_job .' '. _lkn_error_updated_as_draft;
						$return['job_id']=lknJobsFunctions::update_job('-1');
					}
					
				}
			}
		}elseif($credit_system_active=='0'){
				$msg=lknJobsFunctions::update_job();
				$return['msg']=$msg['msg'];
				$return['job_id']=$id;
		}else {
			die(_lkn_error);
		}
	}
	
	return $return;
	
}

function save_job(){
	global $_config;
	
	$credit_system_active=$_config['credit_system_active'];
	
	$return=array();
	
	$old_published=lknGetParamatre($_POST,'old_published');
	$published=lknGetParamatre($_POST,'db_published');
	//old_published='' ilk defa bi şey ekliyo
	//old_published='-1' daft olan bi şeyi gene draft olarak kayıt ediyo
	//old_published='1' veya old_published='0' daha önce yayınlanmış bi şeyi update ediyor
	
	if (($old_published=='' and $published=='-1') || ($old_published=='-1' and $published=='-1')) {
		$return['msg']=_lkn_added;
		$return['job_id']=lknJobsFunctions::save_job('-1');
	}else {
		if ($credit_system_active=='1') {
			$credit_must_have=$_config['credit_system_adding_a_job_cost'];
			
			$credit=(int)lknGetParamatre($_POST,'credit');
			
			$user=new lknUser();
			$user_type=$user->getUserType();
			
			if ($user_type=='Super Administrator') {
				$return['msg']=_lkn_added;
				$return['job_id']=lknJobsFunctions::save_job();
			}else {
				if ($credit>=$credit_must_have) {
	
					$return['msg']=_lkn_added;
					$return['job_id']=lknJobsFunctions::save_job();
	
					$params=array();
					$params['action']='1';
					$params['job_id']=$return['job_id'];
					$params['user_id']=$user->getUserID();
					$params['credits']=$credit_must_have;
					lknJobsFunctions::log_user_credits($params);
				}else {
					$return['msg']=_lkn_error_credit_not_enough_to_add_job .' '. _lkn_error_saved_as_draft;
					$return['job_id']=lknJobsFunctions::save_job('-1');
				}
	
			}
		}elseif($credit_system_active=='0'){
				$return['msg']=_lkn_added;
				$return['job_id']=lknJobsFunctions::save_job();
		}else {
			die(_lkn_error);
		}
	}
	
	return $return;
	
}



function apply_employer_job(){
	$company=checkCompanyFunctions();
	if ($company==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	
	//işçi adayının burayı görmesini engelle
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//işiçi adayının burayı görmesi engellendi
	
	global $_config;
	
	$id = lknGetParamatre ($_REQUEST,'cid' );
	if ($id=='') {
		$return=save_job();
		$msg=$return['msg'];
		$id=$return['job_id'];
		if ($id=='') {
			//iş eklenmemiş kredi yetersiz
			$url=lknSef::url("index.php?option=com_jobs&task=list_employer_jobs" . lknJobsItemId());
		}else {
			$url=lknSef::url("index.php?option=com_jobs&task=edit_employer_job&id=$id" . lknJobsItemId());
		}
		
	}else {
		$msg=update_job();
		$msg=$msg['msg'];
		$url=lknSef::url("index.php?option=com_jobs&task=edit_employer_job&id=$id" . lknJobsItemId());
		
	}
	yonledir ( $url, $msg );
}

function update_employer_job()
{
	$msg=update_job();
	$msg=$msg['msg'];
	yonledir("index.php?option=com_jobs&task=list_employer_jobs",$msg);

}

function publish_employer_job()
{

			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	global $_db;
	$id=lknGetParamatre($_REQUEST,'id');
	$user=new lknUser();
	$user_id=$user->getUserID();

		$id=(int)$id;

		$where[]="j.id='$id'";
		$where[]="company.memberid='$user_id'";
		$where[]="j.company_id=company.id";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="UPDATE #__jobs_jobs AS j, #__jobs_companies AS company";
		$sql.="\n SET j.published='1' ";
		$sql.=$where;
//		echo $sql;
		$_db->query($sql);
		$_db->setQuery();
		$effected_rows=$_db->getAffectedRows();
//		exit($effected_rows);
		if ($effected_rows!=1) {
			$msg=_lkn_error_acl_permission;
		}else
		{
			$msg=_lkn_updated;
		}

	yonledir("index.php?option=com_jobs&task=list_employer_jobs",$msg);

}

function unpublish_employer_job()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	global $_db;
	$id=lknGetParamatre($_GET,'id');
	$user=new lknUser();
	$user_id=$user->getUserID();

		$id=(int)$id;

		$where[]="j.id='$id'";
		$where[]="company.memberid='$user_id'";
		$where[]="j.company_id=company.id";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="UPDATE #__jobs_jobs AS j, #__jobs_companies AS company";
		$sql.="\n SET j.published='0' ";
		$sql.=$where;
//				echo $sql;
		$_db->query($sql);
		$_db->setQuery();
		$effected_rows=$_db->getAffectedRows();
//		exit($effected_rows);
		if ($effected_rows!=1) {
			$msg=_lkn_error_acl_permission;
		}else
		{
			$msg=_lkn_updated;
		}

	yonledir("index.php?option=com_jobs&task=list_employer_jobs",$msg);
}

function edit_resume($idFirstTime="")
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();

	global $_db,$_lknBaseFramework,$_config;
	$id=lknGetParamatre($_GET,'id');
	if(empty($id)) $id=$idFirstTime;
	$id=explode(':',$id);

	$id=(int)$id[0];

	$itemid=lknJobsItemId();

	if ($id!='' && isset($id)) {
		$where[]="c.id='$id'";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT c.*";
		$sql.="\n FROM #__jobs_resumes AS c";
		$sql.=$where;

		$_db->query($sql);
		$_db->setQuery();
		$row=$_db->loadObject();

			//beklenen kullanıcı değilse geri gitsin. ACL
				$aclParams['memberid']=$row->memberid;
				$canDo=checkAcl('o',$aclParams);
				$c=checkJobSeekerFunctions();
				if ($canDo==false || $c==FALSE) {
					echo _lkn_error_acl_permission;
					return ;
				}
				//beklenen kullanıcı değilse geri gitsin. ACL

		//pathway için başladı
			$user=new lknUser();

			$link="index.php?option=com_jobs&task=worker".$itemid;
			$link=lknSef::url($link);
			$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

			$_lknBaseFramework->addToPathWay($name,$link);

			$resume_id=$row->id;
			$title=$row->title;
			$resume_alias=$row->alias;
			$link="index.php?option=com_jobs&task=edit_resume&id=$resume_id:$resume_alias".$itemid;
			$link=lknSef::url($link);
			$name=_lkn_edit . ': ' .$title;

			$_lknBaseFramework->addToPathWay($name,$link);

		//pathway için bitti
		
		
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
				//resume file kontrolü başladı
			$files_active=$_config['files_active'];
			if ($files_active=='1') {
				$tmpl->set('id',0);
				$tmpl->set('memberid',$user->getUserID());
				$attach_count=$_config['files_attach_count'];
				if ($attach_count=='0') {
					$files_extra='';
				}else {
					//You must attach maximum {COUNT} files to this resume
					$msg=_lkn_error_files_attach_count;
					$msg=str_replace('{COUNT}',$attach_count,$msg);
					$files_extra='onchange="checkPos(this,\''.$msg.'\');"';
				echo '<script language="javascript">
						function checkPos(sel,err)
						{
							scount=checkSelect(sel,' . $attach_count.');
							if (scount>' . $attach_count.') 
							{
								alert (err);
							}
							return true;
						}
						function checkSelect(sel,smax)
						{
							scount=0;
							for(i=0;i<sel.length;i++)
							{
								if (sel.options[i].selected) scount++;
								if (scount>smax) sel.options[i].selected=false;
							}	
							return (scount);
						}
				</script>';
					
				}
				//$tmpl->set('attach_count',$attach_count);//@js nereye yazılacak
			}
		//resume file kontrolü bitti
		
		//resume field kategorileri alınmaya başladı
	$cats=lknJobsFields::getFieldCategories();
	$parent_id_array=lknJobsFields::getParentIdArray($cats);
	//resume field kategorileri alınması bitti
	//resume fieldları alınmaya başladı
	$row_fields=lknJobsFields::getResumeFields();
	//resume fieldları alınması bitti
		
	$fields=lknJobsFields::getFieldsArray($row_fields,$row,'0',$files_extra);
	$js=lknJobsFields::getJsCode($row_fields,'front');
		
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row_cats',$cats);
	$tmpl->set('fields_array',$fields);
	$tmpl->set('parent_id_array',$parent_id_array);
	$tmpl->set('memberid',$row->memberid);
	$tmpl->set('action',_lkn_resume_update);
	$tmpl->set('task','update_resume');
	$tmpl->set('id',$row->id);
	$tmpl->set('js',$js);
	$home_page=$tmpl->fetch('resume.form.php');
	
			
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
	
		//htmlFrontJobs::resume_form($row);
	}else{
		echo _lkn_error;
	}
}


function update_resume()
{
 
	$itemid=lknJobsItemId();
	$id=lknGetParamatre($_POST,'cid');
	$msg=lknJobsFunctions::update_resume($id);
	$link="index.php?option=com_jobs&task=worker".$itemid;
	$link=lknSef::url($link);

	yonledir($link,$msg);
}

function quick_resume()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();

	global $_lknBaseFramework,$_config;
	$user=new lknUser();
	$itemid=lknJobsItemId();
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	$credit_cost=$_config['credit_system_for_job_seekers_adding_a_resume_cost'];
	if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
		//kredi sistemi açık. kredisi yeterlimi
		
			$credit_data=lknJobsFunctions::getUserCredit($user->getUserID());
			
			if (count($credit_data)>0) {
				$total_credit=floatval($credit_data->credits);//toplam kredi
			}else {
				$total_credit=0;
			}

			//bir işe başvurmak için kaç kredi gerekli
			if ($total_credit>=$credit_cost) {
				//eğer 1 işe başvurmak için gerekli kredi veya daha
				//fazlası varsa OK
			}else {
				$worker_panel='index.php?option=com_jobs&task=buy_credits' . $itemid;
				$worker_panel=lknSef::url($worker_panel);
				$msg=_lkn_error_worker_need_more_credits_to_create_new_resume;
				$msg=str_replace('{COST}',$credit_cost,$msg);
				$msg=str_replace('{CURRENT_CREDITS}',$total_credit,$msg);
				//You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits;
				yonledir($worker_panel,$msg);
				return ;
			}
	}
	
		

		//pathway için başladı
			$link="index.php?option=com_jobs&task=worker".$itemid;
			$link=lknSef::url($link);
			$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

			$_lknBaseFramework->addToPathWay($name,$link);

			$link="index.php?option=com_jobs&task=new_resume".$itemid;
			$link=lknSef::url($link);
			$name=_lkn_resume_add_quick_resume;

			$_lknBaseFramework->addToPathWay($name,$link);

		//pathway için bitti


	//beklenen kullanıcı değilse geri gitsin. ACL
	$canDo=checkAcl('r');
	$c=checkJobSeekerFunctions();
	if ($canDo==false || $c==FALSE) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	//resume sayısı izin verilenin üzerindemi kontrol başlangıcı
	$resume_count_config=$_config['worker_resume_count'];
	if ($resume_count_config!='0') {
			$resume_count=lknJobsFunctions::getResumeCount($user->getUserID());
			//You have {ACTIVE_RESUME_COUNT} resume(s) and You can have total {ALLOWED_RESUME_COUNT} resume(s)

			if ($resume_count>=$resume_count_config) {
					$msg=_lkn_worker_resume_count;
					$msg=str_replace('{ACTIVE_RESUME_COUNT}',$resume_count,$msg);
					$msg=str_replace('{ALLOWED_RESUME_COUNT}',$resume_count_config,$msg);
					echo "<h1>$msg</h1>";
					return ;
			}
	}
	//resume sayısı izin verilenin üzerindemi kontrol bitişi
	$files_active=$_config['files_active'];
	
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');

		
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('memberid',$user->getUserID());
	$tmpl->set('files_active',$files_active);
	
	$home_page=$tmpl->fetch('resume.form.quick.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
}

function new_resume()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();

    
	global $_lknBaseFramework,$_config;

	$user=new lknUser();
	$memberid=$user->getUserID();
	
	$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
	$credit_cost=$_config['credit_system_for_job_seekers_adding_a_resume_cost'];
	
	if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
		//kredi sistemi açık. kredisi yeterlimi
		
			$credit_data=lknJobsFunctions::getUserCredit($user->getUserID());
			
			if (count($credit_data)>0) {
				$total_credit=floatval($credit_data->credits);//toplam kredi
				
			}else {
				$total_credit=0;
			}
			
			 
			//bir işe başvurmak için kaç kredi gerekli
			if ($total_credit>=$credit_cost) {
				//eğer 1 işe başvurmak için gerekli kredi veya daha
				//fazlası varsa OK
			}else {
				$worker_panel='index.php?option=com_jobs&task=buy_credits' . $Itemid;
				$worker_panel=lknSef::url($worker_panel);
				$msg=_lkn_error_worker_need_more_credits_to_create_new_resume;
				$msg=str_replace('{COST}',$credit_cost,$msg);
				$msg=str_replace('{CURRENT_CREDITS}',$total_credit,$msg);
				//You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits;
				yonledir($worker_panel,$msg);
				return ;
			}

	}
	
	$itemid=lknJobsItemId();

		//pathway için başladı
			$link="index.php?option=com_jobs&task=worker".$itemid;
			$link=lknSef::url($link);
			$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

			$_lknBaseFramework->addToPathWay($name,$link);

			$link="index.php?option=com_jobs&task=new_resume".$itemid;
			$link=lknSef::url($link);
			$name=_lkn_resume_add;

			$_lknBaseFramework->addToPathWay($name,$link);

		//pathway için bitti


	//beklenen kullanıcı değilse geri gitsin. ACL
	$canDo=checkAcl('r');
	$c=checkJobSeekerFunctions();
	if ($canDo==false || $c==FALSE) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	//resume sayısı izin verilenin üzerindemi kontrol başlangıcı
	$resume_count_config=$_config['worker_resume_count'];
	if ($resume_count_config!='0') {
			$resume_count=lknJobsFunctions::getResumeCount($user->getUserID());
			//You have {ACTIVE_RESUME_COUNT} resume(s) and You can have total {ALLOWED_RESUME_COUNT} resume(s)

			if ($resume_count>=$resume_count_config) {
					$msg=_lkn_worker_resume_count;
					$msg=str_replace('{ACTIVE_RESUME_COUNT}',$resume_count,$msg);
					$msg=str_replace('{ALLOWED_RESUME_COUNT}',$resume_count_config,$msg);
					echo "<h1>$msg</h1>";
					return ;
			}
	}
	

		
	//resume sayısı izin verilenin üzerindemi kontrol bitişi
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');

		//resume file kontrolü başladı
			$files_active=$_config['files_active'];
			if ($files_active=='1') {
				$tmpl->set('id',0);
				$tmpl->set('memberid',$user->getUserID());
				$attach_count=$_config['files_attach_count'];
				if ($attach_count=='0') {
					$files_extra='';
				}else {
					//You must attach maximum {COUNT} files to this resume
					$msg=_lkn_error_files_attach_count;
					$msg=str_replace('{COUNT}',$attach_count,$msg);
					$files_extra='onchange="checkPos(this,\''.$msg.'\');"';
				echo '<script language="javascript">
						function checkPos(sel,err)
						{
							scount=checkSelect(sel,' . $attach_count.');
							if (scount>' . $attach_count.') 
							{
								alert (err);
							}
							return true;
						}
						function checkSelect(sel,smax)
						{
							scount=0;
							for(i=0;i<sel.length;i++)
							{
								if (sel.options[i].selected) scount++;
								if (scount>smax) sel.options[i].selected=false;
							}	
							return (scount);
						}
				</script>';
					
				}
				//$tmpl->set('attach_count',$attach_count);//@js nereye yazılacak
			}
		//resume file kontrolü bitti
		
		//resume field kategorileri alınmaya başladı
			$cats=lknJobsFields::getFieldCategories();
			
			$parent_id_array=lknJobsFields::getParentIdArray($cats);
		//resume field kategorileri alınması bitti
		//resume fieldları alınmaya başladı
			$row_fields=lknJobsFields::getResumeFields();
		//resume fieldları alınması bitti
		
		$fields=lknJobsFields::getFieldsArray($row_fields,'','0',$files_extra);
		$js=lknJobsFields::getJsCode($row_fields,'front');
		
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row_cats',$cats);
	$tmpl->set('fields_array',$fields);
	$tmpl->set('parent_id_array',$parent_id_array);
	$tmpl->set('memberid',$memberid);
	$tmpl->set('action',_lkn_resume_add);
	$tmpl->set('task','save_resume');
	$tmpl->set('id','');
	$tmpl->set('js',$js);
	$home_page=$tmpl->fetch('resume.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::resume_form();
}

function save_resume()
{
    global $_config,$_db;
   
    lknJobsFunctions::preventEmployerToSeeWorkerPanel();
    $Itemid=lknJobsItemId();
    $user=new lknUser();

   
    //beklenen kullanıcı değilse geri gitsin. ACL
    $params['memberid']=lknGetParamatre($_POST,'db_memberid');
   
    
    $canDo=checkAcl('o',$params);
    if ($canDo==false) {
        echo _lkn_error_acl_permission;
        return ;
    }
    //beklenen kullanıcı değilse geri gitsin. ACL

            //kredi sistemi işlemleri başladı
            $credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
            $credit_cost=$_config['credit_system_for_job_seekers_adding_a_resume_cost'];
            if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
                //kredi sistemi açık. kredisi yeterlimi
                    $credit_data=lknJobsFunctions::getUserCredit($user->getUserID());
                   
                    if (count($credit_data)>0) {
                        $total_credit=floatval($credit_data->credits);//toplam kredi
                    }else {
                        $total_credit=0;
                    }

                    //bir işe başvurmak için kaç kredi gerekli
                    if ($total_credit>=$credit_cost) {
                        //eğer 1 resume için gerekli kredi veya daha
                        //fazlası varsa OK
                    }else {
                        $worker_panel='index.php?option=com_jobs&task=buy_credits' . $Itemid;
                        $worker_panel=lknSef::url($worker_panel);
                        $msg=_lkn_error_worker_need_more_credits_to_create_new_resume;
                        $msg=str_replace('{COST}',$credit_cost,$msg);
                        $msg=str_replace('{CURRENT_CREDITS}',$total_credit,$msg);
                        //You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits;
                        yonledir($worker_panel,$msg);
                        return ;
                    }
                   
            }
           
            if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
                $params=array();
                $params['action']='4';
                $params['job_id']=$msg['id'];
                $params['user_id']=$user->getUserID();
                $params['credits']=$credit_cost;
                lknJobsFunctions::log_user_credits($params);
            }
	
    $link="index.php?option=com_jobs&task=worker" . $Itemid;
    $link=lknSef::url($link);
    yonledir($link,$msg['msg']);

}
function save_resume_quick()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
		global $_db,$_config,$_lknBaseFramework;

		//text resume için hangi editör kullanılacak


		$msg='';

		$memberid=lknGetParamatre($_POST,'db_memberid');

  
		$company_count=lknJobsFunctions::getCompanyCount($memberid);
		if ($company_count>0) {
			return _lkn_error_member_is_a_employer;
		}
		
			//kredi sistemi işlemleri başladı
			$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
			$credit_cost=$_config['credit_system_for_job_seekers_adding_a_resume_cost'];
			if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
				//kredi sistemi açık. kredisi yeterlimi
					$credit_data=lknJobsFunctions::getUserCredit($user->getUserID());
					
					if (count($credit_data)>0) {
						$total_credit=floatval($credit_data->credits);//toplam kredi
					}else {
						$total_credit=0;
					}

					//bir işe başvurmak için kaç kredi gerekli
					if ($total_credit>=$credit_cost) {
						//eğer 1 resume için gerekli kredi veya daha
						//fazlası varsa OK
					}else {
						$worker_panel='index.php?option=com_jobs&task=buy_credits' . $Itemid;
						$worker_panel=lknSef::url($worker_panel);
						$msg=_lkn_error_worker_need_more_credits_to_apply_job;
						$msg=str_replace('{COST}',$credit_cost,$msg);
						$msg=str_replace('{CURRENT_CREDITS}',$total_credit,$msg);
						//You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits;
						yonledir($worker_panel,$msg);
						return ;
					}
					
			}


		$data=lknGetFormValues();
		
	//beklenen kullanıcı değilse geri gitsin. ACL
		$params['memberid']=lknGetParamatre($_POST,'db_memberid');
		$canDo=checkAcl('o',$params);
		if ($canDo==false) {
			echo _lkn_error_acl_permission;
			return ;
		}
	//beklenen kullanıcı değilse geri gitsin. ACL

		$data['alias']=lknSef::getAlias($data['title']);

		$date=new lknDate();
		$data['created']=$date->getDate();
		
		$sql=$_db->CreateInsertSql($data,"#__jobs_resumes");
		$_db->query($sql);
		$_db->setQuery();
		
		
		$resume_id=$_db->get_insert_id();
	//resume veritabanına kayıt edildi. şimdi sırada dosyayı upload işlemi başladı
		$file=$_FILES["resume_file"]["name"];
		$upload;
		//echo $file;
		
		if ($file!='') {
			
			$file_folder=$_config['files_folder'];//dosyalar nerelerde saklanıcak
			$allowed_ext_app=lknCreateArrayForUpload($_config['files_file_types'],'application');
			$allowed_ext_image=lknCreateArrayForUpload($_config['files_image_types'],'image');
			$allowed_ext=array_merge($allowed_ext_app,$allowed_ext_image);

			$size=$_config['files_size'];//dosya boyutu in Kb
			$file=lknGetFilenameForUpload($file);
			$params=lknJobsFunctions::getResumeAttachmentParams();
			//print_r($params);
			$upload=lknFiles::upload('resume_file',$file_folder,$allowed_ext,$size,$file[0],$params);
			
					if ($upload=='1') {
						unset($data);
						$data=array();
						$data['file_name']=$file[0] . '.' .$file[1];
						$data['memberid']=$memberid;
						$data['published']='1';
						//upload işlemi başarılı
						
						$db_file=&lknDb::createInstance();
						$sql=$db_file->CreateInsertSql($data,"#__jobs_resume_files");
						//echo "$sql<br />";
						$db_file->query($sql);
						$db_file->setQuery();
						$file_id=$db_file->get_insert_id();
						
						$db_file2resume=&lknDb::createInstance();
						
							unset($data);
							$data=array();
							$data['resume_id']=$resume_id;
							$data['file_id']=$file_id;
							$sql=$db_file2resume->CreateInsertSql($data,'#__jobs_resume_files2resumes');
							//echo "$sql<br />";
							$db_file2resume->query($sql);
							$db_file2resume->setQuery();
							
							$msg=_lkn_added;
							
					}
		}
		//upload ile ilgili gerekli işlemler bitti
				
	//dosya upload işlemi bitti
	
	if ($msg=='') {
		$msg=_lkn_added . ' - '. _lkn_error_upload;		
	}
	
			if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
				$params=array();
				$params['action']='4';
				$params['job_id']=$resume_id;
				$params['user_id']=$user->getUserID();
				$params['credits']=$credit_cost;
				lknJobsFunctions::log_user_credits($params);
			}
  
	$link="index.php?option=com_jobs&task=worker";
	$link=lknSef::url($link);
	//echo "$link,".$msg;
	yonledir($link,$msg);
	

}

function apply_resume()
{


	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
	global $_config, $_db;
	$id = lknGetParamatre ($_REQUEST,'cid' );
		
		//MACF
    	//agregar los demas campos a ser guardados
    	//2do Universidad
    	$data['school1a']=$_POST['db_school1a'];
    	$data['school_city1a']=$_POST['db_school_city1a'];
    	$data['school_state1a']=$_POST['db_school_state1a'];
    	$data['study_area1a']=$_POST['db_study_area1a'];
    	$data['diploma_text1a']=$_POST['db_diploma_text1a'];
		$data['lknjobs_schooldiplomauniversity1a']=$_POST['db_lknjobs_schooldiplomauniversity1a'];
    	//1er 4to estudio
    
    	$data['school5']=$_POST['db_school5'];
    	$data['lknjobs_schooldiplomagrad5']=$_POST['db_lknjobs_schooldiplomagrad5'];
    	$data['school_city5']=$_POST['db_school_city5'];
    	$data['school_state5']=$_POST['db_school_state5'];
    	$data['study_area5']=$_POST['db_study_area5'];
    	$data['diploma_text5']=$_POST['db_diploma_text5'];
    	
    	//2do 4to estudio
    	$data['school6']=$_POST['db_school6'];
    	$data['lknjobs_schooldiplomagrad6']=$_POST['db_lknjobs_schooldiplomagrad6'];
    	$data['school_city6']=$_POST['db_school_city6'];
    	$data['school_state6']=$_POST['db_school_state6'];
    	$data['study_area6']=$_POST['db_study_area6'];
    	$data['diploma_text6']=$_POST['db_diploma_text6'];
    
    
    	//3er 4to estudio
    	$data['school7']=$_POST['db_school7'];
    	$data['lknjobs_schooldiplomagrad7']=$_POST['db_lknjobs_schooldiplomagrad7'];
    	$data['school_city7']=$_POST['db_school_city7'];
    	$data['school_state7']=$_POST['db_school_state7'];
    	$data['study_area7']=$_POST['db_study_area7'];
    	$data['diploma_text7']=$_POST['db_diploma_text7'];
    
    	//4to 4to estudio
    	$data['school8']=$_POST['db_school8'];
    	$data['lknjobs_schooldiplomagrad8']=$_POST['db_lknjobs_schooldiplomagrad8'];    
    	$data['school_city8']=$_POST['db_school_city7'];
    	$data['school_state8']=$_POST['db_school_state7'];
    	$data['study_area8']=$_POST['db_study_area7'];
    	$data['diploma_text8']=$_POST['db_diploma_text7'];
    
    	//1er otro estudio
    	$data['school9']=$_POST['db_school9'];
    	$data['lknjobs_schooldiplomaother9']=$_POST['db_lknjobs_schooldiplomaother9'];
    	$data['school_city9']=$_POST['db_school_city9'];
    	$data['school_state9']=$_POST['db_school_state9'];
    	$data['study_area9']=$_POST['db_study_area9'];
    	$data['diploma_text9']=$_POST['db_diploma_text9'];
    
    	//2do otro estudio
    	$data['school10']=$_POST['db_school10'];
    	$data['lknjobs_schooldiplomaother10']=$_POST['db_lknjobs_schooldiplomaother10'];
    	$data['school_city10']=$_POST['db_school_city10'];
    	$data['school_state10']=$_POST['db_school_state10'];
    	$data['study_area10']=$_POST['db_study_area10'];
    	$data['diploma_text10']=$_POST['db_diploma_text10'];
    
		//Oskar
		$db_civil = $_POST['db_civil'];
		$db_text_resume_discapacidad = $_POST['db_text_resume_discapacidad'];

	if ($id=='')
	{
		$msg=lknJobsFunctions::save_resume();
		$id=$msg['id'];
		$msg=$msg['msg'];
	
	}else {
		//Actualizar nuevos datos del usuario
		//<2011-03-17>
		$msg = lknJobsFunctions::update_resume($id);  
		$sqlUpdate="UPDATE #__jobs_resumes 
			SET civil = '$db_civil', 
				discapacidad 	= '".$db_text_resume_discapacidad."',
				school1a	 	= '".$data['school1a']."',
				school_city1a	= '".$data['school_city1a']."',
				school_state1a	= '".$data['school_state1a']."',
				study_area1a	= '".$data['study_area1a']."',
				diploma_text1a	= '".$data['diploma_text1a']."',
				diploma_text1a	= '".$data['diploma_text1a']."',
				lknjobs_schooldiplomauniversity1a	= '".$data['lknjobs_schooldiplomauniversity1a']."',
				school5			= '".$data['school5']."',
				lknjobs_schooldiplomagrad5 = '".$data['lknjobs_schooldiplomagrad5']."',
				school_city5	= '".$data['school_city5']."',
				school_state5	= '".$data['school_state5']."',
				study_area5		= '".$data['study_area5']."',
				diploma_text5	= '".$data['diploma_text5']."',
				school6			= '".$data['school6']."',
				lknjobs_schooldiplomagrad6 = '".$data['lknjobs_schooldiplomagrad6']."',
				school_city6	= '".$data['school_city6']."',
				school_state6	= '".$data['school_state6']."',
				study_area6		= '".$data['study_area6']."',
				diploma_text6	= '".$data['diploma_text6']."',
				
				school7			= '".$data['school7']."',
				lknjobs_schooldiplomagrad7 = '".$data['lknjobs_schooldiplomagrad7']."',
				school_city7	= '".$data['school_city7']."',
				school_state7	= '".$data['school_state7']."',
				study_area7		= '".$data['study_area7']."',
				diploma_text7	= '".$data['diploma_text7']."',
				
				school8			= '".$data['school8']."',
				lknjobs_schooldiplomagrad8 = '".$data['lknjobs_schooldiplomagrad8']."',
				school_city8	= '".$data['school_city8']."',
				school_state8	= '".$data['school_state8']."',
				study_area8		= '".$data['study_area8']."',
				diploma_text8	= '".$data['diploma_text8']."',
				
				school9			= '".$data['school9']."',
				lknjobs_schooldiplomaother9 = '".$data['lknjobs_schooldiplomaother9']."',
				school_city9	= '".$data['school_city9']."',
				school_state9	= '".$data['school_state9']."',
				study_area9		= '".$data['study_area9']."',
				diploma_text9	= '".$data['diploma_text9']."',
				
				school10			= '".$data['school10']."',
				lknjobs_schooldiplomaother10 = '".$data['lknjobs_schooldiplomaother10']."',
				school_city10	= '".$data['school_city10']."',
				school_state10	= '".$data['school_state10']."',
				study_area10	= '".$data['study_area10']."',
				diploma_text10	= '".$data['diploma_text10']."' 
			WHERE id=".$id;
					
		$_db->query($sqlUpdate);
		$_db->setQuery();  
	}
	 
	$url=lknSef::url("index.php?option=com_jobs&task=edit_resume&id=$id" . lknJobsItemId());
	yonledir ($url, $msg);
	
}

function publish_resume(){
	//beklenen kullanıcı değilse geri gitsin. ACL
		//burada acl $user_id parametresi eklenerek yapılmış durumda
		//ama kayıtlı kullanıcı olup olmadığına bak
	$canDo=checkAcl('r');
	if ($canDo==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db;
	$user=new lknUser();
	$user_id=$user->getUserID();

	$id=lknGetParamatre($_REQUEST,'id');

		$id=(int)$id;
		$sql="UPDATE #__jobs_resumes SET published='1' WHERE memberid='$user_id' AND id='$id'";
//		echo $sql;
		$_db->query($sql);
		$_db->setQuery();
		$effected_rows=$_db->getAffectedRows();
//		exit($effected_rows);
		if ($effected_rows!=1) {
			$msg=_lkn_error_acl_permission;
		}else
		{
			$msg=_lkn_updated;
		}

	yonledir("index.php?option=com_jobs&task=worker",$msg);

}

function unpublish_resume()
{
	//beklenen kullanıcı değilse geri gitsin. ACL
		//burada acl $user_id parametresi eklenerek yapılmış durumda
		//ama kayıtlı kullanıcı olup olmadığına bak
	$canDo=checkAcl('r');
	if ($canDo==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db;
	$user=new lknUser();
	$user_id=$user->getUserID();

	$id=lknGetParamatre($_REQUEST,'id');

		$id=(int)$id;
		$_db->query("UPDATE #__jobs_resumes SET published='0' WHERE memberid='$user_id' AND id='$id'");
		$_db->setQuery();
		$effected_rows=$_db->getAffectedRows();

		if ($effected_rows!=1) {
			$msg=_lkn_error_acl_permission;
		}else
		{
			$msg=_lkn_updated;
		}

	yonledir("index.php?option=com_jobs&task=worker",$msg);

}

function delete_employer_job()
{
	global $_db,$_lknBaseFramework,$_config;
	$id=lknGetParamatre($_REQUEST,'id');
	$id=explode(':',$id);
	$id=$id[0];
	
	$db_owner=&lknDb::createInstance();
	$sql="SELECT memberid FROM #__jobs_jobs AS j, #__jobs_companies AS c WHERE j.company_id=c.id AND j.id='$id'";
	$db_owner->query($sql);
	$db_owner->setQuery();
	$rows=$db_owner->loadObjectList();
	$count=count($rows);
	if ($count=='0') {
		//böyle bir iş yok
		echo _lkn_error_job_is_not_found;
		return;
	}else {
		//işi sahibi mi silmeye çalışıyor kontrolü başladı
			$memberid=$rows[0]->memberid;
			$params['memberid']=$memberid;
			$canDo=checkAcl('o',$params);
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
		//işi sahibi mi silmeye çalışıyor kontrolü bitti
				
		//işe ait başvuruların silinmesi başladı
		$db_a=&lknDb::createInstance();
		$sql="SELECT id FROM #__jobs_applications WHERE job_id='$id'";
		$db_a->query($sql);
		$db_a->setQuery();
		$rows=$db_a->loadObjectList();
		foreach ($rows AS $row){
			$value=$row->id;
			$_db->query("DELETE FROM #__jobs_email_history WHERE application='$value'");
			$_db->setQuery();
			
			$_db->query("DELETE FROM #__jobs_applications WHERE id='$value'");
			$_db->setQuery();
			
			//kredi harcanırken iş eklemiş olabilir. bunu silme başladı
				$_db->query("DELETE FROM #__jobs_credits_spending_history WHERE job_id='$value'");
				$_db->setQuery();
			//kredi harcanırken iş eklemiş olabilir. bunu silme bitti
		}
		//işe ait başvuruların silinmesi bitti

		//şimdi sıra işin silisine geldi
			$_db->query("DELETE FROM #__jobs_jobs WHERE id='$id'");
			$_db->setQuery();
		//işin silmesi bitti
					
	}
	
	yonledir("index.php?option=com_jobs&task=list_employer_jobs",_lkn_delete_info);
}

function delete_resume()
{
	global $_db,$_config,$_lknBaseFramework;
	$id=lknGetParamatre($_GET,'id');
	$id=explode(':',$id);
	$id=$id[0];

			//beklenen kullanıcı değilse geri gitsin. ACL
					$where[]="id='$id'";
					$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

					$sql="SELECT memberid";
					$sql.="\n FROM #__jobs_resumes";
					$sql.=$where;

					$cv_owner_id=lknDb::loadTable($sql);

					$cv_owner_id=$cv_owner_id->memberid;

					$params['memberid']=$cv_owner_id;
					$canDo=checkAcl('o',$params);
					if ($canDo==false) {
						echo _lkn_error_acl_permission;
						return ;
					}
			//beklenen kullanıcı değilse geri gitsin. ACL
			$prevent_to_delete_last=$_config['worker_prevent_to_delete_last_resume'];
			if ($prevent_to_delete_last=='1') {
				$resume_count=lknJobsFunctions::getResumeCount($cv_owner_id);
			}else {
				$resume_count='2';//1'den büyük bir rakam girdim
			}
			
			
			if ($resume_count>1) {
				//eğer adamın bunu sildiğinde en az bir aktif özgeçmişi varsa
				//silme işlemi gerçekleşebilir
				//cv'yi sahibi değiştirmeye çalışıyor
					$sql="SELECT id FROM #__jobs_applications WHERE resume_id='$id'";
					$hasApplications=lknGetCount($sql);
	
					if ($hasApplications==0) {
						//bu cv ile başvuru yapılmamış
						$image=lknDb::loadTable("SELECT image FROM #__jobs_resumes WHERE id='$id'");
						$image=$image->image;
						if ($image!='') {
							//eğer resim varsa bu resmide sil
							$upload_folder=$_lknBaseFramework->lknGetPath('root');
							$upload_folder=$upload_folder . str_replace('/',LKN_DS,$_config['resume_image_folder']);
							unlink($upload_folder. $image);
						}
	
	
						$_db->query("DELETE FROM #__jobs_resumes WHERE id='$id'");
						$_db->setQuery();
	
					}else
					{
						//eğer bu cv ile başvuru yapılmıi ise cv'yi kullanıcıya gösterme
						$_db->query("UPDATE #__jobs_resumes SET published='-2' WHERE id='$id'");
						$_db->setQuery();
					}
	
	
				$msg 		= _lkn_delete_info ;

			}else {
				$msg=_lkn_error_worker_prevent_to_delete_last_resume;
			}

	yonledir("index.php?option=com_jobs&task=worker",$msg);

}

function view_resume(){
	lknJobsFunctions::view_resume();
}


function apply_job_()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db,$_config;
	$user=new lknUser();
	$msg='';
	$data=lknGetFormValues('db2_');

	$default_status=$_config['default_status'];//adamın başvuru durumu ne? configuration dosyasından bunu oku
	$data['status']=$default_status;

	if (!isset($_POST['db2_resume_id'])) {
		$return=lknJobsFunctions::save_resume();
		$data['resume_id']=$return['id'];
	}
	
	
	
	$resume_id=$data['resume_id'];
	$job_id=$data['job_id'];
	
	//daha önce bu cv ile bu işe başvuru yapılmış mı kontrol başladı
		$sql="SELECT a.application_date AS application_date, r.title AS resume_title,r.name AS full_name";
		$sql.="\n FROM #__jobs_applications AS a, #__jobs_resumes AS r";
		$sql.="\n WHERE a.resume_id='$resume_id' AND  a.job_id='$job_id' AND a.resume_id=r.id";
		$_db->query($sql);
		$_db->setQuery();
		$hasApplication=$_db->loadObjectList();
		$count=$_db->num_rows();//eğer bu cv ile başvuru yapıldıysa bu değer 1'den büyük olacak

		if ($count==0) {
			
			//kredi sistemi işlemleri başladı
			$credit_system_for_job_seekers=$_config['credit_system_active_for_job_seekers'];
			$credit_cost=$_config['credit_system_for_job_seekers_applying_a_job_cost'];
			if ($credit_system_for_job_seekers=='1' and $credit_cost>0) {
				//kredi sistemi açık. kredisi yeterlimi
					$credit_data=lknJobsFunctions::getUserCredit($user->getUserID());
					
					if (count($credit_data)>0) {
						$total_credit=floatval($credit_data->credits);//toplam kredi
					}else {
						$total_credit=0;
					}
					
					
					//bir işe başvurmak için kaç kredi gerekli
					if ($total_credit>=$credit_cost) {
						//eğer 1 işe başvurmak için gerekli kredi veya daha
						//fazlası varsa OK
							$params=array();
							$params['action']='3';
							$params['job_id']=$job_id;
							$params['user_id']=$user->getUserID();
							$params['credits']=$credit_cost;
							lknJobsFunctions::log_user_credits($params);
					}else {
						$worker_panel='index.php?option=com_jobs&task=buy_credits' . $Itemid;
						$worker_panel=lknSef::url($worker_panel);
						$msg=_lkn_error_worker_need_more_credits_to_apply_job;
						$msg=str_replace('{COST}',$credit_cost,$msg);
						$msg=str_replace('{CURRENT_CREDITS}',$total_credit,$msg);
						//You do not have enough credits to apply this job. Applying this jobs requires {COST} credits but you have {CURRENT_CREDITS} credits;
						yonledir($worker_panel,$msg);
						return ;
					}
					
			}
	
				//kredi sistemi işlemleri bitti
				$date=new lknDate();
				$data['application_date']=$date->getDate();

				$sql=$_db->CreateInsertSql($data,"#__jobs_applications");
//				exit($sql);
				$_db->query($sql);
				$_db->setQuery();
				$thanks=$_config['thank_you_message'];
				/*
				{APPLICANT}: Full name of the applicant
				{JOB_NAME}:Job name
				{COMPANY_NAME}: Company Name
				*/
				$applicant_name=lknGetParamatre($_POST,'applicant_name');
				$thanks=str_replace('{APPLICANT}',$applicant_name,$thanks);

				$job_title=lknGetParamatre($_POST,'job_title');
				$thanks=str_replace('{JOB_NAME}',$job_title,$thanks);

				$company_name=lknGetParamatre($_POST,'company_name');
				$thanks=str_replace('{COMPANY_NAME}',$company_name,$thanks);

				$msg.=$thanks;
				//employer information mail başladı
					$inform_employer_config=$_config['employer_inform_on_application'];					
					$inform_employer=lknGetParamatre($_POST,'inform_employer');
					//echo "$inform_employer $inform_employer_config";
					if (($inform_employer=='1' and $inform_employer_config=='1') || $inform_employer=='2') {
						lknJobsFunctions::employerMail('have_application',lknGetParamatre($_POST,'company_id'));
					}
					
				//employer information mail bitti
				

		}else
		{
			$msg.=_lkn_error_application_made_before;

			$hasApplication=$hasApplication[0];
			$full_name=$hasApplication->full_name;
			$msg=str_replace('{FULL_NAME}',$full_name,$msg);

			$application_date=$hasApplication->application_date;
			$application_date=lknDate::formatDate($application_date);
			$msg=str_replace('{DATE}',$application_date,$msg);

			$resume_title=$hasApplication->resume_title;
			$msg=str_replace('{RESUME_TITLE}',$resume_title,$msg);

		}
		
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('msg',$msg);
	$home_page=$tmpl->fetch('apply.job.result.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');

}

function list_worker_applications()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();

			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db,$_lknBaseFramework;

	$itemid=lknJobsItemId();


	$params=array();

	$user=new lknUser();
	$user_id=$user->getUserID();

	$where[]="a.job_id=j.id";
	$where[]="a.resume_id=r.id";
	$where[]="r.memberid='$user_id'";
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
	$sql.="\n #__jobs_jobs AS j";
	$sql.=$where;

	$application_count=lknGetCount($sql);

	$sql="SELECT a.*,r.title AS resume_title,r.memberid AS memberid,j.title AS job_title,company.title AS company_title,";
	$sql.="c.title AS category_name,s.title AS status_name,j.published as job_published,j.publish_up as job_publish_up,j.publish_down as job_publish_down";
	$sql.="\n FROM #__jobs_applications AS a,";
	$sql.="\n #__jobs_resumes AS r,";
	$sql.="\n #__jobs_status AS s,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_companies AS company,";
	$sql.="\n #__jobs_jobs AS j";
	$sql.=$where;
	$sql.="\n ORDER BY a.application_date DESC";
	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	//print_r($_db);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//pathway için başladı
	$link="index.php?option=com_jobs&task=worker".$itemid;
	$link=lknSef::url($link);
	$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

	$_lknBaseFramework->addToPathWay($name,$link);

	$link="index.php?option=com_jobs&task=list_worker_applications".$itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_worker_my_applications,$link);
	//pathway için bitti

	//tarihler başladı
		$date=new lknDate();
		$now=$date->getDate();
		
		$null_date=$_db->getNullDate();
		
	//tarih işlemleri bitti
	
	//sayfalama için linkler oluşturulmaya başladı
		
		$sayfa=new lknSayfalama("index.php?option=com_jobs&task=list_worker_applications".$itemid,$application_count);
		$paging_links=$sayfa->sayfaLinkiYaz();
	//sayfalama için linkler oluşturulmaya başladı	
	
 
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	//açıklama tablosu oluşturuluyor
	 	$info_table=$tmpl->fetch('list.worker.applications.info.table.php');
	//açıklama tablosu oluştu

	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('application_count',$application_count);
	$tmpl->set('nullDate',$null_date);
	$tmpl->set('now',$now);
	$tmpl->set('info_table',$info_table);
	$tmpl->set('itemid',$itemid);
	$home_page=$tmpl->fetch('list.worker.applications.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::list_worker_applications($params,$rows);
}

/**
 * çalışanın başvuru sırasında yazdığı ön yazıyı değiştirmek için kullanılacak
 *
 */
function edit_worker_application_cover_letter()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();

	global $_db,$_lknBaseFramework;
	$id=lknGetParamatre($_GET,'id');

	if ($id!='' && isset($id)) {
		$where[]="a.resume_id=r.id";
		$where[]="a.job_id=j.id";
		$where[]="a.id='$id'";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT a.*,r.memberid as memberid,j.title AS job_title";
		$sql.="\n FROM #__jobs_applications AS a,";
		$sql.="\n #__jobs_jobs AS j,";
		$sql.="\n #__jobs_resumes AS r";
		$sql.=$where;

		$_db->query($sql);
//		echo $sql;
		$_db->setQuery();
		$row=$_db->getFistRecord();

			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$row->memberid;//lknGetParamatre($_POST,'db_memberid');
			$canDo=checkAcl('o',$params);
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

			$itemid=lknJobsItemId();

				$user=new lknUser();
				//pathway için başladı
					$link="index.php?option=com_jobs&task=worker".$itemid;
					$link=lknSef::url($link);
					$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

					$_lknBaseFramework->addToPathWay($name,$link);

					$link="index.php?option=com_jobs&task=list_worker_applications".$itemid;
					$link=lknSef::url($link);

					$_lknBaseFramework->addToPathWay(_lkn_worker_my_applications,$link);

					$link="index.php?option=com_jobs&task=edit_worker_application_cover_letter&id=$id" . $itemid;
					$link=lknSef::url($link);

					$_lknBaseFramework->addToPathWay(_lkn_cover_letter . ': ' . $row->job_title,$link);

				//pathway için bitti

		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('row',$row);
		$home_page=$tmpl->fetch('worker.application.cover.letter.form.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
		
		//htmlFrontJobs::worker_application_cover_letter_form($row);



	}else
	{
		echo _lkn_error;
	}
}

/**
 * çalışanın başvuru sırasında yazdığı ön yazıyı değiştirmek için kullanılacak
 *
 */
function update_worker_application_cover_letter()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
				//buraya acl gerekmez. kullanıcı zaten kedine ait cover letter'ı görebilir.
				//edit_worker_application_cover_letter() fonksiyonunda var
			//beklenen kullanıcı değilse geri gitsin. ACL
	global $_db;
	$id=(int)lknGetParamatre($_POST,'cid');

//		$data=array();
//		foreach ($_POST as $key=>$val)
//		{
//			if (strstr($key,'db_')) {
//				$data[lknText::cleanFirst($key,'db_')]=$val;
//			}
//		}

		$data=lknGetFormValues();



	$sql=$_db->CreateUpdateSql($data,"#__jobs_applications","id='$id'");
	$_db->query($sql);
	$_db->setQuery();

	yonledir("index.php?option=com_jobs&task=list_worker_applications",_lkn_updated);


}

function print_worker_application_email_history()
{
	global $_lknBaseFramework,$_db;

	$itemid=lknJobsItemId();

		$application_id=lknGetParamatre($_REQUEST,'application_id');

		$application_id=(int)$application_id;

		$where[]="a.resume_id=r.id";
		$where[]="a.job_id=j.id";
		$where[]="a.id='$application_id'";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT r.memberid,j.title as job_title";
		$sql.="\n FROM #__jobs_applications AS a,";
		$sql.="\n #__jobs_resumes AS r,";
		$sql.="\n #__jobs_jobs AS j";
		$sql.=$where;
		$_db->query($sql);
		$_db->setQuery();		
		$rows=$_db->loadObjectList();
		
		$count=$_db->num_rows();
		if ($count==0) {
			//eğer böyle bi şey yok ise
			//ya hatalı bilink var
			//ya da allengirli bi iş peşindeler
			echo 'Application is not found.';
			return ;
		}
		
		$row=$rows[0];

			//beklenen kullanıcı değilse geri gitsin. ACL
			$applicant_id=$row->memberid;
			$params['memberid']=$applicant_id;
			$canDo=checkAcl('o',$params);
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL


				$user=new lknUser();
				//pathway için başladı
					$link="index.php?option=com_jobs&task=worker".$itemid;
					$link=lknSef::url($link);
					$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

					$_lknBaseFramework->addToPathWay($name,$link);

					$link="index.php?option=com_jobs&task=list_worker_applications".$itemid;
					$link=lknSef::url($link);

					$_lknBaseFramework->addToPathWay(_lkn_worker_my_applications,$link);

					$link="index.php?option=com_jobs&task=edit_worker_application_cover_letter&id=$application_id" . $itemid;
					$link=lknSef::url($link);

					$_lknBaseFramework->addToPathWay(_lkn_worker_response . ': ' . $row->job_title,$link);

				//pathway için bitti

	$email_id=lknGetParamatre($_REQUEST,'email_id');
	
	$row=lknJobsFunctions::getEmailHistory($application_id,$applicant_id,'worker');
//	print_r($row);
		//sayfalama için linkler oluşturulmaya başladı
			
			$sayfa=new lknSayfalama("index.php?option=com_jobs&task=print_worker_application_email_history".$itemid,$count);
			$paging_links=$sayfa->sayfaLinkiYaz();
		//sayfalama için linkler oluşturulmaya başladı	
		
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');

	
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('rows',$row);
		$tmpl->set('paging_links',$paging_links);
		$tmpl->set('count',$count);
		$tmpl->set('itemid',$itemid);
		$tmpl->set('email_id',$email_id);
		$home_page=$tmpl->fetch('print.worker.application.email.history.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::print_worker_application_email_history($row);


}

function list_worker_files()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db,$_lknBaseFramework,$_config;

	$itemid=lknJobsItemId();

	$params=array();
	$user=new lknUser();
	$user_id=$user->getUserID();
	$where[]="f.memberid='$user_id'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT f.id";
	$sql.="\n FROM #__jobs_resume_files AS f";
	$sql.=$where;

	$count=lknGetCount($sql);

	$sql="SELECT f.*";
	$sql.="\n FROM #__jobs_resume_files AS f";
	$sql.=$where;
	$sql.=$_db->getLimit();
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//pathway için başladı
	$link="index.php?option=com_jobs&task=worker".$itemid;
	$link=lknSef::url($link);
	$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

	$_lknBaseFramework->addToPathWay($name,$link);

	$link="index.php?option=com_jobs&task=list_worker_files".$itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_list_files,$link);
	//pathway için bitti
	
		//sayfalama için linkler oluşturulmaya başladı
			$link="index.php?option=com_jobs&task=list_worker_files".$itemid;
			$sayfa=new lknSayfalama($link,$count);
			$paging_links=$sayfa->sayfaLinkiYaz();
		//sayfalama için linkler oluşturulmaya başladı

		//toplam dosya adedi kontrolü başladı
			$config_total=$_config['files_own_count'];
			if ($config_total=='0') {
				$file_count_note='';
				$link="index.php?option=com_jobs&task=new_worker_file".$itemid;
				$link=lknSef::url($link);
				$link_message=_lkn_files_file_new;
				//yani unlimited olsun demişler
			}else {
				if ($count>=$config_total) {
					$link="javascript:void(0)";
					$link_message=_lkn_files_file_new_is_not_allowed;
				}else {
					$link="index.php?option=com_jobs&task=new_worker_file".$itemid;
					$link=lknSef::url($link);
					$link_message=_lkn_files_file_new;					
				}
				
				//You have {COUNT} file(s) and You can have maximum {TOTAL} file(s)
				$file_count_note=_lkn_worker_files_count_info;
				$file_count_note=str_replace('{COUNT}',$count,$file_count_note);
				$file_count_note=str_replace('{TOTAL}',$config_total,$file_count_note);
			}
		//toplam dosya adedi kontrolü bitti
		
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('rows',$rows);
		$tmpl->set('count',$count);
		$tmpl->set('file_count_note',$file_count_note);
		$tmpl->set('itemid',$itemid);
		$tmpl->set('link',$link);
		$tmpl->set('link_message',$link_message);
		$tmpl->set('paging_links',$paging_links);
		$home_page=$tmpl->fetch('list.worker.files.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
	
}

function new_worker_file()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
	
	global $_db,$_lknBaseFramework,$_config;
	
	$itemid=lknJobsItemId();

		
	//pathway için başladı
		$user=new lknUser();
		$link="index.php?option=com_jobs&task=worker".$itemid;
		$link=lknSef::url($link);
		$name=str_replace('{NAME}',$user->getName(),_lkn_worker);
	
		$_lknBaseFramework->addToPathWay($name,$link);
	
		$link="index.php?option=com_jobs&task=list_worker_files".$itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_list_files,$link);
	
		$link="index.php?option=com_jobs&task=new_worker_file".$itemid;

		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_files_file_new,$link);
	//pathway için bitti
	
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
			//dosya sayısı olayını config panelinden okuma başladı
				$config_file_count=$_config['files_own_count'];
				if ($config_file_count!='0') {
					$memberid=$user->getUserID();
					//yani admin efendi bir sınırlama getirmiş.bunu kontrol edelim
					$sql="SELECT id FROM #__jobs_resume_files WHERE memberid='$memberid'";
					$file_count=lknGetCount($sql);
					if ($file_count>=$config_file_count) {
						//You have {COUNT} file(s) and You can have maximum {TOTAL} file(s)
						$file_count_note=_lkn_worker_files_count_info;
						$file_count_note=str_replace('{COUNT}',$file_count,$file_count_note);
						$file_count_note=str_replace('{TOTAL}',$config_file_count,$file_count_note);
						$url="index.php?option=com_jobs&task=list_worker_files".$itemid;
						$url=lknSef::url($url);
						yonledir($url,$file_count_note);
						return ;			
	
					}
				}
				
			//dosya sayısı olayını config dosyasından okuma bitti
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('row','');
		$tmpl->set('itemid',$itemid);
		$tmpl->set('row_resumes','');
		$tmpl->set('memberid',$user->getUserID());
		$home_page=$tmpl->fetch('file.form.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
}

function apply_worker_file(){
	
	$id=lknGetParamatre($_POST,'cid');
	global $_db;
	$itemid=lknJobsItemId();
	
	if ($id=='') {
		//yani ilk defa milli oluyosa
		$msg=lknJobsFunctions::save_file();
		$id=$msg['id'];
		$msg=$msg['msg'];
		if ($id!='') {
			$url="index.php?option=com_jobs&task=edit_worker_file&id=$id".$itemid;
		}else {
			$url="index.php?option=com_jobs&task=list_worker_files".$itemid;	
		}
		
	}else 
	{
		$msg=lknJobsFunctions::update_file($id);
		$url="index.php?option=com_jobs&task=edit_worker_file&id=$id".$itemid;	
	}
	
	
	$url=lknSef::url($url);
	yonledir($url,$msg);
	
}

function save_worker_file(){
	
	$itemid=lknJobsItemId();
	
	$msg=lknJobsFunctions::save_file();
	
	$url="index.php?option=com_jobs&task=list_worker_files".$itemid;
	$url=lknSef::url($url);
	yonledir($url,$msg['msg']);
		
}

function edit_worker_file()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
	
	global $_db,$_lknBaseFramework;
	$cid=lknGetParamatre($_REQUEST,'id');
	if (is_array($cid)) {
		$cid=(int)$cid[0];
	}
	
	$itemid=lknJobsItemId();
	
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
		
	//pathway için başladı
		$user=new lknUser();
		$link="index.php?option=com_jobs&task=worker".$itemid;
		$link=lknSef::url($link);
		$name=str_replace('{NAME}',$user->getName(),_lkn_worker);
	
		$_lknBaseFramework->addToPathWay($name,$link);
	
		$link="index.php?option=com_jobs&task=list_worker_files".$itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_list_files,$link);
	
		$link="index.php?option=com_jobs&task=edit_worker_file&id=$cid".$itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_edit . ': ' . $row->file_name,$link);
	//pathway için bitti
	
			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$row->memberid;
			$canDo=checkAcl('o',$params);
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$row_resumes=lknJobsFunctions::getFileResumes($cid);
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('row',$row);
		$tmpl->set('itemid',$itemid);
		$tmpl->set('row_resumes',$row_resumes);
		$tmpl->set('memberid',$row->memberid);
		$home_page=$tmpl->fetch('file.form.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
		
		//HTML_jobs::file_form($row,$resume_rows);
	}else 
	{
		echo _lkn_error;
	}
}

function update_worker_file(){
	$itemid=lknJobsItemId();
	$id=lknGetParamatre($_POST,'cid');
	$msg=lknJobsFunctions::update_file($id);
	
	$url="index.php?option=com_jobs&task=list_worker_files".$itemid;
	$url=lknSef::url($url);
	yonledir($url,$msg);
		
}

function send_resume_file(){
	$id=lknGetParamatre($_GET,'id');
	$resume_id=lknGetParamatre($_GET,'resume_id');
	lknJobsSendFile($id,$resume_id);
}


function list_worker_cover_letters(){
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db,$_lknBaseFramework;

	$itemid=lknJobsItemId();

	$params=array();
	$user=new lknUser();
	$user_id=$user->getUserID();
	$where[]="c.memberid='$user_id'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT c.id";
	$sql.="\n FROM #__jobs_cover_letters AS c";
	$sql.=$where;

	$count=lknGetCount($sql);

	$sql="SELECT c.*";
	$sql.="\n FROM #__jobs_cover_letters AS c";
	$sql.=$where;
	$sql.=$_db->getLimit();
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	//pathway için başladı
	$link="index.php?option=com_jobs&task=worker".$itemid;
	$link=lknSef::url($link);
	$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

	$_lknBaseFramework->addToPathWay($name,$link);

	$link="index.php?option=com_jobs&task=list_worker_cover_letters".$itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_list_cover_letters,$link);
	//pathway için bitti
	
		//sayfalama için linkler oluşturulmaya başladı
			//@TODO:BU SAYFALAMA LİNKLERİNİ KONTROL. ABUKLUK YAPACAK. İTEMİD İSSUE
			$link="index.php?option=com_jobs&task=list_worker_cover_letters".$itemid;
			$sayfa=new lknSayfalama($link,$count);
			$paging_links=$sayfa->sayfaLinkiYaz();
		//sayfalama için linkler oluşturulmaya başladı	
		
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('rows',$rows);
		$tmpl->set('count',$count);
		$tmpl->set('itemid',$itemid);
		$tmpl->set('paging_links',$paging_links);
		$home_page=$tmpl->fetch('list.worker.cover.letters.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::list_worker_cover_letters($params,$rows);
}

//Oskar
//Funcióm para obtener una vista de la carta de presentación
//function view_worker_cover_letter()
//{
	//global $_db,$_config,$_lknBaseFramework;
	
//}

function edit_worker_cover_letter()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
	global $_db, $_lknBaseFramework;

	$itemid=lknJobsItemId();

	$cid=(int)lknGetParamatre($_REQUEST,'id');
	if ($cid!='' && isset($cid)) {
		$where[]="c.id='$cid'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT c.*";
	$sql.="\n FROM #__jobs_cover_letters AS c";
	$sql.=$where;

	$_db->query($sql);
	$_db->setQuery();
	$row=$_db->getFistRecord();

	//pathway için başladı
		$user=new lknUser();
		$link="index.php?option=com_jobs&task=worker".$itemid;
		$link=lknSef::url($link);
		$name=str_replace('{NAME}',$user->getName(),_lkn_worker);
	
		$_lknBaseFramework->addToPathWay($name,$link);
	
		$link="index.php?option=com_jobs&task=list_worker_cover_letters".$itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_list_cover_letters,$link);
	
		$link="index.php?option=com_jobs&task=edit_worker_cover_letter&id=$cid".$itemid;
		$link=lknSef::url($link);
	
		$_lknBaseFramework->addToPathWay(_lkn_cover_letter . ': ' . $row->title,$link);
	//pathway için bitti

			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=$row->memberid;
			$canDo=checkAcl('o',$params);
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('row',$row);
		$home_page=$tmpl->fetch('cover.letter.form.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
		
		//htmlFrontJobs::worker_cover_letter_form($row);
	}else
	{
		echo _lkn_error;
	}
}
function new_worker_cover_letter()
{
	lknJobsFunctions::preventEmployerToSeeWorkerPanel();
	global $_lknBaseFramework;

	$itemid=lknJobsItemId();

	//pathway için başladı
	$user=new lknUser();
	$link="index.php?option=com_jobs&task=worker".$itemid;
	$link=lknSef::url($link);
	$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

	$_lknBaseFramework->addToPathWay($name,$link);

	$link="index.php?option=com_jobs&task=list_worker_cover_letters".$itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_list_cover_letters,$link);

	$link="index.php?option=com_jobs&task=edit_worker_cover_letter".$itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_cover_letter_add,$link);

	//pathway için bitti

			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$c=checkJobSeekerFunctions();
			if ($canDo==false || $c==FALSE) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('row','');
		$home_page=$tmpl->fetch('cover.letter.form.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
		
	//htmlFrontJobs::worker_cover_letter_form();
}

function save_worker_cover_letter()
{
	lknJobsFunctions::save_cover_letter();
	yonledir("index.php?option=com_jobs&task=list_worker_cover_letters",_lkn_added);

}


function update_worker_cover_letter()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
			$params['memberid']=lknGetParamatre($_POST,'db_memberid');//$row->memberid;
			$canDo=checkAcl('o',$params);
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	lknJobsFunctions::update_cover_letter();
	yonledir("index.php?option=com_jobs&task=list_worker_cover_letters",_lkn_updated);

}

function publish_worker_cover_letter()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
				/**
				 * kullanıcı zaten $user_id parametresi
				 * eklenerek kendi ön yazılarını publish etmesi sağlanıyor.
				 * yalnızca kayıtlı biri olup olmadığına bak
				 */
			$canDo=checkAcl('r');
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL


	global $_db;
	$user=new lknUser();
	$user_id=$user->getUserID();

	$id=lknGetParamatre($_REQUEST,'id');

		$id=(int)$id;
		$sql="UPDATE #__jobs_cover_letters SET published='1' WHERE memberid='$user_id' AND id='$id'";
//		echo $sql;
		$_db->query($sql);
		$_db->setQuery();
		$effected_rows=$_db->getAffectedRows();
//		exit($effected_rows);
		if ($effected_rows!=1) {
			$msg=_lkn_error_acl_permission;
		}else
		{
			$msg=_lkn_updated;
		}

	yonledir("index.php?option=com_jobs&task=list_worker_cover_letters",$msg);

}

function unpublish_worker_cover_letter()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
				/**
				 * kullanıcı zaten $user_id parametresi
				 * eklenerek kendi ön yazılarını unpublish etmesi sağlanıyor.
				 * yalnızca kayıtlı biri olup olmadığına bak
				 */
			$canDo=checkAcl('r');
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	global $_db;
	$user=new lknUser();
	$user_id=$user->getUserID();

	$id=lknGetParamatre($_REQUEST,'id');

		$id=(int)$id;
		$_db->query("UPDATE #__jobs_cover_letters SET published='0' WHERE memberid='$user_id' AND id='$id'");
		$_db->setQuery();
		$effected_rows=$_db->getAffectedRows();

		if ($effected_rows!=1) {
			$msg=_lkn_error_acl_permission;
		}else
		{
			$msg=_lkn_updated;
		}

	yonledir("index.php?option=com_jobs&task=list_worker_cover_letters",$msg);

}

function delete_worker_cover_letter()
{
		global $_db,$_config,$_lknBaseFramework;
		$id=(int)lknGetParamatre($_GET,'id');
		//beklenen kullanıcı değilse geri gitsin. ACL
		$where[]="id='$id'";
		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT memberid";
		$sql.="\n FROM #__jobs_cover_letters";
		$sql.=$where;

		$cv_owner_id=lknDb::loadTable($sql);
		$cv_owner_id=$cv_owner_id->memberid;

		$params['memberid']=$cv_owner_id;
		$canDo=checkAcl('o',$params);
		if ($canDo==false)
		{
			echo _lkn_error_acl_permission;
			return ;
		}
		//beklenen kullanıcı değilse geri gitsin. ACL
		//ön yazıyı'yi sahibi değiştirmeye çalışıyor
		$_db->query("DELETE FROM #__jobs_cover_letters WHERE id='$id'");
		$_db->setQuery();
		$msg = _lkn_delete_info ;
		yonledir("index.php?option=com_jobs&task=list_worker_cover_letters",$msg);

}

function advanced_search()
{
	global $_lknBaseFramework,$_config;

	$Itemid=lknJobsItemId();
	$cat=new lknCategory();
	//pathway için başladı

	$link="index.php?option=com_jobs&task=advanced_search". $Itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_search_detailed,$link);

	//pathway için bitti

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
		//kategorileri almaya başladım
			$cat=new lknCategory();
			//$category_list=$cat->getCategoryList('job_category[]','','multiple="multiple" size="8"',1);//kategori listesini selectbox olarak alır
			$category_list=$cat->getCategoryCheckBox('job_category[]','',' style="width: 75%;"');//kategori listesini checkbox olarak alır			
		//kategori alma iişi bitti	
		
		//job lokasyonları alınması başladı
			$job_countries=lknJobsFunctions::getJobCountries('job_country[]','','multiple="multiple" size="8"',1);
		//job lokasyonları alınması bitti
		
		//tek bir ülke için mi kullanılıyor
			$make_national=$_config['make_jobs_national'];
		//tek bir ülke için mi kullanılıyor
		


		$tmpl->set('category_list',$category_list);
		$tmpl->set('job_countries',$job_countries);
		$tmpl->set('make_national',$make_national);
		$tmpl->set('ItemId',lknJobsItemId(true));
		$value=$tmpl->fetch('advanced.search.form.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('value',$value);
		echo $tmpl->fetch('public.container.php');
				
	//htmlFrontJobs::job_search_form($cat,'advanced');
}

function search_jobs()
{
	global $_db,$_lknBaseFramework,$_config;
	$Itemid=lknJobsItemId();

	$link_search="index.php?";

		
	$detailed_results=lknGetParamatre($_GET,'detailed_results');
	$params['detailed_results']=$detailed_results;

	$hasValue=0;
	//bu değer kullanıcının arama için herhangi bir değer girip girmediğini kontrol eder

	//İŞ KATEGORİLERİ BAŞLANGICI
	$job_category=lknGetParamatre($_GET,'job_cat');
	if ($job_category!='') {
		if (substr($job_category, 0, 1)==',') {
			$job_category=lknText::cleanFirst($job_category,',');
		}		
		//echo $job_category;
		$link_search.='&job_cat='.$job_category;
		$where[]="j.cat_id IN ($job_category)";
		$hasValue=1;
		
	}
	//İŞ KATEGORİLERİ BİTİŞİ


	//İŞ ülkeleri BAŞLANGICI
	$job_country=lknGetParamatre($_GET,'job_country');
	if ($job_country!='') {
		foreach ($job_country as $key=>$value)
		{
			  if (is_null($value) || $value=='' ) {
			    unset($job_country[$key]);
			  }else {
			  	$link_search.='&job_country[]='.$value;
			  }
		}
		if (count($job_country)>0) {
			$where[]="j.country IN (" . implode(',', $job_country) .")";
			$hasValue=1;
		}
	}
	//İŞ ülkeleri BİTİŞİ

	//KELİME BAŞLANGICI
	$search_word=lknGetParamatre($_GET,'search_word');
	if ($search_word!=_lkn_search_word && $search_word!='') {
		$search_word=lknText::strToLower($search_word);
		$where[]="((LOWER(j.title) LIKE '%$search_word%')
				OR (LOWER(j.description) LIKE '%$search_word%')
				OR (LOWER(j.qualifications) LIKE '%$search_word%'))";
		$link_search.='&search_word='.urlencode(temizleSlash($search_word));
		$hasValue=1;
	}
	//KELİME BİTİŞİ
	
	//job city başlangıcı
		$job_city=lknGetParamatre($_GET,'job_city');
		if ($job_city!='') {
			$job_city=ucfirst($job_city);
			$where[]="(j.city LIKE '%$job_city%')";
			$link_search.='&job_city='.urlencode(temizleSlash($job_city));
			$hasValue=1;
		}
	//job city bitişi
	
	//job city başlangıcı
		$job_state=lknGetParamatre($_GET,'job_state');
		if ($job_state!='') {
			$job_state=ucfirst($job_state);
			$where[]="(j.state LIKE '%$job_state%')";
			$link_search.='&job_state='.urlencode(temizleSlash($job_state));
			$hasValue=1;
		}
	//job city bitişi

	//MAAŞ BAŞLANGICI
	$job_minsalary=lknGetParamatre($_GET,'job_minsalary');
	$job_maxsalary=lknGetParamatre($_GET,'job_maxsalary');
	if ($job_maxsalary!='') {
		$job_maxsalary=(int)$job_maxsalary;
		$where[]="j.salary<$job_maxsalary";
		$link_search.="&job_maxsalary=$job_maxsalary";
		$hasValue=1;
	}

	if ($job_minsalary!='') {
		$job_minsalary=(int)$job_minsalary;
		$where[]="j.salary>$job_minsalary";
		$link_search.="&job_minsalary=$job_minsalary";
		$hasValue=1;
	}

	if ($job_maxsalary!='' || $job_minsalary!='')
	{
		$where[]="j.show_salary='1'";
		$hasValue=1;
	}
	//MAAŞ BİTİŞİ

	//İŞ TÜRÜ BAŞLANGICI
	$job_type=lknGetParamatre($_GET,'job_type');
	if ($job_type!='') {
		foreach ($job_type as $key=>$value)
		{
			  if (is_null($value) || $value=='' ) {
			    unset($job_type[$key]);
			  }else {
			  	$link_search.='&job_type[]='.$value;
			  }
		}
		if (count($job_type)>0) {
			$where[]="j.job_type IN (" . implode(',', $job_type) .")";
			
			//@todo:bu fonksiyondaki döngüleri kontrol et. hata veriyor
			$hasValue=1;
		}
	}
	//İŞ TÜRÜ BİTİŞİ

	//İŞ EĞİTİM SEVİYESİ
	$job_degree=lknGetParamatre($_GET,'job_degree');
	if ($job_degree!='') {
		foreach ($job_degree as $key=>$value)
		{
			  if (is_null($value) || $value=='' ) {
			    unset($job_degree[$key]);
			  }else {
			  	$link_search.='&job_degree[]='.$value;
			  }
		}
		if (count($job_degree)>0) {
			$where[]="j.degree IN (" . implode(',', $job_degree) .")";
			$hasValue=1;
		}
	}
	//İŞ EĞİTİM SEVİYESİ

	//DENEYİM BAŞLANGICI
	$job_experience_minimum=lknGetParamatre($_GET,'job_experience_minimum');
	$job_experience_maximum=lknGetParamatre($_GET,'job_experience_maximum');
	if ($job_experience_minimum!='') {
		$job_experience_minimum=(int)$job_experience_minimum;
		$where[]="j.experience>$job_experience_minimum";
		$link_search.="&job_experience_minimum=$job_experience_minimum";
		$hasValue=1;
	}

	if ($job_experience_maximum!='') {
		$job_experience_maximum=(int)$job_experience_maximum;
		$where[]="j.experience<$job_experience_maximum";
		$link_search.="&job_experience_maximum=$job_experience_maximum";
		$hasValue=1;
	}
	//DENEYİM BİTİŞİ

		$link_search.="&option=com_jobs";
		$link_search.="&task=search_jobs";
		
		$detail="$link_search&detailed_results=1$Itemid";
		$linkdetail=lknSef::url($detail);
		
		$link_search.="&task=search_jobs";
		
		$detail="$link_search&detailed_results=1$Itemid";
		$linkdetail=lknSef::url($detail);
		
		$brief="$link_search&detailed_results=0$Itemid";
		$brief=lknSef::url($brief);
		
		if ($detailed_results==1) {
			//detail linksiz
			$detail=_lkn_search_detail;
			$brief="<a href=\"$brief\">" . _lkn_search_brief. "</a>";
			
		}else 
		{
			$detail="<a href=\"$detail\">" . _lkn_search_detail. "</a>";
			$brief=_lkn_search_brief;
		}
		
	if ($hasValue==0) {
		//kullanıcı arama için hiçbir değer girmemiş.
		echo '<br />
		<div id="linkredirectresume">
		<a href="/index.php?option=com_jobs&Itemid=6" id="titletopfrontal" />
			<img title="Regresar al inicio" src="/components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div>
		<h1 id="advSrchdefault">' . _lkn_error_no_input_for_job_search . '</h1><br />';
		echo "<table id='tools_employees' cellpadding='5' cellspacing='0'><thead><tr><th></th></tr></thead>	              <tbody><tr><td class='textresult'><h3><a href=\"" . lknSef::url("index.php?option=com_jobs&task=advanced_search" . $Itemid) . "\">". _lkn_search_new. "</a></h3></td></tr></tbody></table><br /><br /><br /><br /><br /><br />";
		return ;
	}
	$date=new lknDate();
	$now= $date->getDate();
	$nullDate	= $_db->getNullDate();

	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";

	$where[]="j.country=country.id";
	$where[]="j.cat_id=category.id";
	$where[]="j.company_id=company.id";
	$where[]="j.published='1'";
	$where[]="country.published='1'";
	$where[]="company.published='1'";
	$where[]="category.published='1'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );


	$sql="SELECT j.id";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_countries AS country,";
	$sql.="\n #__jobs_categories AS category,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;

	$job_count=lknGetCount($sql);
//echo $sql;
	if ($job_count==0) {
		echo _lkn_error_search_job_no_result.'<br />';
		echo "
		<table cellspacing='0' border='0' cellpadding='5' id='tools_employees'><thead><tr><th></th></tr></thead><tbody><tr><td><h3>
		<a href=\"" . lknSef::url("index.php?option=com_jobs&task=advanced_search" . $Itemid) . "\">". _lkn_search_new. "</a></h3></td></tr></tbody></table><br /><br /><br /><br />";
		return ;
	}

	$sql="SELECT j.*,company.title AS company_title, company.alias AS company_alias,";
	$sql.="\n country.title AS country_title,category.title AS category_title, category.alias AS category_alias";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_countries AS country,";
	$sql.="\n #__jobs_categories AS category,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
	$sql.=$_db->getLimit();
	
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();
//	print_r($rows);

	//pathway için başladı
	$link="index.php?option=com_jobs&task=search_jobs". $Itemid;
	$link=lknSef::url($link);

	$_lknBaseFramework->addToPathWay(_lkn_search,$link);

	//pathway için bitti

	//sayfa başlığı başladı

	$_lknBaseFramework->setPageTitle(_lkn_search . ' ' . $search_word);
	//sayfa başlığı bitti

	//sayfa linkleri hazırlanmaya başladı
			$page="$link_search&detailed_results=$detailed_results".$Itemid;
			$page=lknSef::url($page);
			$sayfa=new lknSayfalama($page,$job_count);
			$paging_links=$sayfa->sayfaLinkiYaz();
	//sayfa linkleri hazırlanması bitti
	//ulusal olma olayı başladı
		$make_national=$_config['make_jobs_national'];
	//ulusal olma olayı bitti
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('job_count',$job_count);
	$tmpl->set('make_national',$make_national);
	$tmpl->set('brief',$brief);
	$tmpl->set('detail',$detail);
	$tmpl->set('detailed_results',$detailed_results);
	$tmpl->set('Itemid',$Itemid);
	$home_page=$tmpl->fetch('job.search.results.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::job_search_results($rows,$params);
}

function home()
{
	global $_db,$_config,$_lknBaseFramework;

	$Itemid=lknJobsItemId();
	
	addRssFeedToHead('');

	$_lknBaseFramework->addToPathWay(_lkn_home_page,lknSef::url('index.php?option=com_jobs' . $Itemid));

	$show_categories=$_config['home_page_categories'];
	$show_latest_jobs=$_config['home_page_latest_jobs'];
	$latest_job_count=$_config['home_page_latest_jobs_count'];
	$show_simple_search=$_config['home_page_simple_search_form'];

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	//kategorileri almaya başladım
	$cat=new lknCategory();
	$nueva = $cat;

    //<macf>
	//2011-02-02
	foreach($nueva->list as $key=>$value){
       
			if ($value->parent_id > 0 ){
			  	unset($nueva->list[$key]);
			 }  
		}
		//@todo: burası için configurayona bir parametre ekle.
		//insanlar seçebilsin
		//$categories=$cat->getCategoryList('job_cat','','class="input_field_categories" ',1);
		
		//print_r(get_class_methods($cat));
		//print_r($cat->getCategoryList('job_cat','','class="input_field_categories" ',1));
		$categories=$nueva->getCategoryCheckBox('job_category[]','');
		

		$cat_list=$cat->get('list');//kategori listesini array halinde tutar
		
		$cat_array=array();
		$c=$cat->get('list');
		foreach ($c as $cats){
			$parent_id=$cats->parent_id;
			$cat_id=$cats->id;
			if ($parent_id=='0') {
				$cat_id2=$cat_id;
			}
			
						
			if ($parent_id=='0') {
				$cat_array[$cat_id]="$cat_id";
			}else {
				$cat_array[$cat_id2].=",$cat_id";
			}
			
			//echo "$parent_id - $cat_id<br />";
		}
		//print_r($cat_array);
	//kategori alma iişi bitti	
	
	//detaylı arama linki oluşturulmaya başladı
		$adv_search_link="index.php?option=com_jobs&task=advanced_search$Itemid";
		$adv_search_link=lknSef::url($adv_search_link);
	//detaylı arama linki oluşturuluyor
	
	//employer panel linki başladı
		$employer_panel="index.php?option=com_jobs&task=employer" . $Itemid;
		$employer_panel=lknSef::url($employer_panel);
	//employer panel linki oluşturuldu
	
	//kategorilerin bilgisi alınmaya başladı
		if ($show_categories=='1') {
				$count=count($cat_list); // how many cells do we actually have data for?
				$tmpl->set('count',$count);
				$tmpl->set('cats',$cat_list);
				$tmpl->set('cat_array',$cat_array);
				$list_categories=$tmpl->fetch('list.categories.php');
				
		}else {
			$list_categories='';
		}
	//kategori bilgisi alınması bitti
	//indeed kodu oluşturuluyor
		$indeed_code=getIndeedCodes();
		if ($indeed_code!='') {
			$tmpl->set('indeed_code',$indeed_code);
			$indeed_code=$tmpl->fetch('home.indeed.code.php');
		}
		
	//indeed kodu oluşturuldu
	//new to lknjobs kısmı başladı
		$new_to_lknjobs=$_config['home_page_new_to_lknjobs'];
		if ($new_to_lknjobs=='1') {
			$new_to_lknjobs=$tmpl->fetch('home.page.new.to.lknjobs.php');
		}else {
			$new_to_lknjobs='';
		}
	//new to lknjobs kısmı bitti
	//who are we kısmı alınmaya başladı
		$who_are_we=$_config['home_page_who_are_we'];
		if ($who_are_we=='1') {
			$who_are_we=$tmpl->fetch('home.page.who.are.we.php');
		}else {
			$who_are_we='';
		}
	//who are kısmı alınması bitti
									
	//en son eklenen işlerin bilgisi alınmaya başladı
		if ($show_latest_jobs==1) {
			$rows=list_latest_jobs($latest_job_count);
			$count=count($rows);
			
			$rss_link=LIVE_SITE . '/index.php?option=com_jobs&amp;task=rss'.$Itemid;
			$tmpl->set('count',$count);
			$tmpl->set('rows',$rows);
			$tmpl->set('rss_link',$rss_link);
			$tmpl->set('Itemid',$Itemid);
			$list_jobs=$tmpl->fetch('home.list.jobs.php');
		}else {
			$list_jobs='';
		}
	//en son eklenen işlerin bilgisi alındı
	
	
	//basit arama kutusu bilgisi alınıyor
		if ($show_simple_search=='1') {
			$tmpl->set('categories',$categories);
			$tmpl->set('adv_search_link',$adv_search_link);
			$simple_search_box=$tmpl->fetch('simple.search.box.php');
		}else {
			$simple_search_box='';
		}
	//basit arama kutusu bilgisi alındı	

	//reklam kutusu başlangıcı
	$ads=$_config['home_page_ads'];
	if ($ads!='') {
		$tmpl->set('ads_code',$ads);
		$ads=$tmpl->fetch('home.ads.area.php');
	}
	//reklam kutusu bitişi
	
	//job seeker tools kısmı başladı
		$job_seeker_active=$_config['job_seeker_activate'];
		$userType=lknRegistry::get('usertype');

		if ($job_seeker_active=='1' and $userType!='employer') {
				//job seeker panel linki başladı
					$job_seeker_panel="index.php?option=com_jobs&task=worker" . $Itemid;
					$job_seeker_panel=lknSef::url($job_seeker_panel);
				//job seeker panel linki oluşturuldu
				$tmpl->set('job_seeker_panel',$job_seeker_panel);
			$job_seeker=$tmpl->fetch('home.page.job.seeker.tools.php');
		}else {
			$job_seeker='';
		}
		
	//job seeker tools kısmı bitti
	//ana sayfa şirket gösterilmesi olayı başladı
			$show_companies=$_config['home_companies'];//latest,random,hide;
			$company_count=$_config['home_page_company_count'];
			if ($show_companies=='hide') {
				$companies='';
			}else {
				$row_companies=lknJobsFunctions::getCompanies($company_count,$show_companies);
				$tmpl->set('row_companies',$row_companies);
				$tmpl->set('itemid',$Itemid);
				$companies=$tmpl->fetch('home.page.companies.php');
			}
			
			
	//ana sayfa şirket gösterilmesi olayı bitti
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('employer_panel',$employer_panel);
	$tmpl->set('job_seeker',$job_seeker);
	$tmpl->set('simple_search_box',$simple_search_box);
	$tmpl->set('list_categories',$list_categories);
	$tmpl->set('ads',$ads);
	$tmpl->set('new_to_lknjobs',$new_to_lknjobs);
	$tmpl->set('companies',$companies);
	$tmpl->set('who_are_we',$who_are_we);
	$tmpl->set('indeed_code',$indeed_code);
	$tmpl->set('list_jobs',$list_jobs);
	$tmpl->set('Itemid',lknJobsItemId(TRUE));
	$home_page=$tmpl->fetch('home.page.php');
	
	//herşey oluşturuldu şimdi modül durumlarına bakılmasına başlandı
	$before='<div class="grayborder lknclearfix" style="margin-bottom:1em;">
			<div class="lknDetailJobInnerContent lknclearfix">
                <div class="lknclearfix">';
	$after='   </div>
            </div>
         </div>';
	$home_page=lknLoadModule($home_page,$before,$after);
	//herşey oluşturuldu şimdi modül durumlarına bakılması bitti	

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
}

function list_latest_jobs($job_count)
{
	global $_db,$_config;
		$date=new lknDate();
		$now= $date->getDate();

		$nullDate	= $_db->getNullDate();



	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";
	$where[]="j.cat_id=c.id";
	$where[]="j.company_id=company.id";
	$where[]="j.country=country.id";
	$where[]="country.published='1'";
	$where[]="company.published='1'";
	$where[]="c.published='1'";
	$where[] ="j.published='1'";
	
	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT j.*,c.title AS category_name,company.title AS company_name,";
	$sql.="\n company.alias AS company_alias, c.alias AS category_alias, country.title AS job_location";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n  #__jobs_countries AS country,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
	$sql.="\n LIMIT 0,$job_count";
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();
	
	return $rows;

}

function new_company()
{
//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
lknJobsFunctions::preventWorkerToSeeEmployerPanel();
//BURAYI GÖRMESİN
global $_lknBaseFramework,$_config;
$itemid=lknJobsItemId();

$user=new lknUser();
//pathway için başladı
$link="index.php?option=com_jobs&task=employer".$itemid;
$link=lknSef::url($link);

$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

$link="index.php?option=com_jobs&task=new_company".$itemid;
$link=lknSef::url($link);

$_lknBaseFramework->addToPathWay(_lkn_company_add,$link);
//pathway için bitti


//beklenen kullanıcı değilse geri gitsin. ACL
$canDo=checkAcl('r');
$company=checkCompanyFunctions();
if ($canDo==false || $company==false) {
	echo _lkn_error_acl_permission;
	return ;
}
//beklenen kullanıcı değilse geri gitsin. ACL



	$company_count_config=$_config['employer_company_count'];

	if ($company_count_config!='0') {
			$company_count_active=lknJobsFunctions::getCompanyCount($user->getUserID());
			//You have {ACTIVE_COMPANY_COUNT} company and You can have maximum {ALLOWED_COMPANY_COUNT} company
				if ($company_count_active>=$company_count_config) {
					$msg=_lkn_employer_company_count;
					$msg=str_replace('{ACTIVE_COMPANY_COUNT}',$company_count_active,$msg);
					$msg=str_replace('{ALLOWED_COMPANY_COUNT}',$company_count_config,$msg);
					echo "<h1>$msg</h1>";
					return ;
				}
	}
	
//şirket logosu açıklaması oluşturuluyor

//Only {IMAGE_TYPES} images are allowed. You and upload maximum {LOGO_SIZE} Kb images size');
//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size
$allowed_images=$_config['allowedimages'];
$image_size=$_config['uploadSizeLimit'];

$allowed_image_desc=_lkn_company_logo_desc;
$allowed_image_desc=str_replace('{IMAGE_TYPES}',$allowed_images,$allowed_image_desc);
$allowed_image_desc=str_replace('{LOGO_SIZE}',$image_size,$allowed_image_desc);
	
				
//şirket logo açıklaması oluşturuldu

$template=lknRegistry::get('lknjobstemplate');//tema için başladık
$tmpl=new lknTemplate($template);

$top=fetch_jobs_top($tmpl);
$footer=$tmpl->fetch('footer.php');


$tmpl->set('top',$top);
$tmpl->set('footer',$footer);
$tmpl->set('row','');
$tmpl->set('allowed_image_desc',$allowed_image_desc);
$tmpl->set('force',0);
$home_page=$tmpl->fetch('company.form.php');

$tmpl->set('value',$home_page);
echo $tmpl->fetch('public.container.php');

//htmlFrontJobs::company_form();
}

function new_company_with_forcing()
{
  
	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
	lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN

	global $_lknBaseFramework,$_config, $_db;

			$itemid=lknJobsItemId();
			
			//pathway için başladı
			$link="index.php?option=com_jobs&task=employer".$itemid;
			$link=lknSef::url($link);

			$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

			$link="index.php?option=com_jobs&task=new_company".$itemid;
			$link=lknSef::url($link);

			$_lknBaseFramework->addToPathWay(_lkn_company_add,$link);
			//pathway için bitti


			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$company=checkCompanyFunctions();
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	//şirket logosu açıklaması oluşturuluyor
		
		//Only {IMAGE_TYPES} images are allowed. You and upload maximum {LOGO_SIZE} Kb images size');
		//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size
		$allowed_images=$_config['allowedimages'];
		$image_size=$_config['uploadSizeLimit'];
 
		$allowed_image_desc=_lkn_company_logo_desc;
		$allowed_image_desc=str_replace('{IMAGE_TYPES}',$allowed_images,$allowed_image_desc);
		$allowed_image_desc=str_replace('{LOGO_SIZE}',$image_size,$allowed_image_desc);
				
							
	//şirket logo açıklaması oluşturuldu
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row','');
	$tmpl->set('allowed_image_desc',$allowed_image_desc);
	$tmpl->set('force',1);
	$home_page=$tmpl->fetch('company.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::company_form('',1);
}

function save_company()
{
	$company=checkCompanyFunctions();
	if ($company==false)
	{
		echo _lkn_error_acl_permission;
		return ;
	}
	global $_config,$_lknBaseFramewor;
	$msg=lknJobsFunctions::save_company();
	lknJobsFunctions::adminMail('company',$msg['inserted_id']);
	yonledir("index.php?option=com_jobs&task=employer",$msg['msg']);
}
function apply_company()
	{
		$company=checkCompanyFunctions();
		if ($company==false)
		{
			echo _lkn_error_acl_permission;
			return ;
		}	
	//işçi adayının burayı görmesini engelle
	lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//işiçi adayının burayı görmesi engellendi
	global $_config, $_db;	
	$id = lknGetParamatre ($_REQUEST,'cid' );
	if ($id=='')
	{
		$msg=lknJobsFunctions::save_company();
	}
	else 
	{
		$msg = lknJobsFunctions::update_company();
	}
	//MACF
	//2011-08-23
	//$url=lknSef::url("index.php?option=com_jobs&task=edit_company&id=$id" . lknJobsItemId());
	$url = "index.php?option=com_jobs&task=edit_company&id=$id" . lknJobsItemId();
	lknJobsFunctions::adminMail('company',$id);
	yonledir ($url, $msg);
}


function save_company_with_forcing()
{
$company=checkCompanyFunctions();
if ($company==false)
{
	echo _lkn_error_acl_permission;
	return ;
}
	global $_config,$_lknBaseFramework,$_db;
	$msg=lknJobsFunctions::save_company();
	//admin'e mail başladı
	lknJobsFunctions::adminMail('company',$msg['inserted_id']);
	//admin'e mail bitti
	//employer'a mail başladı
	$inform_user=$_config['employer_inform_on_company_submission'];
	if ($inform_user=='1') {
		lknJobsFunctions::employerMail('company_submission',$msg['inserted_id']);
	}
	//emmployer'a mail başladı
	yonledir("index.php?option=com_jobs&task=employer",_lkn_employer_forced_company_saved_message);

}
function edit_company()
{
	$company=checkCompanyFunctions();
	if ($company==false) {
		echo _lkn_error_acl_permission;
		return ;
	}

	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
	lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN

	global $_db,$_lknBaseFramework,$_config;
	$cid=lknGetParamatre($_GET,'id');

	$itemid=lknJobsItemId();

	if ($cid!='' && isset($cid)) {
		$where[]="c.id='$cid'";
		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
	
		$sql="SELECT c.*";
		$sql.="\n FROM #__jobs_companies AS c";
		$sql.=$where;
	
		$_db->query($sql);
		$_db->setQuery();
		$row=$_db->getFistRecord();

		//beklenen kullanıcı değilse geri gitsin. ACL
		$params['memberid']=$row->memberid;
		$canDo=checkAcl('o',$params);
		if ($canDo==false) {
			echo _lkn_error_acl_permission;
			return ;
		}
		//beklenen kullanıcı değilse geri gitsin. ACL

		//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

		$id=$row->id;
		$title=$row->title;
		$alias=$row->alias;
		$link="index.php?option=com_jobs&task=edit_company&id=$id:$alias".$itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_edit . ': ' . $title,$link);


		//pathway için bitti

		//şirket logosu açıklaması oluşturuluyor
		
		//Only {IMAGE_TYPES} images are allowed. You and upload maximum {LOGO_SIZE} Kb images size');
		//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size
		$allowed_images=$_config['allowedimages'];
		$image_size=$_config['uploadSizeLimit'];
 
		$allowed_image_desc=_lkn_company_logo_desc;
		$allowed_image_desc=str_replace('{IMAGE_TYPES}',$allowed_images,$allowed_image_desc);
		$allowed_image_desc=str_replace('{LOGO_SIZE}',$image_size,$allowed_image_desc);
				
		//şirket logo açıklaması oluşturuldu
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
	
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('row',$row);
		$tmpl->set('allowed_image_desc',$allowed_image_desc);
		$tmpl->set('force',0);
		$home_page=$tmpl->fetch('company.form.php');
		
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
		//htmlFrontJobs::company_form($row);
	}
}
function update_company()
{
	$company=checkCompanyFunctions();
	if ($company==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	global $_config,$_lknBaseFramework;
	$msg = lknJobsFunctions::update_company();
	lknJobsFunctions::adminMail('company',lknGetParamatre($_POST,'cid'));
	yonledir("index.php?option=com_jobs&task=employer",$msg);
}

function list_employer_email_templates()
{
	global $_db,$_lknBaseFramework;
	$params=array();

			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$company=checkCompanyFunctions();
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN
	$user=new lknUser();
	$user_id=$user->getUserID();


	$published=lknGetParamatre($_REQUEST,'published');
	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));

	if ($published!='' && isset($published)) {
		$where[]="e.published='$published'";
	}

	if (($search!='' && isset($search))) {
		$where[]="LOWER(e.title) LIKE '%$search%'";
	}

	$where[]="e.memberid='$user_id'";

	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT e.id";
	$sql.="\n FROM #__jobs_email_templates AS e";
	$sql.=$where;

	$email_count=lknGetCount($sql);

	$sql="SELECT e.*";
	$sql.="\n FROM #__jobs_email_templates AS e";
	$sql.=$where;
	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_tools;

		$_lknBaseFramework->addToPathWay($name,$link);


		$link="index.php?option=com_jobs&task=employer&task=list_employer_email_templates".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_email_templates;

		$_lknBaseFramework->addToPathWay($name,$link);

	//pathway için bitti
	//sayfalama için linkler oluşturulmaya başladı
		$sayfa="index.php?option=com_jobs&task=list_employer_email_templates".$itemid;
		$sayfa=new lknSayfalama($link,$email_count);
		$paging_links=$sayfa->sayfaLinkiYaz();
	//sayfalama için linkler oluşturulmaya başladı	
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	//info table alınmaya başladı
		$info_table=$tmpl->fetch('list.employer.email.templates.info.table.php');
	//info table alınması bitti
	//yeni email şablonu ekleme linki başladı
		$link="index.php?option=com_jobs&task=new_employer_email_template" . $itemid;
		$link=lknSef::url($link);
	//yeni e-mail şablonu ekleme linki bitti
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('email_count',$email_count);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('info_table',$info_table);
	$tmpl->set('new_email_template_link',$link);
	$tmpl->set('search',$search);
	$home_page=$tmpl->fetch('list.employer.email.templates.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	

	//htmlFrontJobs::list_employer_email_templates($params);
}

function new_employer_email_template()
{
	global $_lknBaseFramework;

			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			$company=checkCompanyFunctions();
			if ($canDo==false || $company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

			//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
					lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			//BURAYI GÖRMESİN

	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_tools;

		$_lknBaseFramework->addToPathWay($name,$link);


		$link="index.php?option=com_jobs&task=employer&task=list_employer_email_templates".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_email_templates;

		$_lknBaseFramework->addToPathWay($name,$link);

		$link="index.php?option=com_jobs&task=employer&task=new_employer_email_templates".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_email_template_add;

		$_lknBaseFramework->addToPathWay($name,$link);

	//pathway için bitti
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');


	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row','');
	$home_page=$tmpl->fetch('employer.email.template.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::employer_email_template_form();
}

function save_employer_email_template()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	lknJobsFunctions::save_email_template();

	yonledir("index.php?option=com_jobs&task=list_employer_email_templates",_lkn_added);

}

function edit_employer_email_template()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

			//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
					lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			//BURAYI GÖRMESİN

	global $_db,$_lknBaseFramework;
	$cid=lknGetParamatre($_GET,'id');

	$cid=(int)$cid;



		$where[]="c.id='$cid'";

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT c.*";
		$sql.="\n FROM #__jobs_email_templates AS c";
		$sql.=$where;

		$_db->query($sql);
		$_db->setQuery();
		$row=$_db->getFistRecord();
//				print_r($row);

			//beklenen kullanıcı değilse geri gitsin. ACL
			$params=array();
			$params['memberid']=$row->memberid;
			$canDo=checkAcl('o',$params);
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_tools;

		$_lknBaseFramework->addToPathWay($name,$link);


		$link="index.php?option=com_jobs&task=employer&task=list_employer_email_templates".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_email_templates;

		$_lknBaseFramework->addToPathWay($name,$link);

		$link="index.php?option=com_jobs&task=employer&task=edit_employer_email_templates".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_edit . ': ' . temizleSlash($row->title);

		$_lknBaseFramework->addToPathWay($name,$link);

	//pathway için bitti
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');


	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row',$row);
	$home_page=$tmpl->fetch('employer.email.template.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	

		//htmlFrontJobs::employer_email_template_form($row);

}

function update_employer_email_template()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	lknJobsFunctions::update_email_template();

	yonledir("index.php?option=com_jobs&task=employer&task=list_employer_email_templates",_lkn_updated);

}

function publish_employer_email_template()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	global $_db;
	$id=lknGetParamatre($_GET,'id');

	$user=new lknUser();
	$user_id=$user->getUserID();

	$id=(int)$id;
	$_db->query("UPDATE #__jobs_email_templates SET published='1' WHERE id='$id' AND memberid='$user_id'");
	$_db->setQuery();



	yonledir("index.php?option=com_jobs&task=list_employer_email_templates",_lkn_updated);

}

function unpublish_employer_email_template()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	global $_db;

	$user=new lknUser();
	$user_id=$user->getUserID();

	$id=lknGetParamatre($_GET,'id');
	$id=(int)$id;

	$_db->query("UPDATE #__jobs_email_templates SET published='0' WHERE id='$id' AND memberid='$user_id'");
	$_db->setQuery();

	yonledir("index.php?option=com_jobs&task=list_employer_email_templates",_lkn_updated);

}

function delete_employer_email_template()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	global $_db,$_config;
	$id=(int)lknGetParamatre($_GET,'id');

	$user=new lknUser();
	$user_id=$user->getUserID();

	$_db->query("DELETE FROM #__jobs_email_templates WHERE id='$id' AND memberid='$user_id'");
	$_db->setQuery();

	$msg 		= _lkn_delete_info ;


	yonledir("index.php?option=com_jobs&task=list_employer_email_templates",$msg);

}

function list_employer_applications()
{
			//beklenen kullanıcı değilse geri gitsin. ACL
				$canDo=checkAcl('r');
				$company=checkCompanyFunctions();
				if ($canDo==false || $company==false) {
					echo _lkn_error_acl_permission;
					return ;
				}
			//beklenen kullanıcı değilse geri gitsin. ACL
			
	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN
	global $_db,$_lknBaseFramework;
	$params=array();
	$user=new lknUser();
	$user_id=$user->getUserID();

	$cat_id=intval(lknGetParamatre($_REQUEST,'cat_id'));
	$company_id=lknGetParamatre($_REQUEST,'company_id');
	$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));
	$status=lknGetParamatre($_REQUEST,'status');
	$job_id=lknGetParamatre($_REQUEST,'job_id');

	if ($cat_id!='' && isset($cat_id)) {
		$where[]="j.cat_id='$cat_id'";
	}

	if ($company_id!='' && isset($company_id)) {
		$where[]="j.company_id='$company_id'";
	}

	if (($search!='' && isset($search))) {
		$where[]="((LOWER(r.title) LIKE '%$search%')
				OR (j.title LIKE '%$search%'))";
	}

	if ($status!='' && isset($status)) {
		$where[]="a.status='$status'";
	}

	if ($job_id!='' && isset($job_id)) {
		$where[]="a.job_id='$job_id'";
	}

	$where[]="a.job_id=j.id";
	$where[]="a.resume_id=r.id";
	$where[]="r.memberid=u.id";
	$where[]="a.status=s.id";
	$where[]="j.cat_id=c.id";
	$where[]="j.company_id=company.id";
	$where[]="company.memberid='$user_id'";

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
	$application_count=lknGetCount($sql);

	$sql="SELECT a.*,r.name AS resume_name, r.title AS resume_title,";
	$sql.="\n j.title AS job_title, j.alias AS job_alias,";
	$sql.="\n c.title AS category_name,s.title AS status_name,u.username AS username,";
	$sql.="\n c.alias AS category_alias,c.id AS category_id,";
	$sql.="\n company.title AS company_title,company.id AS company_id,company.alias AS company_alias";
	$sql.="\n FROM #__jobs_applications AS a,";
	$sql.="\n #__jobs_resumes AS r,";
	$sql.="\n #__jobs_status AS s,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n #__jobs_companies AS company,";
	$sql.="\n #__users AS u,";
	$sql.="\n #__jobs_jobs AS j";
	$sql.=$where;
	$sql.="\n ORDER BY a.application_date DESC";
	$sql.=$_db->getLimit();
//	echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();

	$itemid=lknJobsItemId();

		//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_tools;

		$_lknBaseFramework->addToPathWay($name,$link);


		$link="index.php?option=com_jobs&task=employer&task=list_employer_applications".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_applications;

		$_lknBaseFramework->addToPathWay($name,$link);

	//pathway için bitti
	
			$search=lknText::strToLower(lknGetParamatre($_REQUEST,'search'));
	
	//filteleme için tüm kategorileri almaya başla
		$extra='onchange="document.adminForm.submit();"';
			
		$cat_id=lknGetParamatre($_REQUEST,'cat_id');
		$cat=new lknCategory();
		$category_select_list=$cat->getCategoryList('cat_id',$cat_id,$extra);
	//filtreleme için kategorileri alma işlemi bitti
	
	//tarihler başladı
		$date=new lknDate();
		$now=$date->getDate();
		
		$null_date=$_db->getNullDate();
		
	//tarih işlemleri bitti
	
	//sayfalama için linkler oluşturulmaya başladı
		$search2=urlencode($search);
		$sayfa=new lknSayfalama("index.php?option=com_jobs&task=list_employer_applications&cat_id=$cat_id&company_id=$company_id&search=$search2&status=$status".$itemid,$application_count);
		$paging_links=$sayfa->sayfaLinkiYaz();
	//sayfalama için linkler oluşturulmaya başladı	
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	//KATEGORİ select list oluşturulmaya başladı
		$extra='onchange="document.adminForm.submit();"';
		$cat=new lknCategory();
		$category_select_list=$cat->getCategoryList('cat_id',$cat_id,$extra);
				

				
				$status=lknGetParamatre($_REQUEST,'status');
				$status_select_list=lknJobsFunctions::getStatus('status',$status,$extra,'1');

	//kategori select list oluşturuldu
	

	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('rows',$rows);
	$tmpl->set('paging_links',$paging_links);
	$tmpl->set('application_count',$application_count);
	$tmpl->set('search',$search);
	$tmpl->set('category_select_list',$category_select_list);
	$tmpl->set('status_select_list',$status_select_list);
	$tmpl->set('Itemid',$itemid);
	$home_page=$tmpl->fetch('list.employer.applications.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	

	//htmlFrontJobs::list_employer_applications($params,$rows);
}


function edit_employer_application()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

			//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
			lknJobsFunctions::preventWorkerToSeeEmployerPanel();
			//BURAYI GÖRMESİN

	global $_db,$_lknBaseFramework,$_config,$task;
	$cid=(int)lknGetParamatre($_GET,'id');


		$where[]="a.job_id=j.id";
		$where[]="a.resume_id=r.id";
		$where[]="a.status=s.id";
		$where[]="j.cat_id=c.id";
		$where[]="j.company_id=company.id";
		$where[]="j.country=country.id";
		$where[]="r.memberid=u.id";
		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		$sql="SELECT a.*,r.*,a.id AS application_id,j.title AS job_title,company.title AS company_title,company.contactemail as contactemail,";
		$sql.="c.title AS category_name,s.title AS status_name,u.username AS username,company.memberid AS company_owner_id,company.id AS company_id,";
		$sql.="j.reference AS reference,j.number_of_jobs AS number_of_jobs,j.job_type as job_job_type,";
		$sql.="country.title AS country_name,j.qualifications AS qualifications,j.city AS job_city, j.state AS job_state,";
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

			//beklenen kullanıcı değilse geri gitsin. ACL
			$params=array();
			$memberid=$row->company_owner_id;
			$params['memberid']=$memberid;
			$canDo=checkAcl('o',$params);
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	$itemid=lknJobsItemId();

	//pathway için başladı
		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_tools;

		$_lknBaseFramework->addToPathWay($name,$link);


		$link="index.php?option=com_jobs&task=employer&task=list_employer_applications".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_applications;
		$_lknBaseFramework->addToPathWay($name,$link);

		$link="index.php?option=com_jobs&task=employer&task=edit_employer_applications&id=$cid".$itemid;
		$link=lknSef::url($link);
		$name=_lkn_employer_applications . ': ' . $row->job_title;

		$_lknBaseFramework->addToPathWay($name,$link);

	//pathway için bitti

	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	
	//e-mail history'si alınıyor
		$tmpl->set('member',$memberid);
		$tmpl->set('application_id',$cid);
		$email_history=$tmpl->fetch('employer.print.email.history.php');
	//e-mail history'si alındı

	//özgeçmiş okunma sayısını bir artır
		lknJobsFunctions::increaseResumeHit($row->id);
	//özgeçmiş okunma sayısı bir artırma işi bitti
	//employer'ın görmesi için özgemişi al
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
			
			$field_values=lknJobsFields::getFieldsValueArray($row_fields,$row,$row_files,$file_count);
			$resume_data=lknJobsFields::getViewResume($cats,$field_values,$parent_id_array);
	//employer'ın görmesi için özgemişi alındı

	//daha önce yapılmış başvuruları almaya başladık
		$row_app_history=lknJobsFunctions::getPerviousApplications($row->company_id,$row->memberid,$row->id);
		$tmpl->set('row_app_history',$row_app_history);
		$tmpl->set('itemid',$itemid);
		$application_history=$tmpl->fetch('list.employer.applications.history.php');
	//daha önce yapılmış başvurular alındı
	
	$tmpl->set('top',$top);
	$tmpl->set('footer',$footer);
	$tmpl->set('row',$row);
	$tmpl->set('email_history',$email_history);
	$tmpl->set('resume_data',$resume_data);
	$tmpl->set('application_history',$application_history);
	$home_page=$tmpl->fetch('employer.application.form.php');

	$tmpl->set('value',$home_page);
	echo $tmpl->fetch('public.container.php');
	
}

function update_employer_application()
{

	$company=checkCompanyFunctions();    

	
	if ($company==false) {
		echo _lkn_error_acl_permission;
		return ;
	}
	
	lknJobsFunctions::update_application();
	//MACF
   	//2011-09-02
   	//guardar el estado de la aplicacion 
   	$status = (int) lknGetParamatre($_POST, 'db_status');
   	$id = (int) lknGetParamatre($_POST, 'id_a');
	$data = lknGetFormValues();
	$data['status'] = $status;
    $_db = &lknDb::createInstance();
    $sql = $_db->CreateUpdateSql($data, "#__jobs_applications", "id='$id'");
    $_db->query($sql);
    $_db->setQuery();  
	//FIN MACF
	yonledir("index.php?option=com_jobs&task=list_employer_applications",_lkn_updated);
}

function send_mail_to_applicant()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	$application=(int)lknGetParamatre($_POST,'cid');
	$msg=lknJobsFunctions::send_mail_to_applicant();
	yonledir("index.php?option=com_jobs&task=edit_employer_application&id=$application",$msg);
}

function employer_resume_search_form(){
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}

	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN
	
	global $_lknBaseFramework,$_db,$_config;

	$itemid=lknJobsItemId();

	//pathway için başladı

		$link="index.php?option=com_jobs&task=employer".$itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_employer_tools,$link);

		$link="index.php?option=com_jobs&task=employer_resume_search_form".$itemid;
		$link=lknSef::url($link);

		$_lknBaseFramework->addToPathWay(_lkn_search_resume,$link);

	//pathway için bitti

	$user=new lknUser();
	$user_id=$user->getUserID();
	
			//beklenen kullanıcı değilse geri gitsin. ACL
			$canDo=checkAcl('r');
			if ($canDo==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
			//beklenen kullanıcı değilse geri gitsin. ACL

	$credit_system_active=$_config['credit_system_active'];

	if ($credit_system_active=='1') {
		$user_type=$user->getUserType();
		
		if ($user_type!='Super Administrator') {
			$date=new lknDate();
			$now= $date->getDate();
	
			$sql="SELECT id FROM #__jobs_credits ";
			$sql.="\n WHERE can_search_end >= '".$_db->_escape($now)."' AND user_id='$user_id'";
	
		//	echo $sql;
	
			if (lknGetCount($sql)>0){
				//yani cv veritabanında arama yapabilir
			}else {
				echo _lkn_error_credit_not_enough_to_search_resume_database;
				return ;
			}
	
		}
	}
	lknJobsFunctions::employer_resume_search_form();
}

function search_resume()
{
			$company=checkCompanyFunctions();
			if ($company==false) {
				echo _lkn_error_acl_permission;
				return ;
			}
	//eğer bir veya daha fazla özgeçmişe sahipse. bu kişi bir JOB SEEKER.
		lknJobsFunctions::preventWorkerToSeeEmployerPanel();
	//BURAYI GÖRMESİN	
		global $_db,$_lknBaseFramework,$_config;
		$Itemid=lknJobsItemId();
		$user_id=lknGetParamatre($_GET,'user_id');
		//beklenen kullanıcı değilse geri gitsin. ACL
		$params['memberid']=$user_id;
		$canDo=checkAcl('o',$params);
		if ($canDo==false) {
			echo _lkn_error_acl_permission;
			return ;
		}
		unset($params);
		//beklenen kullanıcı değilse geri gitsin. ACL
	$user=new lknUser();
	$user_type=$user->getUserType();
	$credit_system_active=$_config['credit_system_active'];
	if ($credit_system_active=='1') {
		if ($user_type!='Super Administrator') {
			$date=new lknDate();
			$now= $date->getDate();
	
			$sql="SELECT id FROM #__jobs_credits ";
			$sql.="\n WHERE can_search_end >= '".$_db->_escape($now)."' AND user_id='$user_id'";
			if (lknGetCount($sql)>0){
				//yani cv veritabanında arama yapabilir
			}else {
				echo _lkn_error_credit_not_enough_to_search_resume_database;
				return ;
			}
		}
	}
	$Itemid=lknJobsItemId();
	$link_search="index.php?option=com_jobs&task=search_resume$Itemid";
	$detailed_results=lknGetParamatre($_GET,'detailed_results',0);
	$link_search.="&user_id=$user_id";
	$searchParams=lknJobsFields::searchParams($link_search);
	$where=$searchParams['where'];
	$link_search=$searchParams['link_search'];
	$hasValue=$searchParams['hasValue'];
	if ($hasValue==0) {
		//kullanıcı arama için hiçbir değer girmemiş.
		echo '<br />
		<div id="linkredirectresume">
<a href="/index.php?option=com_jobs&task=employer_resume_search_form&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="/components/com_jobs/templates/default/images/atras.png"/>
Atrás
</a>
</div><br />
		<table id="tools_employees" cellpadding="5" cellspacing="0"><thead><tr><th><h3>' . _lkn_error_no_input_for_resume_search . '</h3></th></tr></thead><tbody><tr><td>';
		echo "<a href=\"" . lknSef::url("index.php?option=com_jobs&task=employer_resume_search_form" . $Itemid) . "\">". _lkn_search_resume_new. "</a></td></tr></body></table><br /><br /><br /><br />";
		return ;
	}
	$excludedResumes=getExcludedResumeIDs($user_id);
	$where[]="r.published='1'";
	if ($excludedResumes!='') {
		$where[]="r.id NOT IN ($excludedResumes)";
	}
	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
	//pathway için başladı
	$link="index.php?option=com_jobs&task=search_resume". $Itemid;
	$link=lknSef::url($link);
	$_lknBaseFramework->addToPathWay(_lkn_search_resume,$link);
	//pathway için bitti
	//sayfa başlığı başladı
	$_lknBaseFramework->setPageTitle(_lkn_search_resume);
	//sayfa başlığı bitti
	$sql="SELECT r.id";
	$sql.="\n FROM #__jobs_resumes AS r";
	$sql.=$where;
	//echo($sql);
	$resume_count=lknGetCount($sql);
	//yeni arama linki başladı
	$new_search_link=lknSef::url("index.php?option=com_jobs&task=employer_resume_search_form" . $Itemid);
	$new_search_link="<a href=\"$new_search_link\">" . _lkn_search_resume_new . "</a>";
	//yeni arama linki bitti
	if ($resume_count==0) {
		echo _lkn_error_search_resume_no_result.'<br />';
		echo $new_search_link;
		return ;
	}
	$sql="SELECT r.*";
	$sql.="\n FROM #__jobs_resumes AS r";
	$sql.=$where;
	$sql.="\n ORDER BY r.update_date DESC";
	$sql.=$_db->getLimit();
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	$top=fetch_jobs_top($tmpl);
	$footer=$tmpl->fetch('footer.php');
	//resume count message başladı
		$limit_start=$_db->get('limit_start');
		$limit_end=$_db->get('limit_end');
		if ($limit_end>$resume_count) {
			$limit_end=$resume_count;
		}
		//Search Results ({START} to {END} from {TOTAL})
		$resume_count_message=_lkn_search_count_display;
		$resume_count_message=str_replace('{START}',$limit_start,$resume_count_message);
		$resume_count_message=str_replace('{END}',$limit_end,$resume_count_message);
		$resume_count_message=str_replace('{TOTAL}',$resume_count,$resume_count_message);
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
			$paging_links="$link_search&detailed_results=$detailed_results".$Itemid;
			$paging_links=new lknSayfalama($paging_links,$resume_count);
			$paging_links=$paging_links->sayfaLinkiYaz();
		//sayfalama linkleri bitti
	
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('rows',$rows);
		$tmpl->set('paging_links',$paging_links);
		$tmpl->set('detail_link',$detail_link);
		$tmpl->set('brief_link',$brief_link);
		$tmpl->set('detailed_results',$detailed_results);
		$tmpl->set('new_search_link',$new_search_link);
		$tmpl->set('user_id',$user_id);
		$tmpl->set('Itemid',$Itemid);
		$tmpl->set('resume_count_message',$resume_count_message);
		$home_page=$tmpl->fetch('employer.resume.search.results.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
	
	//htmlFrontJobs::resume_search_results($rows,$params);
}

function setMetaData($title='',$keywords='',$description=''){
	global $_lknBaseFramework;
	if ($title!='') {
		$_lknBaseFramework->setPageTitle($title);//sayfa başlığı
	}

	if ($keywords!='') {
		$_lknBaseFramework->setMetaData('keywords',$keywords);//sayfa anahtar kelimeleri
	}

	if ($description!='') {
		$_lknBaseFramework->setMetaData('description',$description);
	}
}

/**
 * cv sahibi tarafından bir kullanıcıya ait şirketin (veya şirketlerin) görülmesi engellenen cv'ler
 *
 * @param integer $user_id
 * @return string : cv id'lerini 25,36,25 şeklinde dönderir
 */
function getExcludedResumeIDs($user_id){
	global $_db;
	$sql="SELECT rb.resume_id AS id FROM";
	$sql.="\n #__jobs_companies AS c, #__jobs_resumes_banned_companies AS rb";
	$sql.="\n WHERE rb.company_id=c.id AND c.memberid='$user_id'";

	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();
	$ids=array();
	foreach ($rows as $row) {
		$ids[]=$row->id;
	}
	$ids 		= ( count( $ids ) ? implode( ',',  $ids) : '' );
//	exit($ids);
	return $ids;
}

function rss_page(){

	//beklenen kullanıcı değilse geri gitsin. ACL
	$canDo=checkAcl('r');
	$c=checkJobSeekerFunctions();
	if ($canDo==false || $c==FALSE) {
		echo _lkn_error_acl_permission;
		return ;
	}
	//beklenen kullanıcı değilse geri gitsin. ACL

	global $_config,$_lknBaseFramework;
	$itemid=lknJobsItemId();

		//pathway için başladı
			$user=new lknUser();

			$link="index.php?option=com_jobs&task=worker" . $itemid;
			$link=lknSef::url($link);
			$name=str_replace('{NAME}',$user->getName(),_lkn_worker);

			$_lknBaseFramework->addToPathWay($name,$link);

			$link="index.php?option=com_jobs&task=rss_page" . $itemid;
			$link=lknSef::url($link);
			$name=_lkn_worker_rss;

			$_lknBaseFramework->addToPathWay($name,$link);

		//pathway için bitti

	$feeds_active=$_config['rss_feeds_active'];

	if ($feeds_active=='1') {
			$criteria_count=$_config['rss_feeds_criteria_select_count'];


		if ($feeds_active!='1') {
			echo _lkn_worker_rss_disabled;
			return ;
		}

		$feed_categories_active=$_config['rss_feeds_categories'];
		if ($feed_categories_active=='1') {
				$cat=new lknCategory();

			$msg=_lkn_worker_rss_max_category_select;
			$msg=str_replace('{NUMBER}',$criteria_count,$msg);
			$category_list=$cat->getCategoryList('job_category','','onchange="checkPos(this,\''.$msg.'\');link_yaz();" style="width: 176px;" multiple="" size="5"',0);//kategori listesini selectbox olarak alır;
		}else {
			$category_list='';
		}

		$feed_country_active=$_config['rss_feeds_country'];
		if ($feed_country_active=='1') {
			$msg=_lkn_worker_rss_max_country_select;
			$msg=str_replace('{NUMBER}',$criteria_count,$msg);
			$job_countries=lknJobsFunctions::getJobCountries('job_country','','onchange="checkPos(this,\''.$msg.'\');link_yaz();" style="width: 176px;" multiple="" size="5"',0);
		}else {
			$job_countries='';
		}

		$feed_company_active=$_config['rss_feeds_company'];
		if ($feed_company_active=='1') {
			$msg=_lkn_worker_rss_max_company_select;
			$msg=str_replace('{NUMBER}',$criteria_count,$msg);
			$job_companies=lknJobsFunctions::getCompanyList('job_companies','','onchange="checkPos(this,\''.$msg.'\');link_yaz();" style="width: 176px;" multiple="" size="5"','',0);
		}else {
			$job_companies='';
		}
		
		$template=lknRegistry::get('lknjobstemplate');//tema için başladık
		$tmpl=new lknTemplate($template);
		
		$top=fetch_jobs_top($tmpl);
		$footer=$tmpl->fetch('footer.php');
		
		$tmpl->set('top',$top);
		$tmpl->set('footer',$footer);
		$tmpl->set('category_list',$category_list);
		$tmpl->set('job_companies',$job_companies);
		$tmpl->set('job_countries',$job_countries);
		$home_page=$tmpl->fetch('rss.page.php');
	
		$tmpl->set('value',$home_page);
		echo $tmpl->fetch('public.container.php');
		
		//htmlFrontJobs::rss_page($category_list,$job_companies,$job_countries);
	}else {
		echo _lkn_worker_rss_disabled;

	}


}


function rss() {
		global $_db,$_config,$_lknBaseFramework;

		$feeds_active=$_config['rss_feeds_active'];

		$feed_count=$_config['rss_feeds_count'];
		$feed_description_length=$_config['rss_feeds_limit_job_description'];

		$site_title=new lknJoomlaConfig();
		$site_title=$site_title->get('sitename') . ' - ' . _lkn_job;

		$itemid=lknJobsItemId();

		$feed_description=$_config['rss_feeds_description'];
		//$feed_description_length değeriyle bir alakası YOK

		$rss=new lknRss($site_title,
    							$feed_description,
    							"Joomla Jobs Syndication",
    							'com_jobs',
    							'detail_job',
								$feed_description_length,
								$itemid
								);

		$date=new lknDate();
		$now= $date->getDate();

		$nullDate	= $_db->getNullDate();

	$where[]="( j.publish_up = '". $_db->_escape($nullDate)."' OR j.publish_up <= '".$_db->_escape($now)."')";
	$where[]="( j.publish_down = '".$_db->_escape($nullDate)."' OR j.publish_down >= '".$_db->_escape($now)."')";

	$category=lknGetParamatre($_GET,'category');
	if ($category!='') {
		$category=str_replace('-',',',$category);
		$where[]="j.cat_id IN($category)";
	}

	$where[]="j.cat_id=c.id";

	$company=lknGetParamatre($_GET,'company');
	if ($company!='') {
		$company=str_replace('-',',',$company);
		$where[]="j.company_id IN($company)";
	}

	$where[]="j.company_id=company.id";

	$country=lknGetParamatre($_GET,'country');
	if ($country!='') {
		$country=str_replace('-',',',$country);
		$where[]="j.country IN($country)";
	}

	$where[]="j.country=country.id";

	$where[]="company.published='1'";
	$where[]="country.published='1'";
	$where[]="c.published='1'";
	$where[] ="j.published='1'";


	$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

	$sql="SELECT j.id AS id, j.created AS pubDate , j.title AS title,j.description AS description,";
	$sql.="\n j.alias AS alias,company.title AS company_name,";
	$sql.="\n company.alias AS company_alias, c.alias AS category_alias";
	$sql.="\n FROM #__jobs_jobs AS j,";
	$sql.="\n #__jobs_categories AS c,";
	$sql.="\n  #__jobs_countries AS country,";
	$sql.="\n #__jobs_companies AS company";
	$sql.=$where;
	$sql.="\n ORDER BY j.created DESC";
	$sql.="\n LIMIT 0,$feed_count";
	//echo $sql;
	$_db->query($sql);
	$_db->setQuery();
	$rows=$_db->loadObjectList();
	$rss->get($rows);
	$_lknBaseFramework->close();
}

/**
 * sayfa başlığına rss linki ekler. &category=2 veya &country=240 veya &company=3 veya boş değer alabilir
 *
 * @param string/null $data
 */
function addRssFeedToHead($data){
	global $_config,$_lknBaseFramework;
	$itemid=lknJobsItemId();
	$feed_description=$_config['rss_feeds_description'];
	$url=LIVE_SITE . '/index.php?option=com_jobs&amp;task=rss'.$itemid;
	if ($data!='') {
		$url.=$data;
	}


	$url="<link rel=\"alternate\" type=\"application/rss+xml\" title=\"$feed_description\" href=\"$url\" />";

	//echo $url;
	$_lknBaseFramework->AddCustomHeadTags($url);


}


/**
 * acces control işini halleder
 *
 * @param string $type: r-kayıtlı kullanıcılar , o : owner işlem yapabilir
 * @param array $params
 * @return boolen
 */
function checkAcl($type,$params='')
{
	$user=new lknUser();
	$user_id=$user->getUserID();

	if ($type=='r') {
		//yalnızca üyeler görebilir
		if ($user_id=='') {
			return false;
		}
	}elseif ($type=='o') {
		//yalnızca sahibi işlem yapabilir
		$member_id=$params['memberid'];
		if ($user_id=='') {
			return false;
		}elseif ($user_id!=$member_id)
		{
			return false;
		}
	}

	return true;

}

function print_resume(){
	lknJobsFunctions::print_resume();
}

/**
 * şirket fonksiyonlarının aktif olup olmadığını kontrol eder
 *
 * @return boolen
 */
function checkCompanyFunctions()
{
	global $_config;

	$active=$_config['company_activate'];

	$user=new lknUser();
	$user_type=$user->getUserType();

	if ($user_type=='Super Administrator') {
		return true;
	}else
	{
		if ($active=='1') {
			return true;
		}else {
			return false;
		}
	}
}

/**
 * şirket fonksiyonlarının aktif olup olmadığını kontrol eder
 *
 * @return boolen
 */
function checkJobSeekerFunctions(){

	global $_config;

	$active=$_config['job_seeker_activate'];

	$user=new lknUser();
	$user_type=$user->getUserType();

	if ($user_type=='Super Administrator') {
		return true;
	}else
	{
		if ($active=='1') {
			return true;
		}else {
			return false;
		}
	}
}

function admin(){
	global $_db,$_config;
	
	$template=lknRegistry::get('lknjobstemplate');//tema için başladık
	$tmpl=new lknTemplate($template);
	
	
	
	$sql="DELETE FROM #__jobs_admin WHERE created < DATE_SUB(NOW(), INTERVAL 7 DAY)";
	$_db->query($sql);
	$_db->setQuery();

	$action=lknGetParamatre($_GET,'action');
	$sid=lknGetParamatre($_GET,'sid');

	$sql="SELECT * FROM #__jobs_admin WHERE sid='$sid'";
	$_db->query($sql);
	$_db->setQuery();
	$row=$_db->loadObjectList();
	$count=$_db->num_rows();

	if ($count>0) {
		$table_name=$row[0]->table_name;
		$id=$row[0]->id;
		if ($action=='publish') {
			$sql="UPDATE #__jobs_companies SET published='1' WHERE id='$id'";
			$_db->query($sql);
			$_db->setQuery();
			$msg="Company is successfuly published";
			$image=LIVE_SITE . '/components/com_jobs/templates/default/images/published.gif';
			$task='publish_company';
		}elseif ($action=='unpublish'){
			$sql="UPDATE #__jobs_companies SET published='0' WHERE id='$id'";
			$_db->query($sql);
			$_db->setQuery();
			$msg="Company is successfuly unpublished";
			$image=LIVE_SITE . '/components/com_jobs/templates/default/images/published.gif';
			$task='unpublish_company';
		}
		
		//onaylandığına dair mail gönderme başladı
			$inform_user=$_config['employer_inform_on_company_approve'];
			if ($inform_user=='1') {
				lknJobsFunctions::employerMail($task,$id);
			}
		//onaylandığına dair mail gönderme bitti
			
	}else {
		$msg="The link you have used is expired or non-exist link. No changes has been made";
		$image=LIVE_SITE . '/components/com_jobs/templates/default/images/published_x.gif';
	}
	$tmpl->set('image',$image);
	$tmpl->set('msg',$msg);
	echo $tmpl->fetch('admin.message.php');
}

function fetch_jobs_top($tmpl){
	
			global $_config,$task;
			
			
			$action=lknGetParamatre($_GET,'action');
			$show_tool_bar=$_config['show_tool_bar'];
			$val1=strpos($task,'publish_');
			$val2=strpos($task,'unpublish_');
			$val3=strpos($task,'delete_');
			$val4=strpos($task,'update_');
			$val5=strpos($task,'save_');
			
			
			
			if ($show_tool_bar=='0' 
				|| $task=='print_resume' 
				|| $action=='company_view'
			 	) {
				return '';
			}		
			
			
			$Itemid=lknJobsItemId();
			$home="index.php?option=com_jobs" . $Itemid;
			$home=lknSef::url($home);

			$employer_tools="index.php?option=com_jobs&task=employer" . $Itemid;
			$employer_tools=lknSef::url($employer_tools);

			$job_seeker_tools="index.php?option=com_jobs&task=worker" . $Itemid;
			$job_seeker_tools=lknSef::url($job_seeker_tools);

			$user=new lknUser();
			$user_id=$user->getUserID();
			$jUserType=$user->getUserType();
			$name=$user->getName();
			if ($name=='') {
				$name=_lkn_toolbar_message_guest;
			}

			$greetings=_lkn_toolbar_message;
			$greetings=str_replace('{USERNAME}',$name,$greetings);

			$userType=lknJobsFunctions::getType();
			
			$company_functions=checkCompanyFunctions();
			$job_seeker_functions=checkJobSeekerFunctions();
			$user_registration_way=$_config['user_registration'];
			//1: On First Visit
			//2: With Plugins
			
			$tmpl->set('home',$home);
			$tmpl->set('userType',$userType);
			$tmpl->set('user_registration_way',$user_registration_way);
			$tmpl->set('user_id',$user_id);
			$tmpl->set('company_functions',$company_functions);
			$tmpl->set('job_seeker_functions',$job_seeker_functions);
			$tmpl->set('employer_tools',$employer_tools);
			$tmpl->set('jUserType',$jUserType);
			$tmpl->set('job_seeker_tools',$job_seeker_tools);
			$tmpl->set('greetings',$greetings);
			$tmpl->set('Itemid',$Itemid);
			
			return $tmpl->fetch('top.php');
			
}

function getIndeedCodes(){
	
	global $_config;
	$show_indeed=$_config['home_page_indeed'];
	$indeed_code='';
	if ($show_indeed=='1') {
		$jobroll_AdCSS = $_config['home_page_indeed_ad_css'];
		$jobroll_PublisherID = $_config['home_page_indeed_jobroll_clientId'];
		$jobroll_AdKeywords = $_config['home_page_indeed_jobroll_ad_keywords'];
		$jobroll_AdLocation = $_config['home_page_indeed_jobroll_ad_location'];
		$jobroll_AdCountry = $_config['home_page_indeed_jobroll_ad_country'];
		$jobroll_AdChannel = $_config['home_page_indeed_jobroll_ad_channel'];
		
		//default values for jobroll
		$default_jobroll_AdKeywords = "php developer";
		$default_jobroll_AdLocation = "NY";
		$default_jobroll_AdCountry = "US";
		$default_jobroll_AdChannel = "php";
		

		//4 sizes for ad format are available
		$jobroll_ad_format = $_config['home_page_indeed_ad_format'];
		
		//default size for ad format
		$default_jobroll_ad_format = "120x600";
		
		//10 color customizations for jobroll are available
		$jobroll_background = $_config['home_page_indeed_jobroll_color_background'];
		$jobroll_title = $_config['home_page_indeed_jobroll_color_title'];
		$jobroll_border = $_config['home_page_indeed_jobroll_color_border'];
		$jobroll_jobtitle = $_config['home_page_indeed_jobroll_color_jobtitle'];
		$jobroll_accent = $_config['home_page_indeed_jobroll_color_accent'];
		$jobroll_link = $_config['home_page_indeed_jobroll_color_link'];
		$jobroll_text = $_config['home_page_indeed_jobroll_color_text'];
		$jobroll_company = $_config['home_page_indeed_jobroll_color_company'];
		$jobroll_source = $_config['home_page_indeed_jobroll_color_source'];
		$jobroll_location = $_config['home_page_indeed_jobroll_color_location'];


		if ($jobroll_AdCSS!=''){
			$indeed_code.="<div style=\"" . $jobroll_AdCSS . "\">\r\n";
		}
		$indeed_code.="<!-- Indeed Jobroll module by InstantPhp.com :: http://www.instantphp.com -->\r\n";
		$indeed_code.="<script type=\"text/javascript\"><!--\r\n";
	    
		if ($jobroll_ad_format!=''){
			$indeed_code.="indeed_jobroll_format = \"" . $jobroll_ad_format . "\";\r\n";
		} else {
			$indeed_code.="indeed_jobroll_format = \"" . $default_jobroll_ad_format . "\";\r\n";
		}
	
		
		if ($jobroll_PublisherID!=''){
			$indeed_code.="indeed_jobroll_publisher = \"" . $jobroll_PublisherID . "\";\r\n";
		} else {
			$indeed_code.="indeed_jobroll_publisher = \"2947790273599344\";\r\n";
		}
			
		 if ($jobroll_AdKeywords!=''){
		 	$indeed_code.="indeed_jobroll_keywords = \"" . $jobroll_AdKeywords . "\";\r\n";
		 } else {
		 	$indeed_code.="indeed_jobroll_keywords = \"" . $default_jobroll_AdKeywords . "\";\r\n";
		 }
				
		 if($jobroll_AdLocation!=''){
			$indeed_code.="indeed_jobroll_location = \"" . $jobroll_AdLocation . "\";\r\n";
		 } else {
		 	$indeed_code.="indeed_jobroll_location = \"" . $default_jobroll_AdKeywords . "\";\r\n";
		 }
		 if($jobroll_AdCountry!=''){
		 	$indeed_code.="indeed_jobroll_country = \"" . $jobroll_AdCountry . "\";\r\n";
		 } else {
		 	$indeed_code.="indeed_jobroll_country = \"" . $default_jobroll_AdCountry . "\";\r\n";
		 }
		 if($jobroll_AdChannel!=''){
			$indeed_code.="indeed_jobroll_channel = \"" . $jobroll_AdCountry . "\";\r\n";
		 } else {
		 	$indeed_code.="indeed_jobroll_channel = \"" . $default_jobroll_AdChannel . "\";\r\n";
		 }
		 
		 $indeed_code.="indeed_color_background = \"".$jobroll_background."\";\r\n";
		 $indeed_code.="indeed_color_title = \"".$jobroll_title."\";\r\n";
		 $indeed_code.="indeed_color_border = \"".$jobroll_border."\";\r\n";
		 $indeed_code.="indeed_color_jobtitle = \"".$jobroll_jobtitle."\";\r\n";
		 $indeed_code.="indeed_color_text = \"".$jobroll_text."\";\r\n";
		 $indeed_code.="indeed_color_company = \"".$jobroll_company."\";\r\n";
		 $indeed_code.="indeed_color_link = \"".$jobroll_link."\";\r\n";
		 $indeed_code.="indeed_color_source = \"".$jobroll_source."\";\r\n";
		 $indeed_code.="indeed_color_accent = \"".$jobroll_accent."\";\r\n";
		 $indeed_code.="indeed_color_location = \"".$jobroll_location."\";\r\n";
		 $indeed_code.="//--> \r\n";
		 $indeed_code.="</script>\r\n";
		 $indeed_code.="<script type=\"text/javascript\" src=\"http://jobroll.indeed.com/ads/jobroll2.js\">\r\n";
		 $indeed_code.="</script>\r\n";
		 $indeed_code.="<!-- Indeed Jobroll by Instant Php :: http://www.instantphp.com -->\r\n";
		 if ($jobroll_AdCSS!=''){
		 	$indeed_code.='</div>';
		 }
	}
	
	return $indeed_code;

}
?>