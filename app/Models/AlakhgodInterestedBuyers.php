<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlakhgodInterestedBuyers extends Model
{
    use HasFactory;

    protected $table = 'alakhgod_interested_buyers';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address1',
        'address2',
        'address3',
        'pincode',
        'country',
        'state',
    ];
}
