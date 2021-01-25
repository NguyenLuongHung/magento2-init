<?php

namespace Sivaschenko\LuckyOrder\Test\Unit\Block;

use Sivaschenko\LuckyOrder\Model\LuckInfo;
use Sivaschenko\LuckyOrder\Block\OrderSuccess;
use Magento\Checkout\Model\Session;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class OrderSuccessTest extends \PHPUnit\Framework\TestCase
{
    /**
     * $var objectManager
     */
    private $objectManager;

    /**
     * @var OrderSuccess
     */
    private $block;

    /**
     * @var LuckInfo|\PHPUnit_Framework_MockObject_MockObject
     */
    private $luckInfo;

    /**
     * @var Session|\PHPUnit_Framework_MockObject_MockObject
     */
    private $session;

    protected function setUp(): void
    {
        $this->$objectManager = new ObjectManager($this);
        $this->luckInfo = $this->getMock('Sivaschenko\LuckyOrder\Model\LuckInfo');
        $this->session = $this->getMock('Magento\Checkout\Model\Session', [], [], '', false);
        $this->block = $this->objectManager->getObject(
            'Sivaschenko\LuckyOrder\Block\OrderSuccess',
            [
                'LuckInfo' => $this->luckInfo,
                'session' => $this->sesion
            ]
        )
    }

    public function testToHtml()
    {

    }
}