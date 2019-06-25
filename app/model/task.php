<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_number', 'title', 'description', 'remark', 'status'
    ];
}
