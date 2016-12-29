<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 12/22/2015
 * Time: 1:25 AM
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\helpers\BookingCancellation;
use hotelbeds\hotel_api_sdk\messages\contracts\ApiRequest;
use hotelbeds\hotel_api_sdk\types\ApiUri;
use Zend\Http\Request;
use Zend\Stdlib\Parameters;

/**
 * Class BookingCancellationRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class BookingCancellationRQ extends ApiRequest
{
    /**
     * BookingCancellationRQ constructor.
     * @param ApiUri $baseUri
     * @param BookingCancellation $cancellation
     */
    public function __construct(ApiUri $baseUri, BookingCancellation $cancellation)
    {
        parent::__construct($baseUri, self::BOOKING);
        $this->request->setMethod(Request::METHOD_DELETE);
        $this->baseUri->setPath($baseUri->getPath() . "/" . self::BOOKING . "/" .
            $cancellation->bookingReference);

        if ($cancellation->simulate) {
            $this->request->setQuery(new Parameters([
                'cancellationFlag' => 'SIMULATION'
            ]));
        }
    }
}