<?php

namespace App\Services\Address;

use App\Repository\Address\AddressRepository;

class AddressService
{
    /**
     * @var AddressRepository
     */
    private $addressRepository;
    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }
}
