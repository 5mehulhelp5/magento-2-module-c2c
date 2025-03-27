<?php
namespace ContextToCall\C2C\Block;

use Magento\Framework\View\Element\Template;
use ContextToCall\C2C\Helper\Config as GloabalConfig;

class GlobalButton extends Template
{
    /**
     * @var GloabalConfig
     */
    protected $globalConfig;

    /**
     * GlobalButton constructor.
     * @param Template\Context $context
     * @param GloabalConfig $globalConfig
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        GloabalConfig $globalConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->globalConfig = $globalConfig;
    }

    /**
     * @return string
     */
    public function isHeaderButtonEnabled()
    {
        return $this->globalConfig->isHeaderButtonEnabled();
    }

    /**
     * @return string
     */
    public function getHeaderButtonText()
    {
        return $this->globalConfig->getHeaderButtonText();
    }

    /**
     * @return string
     */
    public function getHeaderButtonPosition()
    {
        return $this->globalConfig->getHeaderButtonPosition();
    }

    /**
     * @return string
     */
    public function isFooterButtonEnabled()
    {
        return $this->globalConfig->isFooterButtonEnabled();
    }

    /**
     * @return string
     */
    public function getFooterButtonText()
    {
        return $this->globalConfig->getFooterButtonText();
    }

    /**
     * @return string
     */
    public function getFooterButtonPosition()
    {
        return $this->globalConfig->getFooterButtonPosition();
    }
}
