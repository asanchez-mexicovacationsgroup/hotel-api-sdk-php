<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:26 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class HotelWildCard
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string roomCode Identifier of the room type
 * @property string roomType Internal Room type code, returned only for Unified clients.
 * @property string characteristicCode Characteristic code/s of the room, ex: Standard, etc.
 * @property TranslatedAttribute hotelRoomDescription Multilanguage hotel room description
 */
class HotelWildCard extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'roomCode' => 'string',
        'roomType' => 'string',
        'characteristicCode' => 'string',
        'hotelRoomDescription' => TranslatedAttribute::class,
    ];
}