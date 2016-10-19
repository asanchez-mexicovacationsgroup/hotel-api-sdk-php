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
 * Class FacilityGroup
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property integer code Group the facility belongs to
 * @property TranslatedAttribute description    Facility group description and language
 */
class FacilityGroup extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}