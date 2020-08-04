<?php

namespace Ohanspace\PayPalPHPSdk\Models;

use Ohanspace\PayPalPHPSdk\Common\PayPalModel;


class EventType extends PayPalModel
{
    //$name
    //$description
    //$status
    //$resource_version

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
     * Get the value of resource_version
     */
    public function getResource_version()
    {
        return $this->resource_version;
    }

    /**
     * Set the value of resource_version
     *
     * @return  self
     */
    public function setResource_version($resource_version)
    {
        $this->resource_version = $resource_version;

        return $this;
    }
}
