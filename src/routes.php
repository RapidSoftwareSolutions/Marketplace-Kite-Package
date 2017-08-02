       <?php
       $routes = [
       'webhookEvent',
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
        'requestAssetUploadLinks',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

