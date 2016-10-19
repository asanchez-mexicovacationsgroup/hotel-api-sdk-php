<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 1:53 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Currency
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Internal currency code
 * @property TranslatedAttribute description Description of the currency
 * @property string currencyType Indication for which rate type will be returned. Only values "LIBERATE", "BOTH"
 */
class Currency extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'description' => TranslatedAttribute::class,
        'currencyType' => 'string',
    ];
}