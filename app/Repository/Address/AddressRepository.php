<?php

namespace App\Repository\Address;

use App\Models\Address\Address;
use App\Repositories\AbstractRepository;

class AddressRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Address::class);
    }
}
