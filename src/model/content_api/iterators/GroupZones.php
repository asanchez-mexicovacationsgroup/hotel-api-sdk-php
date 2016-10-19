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
class GroupZones implements \Iterator
{
    private $groupZones;
    private $position = 0;

    public function __construct(array $zones)
    {
        $this->groupZones = $zones;
    }

    /**
     * Group zones array
     *
     * @return array Group zones array
     */
    public function toArray()
    {
        return $this->groupZones;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return GroupZone Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new GroupZone($this->groupZones[$this->position]);
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
        return $this->groupZones[$this->position]["groupZoneCode"];
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
        return ($this->position < count($this->groupZones));
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