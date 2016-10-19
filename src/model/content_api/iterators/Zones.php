<?php

/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 12:16 PM
 */
namespace hotelbeds\hotel_api_sdk\model\content_api\iterators;
use hotelbeds\hotel_api_sdk\model\content_api\Zone;

/**
 * Class Zones
 * @package hotelbeds\hotel_api_sdk\model\content_api\arrays
 */
class Zones implements \Iterator
{
    private $zones;
    private $position = 0;

    public function __construct(array $zones)
    {
        $this->zones = $zones;
    }

    /**
     * Zones array
     *
     * @return array Zones array
     */
    public function toArray() {
        return $this->zones;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Zone Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new Zone($this->zones[$this->position]);
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
        return $this->zones[$this->position]["zoneCode"];
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
        return ( $this->position < count($this->zones) );
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