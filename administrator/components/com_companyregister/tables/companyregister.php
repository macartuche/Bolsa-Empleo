<?php
/**
 * Joomla! 1.5 component companyregister
 *
 * @version $Id: companyregister.php 2011-04-06 09:54:54 svn $
 * @author Oscar Llivigañay
 * @package Joomla
 * @subpackage companyregister
 * @license GNU/GPL
 *
 * Empresas registradas de la bolsa de empleo-UTPL
 *
 * This component file was created using the Joomla Component Creator by Not Web Design
 * http://www.notwebdesign.com/joomla_component_creator/
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include library dependencies
jimport('joomla.filter.input');

/**
* Table class
*
* @package          Joomla
* @subpackage		companyregister
*/
class TableItem extends JTable {

	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;


    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__companyregister', 'id', $db);
	}

	/**
	 * Overloaded check method to ensure data integrity
	 *
	 * @access public
	 * @return boolean True on success
	 */
	function check() {
		return true;
	}

}
?>