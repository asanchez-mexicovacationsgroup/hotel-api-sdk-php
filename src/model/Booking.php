<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/24/2015
 * Time: 12:14 AM
 */

namespace hotelbeds\hotel_api_sdk\model;

/**
 * Class Booking
 * @package hotelbeds\hotel_api_sdk\model
 * @property string reference
 * @property string creationDate
 * @property float totalAmount
 * @property string currency
 * @property string status
 * @property array holder
 * @property float commisionVAT
 * @property array modificationPolicies
 */
class Booking extends ApiModel
{
    /**
     * Booking constructor.
     * @param array|null $data
     */
    public function __construct(array $data=null)
    {
        $this->validFields = [
            "reference" => "string",
            "creationDate" => "string",
            "totalAmount" => "float",
            "currency" => "string",
            "status" => "string",
            "holder" => "array",
            "commisionVAT" => "float",
            "remark" => "string",
            "hotel" => "array",
            'clientReference' => 'string',
            'totalNet' => 'float',
            'modificationPolicies' => 'array'
        ];

        if ($data !== null)
        {
            $this->sdkFields = $data;
        }
    }
}