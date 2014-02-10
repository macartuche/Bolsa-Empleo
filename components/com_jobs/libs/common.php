<?php

function lknJobsItemId($number = "false") {

	global $_config;
	global $_db;
	$Itemid = $_config["lknJobsItemid"];
	if (($Itemid == "") && !(isset($Itemid)))
	{
		$_db->query("SELECT id FROM #__menu WHERE link = 'index.php?option=com_jobs' AND published=1");
		$_db->setQuery();
		$Itemid = (int)$_db->getFistRecord();
	}
	if ($number == "true")
	{
		return $Itemid;
	}
	return '' . "&Itemid=" . $Itemid;
}

function lknJobsSendFile($file_id, $resume_id) {

	global $_db;
	global $_lknBaseFramework;
	global $_config;
	$itemid = lknjobsitemid();
	$action = lkngetparamatre($_GET, "action");
	$user = new lknUser();
	$user_type = $user->getUserType();
	$user_id = $user->getUserID();
	if ($file_id != "")
	{
		$where = array();
		$where[] = '' . "rf.file_id='" . $file_id . "'";
		$where[] = '' . "rf.resume_id='" . $resume_id . "'";
		$where[] = "rf.resume_id=r.id";
		$where[] = "rf.file_id=f.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT r.*,f.file_name AS file_name";
		$sql .= "
 FROM #__jobs_resumes AS r, #__jobs_resume_files2resumes rf,#__jobs_resume_files AS f";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		$row = $_db->loadObjectList();
		$count = $_db->num_rows();
		if ($count == "1")
		{
			$row = $row[0];
		}
		 else 
		{
			echo _lkn_error_attachment_can_not_download;
			return;
		}
		if ($action == "company_view")
		{
			$credit_system_active = $_config["credit_system_active"];
			if ($credit_system_active == "1")
			{
				if ($user_type != "Super Administrator")
				{
					$date = new lknDate();
					$now = $date->getDate();
					$credit_data = lknJobsFunctions::getusercredit($user_id);
					$count = count($credit_data);
					if ($count == "0")
					{
						echo _lkn_error_acl_permission;
						return;
					}
					$can_search_end = $credit_data->can_search_end;
					$params["memberid"] = $user_id;
					$canDo = checkacl("o", $params);
					if ($canDo == false)
					{
						echo _lkn_error_acl_permission;
						return;
					}
					if ($now > $can_search_end)
					{
						$msg = _lkn_employer_can_not_search_resume_database_;
						echo '' . "<h1>" . $msg . "</h1>";
						return;
					}
				}
			}
			 else 
			{
				$company_count = lknJobsFunctions::getcompanycount($user_id, "1");
				if (!($company_count > 0))
				{
					echo _lkn_error_acl_permission;
					return;
				}
			}
		}
		 else 
		{
			if ($action == "admin")
			{
				if ($user_type != "Super Administrator")
				{
					echo _lkn_error;
					return;
				}
			}
			 else 
			{
				if ($action == "employer_application")
				{
					$db_a = &lknDb::createinstance();
					$where = array();
					$where[] = "a.job_id=j.id";
					$where[] = "a.resume_id=r.id";
					$where[] = "a.status=s.id";
					$where[] = "j.cat_id=c.id";
					$where[] = "j.company_id=company.id";
					$where[] = "j.country=country.id";
					$where[] = "rf.resume_id=r.id";
					$where[] = "r.memberid=u.id";
					$where[] = '' . "a.resume_id='" . $resume_id . "'";
					$where[] = '' . "company.memberid='" . $user_id . "'";
					$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
					$sql = "SELECT a.id";
					$sql .= "
 FROM #__jobs_applications AS a,";
					$sql .= "
 #__jobs_resumes AS r,";
					$sql .= "
 #__jobs_resume_files2resumes rf,";
					$sql .= "
 #__jobs_status AS s,";
					$sql .= "
 #__jobs_categories AS c,";
					$sql .= "
 #__jobs_countries AS country,";
					$sql .= "
 #__users AS u,";
					$sql .= "
 #__jobs_companies AS company,";
					$sql .= "
 #__jobs_jobs AS j";
					$sql .= $where;
					$db_a->query($sql);
					$db_a->setQuery();
					$count = $db_a->num_rows();
					if (!($count > 0))
					{
						echo _lkn_error_attachment_can_not_download;
						return;
					}
				}
				 else 
				{
					$params["memberid"] = $row->memberid;
					$canDo = checkacl("o", $params);
					if ($canDo == false)
					{
						echo _lkn_error_attachment_can_not_download;
						return;
					}
				}
			}
		}
		$file_name = $row->file_name;
		if (!(lknFiles::file_exists(JOOMLA_ROOT . str_replace("/", LKN_DS, $_config["files_folder"]) . $file_name)))
		{
			echo _lkn_error_attachment_can_not_download;
			return;
		}
		lknJobsFunctions::increasefilehit($file_id);
		$object = new lknHttpDownload(JOOMLA_ROOT . str_replace("/", LKN_DS, $_config["files_folder"]), $file_name);
		$object->download();
		return;
	}
	echo _lkn_error;
	return;
}

function lknJobsConfiguration() {

	$db = &lknDb::createinstance();
	$_config = array();
	$sql = "SELECT * FROM #__jobs_config";
	$db->query($sql);
	$db->setQuery();
	$rows = $db->loadObjectList();
	foreach ($rows as $row)
	{
		$name = $row->name;
		$value = $row->value;
		$_config[$name] = $value;
		continue;
	}
	return $_config;
}


require_once dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "lknlibrary" . DIRECTORY_SEPARATOR . "lknlibrary" . DIRECTORY_SEPARATOR . "functions.misc.php";
global $_lknBaseFramework;
global $_db;
global $_config;
lknimport("library");
$jdetaylari = joomlaversion();
$_lknBaseFramework = new lknBaseFramework($jdetaylari);
lknimport("defines");
$_db = new lknDb();
$_config = lknjobsconfiguration();
require_once JOOMLA_ROOT . "/components/com_jobs/libs/version.php";
lknLicense::isvalid();


class lknJobsFunctions {


	public $isEmployer = 0;
	public $isWorker = 0;

	public function getPublishingImage($published) {

		global $_lknBaseFramework;
		$image_path = LIVE_SITE . "/components/com_jobs/images";
		$image = "";
		if ($published == 1)
		{
			$image .= '' . "<img src=\"" . $image_path . "/published.png\" border=\"0\" alt=\"" . _lkn_published . "\" title=\"" . _lkn_published . "\">";
		}
		 else 
		{
			if ($published == 0)
			{
				$image .= '' . "<img src=\"" . $image_path . "/published_x.png\" border=\"0\" alt=\"" . _lkn_published_x . "\" title=\"" . _lkn_published_x . "\">";
			}
			 else 
			{
				if ($published == "-1")
				{
					$image .= '' . "<img src=\"" . $image_path . "/draft.png\" border=\"0\" alt=\"" . _lkn_draft . "\" title=\"" . _lkn_draft . "\">";
				}
				 else 
				{
					if ($published == "-2")
					{
						$image .= '' . "<img src=\"" . $image_path . "/draft.png\" border=\"0\" alt=\"" . _lkn_published_deleted . "\" title=\"" . _lkn_published_deleted . "\">";
					}
				}
			}
		}
		return $image;
	}

