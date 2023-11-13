<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AutoResume implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $automaticallyResumeAt;

    /**
     * Returns Automatically Resume At.
     */
    public function getAutomaticallyResumeAt(): ?string
    {
        return $this->automaticallyResumeAt;
    }

    /**
     * Sets Automatically Resume At.
     *
     * @maps automatically_resume_at
     */
    public function setAutomaticallyResumeAt(?string $automaticallyResumeAt): void
    {
        $this->automaticallyResumeAt = $automaticallyResumeAt;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->automaticallyResumeAt)) {
            $json['automatically_resume_at'] = $this->automaticallyResumeAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
