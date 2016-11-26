<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 3:58 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\CommentsByRatesIterator;

/**
 * Class RateComment
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string incoming Code of the incoming office of the hotel
 * @property integer hotel Internal Hotel Code
 * @property string code Internal code of the comment of the hotel
 * @property CommentsByRatesIterator commentsByRates List of tariffs and rate comments
 */
class RateComment extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'incoming' => 'string',
        'hotel' => 'integer',
        'code' => 'string',
        'commentsByRates' => CommentsByRatesIterator::class,
    ];
}