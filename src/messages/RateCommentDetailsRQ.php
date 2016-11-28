<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 11/28/2016
 * Time: 5:11 PM
 */

namespace hotelbeds\hotel_api_sdk\messages;


use hotelbeds\hotel_api_sdk\helpers\RateCommentDetailParams;
use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiRequest;
use hotelbeds\hotel_api_sdk\types\ApiUri;

/**
 * Class RateCommentDetailsRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class RateCommentDetailsRQ extends ContentApiRequest
{
    /**
     * ChainsListRQ constructor.
     * @param ApiUri $baseUri
     * @param RateCommentDetailParams $data
     */
    public function __construct(ApiUri $baseUri, RateCommentDetailParams $data)
    {
        parent::__construct($baseUri, self::RATECOMMENTDETAILS);
        $this->setDataRequest($data);
    }
}