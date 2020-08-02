<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class PaymentPreferences extends PayPalModel
{

    /**
     * Get the value of auto_bill_outstanding
     */
    public function getAuto_bill_outstanding()
    {
        return $this->auto_bill_outstanding;
    }

    /**
     * Set the value of auto_bill_outstanding
     *
     * @return  self
     */
    public function setAuto_bill_outstanding($auto_bill_outstanding)
    {
        $this->auto_bill_outstanding = $auto_bill_outstanding;

        return $this;
    }

    /**
     * Get the value of setup_fee
     */
    public function getSetup_fee()
    {
        return $this->setup_fee;
    }

    /**
     * Set the value of setup_fee
     *
     * @return  self
     */
    public function setSetup_fee(Money $setup_fee)
    {
        $this->setup_fee = $setup_fee;

        return $this;
    }



    /**
     * Get the value of setup_fee_failure_action
     */
    public function getSetup_fee_failure_action()
    {
        return $this->setup_fee_failure_action;
    }

    /**
     * Set the value of setup_fee_failure_action
     *
     * @return  self
     */
    public function setSetup_fee_failure_action($setup_fee_failure_action)
    {
        $this->setup_fee_failure_action = $setup_fee_failure_action;

        return $this;
    }

    /**
     * Get the value of payment_failure_threshold
     */
    public function getPayment_failure_threshold()
    {
        return $this->payment_failure_threshold;
    }

    /**
     * Set the value of payment_failure_threshold
     *
     * @return  self
     */
    public function setPayment_failure_threshold($payment_failure_threshold)
    {
        $this->payment_failure_threshold = $payment_failure_threshold;

        return $this;
    }
}
