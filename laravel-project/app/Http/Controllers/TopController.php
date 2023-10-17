<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Http\Requests\CreateUser;

class TopController extends Controller
{

//　お問合せフォーム　トップページ　GET
public function showCreateForm( )
{
    return view('query.index');//indexブレード
}


//　お問い合わせフォーム　確認ページ用　POST
public function confirm(Request $request) 
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'sex' => 'required',
        'cates'  => 'required',
        'pref'  => 'required',
        'message'  => 'required',
    ]);
//リクエストする
$userdates = $request->all();

return view('query.confirm', [
    'userdates' => $userdates,
]);

}



//　お問い合わせフォーム　保存完了ページ用　POST
public function create(Request $request) 
{
    // モデルのインスタンスを作成する
    $userdates = new Employees();
    //Modelsで日時は削除。

    //$userdates配列の名前にてすとを代入 = てすと
    $userdates->name = $request['name'];
    $userdates->email = $request['email'];
    $userdates->sex = $request['sex'];
    $userdates->cates = $request['cates'];
    $userdates->pref = $request['pref'];
    $userdates->message = $request['message'];
    
    //セーブする
    $userdates->save();
    //dd($userdates);　→これでなんか色々確認できる

    return view('query.thanks');
}
}

