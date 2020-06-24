<?php

namespace NgocThanh\Sumup2\Ui\DataProvider\Product\Form\Modifier;

use Magento\Ui\Component\Container;
use Magento\Ui\Component\DynamicRows;
use Magento\Ui\Component\Form\Element\Select;
use Magento\Ui\Component\Form\Field;

class CustomOptions extends \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\CustomOptions
{

    const FIELD_QTY_NAME = 'thumbnail';

    /**
     * Get config for grid for "select" types
     *
     * @param int $sortOrder
     * @return array
     */
    protected function getSelectTypeGridConfig($sortOrder)
    {
        return [
            'arguments' => [
                'data' => [
                    'config' => [
                        'addButtonLabel' => __('Add Value'),
                        'componentType' => DynamicRows::NAME,
                        'component' => 'Magento_Ui/js/dynamic-rows/dynamic-rows',
                        'additionalClasses' => 'admin__field-wide',
                        'deleteProperty' => static::FIELD_IS_DELETE,
                        'deleteValue' => '1',
                        'renderDefaultRecord' => false,
                        'sortOrder' => $sortOrder,
                    ],
                ],
            ],
            'children' => [
                'record' => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'componentType' => Container::NAME,
                                'component' => 'Magento_Ui/js/dynamic-rows/record',
                                'positionProvider' => static::FIELD_SORT_ORDER_NAME,
                                'isTemplate' => true,
                                'is_collection' => true,
                            ],
                        ],
                    ],
                    'children' => [
                        static::FIELD_TITLE_NAME => $this->getTitleFieldConfig(10),
                        static::FIELD_PRICE_NAME => $this->getPriceFieldConfig(20),
                        static::FIELD_PRICE_TYPE_NAME => $this->getPriceTypeFieldConfig(30, ['fit' => true]),
                        static::FIELD_SKU_NAME => $this->getSkuFieldConfig(40),
                        static::FIELD_SORT_ORDER_NAME => $this->getPositionFieldConfig(50),
                        static::FIELD_QTY_NAME => $this->getQtyFieldConfig(55),
                        static::FIELD_IS_DELETE => $this->getIsDeleteFieldConfig(60)
                    ]
                ]
            ]
        ];
    }

    /**
     * Get config for "Inventory" fields
     *
     * @param $sortOrder
     * @param array $options
     * @return array
     */
    protected function getQtyFieldConfig($sortOrder, array $options = [])
    {
        return [
            'arguments' => [
                'data' => [
                    'config' => [
                        'label' => __('Image Uploader'),
                        'componentType' => 'fileUploader',
                        'formElement' => 'fileUploader',
                        'source' => 'banner',
                        'visible' => 'true',
                        'component' => 'Magento_Ui/js/form/element/file-uploader',
                        'elementTmpl' => 'ui/form/element/uploader/uploader',
                        'previewTmpl' => 'Magento_Catalog/image-preview',
                        'dataScope' => 'thumbnail',
                        'fileInputName' => 'thumbnail',
                        'uploaderConfig' => [
                            'url' => $this->urlBuilder->getUrl(
                                'option/upload/image'
                            ),
                        ],

                        'sortOrder' => $sortOrder,
                    ],
                    [
                        'elementTmpl' => 'ui/dynamic-rows/cells/thumbnail',
                    ]
                ],
                $options
            ]

        ];
    }
}
