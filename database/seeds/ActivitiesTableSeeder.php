<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['id' => 1, 'activity_name' => '部活/サークル/クラブ活動：華道'],
            ['id' => 2, 'activity_name' => '部活/サークル/クラブ活動：オーケストラ'],
            ['id' => 3, 'activity_name' => '部活/サークル/クラブ活動：演劇'],
            ['id' => 4, 'activity_name' => '部活/サークル/クラブ活動：ESS'],
            ['id' => 5, 'activity_name' => '趣味/部活/サークル/クラブ活動：テニス'],
            ['id' => 6, 'activity_name' => '部活/サークル/クラブ活動：体操'],
            ['id' => 7, 'activity_name' => '部活/サークル/クラブ活動：スキー・スケート'],
            ['id' => 8, 'activity_name' => '部活/サークル/クラブ活動：ゴルフ'],
            ['id' => 9, 'activity_name' => '部活/サークル/クラブ活動：野球・ソフトボールスコア'],
            ['id' => 10, 'activity_name' => '部活/サークル/クラブ活動：バレーボール'],
            ['id' => 11, 'activity_name' => '部活/サークル/クラブ活動：バスケットボール'],
            ['id' => 12, 'activity_name' => '部活/サークル/クラブ活動：サッカー'],
            ['id' => 13, 'activity_name' => '部活/サークル/クラブ活動：ラグビー'],
            ['id' => 14, 'activity_name' => '部活/サークル/クラブ活動：ダンス'],
            ['id' => 15, 'activity_name' => '部活/サークル/クラブ活動：応援団・チアリーディング'],
            ['id' => 16, 'activity_name' => '部活/サークル/クラブ活動：その他部活'],
            ['id' => 17, 'activity_name' => 'ボランティア'],
            ['id' => 18, 'activity_name' => '地域活動'],
            ['id' => 19, 'activity_name' => '語学'],
            ['id' => 20, 'activity_name' => '講座受講'],
            ['id' => 21, 'activity_name' => '国外長期滞在'],
            ['id' => 22, 'activity_name' => 'ボディメンテナンス'],
            ['id' => 23, 'activity_name' => 'メンタルケア、メンテナンス'],
            ['id' => 24, 'activity_name' => '家事'],
            ['id' => 25, 'activity_name' => '育児'],

        ]);
    }
}
