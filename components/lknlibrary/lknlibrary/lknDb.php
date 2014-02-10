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



/**

 * lknDb basit bir iletişim katmanı

 */ 

class lknDb {

	private $result; 		// sorgu sonucu

	private $result_data;

	private $db;			// MySQL kaynağı

	private $rec_pointer;	// kayıt pointeri. namı diğer cursor :D

		

	private $prefix;

	private $prefix_mask;

	private $sql;

	

	private $limit_start;

	private $limit_end;

	private $errorNum		;



	private $errorMsg		= '';

	

	

    

	/**

	 * class için gerekli değişkenler

	 *

	 */

	function __construct(){

			global $_lknBaseFramework;

			$this->db   	=& $_lknBaseFramework->get("_db");

            $this->prefix   = $_lknBaseFramework->get("_prefix");

            $this->prefix_mask	= $_lknBaseFramework->get("_prefix_mask");

           	

	}

	

	/**

	 * kullanılan kaynağı serbest bırak

	 *

	 */

	function __destruct(){

	 	if(is_resource($this->result))

			@mysql_free_result($this);

	}



	// --------------------------------------------------------------------

	

	/**

	 * sorgu class içerisine al

	 */
	function query($sql){
		
		$sql = $this->tableName($sql);
		$this->sql=$sql;
	}
	/**

	 * sorguyu çalıştır

	 *

	 */

	function setQuery() {

//		echo $this->sql;

		$this->result = mysql_query($this->sql, $this->db);

		

		if (!$this->result)

		{

			$this->errorNum = mysql_errno( $this->db );

			$this->errorMsg = mysql_error( $this->db )." SQL=" . $this->sql;

			

			return false;

		}

			 

		return $this->result;

	}

	

	

	/**

	 * en son işlemde kaç kayıt geri döndü. (yalnızca select)

	 *

	 * @return integer

	 */

	function num_rows(){

		return mysql_num_rows($this->result);

	}

	

	/**

	 * @return int önceki işlemde dönen kayıt sayısı (insert,update,delete)

	 */

	function getAffectedRows() {

		return mysql_affected_rows( $this->db );

	}

	

	

	/**

	 * tablo adını dönderir. #__ ---->jos değişimimi yapar

	 *

	 * @param string $table

	 * @return string

	 */

	function tableName($table)

	{

		return str_replace($this->prefix_mask, $this->prefix, $table);

	}

	

	/**

	* Sorgu sonucunu dizi olarak al

	*

	* @param  string

	* @return array

	*/

	function fetch_array()

	{

		return @mysql_fetch_assoc($this->result);

	}

	

	function loadObjectList($key='' ) {

		$array = array();
		
		
		while ($row = mysql_fetch_object( $this->result )) {

			if ($key) {

				$array[$row->$key] = $row;

			} else {

				$array[] = $row;

			}

		}
		

		return $array;

	}

	

	function loadObject($key='') {

		$array = array();

		while ($row = mysql_fetch_object( $this->result )) {

			if ($key) {

				$array[$row->$key] = $row;

			} else {

				$array[] = $row;

			}

		}

		return $array[0];

	}

	

	

	function CreateInsertSql ($data,$table) {

	

		$tabname = $this->tableName($table);

		$cols=array();

		$values=array();

		foreach ($data as $field=>$value) {

				$cols[]="$field";

				$value=$this->_escape($value);

				$values[]="'$value'";

		}

		

		$columns = implode(',', $cols);

		$datafields = implode(',',$values);

		

		return "INSERT INTO $tabname ($columns) VALUES ($datafields)";

	}

	

	/**

	 * update işlemi için sorgu oluşturur

	 *

	 * @param array $data 

	 * @param string $table

	 * @param string $where : fieldAdi='deger' şeklinde olmalı

	 * @return string

	 */

	function CreateUpdateSql($data,$table,$where)

	{

		$tabname = $this->tableName($table);

		$sql = "UPDATE $tabname SET ";

		$items=array();

		foreach ($data as $key=>$value)

		{

			$value=$this->_escape($value);

			$items[]= $key."='".$value."'";

			

		}

		

		$sql .= implode (', ', $items);		

		if (isset($where)) {

			$sql.=" WHERE " . $where;

		}

		

		return $sql;

	}

	



	/**

	 * en son eklenen verinin id'sini dönderirir

	 */

	function get_insert_id(){

		return mysql_insert_id($this->db);

	}

	

	# Escape the given string

	function _escape($str){

	    if(!is_array($str)){



			    return mysql_escape_string($str);

			

		}else {

            return $str;

		}

	}

	

	/**

	 * nesne listesi

	 *

	 * @return array

	 */

	function get_object_list(){

		

		if (isset($this->result_data) && count($this->result_data) > 0){

			return $this->result_data;

		}

		

		if($this->result && (mysql_num_rows($this->result) > 0 )){

		

			while ($row = mysql_fetch_object($this->result)) {

		

			   $this->result_data[] = $row;

			}

			

			return $this->result_data;

		} else {

			$this->result_data = array();

			return $this->result_data;

		}

	} 



	

	/**

	 * veri array'ında ilk kayıt

	 *

	 */

	function getFistRecord(){

		$data = $this->get_object_list();

		if (!isset($data)) {

			$data=$this->fetch_array();

		}

		if(count($data) > 0){

			return $data[0];

		} else 

			return null;

	}

	

