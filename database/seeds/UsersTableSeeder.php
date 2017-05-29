<?php

use Illuminate\Database\Seeder;

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
          'firstname' => 'admin',
          'lastname' => 'test',
          'email' => 'admin@admin.nl',
          'admin' => '1',
          'password' => bcrypt('admin'),
      ]);
    }
}
