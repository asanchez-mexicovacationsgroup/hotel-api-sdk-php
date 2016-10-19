<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;

use hotelbeds\hotel_api_sdk\model\ApiModel;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\GroupZones;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\Zones;

/**
 * Class Destination
 *
 * @package hotelbeds\hotel_api_sdk\model
 * @property string code Internal Destination Code
 * @property TranslatedAttribute name Destination Description and Language
 * @property string countryCode    Internal Country Code
 * @property string isoCode    ISO Country Code
 * @property Zones zones List of zones in which the destination is divided.
 * @property GroupZones groupZones List of zone groups
 */
class Destination extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'name' => TranslatedAttribute::class,
        'countryCode' => 'string',
        'isoCode' => 'string',
        'zones' => Zones::class,
        'groupZones' => GroupZones::class,
    ];
}
