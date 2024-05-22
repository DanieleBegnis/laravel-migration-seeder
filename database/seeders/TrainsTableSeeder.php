<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->departing_station = $faker->sentence();
            $newTrain->arrival_station = $faker->sentence();
            $newTrain->departing_at = $faker->time();
            $newTrain->arriving_at = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->number_of_wagons = $faker->numberBetween(0, 15);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
