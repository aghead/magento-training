<?php


namespace Mastering\SampleModule\Block;


use Magento\Backend\Block\Template;
use Magento\Framework\DataObject;
use Mastering\SampleModule\Model\ResourceModel\Item\Collection;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    /**
     * Hello constructor.
     * @param  Template\Context  $context
     * @param  CollectionFactory  $collectionFactory
     * @param  array  $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
