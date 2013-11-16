<?php

namespace AuthorizeNet\ARB;

use AuthorizeNet;

/**
 * A class to parse a response from the ARB XML API.
 */
class Response extends AuthorizeNet\XMLResponse
{
    /**
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->_getElementContents("subscriptionId");
    }

    /**
     * @return string
     */
    public function getSubscriptionStatus()
    {
        return $this->_getElementContents("Status");
    }
}
