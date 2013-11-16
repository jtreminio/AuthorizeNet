<?php

namespace AuthorizeNet\CIM;

/**
 * A class that contains all fields for a CIM Payment Profile.
 */
class PaymentProfile
{
    public $customerType;
    public $billTo;
    public $payment;
    public $customerPaymentProfileId;

    public function __construct()
    {
        $this->billTo = new Address;
        $this->payment = new Payment;
    }
}
