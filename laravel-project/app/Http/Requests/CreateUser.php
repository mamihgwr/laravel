<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateUser extends FormRequest
{
public function authorize( ) : bool
{
    return true; // リクエストの内容に基づいた権限チェックのために使用
    //true を返す（つまりリクエストを受け付ける）
}

public function rules()
    {
        return [
            // 'required'は':attributeは必須入力です。',
            'name' =>'required',
            'email' => 'required',
            'sex' =>'required',
            'cates' =>'required',
            'pref' =>'required',
            'message' =>'required',
        ];
    }

}
