<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:09 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api\iterators;


use hotelbeds\hotel_api_sdk\model\content_api\HotelFacility;

class HotelFacilities extends BaseIterator
{

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return HotelFacility Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new HotelFacility($this->data[$this->position]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return HotelFacility|null
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ? new HotelFacility($this->data[$offset]) : null;
    }
}