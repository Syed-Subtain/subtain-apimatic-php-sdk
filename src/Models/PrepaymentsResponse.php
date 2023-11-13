<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaymentsResponse implements \JsonSerializable
{
    /**
     * @var Prepayment1[]|null
     */
    private $prepayments;

    /**
     * Returns Prepayments.
     *
     * @return Prepayment1[]|null
     */
    public function getPrepayments(): ?array
    {
        return $this->prepayments;
    }

    /**
     * Sets Prepayments.
     *
     * @maps prepayments
     *
     * @param Prepayment1[]|null $prepayments
     */
    public function setPrepayments(?array $prepayments): void
    {
        $this->prepayments = $prepayments;
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
        if (isset($this->prepayments)) {
            $json['prepayments'] = $this->prepayments;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