	public function publishSelectList_($name, $selectValue = "", $extra = "", $published = _lkn_published, $published_x = _lkn_published_x, $draft = _lkn_draft, $select_state = _lkn_select_state) {

		$data = array();
		$data["1"] = $published;
		$data["0"] = $published_x;
		$data["-1"] = $draft;
		$data[""] = $select_state;
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, 0);
	}

	public function publishSelectList_resume($name, $selectValue = "", $extra = "", $published = _lkn_published, $published_x = _lkn_published_x, $deleted = _lkn_published_deleted, $select_state = _lkn_select_state) {

		$data = array();
		$data["1"] = $published;
		$data["0"] = $published_x;
		$data["-2"] = $deleted;
		$data[""] = $select_state;
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, 0);
	}

	public function getActiveImage($published) {

		global $_lknBaseFramework;
		$image = "";
		if ($published == 1)
		{
			$image .= "<img src=\"" . TEMPLATE_IMAGE_PATH . "active.gif\" border=\"0\" alt=\"active\">";
		}
		 else 
		{
			if ($published == 0)
			{
				$image .= "<img src=\"" . TEMPLATE_IMAGE_PATH . "inactive.gif\" border=\"0\" alt=\"inactive\">";
			}
		}
		return $image;
	}

	public function getPublishLink($publish, $image, $publish_action, $unpublish_action, $id) {

		$itemid = lknjobsitemid();
		if ($publish == 1)
		{
			$image = "<a href=\"" . lknSef::url('' . "index.php?option=com_jobs&task=" . $unpublish_action . "&id=" . $id . $itemid) . ('' . "\">" . $image . "</a>");
		}
		 else 
		{
			if ($publish == 0)
			{
				$image = "<a href=\"" . lknSef::url('' . "index.php?option=com_jobs&task=" . $publish_action . "&id=" . $id . $itemid) . ('' . "\">" . $image . "</a>");
			}
		}
		return $image;
	}

	public function getPublishedStatus($published) {

		if ($published == 1)
		{
			return _lkn_published;
		}
		if ($published == 0)
		{
			return _lkn_published_x;
		}
		if ($published == 0 - 2)
		{
			return _lkn_published_deleted;
		}
		return;
	}

	public function printYesBo($value) {

		if ($value == 1)
		{
			return _lkn_yes;
		}
		if ($value == 0)
		{
			return _lkn_no;
		}
		return "";
	}

	public function getCompanyList($name, $selectValue = "", $extra = "", $memberid = "", $first = 0) {

		$_db = &lknDb::createinstance();
		$data = array();
		$sql = "SELECT id,title FROM #__jobs_companies";
		$sql .= "
 WHERE published='1'";
		if ($memberid != "")
		{
			$sql .= '' . "
 AND memberid='" . $memberid . "'";
		}
		$sql .= "
 ORDER BY title";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$data[$row["id"]] = temizleslash($row["title"]);
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, $first);
	}

	public function getCompanies($count, $sort = "latest") {

		$_db = &lknDb::createinstance();
		switch ($sort)
		{
			case "latest":
			{
				$ordering = " ORDER BY id DESC";
				break;
			}
			case "random":
			{
				$ordering = " ORDER BY RAND()";
				break;
			}
			default:
			{
				$ordering = " ORDER BY id DESC";
				break;
			}
		}
		$limit = '' . " LIMIT 0," . $count;
		$data = array();
		$sql = "SELECT id,title,logo,alias FROM #__jobs_companies";
		$sql .= "
 WHERE published='1' AND logo!=''";
		$sql .= $ordering;
		$sql .= $limit;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->loadObjectList();
	}

	public function getResumeFiles($name, $selectValue = "", $extra = "", $memberid = "", $first = 0) {

		$_db = &lknDb::createinstance();
		$data = array();
		if ($memberid != "")
		{
			$sql = "SELECT id,file_name FROM #__jobs_resume_files";
			$sql .= "
 WHERE published='1'";
			$sql .= '' . "
 AND memberid='" . $memberid . "'";
			$sql .= "
 ORDER BY file_name";
			$_db->query($sql);
			$_db->setQuery();
			while ($row = $_db->fetch_array())
			{
				$data[$row["id"]] = temizleslash($row["file_name"]);
				continue;
			}
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, $first);
	}

	public function getResumeFilesObject($resume_id) {

		$_db = &lknDb::createinstance();
		$where[] = '' . "rf.resume_id='" . $resume_id . "'";
		$where[] = "rf.file_id=f.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT f.* FROM #__jobs_resume_files2resumes AS rf, #__jobs_resume_files AS f";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->loadObjectList();
	}

	public function getPerviousApplications($company_id, $memberid, $application_id) {

		$_db = &lknDb::createinstance();
		$where = array();
		$where[] = "a.job_id=j.id";
		$where[] = "a.resume_id=r.id";
		$where[] = "j.company_id=c.id";
		$where[] = "a.status=s.id";
		$where[] = '' . "c.id='" . $company_id . "'";
		$where[] = '' . "r.memberid='" . $memberid . "'";
		$where[] = '' . "a.id!='" . $application_id . "'";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT a.*,r.title AS resume_title,s.title AS status_title,j.title AS job_title,";
		$sql .= "
 r.language AS resume_language, j.reference AS job_ref";
		$sql .= "
 FROM #__jobs_applications AS a,";
		$sql .= "
 #__jobs_jobs AS j,";
		$sql .= "
 #__jobs_status AS s,";
		$sql .= "
 #__jobs_companies AS c,";
		$sql .= "
 #__jobs_resumes AS r";
		$sql .= $where;
		$sql .= "
 ORDER BY a.application_date DESC";
		$_db->query($sql);
		$_db->setQuery();
		return $_db->loadObjectList();
	}

	public function getUsers($name, $selectValue = "", $extra = "") {

		$_db = &lknDb::createinstance();
		$data = array();
		$sql = "SELECT u.id,u.username,c.title AS company, r.id AS resume_id, u.block AS blocked \r
		 FROM #__users AS u\r
		 LEFT JOIN #__jobs_companies AS c\r
		 ON u.id = c.memberid\r
		 LEFT JOIN #__jobs_resumes AS r\r
  		 ON r.memberid = u.id ORDER BY u.username";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$id = $row["id"];
			$username = $row["username"];
			$company = $row["company"];
			$resume_id = $row["resume_id"];
			$blocked = $row["blocked"];
			if ($company != "")
			{
				$username .= " - E";
			}
			if ($resume_id != "")
			{
				$username .= " - J";
			}
			if ($blocked == "1")
			{
				$username .= " - B";
			}
			$data[$id] = $username;
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra);
	}

	public function getStatus($name, $selectValue = "", $extra = "", $first = 0) {

		$_db = &lknDb::createinstance();
		$data = array();
		$sql = "SELECT id,title FROM #__jobs_status WHERE published='1' ORDER BY title";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$data[$row["id"]] = temizleslash($row["title"]);
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, $first);
	}

	public function getJobCountries($name, $selectValue = "", $extra = "", $first = 0, $fd = _lkn_country_select) {

		$_db = &lknDb::createinstance();
		$data = array();
		if ($first == 1)
		{
			$data[""] = $fd;
		}
		$sql = "SELECT id,title FROM #__jobs_countries WHERE published='1' ORDER BY title";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$data[$row["id"]] = temizleslash($row["title"]);
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, 0);
	}

	public function getCoverLetterList($name, $selectValue = "", $extra = "") {

		$_db = &lknDb::createinstance();
		$data = array();
		$user = new lknUser();
		$user_id = $user->getUserID();
		$sql = '' . "SELECT title,cover_letter FROM #__jobs_cover_letters WHERE memberid='" . $user_id . "' AND published='1' ORDER BY title";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$data[$row["cover_letter"]] = $row["title"];
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, "", $extra);
	}

	public function getResumeList($name, $selectValue = "", $extra = "") {

		$_db = &lknDb::createinstance();
		$data = array();
		$user = new lknUser();
		$user_id = $user->getUserID();
		$sql = '' . "SELECT id,title FROM #__jobs_resumes WHERE memberid='" . $user_id . "' AND published='1' ORDER BY title";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$data[$row["id"]] = $row["title"];
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, "", $extra);
	}

	public function getJobType($name, $selectValue = "", $extra = "") {

		$data = array();
		$db = &lknDb::createinstance();
		$sql = "SELECT * FROM #__jobs_job_types WHERE published='1'";
		$db->query($sql);
		$db->setQuery();
		$rows = $db->loadObjectList();
		foreach ($rows as $row)
		{
			$id = $row->id;
			$title = temizleslash($row->title);
			$data[$id] = $title;
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, 1);
	}

	public function writeJobType($type) {

		$db = &lknDb::createinstance();
		$sql = '' . "SELECT * FROM #__jobs_job_types WHERE published='1' AND id='" . $type . "'";
		$db->query($sql);
		$db->setQuery();
		$count = $db->num_rows();
		if ($count == "0")
		{
			return "";
		}
		$row = $db->loadObject();
		$title = $row->title;
		$title = temizleslash($title);
		return $title;
	}

	public function getUserCredit($user_id) {

		$_db = &lknDb::createinstance();
		$sql = '' . "SELECT * FROM #__jobs_credits WHERE user_id='" . $user_id . "'";
		$_db->query($sql);
		$_db->setQuery();
		$row = $_db->getFistRecord();
		return $row;
	}

	public function log_user_credits($params) {

		$_db = &lknDb::createinstance();
		$action = $params["action"];
		if ($action == "1")
		{
			$data["job_id"] = $params["job_id"];
			$data["action"] = $params["action"];
			$user_id = $params["user_id"];
			$data["user_id"] = $user_id;
			$credit = $params["credits"];
			$data["credits"] = $credit;
			$sql = $_db->CreateInsertSql($data, "#__jobs_credits_spending_history");
			$_db->query($sql);
			$_db->setQuery();
			$sql = '' . "UPDATE #__jobs_credits SET credits = ( credits - " . $credit . " ) WHERE user_id='" . $user_id . "'";
			$_db->query($sql);
			$_db->setQuery();
			return;
		}
		if ($action == "2")
		{
			$data["action"] = $params["action"];
			$user_id = $params["user_id"];
			$data["user_id"] = $user_id;
			$credit = $params["credits"];
			$data["credits"] = $credit;
			$data["old_date"] = $params["old_date"];
			$new_date = $params["new_date"];
			$data["new_date"] = $new_date;
			$sql = $_db->CreateInsertSql($data, "#__jobs_credits_spending_history");
			$_db->query($sql);
			$_db->setQuery();
			$sql = '' . "UPDATE #__jobs_credits SET credits = ( credits - " . $credit . " ), can_search_end='" . $new_date . "' WHERE user_id='" . $user_id . "'";
			$_db->query($sql);
			$_db->setQuery();
			return;
		}
		if ($action == "3")
		{
			$data["job_id"] = $params["job_id"];
			$data["action"] = $params["action"];
			$user_id = $params["user_id"];
			$data["user_id"] = $user_id;
			$credit = $params["credits"];
			$data["credits"] = $credit;
			$sql = $_db->CreateInsertSql($data, "#__jobs_credits_spending_history");
			$_db->query($sql);
			$_db->setQuery();
			$sql = '' . "UPDATE #__jobs_credits SET credits = ( credits - " . $credit . " ) WHERE user_id='" . $user_id . "'";
			$_db->query($sql);
			$_db->setQuery();
			return;
		}
		if ($action == "4")
		{
			$data["job_id"] = $params["job_id"];
			$data["action"] = $params["action"];
			$user_id = $params["user_id"];
			$data["user_id"] = $user_id;
			$credit = $params["credits"];
			$data["credits"] = $credit;
			$sql = $_db->CreateInsertSql($data, "#__jobs_credits_spending_history");
			$_db->query($sql);
			$_db->setQuery();
			$sql = '' . "UPDATE #__jobs_credits SET credits = ( credits - " . $credit . " ) WHERE user_id='" . $user_id . "'";
			$_db->query($sql);
			$_db->setQuery();
		}
		return;
	}

	public function getCreditsBuyingHistory($user_id) {

		$_db = &lknDb::createinstance();
		$sql = '' . "SELECT * FROM #__jobs_credits_buying_history WHERE user_id='" . $user_id . "' ORDER BY payment_date desc";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		return $rows;
	}

	public function getCreditsSpedingHistory($user_id) {

		$_db = &lknDb::createinstance();
		$sql = '' . "SELECT * FROM #__jobs_credits_spending_history WHERE user_id='" . $user_id . "' ORDER BY id DESC";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		return $rows;
	}

	public function getPendingCredits($user_id) {

		$_db = &lknDb::createinstance();
		$sql = '' . "SELECT * FROM #__jobs_credits_pending WHERE user_id='" . $user_id . "' ORDER BY requested_date desc";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		return $rows;
	}

	public function credit_history_full_payment_detail() {

		global $_db;
		$id = lkngetparamatre($_GET, "id");
		$where[] = '' . "c.id='" . $id . "'";
		$where[] = "c.user_id=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT c.*,u.username AS username ";
		$sql .= "
 FROM #__jobs_credits_buying_history AS c,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		$row = $_db->getFistRecord();
		return $row;
	}

	public function writeCheckBoxValues($check, $value, $checkValue = _lkn_yes, $uncheckValue = _lkn_no) {

		if ($check == 1)
		{
			return '' . $value . " (" . $checkValue . ")";
		}
		if ($check == 0)
		{
			return '' . $value . " (" . $uncheckValue . ")";
		}
		return "";
	}

	public function getResumeCount($memberid) {

		global $_db;
		$sql = '' . "SELECT id FROM #__jobs_resumes WHERE memberid='" . $memberid . "' AND published!='-2'";
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getCompanyCount($memberid, $published = "") {

		global $_db;
		$sql = '' . "SELECT id FROM #__jobs_companies WHERE memberid='" . $memberid . "'";
		if ($published != "")
		{
			$sql .= '' . " AND published='" . $published . "'";
		}
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getDegree($name, $selectValue = "", $extra = "", $first = 1) {

		$db = &lknDb::createinstance();
		$data = array();
		$sql = "SELECT * FROM #__jobs_education_levels WHERE published='1'";
		$db->query($sql);
		$db->setQuery();
		$rows = $db->loadObjectList();
		foreach ($rows as $row)
		{
			$id = $row->id;
			$title = $row->title;
			$title = temizleslash($title);
			$data[$id] = $title;
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, $first);
	}

	public function writeDegree($value) {

		if ($value == "" || $value == "0")
		{
			return "";
		}
		$db = &lknDb::createinstance();
		$sql = '' . "SELECT * FROM #__jobs_education_levels WHERE published='1' and id='" . $value . "'";
		$db->query($sql);
		$db->setQuery();
		$count = $db->num_rows();
		if ($count == "0")
		{
			return "";
		}
		$row = $db->loadObject();
		$title = temizleslash($row->title);
		return $title;
	}

	public function save_file() {

		global $_db;
		global $_config;
		global $_lknBaseFramework;
		$msg = "";
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return _lkn_error_member_is_a_employer;
		}
		$data = lkngetformvalues();
		$old_file = lkngetparamatre($_POST, "old_file");
		$file = $_FILES["db_file_name"]["name"];
		$return = array();
		if ($file == "")
		{
			$data["file_name"] = $old_file;
			$msg = _lkn_updated;
		}
		 else 
		{
			$file = lkngetfilenameforupload($file);
			if (in_array($file[1], explode(",", $_config["files_file_types"])))
			{
				$params = lknJobsFunctions::getresumeattachmentparams("application");
			}
			 else 
			{
				$params = lknJobsFunctions::getresumeattachmentparams("image");
			}
			$file_folder = $_config["files_folder"];
			$allowed_ext_app = lkncreatearrayforupload($_config["files_file_types"], "application");
			$allowed_ext_image = lkncreatearrayforupload($_config["files_image_types"], "image");
			$allowed_ext = array_merge($allowed_ext_app, $allowed_ext_image);
			$size = $_config["files_size"];
			$upload = lknFiles::upload("db_file_name", $file_folder, $allowed_ext, $size, $file[0], $params);
			$data["file_name"] = $file[0] . "." . $file[1];
			$sql = $_db->CreateInsertSql($data, "#__jobs_resume_files");
			$_db->query($sql);
			$_db->setQuery();
			$id = $_db->get_insert_id();
			if ($upload == "1")
			{
				$return["msg"] = _lkn_added;
				$return["id"] = $id;
			}
			 else 
			{
				$db2 = &lknDb::createinstance();
				$db2->query('' . "DELETE FROM #__jobs_resume_files WHERE id='" . $id . "'");
				$db2->setQuery();
				$return["msg"] = _lkn_error_upload . "-" . $upload;
				$return["id"] = "";
			}
		}
		return $return;
	}

	public function update_file($id) {

		global $_db;
		global $_config;
		global $_lknBaseFramework;
		$msg = "";
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return _lkn_error_member_is_a_employer;
		}
		$data = lkngetformvalues();
		$old_file = lkngetparamatre($_POST, "old_file");
		$file = $_FILES["db_file_name"]["name"];
		if ($file == "")
		{
			$msg = _lkn_updated;
		}
		 else 
		{
			$file = lkngetfilenameforupload($file);
			if (in_array($file[1], explode(",", $_config["files_file_types"])))
			{
				$params = lknJobsFunctions::getresumeattachmentparams("application");
			}
			 else 
			{
				if (in_array($file[1], explode(",", $_config["files_image_types"])))
				{
					$params = lknJobsFunctions::getresumeattachmentparams("image");
				}
				 else 
				{
					$params = array();
				}
			}
			$file_folder = $_config["files_folder"];
			$allowed_ext_app = lkncreatearrayforupload($_config["files_file_types"], "application");
			$allowed_ext_image = lkncreatearrayforupload($_config["files_image_types"], "image");
			$allowed_ext = array_merge($allowed_ext_app, $allowed_ext_image);
			$size = $_config["files_size"];
			$upload = lknFiles::upload("db_file_name", $file_folder, $allowed_ext, $size, $file[0], $params);
			if ($upload == "1")
			{
				$data["file_name"] = $file[0] . "." . $file[1];
				if ($old_file != "")
				{
					$upload_folder = JOOMLA_ROOT . str_replace("/", LKN_DS, $_config["files_folder"]);
					if (file_exists($upload_folder . $old_file))
					{
						unlink($upload_folder . $old_file);
					}
				}
				$msg = _lkn_updated;
			}
			 else 
			{
				$msg = _lkn_error_upload;
			}
		}
		$sql = $_db->CreateUpdateSql($data, "#__jobs_resume_files", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return $msg;
	}

	public function update_resume($id) {

		global $_db;
		global $_config;
		global $_lknBaseFramework;
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return _lkn_error_member_is_a_employer;
		}
		$fields = lknJobsFields::getresumefields();
		$data = array();
		foreach ($fields as $field)
		{
			$type = $field->type;
			$name = $field->name;
			if ($type == "checkbox")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "multicheckbox" || $type == "multiselect")
			{
				$val = lkngetparamatre($_POST, '' . "db_" . $name);
				if (is_array($val))
				{
					$val = implode(",", $val);
				}
				$data[$name] = $val;
				continue;
			}
			if ($type == "editor")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name, "", _ALLOWRAW);
				continue;
			}
			if ($type == "date")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "emailaddress")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "radio")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "text")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "textarea")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "select")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "integer")
			{
				continue;
			}
			$data[$name] = (int)lkngetparamatre($_POST, '' . "db_" . $name);
			continue;
		}
		$data["published"] = lkngetparamatre($_POST, "db_published");
		$data["job_type"] = lkngetparamatre($_POST, "db_job_type");
		$data["memberid"] = lkngetparamatre($_POST, "db_memberid");
		$alias = $data["alias"];
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$date = new lknDate();
		$data["update_date"] = $date->getDate();
		if (isset($_FILES["db_image"]["name"]))
		{
			$old_image = lkngetparamatre($_POST, "old_image");
			$file = $_FILES["db_image"]["name"];
			$upload = "";
			if ($file == "")
			{
				$data["image"] = $old_image;
			}
			 else 
			{
				$image_folder = $_config["resume_image_folder"];
				$allowed_ext = lkncreatearrayforupload($_config["allowedimages"], "image");
				$size = $_config["uploadSizeLimit"];
				$file = lkngetfilenameforupload($file);
				$params = lknJobsFunctions::getimageparams("resume");
				$upload = lknFiles::upload("db_image", $image_folder, $allowed_ext, $size, $file[0], $params);
				if ($upload == "1")
				{
					if ($old_image != "")
					{
						$upload_folder = $_lknBaseFramework->lknGetPath("root");
						$upload_folder = $upload_folder . $_config["resume_image_folder"];
						if (file_exists($upload_folder . $old_image))
						{
							unlink($upload_folder . $old_image);
						}
					}
					$data["image"] = $file[0] . "." . $file[1];
				}
			}
		}
		$sql = $_db->CreateUpdateSql($data, "#__jobs_resumes", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		lknJobsFunctions::save_banned_companies($id);
		lknJobsFunctions::save_resume_files($id);
		return _lkn_updated;
	}

	public function update_cover_letter() {

		$_db = &lknDb::createinstance();
		$id = (int)lkngetparamatre($_POST, "cid");
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return _lkn_error_member_is_a_employer;
		}
		$data = lkngetformvalues();
		$sql = $_db->CreateUpdateSql($data, "#__jobs_cover_letters", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return _lkn_updated;
	}

	public function increaseJobHit($job_id) {

		$_db = &lknDb::createinstance();
		if ($job_id != "")
		{
			$sql = '' . "UPDATE #__jobs_jobs SET hits=(hits+1) WHERE id='" . $job_id . "'";
			$_db->query($sql);
			$_db->setQuery();
		}
		return;
	}

	public function increaseResumeHit($resume_id) {

		$_db = &lknDb::createinstance();
		if ($resume_id != "")
		{
			$user = new lknUser();
			$user_id = $user->getUserID();
			$sql = '' . "UPDATE #__jobs_resumes SET hits=(hits+1) WHERE id='" . $resume_id . "' AND memberid!='" . $user_id . "'";
			$_db->query($sql);
			$_db->setQuery();
		}
		return;
	}

	public function increaseFileHit($file_id) {

		$_db = &lknDb::createinstance();
		if ($file_id != "")
		{
			$user = new lknUser();
			$user_id = $user->getUserID();
			$sql = '' . "UPDATE #__jobs_resume_files SET hits=(hits+1) WHERE id='" . $file_id . "'";
			$_db->query($sql);
			$_db->setQuery();
		}
		return;
	}

	public function credit_history_insert($data) {

		$_db = &lknDb::createinstance();
		$date = new lknDate();
		$data["payment_date"] = $date->getDate();
		$sql = $_db->CreateInsertSql($data, "#__jobs_credits_buying_history");
		$_db->query($sql);
		$_db->setQuery();
		return;
	}

	public function save_resume() {

		global $_db;
		global $_config;
		global $_lknBaseFramework;
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return _lkn_error_member_is_a_employer;
		}
		$fields = lknJobsFields::getresumefields();
		$data = array();
		foreach ($fields as $field)
		{
			$type = $field->type;
			$name = $field->name;
			if ($type == "checkbox")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "multicheckbox" || $type == "multiselect")
			{
				$val = lkngetparamatre($_POST, '' . "db_" . $name);
				if (is_array($val))
				{
					$val = implode(",", $val);
				}
				$data[$name] = $val;
				continue;
			}
			if ($type == "editor")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name, "", _ALLOWRAW);
				continue;
			}
			if ($type == "date")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "emailaddress")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "radio")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "text")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "textarea")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "select")
			{
				$data[$name] = lkngetparamatre($_POST, '' . "db_" . $name);
				continue;
			}
			if ($type == "integer")
			{
				continue;
			}
			$data[$name] = (int)lkngetparamatre($_POST, '' . "db_" . $name);
			continue;
		}
		$data["published"] = lkngetparamatre($_POST, "db_published");
		$data["job_type"] = lkngetparamatre($_POST, "db_job_type");
		$data["memberid"] = lkngetparamatre($_POST, "db_memberid");
		$alias = $data["alias"];
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$date = new lknDate();
		$data["created"] = $date->getDate();
		if (isset($_FILES["db_image"]["name"]))
		{
			$old_image = lkngetparamatre($_POST, "old_image");
			$file = $_FILES["db_image"]["name"];
			if ($file == "")
			{
				$data["image"] = $old_image;
			}
			 else 
			{
				$image_folder = $_config["resume_image_folder"];
				$allowed_ext = lkncreatearrayforupload($_config["allowedimages"], "image");
				$size = $_config["uploadSizeLimit"];
				$file = lkngetfilenameforupload($file);
				$params = lknJobsFunctions::getimageparams("resume");
				$upload = lknFiles::upload("db_image", $image_folder, $allowed_ext, $size, $file[0], $params);
				if ($upload == "1")
				{
					if ($old_image != "")
					{
						$upload_folder = $_lknBaseFramework->lknGetPath("root");
						$upload_folder = $upload_folder . $_config["resume_image_folder"];
						if (file_exists($upload_folder . $old_image))
						{
							unlink($upload_folder . $old_image);
						}
					}
					$data["image"] = $file[0] . "." . $file[1];
				}
			}
		}
		$sql = $_db->CreateInsertSql($data, "#__jobs_resumes");
		$_db->query($sql);
		$_db->setQuery();
		$return = array();
		$id = $_db->get_insert_id();
		lknJobsFunctions::save_banned_companies($id);
		lknJobsFunctions::save_resume_files($id);
		$return["id"] = $id;
		$return["msg"] = _lkn_added;
		return $return;
	}

	public function save_banned_companies($resume_id) {

		global $_db;
		$banned_companies = lkngetparamatre($_POST, "banned_companies");
		$_db->query('' . "DELETE FROM #__jobs_resumes_banned_companies WHERE resume_id='" . $resume_id . "'");
		$_db->setQuery();
		if (($banned_companies != "") && ($resume_id != "" || $resume_id != "0"))
		{
			foreach ($banned_companies as $company)
			{
				$data = array();
				$data["resume_id"] = $resume_id;
				$data["company_id"] = $company;
				$sql = $_db->CreateInsertSql($data, "#__jobs_resumes_banned_companies");
				$_db->query($sql);
				$_db->setQuery();
				continue;
			}
		}
		return;
	}

	public function get_banned_companies($resume_id) {

		global $_db;
		$sql = '' . "SELECT company_id FROM #__jobs_resumes_banned_companies WHERE resume_id='" . $resume_id . "'";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		$data = array();
		foreach ($rows as $row)
		{
			$data[] = $row->company_id;
			continue;
		}
		return lknJobsFunctions::getcompanylist("banned_companies[]", $data, "multiple=\"multiple\" size=\"8\"");
	}

	public function get_resume_files($resume_id, $memberid, $extra = "") {

		$_db = &lknDb::createinstance();
		$sql = '' . "SELECT file_id FROM #__jobs_resume_files2resumes WHERE resume_id='" . $resume_id . "'";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		$data = array();
		foreach ($rows as $row)
		{
			$data[] = $row->file_id;
			continue;
		}
		return lknJobsFunctions::getresumefiles("resume_files[]", $data, "multiple=\"multiple\" size=\"8\"" . $extra, $memberid);
	}

	public function save_resume_files($resume_id) {

		global $_config;
		$files_active = $_config["files_active"];
		if ($files_active == "1")
		{
			$_db = &lknDb::createinstance();
			$resume_files = lkngetparamatre($_POST, "resume_files");
			$_db->query('' . "DELETE FROM #__jobs_resume_files2resumes WHERE resume_id='" . $resume_id . "'");
			$_db->setQuery();
			if (($resume_files != "") && ($resume_id != "" || $resume_id != "0"))
			{
				foreach ($resume_files as $file)
				{
					$data = array();
					$data["resume_id"] = $resume_id;
					$data["file_id"] = $file;
					$sql = $_db->CreateInsertSql($data, "#__jobs_resume_files2resumes");
					$_db->query($sql);
					$_db->setQuery();
					continue;
				}
			}
		}
		return;
	}

	public function save_cover_letter() {

		global $_db;
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return _lkn_error_member_is_a_employer;
		}
		$data = lkngetformvalues();
		$sql = $_db->CreateInsertSql($data, "#__jobs_cover_letters");
		$_db->query($sql);
		$_db->setQuery();
		return $_db->get_insert_id();
	}

	public function save_company() {

		global $_db;
		global $_config;
		global $_lknBaseFramework;
		$msg = "";
		$sa = lknUser::issuperadministrator();
		if (!($sa == "1"))
		{
			$memberid = lkngetparamatre($_POST, "db_memberid");
			$resume_count = lknJobsFunctions::getresumecount($memberid);
			if ($resume_count > 0)
			{
				$msg = _lkn_error_member_is_a_job_seeker;
				return $msg;
			}
		}
		$data = lkngetformvalues();
		$alias = $data["alias"];
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$data["description"] = lkngetparamatre($_POST, "db_description", "", _ALLOWRAW);
		$date = new lknDate();
		$data["created"] = $date->getDate();
		$old_image = lkngetparamatre($_POST, "old_logo");
		$file = $_FILES["db_logo"]["name"];
		if ($file == "")
		{
			$data["logo"] = $old_image;
		}
		 else 
		{
			$allowed_ext = lkncreatearrayforupload($_config["allowedimages"], "image");
			$size = $_config["uploadSizeLimit"];
			$file = lkngetfilenameforupload($file);
			$params = lknJobsFunctions::getimageparams("company");
			$image_folder = $_config["logo_image_folder"];
			$upload = lknFiles::upload("db_logo", $image_folder, $allowed_ext, $size, $file[0], $params);
			if ($upload == "1")
			{
				if ($old_image != "")
				{
					$upload_folder = JOOMLA_ROOT;
					$upload_folder = $upload_folder . $_config["logo_image_folder"];
					unlink($upload_folder . $old_image);
				}
				$data["logo"] = $file[0] . "." . $file[1];
			}
		}
		$sql = $_db->CreateInsertSql($data, "#__jobs_companies");
		$_db->query($sql);
		$_db->setQuery();
		$return = array();
		$return["msg"] = _lkn_added;
		$return["inserted_id"] = $_db->get_insert_id();
		return $return;
	}

	public function save_email_template() {

		global $_db;
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$resume_count = lknJobsFunctions::getresumecount($memberid);
		if ($resume_count > 0)
		{
			$msg = _lkn_error_member_is_a_job_seeker;
			return $msg;
		}
		$data = lkngetformvalues();
		$sql = $_db->CreateInsertSql($data, "#__jobs_email_templates");
		$_db->query($sql);
		$_db->setQuery();
		return _lkn_added;
	}

	public function update_company() {

		global $_db;
		global $_config;
		global $_lknBaseFramework;
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$resume_count = lknJobsFunctions::getresumecount($memberid);
		if ($resume_count > 0)
		{
			$msg = _lkn_error_member_is_a_job_seeker;
			return $msg;
		}
		$id = (int)lkngetparamatre($_POST, "cid");
		$data = lkngetformvalues();
		$alias = $data["alias"];
		$data["description"] = lkngetparamatre($_POST, "db_description", "", _ALLOWRAW);
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$old_image = lkngetparamatre($_POST, "old_logo");
		$file = $_FILES["db_logo"]["name"];
		if ($file == "")
		{
			$data["logo"] = $old_image;
		}
		 else 
		{
			$allowed_ext = lkncreatearrayforupload($_config["allowedimages"], "image");
			$size = $_config["uploadSizeLimit"];
			$file = lkngetfilenameforupload($file);
			$params = lknJobsFunctions::getimageparams("company");
			$image_folder = $_config["logo_image_folder"];
			$upload = lknFiles::upload("db_logo", $image_folder, $allowed_ext, $size, $file[0], $params);
			if ($upload == "1")
			{
				if ($old_image != "")
				{
					$upload_folder = JOOMLA_ROOT;
					$upload_folder = str_replace("/", LKN_DS, $upload_folder . $_config["logo_image_folder"]);
					if (file_exists($upload_folder . $old_image))
					{
						unlink($upload_folder . $old_image);
					}
				}
				$data["logo"] = $file[0] . "." . $file[1];
			}
		}
		$sql = $_db->CreateUpdateSql($data, "#__jobs_companies", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return _lkn_updated;
	}

	public function list_jobs($memberid = "") {

		global $_db;
		$params = array();
		$where = array();
		$published = lkngetparamatre($_REQUEST, "published");
		$cat_id = (int)lkngetparamatre($_REQUEST, "cat_id");
		$company_id = (int)lkngetparamatre($_REQUEST, "company_id");
		$search = lknText::strtolower(lkngetparamatre($_REQUEST, "search"));
		if (($published != "") && (isset($published)))
		{
			$where[] = '' . "j.published='" . $published . "'";
		}
		if (($cat_id != "") && (isset($cat_id)))
		{
			$where[] = '' . "j.cat_id='" . $cat_id . "'";
		}
		if (($search != "") && (isset($search)))
		{
			$where[] = '' . "((LOWER(j.title) LIKE '%" . $search . "%') OR\r
				(LOWER(company.title) LIKE '%" . $search . "%'))";
		}
		if (($memberid != "") && (isset($memberid)))
		{
			$where[] = '' . "company.memberid='" . $memberid . "'";
		}
		$where[] = "j.cat_id=c.id";
		$where[] = "j.company_id=company.id";
		$where[] = "company.published='1'";
		$where[] = "company.memberid=u.id";
		$where[] = "c.published='1'";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT j.id";
		$sql .= "
 FROM #__jobs_jobs AS j,";
		$sql .= "
 #__jobs_categories AS c,";
		$sql .= "
 #__jobs_companies AS company,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$params["count"] = lkngetcount($sql);
		$sql = "SELECT j.*,c.title AS category_name,company.title AS company_name,u.username AS company_owner";
		$sql .= "
 FROM #__jobs_jobs AS j,";
		$sql .= "
 #__jobs_categories AS c,";
		$sql .= "
 #__jobs_companies AS company,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$sql .= "
 ORDER BY j.id DESC";
		$sql .= $_db->getLimit();
		$_db->query($sql);
		$_db->setQuery();
		$row = $_db->loadObjectList();
		$data["row"] = $row;
		$data["params"] = $params;
		return $data;
	}

	public function save_field() {

		$data = lkngetformvalues();
		$data["name"] = lknmakehtmlsafe(str_replace(" ", "", lknText::strtolower($data["name"])));
		$data["error_message"] = lknmakehtmlsafe(str_replace("'", "", lknText::strtolower($data["error_message"])));
		$data["error_message"] = str_replace("\"", "", lknText::strtolower($data["error_message"]));
		$data["description"] = lknmakehtmlsafe($data["description"]);
		$cat_id = $data["cat_id"];
		$db_order = &lknDb::createinstance();
		$db_order->query('' . "SELECT MAX(ordering) AS ordering FROM #__jobs_fields WHERE cat_id='" . $cat_id . "'");
		$db_order->setQuery();
		$count = $db_order->num_rows();
		if ($count > 0)
		{
			$rows = $db_order->loadObjectList();
			$order = $rows[0]->ordering;
			$order = $order + 1;
		}
		 else 
		{
			$order = 1;
		}
		$data["ordering"] = $order;
		$type = $data["type"];
		$db = &lknDb::createinstance();
		$sql = $db->CreateInsertSql($data, "#__jobs_fields");
		$db->query($sql);
		$db->setQuery();
		$field_id = $db->get_insert_id();
		$fieldValues = array();
		$fieldNames = array();
		$fieldValues = $_POST["vValues"];
		$db_fields = &lknDb::createinstance();
		switch ($type)
		{
			case "select":
			case "multiselect":
			case "multicheckbox":
			case "radio":
			{
				$i = 0;
				$j = 0;
				foreach ($fieldValues as $fieldValue)
				{
					$fieldValue = str_replace("'", "", $fieldValue);
					$fieldValue = str_replace("\"", "", $fieldValue);
					if (!(trim($fieldValue) == ""))
					{
						$sql = "INSERT INTO #__jobs_field_values (fieldid,fieldvalue,ordering)" . ('' . " VALUES('" . $field_id . "','") . htmlspecialchars($fieldValue) . ('' . "'," . $j . ")");
						$db_fields->query($sql);
						$db_fields->setQuery();
						$j++;
					}
					$i++;
					continue;
				}
			}
			$name = $data["name"];
			switch ($type)
			{
				case "multicheckbox":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` MEDIUMTEXT";
					break;
				}
				case "checkbox":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` VARCHAR( 10 ) DEFAULT NULL";
					break;
				}
				case "date":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'";
					break;
				}
				case "select":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` VARCHAR( 255 ) NULL DEFAULT NULL";
					break;
				}
				case "multiselect":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` MEDIUMTEXT";
					break;
				}
				case "emailaddress":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` VARCHAR( 255 ) NULL DEFAULT NULL";
					break;
				}
				case "editor":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` MEDIUMTEXT NULL DEFAULT NULL";
					break;
				}
				case "textarea":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` MEDIUMTEXT NULL DEFAULT NULL";
					break;
				}
				case "text":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` VARCHAR( 255 ) NULL DEFAULT NULL";
					break;
				}
				case "integer":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` INT( 11 ) NULL DEFAULT NULL";
					break;
				}
				case "radio":
				{
					$sql = '' . "ALTER TABLE #__jobs_resumes ADD `" . $name . "` VARCHAR( 255 ) NULL DEFAULT NULL";
				}
			}
			$db_alter = &lknDb::createinstance();
			$db_alter->query($sql);
			$db_alter->setQuery();
			$err = $db_alter->getErrorMessage();
			if ($err != "")
			{
				$db_rollback = &lknDb::createinstance();
				$sql = '' . "DELETE FROM #__jobs_field_values WHERE fieldid='" . $field_id . "'";
				$db_rollback->query($sql);
				$db_rollback->setQuery();
				$sql = '' . "DELETE FROM #__jobs_fields WHERE id='" . $field_id . "'";
				$db_rollback->query($sql);
				$db_rollback->setQuery();
				return "0";
			}
			return $field_id;
		}
	}

	public function update_field() {

		global $_db;
		$data = lkngetformvalues();
		$data["error_message"] = str_replace("'", "", lknText::strtolower($data["error_message"]));
		$data["error_message"] = str_replace("\"", "", lknText::strtolower($data["error_message"]));
		$cid = lkngetparamatre($_POST, "cid");
		$sql = $_db->CreateUpdateSql($data, "#__jobs_fields", '' . "id='" . $cid . "'");
		$_db->query($sql);
		$_db->setQuery();
		$fieldValues = array();
		$field_ids = array();
		$fieldValues = $_POST["vValues"];
		$field_ids = $_POST["field_id"];
		$db_fields = &lknDb::createinstance();
		switch ($data["type"])
		{
			case "select":
			case "multiselect":
			case "multicheckbox":
			case "radio":
			{
				$i = 0;
				$j = 0;
				foreach ($fieldValues as $fieldValue)
				{
					if (isset($field_ids[$i]))
					{
						$fieldValueID = $field_ids[$i];
						$fieldValue = str_replace("'", "", $fieldValue);
						$fieldValue = str_replace("\"", "", $fieldValue);
						if (trim($fieldValue) == "")
						{
							$sql = '' . "DELETE FROM #__jobs_field_values WHERE id='" . $fieldValueID . "'";
							$db_fields->query($sql);
							$db_fields->setQuery();
						}
						 else 
						{
							$sql = "UPDATE #__jobs_field_values SET fieldvalue='" . htmlspecialchars($fieldValue) . ('' . "',ordering='" . $j . "' WHERE id='" . $fieldValueID . "'");
							$db_fields->query($sql);
							$db_fields->setQuery();
							$j++;
						}
					}
					 else 
					{
						if (trim($fieldValue) != "")
						{
							$sql = "INSERT INTO #__jobs_field_values (fieldid,fieldvalue,ordering)" . ('' . " VALUES('" . $cid . "','") . htmlspecialchars($fieldValue) . ('' . "'," . $j . ")");
							$db_fields->query($sql);
							$db_fields->setQuery();
							$j++;
						}
					}
					$i++;
					continue;
				}
			}
			return;
		}
	}

	public function save_field_category() {

		global $_db;
		$data = lkngetformvalues();
		$sql = $_db->CreateInsertSql($data, "#__jobs_field_categories");
		$_db->query($sql);
		$_db->setQuery();
		$id = $_db->get_insert_id();
		$parent_id = lkngetparamatre($_POST, "db_parent_id");
		lknDb::reorder("#__jobs_field_categories", "id", '' . "parent_id='" . $parent_id . "'");
		return $id;
	}

	public function update_field_category() {

		global $_db;
		$data = lkngetformvalues();
		$cid = lkngetparamatre($_POST, "cid");
		$sql = $_db->CreateUpdateSql($data, "#__jobs_field_categories", '' . "id='" . $cid . "'");
		$_db->query($sql);
		$_db->setQuery();
		return;
	}

	public function save_category() {

		global $_db;
		$data = lkngetformvalues();
		$alias = $data["alias"];
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$data["text"] = lkngetparamatre($_POST, "db_text", "", _ALLOWRAW);
		$sql = $_db->CreateInsertSql($data, "#__jobs_categories");
		$_db->query($sql);
		$_db->setQuery();
		return $_db->get_insert_id();
	}

	public function update_category() {

		global $_db;
		$id = (int)lkngetparamatre($_POST, "cid");
		$data = lkngetformvalues();
		$alias = $data["alias"];
		$data["text"] = lkngetparamatre($_POST, "db_text", "", _ALLOWRAW);
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$sql = $_db->CreateUpdateSql($data, "#__jobs_categories", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return;
	}

	public function save_job($is_draft = "") {

		global $_db;
		global $_config;
		$user = new lknUser();
		$user_type = $user->getUserType();
		$date = new lknDate();
		$data = lkngetformvalues();
		$data["description"] = lkngetparamatre($_POST, "db_description", "", _ALLOWRAW);
		$data["qualifications"] = lkngetparamatre($_POST, "db_qualifications", "", _ALLOWRAW);
		if ($user_type != "Super Administrator")
		{
			$data["created"] = $date->getDate();
			$dates_are_editable = $_config["job_publish_down_up_time_is_editable"];
			if ($dates_are_editable == "0")
			{
				$null_date = $_db->getNullDate();
				if (isset($data["publish_up"]))
				{
					$publish_up = $data["publish_up"];
				}
				 else 
				{
					$publish_up = "";
				}
				if ($publish_up == $null_date || $publish_up == "")
				{
					$data["publish_up"] = $date->getDate();
				}
				if (isset($data["publish_down"]))
				{
					$publish_down = $data["publish_down"];
				}
				 else 
				{
					$publish_down = "";
				}
				$default_publish_down = $_config["default_publish_down"];
				$publish_down_date = $date->getDate();
				$publish_down_date = $date->addMonths($default_publish_down);
				if ($publish_down == $null_date || $publish_down == "")
				{
					$data["publish_down"] = $date->getDate();
				}
				 else 
				{
					if ($publish_down > $publish_down_date)
					{
						$data["publish_down"] = $date->getDate();
					}
				}
			}
		}
		$alias = $data["alias"];
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$data["city"] = trim($data["city"]);
		$data["state"] = trim($data["state"]);
		$date = new lknDate();
		$data["created"] = $date->getDate();
		if ($is_draft != "")
		{
			$data["published"] = $is_draft;
		}
		$sql = $_db->CreateInsertSql($data, "#__jobs_jobs");
		$_db->query($sql);
		$_db->setQuery();
		return $_db->get_insert_id();
	}

	public function update_job($is_draft = "") {

		global $_db;
		$id = (int)lkngetparamatre($_POST, "cid");
		$data = lkngetformvalues();
		$published = $data["published"];
		$msg = array();
		if ($published == "-1")
		{
			$sql = '' . "SELECT id FROM #__jobs_applications WHERE job_id ='" . $id . "'";
			$count = lkngetcount($sql);
			if ($count > 0)
			{
				$msg["msg"] = _lkn_error_job_has_app;
				return $msg;
			}
		}
		$data["description"] = lkngetparamatre($_POST, "db_description", "", _ALLOWRAW);
		$data["qualifications"] = lkngetparamatre($_POST, "db_qualifications", "", _ALLOWRAW);
		$alias = $data["alias"];
		if ($alias == "")
		{
			$alias = lknSef::getalias($data["title"]);
		}
		 else 
		{
			$alias = lknSef::getalias($alias);
		}
		$data["alias"] = $alias;
		$data["city"] = trim($data["city"]);
		$data["state"] = trim($data["state"]);
		if ($is_draft != "")
		{
			$data["published"] = $is_draft;
		}
		$sql = $_db->CreateUpdateSql($data, "#__jobs_jobs", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		$msg["msg"] = _lkn_updated;
		return $msg;
	}

	public function update_email_template() {

		global $_db;
		$id = (int)lkngetparamatre($_POST, "cid");
		$memberid = lkngetparamatre($_POST, "db_memberid");
		$resume_count = lknJobsFunctions::getresumecount($memberid);
		if ($resume_count > 0)
		{
			$msg = _lkn_error_member_is_a_job_seeker;
			return $msg;
		}
		$data = lkngetformvalues();
		$sql = $_db->CreateUpdateSql($data, "#__jobs_email_templates", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return _lkn_updated;
	}

	public function update_application() {

		global $_db;
		$id = (int)lkngetparamatre($_POST, "cid");
		$data = lkngetformvalues();
		$date = new lknDate();
		$data["update_date"] = $date->getDate();
		$sql = $_db->CreateUpdateSql($data, "#__jobs_applications", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return;
	}

	public function send_mail_to_applicant() {

		global $_db;
		$application = (int)lkngetparamatre($_POST, "cid");
		$date = new lknDate();
		$data = array();
		$data["email_from"] = lkngetparamatre($_POST, "email_email_from");
		$data["email_to"] = lkngetparamatre($_POST, "email_email_to");
		$data["email_body"] = temizleslash(lkngetparamatre($_POST, "email_email_body"));
		$data["email_subject"] = temizleslash(lkngetparamatre($_POST, "email_email_subject"));
		$data["email_memberid"] = lkngetparamatre($_POST, "email_email_memberid");
		$data["email_to_memberid"] = lkngetparamatre($_POST, "email_email_to_memberid");
		$email_from = $data["email_from"];
		if ($email_from == "")
		{
			return _lkn_error_email_subject_empty;
		}
		$email_to = $data["email_to"];
		$email_body = temizleslash($data["email_body"]);
		if ($email_body == "")
		{
			return _lkn_error_email_body_empty;
		}
		$email_subject = temizleslash($data["email_subject"]);
		if ($email_subject == "")
		{
			return _lkn_error_email_subject_empty;
		}
		$company_title = temizleslash(lkngetparamatre($_POST, "company_title"));
		$name = temizleslash(lkngetparamatre($_POST, "name"));
		$email_memberid = $data["email_memberid"];
		$email_to_memberid = $data["email_to_memberid"];
		$data["email_date"] = $date->getDate();
		$data["application"] = $application;
		$msg = lknsendmail($email_from, $company_title, $email_to, $email_subject, $email_body);
		if ($msg == 1)
		{
			$msg = str_replace("{NAME}", $name, _lkn_mail_send);
			$sql = $_db->CreateInsertSql($data, "#__jobs_email_history");
			$_db->query($sql);
			$_db->setQuery();
		}
		 else 
		{
			$msg = _lkn_mail_send_error;
		}
		$data2["update_date"] = $date->getDate();
		$sql = $_db->CreateUpdateSql($data2, "#__jobs_applications", '' . "id='" . $application . "'");
		$_db->query($sql);
		$_db->setQuery();
		return $msg;
	}

	public function getEmailTemplates($row, $name, $selectValue, $extra) {

		$_db = &lknDb::createinstance();
		$data = array();
		$company_title = temizleslash($row->company_title);
		$applicant_name = temizleslash($row->name);
		$job_title = temizleslash($row->job_title);
		$company_owner_id = $row->company_owner_id;
		$where[] = "published='1'";
		$user = new lknUser();
		$userType = $user->getUserType();
		if ($userType != "Super Administrator")
		{
			$where[] = '' . "memberid='" . $company_owner_id . "'";
		}
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT body,title FROM #__jobs_email_templates";
		$sql .= $where;
		$sql .= "
 ORDER BY title";
		$_db->query($sql);
		$_db->setQuery();
		while ($row = $_db->fetch_array())
		{
			$body = temizleslash($row["body"]);
			$body = str_replace("{COMPANY_NAME}", $company_title, $body);
			$body = str_replace("{APPLICANT_NAME}", $applicant_name, $body);
			$body = str_replace("{JOB_TITLE}", $job_title, $body);
			$title = temizleslash($row["title"]);
			$data[$body] = $title;
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra);
	}

	public function createMailForm($row) {

		$email_from = $row->contactemail;
		$email_to = $row->email_address;
		$email_memberid = $row->company_owner_id;
		$email_to_memberid = $row->memberid;
		$company_title = $row->company_title;
		$name = $row->name;
		$extra = "onchange=\"template_change()\"";
		echo "		";
		echo "<s";
		echo "cript>\r
		 function template_change() {\r
		 	var form = document.adminForm;\r
			 form.email_email_body.value=form.template.options[form.template.selectedIndex].value;\r
			 form.email_email_subject.value=form.template.options[form.template.selectedIndex].text;\r
		 }\r
	</script>\r
\r
		<fieldset class=\"resume\">\r
			<legend>";
		echo _lkn_app_respond;
		echo "</legend>\r
				<table class=\"general_table\">\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_email_template_tip, _lkn_app_email_template);
		echo "						</td>\r
						<td>\r
							";
		echo lknJobsFunctions::getemailtemplates($row, "template", "", $extra);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_email_from_tip, _lkn_app_email_from);
		echo "						</td>\r
						<td>\r
							<input maxlength=\"100\" size=\"50\" value=\"";
		echo $email_from;
		echo "\" name=\"email_email_from\"/>\r
						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_email_to_tip, _lkn_app_email_to);
		echo "						</td>\r
						<td align=\"left\">\r
							<input maxlength=\"100\" size=\"50\" value=\"";
		echo $email_to;
		echo "\" name=\"email_email_to\"/>\r
						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_email_subject_tip, _lkn_app_email_subject);
		echo "						</td>\r
						<td>\r
							<input maxlength=\"100\" size=\"50\" value=\"\" name=\"email_email_subject\"/>\r
						</td>\r
					</tr>\r
					<tr>\r
						<td colspan=\"2\">\r
							";
		echo lkntooltip(_lkn_app_email_body_tip, _lkn_app_email_body);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td colspan=\"2\" align=\"left\">\r
							<textarea name=\"email_email_body\" cols=\"70\" rows=\"15\"></textarea>\r
						</td>\r
					</tr>\r
\r
				</table>\r
				<input type=\"hidden\" name=\"email_email_memberid\" value=\"";
		echo $email_memberid;
		echo "\"/>\r
				<input type=\"hidden\" name=\"email_email_to_memberid\" value=\"";
		echo $email_to_memberid;
		echo "\"/>\r
				<input type=\"hidden\" name=\"company_title\" value=\"";
		echo $company_title;
		echo "\"/>\r
				<input type=\"hidden\" name=\"name\" value=\"";
		echo $name;
		echo "\"/>\r
			</fieldset>\r
\r
\r
		";
		return;
	}

	public function getEmailHistory($application_id, $memberid, $who = "employer") {

		global $_db;
		$where[] = '' . "application='" . $application_id . "'";
		if ($who == "employer")
		{
			$where[] = '' . "email_memberid='" . $memberid . "'";
		}
		 else 
		{
			if ($who == "worker")
			{
				$where[] = '' . "email_to_memberid='" . $memberid . "'";
			}
			 else 
			{
				die("wrong parameter");
			}
		}
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT * FROM #__jobs_email_history";
		$sql .= $where;
		$sql .= "
 ORDER BY email_date DESC";
		$_db->query($sql);
		$_db->setQuery();
		return $_db->loadObjectList();
	}

	public function getJobDetail($row) {

		$company_title = temizleslash($row->company_title);
		$job_title = temizleslash($row->job_title);
		$reference = temizleslash($row->reference);
		$number_of_jobs = $row->number_of_jobs;
		$job_type = $row->job_job_type;
		$country_name = $row->country_name;
		$city = temizleslash($row->job_city);
		$state = temizleslash($row->job_state);
		$qualifications = temizleslash($row->qualifications);
		$job_experience = $row->job_experience;
		$degree = $row->degree;
		$salary = $row->salary;
		$job_created = $row->job_created;
		$publish_up = $row->publish_up;
		$publish_down = $row->publish_down;
		echo "		<fieldset class=\"resume\">\r
			<legend>";
		echo _lkn_job_details;
		echo "</legend>\r
					<table class=\"general_table\">\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_company;
		echo "</td>\r
						<td>";
		echo $company_title;
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job;
		echo "</td>\r
						<td>";
		echo $job_title;
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job_reference;
		echo "</td>\r
						<td>";
		echo $reference;
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job_number_of_jobs;
		echo "</td>\r
						<td>";
		echo $number_of_jobs;
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job_job_type;
		echo "</td>\r
						<td>";
		echo lknJobsFunctions::writejobtype($job_type);
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job_country;
		echo "</td>\r
						<td>";
		echo $country_name;
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job_city;
		echo "</td>\r
						";
		$cities = "";
		if ($city != "")
		{
			$city = explode(",", $city);
			foreach ($city as $c)
			{
				if ($c != "")
				{
					continue;
				}
				$c = ucfirst($c);
				$cities .= '' . "," . $c;
				continue;
			}
			$cities = lknText::cleanfirst($cities, ",");
		}
		echo "									\r
						<td>";
		echo $cities;
		echo "</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">";
		echo _lkn_job_state;
		echo "</td>\r
						";
		$states = "";
		if ($state != "")
		{
			$state = explode(",", $state);
			foreach ($state as $s)
			{
				if ($s != "")
				{
					continue;
				}
				$s = strtoupper($s);
				$states .= '' . "," . $s;
				continue;
			}
			$states = lknText::cleanfirst($states, ",");
		}
		echo "		\r
						<td>";
		echo $states;
		echo "</td>\r
					</tr>							\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_job_qualifications;
		echo "						</td>\r
						<td>\r
							";
		echo $qualifications;
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_job_experience;
		echo "						</td>\r
						<td>\r
							";
		echo $job_experience;
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_job_degree;
		echo "						</td>\r
						<td>\r
							";
		echo lknJobsFunctions::writedegree($degree);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_job_salary . " (" . _lkn_currency . ")";
		echo "						</td>\r
						<td>\r
							";
		echo $salary;
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_created;
		echo "						</td>\r
						<td>\r
							";
		echo lknDate::formatdate($job_created);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_job_publish_up;
		echo "						</td>\r
						<td>\r
							";
		echo lknDate::formatdate($publish_up);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo _lkn_job_publish_down;
		echo "						</td>\r
						<td>\r
							";
		echo lknDate::formatdate($publish_down);
		echo "						</td>\r
					</tr>\r
				</table>\r
		</fieldset>\r
		";
		return;
	}

	public function print_application_details($row) {

		$status = $row->status;
		$application_date = $row->application_date;
		$application_update = $row->application_update;
		$comments = temizleslash($row->comments);
		echo "		<fieldset class=\"resume\">\r
			<legend>";
		echo _lkn_app_details;
		echo "</legend>\r
				<table class=\"general_table\">\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_status_tip, _lkn_status);
		echo "						</td>\r
						<td>\r
							";
		echo lknJobsFunctions::getstatus("db_status", $status);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_date_tip, _lkn_app_date);
		echo "						</td>\r
						<td>\r
							";
		echo $application_date;
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td class=\"key\">\r
							";
		echo lkntooltip(_lkn_app_last_update_date_tip, _lkn_app_last_update_date);
		echo "						</td>\r
						<td>\r
							";
		echo $application_update;
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td colspan=\"2\">\r
							";
		echo lkntooltip(_lkn_app_comments_tip, _lkn_app_comments);
		echo "						</td>\r
					</tr>\r
					<tr>\r
						<td colspan=\"2\" align=\"left\">\r
							<textarea name=\"db_comments\" cols=\"70\" rows=\"15\">";
		echo $comments;
		echo "</textarea>\r
						</td>\r
					</tr>\r
\r
				</table>\r
			</fieldset>\r
		";
		return;
	}

	public function getCompanyLogo($image, $company_name) {

		global $_config;
		$logo_folder = LIVE_SITE . $_config["logo_image_folder"];
		$image = $logo_folder . $image;
		$image = '' . "<img src=\"" . $image . "\" alt=\"" . $company_name . "\" border=\"0\" />";
		return $image;
	}

	public function getResumeImage($image, $name) {

		if ($image == "")
		{
			return "";
		}
		global $_config;
		$image_folder = LIVE_SITE . $_config["resume_image_folder"];
		$image = $image_folder . $image;
		$image = '' . "<img src=\"" . $image . "\" alt=\"" . $name . "\" />";
		return $image;
	}

	public function getResumeAttachmentParams($type = "image") {

		global $_config;
		$params = array();
		if ($type == "image")
		{
			$watermark = $_config["files_image_watermark_active"];
			if ($watermark == "1")
			{
				$params["image_watermark_text"] = $_config["image_watermark_text"];
				$params["image_watermark_text_color"] = $_config["image_watermark_text_color"];
				$params["image_watermark_text_background_color"] = $_config["image_watermark_text_background_color"];
			}
			 else 
			{
				$params["image_watermark_text"] = "";
			}
		}
		return $params;
	}

	public function getImageParams($what = "resume") {

		global $_config;
		$params = array();
		$image_resize = $_config["image_resize_active"];
		$params["image_resize_active"] = $image_resize;
		if ($image_resize == "1")
		{
			if ($what == "resume")
			{
				$resume_watermark = $_config["resume_image_watermark"];
				if ($resume_watermark == "1")
				{
					$params["image_watermark_text"] = $_config["image_watermark_text"];
					$params["image_watermark_text_color"] = $_config["image_watermark_text_color"];
					$params["image_watermark_text_background_color"] = $_config["image_watermark_text_background_color"];
				}
				 else 
				{
					$params["image_watermark_text"] = "";
				}
				$params["width"] = $_config["resume_image_width"];
				$params["height"] = $_config["resume_image_height"];
			}
			 else 
			{
				if ($what == "company")
				{
					$company_watermark = $_config["company_logo_watermark"];
					if ($company_watermark == "1")
					{
						$params["image_watermark_text"] = $_config["image_watermark_text"];
						$params["image_watermark_text_color"] = $_config["image_watermark_text_color"];
						$params["image_watermark_text_background_color"] = $_config["image_watermark_text_background_color"];
					}
					 else 
					{
						$params["image_watermark_text"] = "";
					}
					$params["width"] = $_config["company_logo_width"];
					$params["height"] = $_config["company_logo_height"];
				}
			}
		}
		return $params;
	}

	public function view_resume() {

		global $_db;
		global $_lknBaseFramework;
		global $_config;
		$id = lkngetparamatre($_GET, "id");
		$id = explode(":", $id);
		$id = (int)$id[0];
		$itemid = lknjobsitemid();
		$action = lkngetparamatre($_GET, "action");
		$user = new lknUser();
		$user_type = $user->getUserType();
		$user_id = lkngetparamatre($_GET, "user_id");
		if ($id != "")
		{
			$where[] = '' . "c.id='" . $id . "'";
			$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
			$sql = "SELECT c.*";
			$sql .= "
 FROM #__jobs_resumes AS c";
			$sql .= $where;
			$_db->query($sql);
			$_db->setQuery();
			$row = $_db->loadObject();
			if ($action == "company_view")
			{
				$credit_system_active = $_config["credit_system_active"];
				if ($credit_system_active == "1")
				{
					if ($user_type != "Super Administrator")
					{
						$date = new lknDate();
						$now = $date->getDate();
						$credit_data = lknJobsFunctions::getusercredit($user_id);
						$can_search_end = $credit_data->can_search_end;
						$params["memberid"] = $user_id;
						$canDo = checkacl("o", $params);
						if ($canDo == false)
						{
							echo _lkn_error_acl_permission;
							return;
						}
						if ($now > $can_search_end)
						{
							$msg = _lkn_employer_can_not_search_resume_database_;
							echo '' . "<h1>" . $msg . "</h1>";
							return;
						}
					}
				}
				 else 
				{
					$company_count = lknJobsFunctions::getcompanycount($user_id, "1");
					if (!($company_count > 0))
					{
						echo _lkn_error_acl_permission;
						return;
					}
				}
			}
			 else 
			{
				if ($action == "admin")
				{
					if ($user_type != "Super Administrator")
					{
						echo _lkn_error;
						return;
					}
					$use_top = "0";
				}
				 else 
				{
					if ($action == "employer_application")
					{
						$app_id = lkngetparamatre($_GET, "application_id");
						$db_a = &lknDb::createinstance();
						$where2 = array();
						$where2[] = "a.job_id=j.id";
						$where2[] = "a.resume_id=r.id";
						$where2[] = "a.status=s.id";
						$where2[] = "j.cat_id=c.id";
						$where2[] = "j.cat_id=c.id";
						$where2[] = "j.company_id=company.id";
						$where2[] = '' . "company.memberid='" . $user_id . "'";
						$where2[] = "j.country=country.id";
						$where2[] = "r.memberid=u.id";
						$where2[] = '' . "a.id='" . $app_id . "'";
						$where2[] = '' . "a.resume_id='" . $id . "'";
						$where2 = count($where2) ? " WHERE " . implode(" AND ", $where2) : "";
						$sql = "SELECT a.id";
						$sql .= "
 FROM #__jobs_applications AS a,";
						$sql .= "
 #__jobs_resumes AS r,";
						$sql .= "
 #__jobs_status AS s,";
						$sql .= "
 #__jobs_categories AS c,";
						$sql .= "
 #__jobs_countries AS country,";
						$sql .= "
 #__users AS u,";
						$sql .= "
 #__jobs_companies AS company,";
						$sql .= "
 #__jobs_jobs AS j";
						$sql .= $where2;
						$db_a->query($sql);
						$db_a->setQuery();
						$count = $db_a->num_rows();
						if (!($count > 0))
						{
							echo _lkn_error_acl_permission;
							return;
						}
					}
					 else 
					{
						$params["memberid"] = $row->memberid;
						$canDo = checkacl("o", $params);
						if ($canDo == false)
						{
							echo _lkn_error_acl_permission;
							return;
						}
					}
				}
			}
			$template = lknRegistry::get("lknjobstemplate");
			$tmpl = new lknTemplate($template);
			lknJobsFunctions::increaseresumehit($id);
			$files_active = $_config["files_active"];
			if ($files_active == "1")
			{
				$row_files = lknJobsFunctions::getresumefilesobject($id);
				$file_count = count($row_files);
			}
			 else 
			{
				$file_count = "0";
			}
			$cats = lknJobsFields::getfieldcategories();
			$parent_id_array = lknJobsFields::getparentidarray($cats);
			$row_fields = lknJobsFields::getresumefields();
			$field_values = lknJobsFields::getfieldsvaluearray($row_fields, $row, $row_files, $file_count);
			$value = lknJobsFields::getviewresume($cats, $field_values, $parent_id_array);
			$tmpl->set("top", "");
			$tmpl->set("footer", "");
			$tmpl->set("value", $value);
			$home_page = $tmpl->fetch("view.resume.php");
			$tmpl->set("value", $home_page);
			echo $tmpl->fetch("public.container.php");
			return;
		}
		echo _lkn_error;
		return;
	}

	public function print_resume() {

		global $_lknBaseFramework;
		$head = "<script>\r
				function Print(){\r
					document.body.offsetHeight;\r
					window.print()\r
				}\r
			</script>";
		$_lknBaseFramework->AddCustomHeadTags($head);
		lknJobsFunctions::view_resume();
		echo "<script>\r
				print();\r
			</script>";
		return;
	}

	public function print_job() {

		global $_lknBaseFramework;
		global $_db;
		$itemid = lknjobsitemid();
		$head = "<script>\r
				function Print(){\r
					document.body.offsetHeight;\r
					window.print()\r
				}\r
			</script>";
		$_lknBaseFramework->AddCustomHeadTags($head);
		$id = lkngetparamatre($_GET, "id");
		$id = explode(":", $id);
		$id = (int)$id[0];
		$date = new lknDate();
		$now = $date->getDate();
		$nullDate = $_db->getNullDate();
		$where[] = "( j.publish_up = '" . $_db->_escape($nullDate) . "' OR j.publish_up <= '" . $_db->_escape($now) . "')";
		$where[] = "( j.publish_down = '" . $_db->_escape($nullDate) . "' OR j.publish_down >= '" . $_db->_escape($now) . "')";
		$where[] = "j.cat_id=c.id";
		$where[] = "j.company_id=company.id";
		$where[] = "j.country=country.id";
		$where[] = '' . "j.id='" . $id . "'";
		$where[] = "c.published='1'";
		$where[] = "j.published='1'";
		$where[] = "company.published='1'";
		$where[] = "country.published='1'";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT j.*,country.title AS country_name,";
		$sql .= "
 company.alias AS company_alias,company.title AS company_name,company.logo AS company_logo,";
		$sql .= "
 c.alias AS category_alias,c.title AS category_name";
		$sql .= "
 FROM #__jobs_jobs AS j,";
		$sql .= "
  #__jobs_countries AS country,";
		$sql .= "
 #__jobs_categories AS c,";
		$sql .= "
 #__jobs_companies AS company";
		$sql .= $where;
		$sql .= "
 ORDER BY j.created DESC";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		if (count($rows) == 0)
		{
			echo _lkn_error_job_is_not_found;
			return;
		}
		$rows = $rows[0];
		$template = lknRegistry::get("lknjobstemplate");
		$tmpl = new lknTemplate($template);
		$tmpl->set("id", $rows->id);
		$tmpl->set("alias", $rows->alias);
		$tmpl->set("Itemid", $itemid);
		$tmpl->set("print_link", "");
		$apply_bar = $tmpl->fetch("detail.job.apply.bar.php");
		$tmpl->set("row", $rows);
		$tmpl->set("Itemid", $itemid);
		$job_description = $tmpl->fetch("detail.job.job.detail.php");
		$tmpl->set("apply_bar", $apply_bar);
		$tmpl->set("job_description", $job_description);
		$tmpl->set("row", $rows);
		$tmpl->set("advice", "");
		$tmpl->set("sbb", "");
		$tmpl->set("Itemid", $itemid);
		$jdp = $tmpl->fetch("detail.job.php");
		echo $jdp;
		echo "<script>\r
				print();\r
			</script>";
		return;
	}

	public function employer_resume_search_form($show_top = "1", $show_footer = "1") {

		global $_config;
		$template = lknRegistry::get("lknjobstemplate");
		$tmpl = new lknTemplate($template);
		if ($show_top == "1")
		{
			$top = fetch_jobs_top($tmpl);
		}
		 else 
		{
			$top = "";
		}
		if ($show_footer == "1")
		{
			$footer = $tmpl->fetch("footer.php");
		}
		 else 
		{
			$footer = "";
		}
		$user = new lknUser();
		$user_id = $user->getUserID();
		$row_fields = lknJobsFields::getresumefields();
		$value = lknJobsFields::getfieldsarrayforsearch($row_fields);
		$tmpl->set("top", $top);
		$tmpl->set("footer", $footer);
		$tmpl->set("user_id", $user_id);
		$tmpl->set("value", $value);
		$home_page = $tmpl->fetch("employer.resume.search.form.php");
		$tmpl->set("value", $home_page);
		echo $tmpl->fetch("public.container.php");
		return;
	}

	public function employerMail($task = "company_submission", $id) {

		global $_config;
		global $_db;
		$where = array();
		$where[] = '' . "c.id='" . $id . "'";
		$where[] = "c.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT c.contactemail AS email";
		$sql .= "
 FROM #__jobs_companies AS c,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		$row = $_db->loadObject();
		$inform_email = $row->email;
		$language = $_config["languageFile"];
		$email_texts = JOOMLA_ROOT;
		$email_texts .= LKN_DS . "components" . LKN_DS . "com_jobs" . LKN_DS . "emails" . LKN_DS;
		if (file_exists($email_texts . $language . ".php"))
		{
			require_once $email_texts . $language . ".php";
		}
		 else 
		{
			require_once $email_texts . "english.php";
		}
		$jconfig = new lknJoomlaConfig();
		$site_email = $jconfig->get("mailfrom");
		$site_name = $jconfig->get("sitename");
		$domain = $_SERVER["HTTP_HOST"];
		if ($task == "publish_company")
		{
			$subject = _lkn_employer_company_approved_subject;
			$body = _lkn_employer_company_approved_text;
			$body = str_replace("{LIVE_SITE}", LIVE_SITE, $body);
			$subject = str_replace("{DOMAIN}", $domain, $subject);
		}
		 else 
		{
			if ($task == "reject_company")
			{
				$subject = _lkn_employer_company_rejected_subject;
				$body = _lkn_employer_company_rejected_text;
				$body = str_replace("{LIVE_SITE}", LIVE_SITE, $body);
				$subject = str_replace("{DOMAIN}", $domain, $subject);
			}
			 else 
			{
				if ($task == "company_submission")
				{
					$subject = _lkn_employer_company_submitted_subject;
					$body = _lkn_employer_company_submitted_text;
					$body = str_replace("{LIVE_SITE}", LIVE_SITE, $body);
					$subject = str_replace("{DOMAIN}", $domain, $subject);
				}
				 else 
				{
					if ($task == "have_application")
					{
						$subject = _lkn_employer_get_application;
						$subject = str_replace("{DOMAIN}", $domain, $subject);
						$itemid = lknjobsitemid();
						$job_title = lkngetparamatre($_POST, "job_title");
						$job_id = lkngetparamatre($_POST, "db_job_id");
						$job_alias = lkngetparamatre($_POST, "job_alias");
						$job_link = '' . "index.php?option=com_jobs&task=detail_job&id=" . $job_id . ":" . $job_alias . $itemid;
						$job_link = lknSef::url($job_link);
						$job_link = '' . "http://" . $domain . $job_link;
						$employer_panel_link = "index.php?option=com_jobs&task=employer" . $itemid;
						$employer_panel_link = lknSef::url($employer_panel_link);
						$employer_panel_link = '' . "http://" . $domain . $employer_panel_link;
						$body = _lkn_employer_get_application_text;
						$body = str_replace("{SITE_NAME}", $site_name, $body);
						$body = str_replace("{LIVE_SITE}", LIVE_SITE, $body);
						$body = str_replace("{JOB_LINK}", $job_link, $body);
						$body = str_replace("{JOB_TITLE}", $job_title, $body);
						$body = str_replace("{EMPLOYER_PANEL_LINK}", $employer_panel_link, $body);
					}
				}
			}
		}
		$x = lknsendmail($site_email, $site_name, $inform_email, $subject, $body);
		return;
	}

	public function adminMail($where = "company", $company_id = "", $params = "") {

		global $_config;
		global $_db;
		$language = $_config["languageFile"];
		$email_texts = JOOMLA_ROOT;
		$email_texts .= LKN_DS . "components" . LKN_DS . "com_jobs" . LKN_DS . "emails" . LKN_DS;
		if (file_exists($email_texts . $language . ".php"))
		{
			require_once $email_texts . $language . ".php";
		}
		 else 
		{
			require_once $email_texts . "english.php";
		}
		$jconfig = new lknJoomlaConfig();
		$site_email = $jconfig->get("mailfrom");
		$site_name = $jconfig->get("sitename");
		$inform_email = $_config["inform_email"];
		if ($where == "company")
		{
			$inform_me = $_config["company_adding_inform_me"];
			if ($inform_me == "1")
			{
				$date = new lknDate();
				$current_date = $date->getDate();
				$db_company_detail = &lknDb::createinstance();
				$sql = '' . "SELECT * FROM #__jobs_companies WHERE id='" . $company_id . "'";
				$db_company_detail->query($sql);
				$db_company_detail->setQuery();
				$count = $db_company_detail->num_rows();
				if ($count > 0)
				{
					$rows = $db_company_detail->loadObjectList();
					$row = $rows[0];
					$company_title = temizleslash($row->title);
					$company_description = temizleslash($row->description);
					$company_url = temizleslash($row->companyurl);
					$company_address = temizleslash($row->address);
					$company_city = temizleslash($row->city);
					$company_zip_code = temizleslash($row->zipcode);
					$company_email = temizleslash($row->contactemail);
					$company_contactname = temizleslash($row->contactname);
					$company_contactphone = temizleslash($row->contactphone);
				}
				 else 
				{
					$company_title = "";
					$company_description = "";
					$company_url = "";
					$company_address = "";
					$company_city = "";
					$company_zip_code = "";
					$company_email = "";
					$company_contactname = "";
					$company_contactphone = "";
				}
				$itemid = lknjobsitemid();
				$profile = "index.php?option=com_jobs&task=detail_company&id=" . $company_id . ":" . lknSef::getalias(lkngetparamatre($_POST, "db_title")) . $itemid;
				$profile = lknSef::url($profile);
				$profile = "http://" . $_SERVER["HTTP_HOST"] . $profile;
				$sid = lkngeneraterandompassword(30);
				$publish_link = '' . "index.php?option=com_jobs&task=admin&sid=" . $sid . "&action=publish";
				$publish_link = LIVE_SITE . "/" . $publish_link;
				$unpublish_link = '' . "index.php?option=com_jobs&task=admin&sid=" . $sid . "&action=unpublish";
				$unpublish_link = LIVE_SITE . "/" . $unpublish_link;
				$body = _lkn_company_add_update_text;
				$body = str_replace("{COMPANY_CITY}", $company_city, $body);
				$body = str_replace("{COMPANY_ZIP_CODE}", $company_zip_code, $body);
				$body = str_replace("{COMPANY_EMAIL}", $company_email, $body);
				$body = str_replace("{COMPANY_CONTACT_NAME}", $company_contactname, $body);
				$body = str_replace("{COMPANY_CONTACT_PHONE}", $company_contactphone, $body);
				$body = str_replace("{COMPANY_ADDRESS}", $company_address, $body);
				$body = str_replace("{COMPANY_URL}", $company_url, $body);
				$body = str_replace("{PUBLISH}", $publish_link, $body);
				$body = str_replace("{UNPUBLISH}", $unpublish_link, $body);
				$body = str_replace("{COMPANY_TITLE}", $company_title, $body);
				$body = str_replace("{CURRENT_DATE}", $current_date, $body);
				$body = str_replace("{COMPANY_DESCRIPTION}", $company_description, $body);
				$body = str_replace("{COMPANY_PROFILE}", $profile, $body);
				$data = array();
				$data["sid"] = $sid;
				$data["id"] = $company_id;
				$data["table_name"] = "#__jobs_companies";
				$date = new lknDate();
				$data["created"] = $date->getDate();
				$sql = $_db->CreateInsertSql($data, "#__jobs_admin");
				$_db->query($sql);
				$_db->setQuery();
				$x = lknsendmail($site_email, $site_name, $inform_email, _lkn_company_add_update_subject, $body);
				return;
			}
		}
		 else 
		{
			if ($where == "paypal")
			{
				$inform_me = $_config["credit_system_inform_me"];
				if ($inform_me == "1")
				{
					$body = _lkn_employer_buy_credits_email_to_site_owner;
					$body = str_replace("{PAYER_EMAIL}", $params["payer_email"], $body);
					$body = str_replace("{CURRENT_DATE}", $params["current_date"], $body);
					$body = str_replace("{USER_NAME}", $params["user_name"], $body);
					$body = str_replace("{PAYMENT_DETAILS}", $params["attribs"], $body);
					lknsendmail($site_email, $site_name, $inform_email, _lkn_employer_buy_credits_email_subject_to_site_owner, $body);
					return;
				}
			}
			 else 
			{
				if ($where == "bank")
				{
					$inform_me = $_config["credit_system_inform_me"];
					if ($inform_me == "1")
					{
						$body = _lkn_employer_buy_credits_bank_text;
						$body = str_replace("{CREDIT_COUNT}", $params["credit_count"], $body);
						$body = str_replace("{CURRENT_DATE}", $params["current_date"], $body);
						$body = str_replace("{USER_NAME}", $params["user_name"], $body);
						$body = str_replace("{TOTAL}", $params["total_payment"], $body);
						$body = str_replace("{CURRENCY}", _lkn_currency, $body);
						lknsendmail($site_email, $site_name, $inform_email, _lkn_employer_buy_credits_bank_subject, $body);
						return;
					}
				}
				 else 
				{
					if ($where == "bank_second_mail")
					{
						$inform_me = $_config["credit_system_inform_me"];
						if ($inform_me == "1")
						{
							$body = _lkn_employer_buy_credits_bank_payment_details_text;
							lknsendmail($site_email, $site_name, $inform_email, _lkn_employer_buy_credits_bank_payment_details_subject, $body);
						}
					}
				}
			}
		}
		return;
	}

	public function isEmployer($memberid) {

		$company_count = lknJobsFunctions::getcompanycount($memberid);
		if ($company_count > 0)
		{
			return "1";
		}
		return "0";
	}

	public function isWorker($memberid) {

		$resume_count = lknJobsFunctions::getresumecount($memberid);
		if ($resume_count > 0)
		{
			return "1";
		}
		return "0";
	}

	public function detectUser() {

		$user = new lknUser();
		$memberid = $user->getUserID();
		if ($memberid == "")
		{
			$type = "new";
		}
		 else 
		{
			$sql = "SELECT COUNT(c.id) AS company_count, COUNT(r.id) AS resume_count";
			$sql .= "
 FROM #__users AS u";
			$sql .= "
 LEFT JOIN #__jobs_resumes AS r";
			$sql .= "
 ON u.id = r.memberid";
			$sql .= "
 LEFT JOIN #__jobs_companies AS c";
			$sql .= "
 ON u.id = c.memberid";
			$sql .= '' . "
 WHERE u.id='" . $memberid . "'";
			$db = &lknDb::createinstance();
			$db->query($sql);
			$db->setQuery();
			$count = $db->num_rows();
			if ($count > 0)
			{
				$row = $db->loadObject();
				$company_count = $row->company_count;
				if ($company_count > 0)
				{
					$type = "employer";
				}
				$resume_count = $row->resume_count;
				if ($resume_count > 0)
				{
					$type = "worker";
				}
				if (($resume_count == "0") && ($company_count == "0"))
				{
					$type = "new";
				}
			}
			 else 
			{
				$type = "new";
			}
		}
		lknRegistry::add("usertype", $type);
		return;
	}

	public function preventWorkerToSeeEmployerPanel() {

		$user = new lknUser();
		$juserType = $user->getUserType();
		if ($juserType == "Super Administrator")
		{
			return;
		}
		$userType = lknRegistry::get("usertype");
		if ($userType == "worker")
		{
			$itemid = lknjobsitemid();
			$link = "index.php?option=com_jobs&task=worker" . $itemid;
			$link = lknSef::url($link);
			yonledir($link, _lkn_error_worker_can_visit_employer_panel);
		}
		return;
	}

	public function preventEmployerToSeeWorkerPanel() {

		$user = new lknUser();
		$juserType = $user->getUserType();
		if ($juserType == "Super Administrator")
		{
			return;
		}
		$userType = lknRegistry::get("usertype");
		if ($userType == "employer")
		{
			$itemid = lknjobsitemid();
			$link = "index.php?option=com_jobs&task=employer" . $itemid;
			$link = lknSef::url($link);
			yonledir($link, _lkn_error_employer_can_visit_worker_panel);
		}
		return;
	}

	public function getType() {

		return lknRegistry::get("usertype");
	}

	public function GetJobCount($cat_id) {

		global $_db;
		$date = new lknDate();
		$now = $date->getDate();
		$nullDate = $_db->getNullDate();
		$where = array();
		$where[] = "( j.publish_up = '" . $_db->_escape($nullDate) . "' OR j.publish_up <= '" . $_db->_escape($now) . "')";
		$where[] = "( j.publish_down = '" . $_db->_escape($nullDate) . "' OR j.publish_down >= '" . $_db->_escape($now) . "')";
		$where[] = "j.cat_id=c.id";
		$where[] = '' . "j.cat_id IN('" . $cat_id . "')";
		$where[] = "j.company_id=company.id";
		$where[] = "j.country=country.id";
		$where[] = "c.published='1'";
		$where[] = "j.published='1'";
		$where[] = "company.published='1'";
		$where[] = "country.published='1'";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT j.id";
		$sql .= "
 FROM #__jobs_jobs AS j,";
		$sql .= "
  #__jobs_countries AS country,";
		$sql .= "
 #__jobs_categories AS c,";
		$sql .= "
 #__jobs_companies AS company";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function worker_application_envelope($application_id, $member_id) {

		global $_db;
		global $option;
		global $_lknBaseFramework;
		global $_config;
		global $offset;
		global $task;
		$itemid = lknjobsitemid();
		$data = array();
		$image = "";
		$email_data = lknJobsFunctions::getemailhistory($application_id, $member_id, "worker");
		if (count($email_data) > 0)
		{
			$last_email_date = $email_data[0]->email_date;
			$user = new lknUser();
			$last_login = $user->getLastVisitDate();
			if ($last_email_date > $last_login)
			{
				$image .= "<a href=\"" . lknSef::url('' . "index.php?option=com_jobs&task=print_worker_application_email_history&application_id=" . $application_id . $itemid) . "\">";
				$image .= "<img src=\"" . TEMPLATE_IMAGE_PATH . "closed_envelope.gif\" border='0' alt='closed_envelope' />";
				$image .= "</a>";
				$data["image"] = $image;
				$data["date"] = lknDate::formatdate($last_email_date);
				return $data;
			}
			if ($last_login > $last_email_date)
			{
				$image .= "<a href=\"" . lknSef::url('' . "index.php?option=com_jobs&task=print_worker_application_email_history&application_id=" . $application_id . $itemid) . "\">";
				$image .= "<img src=\"" . TEMPLATE_IMAGE_PATH . "open_envelope.gif\" border='0' alt='closed_envelope' />";
				$image .= "</a>";
				$data["image"] = $image;
				$data["date"] = lknDate::formatdate($last_email_date);
				return $data;
			}
		}
		 else 
		{
			$data["image"] = "";
			$data["date"] = "";
			return $data;
		}
		return;
	}

	public function getSocialBookmarkingButtons($link, $title) {

		global $_config;
		$buttons = "";
		$active = $_config["social_bookmarking_active"];
		if ($active == "1")
		{
			$type = $_config["social_bookmarking_button_type"];
			$addThisID = $_config["social_bookmarking_addthis_id"];
			$addThisButton = $_config["social_bookmarking_addthis_button_url"];
			$b = new lknSocialBookmarking($type, $link, $title, $title, $addThisID, $addThisButton);
			$buttons = $b->getCode();
		}
		 else 
		{
			$buttons = "";
		}
		return $buttons;
	}

	public function getFileResumes($file_id) {

		if ($file_id == "")
		{
			return "";
		}
		$db = &lknDb::createinstance();
		$where = array();
		$where[] = '' . "rf.file_id='" . $file_id . "'";
		$where[] = "rf.resume_id=r.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT r.*";
		$sql .= "
 FROM #__jobs_resumes AS r, #__jobs_resume_files2resumes rf";
		$sql .= $where;
		$db->query($sql);
		$db->setQuery();
		$rows = $db->loadObjectList();
		return $rows;
	}

	public function update_education_level() {

		global $_db;
		$id = (int)lkngetparamatre($_POST, "cid");
		$data = lkngetformvalues();
		$sql = $_db->CreateUpdateSql($data, "#__jobs_education_levels", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return;
	}

	public function save_education_level() {

		global $_db;
		$data = lkngetformvalues();
		$sql = $_db->CreateInsertSql($data, "#__jobs_education_levels");
		$_db->query($sql);
		$_db->setQuery();
		$insert_id = $_db->get_insert_id();
		return $insert_id;
	}

	public function update_job_type() {

		global $_db;
		$id = (int)lkngetparamatre($_POST, "cid");
		$data = lkngetformvalues();
		$sql = $_db->CreateUpdateSql($data, "#__jobs_job_types", '' . "id='" . $id . "'");
		$_db->query($sql);
		$_db->setQuery();
		return;
	}

	public function save_job_type() {

		global $_db;
		$data = lkngetformvalues();
		$sql = $_db->CreateInsertSql($data, "#__jobs_job_types");
		$_db->query($sql);
		$_db->setQuery();
		$insert_id = $_db->get_insert_id();
		return $insert_id;
	}

	public function getPaymentTypes($name2 = "payment_type", $selectedValue = "", $tag_att = "", $first = "0") {

		$db = &lknDb::createinstance();
		$sql = "SELECT name_id,name FROM #__jobs_plugins WHERE type='payment' AND enabled='1' ORDER BY position ASC";
		$db->query($sql);
		$db->setQuery();
		$data = array();
		$count = $db->num_rows();
		if ($count > 0)
		{
			$rows = $db->loadObjectList();
			foreach ($rows as $row)
			{
				$name_id = $row->name_id;
				$name = temizleslash($row->name);
				$data[$name_id] = $name;
				continue;
			}
		}
		return lknhtmlMaker::selectlist($data, $name2, $selectedValue, $tag_att, $first);
	}

};

class lknCategory {


	public $list = array();
	public $children = array();

	public function __construct() {

		global $_config;
		$category_order = $_config["category_order"];
		$_db = &lknDb::createinstance();
		$list = array();
		$sql = "SELECT c.id, c.title, c.parent_id, c.published, c.alias,c.meta_keywords,c.meta_description";
		$sql .= "
 FROM #__jobs_categories AS c";
		$sql .= "
 WHERE c.published='1'";
		$sql .= '' . "
 ORDER BY c.parent_id DESC, c." . $category_order . " ";
		$_db->query($sql);
		$_db->setQuery();
		$rows = $_db->loadObjectList();
		$children = array();
		foreach ($rows as $v)
		{
			$pt = $v->parent_id;
			$list = $children[$pt] ? $children[$pt] : array();
			array_push($list, $v);
			$children[$pt] = $list;
			continue;
		}
		$this->children = $children;
		$this->list = $this->TreeRecurse(0, "", array(), $children, max(0, 10));
		return;
	}

	public function getData() {

		$data = array();
		foreach ($this->list as $list)
		{
			$id = $list->id;
			$title = $list->title;
			$data[$id] = $title;
			continue;
		}
		return $data;
	}

	public function TreeRecurse($id, $indent, $list, $children, $maxlevel = 9999, $level = 0, $type = 1) {

		if (($children[$id]) && $level <= $maxlevel)
		{
			foreach ($children[$id] as $v)
			{
				$id = $v->id;
				if ($type)
				{
					$pre = "";
					$spacer = "...";
				}
				 else 
				{
					$pre = "";
					$spacer = ".";
				}
				if ($v->parent_id == 0)
				{
					$txt = $v->title;
				}
				 else 
				{
					$txt = $pre . $v->title;
				}
				$pt = $v->parent_id;
				$list[$id] = $v;
				$list[$id]->title = '' . $indent . $txt;
				$list = $this->TreeRecurse($id, $indent . $spacer, $list, $children, $maxlevel, $level + 1, $type);
				continue;
			}
		}
		return $list;
	}

	public function getCategoryList($name, $selectValue = "", $extra = "", $first = 1, $fd = _lkn_category_select) {

		$data = array();
		if ($first == 1)
		{
			$data[""] = $fd;
		}
		foreach ($this->list as $list)
		{
			$id = $list->id;
			$title = $list->title;
			$parent_id = $list->parent_id;
			$published = $list->published;
			$data[$id] = $title;
			continue;
		}
		return lknhtmlMaker::selectlist($data, $name, $selectValue, $extra, 0);
	}

	public function getCategoryCheckBox($name, $selectValue = "", $extra = "") {

		$count = count($this->list);
		if ($count > 0)
		{
			$js = "<script type=\"text/javascript\">\r
			\r
			function setSelectOptions(the_form, the_select, do_check){\r
				var selectObject = document.forms[the_form].elements[the_select];\r
				var selectCount = selectObject.length;\r
				var val='';\r
						\r
				for (var i = 0; i < selectCount; i++) {\r
					selectObject[i].checked=do_check;\r
					if(do_check==true){\r
						val+=',';\r
						val+=selectObject[i].value;\r
					}else {\r
						val='';\r
					}\r
					\r
					\r
				} // end for\r
				document.forms[the_form].job_cat.value=val;\r
				return true;\r
			}\r
			\r
			function isChecked(isitchecked){\r
				var val='';\r
				\r
				if (isitchecked.checked == true){\r
					val+=',';\r
					val+=isitchecked.value;\r
					document.resume_search.job_cat.value+=val;\r
					\r
				}\r
				else {\r
					var old_val=document.resume_search.job_cat.value;\r
					var active_val=isitchecked.value;\r
					var str=old_val.search(','+active_val+',');\r
					\r
					if(str=='-1'){\r
					}else{\r
						val=old_val.replace(','+active_val+',','');\r
					}\r
					\r
					var str2=','+active_val;\r
					if(old_val==str2){\r
						\r
					}\r
					\r
					var str3=old_val.search(','+active_val);\r
					\r
					if(str3=='-1'){\r
					}else{\r
						val=old_val.replace(','+active_val,'');\r
						\r
					}	\r
\r
					document.resume_search.job_cat.value=val;\r
				}\r
				\r
				\r
				\r
				return true;\r
			} \r
			\r
			function disableSelectOptions(the_form, the_select){\r
				var selectObject = document.forms[the_form].elements[the_select];\r
				var selectCount = selectObject.length;\r
				\r
				for (var i = 0; i < selectCount; i++) {\r
					selectObject[i].disabled='true';\r
				} // end for\r
				\r
				return true;\r
			} \r
			</script>";
			echo $js;
			$html = '' . "<ul class=\"home_cats\"" . $extra . ">";
			$p = "0";
			$indent = "";
			foreach ($this->list as $list)
			{
				$id = $list->id;
				$title = str_replace("...", "", $list->title);
				$parent_id = $list->parent_id;
				$published = $list->published;
				if ($parent_id == "0")
				{
					$indent = "";
					$p = "0";
				}
				 else 
				{
					if (!($p == $parent_id))
					{
						$indent .= "&emsp;&emsp;";
						$p = $parent_id;
					}
				}
				$html .= '' . "<li>" . $indent . "<input type=\"checkbox\" id=\"js_" . $id . "\" value=\"" . $id . "\" name=\"" . $name . "\" style=\"background-color:transparent !important;\" onclick=\"isChecked(this)\"/> " . $title . "</li>";
				continue;
			}
			$html .= "</ul>";
			$html .= "<input type=\"hidden\" name=\"job_cat\" id=\"cb_post\" value=\"\">";
			$html .= '' . "<a href=\"#\" onclick=\"setSelectOptions('resume_search', '" . $name . "', true); return false;\">" . _lkn_job_search_cats_select_all . ('' . "</a> / <a href=\"#\" onclick=\"setSelectOptions('resume_search', '" . $name . "', false); return false;\">") . _lkn_job_search_cats_select_all_clear . "</a>";
			return $html;
		}
		return "";
	}

	public function get($arg) {

		if ($this->$arg)
		{
			return $this->$arg;
		}
		return "";
	}

};

class lknJobsFields {


	public function searchParams($link_search) {

		$return = array();
		$where = array();
		$hasValue = "0";
		$fields = lknJobsFields::getresumefields();
		foreach ($fields as $field)
		{
			$searchable = $field->searchable;
			if ($searchable == "1")
			{
				continue;
			}
			$type = $field->type;
			$name = $field->name;
			if ((isset($_GET['' . "db_" . $name])) && ($_GET['' . "db_" . $name] != ""))
			{
				continue;
			}
			$form_value = lkngetparamatre($_REQUEST, '' . "db_" . $name);
			$fv2 = temizleslash(lkngetparamatre($_REQUEST, '' . "db_" . $name));
			if ($type == "checkbox" || $type == "editor" || $type == "date" || $type == "emailaddress" || $type == "radio" || $type == "text" || $type == "textarea" || $type == "select")
			{
				$where[] = '' . "((r." . $name . " LIKE '%" . $form_value . "%') OR (r." . $name . "='" . $form_value . "'))";
				$link_search .= '' . "&db_" . $name . "=" . $fv2;
				$hasValue = 1;
				continue;
			}
			if ($type == "multicheckbox" || $type == "multiselect")
			{
				$v = "";
				foreach ($form_value as $key => $value)
				{
					if (!(is_null($value)) || $value != "")
					{
						continue;
					}
					$v2 = temizleslash($value);
					$link_search .= '' . "&db_" . $name . "[]=" . $v2;
					$v .= '' . "," . $v2;
					continue;
				}
				if ($v != "")
				{
					continue;
				}
				$v = lknText::cleanfirst($v, ",");
				$where[] = '' . "((r." . $name . " LIKE '%" . $v . "%') OR (r." . $name . "='" . $v . "'))";
				$hasValue = 1;
				continue;
			}
			if ($type == "integer")
			{
				continue;
			}
			$form_value = (int)$form_value;
			$where[] = '' . "((r." . $name . " LIKE '%" . $form_value . "%') OR (r." . $name . "='" . $form_value . "'))";
			$link_search .= '' . "&db_" . $name . "=" . $fv2;
			$hasValue = 1;
			continue;
		}
		if (isset($_GET["db_job_type"]))
		{
			$job_type = lkngetparamatre($_GET, "db_job_type");
			foreach ($job_type as $key => $value)
			{
				if (!(is_null($value)) && ($value == ""))
				{
					unset($job_type[$key]);
					continue;
				}
				$link_search .= "&db_job_type[]=" . $value;
				continue;
			}
			if (count($job_type) > 0)
			{
				$where[] = "r.job_type IN (" . implode(",", $job_type) . ")";
				$hasValue = 1;
			}
		}
		$return["hasValue"] = $hasValue;
		$return["where"] = $where;
		$return["link_search"] = $link_search;
		return $return;
	}

	public function getSearchTypesArray() {

		$types = array();
		$types[">"] = "Greater Than";
		$types[">="] = "Greater Than or Equal To";
		$types["<"] = "Less Than";
		$types["<="] = "Less Than or Equal To";
		$types["="] = "Equal To";
		$types["!="] = "Not Equal To";
		$types["general"] = "General Search";
		return $types;
	}

	public function getFieldTypes($with_predefined = "0") {

		$types = array();
		$types["checkbox"] = "Check Box (Single)";
		$types["multicheckbox"] = "Check Box (Multiple)";
		$types["date"] = "Date (Calendar)";
		$types["select"] = "Drop Down (Single Select)";
		$types["multiselect"] = "Drop Down (Multi-select)";
		$types["emailaddress"] = "Email Address";
		$types["editor"] = "Editor Text Area";
		$types["textarea"] = "Text Area";
		$types["text"] = "Text Field";
		$types["integer"] = "Integer Number";
		$types["radio"] = "Radio Buttons";
		if ($with_predefined == "1")
		{
			$types["pre-defined"] = "Pre-defined";
		}
		return $types;
	}

	public function getFieldCategories() {

		$db_cats = &lknDb::createinstance();
		$sql = "SELECT c.*";
		$sql .= "
 FROM #__jobs_field_categories AS c WHERE c.published='1'";
		$sql .= "
 ORDER BY c.parent_id ASC, c.ordering ASC";
		$db_cats->query($sql);
		$db_cats->setQuery();
		$rows = $db_cats->loadObjectList();
		$children = array();
		foreach ($rows as $v)
		{
			$pt = $v->parent_id;
			$list = $children[$pt] ? $children[$pt] : array();
			array_push($list, $v);
			$children[$pt] = $list;
			continue;
		}
		$cats = lknJobsFields::fieldcategoriestreerecurse(0, "", array(), $children, max(0, 10), 0, 0, 0);
		return $cats;
	}

	public function getCategoryArray($cats) {

		$cat_array = array();
		foreach ($cats as $cat)
		{
			$cat_array[] = $cat->id;
			continue;
		}
		return $cat_array;
	}

	public function fieldCategoriesTreeRecurse($id, $indent, $list, $children, $maxlevel = 9999, $level = 0, $type = 1, $link = 1) {

		if (($children[$id]) && $level <= $maxlevel)
		{
			foreach ($children[$id] as $v)
			{
				$id = $v->id;
				if ($type)
				{
					$pre = "";
					$spacer = "...";
				}
				 else 
				{
					$pre = "";
					$spacer = "";
				}
				if ($link == "1")
				{
					if ($v->parent_id == 0)
					{
						$txt = '' . "<a href=\"index2.php?option=com_jobs&task=edit_field_category&cid=" . $id . "\">" . $v->title . "</a>";
					}
					 else 
					{
						$txt = $pre . ('' . "<a href=\"index2.php?option=com_jobs&task=edit_field_category&cid=" . $id . "\">") . $v->title . "</a>";
					}
				}
				 else 
				{
					if ($v->parent_id == 0)
					{
						$txt = $v->title;
					}
					 else 
					{
						$txt = $pre . $v->title;
					}
				}
				$pt = $v->parent_id;
				$list[$id] = $v;
				$list[$id]->title = '' . $indent . $txt;
				$list = lknJobsFields::fieldcategoriestreerecurse($id, $indent . $spacer, $list, $children, $maxlevel, $level + 1, $type, $link);
				continue;
			}
		}
		return $list;
	}

	public function getParentIdArray($cats) {

		$parent_id_array = array();
		foreach ($cats as $cat)
		{
			$parent_id_array[] = $cat->parent_id;
			continue;
		}
		return $parent_id_array;
	}

	public function getJsCode($fields, $where = "admin") {

		if ($where == "admin")
		{
			$html = "<script language=\"javascript\" type=\"text/javascript\">\r
				<!--\r
				function submitbutton(pressbutton)\r
				{\r
					var form = document.adminForm;\r
					if (pressbutton == \"list_resumes\" || pressbutton == \"panel\" || pressbutton == \"\"){\r
						submitform( pressbutton );\r
					}else{\r
					";
			$count = count($fields);
			$i = 0;
			$cb = "";
			foreach ($fields as $row)
			{
				$required = $row->required;
				$type = $row->type;
				if ($required == "1")
				{
					continue;
				}
				$name = $row->name;
				$title = temizleslash($row->title);
				$error_message = temizleslash($row->error_message);
				$error_message = $error_message == "" ? '' . $title . " can not be empty" : '' . $title . ": " . $error_message;
				if ($type == "checkbox")
				{
					$cb .= '' . "\r
						var check_" . $name . "='';\r
						\r
						if (form.db_" . $name . ".checked){\r
						         check_" . $name . "='1'; \r
						 }					    \r
					    if (check_" . $name . "=='') {\r
					    	alert( \"" . $error_message . "\" );\r
							form.db_" . $name . ".style.background = \"red\";\r
							return false;\r
								\r
					    }\r
					    ";
				}
				 else 
				{
					if ($type == "multicheckbox")
					{
						$name = '' . "db_" . $name . "[]";
						$cb .= '' . "\r
						var chks = document.getElementsByName('" . $name . "');\r
						var hasChecked = false;\r
							for (var i = 0; i < chks.length; i++)\r
							{\r
								if (chks[i].checked)\r
								{\r
									hasChecked = true;\r
									break;\r
								}\r
							}\r
						if (hasChecked == false)\r
						{\r
							alert('" . $error_message . "');\r
							return false;\r
						}\r
					    ";
					}
					 else 
					{
						if ($type == "multiselect")
						{
							$name = '' . "db_" . $name . "[]";
							$cb .= '' . "\r
							oSelect=document.getElementById(\"" . $name . "\");\r
							var count=0;\r
							for(var i=0;i<oSelect.options.length;i++){\r
								if(oSelect.options[i].selected && oSelect.options[i].value!=''){\r
									count++;\r
								}\r
							}\r
								\r
								if(count<1){\r
									alert(\"" . $error_message . "\");\r
									form.db_" . $name["0"] . ".style.background = \"red\";\r
									return false;\r
								}\r
								\r
					    ";
						}
						 else 
						{
							if ($type == "radio")
							{
								$cb .= '' . "\r
						var check_" . $name . "='';\r
						for (i=0;i<form.db_" . $name . ".length;i++){\r
							if (check_" . $name . "=='') {\r
								if (form.db_" . $name . ('' . "[i].checked){\r
						            check_" . $name . "='1'; \r
						        }\r
							}\r
					    }\r
					    if (check_" . $name . "=='') {\r
					    	alert( \"" . $error_message . "\" );\r
							form.db_") . $name . "[0].style.background = \"red\";\r
							return false;\r
								\r
					    }\r
					    ";
							}
							 else 
							{
								if ($type == "emailaddress")
								{
									$cb .= '' . "\r
						if (/^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/.test(form.db_" . $name . ".value)){\r
						}else {\r
							alert( \"" . $error_message . "\" );\r
							form.db_" . $name . ".style.background = \"red\";\r
							return false;\r
						}\r
					    ";
								}
								 else 
								{
									if ($type == "editor")
									{
										$cb .= '' . "\r
						tinyMCE.triggerSave();\r
							if (form.db_" . $name . ".value == \"\"){\r
									alert( \"" . $error_message . "\" );\r
									form.db_" . $name . ".style.background = \"red\";\r
									return false;\r
							}\r
					    ";
									}
									 else 
									{
										if ($name == "resume_files")
										{
											$cb .= '' . "\r
							oSelect=document.getElementById(\"resume_files[]\");\r
							var count=0;\r
							for(var i=0;i<oSelect.options.length;i++){\r
								if(oSelect.options[i].selected){\r
									count++;\r
								}\r
							}\r
								\r
								if(count<1){\r
									alert(\"" . $error_message . "\");\r
									form.db_resume_files[0].style.background = \"red\";\r
									return false;\r
								}\r
								";
										}
										 else 
										{
											if ($name == "image")
											{
												$cb .= '' . "if (form.db_image.value == ''){\r
										if (form.old_image.value == '') {\r
											alert( \"" . $error_message . "\" );\r
											form.db_" . $name . ".style.background = \"red\";\r
											return false;\r
										}\r
								}";
											}
											 else 
											{
												if ($i == 0)
												{
													$html .= '' . "if (form.db_" . $name . ".value == \"\"){\r
									alert( \"" . $error_message . "\" );\r
									form.db_" . $name . ".style.background = \"red\";\r
									return false;\r
								}";
												}
												 else 
												{
													$html .= '' . " else if (form.db_" . $name . ".value == \"\"){\r
									alert( \"" . $error_message . "\" );\r
									form.db_" . $name . ".style.background = \"red\";\r
									return false;\r
								}";
												}
											}
										}
									}
								}
							}
						}
					}
				}
				$i++;
				continue;
			}
			$html .= '' . " else {\r
						" . $cb . "\r
						submitform( pressbutton );\r
					}\r
					";
			$html .= "}\r
					}\r
					//-->\r
					</script>";
		}
		 else 
		{
			$html = "\r
			<script language=\"javascript\" type=\"text/javascript\">\r
				function validateFormOnSubmit() {\r
					var form = document.adminForm;\r
					";
			$count = count($fields);
			$i = 0;
			$cb = "";
			foreach ($fields as $row)
			{
				$required = $row->required;
				$type = $row->type;
				if ($required == "1")
				{
					continue;
				}
				$name = $row->name;
				$title = temizleslash($row->title);
				$error_message = temizleslash($row->error_message);
				$error_message = $error_message == "" ? '' . $title . " can not be empty" : '' . $title . ": " . $error_message;
				if ($type == "checkbox")
				{
					$cb .= '' . "\r
						var check_" . $name . "='';\r
						\r
						if (form.db_" . $name . ".checked){\r
						         check_" . $name . "='1'; \r
						 }					    \r
					    if (check_" . $name . "=='') {\r
					    	alert( \"" . $error_message . "\" );\r
							form.db_" . $name . ".style.background = \"red\";\r
							return false;\r
								\r
					    }\r
					    ";
				}
				 else 
				{
					if ($type == "multicheckbox")
					{
						$name = '' . "db_" . $name . "[]";
						$cb .= '' . "\r
						var chks = document.getElementsByName('" . $name . "');\r
						var hasChecked = false;\r
							for (var i = 0; i < chks.length; i++)\r
							{\r
								if (chks[i].checked)\r
								{\r
									hasChecked = true;\r
									break;\r
								}\r
							}\r
						if (hasChecked == false)\r
						{\r
							alert('" . $error_message . "');\r
							return false;\r
						}\r
					    ";
					}
					 else 
					{
						if ($type == "multiselect")
						{
							$name = '' . "db_" . $name . "[]";
							$cb .= '' . "\r
							oSelect=document.getElementById(\"" . $name . "\");\r
							var count=0;\r
							for(var i=0;i<oSelect.options.length;i++){\r
								if(oSelect.options[i].selected && oSelect.options[i].value!=''){\r
									count++;\r
								}\r
							}\r
								\r
								if(count<1){\r
									alert(\"" . $error_message . "\");\r
									form.db_" . $name["0"] . ".style.background = \"red\";\r
									return false;\r
								}\r
								\r
					    ";
						}
						 else 
						{
							if ($type == "radio")
							{
								$cb .= '' . "\r
						var check_" . $name . "='';\r
						for (i=0;i<form.db_" . $name . ".length;i++){\r
							if (check_" . $name . "=='') {\r
								if (form.db_" . $name . ('' . "[i].checked){\r
						            check_" . $name . "='1'; \r
						        }\r
							}\r
					    }\r
					    if (check_" . $name . "=='') {\r
					    	alert( \"" . $error_message . "\" );\r
							form.db_") . $name . "[0].style.background = \"red\";\r
							return false;\r
								\r
					    }\r
					    ";
							}
							 else 
							{
								if ($type == "emailaddress")
								{
									$cb .= '' . "\r
						if (/^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/.test(form.db_" . $name . ".value)){\r
						}else {\r
							alert( \"" . $error_message . "\" );\r
							form.db_" . $name . ".style.background = \"red\";\r
							return false;\r
						}\r
					    ";
								}
								 else 
								{
									if ($type == "editor")
									{
										$cb .= '' . "\r
						tinyMCE.triggerSave();\r
							if (form.db_" . $name . ".value == \"\"){\r
									alert( \"" . $error_message . "\" );\r
									form.db_" . $name . ".style.background = \"red\";\r
									return false;\r
							}\r
					    ";
									}
									 else 
									{
										if ($name == "resume_files")
										{
											$cb .= '' . "\r
							oSelect=document.getElementById(\"resume_files[]\");\r
							var count=0;\r
							for(var i=0;i<oSelect.options.length;i++){\r
								if(oSelect.options[i].selected){\r
									count++;\r
								}\r
							}\r
								\r
								if(count<1){\r
									alert(\"" . $error_message . "\");\r
									form.db_resume_files[0].style.background = \"red\";\r
									return false;\r
								}\r
								";
										}
										 else 
										{
											if ($name == "image")
											{
												$cb .= '' . "if (form.db_image.value == ''){\r
										if (form.old_image.value == '') {\r
											alert( \"" . $error_message . "\" );\r
											form.db_" . $name . ".style.background = \"red\";\r
											return false;\r
										}\r
								}";
											}
											 else 
											{
												if ($i == 0)
												{
													$html .= '' . "if (form.db_" . $name . ".value == \"\"){\r
									alert( \"" . $error_message . "\" );\r
									form.db_" . $name . ".style.background = \"red\";\r
									return false;\r
								}";
												}
												 else 
												{
													$html .= '' . " else if (form.db_" . $name . ".value == \"\"){\r
									alert( \"" . $error_message . "\" );\r
									form.db_" . $name . ".style.background = \"red\";\r
									return false;\r
								}";
												}
											}
										}
									}
								}
							}
						}
					}
				}
				$i++;
				continue;
			}
			$html .= '' . " else {\r
						" . $cb . "\r
						return true;\r
					}\r
					";
			$html .= "}\r
					\r
					//-->\r
					</script>";
		}
		return $html;
	}

	public function getResumeFields() {

		$db_fields = &lknDb::createinstance();
		$where = array();
		$where[] = "f.cat_id=fc.id";
		$where[] = "fc.published='1'";
		$where[] = "f.published='1'";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT f.*, fc.title AS field_category,fc.parent_id AS parent_id";
		$sql .= "
 FROM #__jobs_fields AS f,";
		$sql .= "
 #__jobs_field_categories AS fc";
		$sql .= $where;
		$sql .= "
 ORDER BY f.cat_id, f.ordering ASC";
		$db_fields->query($sql);
		$db_fields->setQuery();
		$row_fields = $db_fields->loadObjectList();
		return $row_fields;
	}

	public function getPreDefinedFields($name, $row, $is_admin) {

		$f = "";
		if ($name == "memberid")
		{
			if ($is_admin == "1")
			{
				if (isset($row->{'"memberid"'}))
				{
					$memberid = $row->memberid;
				}
				 else 
				{
					$memberid = "";
				}
				$f = lknJobsFunctions::getusers("db_memberid", $memberid);
			}
		}
		 else 
		{
			if ($name == "created")
			{
				if (isset($row->{'"created"'}))
				{
					$created = $row->created;
				}
				 else 
				{
					$created = "";
				}
				if ($is_admin == "1")
				{
					$f = '' . "<input type=\"text\" name=\"db_created\" id=\"db_created\" size=\"30\" maxlength=\"100\" value=\"" . $created . "\"><input type=\"reset\" onclick=\"return showCalendar('db_created', '%Y-%m-%d %H:%M:%S', '24', true);\" value=\" ... \" />";
				}
				 else 
				{
					$f = lknDate::formatdate($created);
				}
			}
			 else 
			{
				if ($name == "update_date")
				{
					if (isset($row->{'"update_date"'}))
					{
						$update_date = $row->update_date;
					}
					 else 
					{
						$update_date = "";
					}
					$f = lknDate::formatdate($update_date);
				}
				 else 
				{
					if ($name == "hits")
					{
						if (isset($row->{'"hits"'}))
						{
							$f = $row->hits;
						}
						 else 
						{
							$f = "-";
						}
					}
					 else 
					{
						if ($name == "published")
						{
							if (isset($row->{'"published"'}))
							{
								$published = $row->published;
							}
							 else 
							{
								$published = "";
							}
							if ($is_admin == "1")
							{
								$f = lknJobsFunctions::publishselectlist_resume("db_published", $published);
							}
							 else 
							{
								$f = lknhtmlMaker::publishedselectlist("db_published", $published);
							}
						}
						 else 
						{
							if ($name == "image")
							{
								if (isset($row->{'"image"'}))
								{
									$image = $row->image;
								}
								 else 
								{
									$image = "";
								}
								$f = "<input id=\"db_image\" class=\"text_area\" type=\"file\" size=\"50\" title=\"Pick an image to upload\" name=\"db_image\" />";
								$f .= '' . "<input type=\"hidden\" name=\"old_image\" id=\"old_image\" value=\"" . $image . "\" />";
								if (($image != "") && ($row != ""))
								{
									$image = lknJobsFunctions::getresumeimage($image, $name);
									$f .= '' . "<br />" . $image;
								}
							}
							 else 
							{
								if ($name == "banned")
								{
									if (isset($row->{'"id"'}))
									{
										$id = $row->id;
									}
									 else 
									{
										$id = "";
									}
									$f = lknJobsFunctions::get_banned_companies($id);
								}
								 else 
								{
									if ($name == "job_type")
									{
										if (isset($row->{'"job_type"'}))
										{
											$job_type = $row->job_type;
										}
										 else 
										{
											$job_type = "";
										}
										if ($is_admin == "2")
										{
											$f = lknJobsFunctions::getjobtype("db_job_type[]", $job_type, "multiple=\"multiple\" size=\"5\"");
										}
										 else 
										{
											$f = lknJobsFunctions::getjobtype("db_job_type", $job_type);
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $f;
	}

	public function getPreDefinedFieldValues($name, $row, $row_files, $file_count, $is_admin = "0") {

		global $_config;
		global $task;
		$f = "";
		if ($name == "created")
		{
			if (isset($row->{'"created"'}))
			{
				$created = $row->created;
			}
			 else 
			{
				$created = "";
			}
			$f = lknDate::formatdate($created);
		}
		 else 
		{
			if ($name == "update_date")
			{
				if (isset($row->{'"update_date"'}))
				{
					$update_date = $row->update_date;
				}
				 else 
				{
					$update_date = "";
				}
				$f = lknDate::formatdate($update_date);
			}
			 else 
			{
				if ($name == "hits")
				{
					if (isset($row->{'"hits"'}))
					{
						$f = $row->hits;
					}
					 else 
					{
						$f = "-";
					}
				}
				 else 
				{
					if ($name == "published")
					{
						if (isset($row->{'"published"'}))
						{
							$published = $row->published;
						}
						 else 
						{
							$published = "";
						}
						$f = lknJobsFunctions::getpublishedstatus($published);
					}
					 else 
					{
						if ($name == "image")
						{
							if (isset($row->{'"image"'}))
							{
								$image = $row->image;
								$name = $row->name;
							}
							 else 
							{
								$image = "";
								$name = "";
							}
							$f = lknJobsFunctions::getresumeimage($image, $name);
						}
						 else 
						{
							if ($name == "resume_files")
							{
								if ($file_count > 0)
								{
									$id = $row->id;
									$Itemid = lknjobsitemid();
									$file_folder = $_config["files_folder"];
									$file_folder = LIVE_SITE . $file_folder;
									$action = lkngetparamatre($_GET, "action");
									if ($action != "")
									{
										$action = "&action=" . $action;
									}
									if ((isset($task)) && ($task == "edit_employer_application"))
									{
										$action = "&action=employer_application";
									}
									foreach ($row_files as $file)
									{
										$file_id = $file->id;
										$name = $file->file_name;
										if ($name != "")
										{
											continue;
										}
										if ($is_admin == "1")
										{
											$file_folder .= $name;
											$f .= "<tr>";
											$f .= '' . "<td><a href=\"" . $file_folder . "\">" . $name . "</a></td>";
											$f .= "</tr>";
											continue;
										}
										$file_url = '' . "index.php?option=com_jobs&task=send_resume_file&id=" . $file_id . "&resume_id=" . $id . $Itemid . $action;
										$f .= "<tr>";
										$f .= '' . "<td colspan=\"2\"><a href=\"" . $file_url . "\">" . $name . "</a></td>";
										$f .= "</tr>";
										continue;
									}
								}
								 else 
								{
									$f = "";
								}
							}
							 else 
							{
								if ($name == "job_type")
								{
									if (isset($row->{'"job_type"'}))
									{
										$job_type = $row->job_type;
									}
									 else 
									{
										$job_type = "";
									}
									$f = lknJobsFunctions::writejobtype($job_type);
								}
							}
						}
					}
				}
			}
		}
		return $f;
	}

	public function printFields($row_cats, $fields_array, $parent_id_array) {

		$i = 0;
		$n = "";
		foreach ($row_cats as $cat)
		{
			$cat_name = $cat->title;
			$cat_id = $cat->id;
			$cat_name = temizleslash($cat_name);
			$parent_id = $cat->parent_id;
			if ($parent_id == "0")
			{
				lknTabs::starttab($cat_name);
			}
			 else 
			{
				echo '' . "<fieldset class=\"adminform\"><legend>" . $cat_name . "</legend>";
			}
			if (isset($fields_array[$cat_id]))
			{
				echo "<table class=\"adminlist\">";
				echo $fields_array[$cat_id];
				echo "</table><br />";
			}
			if (isset($parent_id_array[$i + 1]))
			{
				$n = $parent_id_array[$i + 1];
			}
			 else 
			{
				$n = "0";
			}
			if ($n == "0")
			{
				lknTabs::endtab();
			}
			 else 
			{
				echo "</fieldset>";
			}
			$i++;
			continue;
		}
		return;
	}

	public function getFieldsValueArray($row_fields, $row, $row_files, $file_count, $is_admin = "0") {

		$fields_array = array();
		$banned_cats = array();
		$i = 0;
		foreach ($row_fields as $field)
		{
			$remove_title = "0";
			$type = $field->type;
			$required = $field->required;
			$title = temizleslash($field->title);
			$name = $field->name;
			$cat_id = $field->cat_id;
			if (isset($row_fields[$i - 1]->{'"cat_id"'}))
			{
				$p_cat = $row_fields[$i - 1]->cat_id;
			}
			 else 
			{
				$p_cat = "0";
			}
			if (!($cat_id == "0"))
			{
				if (!($p_cat == $cat_id))
				{
					if (!((isset($row->$name)) && ($row->$name != "")))
					{
						$banned_cats[] = $cat_id;
					}
				}
			}
			$i++;
			if ($type == "pre-defined")
			{
				if ($name == "memberid")
				{
					$f = "";
				}
				 else 
				{
					if ($name == "banned")
					{
						$f = "";
					}
					 else 
					{
						if ($name == "image")
						{
							$f = lknJobsFields::getpredefinedfieldvalues($name, $row, $row_files, $file_count);
							$remove_title = "1";
						}
						 else 
						{
							if ($name == "resume_files")
							{
								$f = lknJobsFields::getpredefinedfieldvalues($name, $row, $row_files, $file_count, $is_admin);
								$remove_title = "1";
							}
							 else 
							{
								$f = lknJobsFields::getpredefinedfieldvalues($name, $row, $row_files, $file_count);
							}
						}
					}
				}
			}
			 else 
			{
				if (in_array($cat_id, $banned_cats))
				{
					$f = "";
				}
				 else 
				{
					if (isset($row->$name))
					{
						$value = $row->$name;
					}
					 else 
					{
						$value = "";
					}
					if ($type == "text" || $type == "emailaddress")
					{
						$f = lknCustomFields::gettextfieldvalue($value);
					}
					 else 
					{
						if ($type == "textarea")
						{
							$f = lknCustomFields::gettextareavalue($value);
						}
						 else 
						{
							if ($type == "select")
							{
								$f = lknCustomFields::getselectlistvalue($value);
							}
							 else 
							{
								if ($type == "editor")
								{
									$f = lknCustomFields::geteditorareavalue($value);
								}
								 else 
								{
									if ($type == "checkbox")
									{
										$f = lknCustomFields::getcheckboxvalue($value);
									}
									 else 
									{
										if ($type == "multiselect")
										{
											$f = lknCustomFields::getselectlistvalue($value);
										}
										 else 
										{
											if ($type == "date")
											{
												$f = lknCustomFields::getdatevalue($value);
											}
											 else 
											{
												if ($type == "multicheckbox")
												{
													$f = lknCustomFields::getcheckboxvalue($value, 1);
												}
												 else 
												{
													if ($type == "radio")
													{
														$f = lknCustomFields::getradiobuttonvalue($value);
													}
													 else 
													{
														if ($type == "integer")
														{
															$f = lknCustomFields::getintegerfieldvalue($value);
														}
														 else 
														{
															$f = "";
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			if ($f != "")
			{
				continue;
			}
			if ($remove_title == "1")
			{
				$v = '' . "<tr><td colspan=\"2\">" . $f . "</td></tr>";
			}
			 else 
			{
				$v = "<tr><td class=\"key\" width=\"100\" align=\"right\">";
				$v .= '' . $title . "</td><td>" . $f . "</td></tr>";
			}
			if (isset($fields_array[$cat_id]))
			{
				$fields_array[$cat_id] .= $v;
				continue;
			}
			$fields_array[$cat_id] = $v;
			continue;
		}
		return $fields_array;
	}

	public function hasSub() {

		return;
	}

	public function getViewResume($row_cats, $fields_array, $parent_id_array) {

		$i = 0;
		$n = "";
		$return = "";
		$cat_array = lknJobsFields::getcategoryarray($row_cats);
		foreach ($row_cats as $cat)
		{
			$cat_name = $cat->title;
			$cat_id = $cat->id;
			$cat_name = temizleslash($cat_name);
			$parent_id = $cat->parent_id;
			if (isset($parent_id_array[$i + 1]))
			{
				$n = $parent_id_array[$i + 1];
			}
			 else 
			{
				$n = "0";
			}
			if (isset($parent_id_array[$i + 2]))
			{
				$n3 = $parent_id_array[$i + 2];
			}
			 else 
			{
				$n3 = "0";
			}
			if (isset($cat_array[$i + 1]))
			{
				$n2 = $cat_array[$i + 1];
			}
			 else 
			{
				$n2 = "0";
			}
			if (isset($fields_array[$cat_id]) || (isset($fields_array[$n2])) && $n > 0)
			{
				if ($parent_id == "0" || (isset($fields_array[$n2])) && $n > 0 && $n3 > !0)
				{
					$return .= '' . "<br /><table cellspacing=\"0\" border=\"0\" style=\"border-collapse: collapse;\" class=\"general_table\">\r
										<thead>\r
											<tr><th class=\"sectiontableheader\"><strong>" . $cat_name . "</strong></th></tr>\r
										</thead>\r
										<tbody>\r
										<tr><td>";
				}
				 else 
				{
					if (isset($fields_array[$cat_id]))
					{
						$return .= '' . "<table cellspacing=\"0\" border=\"0\" width=\"100%\"><tr><td><fieldset class=\"resume\"><legend>" . $cat_name . "</legend>";
					}
				}
			}
			if (isset($fields_array[$cat_id]))
			{
				$return .= "<table class=\"general_table\">";
				$return .= $fields_array[$cat_id];
				$return .= "</table><br />";
			}
			if ($parent_id == "0" || (isset($fields_array[$n2])) && $n > 0 && $n3 > !0)
			{
				$return .= "</td></tr></tbody></table>";
			}
			 else 
			{
				if (isset($fields_array[$cat_id]))
				{
					$return .= "</fieldset></td></tr></table>";
				}
			}
			$i++;
			continue;
		}
		return $return;
	}

	public function getFieldsArray($row_fields, $row, $is_admin = "1", $files_extra = "") {

		$fields_array = array();
		foreach ($row_fields as $field)
		{
			$type = $field->type;
			$cat_id = $field->cat_id;
			$required = $field->required;
			$title = temizleslash($field->title);
			$name = $field->name;
			if ($required == "1")
			{
				$title .= "*";
			}
			$description = temizleslash($field->description);
			if ($description != "")
			{
				$title = lkntooltip($description, $title);
			}
			if ($type == "pre-defined")
			{
				if ($name == "resume_files")
				{
					if (isset($row->{'"id"'}))
					{
						$id = $row->id;
						$memberid = $row->memberid;
					}
					 else 
					{
						if ($is_admin == "1")
						{
							$id = "";
							$memberid = "";
						}
						 else 
						{
							$user = new lknUser();
							$id = "";
							$memberid = $user->getUserID();
						}
					}
					$f = lknJobsFunctions::get_resume_files($id, $memberid, $files_extra);
				}
				 else 
				{
					$f = lknJobsFields::getpredefinedfields($name, $row, $is_admin, $files_extra);
				}
			}
			 else 
			{
				if (isset($row->$name))
				{
					$value = $row->$name;
				}
				 else 
				{
					$value = "";
				}
				if ($type == "text" || $type == "emailaddress")
				{
					$f = lknCustomFields::gettextfieldhtml($field, $value);
				}
				 else 
				{
					if ($type == "textarea")
					{
						$f = lknCustomFields::gettextareahtml($field, $value);
					}
					 else 
					{
						if ($type == "select")
						{
							$f = lknCustomFields::getselectlisthtml($field, $value);
						}
						 else 
						{
							if ($type == "editor")
							{
								$f = lknCustomFields::geteditorareahtml($field, $value);
							}
							 else 
							{
								if ($type == "checkbox")
								{
									$f = lknCustomFields::getcheckboxhtml($field, $value);
								}
								 else 
								{
									if ($type == "multiselect")
									{
										$f = lknCustomFields::getselectlisthtml($field, $value, 1);
									}
									 else 
									{
										if ($type == "date")
										{
											$f = lknCustomFields::getdatehtml($field, $value);
										}
										 else 
										{
											if ($type == "multicheckbox")
											{
												$f = lknCustomFields::getcheckboxhtml($field, $value, 1);
											}
											 else 
											{
												if ($type == "radio")
												{
													$f = lknCustomFields::getradiobuttonhtml($field, $value);
												}
												 else 
												{
													if ($type == "integer")
													{
														$f = lknCustomFields::getintegerfieldhtml($field, $value);
													}
													 else 
													{
														$f = "";
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			if ($f != "")
			{
				continue;
			}
			$v = "<tr><td class=\"key\" width=\"100\" align=\"right\">";
			$v .= '' . $title . "</td><td>" . $f . "</td></tr>";
			if (isset($fields_array[$cat_id]))
			{
				$fields_array[$cat_id] .= $v;
				continue;
			}
			$fields_array[$cat_id] = $v;
			continue;
		}
		return $fields_array;
	}

	public function getFieldsArrayForSearch($row_fields, $is_admin = "2") {

		$fields_array = array();
		foreach ($row_fields as $field)
		{
			$searchable = $field->searchable;
			if ($searchable == "1")
			{
				continue;
			}
			$type = $field->type;
			$cat_id = $field->cat_id;
			$required = $field->required;
			$title = temizleslash($field->title);
			$name = $field->name;
			$description = temizleslash($field->search_tooltip);
			if ($description != "")
			{
				$title = lkntooltip($description, $title);
			}
			if ($type == "pre-defined")
			{
				if ($name == "image" || $name == "created" || $name == "update_date" || $name == "hits" || $name == "published")
				{
					$f = "";
				}
				 else 
				{
					$f = lknJobsFields::getpredefinedfields($name, "", $is_admin, "");
				}
			}
			 else 
			{
				$value = "";
				if ($type == "text" || $type == "emailaddress")
				{
					$f = lknCustomFields::gettextfieldhtml($field, $value);
				}
				 else 
				{
					if ($type == "textarea" || $type == "editor")
					{
						$f = lknCustomFields::gettextareahtml($field, $value);
					}
					 else 
					{
						if ($type == "select")
						{
							$f = lknCustomFields::getselectlisthtml($field, $value);
						}
						 else 
						{
							if ($type == "checkbox")
							{
								$f = lknCustomFields::getcheckboxhtml($field, $value);
							}
							 else 
							{
								if ($type == "multiselect")
								{
									$f = lknCustomFields::getselectlisthtml($field, $value, 1);
								}
								 else 
								{
									if ($type == "date")
									{
										$f = lknCustomFields::getdatehtml($field, $value);
									}
									 else 
									{
										if ($type == "multicheckbox")
										{
											$f = lknCustomFields::getcheckboxhtml($field, $value, 1);
										}
										 else 
										{
											if ($type == "radio")
											{
												$f = lknCustomFields::getradiobuttonhtml($field, $value);
											}
											 else 
											{
												if ($type == "integer")
												{
													$f = lknCustomFields::getintegerfieldhtml($field, $value);
												}
												 else 
												{
													$f = "";
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			if ($f != "")
			{
				continue;
			}
			$v = "<tr><td width=\"20%\" valign=\"top\" style=\"padding-left: 1.5em;align: right;\">";
			$v .= '' . "<strong>" . $title . "<strong></td><td nowrap=\"\" width=\"60%\" colspan=\"4\">" . $f . "</td></tr>";
			if (isset($fields_array[$cat_id]))
			{
				$fields_array[$cat_id] .= $v;
				continue;
			}
			$fields_array[$cat_id] = $v;
			continue;
		}
		return $fields_array;
	}

};

class lknJobsStats {


	public function __construct() {

		return;
	}

	public function getEmployerCount() {

		global $_db;
		$where = array();
		$where[] = "c.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT u.id";
		$sql .= "
 FROM #__jobs_companies AS c,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$sql .= "
 GROUP BY u.id";
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getFileCount() {

		global $_db;
		$where = array();
		$where[] = "f.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT f.id";
		$sql .= "
 FROM #__jobs_resume_files AS f,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getCompanyCount() {

		global $_db;
		$where = array();
		$where[] = "c.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT c.id";
		$sql .= "
 FROM #__jobs_companies AS c,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getJobCount() {

		global $_db;
		$where = array();
		$where[] = "j.cat_id=c.id";
		$where[] = "j.company_id=company.id";
		$where[] = "company.published='1'";
		$where[] = "company.memberid=u.id";
		$where[] = "c.published='1'";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT j.id";
		$sql .= "
 FROM #__jobs_jobs AS j,";
		$sql .= "
 #__jobs_categories AS c,";
		$sql .= "
 #__jobs_companies AS company,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getWorkerCount() {

		global $_db;
		$where = array();
		$where[] = "r.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT u.id";
		$sql .= "
 FROM #__jobs_resumes AS r,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$sql .= "
 GROUP BY u.id";
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function GetCoverLetterCount() {

		global $_db;
		$where = array();
		$where[] = "c.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT c.id";
		$sql .= "
 FROM #__jobs_cover_letters AS c,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getResumeCount() {

		global $_db;
		$where = array();
		$where[] = "r.memberid=u.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT r.id";
		$sql .= "
 FROM #__jobs_resumes AS r,";
		$sql .= "
 #__users AS u";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

	public function getApplicationCount() {

		global $_db;
		$where = array();
		$where[] = "a.job_id=j.id";
		$where[] = "a.resume_id=r.id";
		$where[] = "r.memberid=u.id";
		$where[] = "a.status=s.id";
		$where[] = "j.cat_id=c.id";
		$where[] = "j.company_id=company.id";
		$where = count($where) ? " WHERE " . implode(" AND ", $where) : "";
		$sql = "SELECT a.id";
		$sql .= "
 FROM #__jobs_applications AS a,";
		$sql .= "
 #__jobs_resumes AS r,";
		$sql .= "
 #__jobs_status AS s,";
		$sql .= "
 #__jobs_categories AS c,";
		$sql .= "
 #__jobs_companies AS company,";
		$sql .= "
 #__users AS u,";
		$sql .= "
 #__jobs_jobs AS j";
		$sql .= $where;
		$_db->query($sql);
		$_db->setQuery();
		return $_db->num_rows();
	}

};

class lknLicense {


	public function isValid() {

		global $option;
		global $_config;
		if ($option == "com_jobs")
		{
			$task = lkngetparamatre($_REQUEST, "task");
			if ($task == "show_config" || $task == "list_status" || $task == "new_status" || $task == "save_status" || $task == "apply_status")
			{
				return;
			}
			if ($task == "save_config")
			{
				lknLicense::dailycontrol();
				return;
			}
			$download_id = trim($_config["download_id"]);
			if ($download_id == "")
			{
				yonledir(LIVE_SITE . "/administrator/index2.php?option=com_jobs&task=show_config", "You need to validate your license. Please enter your DownloadID to validate");
				return;
			}
			lknLicense::dailycontrol();
		}
		return;
	}

	public function cleanDownloadID() {

		global $option;
		global $_config;
		$db = &lknDb::createinstance();
		$query = "UPDATE #__jobs_config SET value='' WHERE name='download_id'";
		$db->query($query);
		$db->setQuery($query);
		$_config["download_id"] = "";
		return;
	}

	public function dailyControl() {

		$db = &lknDb::createinstance();
		$sql = "SELECT AES_DECRYPT(last_control,'AfL087dKdaU7A5L8a2371A9b78f7SN853f92') AS last_control FROM #__jobs_license WHERE id='1'";
		$db->query($sql);
		$db->setQuery();
		$count = $db->num_rows();
		$error = $db->getErrorMessage();
		if ($count > 0 && ($error == ""))
		{
			$rows = $db->loadObject();
			$dayToday = date("Y-m-d H:i:s");
			$dayTime = $rows->last_control;
			if ($dayTime == "0")
			{
				yonledir(LIVE_SITE . "/administrator/index2.php?option=com_jobs&task=show_config", "Your Download ID is banned because of abusing. If you think this is a mistake , Please send an e-mail to us (info@instantphp.com)");
				return;
			}
			if ($dayTime == "" || $dayTime > $dayToday)
			{
				lknLicense::validatelicensedata();
			}
			$fullDays = lknLicense::get_time_difference($dayTime, $dayToday);
			$fullDay = $fullDays["days"];

			if ($fullDay > 2)
			{
				lknLicense::validatelicensedata();
				return;
			}
		}
		 else 
		{
			$db2 = &lknDb::createinstance();
			$sql = "INSERT INTO `#__jobs_license` (`id`,`last_control`) VALUES ('1','')";
			$db2->query($sql);
			$db2->setQuery();
			$e = $db2->getErrorMessage();
			if ($e == "")
			{
				lknLicense::dailycontrol();
				return;
			}
			yonledir(LIVE_SITE . "/administrator/index2.php?option=com_jobs&task=show_config", "License control is failed. If you think this is a mistake , Please send an e-mail to us (info@instantphp.com)");
		}
		return;
	}

	public function get_time_difference($start, $end) {

		$uts["start"] = strtotime($start);
		$uts["end"] = strtotime($end);
		if (($uts["start"] !== 0 - 1) && ($uts["end"] !== 0 - 1))
		{
			if ($uts["start"] <= $uts["end"])
			{
				$diff = $uts["end"] - $uts["start"];
				if ($days = intval(floor($diff / 86400)))
				{
					$diff = $diff % 86400;
				}
				if ($hours = intval(floor($diff / 3600)))
				{
					$diff = $diff % 3600;
				}
				if ($minutes = intval(floor($diff / 60)))
				{
					$diff = $diff % 60;
				}
				$diff = intval($diff);
				return array("days" => $days, "hours" => $hours, "minutes" => $minutes, "seconds" => $diff);
			}
			return "2";
		}
		return "2";
	}

	public function resetLastControlDate($cd = "") {

		$db_c = &lknDb::createinstance();
		if ($cd == "")
		{
			$sql = "UPDATE #__jobs_license SET last_control='' WHERE id='1'";
		}
		 else 
		{
			$sql = "UPDATE #__jobs_license SET last_control=AES_ENCRYPT('','AfL087dKdaU7A5L8a2371A9b78f7SN853f92') WHERE id='1'";
		}
		$db_c->query($sql);
		$db_c->setQuery($sql);
		return;
	}

	public function validatelicensedata() {

		global $mainframe;
		global $_config;
		if ($_POST)
		{
			$download_id = trim(lkngetparamatre($_POST, "config_download_id"));
		}
		 else 
		{
			$download_id = trim($_config["download_id"]);
		}
		if ($download_id == "")
		{
			yonledir(LIVE_SITE . "/administrator/index2.php?option=com_jobs&task=show_config", "You need to validate your license. Please enter your DownloadID to validate");
		}
		$domain = $_SERVER["HTTP_HOST"];
		$domain = explode(".", $domain);
		if ($domain[0] == "www")
		{
			$domain = str_replace("www.", "", $_SERVER["HTTP_HOST"]);
		}
		 else 
		{
			$domain = $_SERVER["HTTP_HOST"];
		}
		$postfields = array();
		$postfields["download_id"] = $download_id;
		$postfields["domain_name"] = $domain;
		$validstatus = false;
		/*if (function_exists("fsockopen"))
		{
			
			$validstatus = trim(lknLicense::validationconnect("http", "www.instantphp.com", $port = "80", $path = "/index.php?option=com_instant&task=validate&tmpl=component", $postfields));
			print_r($postfields); echo "<br />";
			print_r($validstatus."...s");
			echo "aki";
			die("");
		}*/
		//if (!$validstatus || $validstatus == "error" || !(function_exists("fsockopen")))
		//{
		
			if (!(function_exists("curl_init")))
			{			 
				$validstatus = false;
			}else 
			{

				
				$fields = "";
				$ch = curl_init();


				foreach ($postfields as $key => $value)
				{
					$fields .= '' . $key . "=" . urlencode($value) . "&";

					continue;
				}

				curl_setopt($ch, CURLOPT_URL, "http://www.instantphp.com/index.php?option=com_instant&task=validate&tmpl=component");
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_TIMEOUT, 10);
				curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim($fields, "& "));
				$output = curl_exec($ch);
				curl_close($ch);
				print_r($output);
				$validstatus = trim($output);
				print_r($validstatus);

				
			}
		//}
