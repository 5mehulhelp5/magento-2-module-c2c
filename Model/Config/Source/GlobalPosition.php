<?php
namespace ContextToCall\C2C\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class GlobalPosition
 *
 * Provides position options for configuration settings.
 */
class GlobalPosition implements OptionSourceInterface
{
    /**
     * Retrieve the list of available positions as option array
     *
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'left', 'label' => __('Left')],
            ['value' => 'center', 'label' => __('Center')],
            ['value' => 'right', 'label' => __('Right')]
        ];
    }
}
