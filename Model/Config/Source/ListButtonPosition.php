<?php
namespace ContextToCall\C2C\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Class ListButtonPosition
 *
 * This class provides the configuration options for the list button positions
 * in the ContextToCall C2C module.
 */
class ListButtonPosition extends AbstractSource
{
    /**
     * Retrieve all options for list button positions.
     *
     * @return array
     */
    public function getAllOptions()
    {
        return [
            ['value' => 'add_to_cart_up_left', 'label' => __('Add to Cart - Left Up')],
            ['value' => 'add_to_cart_down_left', 'label' => __('Add to Cart - Left  Down')],
            ['value' => 'add_to_cart_up_center', 'label' => __('Add to Cart - Center Up')],
            ['value' => 'add_to_cart_down_center', 'label' => __('Add to Cart - Center Down')],
            ['value' => 'add_to_cart_up_right', 'label' => __('Add to Cart - Right Up')],
            ['value' => 'add_to_cart_down_right', 'label' => __('Add to Cart - Right Down')],
            ['value' => 'product_image_left_up', 'label' => __('Product Image - Left Up')],
            ['value' => 'product_image_right_up', 'label' => __('Product Image - Right Up')],
            ['value' => 'product_image_left_down', 'label' => __('Product Image - Left Down')],
            ['value' => 'product_image_right_down', 'label' => __('Product Image - Right Down')]
        ];
    }
}
