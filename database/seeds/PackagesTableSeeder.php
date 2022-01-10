<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) { 
            # code...
            $newPackage = new Package();
            $newPackage->destinazione = $faker->state;
            $newPackage->data_di_partenza = $faker->date($format = 'Y-m-d', $max = 'now');
            $newPackage->aeroporto = $faker->word;
            $newPackage->descrizione_viaggio = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $newPackage->save();
        }
    }
}
