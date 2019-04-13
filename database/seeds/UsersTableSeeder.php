<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	 $data = array(

		        array(
		          'name'          => 'Alex',
		          'email'            => 'abarrientos@groupintet.com',
		          'password'         => \Hash::make('alex123456')
		        ),

		      );

		      \DB::table('users')->insert($data);

		  Role::create([
		  	'name' => 'Admin',
		  	'slug' => 'admin',
		  	'special' => 'all-access'
		  ]);

    }
}
