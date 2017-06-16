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
            'color' => '#B82052',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Gerichtheid',
            'description' => 'Welke gerichtheid heb ik?',
            'color' => '#EB6A6B',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Model',
            'description' => 'Vanuit welk model handel ik?',
            'color' => '#E29CC1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Strategie',
            'description' => 'Wat zet ik in?',
            'color' => '#DCDF6C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Methodiek',
            'description' => 'In welke fase bevind ik mij?',
            'color' => '#87CDD3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Feedback',
            'description' => 'Hoe verwerk ik feedback?',
            'color' => '#68883C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => 'Basisattitude',
            'description' => ' ',
            'color' => '#8e8e8e',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
            'name' => '...',
            'description' => 'Wat zou nog meer nuttig zij? En wat nog meer...',
            'color' => '#2A3A89',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
      ]);
    }
}
