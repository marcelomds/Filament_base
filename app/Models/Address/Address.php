<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'postal_code',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'country'
    ];
}
