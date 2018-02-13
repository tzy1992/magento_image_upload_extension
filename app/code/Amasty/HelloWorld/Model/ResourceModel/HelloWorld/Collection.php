<?php
/**
 * Copyright © 2015 Amasty. All rights reserved.
 */

namespace Amasty\HelloWorld\Model\ResourceModel\HelloWorld;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Amasty\HelloWorld\Model\HelloWorld', 'Amasty\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}
