<?php

namespace Mageplaza\HelloWorld\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'mageplaza_helloworld_post';

    protected $_cacheTag = 'mageplaza_helloworld_post';

    protected $_eventPrefix = 'mageplaza_helloworld_post';

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Post');
    }

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
