<?php
$app->post('/api/Kite/listCustomers', function ($request, $response, $args) {
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

    $query_str = $settings['api_url'] . 'person/';
    $dateTime = new DateTime($post_data['args']['createdBefore']);
    $post_data['args']['createdBefore'] = $dateTime->format('Y-m-d\TH:i:s.u\Z');
    $paramNames = ["country"];
    $post_data = \Models\ParamsModifier::arrayToString($post_data, $paramNames);
    $params = [
        'apiKey' => 'apiKey',
        'apiSecret' => 'apiSecret',
        'customer' => 'customer',
        'country' => 'country',
        'order_count__gt' => 'orderCountMore',
        'order_count__lt' => 'orderCountLess',
        'last_ordered_date__lt' => 'lastOrderedDateMore',
        'last_ordered_date__gt' => 'lastOrderedDateLess',
        'push_token__isset' => 'pushTokenIsset',
        'created__lte' => 'createdBefore',
        'live_person' => 'livePerson',
        'offset'=> 'offset',
        'limit'=> 'limit'

    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});