<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class Plan extends PayPalModel
{

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of product_id
     */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of quantity_supported
     */
    public function getQuantity_supported()
    {
        return $this->quantity_supported;
    }

    /**
     * Set the value of quantity_supported
     *
     * @return  self
     */
    public function setQuantity_supported($quantity_supported)
    {
        $this->quantity_supported = $quantity_supported;

        return $this;
    }

    /**
     * Get the value of taxes
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Set the value of taxes
     *
     * @return  self
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Get the value of payment_preferences
     */
    public function getPayment_preferences()
    {
        return $this->payment_preferences;
    }

    /**
     * Set the value of payment_preferences
     *
     * @return  self
     */
    public function setPayment_preferences($payment_preferences)
    {
        $this->payment_preferences = $payment_preferences;

        return $this;
    }

    /**
     * Get the value of billing_cycles
     */
    public function getBilling_cycles()
    {
        return $this->billing_cycles;
    }

    /**
     * Set the value of billing_cycles
     *
     * @return  self
     */
    public function setBilling_cycles($billing_cycles)
    {
        $this->billing_cycles = $billing_cycles;

        return $this;
    }


    /**
     * add Billing Cycle in billing cycles array
     * 
     * @return self
     */
    public function addBilling_cycle($billing_cycle)
    {
        if (!$this->getBilling_cycles()) {
            return $this->setBilling_cycles(array($billing_cycle));
        } else {
            return $this->setBilling_cycles(array_merge($this->getBilling_cycles(), array($billing_cycle)));
        }
    }
}
