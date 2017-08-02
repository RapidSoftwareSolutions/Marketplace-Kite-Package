<?php
$app->post('/api/Kite/orderHomeware', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'apiSecret', 'assets', 'customerPhone', 'templateType', 'recipientName', 'addressLine1', 'city', 'countryCode', 'postCode', 'amount', 'currency']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'print/';
    $post_data['args']['jobs'][0]['template_id'] = $post_data['args']['templateType'];
    $post_data['args']['jobs'][0]['assets'] = $post_data['args']['assets'];
    if (!empty($post_data['args']['shippingClass'])) {
        $post_data['args']['jobs'][0]['shipping_class'] = $post_data['args']['shippingClass'];
    }

    $post_data['args']['shipping_address']['recipient_name'] = $post_data['args']['recipientName'];
    $post_data['args']['shipping_address']['address_line_1'] = $post_data['args']['addressLine1'];
    if (!empty($post_data['args']['addressLine2'])) {
        $post_data['args']['shipping_address']['address_line_2'] = $post_data['args']['addressLine2'];
    }
    if (!empty($post_data['args']['addressLine3'])) {
        $post_data['args']['shipping_address']['address_line_3'] = $post_data['args']['addressLine3'];
    }
    if (!empty($post_data['args']['addressLine4'])) {
        $post_data['args']['shipping_address']['address_line_4'] = $post_data['args']['addressLine4'];
    }
    if (!empty($post_data['args']['countyState'])) {
        $post_data['args']['shipping_address']['county_state'] = $post_data['args']['countyState'];
    }
    $post_data['args']['shipping_address']['city'] = $post_data['args']['city'];
    $post_data['args']['shipping_address']['postcode'] = $post_data['args']['postCode'];
    $post_data['args']['shipping_address']['country_code'] = $post_data['args']['countryCode'];
    $post_data['args']['customer_payment']['amount'] = $post_data['args']['amount'];
    $post_data['args']['customer_payment']['currency'] = $post_data['args']['currency'];
    $params = [
        'apiKey' => 'apiKey',
        'apiSecret' => 'apiSecret',
        'proof_of_payment' => 'proofOfPayment',
        'jobs' => 'jobs',
        'customer_email' => 'customerEmail',
        'customer_phone' => 'customerPhone',
        'user_data' => 'userData',
        'customer_payment' => 'customer_payment',
        'shipping_address' => 'shipping_address'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});