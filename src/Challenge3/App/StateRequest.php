<?php

namespace Interview\Challenge3\App;

use Interview\Challenge3\Vendor\StateRequestInterface;

class StateRequest implements StateRequestInterface
{
    public const ADDRESS_ID_KEY = 'address_id';
    public const STATE_KEY      = 'state';

    private string $addressId;
    private string $state;

    public function __construct(string $addressId, string $state)
    {
        $this->addressId = $addressId;
        $this->state = $state;
    }

    public function getAddressId(): string
    {
        return $this->addressId;
    }

    public function getState(): string
    {
        return $this->state;
    }
}