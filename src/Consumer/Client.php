<?php
/**
 * Client generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function __construct(string $baseUrl, ?CredentialsInterface $credentials = null, ?TokenStoreInterface $tokenStore = null, ?array $scopes = null)
    {
        parent::__construct($baseUrl, $credentials, $tokenStore, $scopes);
    }

    /**
     * Tag: consumer.user
     */
    public function consumerUser(): ConsumerUserGroup
    {
        return new ConsumerUserGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.transaction
     */
    public function consumerTransaction(): ConsumerTransactionGroup
    {
        return new ConsumerTransactionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.subscription
     */
    public function consumerSubscription(): ConsumerSubscriptionGroup
    {
        return new ConsumerSubscriptionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.scope
     */
    public function consumerScope(): ConsumerScopeGroup
    {
        return new ConsumerScopeGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.plan
     */
    public function consumerPlan(): ConsumerPlanGroup
    {
        return new ConsumerPlanGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.payment
     */
    public function consumerPayment(): ConsumerPaymentGroup
    {
        return new ConsumerPaymentGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.page
     */
    public function consumerPage(): ConsumerPageGroup
    {
        return new ConsumerPageGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.log
     */
    public function consumerLog(): ConsumerLogGroup
    {
        return new ConsumerLogGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.grant
     */
    public function consumerGrant(): ConsumerGrantGroup
    {
        return new ConsumerGrantGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.event
     */
    public function consumerEvent(): ConsumerEventGroup
    {
        return new ConsumerEventGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.app
     */
    public function consumerApp(): ConsumerAppGroup
    {
        return new ConsumerAppGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

}
