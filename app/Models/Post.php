<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'slug',
        'title',
        'body'
    ];

    // url generation
    public function url()
    {
        return url('posts/' . Str::slug($this->slug));
    }

    // post excerpt
    public function postExcerpt()
    {
        $limit = 100;
        return Str::limit($this->body, $limit);
    }

    // post time creation
    public function createdAt()
    {
        return $this->created_at->toDateString();
    }

    // slug instead of id in the URL
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
