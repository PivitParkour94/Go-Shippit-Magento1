<?php
/**
 * Shippit Pty Ltd
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the terms
 * that is available through the world-wide-web at this URL:
 * http://www.shippit.com/terms
 *
 * @category   Shippit
 * @copyright  Copyright (c) Shippit Pty Ltd (http://www.shippit.com)
 * @author     Matthew Muscat <matthew@mamis.com.au>
 * @license    http://www.shippit.com/terms
 */

class Shippit_Shippit_Block_Adminhtml_System_Config_Form_Field_Renderer_Shippit_ServiceClass extends Mage_Core_Block_Abstract
{
    protected function _toHtml()
    {
        $column = $this->getColumn();
        $options = Mage::getModel('shippit/system_config_source_shippit_shipping_methods')->toOptionArray();

        foreach ($options as $option) {
            $optionsHtml[] = '<option value="' . $option['value'] . '">' . $option['label'] . "</option>";
        }

        return '<select class="'.$column['class'].'" style="'.$column['style'].'" name="'.$this->getInputName().'">'.implode('', $optionsHtml).'</select>';
    }
}
