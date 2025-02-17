<?php
/**
 * ConsumerPlanGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/plan/$plan_id<[0-9]+>
     */
    public function getConsumerPlanByPlanId(string $plan_id): ConsumerPlanByPlanIdResource
    {
        return new ConsumerPlanByPlanIdResource(
            $plan_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/plan
     */
    public function getConsumerPlan(): ConsumerPlanResource
    {
        return new ConsumerPlanResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
