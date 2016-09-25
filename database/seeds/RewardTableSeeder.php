<?php

use Illuminate\Database\Seeder;
use App\Reward;
use Faker\Factory;

class RewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('rewards')->truncate();
        $reward = new Reward();

        $reward->title = "300 pesos worth of Starbucks gift cheque";
        $reward->short_description = "Get 300 pesos worth of gift cheque for Starbucks which you can use anytime as
                                      treat for your friends!";
        $reward->description = $faker->paragraph(30);
        $reward->instructions = $faker->paragraph(10);
        $reward->picture = 'redeem1.jpg';
        $reward->cost = $faker->numberBetween(2000, 20000);
        $reward->sponsor = $faker->company();
        $reward->save();

        $reward = new Reward();

        $reward->title = "One medium blue magic stuff toy";
        $reward->short_description = "Get one blue magic stuff toy of your choice. Must be less than 1000 pesos, limited to only one toy";
        $reward->description = $faker->paragraph(30);
        $reward->instructions = $faker->paragraph(10);
        $reward->cost = $faker->numberBetween(2000, 20000);
        $reward->picture = 'redeem2.jpg';
        $reward->sponsor = $faker->company();
        $reward->save();

        $reward = new Reward();

        $reward->title = "Free 1-night stay at Solaire Resort and Casino";
        $reward->short_description = "Stay with your friends in Solaire! for five pax luxury room. Limited time only! Free lunch breakfast and dinner";
        $reward->description = $faker->paragraph(30);
        $reward->instructions = $faker->paragraph(10);
        $reward->cost = $faker->numberBetween(2000, 20000);
        $reward->picture = 'redeem3.jpg';
        $reward->sponsor = $faker->company();
        $reward->save();
    }
}
