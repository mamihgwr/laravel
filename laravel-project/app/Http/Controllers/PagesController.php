<?php

namespace App\Http\Controllers;

use App\Models\Folder; // フォルダモデルの正しい名前空間を指定

class PagesController extends Controller
{
    public function index()
    {
        // データベースからすべてのフォルダを取得
        $folders = Folder::all();
    
        return view('tasks.index', ['folders' => $folders]);
    }
    
}




