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
class Comments implements \Iterator
{
    private $comments;
    private $position = 0;

    public function __construct(array $comments)
    {
        $this->comments = $comments;
    }

    /**
     * Group zones array
     *
     * @return array Group zones array
     */
    public function toArray()
    {
        return $this->comments;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Comment Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new Comment($this->comments[$this->position]);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return ($this->position < count($this->comments));
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->position = 0;
    }
}