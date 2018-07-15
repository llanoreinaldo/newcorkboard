<?php

use Illuminate\Database\Seeder;
use App\Message;


class MessagesTableSeeder extends Seeder
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
 
        // Create 50 product records
        for ($i = 0; $i < 10; $i++) {
            Message::create([
                
                'name' => $faker->name,
            ]);
        }

    }
}
