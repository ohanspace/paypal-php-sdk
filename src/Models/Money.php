<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class Money extends PayPalModel
{
    // public $currency_code;
    // public $value;

    public function __construct($value, $currency_code)
    {
        $this->setValue($value);
        $this->setCurrency_code($currency_code);
    }
    
    /**
     * Get the value of currency_code
     */
    public function getCurrency_code()
    {
        return $this->currency_code;
    }

    /**
     * Set the value of currency_code
     *
     * @return  self
     */
    public function setCurrency_code($currency_code)
    {
        $this->currency_code = $currency_code;

        return $this;
    }

    /**
     * Get the value of value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
