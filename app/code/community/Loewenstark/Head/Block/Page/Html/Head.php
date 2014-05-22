<?php

class Loewenstark_Head_Block_Page_Html_Head
extends Mage_Page_Block_Html_Head
{
    protected function &_prepareStaticAndSkinElements($format, array $staticItems, array $skinItems, $mergeCallback = null)
    {
        $version = Mage::getStoreConfig("design/head/meta_version_tag");
        $format = sprintf($format, "%s?v{$version}", "%s");
        return parent::_prepareStaticAndSkinElements($format, $staticItems, $skinItems, $mergeCallback);
    }
    
    /**
     * remove element by Type
     * 
     * @param string $type
     * @return \Loewenstark_Head_Block_Page_Html_Head
     */
    public function removeByType($type)
    {
        foreach($this->_data as $key=>$value)
        {
            if(strstr($key, $type.'/'))
            {
                unset($this->_data[$key]);
            }
        }
        return $this;
    }
}