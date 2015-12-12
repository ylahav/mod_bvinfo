<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_bvinfo
 *
 * @copyright   Copyright (C) 2015 Yair Lahav, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined("_JEXEC") or die("Restricted access");

$doc = JFactory::getDocument();
$doc->addStyleSheet( JURI::base() . "/modules/mod_bvinfo/css/style.css");
require_once dirname(__FILE__) . '/helper.php';
$visitorInfo =  ModBvinfoHelper::getVisitorInfo();

require JModuleHelper::getLayoutPath('mod_bvinfo', $params->get('layout', 'default'));
