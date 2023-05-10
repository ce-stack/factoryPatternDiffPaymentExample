<?php

namespace App\Interfaces;

interface Payment
{
    public function makePayment($paymentView);
}
