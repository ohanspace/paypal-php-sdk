<?php

namespace Ohanspace\PayPalPHPSdk\Exception;

/**
 * Class PayPalConfigurationException
 *
 * @package Ohanspace\PayPalPHPSdk\Exception
 */
class PayPalConfigurationException extends \Exception
{

    /**
     * Default Constructor
     *
     * @param string|null $message
     * @param int  $code
     */
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}
