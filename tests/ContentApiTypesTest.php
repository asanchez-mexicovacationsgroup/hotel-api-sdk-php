<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 2:00 PM
 */

namespace hotelbeds\hotel_api_sdk\Tests;


use hotelbeds\hotel_api_sdk\helpers\ContentApiParams;
use hotelbeds\hotel_api_sdk\messages\AccommodationListRS;

class ContentApiTypesTest extends SDKTestCase
{
    public function testAccommodationList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        return $this->apiClient->accommodationList($data);
    }

    /**
     * @depends testAccommodationList
     * @param AccommodationListRS $response
     */
    public function testAccommodationRS(AccommodationListRS $response)
    {
        foreach ($response as $accommodation) {
            $this->assertNotEmpty($accommodation->code);
        }
    }

    public function testBoardList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->boardList($data);

        foreach ($response as $board) {
            $this->assertNotEmpty($board->code);
        }
    }

    public function testCategoryList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->categoryList($data);

        foreach ($response as $category) {
            $this->assertNotEmpty($category->code);
        }
    }

    public function testChainList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->chainList($data);

        foreach ($response as $chain) {
            $this->assertNotEmpty($chain->code);
        }
    }

    public function testCurrencyList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;
        $data->lastUpdateTime = '2015-09-10';

        $response = $this->apiClient->currencyList($data);

        foreach ($response as $currency) {
            $this->assertNotEmpty($currency->code);
        }
    }

    public function testFacilityList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->facilityList($data);

        foreach ($response as $facility) {
            $this->assertNotEmpty($facility->code);
        }
    }

    public function testFacilityGroupList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->facilityGroupList($data);

        foreach ($response as $facilityGroup) {
            $this->assertNotEmpty($facilityGroup->code);
        }
    }

    public function testFacilityTypologyList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->facilityTypologyList($data);

        foreach ($response as $facilityTypology) {
            $this->assertNotEmpty($facilityTypology->code);
        }
    }

    public function testIssueList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->issueList($data);

        foreach ($response as $issue) {
            $this->assertNotEmpty($issue->code);
        }
    }

    public function testLanguageList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->languageList($data);

        foreach ($response as $language) {
            $this->assertNotEmpty($language->code);
        }
    }

    public function testPromotionList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->promotionList($data);

        foreach ($response as $promotion) {
            $this->assertNotEmpty($promotion->code);
        }
    }

    public function testSegmentList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->segmentList($data);

        foreach ($response as $segment) {
            $this->assertNotEmpty($segment->code);
        }
    }

    public function testTerminalList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->terminalList($data);

        foreach ($response as $terminal) {
            $this->assertNotEmpty($terminal->code);
        }
    }

    public function testImageTypeList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->imageTypeList($data);

        foreach ($response as $imageType) {
            $this->assertNotEmpty($imageType->code);
        }
    }

    public function testCategoryGroupList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->categoryGroupList($data);

        foreach ($response as $categoryGroup) {
            $this->assertNotEmpty($categoryGroup->code);
        }
    }

    public function testRateCommentList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->rateCommentList($data);

        foreach ($response as $rateComment) {
            $this->assertNotEmpty($rateComment->code);
        }
    }

    public function testRoomTypeList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        $response = $this->apiClient->roomTypeList($data);

        foreach ($response as $roomType) {
            $this->assertNotEmpty($roomType->code);
        }
    }
}