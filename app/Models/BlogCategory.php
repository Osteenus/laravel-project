<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $fillable
        = [
            'title',
            'slug',
            'parent_id',
            'description'
        ];

}
