<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->agency = $faker->randomElement(['TrenItalia', 'ItaloTreno', 'FrecciaRossa']);
            $train->starting_station = $faker->citySuffix();
            $train->destination_station = $faker->citySuffix();
            $train->departure_hour = $faker->time();
            $train->arrival_hour = $faker->time();
            $train->train_code = $faker->bothify('RG-#?###');
            $train->train_carriages = $faker->numberBetween(4, 8);
            $train->departure_date = $faker->randomElement([date('Y-m-d'), date('Y-m-d', strtotime('+1 day')), date('Y-m-d', strtotime('+2 day'))]);
            $train->save();
        }
    }
}
