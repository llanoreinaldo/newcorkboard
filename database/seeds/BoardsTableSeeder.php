<?php

use Illuminate\Database\Seeder;
use App\Board;


class BoardsTableSeeder extends Seeder
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
            Board::create([
                
                'boardId' => $faker->name,
            ]);
        }

    }
}
