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
 * Class Language
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Internal Language code
 * @property string name Internal language description
 * @property TranslatedAttribute description Languace description
 */
class Language extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'name' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}