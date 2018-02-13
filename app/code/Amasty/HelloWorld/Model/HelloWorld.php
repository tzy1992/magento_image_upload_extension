<?php
/**
 * Copyright © 2015 Amasty. All rights reserved.
 */

namespace Amasty\HelloWorld\Model;

class HelloWorld extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Amasty\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}
