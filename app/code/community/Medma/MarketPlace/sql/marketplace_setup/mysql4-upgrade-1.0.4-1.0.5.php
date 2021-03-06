<?php

/**
 * Medma Marketplace
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Team
 * that is bundled with this package of Medma Infomatix Pvt. Ltd.
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento COMMUNITY edition
 * Contact us Support does not guarantee correct work of this package
 * on any other Magento edition except Magento COMMUNITY edition.
 * =================================================================
 * 
 * @category    Medma
 * @package     Medma_MarketPlace
**/

$installer = $this;
$installer->startSetup();
$installer->getConnection()
	->addColumn(
		$installer->getTable('marketplace/profile'),  'message', array(
			'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,                
			'nullable'  => true,
			'comment'   => 'Message',
		)
	);
$installer->getConnection()
	->addColumn(
		$installer->getTable('marketplace/profile'),  'contact_number', array(
			'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,                
			'nullable'  => true,
			'comment'   => 'Contact Number',
		)
	);
$installer->getConnection()
	->addColumn(
		$installer->getTable('marketplace/profile'),  'country', array(
			'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,                
			'nullable'  => true,
			'comment'   => 'Country',
		)
	);
$installer->endSetup();
?>
