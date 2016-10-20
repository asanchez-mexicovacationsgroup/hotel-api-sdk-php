<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 5:23 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api\iterators;


use hotelbeds\hotel_api_sdk\model\content_api\Phone;

class Phones extends BaseIterator
{
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Phone Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new Phone($this->data[$this->position]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return Phone|null Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ? new Phone($this->data[$offset]) : null;
    }
}