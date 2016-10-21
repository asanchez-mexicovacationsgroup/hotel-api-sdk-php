<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 10:58 AM
 */

namespace hotelbeds\hotel_api_sdk\messages\contracts;


use hotelbeds\hotel_api_sdk\model\AuditData;

/**
 * Class ContentApiResponse
 * @package hotelbeds\hotel_api_sdk\messages\contracts
 *
 * @property integer $from Record# origin of the response
 * @property integer $to Record# end of the response
 * @property integer $total Total available records
 */
abstract class ContentApiResponse extends ApiResponse implements \Iterator
{
    private $position = 0;

    public function __construct(array $rsData)
    {
        parent::__construct($rsData);
    }

    /**
     * Check whether response has more pages.
     * @return bool
     */
    public function hasMore()
    {
        return $this->to < $this->total;
    }

    /**
     * @return array
     */
    protected function currentItemArray()
    {
        return $this->getData()[$this->position];
    }

    /**
     * @return AuditData Return class of audit
     */
    public function auditData()
    {
        return new AuditData($this->auditData);
    }

    /**
     * Returns the data as array, ex: countries, destinations, hotels, etc...
     * @return array
     */
    public function getData()
    {
        $dataKey = $this->dataKey();
        return $this->$dataKey;
    }

    // Iterator implementation

    protected function position()
    {
        return $this->position;
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
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return ( $this->position < count($this->getData()) );
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
     * Return the data key for use in iterator
     * @return string
     */
    protected abstract function dataKey();
}