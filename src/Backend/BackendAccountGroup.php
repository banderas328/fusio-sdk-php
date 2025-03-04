<?php
/**
 * BackendAccountGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendAccountGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/account/change_password
     */
    public function getBackendAccountChangePassword(): BackendAccountChangePasswordResource
    {
        return new BackendAccountChangePasswordResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/account
     */
    public function getBackendAccount(): BackendAccountResource
    {
        return new BackendAccountResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
