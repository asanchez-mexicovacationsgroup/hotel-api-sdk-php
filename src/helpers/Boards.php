<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 11/8/2016
 * Time: 12:38 PM
 */

namespace hotelbeds\hotel_api_sdk\helpers;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Boards
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property array board
 * @property boolean included
 */
class Boards extends ApiModel
{
    public function __construct()
    {
        parent::__construct();

        $this->validFields = [
            'board' => 'array',
            'included' => 'boolean'
        ]; }
}