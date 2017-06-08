<?php

use Illuminate\Database\Seeder;

class RadarsPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radars_positions')->insert([
          [
            'radar_id' => '1',
            'name' => 'Eerste positie',
            'info' => '1e positie: je beschouwt de interactie vanuit jezelf (ik).',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
            'radar_id' => '1',
            'name' => 'Tweede positie',
            'info' => '2e positie: je beschouwt de interactie van de positie van de ander (ander).',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
            'radar_id' => '1',
            'name' => 'Derde positie',
            'info' => '3e positie: je beschouwt de interactie vanuit een metapositie (observator).',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
        ]);
    }
}
