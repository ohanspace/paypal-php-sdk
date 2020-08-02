<?php

namespace Ohanspace\PayPalPHPSdk\Products;

use PayPalHttp\HttpRequest;

class ProductsListRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/catalogs/products?total_required=true", "GET");
        $this->headers["Content-Type"] = "application/json";
    }

    public function payPalPartnerAttributionId($payPalPartnerAttributionId)
    {
        $this->headers["PayPal-Partner-Attribution-Id"] = $payPalPartnerAttributionId;
    }

    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
