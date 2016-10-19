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
 * Class Facility
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property integer code Code of the facility
 * @property integer facilityGroupCode Group the facility belongs to
 * @property integer facilityTypologyCode Typology of the facility which determines the fields to recieve in the hotels operation
 * @property TranslatedAttribute description Facility description and language
 */
class Facility extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'facilityGroupCode' => TranslatedAttribute::class,
        'facilityTypologyCode' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}