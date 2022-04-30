<?php
/**
 * BackendLogErrorByErrorIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */


use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendLogErrorByErrorIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $error_id;

    public function __construct(string $error_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->error_id = $error_id;
        $this->url = $this->baseUrl . '/backend/log/error/' . $error_id . '';
    }

    /**
     * @return Log_Error
     */
    public function backendActionLogErrorGet(): Log_Error
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Log_Error::class);
    }

}
