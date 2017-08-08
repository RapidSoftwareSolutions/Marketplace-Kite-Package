<?php
$app->post('/api/Kite/uploadAsset', function ($request, $response, $args) {
    $settings = $this->settings;
    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['signedAssetLink', 'asset', 'mimeType']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $post_data['args']['signedAssetLink'] ;
    $body = array();
    $body[] = [
        'name'     => 'file',
        'contents' => fopen($post_data['args']['file'], 'r')
    ];

    //requesting remote API
    $client = new GuzzleHttp\Client();
    try {
        $resp = $client->request('PUT', $query_str, [
            'headers'=>[
                "x-amz-acl" => 'private',
                "Content-Type" => $post_data['args']['mimeType']
            ],
            'multipart' => $body
        ]);
        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());
        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = ['result'=>'uploaded'];
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }
    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $responseBody= $exception->getResponse()->getBody()->getContents();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;
    } catch (GuzzleHttp\Exception\ServerException $exception) {
        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);
    } catch (GuzzleHttp\Exception\BadResponseException $exception) {
        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);
    }
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});