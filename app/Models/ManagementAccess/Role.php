<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'role';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'title',
        'created_at',
        'update_at',
        'deleted_at',

    ];

    public function role_user()
    {
        return $this->hasMany('App\Models\ManagementAccess\RoleUser.php','role_id');
    }

    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','role_id');
    }
    
}
