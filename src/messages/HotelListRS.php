<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:42 PM
 */

namespace hotelbeds\hotel_api_sdk\messages;


use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiResponse;
use hotelbeds\hotel_api_sdk\model\content_api\Hotel;

class HotelListRS extends ContentApiResponse
{
    /**
     * Return the data key for use in iterator
     * @return string
     */
    protected function dataKey()
    {
        return 'hotels';
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Hotel
     * @since 5.0.0
     */
    public function current()
    {
        return new Hotel($this->currentItemArray());
    }
}