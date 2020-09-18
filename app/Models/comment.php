<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class comment extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $fillable=[
        'post_id',
        'user_id',
        'comment',
        'parent_id',
    ];

    protected $hidden=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
