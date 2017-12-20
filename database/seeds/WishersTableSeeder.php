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
            ['sender_name' => 'Thomas Verhelst','sender_email' => 'tvke91@gmail.com','quiet_slug' => str_slug('Thomas Verhelst'),'recipient_name' => 'Phedra','recipient_email' => 'tvke91@gmail.com','full_sound_slug' => hash('crc32b',str_slug('Thomas Verhelst')),'soundless_video' => null,'sound_video' => null,'allow_public' => 1,'sound_available' => '2017-12-25 00:00:00',],
        ]);
    }
}
