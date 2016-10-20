<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:28 AM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class HotelImage
 * @package hotelbeds\hotel_api_sdk\model\content_api
 * @property string imageTypeCode Specifies where has the picture been taken (you can see the possible values in the response of types/imagetypes operation).
 * @property string path URL of the image. For hotel images, we do not return the full path. Note that one of the following paths must be added by the client.
 * @property integer order Order in which the images are shown in the web page
 * @property string roomCode Identifier of the room type
 * @property string roomType Internal Room type code, returned only for Unified clients.
 * @property string characteristicCode Characteristic code/s of the room
 */
class HotelImage extends ApiModel
{
    protected $validFields = [
        'imageTypeCode' => 'string',
        'path' => 'string',
        'order' => 'integer',
        'roomCode' => 'string',
        'roomType' => 'string',
        'characteristicCode' => 'string',
    ];
}