<?php


namespace Ohanspace\PayPalPHPSdk\Plans;

use PayPalHttp\HttpRequest;

class PlansPatchRequest extends HttpRequest
{
    function __construct($planId)
    {
        parent::__construct("/v1/billing/plans/{plan_id}", "PATCH");

        $this->path = str_replace("{plan_id}", urlencode($planId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
