<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:41 PM
 */

namespace hotelbeds\hotel_api_sdk\messages;


use hotelbeds\hotel_api_sdk\helpers\ContentApiParams;
use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiRequest;
use hotelbeds\hotel_api_sdk\types\ApiUri;

class SegmentListRQ extends ContentApiRequest
{
    /**
     * @param ApiUri $baseUri
     * @param ContentApiParams $data
     */
    public function __construct(ApiUri $baseUri, ContentApiParams $data)
    {
        parent::__construct($baseUri, self::SEGMENTS);
        $this->setDataRequest($data);
    }
}