<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(RadarsTableSeeder::class);
      $this->call(RadarsOptionsTableSeeder::class);
      $this->call(RadarsPositionsTableSeeder::Class);
    }
}
