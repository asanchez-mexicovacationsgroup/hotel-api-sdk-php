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
 * Class RoomType
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Identifier of the room type
 * @property string type Internal Room type code, returned only for Unified clients.
 * @property string characteristic Characteristic code/s of the room
 * @property integer minPax Minimum number of paxes allowed in the room
 * @property integer maxPax Maximum number of paxes allowed in the room
 * @property integer maxAdults Maximum number of adults allowed in the room
 * @property integer maxChildren Maximum number of children allowed in the room
 * @property integer minAdults Minimum number of adults allowed in the room
 * @property string description Internal description for the room
 * @property TranslatedAttribute typeDescription Description and language of the room type
 * @property TranslatedAttribute characteristicDescription Characteristic description and language
 */
class RoomType extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'type' => 'string',
        'characteristic' => 'string',
        'minPax' => 'integer',
        'maxPax' => 'integer',
        'maxAdults' => 'integer',
        'maxChildren' => 'integer',
        'minAdults' => 'integer',
        'description' => 'string',
        'typeDescription' => TranslatedAttribute::class,
        'characteristicDescription' => TranslatedAttribute::class,
    ];
}