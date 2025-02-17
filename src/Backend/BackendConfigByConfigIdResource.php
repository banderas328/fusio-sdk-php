<?php
/**
 * BackendConfigByConfigIdResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendConfigByConfigIdResource extends ResourceAbstract
{
    private string $url;

    private string $config_id;

    public function __construct(string $config_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->config_id = $config_id;
        $this->url = $this->baseUrl . '/backend/config/' . $config_id . '';
    }

    /**
     * @return Config
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionConfigGet(): Config
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Config::class);
    }

    /**
     * @param Config_Update $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionConfigUpdate(Config_Update $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
