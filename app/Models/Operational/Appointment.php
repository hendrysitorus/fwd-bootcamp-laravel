<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'appointment';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'update_at',
        'deleted_at',

    ];

    public function doctor()
    {
        return $this->belongsTo('App\Models\Operation\Doctor.php','doctor_id','id');
    }

    public function consultation()
    {
        return $this->belongsTo('App\Models\MasterData\Consultation.php','consultation_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User.php','user_id','id');
    }


    public function transaction()
    {
        return $this->hasOne('App\Models\Operational\Transcation.php','appointment_id');
    }


}
