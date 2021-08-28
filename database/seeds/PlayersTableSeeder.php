<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
        [
            'team_id' => 1,
            'name' => '平内　龍太',
            'name_hira' => 'へいない りゅうた',
            'number' => '11',
            'position' => '投手',
        ],
        [
            'team_id' => 1,
            'name' => 'デラロサ',
            'name_hira' => 'RUBBY De La ROSA',
            'number' => '12',
            'position' => '投手',
        ],
        [
            'team_id' => 1,
            'name' => 'サンチェス',
            'name_hira' => 'ANGEL SANCHEZ',
            'number' => '15',
            'position' => '投手',
        ],
        [
            'team_id' => 2,
            'name' => '岩崎　優',
            'name_hira' => 'いわさき　すぐる',
            'number' => '13',
            'position' => '投手',
        ],
      ]);
    }
}
