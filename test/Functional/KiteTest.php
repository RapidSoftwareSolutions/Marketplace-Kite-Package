<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class KiteTest extends BaseTestCase
{

    public function testListMetrics()
    {

        $routes = [
            'searchAddressByAddressId',
            'searchAddressBySearchTerm',
            'getCustomerDetails',
            'listCustomers',
            'getShippingMethodsByTemplate',
            'listShippingMethods',
            'getOrderStatus',
            'listOrders',
            'orderInvitation',
            'orderGreetingCard',
            'orderPostcard',
            'orderPhotobookByPDF',
            'orderPhotobookByJson',
            'orderSublimationApparel',
            'orderDTGApparel',
            'orderHomeware',
            'orderPhoneCase',
            'orderPrintProduct',
            'uploadAsset',
            'requestAssetUploadLinks'

        ];

        foreach ($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Kite/' . $file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in ' . $file . ' method');
        }
    }

}
