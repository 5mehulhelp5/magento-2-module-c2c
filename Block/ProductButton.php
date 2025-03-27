<?php

namespace ContextToCall\C2C\Block;

use Magento\Catalog\Block\Product\View;
use Magento\Catalog\Model\Product;
use ContextToCall\C2C\Helper\Config as GlobalConfig;
use Magento\Catalog\Api\ProductRepositoryInterface;

/**
 * Class ProductButton
 *
 * This class is responsible for handling the button display configurations
 * on the product detail page for the C2C module.
 */
class ProductButton extends View
{
    /**
     * @var GlobalConfig
     */
    protected $globalConfig;

    /**
     * ProductButton constructor.
     *
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Framework\Url\EncoderInterface $urlEncoder
     * @param \Magento\Framework\Json\EncoderInterface $jsonEncoder
     * @param \Magento\Framework\Stdlib\StringUtils $string
     * @param \Magento\Catalog\Helper\Product $productHelper
     * @param \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig
     * @param \Magento\Framework\Locale\FormatInterface $localeFormat
     * @param \Magento\Customer\Model\Session $customerSession
     * @param ProductRepositoryInterface $productRepository
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
     * @param GlobalConfig $globalConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Url\EncoderInterface $urlEncoder,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Helper\Product $productHelper,
        \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
        \Magento\Framework\Locale\FormatInterface $localeFormat,
        \Magento\Customer\Model\Session $customerSession,
        ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        GlobalConfig $globalConfig,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $urlEncoder,
            $jsonEncoder,
            $string,
            $productHelper,
            $productTypeConfig,
            $localeFormat,
            $customerSession,
            $productRepository,
            $priceCurrency,
            $data
        );
        $this->globalConfig = $globalConfig;
    }

    /**
     * Get the current product.
     *
     * @return Product
     */
    public function isDisplayOnDetailPageConfig()
    {
        return $this->globalConfig->isDisplayOnDetailPage();
    }

    /**
     * Get button positions for the detail page.
     *
     * @return array
     */
    public function getButtonPositionsOnDetailPage()
    {
        return $this->globalConfig->getButtonPositionsOnDetailPage();
    }

    /**
     * Get button positions for the specific product.
     *
     * @return array
     */
    public function getButtonPositionForProduct()
    {
        $product = $this->getProduct();
        $positions = $product->getData('c2c_button_position_detail_page');
        return $positions ? explode(',', $positions) : [];
    }

    /**
     * Is display for the specific product.
     *
     * @return array
     */
    public function isDisplayOnDetailPageProduct()
    {
        $product = $this->getProduct();
        return $product->getData('c2c_display_on_detail_page');
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
}
