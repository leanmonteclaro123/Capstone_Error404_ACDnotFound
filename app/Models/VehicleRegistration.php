<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleRegistration extends Model
{

    // Specify the primary key if it's not 'id'
    protected $table = 'vehicle_registrations';
    protected $fillable = [
        'loginID',
        'license_plate_number',
        'make_province',
        'make_model',
        'year_color',
        'campus',
        'identification',
        'role',
        'full_name',
        'current_address',
        'city',
        'province',
        'postal_code',
        'telephone_cell',
        'telephone_home',
        'telephone_office',
        'registered_owner_name',
        'permanent_address',
        'owner_city',
        'owner_province',
        'OR',
        'CR',
        'DL',
    ];
    protected $casts = [
        'interests' => 'array'
    ];

}
