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
 * Class Promotion
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Internal Promotion code
 * @property TranslatedAttribute name Promotion name and language
 * @property TranslatedAttribute description Promotion description and language
 */
class Promotion extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'name' => TranslatedAttribute::class,
        'description' => TranslatedAttribute::class,
    ];
}