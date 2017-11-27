<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->insert([
		    ['name' => 'Thomas','email' => 'thomas.verhelst@student.kdg.be','password' => bcrypt('KdGn32NA'),],
		    ['name' => 'Phedra','email' => 'phedra.moerloos@student.kdg.be','password' => bcrypt('KdGTbcW2'),],
	    ]);
    }
}
