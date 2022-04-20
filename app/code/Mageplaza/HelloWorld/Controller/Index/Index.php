<?php

namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    private $_pageFactory;

    protected $_postFactory;

    /**
     * Index constructor.
     * @param  Context  $context
     * @param  PageFactory  $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        \Mageplaza\HelloWorld\Model\PostFactory $postFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();
        return $this->_pageFactory->create();

    }
}
