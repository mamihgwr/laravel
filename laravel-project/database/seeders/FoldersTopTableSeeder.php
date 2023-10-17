<?php

namespace Database\Seeders;

use Carbon\Carbon; //日時操作ライブラリ
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoldersTopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
      public function run()
      {
        $name  ='てすと名前';
        $email ='てすとメールアドレス';
        $sex   ='男';
        $cates ='製品について';
        $pref  ='関東';
        $message ='てすとメッセージ';

            DB::table('employees') -> insert([
                'name' => $name,
                'email' => $email,
                'sex' => $sex,
                'cates' => $cates,
                'pref' => $pref,
                'message' => $message,
             
            ]);
        
        }
}
