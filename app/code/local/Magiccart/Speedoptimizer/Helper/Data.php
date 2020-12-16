<?php

class Magiccart_Speedoptimizer_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @var array
     */
    protected $configModule;

    public function getConfig($cfg='')
    {
        return Mage::getStoreConfig($cfg);
    }

    public function getConfigModule($cfg='', $value=null)
    {
        if(!$this->configModule){
            $this->configModule = $this->getConfig('magiccart_speedoptimizer');
        }
        $values = $this->configModule;
        if( !$cfg ) return $values;
        $config  = explode('/', $cfg);
        $end     = count($config) - 1;
        foreach ($config as $key => $vl) {
            if( isset($values[$vl]) ){
                if( $key == $end ) {
                    $value = $values[$vl];
                }else {
                    $values = $values[$vl];
                }
            } 

        }
        return $value;
    }
}