	/**

	* nulldate dönderir date/time

	*

	* @param  string  $dateTime  'datetime', 'date', 'time'

	* @return string  Quoted null/zero date string

	*/

	function getNullDate( $dateTime = 'datetime' ) {

		if ( $dateTime == 'datetime' ) {

			return '0000-00-00 00:00:00';

		} elseif ( $dateTime == 'date' ) {

			return '0000-00-00';

		} else {

			return '00:00:00';

		}

	}

	

	function createInstance()

	{

		return new lknDb();

	}

	

	/**

	 * start parametresini alıp. sql sorguların sonunda Limit 0, 5 gibi ek yapar

	 *

	 * @return string

	 */

	function getLimit()

	{

		global $_config;

			

		$start=lknGetParamatre($_REQUEST,'start');

		$start=(int)$start;

	

		$start=(int)$start;	

		

		if ($start=='') {

			$start=1;

		}

		

		$sayfadakiKayit=(int)$_config['recordPerPage'];

		$limitStart=($start-1)*$sayfadakiKayit;

		$limitEnd=$sayfadakiKayit;

		

		$this->limit_start=$limitStart+1;

		$this->limit_end=$limitStart+$limitEnd;

		

		$sql="\n LIMIT $limitStart, $limitEnd";

		

		return $sql;

		

	}

	

	/**

	* class içerisindeki herhangi bir değeri dönderir

	*

	* @param  string  $var  class değişken adı

	* @return mixed

	*/

	function get( $var ) {

		if ( isset( $this->$var ) ) {

			return $this->$var;

		} else {

			return null;

		}

	}

	/**

	 * yollanan sql sorgusuna ait ilk veriyi dönderir

	 *

	 * @param string $sql 

	 * @return array

	 */

	function loadTable($sql){

		$_db=&lknDb::createInstance();

			$_db->query($sql);

			$_db->setQuery();

			

		return $_db->loadObject();

	}

	

	function getErrorMessage(){

		if (isset($this->errorNum)) {

			return $this->errorNum . ' - '. $this->errorMsg;  

		}else {

			return '';

		}

	}

	

	function getErrorNumber(){

		if (isset($this->errorNum)) {

			return $this->errorNum;  

		}else {

			return '';

		}

	}

	

	function tableExist($tbl){

		$sql="DESCRIBE $tbl";

		

		$this->query($sql);

		$this->setQuery();

		if (!$this->result) {

			return '0';

		}else {

			return '1';

		}

		

	}

	

	/**

	 * array A list of all the tables in the database

	 *

	 * @access	public

	 * @return object

	 */

	function getTableList($numinarray=0)

	{

		$this->query( 'SHOW TABLES' );

		$this->setQuery();

		$count=$this->num_rows();

		if ($count==0) {

			return NULL;

		}else {

			$array=array();

			while ($row = mysql_fetch_row( $this->result )) {

				$array[] = $row[$numinarray];

			}

			mysql_free_result( $this->result );

			return $array;

		

		}		

	}

	

	/**

	 * Retrieves information about the given tables

	 *

	 * @access	public

	 * @param 	string 			A table name 

	 * @param	boolean			Only return field types, default true

	 * @return	array 			An array of fields by table

	 */

	function getTableFields( $table, $typeonly = true )

	{

		settype($tables, 'array'); //force to array

		$result = array();



	

			$this->query( 'SHOW FIELDS FROM ' . $table );

			$this->setQuery();

			$fields = $this->loadObjectList();



			if($typeonly)

			{

				foreach ($fields as $field) {

					$result[$field->Field] = preg_replace("/[(0-9)]/",'', $field->Type );

				}

			}

			else

			{

				foreach ($fields as $field) {

					$result[$field->Field] = $field;

				}

			}

		



		return $result;

	}

	

	/**

	 * Compacts the ordering sequence of the selected records

	 *

	 * @access public

	 * @param string Additional where query to limit ordering to a particular subset of records

	 */

	function reorder( $table, $table_key,$where='' )

	{

		$db=&lknDb::createInstance();

		$table=$db->tableName($table);

		if (!in_array( 'ordering', array_keys($db->getTableFields($table)) ))

		{

			trigger_error($table.' does not support ordering');

			return false;

		}

		



		$query = 'SELECT '.$table_key.', ordering'

		. ' FROM '. $table

		. ' WHERE ordering >= 0' . ( $where ? ' AND '. $where : '' )

		. ' ORDER BY ordering,' . $table_key

		;

		$db->query( $query );

		$db->setQuery();

		if (!($orders = $db->loadObjectList()))

		{

			trigger_error($db->getErrorMessage());

			return false;

		}

		

		// compact the ordering numbers

		for ($i=0, $n=count( $orders ); $i < $n; $i++)

		{

			if ($orders[$i]->ordering >= 0)

			{

				if ($orders[$i]->ordering != $i+1)

				{

					$orders[$i]->ordering = $i+1;

					$query = 'UPDATE '.$table

							. ' SET ordering = '. (int) $orders[$i]->ordering

					. ' WHERE '. $table_key .' = '. $db->_escape($orders[$i]->$table_key)

					;

					$db->query($query);

					$db->setQuery();

				}

			}

		}



		return true;

	}

	

}



function lknGetCount($sql)

{

	$_db=&lknDb::createInstance();

	

	$_db->query($sql);

	$_db->setQuery();

	

	return $_db->num_rows();

}

?>