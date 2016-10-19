<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/8/2015
 * Time: 12:48 AM
 */

namespace hotelbeds\hotel_api_sdk\model;

/**
 * Class Hotel
 * @package hotelbeds\hotel_api_sdk\model
 * @property integer code Hotelbeds internal hotel code
 * @property string name Hotel name
 * @property string address Hotel address
 * @property string categoryCode Hotel category code
 * @property string categoryName Category name
 * @property string destinationCode Code of the destination where the hotel is located
 * @property string destinationName Name of the destination where the hotel is located
 * @property integer zoneCode Code of the zone where the hotel is located
 * @property string zoneName Name of the zone where the hotel is located
 * @property float latitude Hotel geo latitude
 * @property float longitude Hotel geo longitude
 * @property array rooms List of rooms available for a particular hotel
 * @property string currency Client currency
 * @property float maxRate Maximum hotel room price
 * @property float minRate Minimum hotel room price
 * @property integer giata Giata hotel code
 * @property float totalSellingRate
 * @property float totalNet
 * @property array creditCards List of creditCards available for a particular hotel
 */
class Hotel extends ApiModel
{
    public function __construct(array $data=null)
    {
        $this->validFields =
            ["code" => "integer",
             "name" => "string",
             "address" => "string",
             "categoryCode" => "string",
             "categoryName" => "string",
             "destinationCode" => "string",
             "destinationName" => "string",
             "zoneCode" => "integer",
             "zoneName" => "string",
             "latitude" => "float",
             "longitude" => "float",
             "rooms" => "array",
             "totalSellingRate" => "float",
             "totalNet" => "float",
             "currency" => "string",
             "maxRate" => "float",
             "minRate" => "float",
             "giata" => "integer",
             "creditCards" => "array"
            ];

        if ($data !== null)
        {
            $this->sdkFields = $data;
        }
    }


    /**
     * @return RoomIterator Iterate all rooms of this hotel
     */
    public function iterator()
    {
        if ($this->rooms !== null)
            return new RoomIterator($this->rooms);
        return new RoomIterator([]);
    }

    /**
     * @return CreditCardIterator For iterate creditCard list
     */
    public function creditCardsIterator()
    {
        if ($this->creditCards !== null)
            return new CreditCardIterator($this->creditCards);
        return new CreditCardIterator([]);
    }
}