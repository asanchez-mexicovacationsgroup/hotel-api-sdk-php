<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 12:18 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Zone
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string zoneCode Internal Zone Code
 * @property string name Internal zone name
 * @property TranslatedAttribute description Zone Description and Language
 */
class Zone extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'zoneCode' => 'string',
        'name' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}