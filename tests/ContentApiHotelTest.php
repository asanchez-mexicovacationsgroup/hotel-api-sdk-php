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


use hotelbeds\hotel_api_sdk\helpers\HotelListParams;

class ContentApiHotelTest extends SDKTestCase
{
    public function testHotelList()
    {
        $params = new HotelListParams();
        $params->fields = 'all';
        $params->from = 0;
        $params->to = 1;
        $params->language = 'ENG';
//        $params->countryCode = 'TUR';

        $hotels = $this->apiClient->hotelList($params);
        foreach ($hotels as $hotel) {
            $this->assertNotEmpty($hotel->code);
            $this->assertNotEmpty($hotel->name->content);
            $this->assertNotEmpty($hotel->coordinates->latitude);
            $this->assertNotEmpty($hotel->coordinates->longitude);


            foreach ($hotel->phones as $phone) {
                $this->assertNotEmpty($phone->phoneNumber);
            }

            foreach ($hotel->issues as $issue) {
                $this->assertNotEmpty($issue->issueCode);
            }

            foreach ($hotel->terminals as $terminal) {
                $this->assertNotEmpty($terminal->terminalCode);
            }

            foreach ($hotel->facilities as $facility) {
                $this->assertNotEmpty($facility->facilityCode);
            }

            foreach ($hotel->boardCodes as $boardCode) {
                $this->assertNotEmpty($boardCode);
            }

            foreach ($hotel->segmentCodes as $segmentCode) {
                $this->assertNotEmpty($segmentCode);
            }

            foreach ($hotel->interestPoints as $interestPoint) {
                $this->assertNotEmpty($interestPoint->facilityCode);
            }

            foreach ($hotel->rooms as $room) {
                $this->assertNotEmpty($room->roomCode);

                foreach ($room->roomFacilities as $facility) {
                    $this->assertNotEmpty($facility->facilityCode);
                }

                foreach ($room->roomStays as $roomStay) {
                    $this->assertNotEmpty($roomStay->stayType);

                    foreach ($roomStay->facilityList as $facility) {
                        $this->assertNotEmpty($facility->facilityCode);
                    }
                }
            }

            foreach ($hotel->wildcards as $wildCard) {
                $this->assertNotEmpty($wildCard->roomType);
            }

            foreach ($hotel->images as $image) {
                $this->assertNotEmpty($image->imageTypeCode);
                $this->assertNotEmpty($image->path);
            }

        }
    }
}
