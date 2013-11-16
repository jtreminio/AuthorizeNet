<?php

namespace AuthorizeNet\CIM;

/**
 * A class that contains all fields for a CIM Payment Type.
 */
class Payment
{
    public $creditCard;
    public $bankAccount;

    public function __construct()
    {
        $this->creditCard = new CreditCard;
        $this->bankAccount = new BankAccount;
    }
}
