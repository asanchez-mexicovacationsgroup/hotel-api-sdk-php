<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 11/28/2016
 * Time: 5:20 PM
 */

namespace hotelbeds\hotel_api_sdk\messages;


use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiResponse;
use hotelbeds\hotel_api_sdk\model\content_api\RateCommentDetail;

/**
 * Class RateCommentDetailsRS
 * @package hotelbeds\hotel_api_sdk\messages
 * @property string code
 * @property string date
 * @property integer incoming
 * @property integer hotel
 */
class RateCommentDetailsRS extends ContentApiResponse
{
    /**
     * Return the data key for use in iterator
     * @return string
     */
    protected function dataKey()
    {
        return 'rateComments';
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return RateCommentDetail Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return new RateCommentDetail($this->currentItemArray());
    }

}