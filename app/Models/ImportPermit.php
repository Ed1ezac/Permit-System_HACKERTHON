<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportPermit extends Model
{
    //use HasFactory;
    const Pending = 'pending';
    const Approved = 'approved';
    const Rejected = 'rejected';
    const Error = 'error';
    
    protected $fillable = [
        'goods','permit_no','applicant_names', 'licence_no',
            'physical_address',
            'postal_address',
            'identity_no',
            'permit_type',
            'purpose_of_goods',
            'order_no',
            'destination_of_goods',
            'port_of_entry',
            'licence_file',
            'identity_file',
            'residence_permit_file',
            'status',
            'status_details',
            'authorising_officer',
            'receiving_officer'
    ];


    protected $casts = [
        'goods' => 'array'
    ];
}
