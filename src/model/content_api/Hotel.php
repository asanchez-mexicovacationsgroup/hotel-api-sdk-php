<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 5:16 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelFacilities;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelRooms;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelTerminals;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelWildCards;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelImages;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelInterestPoints;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\HotelIssues;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\Phones;

/**
 * Class Hotel
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property integer code Internal Hotel Code
 * @property TranslatedAttribute name Multilanguage name of the hotel
 * @property string accommodationTypeCode Hotel Type Code it will indicate the type of the hotel (apartment, hotel, home)
 * @property string countryCode Internal Country code
 * @property string destinationCode Internal destination code, where the hotel is located
 * @property integer zoneCode Code of the Zone within the destination
 * @property Coordinate coordinates GPS coordinates of the hotel
 * @property string categoryCode Hotel rating based on the information provided by the hotel
 * @property string chainCode Code of the chain that the hotel belongs to
 * @property TranslatedAttribute description Multilanguage description of the hotel
 * @property TranslatedAttribute address Multilanguage address of the hotel
 * @property string postalCode
 * @property TranslatedAttribute city
 * @property string email
 * @property string web Website URL of the hotel or the chain
 * @property double giataCode Giata code of the hotel, returned only if the client has agreement with Giata
 * @property string license License number of the hotel in their country
 * @property Phones phones The list of contact phones of the hotel
 * @property HotelIssues issues List of incidences, reparations that the hotel is involved in
 * @property HotelTerminals terminals List of terminals associated to the hotel and their distance to the hotel.
 * @property HotelFacilities facilities List of facilities, amenities and installations in the hotel.
 * @property array boardCodes List of the board types offered at the hotel. Occurrences 0..* String 7 Characters
 * @property array segmentCodes List of the internal segments to which the hotel belongs (Business hotel, city hotel,...)
 * @property HotelInterestPoints interestPoints List of Points of Interest close to the hotel
 * @property HotelRooms rooms List of available rooms at the hotel
 * @property HotelWildCards wildcards List of hotel room descriptions
 * @property HotelImages images List of hotel pictures
 */
class Hotel extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'integer',
        'name' => TranslatedAttribute::class,
        'accommodationTypeCode' => 'string',
        'countryCode' => 'string',
        'destinationCode' => 'string',
        'zoneCode' => 'integer',
        'coordinates' => Coordinate::class,
        'categoryCode' => 'string',
        'chainCode' => 'string',
        'description' => TranslatedAttribute::class,
        'address' => TranslatedAttribute::class,
        'postalCode' => 'string',
        'city' => TranslatedAttribute::class,
        'email' => 'string',
        'web' => 'string',
        'giataCode' => 'double',
        'license' => 'string',
        'phones' => Phones::class,
        'issues' => HotelIssues::class,
        'terminals' => HotelTerminals::class,
        'facilities' => HotelFacilities::class,
        'boardCodes' => 'array',
        'segmentCodes' => 'array',
        'interestPoints' => HotelInterestPoints::class,
        'rooms' => HotelRooms::class,
        'wildcards' => HotelWildCards::class,
        'images' => HotelImages::class,
    ];

    /**
     * @var array of nullable field names with a default value which will be supplied if they don't exist.
     */
    private static $NULLABLE_FIELDS = [
        'phones' => [],
        'issues' => [],
        'terminals' => [],
        'facilities' => [],
        'boardCodes' => [],
        'segmentCodes' => [],
        'interestPoints' => [],
        'rooms' => [],
        'wildcards' => [],
        'images' => [],
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