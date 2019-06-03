<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Post::class, 100) -> make()
        //   ->each(function($post){
        //     $categories = App\Category::inRandomOrder()->take(rand(1, 5))->get();
        //     $post->categories()->attach($categories);
        //     $post -> save();
        //   });
        
        // WARNING:  Il metodo sopra è errato perchè non troverebbe il post_id (inesistente)
        //Quindi basterebbe spostare di una riga in sopra il $post -> save() oppure:
        factory(App\Post::class, 100) -> create()
                ->each(function($post){
                  $categories = App\Category::inRandomOrder()->take(rand(1, 5))->get();
                  $post->categories()->attach($categories);
                });
    }
}
