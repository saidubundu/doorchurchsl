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
        $image = "team-grid-img" . rand(1,8) . ".jpg";
        DB::table('pastors')->insert([
            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com',
                'branch' => 'Kissy Road',
                'facebook' => 'https://www.facebook.com/search/top/?q=Saidu+Bundu',
                'twitter' => 'twitter.com',
                'instagram' => 'https://www.instagram.com/',
                'whatsapp' => '23485599'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com',
                'branch' => 'Kissy Road',
                'facebook' => 'https://www.facebook.com/search/top/?q=Saidu+Bundu',
                'twitter' => 'twitter.com',
                'instagram' => 'https:://https://www.instagram.com/',
                'whatsapp' => '23485599'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com',
                'branch' => 'Kissy Road',
                'facebook' => NULL,
                'twitter' => 'twitter.com',
                'instagram' => 'https://www.instagram.com/',
                'whatsapp' => '23485599'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com',
                'branch' => 'Kissy Road',
                'facebook' => 'https://www.facebook.com/search/top/?q=Saidu+Bundu',
                'twitter' => 'twitter.com',
                'instagram' => 'https://www.instagram.com/',
                'whatsapp' => NULL

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com',
                'branch' => 'Kissy Road',
                'facebook' => 'https://www.facebook.com/search/top/?q=Saidu+Bundu',
                'twitter' => NULL,
                'instagram' => 'https://www.instagram.com/',
                'whatsapp' => '23485599'

            ],

            [
                'name' => 'Vinton Fenson',
                'position' => 'Senior Pastor',
                'pastorImage' => $image,
                'bio' => $faker->paragraph(rand(10,15), true),
                'address' => '21 Ferry Junction',
                'phone' => '+23278000000',
                'email' => 'pastor@peektower.com',
                'branch' => 'Kissy Road',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => 'https://www.instagram.com/',
                'whatsapp' => '23485599'

            ],
        ]);
    }
}
