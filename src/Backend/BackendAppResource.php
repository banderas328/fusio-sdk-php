<?php
/**
 * BackendAppResource generated on 2022-04-30
 * @see https://sdkgen.app
 */


use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAppResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/app';
    }

    /**
     * @param Collection_Query $query
     * @return App_Collection
     */
    public function backendActionAppGetAll(?Collection_Query $query = null): App_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, App_Collection::class);
    }

    /**
     * @param App_Create $data
     * @return Message
     */
    public function backendActionAppCreate(?App_Create $data = null): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
