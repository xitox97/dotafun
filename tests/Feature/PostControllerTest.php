<?php

namespace Tests\Feature;

use App\Category;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    //success

    /**
     * @test
     */
    public function it_show_available_post()
    {
        $post = factory(Post::class)->create();

        $response = $this->get('/');

        $response->assertSee($post->title);
    }

    /**
     * @test
     */
    public function it_create_new_post()
    {

        factory(Category::class,3)->create();
        $data =
            [
                'title' => 'Easy Rampage',
                'media_path' => 'www.google.com',
                'description' => 'none',
                'category' => [1,2],
            ];

        $this->post(route('posts.store'),$data)
                    ->assertRedirect('/');

        $this->assertDatabaseHas('posts', [
            'title' => 'Easy Rampage',
            'media_path' => 'www.google.com',
            'description' => 'none',
        ]);
    }
}
