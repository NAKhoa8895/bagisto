<?php

namespace Amazbin\Zalopay\Payment;

use Webkul\Payment\Payment\Payment;

class Zalopay extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'zalopay';

    public function getRedirectUrl()
    {
        
    }
}