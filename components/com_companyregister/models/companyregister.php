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

jimport('joomla.application.component.model');

/**
 * companyregister Component companyregister Model
 *
 * @author      notwebdesign
 * @package		Joomla
 * @subpackage	companyregister
 * @since 1.5
 */
class CompanyregisterModelCompanyregister extends JModel {
    /**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
    }
}
?>