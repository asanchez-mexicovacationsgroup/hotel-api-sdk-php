<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/9/2015
 * Time: 12:07 AM
 */

namespace hotelbeds\hotel_api_sdk\model;

/**
 * Class AuditData
 * @package hotelbeds\hotel_api_sdk\model
 * @property float $processTime Server process time in miliseconds
 * @property \DateTime $timestamp Date/time when the requests has been processed. Always returned at spanish time
 * @property string $serverId Server code or ID(It is for internal use)
 * @property string $environment Environment where the request has been sent and processed
 * @property string $requestHost Request origin host name
 * @property string $release Release of service
 */
class AuditData extends ApiModel
{
    /**
     * AuditData constructor.
     * @param array|null $data Data response
     */
    public function __construct(array $data=null)
    {
        $this->validFields = [
            "processTime" => "float",
            "timestamp" => "string",
            "serverId" => "string",
            "requestHost" => "string",
            "environment" => "string",
            "release" => "integer"
        ];

        if ($data !== null)
        {
            $this->sdkFields = $data;
        }
    }
}