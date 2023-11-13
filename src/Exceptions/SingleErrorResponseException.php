<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SingleErrorResponseException extends ApiException
{
    /**
     * @var string|null
     */
    private $error;

    /**
     * Returns Error.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
    }
}
