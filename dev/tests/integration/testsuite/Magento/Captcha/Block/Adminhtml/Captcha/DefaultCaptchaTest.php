<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Captcha\Block\Adminhtml\Captcha;

class DefaultCaptchaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Captcha\Block\Captcha\DefaultCaptcha
     */
    protected $_block;

    protected function setUp()
    {
        $this->_block = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->get(
            'Magento\Framework\View\LayoutInterface'
        )->createBlock(
            'Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha'
        );
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoAppArea adminhtml
     */
    public function testGetRefreshUrl()
    {
        $this->assertContains('backend/admin/refresh/refresh', $this->_block->getRefreshUrl());
    }
}