<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class to_dos extends Model
{
    use HasFactory;

    protected $table = 'to_dos';

    protected $fillable = [
        'task_name',
        'task_status',
        'id_user'
    ];
}
