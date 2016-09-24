<?php

use Illuminate\Database\Seeder;
use App\Event;
use Carbon\Carbon;
use Faker\Factory;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        $faker = Faker\Factory::create();

        $event = new Event();
        $event->title = '#CancerAngels2016';
        $event->short_description = 'Join us for a day of fun and party with the young cancer patients
                                    from the Philippine Cancer Society. ';
        $event->description = $faker->paragraph(30);
        $event->picture = 'volunteer.png';
        $event->max = 10;
        $event->current = 0;
        $event->organizing_body = 'Cancer Society of the Philippines';
        $event->organizing_body_email = $faker->email();
        $event->organizing_body_contact = $faker->phoneNumber();
        $event->start_date = $faker->dateTimeBetween('now', '+ 5 days');
        $event->end_date = $faker->dateTimeBetween('+ 5 days', '+ 15 days');
        $event->points = 200;
        $event->save();

        $event = new Event();
        $event->title = 'Sustansyang Tatalon - Brgy. Tatalon, QC';
        $event->short_description = 'HWF is currently looking for volunteers for our feeding program
                        in Brgy. Tatalon, Quezon City. For those who are interested,
                        you may check the full details.';
        $event->picture = 'volunteer2.png';
        $event->max = 10;
        $event->current = 0;
        $event->organizing_body = 'Brgy Tatalon Sanguniang Kabataan HWF';
        $event->organizing_body_email = $faker->email();
        $event->organizing_body_contact = $faker->phoneNumber();
        $event->description = $faker->paragraph(30);
        $event->start_date = $faker->dateTimeBetween('now', '+ 5 days');
        $event->end_date = $faker->dateTimeBetween('+ 5 days', '+ 15 days');
        $event->points = 300;
        $event->save();

        $event = new Event();

        $event->title = 'Tulong sa Kabataan 2016';
        $event->short_description = 'The Children\'s Foundation of the Philippines is currently 
                        in need of volunteers for our program in cooperation with
                        Smart Communications Inc. and Cancer Foundation of the
                        Philippines ';
        $event->picture = 'volunteer3.png';
        $event->max = 10;
        $event->current = 0;
        $event->organizing_body = 'Children\'s Foundation of the Philippines';
        $event->organizing_body_email = $faker->email();
        $event->description = $faker->paragraph(30);
        $event->organizing_body_contact = $faker->phoneNumber();
        $event->start_date = $faker->dateTimeBetween('now', '+ 5 days');
        $event->end_date = $faker->dateTimeBetween('+ 5 days', '+ 15 days');
        $event->points = 400;
        $event->save();

    }
}
