<?php

/**
 * #%L
 * hotel-api-sdk
 * %%
 * Copyright (C) 2015 HOTELBEDS, S.L.U.
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 2.1 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Lesser Public License for more details.
 *
 * You should have received a copy of the GNU General Lesser Public
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/lgpl-2.1.html>.
 * #L%
 */

namespace hotelbeds\hotel_api_sdk\Tests;

use hotelbeds\hotel_api_sdk\helpers\BookingList;
use hotelbeds\hotel_api_sdk\messages\BookingListRS;
use hotelbeds\hotel_api_sdk\types\HotelSDKException;

class BookingApiTest extends SDKTestCase
{
    public function testBookingList()
    {
        $rqBookingLst = new BookingList();
        $rqBookingLst->start = \DateTime::createFromFormat("Y-m-d", "2016-04-01");
        $rqBookingLst->end = \DateTime::createFromFormat("Y-m-d", "2016-04-30");
        $rqBookingLst->from = 1;
        $rqBookingLst->to = 25;
        return $this->apiClient->BookingList($rqBookingLst);
    }

    /**
     * @depends testBookingList
     */

    public function testBookingListRS(BookingListRS $bkListRS)
    {
        $firstBooking = null;
        // Check is response is empty or not
        $this->assertFalse($bkListRS->isEmpty(), "Booking list is empty!");
        foreach ($bkListRS->bookings->iterator() as $reference => $booking)
        {
            $this->assertNotEmpty($reference);
            $this->assertNotEmpty($booking->creationDate);
            if ($booking->status === "CONFIRMED") {
                print_r($booking);
                $firstBooking = $booking->reference;
            }
        }

        return $firstBooking;
    }

    /**
     * @depends testBookingListRS
     */

    public function testBookingCancellation($bookingId)
    {
           try {
                $this->apiClient->bookingCancellation($bookingId);
           } catch (HotelSDKException $e) {
               echo "\n".$e->getMessage()."\n";
               $this->fail($e->getMessage());
           }
    }

    protected function tearDown()
    {

    }
}