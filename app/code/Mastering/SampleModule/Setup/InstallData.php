<?php

namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * {@inheritDoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample'),
            [
                'name' => 'Dota2 Item',
                'description' => 'Best game',
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample'),
            [
                'name' => 'LOL Item',
                'description' => 'Bad game',
            ]
        );

        $setup->endSetup();
    }
}
