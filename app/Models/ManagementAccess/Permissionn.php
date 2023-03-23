<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permissionn extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'permission';

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

}
