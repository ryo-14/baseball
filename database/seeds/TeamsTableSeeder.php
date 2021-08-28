<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
        [ 
            'id' => 1,
            'team_name' => '巨人',
            'team_name_en' => 'giants',
            'home_name' => '東京ドーム',
            'home_ground' => '東京都文京区',
        ],
        [ 
            'id' => 2,
            'team_name' => '阪神',
            'team_name_en' => 'tigers',
            'home_name' => '阪神甲子園球場',
            'home_ground' => '兵庫県西宮市',
        ],
         [ 
            'id' => 3,
            'team_name' => '中日',
            'team_name_en' => 'dragons',
            'home_name' => 'バンテリンドームナゴヤ',
            'home_ground' => '愛知県名古屋市',
        ],
        [ 
            'id' => 4,
            'team_name' => '横浜',
            'team_name_en' => 'baystars',
            'home_name' => '横浜スタジアム',
            'home_ground' => '神奈川県横浜市',
        ],
         [ 
            'id' => 5,
            'team_name' => '広島',
            'team_name_en' => 'carp',
            'home_name' => 'MAZDA Zoom-Zoomスタジアム広島',
            'home_ground' => '広島県広島市',
        ],
        [ 
            'id' => 6,
            'team_name' => 'ヤクルト',
            'team_name_en' => 'swallows',
            'home_name' => '明治神宮野球場',
            'home_ground' => '東京都新宿区',
        ],
        [ 
            'id' => 7,
            'team_name' => 'ソフトバンク',
            'team_name_en' => 'hawks',
            'home_name' => '福岡PayPayドーム',
            'home_ground' => '福岡県福岡市',
        ],
        [ 
            'id' => 8,
            'team_name' => 'ロッテ',
            'team_name_en' => 'marines',
            'home_name' => 'ZOZOマリンスタジアム',
            'home_ground' => '千葉県千葉市',
        ],
        [ 
            'id' => 9,
            'team_name' => '西武',
            'team_name_en' => 'lions',
            'home_name' => 'メットライフドーム',
            'home_ground' => '千葉県千葉市',
        ],
        [ 
            'id' => 10,
            'team_name' => '楽天',
            'team_name_en' => 'eagles',
            'home_name' => 'ZOZOマリンスタジアム',
            'home_ground' => '埼玉県さいたま市',
        ],
        [ 
            'id' => 11,
            'team_name' => '日本ハム',
            'team_name_en' => 'fightters',
            'home_name' => '札幌ドーム',
            'home_ground' => '北海道札幌市',
        ],
        [ 
            'id' => 12,
            'team_name' => 'オリックス',
            'team_name_en' => 'buffaloes',
            'home_name' => '京セラドーム大阪',
            'home_ground' => '大阪府大阪市',
        ],
        ]);
    }
}
