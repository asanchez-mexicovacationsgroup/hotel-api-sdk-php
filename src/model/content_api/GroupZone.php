<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 12:31 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class GroupZone
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string groupZoneCode Group Zone Code
 * @property TranslatedAttribute name Group Zone Description and Language
 * @property array zones array of (zone codes) included in the group zone
 */
class GroupZone extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'groupZoneCode' => 'string',
        'name' => TranslatedAttribute::class,
        'zones' => 'array',
    ];
}