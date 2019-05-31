<?php

use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert([
            'video_id' => "288782",
            'embedded_url' => "https://avgle.com/embed/7819dd9a0eb21b0e75a8",
            'isAvgle' => true,
            'hd' =>true,
            'preview_url' => "https://static-clst.avgle.com/videos/tmb9/288782/1.jpg",
            'preview_video_url' => "https://static-clst.avgle.com/videos/tmb9/288782/preview.mp4",
            'title' => "初撮り清楚妻 松ゆきの 36歳 AVデビュー TOEN-15",
            'video_url' => "https://avgle.com/video/ECNPtPxSgPm/初撮り清楚妻-松ゆきの-36歳-avデビュー-toen-15",
            'duration' => 8307.26,
            'viewnumber' => 41,
            'keyword' => "松ゆきの",
            'like' => "2",
            'dislike' => "41",
        ]);
        
    }
}