echo $validstatus."waaaa";
		if ($validstatus == 1)
		{
			$db_c = &lknDb::createinstance();
			$d = date("Y-m-d H:i:s");
			$sql = '' . "UPDATE #__jobs_license SET last_control=AES_ENCRYPT('" . $d . "','AfL087dKdaU7A5L8a2371A9b78f7SN853f92') WHERE id='1'";
			$db_c->query($sql);
			$db_c->setQuery();
			return;
		}

		
			echo $validstatus."----"; 
		$validstatus = explode("-", $validstatus);
		$validstatus = $validstatus[1];

		if ($validstatus == "2")
		{
			lknLicense::resetlastcontroldate();
			lknLicense::cleandownloadid();
			yonledir(LIVE_SITE . "/administrator/" . "index2.php?option=com_jobs&task=show_config", "DOWNLOAD ID DOES NOT EXIST. If you think that this is wrong message, Please e-mail us : info@instantphp.com or use our support forum");
			return;
		}
		if ($validstatus == "3")
		{
			lknLicense::resetlastcontroldate();
			lknLicense::cleandownloadid();
			yonledir(LIVE_SITE . "/administrator/" . "index2.php?option=com_jobs&task=show_config", "DOWNLOAD IS IS USED ON ANOTHER DOMAIN or DOMAIN IS NOT CONFIGURATED YET. You can change it with <a href=\"http://www.instantphp.com/index.php?option=com_instant\" target=\"_blank\">CLICKING HERE</a>. If you think that this is wrong, Please e-mail us : info@instantphp.com or use our support forum");
			return;
		}
		if ($validstatus == "4")
		{

			lknLicense::resetlastcontroldate("0");
			lknLicense::cleandownloadid();
			yonledir(LIVE_SITE . "/administrator/" . "index2.php?option=com_jobs&task=show_config", "DOWNLOAD IS IS USED ON ANOTHER DOMAIN or DOMAIN IS NOT CONFIGURATED YET. You can change it with <a href=\"http://www.instantphp.com/index.php?option=com_instant\" target=\"_blank\">CLICKING HERE</a>. If you think that this is wrong, Please e-mail us : info@instantphp.com or use our support forum");
			return;
		}
		lknLicense::resetlastcontroldate();
		lknLicense::cleandownloadid();
		yonledir(LIVE_SITE . "/administrator/" . "index2.php?option=com_jobs&task=show_config", "We couldn't validate your key because your hosting server doesn't have neither the CURL library nor the fsockopen functions or they may exist but don't function properly, please contact your host admin to fix them or contact us <a href=\"http://www.instantphp.com/contact.html\">here</a> Or at this email address : info@instantphp.com" . $validstatus);
		return;
	}

	public function validationconnect($type, $host, $port = "80", $path = "/", $data = array()) {

		global $mainframe;
		$_err = "lib sockets::" . "validationconnect" . "(): ";
		$str = "";
		$d = array();

				
		switch ($type)
		{
			case "http":
			{
				$type = "";
			}
			case "ssl":
			{
				continue;
			}
			default:
			{
				die($_err . "bad \$type");			
			}
		}

			if ($type)
				{
					continue;
				}
				if (!(empty($data)))
				{
					foreach ($data as $k => $v)
					{
						$strarr[] = urlencode($k) . "=" . urlencode($v);
						continue;
					}
				}
				$str = implode("&", $strarr);
				$result = "";
				$fp = fsockopen('ssl://'.$host, $port, $errno, $errstr, 30);

				if (!$fp)
				{
					$result = "error";
				}
				 else 
				{
					fputs($fp, "POST " .$path. " HTTP/1.1\r");
					fputs($fp,  "Host: " . $host . "\r" . "");
					fputs( $fp, "User-Agent: AGENT/0.007\r\n" ); 
					fputs($fp, "Content-type: application/x-www-form-urlencoded\r");
					fputs($fp, "Content-length: " . strlen($str) . "\r\n");
					fputs($fp, $str . "\r\n\r\n");
					while (!(feof($fp)))
					{
						print_r(fgets($fp, 4096));
						$d[] = fgets($fp, 4096);
						continue;
					}
					print_r( $d);
					fclose($fp);
					$result = $d[count($d) - 1];
				}
				return $result;
	}

};

