<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'phonenumber',
        'address',
        'driver_licence_number',
        'date_of_birth'
    ];
}
