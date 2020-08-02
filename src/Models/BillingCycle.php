<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class BillingCycle extends PayPalModel
{

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

    /**
     * Get the value of frequency
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set the value of frequency
     *
     * @return  self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get the value of tenure_type
     */
    public function getTenure_type()
    {
        return $this->tenure_type;
    }

    /**
     * Set the value of tenure_type
     * 
     * REGULAR/TRIAL
     *
     * @return  self
     */
    public function setTenure_type($tenure_type)
    {
        $this->tenure_type = $tenure_type;

        return $this;
    }

    /**
     * Get the value of sequence
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set the value of sequence
     *
     * @return  self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get the value of total_cycles
     */
    public function getTotal_cycles()
    {
        return $this->total_cycles;
    }

    /**
     * Set the value of total_cycles
     *
     * @return  self
     */
    public function setTotal_cycles($total_cycles)
    {
        $this->total_cycles = $total_cycles;

        return $this;
    }
}
