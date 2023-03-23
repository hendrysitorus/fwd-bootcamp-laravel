<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'permission_role';

    protected $date = [
        'created_at', 
        'update_at',
        'deleted_at',

    ];

    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'update_at',
        'deleted_at',

    ];


}
