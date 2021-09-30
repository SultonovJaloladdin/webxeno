<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'post';

    protected $fillable = [
        'category_id',
        'title',
        'body',
        'image',
        'slug'
    ];

    public function getreadmore()
    {   
        return substr(strip_tags($this->body), 0, 50)
            . '...';
    }
}
