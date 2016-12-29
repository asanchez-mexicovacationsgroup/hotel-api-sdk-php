<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 12/29/2016
 * Time: 4:28 PM
 */

namespace hotelbeds\hotel_api_sdk\helpers;

/**
 * Class BookingCancellation
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string $bookingReference
 * @property boolean $simulate (optional) default to false.
 */
class BookingCancellation extends ApiHelper
{
    protected $validFields = [
        'bookingReference' => 'string',
        'simulate' => 'boolean'
    ];

    public function __construct()
    {
        $this->simulate = false;
    }
}