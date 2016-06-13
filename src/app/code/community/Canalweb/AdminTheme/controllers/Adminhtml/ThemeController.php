<?php
/**
 * @category    canalweb
 * @package     canalweb_AdminTheme
 * @version     1.4.3
 * @copyright   Copyright (c) 2015 canalwebShop (https://www.canalwebshop.net)
 */
class Canalweb_AdminTheme_Adminhtml_ThemeController extends Mage_Adminhtml_Controller_Action
{
    public function changeAction()
    {
        $theme = $this->getRequest()->getParam('theme');
        if ($theme) {
            Mage::getConfig()->saveConfig('canalweb_admintheme/config/theme', $theme);
            Mage::app()->getCacheInstance()->cleanType('config');
        }
        $this->_redirectReferer();
    }
}
