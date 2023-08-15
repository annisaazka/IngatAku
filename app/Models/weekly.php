<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weekly extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_day',
        'id_user'
    ];
}
