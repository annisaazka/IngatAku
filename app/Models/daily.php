<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daily extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_status',
        'is_routine',
        'id_user'
    ];
}
