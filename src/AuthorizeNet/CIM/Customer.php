<?php

namespace AuthorizeNet\CIM;

/**
 * A class that contains all fields for a CIM Customer Profile.
 */
class Customer
{
    public $merchantCustomerId;
    public $description;
    public $email;
    public $paymentProfiles = array();
    public $shipToList = array();
    public $customerProfileId;
}
