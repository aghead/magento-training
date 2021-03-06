<?php


namespace Mageplaza\HelloWorld\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Post extends AbstractDb
{

    /**
     * Post constructor.
     * @param  Context  $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('mageplaza_helloworld_post', 'post_id');
    }
}
