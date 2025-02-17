<?php
/**
 * ConsumerSubscriptionBySubscriptionIdResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerSubscriptionBySubscriptionIdResource extends ResourceAbstract
{
    private string $url;

    private string $subscription_id;

    public function __construct(string $subscription_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->subscription_id = $subscription_id;
        $this->url = $this->baseUrl . '/consumer/subscription/' . $subscription_id . '';
    }

    /**
     * @return Event_Subscription
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionGet(): Event_Subscription
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Event_Subscription::class);
    }

    /**
     * @param Event_Subscription_Update $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionUpdate(Event_Subscription_Update $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
