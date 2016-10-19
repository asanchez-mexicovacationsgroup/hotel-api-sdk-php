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
 * Class ImageType
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Internal Image Type code
 * @property TranslatedAttribute description Image type description and language
 */
class ImageType extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}