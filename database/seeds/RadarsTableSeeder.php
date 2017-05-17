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
        DB::table('radars')->insert([
        [
            'name' => 'Theorie',
            'description' => 'Vanuit welk theorie handel ik?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Gerichtheid',
            'description' => 'Welke gerichttheid heb ik?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Model',
            'description' => 'Vanuit welk model handel ik?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Strategie',
            'description' => 'Wat zet ik in?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Methodiek',
            'description' => 'In welke fase bevind ik mij?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Feedback',
            'description' => 'Hoe verwerk ik feedback?',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Basisattitude',
            'description' => ' ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => '...',
            'description' => 'En wat nog meer...',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
      ]);
    }
}
