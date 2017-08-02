<?php
$app->post('/api/Kite/requestAssetUploadLinks', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'apiSecret', 'mimeTypes']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'asset/sign/';
    $paramNames = ["mimeTypes"];
    $post_data = \Models\ParamsModifier::arrayToString($post_data, $paramNames);
    $post_data['args']['client_asset'] = true;
    $params = [
        'apiKey' => 'apiKey',
        'apiSecret' => 'apiSecret',
        'mime_types' => 'mimeTypes',
        'client_asset' => 'client_asset'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});