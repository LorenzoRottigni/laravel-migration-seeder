<?php
use App\TravelPackage;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {
            $newTravelPackage = new TravelPackage();
            $newTravelPackage->tp_id = NULL;
            $newTravelPackage->tp_name = $faker->name;
            $newTravelPackage->tp_locations = $faker->city;
            $newTravelPackage->tp_price = $faker->randomDigit();
            $newTravelPackage->tp_description = $faker->text;
            $newTravelPackage->save();
        }
    }
}
