<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // データベースへのデータ挿入処理を記述する
        DB::table('your_table_name')->insert([
            'column1' => 'value1',
            'column2' => 'value2',
            // 他のカラムも挿入する
        ]);
    }
}

