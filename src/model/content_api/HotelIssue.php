<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 10:55 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class HotelIssue
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string issueCode Incident code
 * @property string issueType Incident type code
 * @property boolean alternative  Alternative to the incidence
 * @property integer order Issue Order in case there is more than one
 * @property string dateFrom Date from when the issue will start. Format YYYY-MM-DD HH:MM:SS
 * @property string dateTo Date when the issue will end.  Format YYYY-MM-DD HH:MM:SS
 */
class HotelIssue extends ApiModel
{
    protected $validFields = [
        'issueCode' => 'string',
        'issueType' => 'string',
        'alternative' => 'boolean',
        'order' => 'integer',
        'dateFrom' => 'string',
        'dateTo' => 'string',
    ];
}