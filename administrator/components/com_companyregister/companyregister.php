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

/*
 * Define constants for all pages
 */
define( 'COM_COMPANYREGISTER_DIR', 'images'.DS.'companyregister'.DS );
define( 'COM_COMPANYREGISTER_BASE', JPATH_ROOT.DS.COM_COMPANYREGISTER_DIR );
define( 'COM_COMPANYREGISTER_BASEURL', JURI::root().str_replace( DS, '/', COM_COMPANYREGISTER_DIR ));

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Require the base controller
require_once JPATH_COMPONENT.DS.'helpers'.DS.'helper.php';

// Initialize the controller
$controller = new CompanyregisterController( );

// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>