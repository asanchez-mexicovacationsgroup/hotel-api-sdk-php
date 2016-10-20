<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:00 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class HotelTerminal
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string terminalCode Terminal code
 * @property float distance Distance in kilometers to the hotel
 */
class HotelTerminal extends ApiModel
{
    protected $validFields = [
        'terminalCode' => 'string',
        'distance' => 'float',
    ];
}