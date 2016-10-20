<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:22 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelFacilities;

/**
 * Class RoomStay
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string stayType Code of the Department Type
 * @property string description Description of the type of department
 * @property string order Numeric position of the department within the room
 * @property HotelFacilities facilityList List of facilities, amenities and installations in the department of the room.
 */
class RoomStay extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'stayType' => 'string',
        'description' => 'string',
        'order' => 'string',
        'facilityList' => HotelFacilities::class,
    ];

    /**
     * @var array of nullable field names with a default value which will be supplied if they don't exist.
     */
    private static $NULLABLE_FIELDS = [
        'facilityList' => [],
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