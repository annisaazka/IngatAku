<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'start_date',
        'due_date',
        'task_status',
        'id_user'
    ];
}
