<?php
$app->post('/api/Kite/listOrders', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'apiSecret']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'order/';
    $dateTime = new DateTime($post_data['args']['timeSubmitted']);
    $post_data['args']['timeSubmitted'] = $dateTime->format('Y-m-d\TH:i:s.u\Z');
    $params = [
        'apiKey' => 'apiKey',
        'apiSecret' => 'apiSecret',
        'order_by'=> 'orderBy',
        'test_order'=>'testOrder',
        'error_exclude'=> 'errorExclude',
        'refund_requested'=> 'refundRequested',
        'time_submitted__gte'=> 'timeSubmitted',
        'offset'=> 'offset',
        'limit'=> 'limit'

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});