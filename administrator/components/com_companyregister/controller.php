<?php
/**
 * Joomla! 1.5 component companyregister
 *
 * @version $Id: controller.php 2011-04-06 09:54:54 svn $
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

jimport( 'joomla.application.component.controller' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'helper.php' );

/**
 * companyregister Controller
 *
 * @package Joomla
 * @subpackage companyregister
 */
class CompanyregisterController extends JController {
    /**
     * Constructor
     * @access private
     * @subpackage companyregister
     */
    function __construct() {
        //Get View
        if(JRequest::getCmd('view') == '') {
            JRequest::setVar('view', 'default');
        }
        $this->item_type = 'Default';
        parent::__construct();
    }
}
?>