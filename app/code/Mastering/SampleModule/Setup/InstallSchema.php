<?php

namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritDoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_sample')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 
            'nullable' => false, 
            'primary'=> true,],
            'Item Id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Name'
        )->addColumn(
            'description',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Description'
        )->addIndex(
            $setup->getIdxName(
                $setup->getTable('mastering_sample'), ['name', 'description']),
                ['name', 'description']
        )->setComment('Sample Item');

        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}