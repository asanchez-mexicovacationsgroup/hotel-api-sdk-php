<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:44
 */

namespace hotelbeds\hotel_api_sdk\helpers;

/**
 * Class ContentApi
 * Represents a model for content api requests
 *
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string $fields List of fields you want to receive in the response. (each request has fields list, all of them has 'all' option)
 * @property string $lastUpdateTime Specifying this parameter will limit the results to those modified or added after the date specified. The allowed format is YYYY-MM-DD
 * @property string $language Language Code in which you want the descriptions to be returned. If it is not indicated English is the default language.
 * @property integer $from Number of the initial record to receive, if nothing is indicated 1 is the default value.
 * @property integer $to Number of the final record to receive, if nothing is indicated 100 is the default value.
 */
class ContentApiParams extends ApiHelper
{
    public function __construct()
    {
        $this->validFields = [
            'fields' => 'string',
            'lastUpdateTime' => 'string',
            'language' => 'string',
            "from" => "integer",
            "to" => "integer",
        ];
    }
}
