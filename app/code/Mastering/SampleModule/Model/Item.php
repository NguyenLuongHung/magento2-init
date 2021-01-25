<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected $_eventPrefix = 'mastering_sample_item';

    /**
     * {@inheritDoc}
     */
    protected function _construct()
    {
        $this->_init(\Mastering\SampleModule\Model\ResourceModel\Item::class);
    }
}