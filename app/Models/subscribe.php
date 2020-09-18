<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'category_id',
    ];

    protected $hidden=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
