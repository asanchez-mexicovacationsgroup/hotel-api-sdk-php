<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 1:53 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Terminal
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string country Internal Country Code
 * @property string code Terminal code
 * @property TranslatedAttribute name Name and language of the terminal
 * @property string type Code of the type of terminal
 * @property TranslatedAttribute description Name and language of the terminal
 */
class Terminal extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'country' => 'string',
        'code' => 'string',
        'name' => TranslatedAttribute::class,
        'type' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}