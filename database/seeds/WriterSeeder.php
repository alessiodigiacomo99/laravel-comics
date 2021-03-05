<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $writer = new Writer();
            $writer->name = $faker->name();
            $writer->last_name = $faker->lastName();
            $writer->save();
        }
    }
}
