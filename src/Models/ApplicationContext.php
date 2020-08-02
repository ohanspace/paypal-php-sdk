<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class ApplicationContext extends PayPalModel
{
   
    /**
     * Get the value of return_url
     */
    public function getReturn_url()
    {
        return $this->return_url;
    }

    /**
     * Set the value of return_url
     *
     * @return  self
     */
    public function setReturn_url($return_url)
    {
        $this->return_url = $return_url;

        return $this;
    }

    /**
     * Get the value of cancel_url
     */
    public function getCancel_url()
    {
        return $this->cancel_url;
    }

    /**
     * Set the value of cancel_url
     *
     * @return  self
     */
    public function setCancel_url($cancel_url)
    {
        $this->cancel_url = $cancel_url;

        return $this;
    }

    /**
     * Get the value of brand_name
     */
    public function getBrand_name()
    {
        return $this->brand_name;
    }

    /**
     * Set the value of brand_name
     *
     * @return  self
     */
    public function setBrand_name($brand_name)
    {
        $this->brand_name = $brand_name;

        return $this;
    }

    /**
     * Get the value of payment_method
     */
    public function getPayment_method()
    {
        return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     *
     * @return  self
     */
    public function setPayment_method($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }
}
