<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'detai_user';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'update_at',
        'deleted_at',

    ];

    public function type_user()
    {
        return $this->belongsTo('App\Models\MasterData\TypeUser.php','type_user_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User.php','user_id','id');
    }

}
