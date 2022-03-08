<?php

namespace Database\Seeders;
// use \Faker;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for($i = 1;$i<=5;$i++){
           Post::create([
                "title" => $faker->sentence($nbWords = 6, $variableNbWords = true),
                "content"=>$faker->sentence($nbWords = 10, $variableNbWords = false),
                 "likes" => 1
           ]);
        }
        
    }
}
