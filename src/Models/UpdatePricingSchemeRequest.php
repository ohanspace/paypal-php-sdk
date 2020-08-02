<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class UpdatePricingSchemeRequest extends PayPalModel
{

    /**
     * Get the value of billing_cycle_sequence
     */
    public function getBilling_cycle_sequence()
    {
        return $this->billing_cycle_sequence;
    }

    /**
     * Set the value of billing_cycle_sequence
     *
     * @return  self
     */
    public function setBilling_cycle_sequence($billing_cycle_sequence)
    {
        $this->billing_cycle_sequence = $billing_cycle_sequence;

        return $this;
    }

    /**
     * Get the value of pricing_scheme
     */
    public function getPricing_scheme()
    {
        return $this->pricing_scheme;
    }

    /**
     * Set the value of pricing_scheme
     *
     * @return  self
     */
    public function setPricing_scheme($pricing_scheme)
    {
        $this->pricing_scheme = $pricing_scheme;

        return $this;
    }
}
