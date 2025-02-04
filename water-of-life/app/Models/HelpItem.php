<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category'
    ];
} 