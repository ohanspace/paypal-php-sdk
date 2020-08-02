<?php

namespace Ohanspace\PayPalPHPSdk\Products;

use PayPalHttp\HttpRequest;

class ProductsCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/catalogs/products?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }

    public function payPalRequestId($paypalRequestId)
    {
        $this->headers["PayPal-Request-Id"] = $paypalRequestId;
    }


    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
