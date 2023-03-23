<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transcation extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'transcation';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'update_at',
        'deleted_at',

    ];
}
