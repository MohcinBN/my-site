<?php

namespace Tests\Feature\Models;

use Database\Factories\PostFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_its_have_links_url()
    {
        $post = PostFactory::new()->create();

        $expectedUrl = url('posts/' . $post->id);
        

        $this->assertEquals($expectedUrl,$post->url());

    }
}
