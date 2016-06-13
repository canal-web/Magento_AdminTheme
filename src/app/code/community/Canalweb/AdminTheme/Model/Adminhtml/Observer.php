<?php
/**
 * @category    canalweb
 * @package     canalweb_AdminTheme
 * @version     1.4.3
 * @copyright   Copyright (c) 2015 canalwebShop (https://www.canalwebshop.net)
 */
class Canalweb_AdminTheme_Model_Adminhtml_Observer
{
    public function setTheme()
    {
        $theme = Mage::getStoreConfig('canalweb_admintheme/config/theme');
        Mage::getDesign()->setTheme($theme);
        foreach (array('layout', 'template', 'skin', 'locale') as $type) {
            Mage::getDesign()->setTheme($type, $theme);
        }
    }
}
