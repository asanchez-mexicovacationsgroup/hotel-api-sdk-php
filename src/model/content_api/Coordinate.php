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
 * @property double latitude
 * @property double longitude
 */
class Coordinate extends ApiModel
{
    protected $validFields = [
        'latitude' => 'double',
        'longitude' => 'double',
    ];
}