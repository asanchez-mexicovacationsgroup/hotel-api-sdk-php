<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/29/2015
 * Time: 5:12 PM
 */

namespace hotelbeds\hotel_api_sdk\helpers;

use hotelbeds\hotel_api_sdk\model\Holder;
use hotelbeds\hotel_api_sdk\model\PaymentData;

/**
 * Class Booking
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string reference
 * @property string creationDate
 * @property float totalAmount
 * @property string currency
 * @property string status
 * @property array holder
 * @property float commisionVAT
 * @property array modificationPolicies
 */
class Booking extends ApiHelper
{
    public function __construct()
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
    }
}
