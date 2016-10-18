<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:44
 */

namespace hotelbeds\hotel_api_sdk\helpers;

/**
 * Class Paginatable
 *
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string $language
 * @property integer $from
 * @property integer $to
 */
class Paginatable extends ApiHelper
{
    public function __construct()
    {
        $this->validFields = [
            'language' => 'string',
            "from" => "integer",
            "to" => "integer",
        ];
    }
}
