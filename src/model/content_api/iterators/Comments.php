<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:05 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api\iterators;
use hotelbeds\hotel_api_sdk\model\content_api\Comment;

/**
 * Class Comments
 * @package hotelbeds\hotel_api_sdk\model\content_api\iterators
 */
class Comments extends BaseIterator
{
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Comment Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new Comment($this->data[$this->position]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return Comment Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ? new Comment($this->data[$offset]) : null;
    }
}