<?php

namespace Tests\Feature\Http\Controller;

use Database\Factories\PostFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_it_loads_posts_index()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }


    public function test_if_it_loads_posts_with_links_to_post()
    {

        $firstPost = PostFactory::new()->create();
        $secondtPost = PostFactory::new()->create();
        //dd($secondtPost);

        $response = $this->get('/posts');

        $response->assertStatus(200);

        $response->assertSee($firstPost->title);
        $response->assertSee($firstPost->url());
        $response->assertSee($secondtPost->title);
    }

    public function test_if_we_can_loads_the_post_details()
    {
        $post = PostFactory::new()->create();

        $response = $this->get('posts/' . $post->url());

        $response->assertOk();
        $response->assertSee($post->title);
        $response->assertSee($post->body);


    }
}
