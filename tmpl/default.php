<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_bvinfo
 *
 * @copyright   Copyright (C) 2015 Yair Lahav, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined("_JEXEC") or die("Restricted access");
?>

    <div class="bvinfo-container">
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_IP'); ?>:
            </div>
            <div class="bvinfo-value">
                <?php 
                    if (!empty( $visitorInfo['ip'] )) {
                        echo $visitorInfo['ip'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_CITY'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['city'] )) {
                        echo $visitorInfo['city'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_REGION'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['region'] )) {
                        echo $visitorInfo['region'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_AREACODE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['areaCode'] )) {
                        echo $visitorInfo['areaCode'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_DMACODE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['dmaCode'] )) {
                        echo $visitorInfo['dmaCode'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_COUNTRYCODE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['countryCode'] )) {
                        echo $visitorInfo['countryCode'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_COUNTRYNAME'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['countryName'] )) {
                        echo $visitorInfo['countryName'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_CONTINENTCODE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['continentCode'] )) {
                        echo $visitorInfo['continentCode'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_LATITUDE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['latitude'] )) {
                        echo $visitorInfo['latitude'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_LONGTITUDE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['longitude'] )) {
                        echo $visitorInfo['longitude'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_CURRENCYCODE'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['currencyCode'] )) {
                        echo $visitorInfo['currencyCode'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_CURRENCYSYMBOL'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['currencySymbol'] )) {
                        echo $visitorInfo['currencySymbol'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
        <div class="bvinfo-item">
            <div class="bvinfo-label">
                <?php echo JText::_('MOD_BVINFO_CURRENCYCONVERTER'); ?>
            </div>
            <div class="bvinfo-value">
                <?php
                    if (!empty( $visitorInfo['currencyConverter'] )) {
                        echo $visitorInfo['currencyConverter'];
                    } else {
                        echo JText::_('MOD_BVINFO_NO_DATA');
                    }
                ?>
            </div>
        </div>
    </div>
