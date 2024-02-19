<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTimeBetween('-1 days', '+1 days');
            $train->orario_arrivo = $faker->dateTimeBetween('+1 days', '+5 days');
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
