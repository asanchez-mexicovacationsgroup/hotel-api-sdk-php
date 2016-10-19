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
 * Class FacilityTypology
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property integer code Typology code that the facility belongs to.
 * @property boolean numberFlag Indicator if the Number Value will be returned
 * @property boolean logicFlag Indicator if the Logic Value will be returned
 * @property boolean feeFlag Indicator if the Fee Value will be returned
 * @property boolean distanceFlag Indicator if the distance Value will be returned
 * @property boolean ageFromFlag Indicator if the ageFrom Value will be returned
 * @property boolean ageToFlag Indicator if the ageTo Value will be returned
 * @property boolean dateFromFlag Indicator if the dateFrom Value will be returned
 * @property boolean dateToFlag Indicator if the dateTo Value will be returned
 * @property boolean timeFromFlag Indicator if the timeFrom Value will be returned
 * @property boolean timeToFlag Indicator if the timeTo Value will be returned
 * @property boolean indYesOrNoFlag Indicator if the YesOrNo Value will be returned
 * @property boolean amountFlag Indicator if the amount Value will be returned
 * @property boolean currencyFlag Indicator if the currency Value will be returned
 * @property boolean appTypeFlag Indicator if the appType Value will be returned
 * @property boolean textFlag Indicator if the Text Value will be returned
 */
class FacilityTypology extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'integer',
        'numberFlag' => 'boolean',
        'logicFlag' => 'boolean',
        'feeFlag' => 'boolean',
        'distanceFlag' => 'boolean',
        'ageFromFlag' => 'boolean',
        'ageToFlag' => 'boolean',
        'dateFromFlag' => 'boolean',
        'dateToFlag' => 'boolean',
        'timeFromFlag' => 'boolean',
        'timeToFlag' => 'boolean',
        'indYesOrNoFlag' => 'boolean',
        'amountFlag' => 'boolean',
        'currencyFlag' => 'boolean',
        'appTypeFlag' => 'boolean',
        'textFlag' => 'boolean',
    ];
}