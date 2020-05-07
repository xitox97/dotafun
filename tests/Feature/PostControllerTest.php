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
        $this->withoutExceptionHandling();
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
            'id' => 1,
            'title' => 'Easy Rampage',
            'media_path' => 'www.google.com',
            'description' => 'none',
        ])
        ->assertDatabaseHas('category_post',
        [
            'post_id' => 1,
            'category_id' => 1
        ])
        ->assertDatabaseHas('category_post',
        [
            'post_id' => 1,
            'category_id' => 2
        ]);
    }
}
