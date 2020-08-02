<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class SubscriberRequest extends PayPalModel
{

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email_address
     */
    public function getEmail_address()
    {
        return $this->email_address;
    }

    /**
     * Set the value of email_address
     *
     * @return  self
     */
    public function setEmail_address($email_address)
    {
        $this->email_address = $email_address;

        return $this;
    }

    /**
     * Get the value of payer_id
     */
    public function getPayer_id()
    {
        return $this->payer_id;
    }

    /**
     * Set the value of payer_id
     *
     * @return  self
     */
    public function setPayer_id($payer_id)
    {
        $this->payer_id = $payer_id;

        return $this;
    }

    /**
     * Get the value of shipping_address
     */
    public function getShipping_address()
    {
        return $this->shipping_address;
    }

    /**
     * Set the value of shipping_address
     *
     * @return  self
     */
    public function setShipping_address($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }
}
