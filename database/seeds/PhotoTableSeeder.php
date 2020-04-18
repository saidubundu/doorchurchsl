<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->truncate();
        $Image = "side-gallery-img" . rand(1,9) . ".jpg";
        DB::table('photos')->insert([
            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],

            [
                'title' => 'Photo',
                'photo' => $Image,
            ],
        ]);
    }
}
