<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 5:18 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Coordinates
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property float latitude
 * @property float longitude
 */
class Coordinate extends ApiModel
{
    protected $validFields = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];
}