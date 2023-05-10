<?php

namespace App\Services;

use App\Interfaces\PaymentType;

class Wallet implements PaymentType
{

    private $config;

    public function __construct($config)
    {
        return $this->config = $config;
    }
    public function paymentgateway()
    {
       return 'welcome in your wallet payment gateway';
    }
}
