<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('skills')->truncate();

        DB::table('skills')->insert([
            ['id' => 1, 'skill_name' => '継続力'],
            ['id' => 2, 'skill_name' => '状況適応力'],
            ['id' => 3, 'skill_name' => '実行力'],
            ['id' => 4, 'skill_name' => '共感する能力／他者を理解しようとする能力'],
            ['id' => 5, 'skill_name' => '探求する力'],
            ['id' => 6, 'skill_name' => '批判的思考力'],
            ['id' => 7, 'skill_name' => '問題解決能力'],
            ['id' => 8, 'skill_name' => '感情の波をコントロールする能力'],
            ['id' => 9, 'skill_name' => '対人関係の構築と維持能力'],
            ['id' => 10, 'skill_name' => '自己回復力'],
            ['id' => 11, 'skill_name' => '意思決定能力'],
            ['id' => 12, 'skill_name' => 'ストレス、不安や緊張に対処する能力'],
            ['id' => 13, 'skill_name' => '創造的思考力'],
            ['id' => 14, 'skill_name' => '効果的なコミュニケーション能力'],
            ['id' => 15, 'skill_name' => '自己認識力'],

        ]);
    }
}
