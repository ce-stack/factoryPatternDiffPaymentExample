<?php

namespace App\Services;

use App\Interfaces\PaymentType;

class Visa implements PaymentType
{


    private $config;

    public function __construct($config)
    {
        return $this->config = $config;
    }
    public function paymentgateway()
    {
        return 'welcome in Visa payment gateway';
    }
}
