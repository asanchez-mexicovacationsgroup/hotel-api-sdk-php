<?php
/**
 * Created by PhpStorm.
 * User: overseas
 * Date: 19/10/16
 * Time: 00:35
 */

namespace hotelbeds\hotel_api_sdk\model;

/**
 * Class TranslatedAttribute
 *
 * @package hotelbeds\hotel_api_sdk\model
 * @property string languageCode
 * @property string content
 */
class TranslatedAttribute extends ApiModel
{
    public function __construct(array $data = null)
    {
        $this->validFields = [
            'languageCode',
            'content'
        ];

        if ($data !== null) {
            $this->fields = $data;
        }
    }
}
