<?php

namespace ContextToCall\C2C\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Class DetailButtonPosition
 *
 * This class provides the configuration options for the detail button positions
 * in the ContextToCall C2C module.
 */
class DetailButtonPosition extends AbstractSource
{
    /**
     * Retrieve all options for detail button positions.
     *
     * @return array
     */
    public function getAllOptions()
    {
        return [
            ['value' => 'c2c_price_up', 'label' => __('Price - Up')],
            ['value' => 'c2c_price_down', 'label' => __('Price - Down')],
            ['value' => 'c2c_title_up', 'label' => __('Title - Up')],
            ['value' => 'c2c_title_down', 'label' => __('Title - Down')],
            ['value' => 'c2c_add_to_cart_up', 'label' => __('Add to Cart - Up')],
            ['value' => 'c2c_add_to_cart_down', 'label' => __('Add to Cart - Down')],
            ['value' => 'c2c_short_desc_left_up', 'label' => __('Short Description - Left Up')],
            ['value' => 'c2c_short_desc_right_up', 'label' => __('Short Description - Right Up')],
            ['value' => 'c2c_short_desc_left_down', 'label' => __('Short Description - Left Down')],
            ['value' => 'c2c_short_desc_right_down', 'label' => __('Short Description - Right Down')],
            ['value' => 'c2c_description_left_up', 'label' => __('Description - Left Up')],
            ['value' => 'c2c_description_right_up', 'label' => __('Description - Right Up')],
            ['value' => 'c2c_description_left_down', 'label' => __('Description - Left Down')],
            ['value' => 'c2c_description_right_down', 'label' => __('Description - Right Down')],
            ['value' => 'c2c_product_image_left_up', 'label' => __('Product Image - Left Up')],
            ['value' => 'c2c_product_image_right_up', 'label' => __('Product Image - Right Up')],
            ['value' => 'c2c_product_image_left_down', 'label' => __('Product Image - Left Down')],
            ['value' => 'c2c_product_image_right_down', 'label' => __('Product Image - Right Down')]
        ];
    }
}
