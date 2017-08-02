<?php
namespace Models;

use GuzzleHttp\Client;

class RequestFacade
{

    public function makeRequest(Client $client, array $params, array $post_data, string $query_str, string $method, string $paramType)
    {

        foreach ($params as $key => $value) {
            if (!empty($post_data['args'][$value])) {
                $body[$key] = $post_data['args'][$value];
            }
        }
        $auth = 'ApiKey ' . $post_data['args']['apiKey'] . ':' . $post_data['args']['apiSecret'];
        unset($body['apiKey']);
        unset($body['apiSecret']);
        $result = $client->request($method, $query_str, [
            'headers' => [
                'Authorization' => $auth
            ],
            $paramType => $body
        ]);

        return $result;
    }

}
