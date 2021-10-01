<?php

namespace Hiberus\sanchez\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class Index implements  HttpGetActionInterface
{

    protected PageFactory $pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ){
        $this->pageFactory=$pageFactory;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
