<?php

use App\Vecinda;
use Illuminate\Database\Seeder;

class VencidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Vecinda::truncate();

        $faker = \Faker\Factory::create();
        
        // And now, let's create a few Vecinda in our database:
        for ($i = 0; $i < 50; $i++) {
            Vecinda::create([
                'title' => $faker->sentence,
                'name' => $faker->sentence,
                'nickname' => $faker->sentence,
                'apartament' => $faker->sentence, 
                'description' => $faker->sentence,
            ]);
        }
    }
}
