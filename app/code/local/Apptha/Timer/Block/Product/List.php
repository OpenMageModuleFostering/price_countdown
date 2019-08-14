<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_PriceCount
 * @version     0.1.4
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
class Apptha_Timer_Block_Product_List extends Mage_Catalog_Block_Product_List
{
	public function getPriceCountDown($_product){
		if(Mage::helper('timer')->isEnabled()){
			if($_product->getPrice() > $_product->getSpecialPrice()){
				if($_product->getSpecialPrice() != 0 || $_product->getSpecialPrice()){
					return true;
				}
			}
		}
		return false;
	}
}
