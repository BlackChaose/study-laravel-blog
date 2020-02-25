<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'body'];

    public function isPublished()
    {
        return $this->state == 'published';
    }
}
