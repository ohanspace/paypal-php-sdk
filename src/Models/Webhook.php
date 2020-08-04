<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;

class Webhook extends PayPalModel
{

    /**
     * Get the value of url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of event_types
     */
    public function getEventTypes()
    {
        return $this->event_types;
    }

    /**
     * Set the value of event_types
     *
     * @return  self
     */
    public function setEventTypes($event_types)
    {
        $this->event_types = $event_types;

        return $this;
    }


    /**
     * add Event Type
     * 
     * @return self
     */
    public function addEventType(EventType $event_type)
    {
        if (!$this->getEventTypes()) {
            return $this->setEventTypes(array($event_type));
        } else {
            return $this->setEventTypes(array_merge($this->getEventTypes(), array($event_type)));
        }
    }
}
