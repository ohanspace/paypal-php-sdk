<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class Subscription extends PayPalModel
{

    /**
     * Get the value of plan_id
     */
    public function getPlan_id()
    {
        return $this->plan_id;
    }

    /**
     * Set the value of plan_id
     *
     * @return  self
     */
    public function setPlan_id($plan_id)
    {
        $this->plan_id = $plan_id;

        return $this;
    }

    /**
     * Get the value of application_context
     */
    public function getApplication_context()
    {
        return $this->application_context;
    }

    /**
     * Set the value of application_context
     *
     * @return  self
     */
    public function setApplication_context(ApplicationContext $application_context)
    {
        $this->application_context = $application_context;

        return $this;
    }

    /**
     * Get the value of subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set the value of subscriber
     *
     * @return  self
     */
    public function setSubscriber(SubscriberRequest $subscriber)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get the value of start_time
     */
    public function getStart_time()
    {
        return $this->start_time;
    }

    /**
     * Set the value of start_time
     *
     * @return  self
     */
    public function setStart_time($start_time)
    {
        $this->start_time = $start_time;

        return $this;
    }
}
