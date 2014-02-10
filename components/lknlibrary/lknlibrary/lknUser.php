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

class lknUser {
	private $name	  = null;
	private $username = null;
	private $id		= null;
	private $email	= null;
	private $usertype = null;
	private $registerDate=null;
	private $lastvisitDate=null;
	private $gid=null;

	function __construct()
	{
		global $_lknBaseFramework;
		
			$my =$_lknBaseFramework->get('_my');
			//print_r($my);
			$this->id = $my->id;
			$this->email = $my->email;
			$this->name = $my->name;
			$this->username = $my->username;
			$this->usertype = $my->usertype;
			$this->registerDate=$my->registerDate;
			$this->lastvisitDate=$my->lastvisitDate;
			$this->gid=$my->gid;
			
	}
	
	/**
	 * kullanıcının gerçek adını dönderir
	 *
	 * @return string
	 */
	function getName()
	{
		return $this->name;
	}
	
	/**
	 * en son ziyaret tarihi
	 *
	 * @return date
	 */
	function getLastVisitDate()
	{
		return $this->lastvisitDate;
	}
	
	/**
	 * kayıt tarihi
	 *
	 * @return date
	 */
	function getregisterDate()
	{
		return $this->registerDate;
	}

	/**
	 * kullanıcı adı
	 *
	 * @return string
	 */
	function getUserName()
	{
		return $this->username;
	}
	
	/**
	 * kullanıcı id'si
	 *
	 * @return integer
	 */
	function getUserID()
	{
		return $this->id;
	}
	
	/**
	 * e-mail adresi
	 *
	 * @return string
	 */
	function getEmail()
	{
		return $this->email;
	}
	
	/**
	 * kullanıcı türü
	 *
	 * @return string
	 */
	function getUserType()
	{
		return $this->usertype;
	}
	
	/**
	 * kullanıcı hangi group'a ait
	 *
	 * @return integer
	 */
	function getUserGroupID(){
		global $_lknBaseFramework;
		
		$v=$_lknBaseFramework->get('_joomlaVersion');

		if ($v=='JOOMLA15') {
			return $this->gid;
		}elseif ($v=='JOOMLA10'){
			$db=&lknDb::createInstance();
			$id=$this->id;
			$sql="SELECT gid FROM #__users";
			$sql.="\n WHERE id='$id'";
			$db->query($sql);
			$db->setQuery();
			$rows=$db->loadObjectList();
			if (count($rows)>0) {
				return $rows[0]->gid;
			}else {
				return '0';
			}
		}
		
	}
	
	function isSuperAdministrator(){
		$user=new lknUser();
		$userType=$user->getUserType();
		if ($userType=='Super Administrator') {
			return '1';
		}else {
			return '0';
		}
	}
	
}

class lknUserGroups
{
	private $list=array();
	private $children=array();
	
	function __construct()
	{		
		global $_lknBaseFramework;
		
		$v=$_lknBaseFramework->get('_joomlaVersion');
		
		$_db=&lknDb::createInstance();
		$list=array();
		
		if ($v=='JOOMLA15') {
			$sql="SELECT g.id AS id,g.name AS name,g.parent_id AS parent_id FROM #__core_acl_aro_groups AS g";
			$sql.="\n ORDER BY g.parent_id";			
		}elseif ($v=='JOOMLA10'){
			$sql="SELECT g.group_id AS id,g.name AS name,g.parent_id AS parent_id FROM #__core_acl_aro_groups AS g";
			$sql.="\n ORDER BY g.parent_id";			
		}
		
		//echo $sql;
		
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
		$this->children=$children;
		
		$this->list=$this->TreeRecurse( 28, '', array(), $children, max( 0, 10 ) );

	}
	
	function TreeRecurse( $id, $indent, $list, $children, $maxlevel=9999,$level=0, $type=1 ) {

	if (@$children[$id] && $level <= $maxlevel) {
		foreach ($children[$id] as $v) {
			$id = $v->id;
			

			if ( $type ) {
				$pre 	= '<sup>L</sup>&nbsp;';
				$spacer = '.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			} else {
				$pre 	= '- ';
				$spacer = '&nbsp;&nbsp;';
			}

			if ( $v->parent_id == 0 ) {
				$txt 	= $v->name;
			} else {
				$txt 	= $pre . $v->name;
			}
			$pt = $v->parent_id;
			$list[$id] = $v;
			$list[$id]->name = "$indent$txt";

			$list = $this->TreeRecurse( $id, $indent . $spacer, $list, $children, $maxlevel, $level+1, $type );
		}
	}
		return $list;
	}
	
	/**
	 * kategori listesini sıralı olarak dönderir. $data[$kat_id]=$kat_title
	 *
	 * @return array
	 */
	
	function getData()
	{
		$data=array();
		foreach ($this->list as $list)
		{
			$id=$list->id;
			$title=$list->name;
			$data[$id]=$title;
		}
		
		return $data;
	}	
	
	function getSelectList($selectValue='',$name='user_groups[]',$extra="multiple",$fd=_lkn_unregistered_unlogged_in){
		$data=array();
		$data[0]=$fd;
		
		foreach ($this->list as $list)
		{
			$id=$list->id;
			$title=$list->name;
			$data[$id]=$title;			
		}
			
		return lknhtmlMaker::selectList($data,$name,$selectValue,$extra,0);
	}
	
	function get($arg){
		if(isset($this->$arg))
			return $this->$arg;
		else
			return  '';
	}

}
   
?>