<?php


if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class lknJobsTools {
	function check_unstable_records(){
		
		
		//resume tablosu kontrolü başladı
			//memberid=0 olan kayıtları silme başladı
				$db=&lknDb::createInstance();
				$db->query("DELETE FROM #__jobs_resumes WHERE memberid='0'");
				$db->setQuery();
				$count=$db->getAffectedRows();
			//memberid=0 olan kayıtları silme başladı
			
			//kullanıcı veritabanından silinmiş ama jobs_resumes tablosunda olan kayıtları silme başladı
				$db_u=&lknDb::createInstance();
				$sql="SELECT r.memberid FROM `#__jobs_resumes` AS r, `#__users` AS u WHERE r.memberid = u.id GROUP BY r.memberid";
				$db_u->query($sql);
				$db_u->setQuery();
				$rows=$db_u->loadObjectList();
				$user_list='';
				foreach ($rows AS $row){
					$memberid=$row->memberid;
					$user_list.=",$memberid";
				}
				
				$user_list=lknText::cleanFirst($user_list,',');
				
				$db_r=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_resumes WHERE memberid NOT IN ($user_list);";
				$db_r->query($sql);
				$db_r->setQuery();
				$count+=$db_r->getAffectedRows();
			//kullanıcı veritabanından silinmiş ama jobs_resumes tablosunda olan kayıtları silme başladı
		//resume tablosu kontrolü başladı
		//company tablosu kontrolü başladı
			//memberid=0 olan kayıtları silme başladı
				$db_c=&lknDb::createInstance();
				$db->query("DELETE FROM #__jobs_companies WHERE memberid='0'");
				$db->setQuery();
				$count+=$db->getAffectedRows();
			//memberid=0 olan kayıtları silme başladı
			
			//kullanıcı veritabanından silinmiş ama jobs_companies tablosunda olan kayıtları silme başladı
				$db_c1=&lknDb::createInstance();
				$sql="SELECT c.memberid FROM `#__jobs_companies` AS c, `#__users` AS u WHERE c.memberid = u.id GROUP BY c.memberid";
				$db_c1->query($sql);
				$db_c1->setQuery();
				$rows=$db_c1->loadObjectList();
				$user_list='';
				foreach ($rows AS $row){
					$memberid=$row->memberid;
					$user_list.=",$memberid";
				}
				
				$user_list=lknText::cleanFirst($user_list,',');
				
				$db_c2=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_companies WHERE memberid NOT IN ($user_list);";
				$db_c2->query($sql);
				$db_c2->setQuery();
				$count+=$db_c2->getAffectedRows();
			//kullanıcı veritabanından silinmiş ama jobs_companies tablosunda olan kayıtları silme başladı
		//company tablosu kontrolü bitti
		
		//jobs tablosu kontrolü başladı
				//country, cat_id, company_id problem çıkartabilir
				$db_country=&lknDb::createInstance();
				$sql="SELECT c.id FROM `#__jobs_countries` AS c";
				$db_country->query($sql);
				$db_country->setQuery();
				$rows=$db_country->loadObjectList();
				$country_list='';
				foreach ($rows AS $row){
					$country_id=$row->id;
					$country_list.=",$country_id";
				}
				$country_list=lknText::cleanFirst($country_list,',');
				
				$db_jobs=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_jobs WHERE country NOT IN ($country_list);";
				$db_jobs->query($sql);
				$db_jobs->setQuery();
				$count+=$db_jobs->getAffectedRows();
				
				$db_cat_id=&lknDb::createInstance();
				$sql="SELECT c.id FROM `#__jobs_categories` AS c";
				$db_cat_id->query($sql);
				$db_cat_id->setQuery();
				$rows=$db_cat_id->loadObjectList();
				$category_list='';
				foreach ($rows AS $row){
					$category_id=$row->id;
					$category_list.=",$category_id";
				}
				$category_list=lknText::cleanFirst($category_list,',');
				
				$db_jobs2=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_jobs WHERE cat_id NOT IN ($category_list);";
				$db_jobs2->query($sql);
				$db_jobs2->setQuery();
				$count+=$db_jobs2->getAffectedRows();
				
				$db_company_id=&lknDb::createInstance();
				$sql="SELECT c.id FROM `#__jobs_companies` AS c";
				$db_company_id->query($sql);
				$db_company_id->setQuery();
				$rows=$db_company_id->loadObjectList();
				$company_list='';
				foreach ($rows AS $row){
					$company_id=$row->id;
					$company_list.=",$company_id";
				}
				$company_list=lknText::cleanFirst($company_list,',');
				
				$db_jobs3=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_jobs WHERE company_id NOT IN ($company_list);";
				$db_jobs3->query($sql);
				$db_jobs3->setQuery();
				$count+=$db_jobs3->getAffectedRows();
																
		//jobs tablosu kontrolü bitti	
		//jobs_applications tablosu kontrolü başladı
				//job_id, resume_id, status				
				$db_status_id=&lknDb::createInstance();
				$sql="SELECT s.id FROM `#__jobs_status` AS s";
				$db_status_id->query($sql);
				$db_status_id->setQuery();
				$rows=$db_status_id->loadObjectList();
				$status_list='';
				foreach ($rows AS $row){
					$status_id=$row->id;
					$status_list.=",$status_id";
				}
				$status_list=lknText::cleanFirst($status_list,',');
				
				$db_application1=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_applications WHERE status NOT IN ($status_list);";
				$db_application1->query($sql);
				$db_application1->setQuery();
				$count+=$db_application1->getAffectedRows();
				
				$db_resume_id=&lknDb::createInstance();
				$sql="SELECT r.id FROM `#__jobs_resumes` AS r";
				$db_resume_id->query($sql);
				$db_resume_id->setQuery();
				$rows=$db_resume_id->loadObjectList();
				$resume_list='';
				foreach ($rows AS $row){
					$resume_id=$row->id;
					$resume_list.=",$resume_id";
				}
				$resume_list=lknText::cleanFirst($resume_list,',');

				$db_application2=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_applications WHERE resume_id NOT IN ($resume_list);";
				$db_application2->query($sql);
				$db_application2->setQuery();
				$count+=$db_application2->getAffectedRows();

				$db_job_id=&lknDb::createInstance();
				$sql="SELECT j.id FROM `#__jobs_jobs` AS j";
				$db_job_id->query($sql);
				$db_job_id->setQuery();
				$rows=$db_job_id->loadObjectList();
				$job_list='';
				foreach ($rows AS $row){
					$job_id=$row->id;
					$job_list.=",$job_id";
				}
				$job_list=lknText::cleanFirst($job_list,',');

				$db_application3=&lknDb::createInstance();
				$sql="DELETE FROM #__jobs_applications WHERE job_id NOT IN ($job_list);";
				$db_application3->query($sql);
				$db_application3->setQuery();
				$count+=$db_application3->getAffectedRows();
		//jobs_applications tablosu kontrolü bitti
				
			if ($count>0) {
				$msg="$count unstable record is fixed";
			}else {
				$msg="There is no unstable record";
			}
			
			return $msg;
	}
}
?>