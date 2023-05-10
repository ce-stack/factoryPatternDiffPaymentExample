<?php

namespace App\Factory;

use App\Interfaces\Payment;
use App\Services\Master;
use App\Services\Visa;
use App\Services\Wallet;

class PaymentFactory implements Payment
{
    public function makePayment($paymentView) {
        if($paymentView == 'visa') {

            return new Visa('visa');

        } elseif($paymentView == 'wallet') {

            return new Wallet('wallet');

        } elseif($paymentView == 'master') {

            return new Master('master');
        }

    }
}
