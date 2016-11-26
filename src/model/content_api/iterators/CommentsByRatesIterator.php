<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 11/26/2016
 * Time: 11:28 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api\iterators;


use hotelbeds\hotel_api_sdk\model\content_api\CommentsByRate;

/**
 * Class CommentsByRatesIterator
 * @package hotelbeds\hotel_api_sdk\model\content_api\iterators
 */
class CommentsByRatesIterator extends BaseIterator
{
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return CommentsByRate Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new CommentsByRate($this->data[$this->position]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return CommentsByRate Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ? new CommentsByRate($this->data[$offset]) : null;
    }

}