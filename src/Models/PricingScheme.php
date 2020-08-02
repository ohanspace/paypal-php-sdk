<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class PricingScheme extends PayPalModel
{


    public function __construct(Money $fixed_price)
    {
        $this->setFixed_price($fixed_price);
    }


    /**
     * Get the value of fixed_price
     */
    public function getFixed_price()
    {
        return $this->fixed_price;
    }

    /**
     * Set the value of fixed_price
     *
     * @return  self
     */
    public function setFixed_price(Money $fixed_price)
    {
        $this->fixed_price = $fixed_price;

        return $this;
    }
}
