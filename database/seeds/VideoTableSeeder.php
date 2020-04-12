<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('videos')->truncate();
        $video = "video-" . rand(1,3) . ".mp4";
        DB::table('videos')->insert([
            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],

            [
                'title' => 'Video',
                'video' => $video,
            ],
        ]);
    }
}
