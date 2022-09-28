<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = [
        'category_id',
        'age',
        'sex',
        'disease_condition',
        'post_comment',
        'image_path',
        ];
}