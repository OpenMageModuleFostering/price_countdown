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
class Apptha_Timer_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_ENABLED       = 'timer/general/enabled';
	
	const XML_PATH_TIMER_HEADING = 'timer/general/timer_heading';
	
	const XML_PATH_TIMER_CAPTION = 'timer/general/timer_catption';
	
	const XML_PATH_TITLE 		 = 'timer/general/title';
	
	public function conf($code, $store = null){
		return Mage::getStoreConfig($code, $store);
	}
	
	public function isEnabled($store = null){
		return $this->conf(self::XML_PATH_ENABLED, $store);
	}
	
	public function isTimerHeading(){
		return $this->conf(self::XML_PATH_TIMER_HEADING, $store);
	}
	
	public function isTimerCaption(){
		return $this->conf(self::XML_PATH_TIMER_CAPTION, $store);
	}
	
	public function getTimerTitle(){
		return $this->conf(self::XML_PATH_TITLE, $store);
	}
	
	public function isShowTitle(){
		if($this->isTimerHeading() == 'showall' || $this->isTimerHeading() == 'viewpage'){
			if($this->isTimerHeading() != 'hideall'){
				if($this->getTimerTitle())
					return true;
			}
		}
		return false;
	}
	
	public function isShowCaption(){
		if ($this->isTimerCaption() == 'showall' || $this->isTimerCaption() == 'viewpage') {
			if($this->isTimerCaption() != 'hideall'){
				return true;
			}
		}
		return false;
	}
	
}