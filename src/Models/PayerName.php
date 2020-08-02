<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class PayerName extends PayPalModel
{

    /**
     * Get the value of given_name
     */
    public function getGiven_name()
    {
        return $this->given_name;
    }

    /**
     * Set the value of given_name
     *
     * @return  self
     */
    public function setGiven_name($given_name)
    {
        $this->given_name = $given_name;

        return $this;
    }

    /**
     * Get the value of surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
}
