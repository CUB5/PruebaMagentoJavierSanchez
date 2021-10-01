<?php

namespace Hiberus\sanchez\Block;

use Hiberus\Pardo\Model\ResourceModel\Extension\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;



class Index extends Template
{

    public $collection;

    public function __construct(
        Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collection=$collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection(){
        return $this->collection->create();
    }


}
