<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upcoming_task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'date_start',
        'due_date',
        'task_status',
        'id_user'
    ];
}
