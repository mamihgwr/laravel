<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Http\Requests\CreateUser;

//GET
class ConfrimController extends Controller
{
    public function postIndex()
    {
   
    //$userdates = Employees::all();
   
    return view('query.confirm',[//viewの場所クエリー→indexブレード
    'userdates' => $userdates,//配列を渡す
    
    ]);
}


//POST
public function create(CreateUser $request) 
{
    
    
    // モデルのインスタンスを作成する
    $userdates = new Employees();

    //Modelsで日時は削除。

    //$userdates配列の名前にてすとを代入 = てすと
    $userdates->name = $request['name'];
    
    //echo $userdates;→結果{"name":"\u3066\u3059\u3068"}
    
    $userdates->email = $request['email'];
    $userdates->sex = $request['sex'];
    $userdates->cates = $request['cates'];
    $userdates->pref = $request['pref'];
    $userdates->message = $request['message'];

    //お問い合わせ項目は配列なので番号で取り出す。
    $cates  = $request['cates'];
        foreach ($cates as $cate){
        $userdates->cates = $cate;
    
    //セーブする
    $userdates->save();
    //dd($userdates);　→これでなんか色々確認できる

    

    //thanksページへ
    return redirect()->route('query.confirm', [
    ]);

}
}
}
