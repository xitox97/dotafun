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
        // $posts = factory(Post::class, 5)->create();
        // $category = factory(Category::class, 3)->create();

        // foreach($posts as $post){
        //     foreach($category as $cat){
        //         $post->categories()->attach($cat->id);
        //     }
        // }

        DB::table('posts')->insert([
            'title' => 'Clockwerk So damn cool',
            'media_path' => 'https://i.imgur.com/F8tNiCS.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis nesciunt culpa quae ab totam fugiat, labore quidem, aspernatur laudantium inventore, veniam praesentium ipsam ducimus iste maxime cumque neque. Repellat!',
            'vote' => '2123'
        ]);

        DB::table('posts')->insert([
            'title' => 'Templar Assasin So scary',
            'media_path' => 'https://i.imgur.com/WxpJ48N.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis nesciunt culpa quae ab totam fugiat, labore quidem, aspernatur laudantium inventore, veniam praesentium ipsam ducimus iste maxime cumque neque. Repellat!',
            'vote' => '1333'
        ]);

        DB::table('posts')->insert([
            'title' => 'lone Druid so bossy',
            'media_path' => 'https://i.imgur.com/mFE7G4r.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis nesciunt culpa quae ab totam fugiat, labore quidem, aspernatur laudantium inventore, veniam praesentium ipsam ducimus iste maxime cumque neque. Repellat!',
            'vote' => '3999'
        ]);

        DB::table('posts')->insert( [
            'title' => 'Sven posing like a boss',
            'media_path' => 'https://i.imgur.com/3mR3XWR.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis nesciunt culpa quae ab totam fugiat, labore quidem, aspernatur laudantium inventore, veniam praesentium ipsam ducimus iste maxime cumque neque. Repellat!',
            'vote' => '9999'
        ]);
    }
}
