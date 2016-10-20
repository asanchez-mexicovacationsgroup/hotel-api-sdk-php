<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:41 PM
 */

namespace hotelbeds\hotel_api_sdk\messages;


use hotelbeds\hotel_api_sdk\helpers\HotelListParams;
use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiRequest;
use hotelbeds\hotel_api_sdk\types\ApiUri;

class HotelListRQ extends ContentApiRequest
{
    /**
     * @param ApiUri $baseUri
     * @param HotelListParams $data
     */
    public function __construct(ApiUri $baseUri, HotelListParams $data)
    {
        parent::__construct($baseUri, self::HOTELS);
        $this->setDataRequest($data);
    }
}