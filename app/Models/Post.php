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
        return url('posts/' . $this->id);
    }

    // post excerpt
    public function postExcerpt() {
        $limit = 100;
        return Str::limit($this->body, $limit);
    }

    // post time creation 
    public function createdAt()
    {
        return $this->created_at->toDateString();
    }

    // reading time
    //The average reader reads about 200 words per minute, so I decided to have less to make estimates more accurate 
    public function postReadingTimeEstimation($averageReadsPerMunite = 180)
    {
        $textOfTheBody = $this->body;
        $totalWords = str_word_count(strip_tags($textOfTheBody));

        $minutes = floor($totalWords / $averageReadsPerMunite);
        $seconds = floor($totalWords % $averageReadsPerMunite / ($averageReadsPerMunite / 60));

        if ($seconds < 60) {
            $minutes = 1 . ' minutes';
        }

        return $minutes;
    }


}
