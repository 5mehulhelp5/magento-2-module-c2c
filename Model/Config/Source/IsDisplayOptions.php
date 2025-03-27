<?php
namespace ContextToCall\C2C\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Class OptionSourceInterface
 *
 * Provides position options for configuration settings.
 */
class IsDisplayOptions extends AbstractSource
{
    /**
     * Retrieve the list of available positions as option array
     *
     * @return array[]
     */
    public function getAllOptions()
    {
        return [
            ['value' => '', 'label' => __('Select')],
            ['value' => '1', 'label' => __('Yes')],
            ['value' => '0', 'label' => __('No')]
        ];
    }
}
