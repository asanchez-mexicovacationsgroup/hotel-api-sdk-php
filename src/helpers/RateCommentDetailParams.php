<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 11/28/2016
 * Time: 4:39 PM
 */

namespace hotelbeds\hotel_api_sdk\helpers;

/**
 * Class RateCommentDetailParams
 * The ratecommentdetails request parameters
 *
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string code the rate comments id returned as 'rateCommentsId'.
 * @property string date checkIn date.
 * @property string language Language in which results will be returned.
 */
class RateCommentDetailParams extends ApiHelper
{
    public function __construct()
    {
        $this->validFields = [
            'code' => 'string',
            'date' => 'string',
            'language' => 'string',
        ];
    }
}