<?php
use Illuminate\Database\Seeder;
use App\Link;
 
class LinksTableSeeder extends Seeder
{
    public function run()
    {
 
        $faker = \Faker\Factory::create();
 
        // Create 50 product records
        for ($i = 0; $i < 10; $i++) {
            Link::create([
                'url' => $faker->url,
                'title' => $faker->title,
                'description' => $faker->text,
                'image_url' => $faker->image
            ]);
        }
    }
}
