<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 5:25 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Phone
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string phoneNumber
 * @property string phoneType
 */
class Phone extends ApiModel
{
    protected $validFields = [
        'phoneNumber' => 'string',
        'phoneType' => 'string',
    ];
}