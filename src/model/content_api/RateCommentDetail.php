<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 11/28/2016
 * Time: 5:23 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class RateCommentDetail
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string dateStart
 * @property string dateEnd
 * @property string description
 */
class RateCommentDetail extends ApiModel
{
    protected $validFields = [
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'description' => 'string',
    ];
}