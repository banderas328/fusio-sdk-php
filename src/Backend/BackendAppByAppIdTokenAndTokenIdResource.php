<?php
/**
 * BackendAppByAppIdTokenAndTokenIdResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAppByAppIdTokenAndTokenIdResource extends ResourceAbstract
{
    private string $url;

    private string $app_id;
    private string $token_id;

    public function __construct(string $app_id, string $token_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->app_id = $app_id;
        $this->token_id = $token_id;
        $this->url = $this->baseUrl . '/backend/app/' . $app_id . '/token/' . $token_id . '';
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionAppDeleteToken(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
