<?php

use App\Models\Post;

// reading time
//The average reader reads about 200 words per minute, so I decided to have less to make estimates more accurate
//the $post will be passed as an argument
function post_reading_time_estimation(Post $post, $averageReadsPerMunite = 180) : string
{
    $post = Post::findOrFail($post->id);
    $textOfTheBody = $post->body;
    $totalWords = str_word_count(strip_tags($textOfTheBody));

    $minutes = floor($totalWords / $averageReadsPerMunite);

    return $minutes . ' minutes';
}
