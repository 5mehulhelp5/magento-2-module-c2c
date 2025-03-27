<?php
declare(strict_types=1);

namespace ContextToCall\C2C\Setup\Patch\Data;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

class AddC2cScript implements DataPatchInterface
{
    /**
     * Constructor
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        private ModuleDataSetupInterface $moduleDataSetup,
        private EavSetupFactory $eavSetupFactory
    ) {
    }

    /**
     * @inheritdoc
     */
    public function apply(): void
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'c2c_code',
            [
                'type' => 'text',
                'label' => 'C2C Code',
                'input' => 'textarea',
                'source' => '',
                'frontend' => '',
                'required' => false,
                'backend' => '',
                'sort_order' => '30',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'default' => null,
                'visible' => true,
                'user_defined' => true,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'unique' => false,
                'apply_to' => '',
                'group' => 'C2C',
                'used_in_product_listing' => true,
                'is_used_in_grid' => false,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false,
                'option' => ['values' => [""]]
            ]
        );

        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'c2c_display_on_detail_page',
            [
                'type' => 'int',
                'label' => 'Display on detail page',
                'input' => 'select',
                'source' => 'ContextToCall\C2C\Model\Config\Source\IsDisplayOptions',
                'frontend' => '',
                'required' => false,
                'backend' => '',
                'sort_order' => '40',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'default' => null,
                'visible' => true,
                'user_defined' => true,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'unique' => false,
                'apply_to' => '',
                'group' => 'C2C',
                'used_in_product_listing' => true,
                'is_used_in_grid' => true,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false
            ]
        );

            // Add display_on_list_page attribute
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'c2c_display_on_list_page',
                [
                    'type' => 'int',
                    'label' => 'Display on List Page',
                    'input' => 'select',
                    'source' => 'ContextToCall\C2C\Model\Config\Source\IsDisplayOptions',
                    'required' => false,
                    'default' => null,
                    'global' => ScopedAttributeInterface::SCOPE_STORE,
                    'visible' => true,
                    'user_defined' => true,
                    'group' => 'C2C',
                    'sort_order' => '50',
                    'used_in_product_listing' => true,
                    'is_used_in_grid' => true,
                    'is_visible_in_grid' => false,
                    'is_filterable_in_grid' => false
                ]
            );

        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'c2c_button_position_detail_page',
            [
                'type' => 'varchar',
                'backend' => \Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend::class,
                'frontend' => '',
                'label' => 'Button Position on Detail Page',
                'input' => 'multiselect',
                'class' => '',
                'source' => \ContextToCall\C2C\Model\Config\Source\DetailButtonPosition::class,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'group' => 'C2C', // Add to C2C tab
                'sort_order' => '60',
                'used_in_product_listing' => true
            ]
        );

        // Add button_position attribute
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'c2c_button_position_list',
            [
                'type' => 'varchar',
                'label' => 'Button Position on List Page',
                'frontend' => '',
                'backend' => \Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend::class,
                'input' => 'multiselect',
                'source' => \ContextToCall\C2C\Model\Config\Source\ListButtonPosition::class,
                'required' => false,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'user_defined' => true,
                'group' => 'C2C',
                'used_in_product_listing' => true,
                'sort_order' => '70'
            ]
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * @inheritdoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies(): array
    {
        return [];
    }
}
