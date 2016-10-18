<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\model;

/**
 * Class Country
 *
 * @package hotelbeds\hotel_api_sdk\model
 * @property string              code
 * @property string              isoCode
 * @property TranslatedAttribute description
 */
class Country extends ApiModel
{
    public function __construct(array $data = null)
    {
        $this->validFields = [
            'code', 'isoCode', 'description'
        ];
    }
}
