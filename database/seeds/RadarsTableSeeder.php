<?php

use Illuminate\Database\Seeder;

class RadarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('radars')->insert([
        //   'name' => 'Theorie',
        //   'description' => 'test description',
        // ]);

        DB::table('radars')->insert($radars);

        $radars = [
        ];
    }
}