class lknJobsPlugins {


	public function importPlugin($type, $plugin = null) {

		$result = false;
		$plugins = lknJobsPlugins::_load();
		$total = count($plugins);
		$i = 0;
		while ($total > $i)
		{
			if (($plugins[$i]->type == $type) && ($plugins[$i]->name_id == $plugin || $plugin === null))
			{
				lknJobsPlugins::_import($plugins[$i]);
				$result = true;
			}
			$i++;
			continue;
		}
		return $result;
	}

	public function _import(&$plugin) {

		static $paths = null;
		if (!$paths)
		{
			$paths = array();
		}
		global $_lknBaseFramework;
		$result = false;
		$plugin->name_id = preg_replace("/[^A-Z0-9_\\.-]/i", "", $plugin->name_id);
		$plugin->type = preg_replace("/[^A-Z0-9_\\.-]/i", "", $plugin->type);
		$joomlaVersion = $_lknBaseFramework->get("_joomlaVersion");
		if ($joomlaVersion == "JOOMLA15")
		{
			$plgPath = JOOMLA_ROOT . LKN_DS . "plugins" . LKN_DS . "jobs";
		}
		 else 
		{
			$plgPath = JOOMLA_ROOT . LKN_DS . "mambots" . LKN_DS . "jobs";
		}
		$path = $plgPath . LKN_DS . $plugin->type . LKN_DS . $plugin->name_id . LKN_DS . "front" . LKN_DS . $plugin->name_id . ".class.php";
		if (!(isset($paths[$path])))
		{
			if (file_exists($path))
			{
				require_once $path;
				$paths[$path] = true;
				$className = "lknJobs" . ucfirst($plugin->name_id) . "Front";
				if (class_exists($className))
				{
					$params = $plugin->params;
					$params = explode(";", $params);
					$userParams = array();
					foreach ($params as $key => $value)
					{
						$param = explode("=", $value);
						if ((isset($param[0])) && ($param[0] != ""))
						{
							if (isset($param[1]))
							{
								$userParams[$param[0]] = $param[1];
							}
							 else 
							{
								$userParams[$param[0]] = "";
							}
						}
						$param = "";
						continue;
					}
					$instance = new $className($userParams);
					$_lknBaseFramework->setPlugin($plugin->name_id, $instance);
					return;
				}
			}
			 else 
			{
				$paths[$path] = false;
			}
		}
		return;
	}

	public function _load() {

		static $plugins = null;
		if (isset($plugins))
		{
			return $plugins;
		}
		$db = &lknDb::createinstance();
		$query = "SELECT name_id, params,type FROM #__jobs_plugins WHERE enabled='1' ORDER BY type, position ASC";
		$db->query($query);
		$db->setQuery();
		$error = $db->getErrorMessage();
		if ($error != "")
		{
			trigger_error("Error loading Plugins: " . $error);
			return false;
		}
		$plugins = $db->loadObjectList();
		return $plugins;
	}

	public function triggerEvent($event, $params = "") {

		global $_lknBaseFramework;
		$plugins = $_lknBaseFramework->get("_plugins");
		$count = count($plugins);
		if ($count > 0)
		{
			foreach ($plugins as $plugin)
			{
				if (!(method_exists($plugin, $event)))
				{
					continue;
				}
				return $plugin->$event($params);
			}
		}
		return;
	}

};
