<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:12 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class HotelIterestPoint
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property integer facilityCode Code of the Facility
 * @property integer facilityGroupCode Group to which the facility belongs
 * @property integer order Order of facility in case there is more than one facility at the hotel
 * @property string poiName Internal description of the point of interest.
 * @property boolean indFee Indicator if the facility has cost or not at the establishment
 * @property integer distance Distance in meters to the point of interest
 */
class HotelInterestPoint extends ApiModel
{
    protected $validFields = [
        'facilityCode' => 'integer',
        'facilityGroupCode' => 'integer',
        'order' => 'integer',
        'poiName' => 'string',
        'indFee' => 'boolean',
        'distance' => 'integer',
    ];
}