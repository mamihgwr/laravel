<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="/css/styles.css">
    </head>
        <body>
            <header><h3>確認する画面</h3></header> 

            <!--データを受け取り表示する--->
            <form action="{{ route('query.thanks') }}" method="POST" enctype="multipart/form-data" >
             @csrf
                <table border="2">
                    <tr>
                        <td>名前</td>
                        <td>{{$userdates['name']}}
                            <input
                            name="name" type="hidden"
                            value="{{ $userdates['name'] }}" >
                        </td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>{{$userdates['email']}}
                        <input
                            name="email" type="hidden"
                            value="{{ $userdates['email'] }}">
                        </td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td>{{$userdates['sex']}}
                        <input
                            name="sex" type="hidden"
                            value="{{ $userdates['sex'] }}">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>お問い合わせ</td>
                        <td> @foreach ($userdates['cates'] as $cate){{$cate}}<br>
                        @endforeach 
                        <input
                            name="cates" type="hidden"
                            value=" @foreach ($userdates['cates'] as $cate) {{$cate}} @endforeach "  >
                    </td>
                    </tr>
                    <tr><td>住まい</td>
                        <td>{{$userdates['pref']}}
                        <input
                            name="pref" type="hidden"
                            value="{{ $userdates['pref'] }}">

                        </td>
                    </tr>
                    <tr>
                        <td>メッセージ</td>
                        <td>{!! nl2br ($userdates['message'] ) !!}
                        <input
                            name="message" type="hidden"
                            value="{{ $userdates['message'] }}">
                        </td>
                    </tr>
                </table>

                <button type="submit" class="btn btn-default btn-block">
                    送信する
                </button>
            </form>  
        </body>
</html>


