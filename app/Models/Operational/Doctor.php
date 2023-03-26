<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'doctor';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'update_at',
        'deleted_at',

    ];

    // one to many
    public function specialist()
    {
        return $this->belongsTo('App\Models\MasterData\Specialist.php','specialist_id','id');
    }
    // one to many
    public function appointment()
    {
        return $this->hasMany('App\Models\Operation\Appontment.php','doctor_id');
    }



}
