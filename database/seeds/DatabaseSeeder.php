<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class, 5)->create();
        $category = factory(Category::class, 3)->create();

        foreach($posts as $post){
            foreach($category as $cat){
                $post->categories()->attach($cat->id);
            }
        }

    }
}
