<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 5:16 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

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
 * @property array issues List of incidences, reparations that the hotel is involved in
 * @property array terminals List of terminals associated to the hotel and their distance to the hotel.
 * @property array facilities List of facilities, amenities and installations in the hotel.
 * @property array boardCodes List of the board types offered at the hotel
 * @property array segmentCodes List of the internal segments to which the hotel belongs (Business hotel, city hotel,...)
 * @property array interestPoints List of Points of Interest close to the hotel
 * @property array rooms List of available rooms at the hotel
// * @property array roomFacilities List of facilities, amenities and installations in the room of the hotel.
// * @property array roomStays List of the different departments in which the room is divided
// * @property array facilityList List of facilities, amenities and installations in the department of the room.
 * @property array wildcards List of hotel room descriptions
 * @property array images List of hotel pictures
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
        'coordinates' => 'Coordinate',
        'categoryCode' => 'string',
        'chainCode' => 'string',
        'description' => TranslatedAttribute::class,
        'address' => TranslatedAttribute::class,
        'postalCod' => 'string',
        'cit' => TranslatedAttribute::class,
        'emai' => 'string',
        'web' => 'string',
        'giataCode' => 'double',
        'license' => 'string',
        'phones' => Phones::class,
        'issues' => 'array',
        'terminals' => 'array',
        'facilities' => 'array',
        'boardCodes' => 'array',
        'segmentCodes' => 'array',
        'interestPoints' => 'array',
        'rooms' => 'array',
        'wildcards' => 'array',
        'images' => 'array',
    ];
}