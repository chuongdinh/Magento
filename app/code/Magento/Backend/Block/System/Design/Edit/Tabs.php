<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Backend\Block\System\Design\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('design_tabs');
        $this->setDestElementId('design-edit-form');
        $this->setTitle(__('Design Change'));
    }

    /**
     * {@inheritdoc}
     */
    protected function _prepareLayout()
    {
        $this->addTab(
            'general',
            [
                'label' => __('General'),
                'content' => $this->getLayout()->createBlock(
                    'Magento\Backend\Block\System\Design\Edit\Tab\General'
                )->toHtml()
            ]
        );

        return parent::_prepareLayout();
    }
}