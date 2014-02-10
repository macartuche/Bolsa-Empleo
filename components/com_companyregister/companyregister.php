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

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Initialize the controller
$controller = new CompanyregisterController();
$controller->execute( null );

// Redirect if set by the controller
$controller->redirect();
?>