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
 * Class Segment
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Code of the segment
 * @property TranslatedAttribute description Segment description and language
 */
class Segment extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}