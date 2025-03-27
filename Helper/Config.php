<?php

namespace ContextToCall\C2C\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @return string
     */
    public function isHeaderButtonEnabled()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/global_settings/enable_header_button',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getHeaderButtonText()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/global_settings/header_script',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getHeaderButtonPosition()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/global_settings/header_button_position',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function isFooterButtonEnabled()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/global_settings/enable_footer_button',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getFooterButtonText()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/global_settings/footer_script',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getFooterButtonPosition()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/global_settings/footer_button_position',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function isDisplayOnDetailPage()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/c2c_product_settings/c2c_display_on_detail_page',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function isDisplayOnListPage()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/c2c_product_settings/c2c_display_on_list_page',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getButtonPositionsOnDetailPage()
    {
        $positions = $this->_scopeConfig->getValue(
            'contexttocall_c2c/c2c_product_settings/c2c_button_position_detail_page',
            ScopeInterface::SCOPE_STORE
        );
        return $positions ? explode(',', $positions) : [];
    }

    /**
     * @return string
     */

    public function getButtonPositionsOnListPage()
    {
        $positions = $this->_scopeConfig->getValue(
            'contexttocall_c2c/c2c_product_settings/c2c_button_position_list',
            ScopeInterface::SCOPE_STORE
        );
        return $positions ? explode(',', $positions) : [];
    }

    /**
     * @return string
     */
    public function getCustomCss()
    {
        return $this->_scopeConfig->getValue(
            'contexttocall_c2c/c2c_design/custom_css',
            ScopeInterface::SCOPE_STORE
        );
    }
}
