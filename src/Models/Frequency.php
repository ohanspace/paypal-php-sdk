<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;


class Frequency extends PayPalModel
{

    public function __construct($count, $unit)
    {
        $this->setInterval_count($count);
        $this->setInterval_unit($unit);
    }

    /**
     * Get the value of interval_unit
     */
    public function getInterval_unit()
    {
        return $this->interval_unit;
    }

    /**
     * Set the value of interval_unit
     * 
     * @param enum DAY/WEEK/MONTH/YEAR
     *
     * @return  self
     */
    public function setInterval_unit($interval_unit)
    {
        $this->interval_unit = $interval_unit;

        return $this;
    }

    /**
     * Get the value of interval_count
     */
    public function getInterval_count()
    {
        return $this->interval_count;
    }

    /**
     * Set the value of interval_count
     *
     * @return  self
     */
    public function setInterval_count($interval_count)
    {
        $this->interval_count = $interval_count;

        return $this;
    }
}
