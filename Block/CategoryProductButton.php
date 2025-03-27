<?php

namespace ContextToCall\C2C\Block;

use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\ProductList\Item\Block as ProductListBlock;
use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\Registry;
use ContextToCall\C2C\Helper\Config as GlobalConfig;

/**
 * Class CategoryProductButton
 *
 * This block is responsible for handling product button positions
 * and retrieving C2C script data.
 */
class CategoryProductButton extends ProductListBlock
{

    /**
     * @var GlobalConfig
     */
    protected $globalConfig;

    /**
     * CategoryProductButton constructor.
     *
     * @param Context $context
     * @param GlobalConfig $globalConfig
     * @param array $data
     */
    public function __construct(
        Context $context,
        GlobalConfig $globalConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->globalConfig = $globalConfig;
    }

    /**
     * Get button positions on the product detail page.
     *
     * @return array|null
     */
    public function getListButtonPositions()
    {
        $product = $this->getProduct();
        $positions = $product->getData('c2c_button_position_list');
        return $positions ? explode(',', $positions) : [];
    }

    /**
     * Get the C2C script associated with the product.
     *
     * @return string|null
     */
    public function getC2CScript()
    {
        $product = $this->getProduct();
        return $product->getData('c2c_code');
    }

    /**
     * Get configured button positions for the product list page.
     *
     * @return array
     */
    public function getGloabalListButtonPositions()
    {
        return $this->globalConfig->getButtonPositionsOnListPage();
    }

    /**
     * Check if the button should be displayed on the list page.
     *
     * @return bool
     */
    public function isDisplayOnListPageConfig()
    {
        return $this->globalConfig->isDisplayOnListPage();
    }

     /**
      * Is display for the specific product.
      *
      * @return array
      */
    public function isDisplayOnListPageProduct()
    {
        $product = $this->getProduct();
        return $product->getData('c2c_display_on_list_page');
    }
}
