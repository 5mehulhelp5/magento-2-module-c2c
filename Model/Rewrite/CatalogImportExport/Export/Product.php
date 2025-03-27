<?php
namespace ContextToCall\C2C\Model\Rewrite\CatalogImportExport\Export;

class Product extends \Magento\CatalogImportExport\Model\Export\Product
{
    /**
     * Return header columns
     * @param customOptionsData $customOptionsData
     * @param stockItemRows $stockItemRows
     * @return void
     */
    protected function setHeaderColumns($customOptionsData, $stockItemRows)
    {
        $exportAttributes = (
            array_key_exists("skip_attr", $this->_parameters) && count($this->_parameters["skip_attr"])
        ) ?
            array_intersect(
                $this->_getExportMainAttrCodes(),
                array_merge(
                    $this->_customHeadersMapping($this->_getExportAttrCodes()),
                    $this->getNonSystemAttributes()
                )
            ) :
            $this->_getExportMainAttrCodes();

        if (!$this->_headerColumns) {
            $this->_headerColumns = array_merge(
                [
                    self::COL_SKU,
                    self::COL_STORE,
                    self::COL_ATTR_SET,
                    self::COL_TYPE,
                    self::COL_CATEGORY,
                    self::COL_PRODUCT_WEBSITES,
                ],
                ['c2c_code'],
                $exportAttributes,
                [self::COL_ADDITIONAL_ATTRIBUTES],
                reset($stockItemRows) ? array_keys(end($stockItemRows)) : [],
                [
                    'related_skus',
                    'related_position',
                    'crosssell_skus',
                    'crosssell_position',
                    'upsell_skus',
                    'upsell_position',
                    'additional_images',
                    'additional_image_labels',
                    'hide_from_product_page',
                    'custom_options'
                ]
            );
        }
    }

    /**
     * Return non-system attributes
     * @return array
     */
    private function getNonSystemAttributes(): array
    {
        $attrKeys = [];
        foreach ($this->filterAttributeCollection($this->getAttributeCollection()) as $attribute) {
            $attrKeys[] = $attribute->getAttributeCode();
        }

        return array_diff($this->_getExportMainAttrCodes(), $this->_customHeadersMapping($attrKeys));
    }
}
