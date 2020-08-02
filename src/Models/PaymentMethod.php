<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class PaymentMethod extends PayPalModel
{

    /**
     * Get the value of payer_selected
     */
    public function getPayer_selected()
    {
        return $this->payer_selected;
    }

    /**
     * Set the value of payer_selected
     *
     * @return  self
     */
    public function setPayer_selected($payer_selected)
    {
        $this->payer_selected = $payer_selected;

        return $this;
    }

    /**
     * Get the value of payee_preferred
     */
    public function getPayee_preferred()
    {
        return $this->payee_preferred;
    }

    /**
     * Set the value of payee_preferred
     *
     * @return  self
     */
    public function setPayee_preferred($payee_preferred)
    {
        $this->payee_preferred = $payee_preferred;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}
