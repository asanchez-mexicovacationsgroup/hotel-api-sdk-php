<?php

/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 12:16 PM
 */
namespace hotelbeds\hotel_api_sdk\model\content_api\iterators;

use hotelbeds\hotel_api_sdk\model\content_api\GroupZone;

/**
 * Class Zones
 * @package hotelbeds\hotel_api_sdk\model\content_api\arrays
 */
class GroupZones extends BaseIterator
{

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return GroupZone Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new GroupZone($this->data[$this->position]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return GroupZone Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ? new GroupZone($this->data[$offset]) : null;
    }
}