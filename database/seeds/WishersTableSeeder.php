<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishers')->insert([
            ['sender_name' => 'Thomas Verhelst','sender_email' => 'tvke91@gmail.com','quit_slug' => str_slug('Thomas Verhelst'),'recipient_name' => 'Phedra','recipient_email' => 'tvke91@gmail.com','full_sound_slug' => str_slug('Thomas Verhelst'),'soundless_video' => null,'sound_video' => null,'allow_public' => 0,'sound_available' => '2017-12-19 03:07:08',],
        ]);
    }
}
