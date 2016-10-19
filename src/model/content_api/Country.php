<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;
use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Country
 *
 * @package hotelbeds\hotel_api_sdk\model
 * @property string              code
 * @property string              isoCode
 * @property TranslatedAttribute description
 */
class Country extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'isoCode' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}
