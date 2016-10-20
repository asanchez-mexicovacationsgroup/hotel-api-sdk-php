<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:04 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class HotelFacility
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property integer facilityCode Code of the Facility
 * @property integer facilityGroupCode Group to which the facility belongs
 * @property integer order Order of facility in case there is more than one facility at the hotel
 * @property integer number Numeric value of the facility
 * @property boolean indLogic Indicator if the facility exists at the hotel or not
 * @property boolean indFee Indicator if the facility has cost or not at the establishment
 * @property integer distance Distance in meters to the facility
 * @property integer ageFrom Minimum age to access the facility
 * @property integer ageTo Maximum age to access the facility
 * @property string textValue Text value of the facility
 * @property string dateFrom Date from when the facility is valid. Format YYYY-MM-DD HH:MM:SS
 * @property string dateTo Date until the facility is valid. Format YYYY-MM-DD HH:MM:SS
 * @property string timeFrom Time from where the facility is valid.  Format YYYY-MM-DD HH:MM:SS
 * @property string timeTo Time until the facility is valid. Format YYYY-MM-DD HH:MM:SS
 * @property boolean indYesOrNo Indicator if the mandatory facility exists at the hotel or not
 * @property float amount Amount of the facility fee. 15 digits (5 can be decimals)
 * @property string currency Currency of the facility fee
 * @property string applicationType Application type of the facility fee
 */
class HotelFacility extends ApiModel
{
    protected $validFields = [
        'facilityCode' => 'integer',
        'facilityGroupCode' => 'integer',
        'order' => 'integer',
        'number' => 'integer',
        'indLogic' => 'boolean',
        'indFee' => 'boolean',
        'distance' => 'integer',
        'ageFrom' => 'integer',
        'ageTo' => 'integer',
        'textValue' => 'string',
        'dateFrom' => 'string',
        'dateTo' => 'string',
        'timeFrom' => 'string',
        'timeTo' => 'string',
        'indYesOrNo' => 'boolean',
        'amount' => 'float',
        'currency' => 'string',
        'applicationType' => 'string',
    ];
}