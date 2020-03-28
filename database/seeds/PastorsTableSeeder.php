<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PastorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pastors')->truncate();
        $faker = Factory::create();
        $image = "pastor-" . rand(1,7) . ".jpg";
        DB::table('pastors')->insert([
            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com'

            ],
        ]);
    }
}
