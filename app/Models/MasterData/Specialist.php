<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'specialist';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'update_at',
        'deleted_at',

    ];

    public function doctor()
    {
        return $this->hasMany('App\Models\Operation\Doctor.php','specialist_id');
    }  
}
