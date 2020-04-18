<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->truncate();
        $events = [];
        $faker = Factory::create();
        $date = Carbon::create(2020,4,20,9);

        for ($i = 1; $i <= 20; $i++){
            $image = "event-grid-img" . rand(1,9) . ".jpg";
            $date->addDays(1);
            $events[]=[
                'title' => $faker->sentence(rand(8,12)),
                'body' => $faker->paragraph(rand(10,15)),
                'eventImage' => $image,
                'date' => $date,
                'location' => '23 Kissy Road',
            ];
        }

        DB::table('events')->insert($events);
    }
}
