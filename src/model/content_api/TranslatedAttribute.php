<?php
/**
 * Created by PhpStorm.
 * User: overseas
 * Date: 19/10/16
 * Time: 00:35
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;
use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class TranslatedAttribute
 *
 * @package hotelbeds\hotel_api_sdk\model
 * @property string languageCode
 * @property string content
 */
class TranslatedAttribute extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'languageCode' => 'string',
        'content' => 'string'
    ];
}
