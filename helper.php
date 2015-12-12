<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_bvinfo
 *
 * @copyright   Copyright (C) 2015 Yair Lahav, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined("_JEXEC") or die("Restricted access");

class ModBvinfoHelper
{
    public static function getVisitorInfo() {

        JPluginHelper::importPlugin('system');
        $dispatcher = JDispatcher::getInstance();
        $visitorInfo = $dispatcher->trigger( 'onGetVisitorInfo' );
        return $visitorInfo[0];
    }
}
