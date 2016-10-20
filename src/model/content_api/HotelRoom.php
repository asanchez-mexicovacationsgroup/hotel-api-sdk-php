<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:18 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelFacilities;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\RoomStays;

/**
 * Class HotelRoom
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string roomCode Identifier of the room type
 * @property string roomType Internal Room type code.
 * @property string characteristicCode Characteristic code/s of the room
 * @property HotelFacilities roomFacilities List of facilities, amenities and installations in the room of the hotel.
 * @property RoomStays roomStays List of the different departments in which the room is divided
 *
 */
class HotelRoom extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'roomCode' => 'string',
        'roomType' => 'string',
        'characteristicCode' => 'string',
        'roomFacilities' => HotelFacilities::class,
        'roomStays' => RoomStays::class,
    ];

    /**
     * @var array of nullable field names with a default value which will be supplied if they don't exist.
     */
    private static $NULLABLE_FIELDS = [
        'roomFacilities' => [],
        'roomStays' => [],
    ];

    public function __get($field)
    {
        if (in_array($field, array_keys(self::$NULLABLE_FIELDS))) {
            if (!isset($this->sdkFields[$field])) {
                $this->sdkFields[$field] = self::$NULLABLE_FIELDS[$field];
            }
        }

        return parent::__get($field);
    }
}