<?php

use Illuminate\Database\Seeder;

class ActivitySkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_skill')->insert([
            //状況適応力
            ['id' => 1, 'activity_id' => 5, 'skill_id' => 2],
            ['id' => 2, 'activity_id' => 12, 'skill_id' => 2],
            ['id' => 3, 'activity_id' => 13, 'skill_id' => 2],
            ['id' => 4, 'activity_id ' => 10, 'skill_id' => 2],
            ['id' => 5, 'activity_id ' => 11, 'skill_id' => 2],
            ['id' => 6, 'activity_id ' => 9, 'skill_id' => 2],
            //実行力

            ['id' => 7, 'activity_id ' => 4, 'skill_id' => 3],
            ['id' => 8, 'activity_id ' => 17, 'skill_id' => 3],
            ['id' => 9, 'activity_id ' => 18, 'skill_id' => 3],
            ['id' => 10, 'activity_id ' => 21, 'skill_id' => 3],
            ['id' => 11, 'activity_id ' => 20, 'skill_id' => 3],
            ['id' => 12, 'activity_id ' => 16, 'skill_id' => 3],
            //共感する能力、他者理解力

            ['id' => 13, 'activity_id ' => 19, 'skill_id' => 4],
            ['id' => 14, 'activity_id ' => 18, 'skill_id' => 4],
            ['id' => 15, 'activity_id ' => 17, 'skill_id' => 4],
            ['id' => 16, 'activity_id ' => 21, 'skill_id' => 4],
            ['id' => 17, 'activity_id ' => 15, 'skill_id' => 4],
            //探求する力

            ['id' => 18, 'activity_id ' => 1, 'skill_id' => 5],
            ['id' => 19, 'activity_id ' => 19, 'skill_id' => 5],
            ['id' => 20, 'activity_id ' => 22, 'skill_id' => 5],
            ['id' => 21, 'activity_id ' => 23, 'skill_id' => 5],
            ['id' => 22, 'activity_id ' => 20, 'skill_id' => 5],
            ['id' => 23, 'activity_id ' => 24, 'skill_id' => 5],
            //批判的思考力
            ['id' => 24, 'activity_id ' => 16, 'skill_id' => 6],
            ['id' => 25, 'activity_id ' => 23, 'skill_id' => 6],
            ['id' => 26, 'activity_id ' => 22, 'skill_id' => 6],
            ['id' => 27, 'activity_id ' => 4, 'skill_id' => 6],
            ['id' => 28, 'activity_id ' => 1, 'skill_id' => 6],
            ['id' => 29, 'activity_id ' => 25, 'skill_id' => 6],
            //問題解決能力
            ['id' => 30, 'activity_id ' => 16, 'skill_id' => 7],
            ['id' => 31, 'activity_id ' => 24, 'skill_id' => 7],
            ['id' => 32, 'activity_id ' => 17, 'skill_id' => 7],
            ['id' => 33, 'activity_id ' => 23, 'skill_id' => 7],
            ['id' => 34, 'activity_id ' => 18, 'skill_id' => 7],
            //感情コントロール力
            ['id' => 35, 'activity_id ' => 8, 'skill_id' => 8],
            ['id' => 36, 'activity_id ' => 6, 'skill_id' => 8],
            ['id' => 37, 'activity_id ' => 25, 'skill_id' => 8],
            ['id' => 38, 'activity_id ' => 15, 'skill_id' => 8],
            ['id' => 39, 'activity_id ' => 3, 'skill_id' => 8],
            ['id' => 40, 'activity_id ' => 23, 'skill_id' => 8],
            //対人関係構築と維持力
            ['id' => 41, 'activity_id ' => 2, 'skill_id' => 9],
            ['id' => 42, 'activity_id ' => 19, 'skill_id' => 9],
            ['id' => 43, 'activity_id ' => 9, 'skill_id' => 9],
            ['id' => 44, 'activity_id ' => 15, 'skill_id' => 9],
            ['id' => 45, 'activity_id ' => 14, 'skill_id' => 9],
            ['id' => 46, 'activity_id ' => 11, 'skill_id' => 9],
            //自己回復力
            ['id' => 47, 'activity_id ' => 23, 'skill_id' => 10],
            ['id' => 48, 'activity_id ' => 22, 'skill_id' => 10],
            ['id' => 49, 'activity_id ' => 16, 'skill_id' => 10],
            ['id' => 50, 'activity_id ' => 20, 'skill_id' => 10],
            ['id' => 51, 'activity_id ' => 17, 'skill_id' => 10],
            //意思決定力
            ['id' => 52, 'activity_id ' => 5, 'skill_id' => 11],
            ['id' => 53, 'activity_id ' => 7, 'skill_id' => 11],
            ['id' => 54, 'activity_id ' => 8, 'skill_id' => 11],
            ['id' => 55, 'activity_id ' => 20, 'skill_id' => 11],
            ['id' => 56, 'activity_id ' => 17, 'skill_id' => 11],
            ['id' => 57, 'activity_id ' => 18, 'skill_id' => 11],
            //ストレス、不安に対する対処力
            ['id' => 58, 'activity_id ' => 8, 'skill_id' => 12],
            ['id' => 59, 'activity_id ' => 6, 'skill_id' => 12],
            ['id' => 60, 'activity_id ' => 23, 'skill_id' => 12],
            ['id' => 61, 'activity_id ' => 12, 'skill_id' => 12],
            ['id' => 62, 'activity_id ' => 10, 'skill_id' => 12],
            ['id' => 63, 'activity_id ' => 5, 'skill_id' => 12],
            //想像利敵思考力
            ['id' => 64, 'activity_id ' => 1, 'skill_id' => 13],
            ['id' => 65, 'activity_id ' => 15, 'skill_id' => 13],
            ['id' => 66, 'activity_id ' => 6, 'skill_id' => 13],
            ['id' => 67, 'activity_id ' => 7, 'skill_id' => 13],
            ['id' => 68, 'activity_id ' => 4, 'skill_id' => 13],
            //効果的なコミュニケーション能力
            ['id' => 69, 'activity_id ' => 25, 'skill_id' => 14],
            ['id' => 70, 'activity_id ' => 19, 'skill_id' => 14],
            ['id' => 71, 'activity_id ' => 21, 'skill_id' => 14],
            ['id' => 72, 'activity_id ' => 15, 'skill_id' => 14],
            ['id' => 73, 'activity_id ' => 12, 'skill_id' => 14],
            ['id' => 74, 'activity_id ' => 10, 'skill_id' => 14],
            //自己認識力
            ['id' => 75, 'activity_id ' => 22, 'skill_id' => 15],
            ['id' => 76, 'activity_id ' => 23, 'skill_id' => 15],
            ['id' => 77, 'activity_id ' => 24, 'skill_id' => 15],
            ['id' => 78, 'activity_id ' => 14, 'skill_id' => 15],
            ['id' => 79, 'activity_id ' => 3, 'skill_id' => 15],
            ['id' => 80, 'activity_id ' => 15, 'skill_id' => 15],
        ]);
    }
}
