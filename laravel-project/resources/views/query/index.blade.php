<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="/css/styles.css">
    </head>
        <body>
            <header><h3>お問い合わせフォーム</h3></header> 

            <!--バリデーション--->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul> @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                    @endforeach  
                </ul>
            </div>
            @endif 
            <!--フォーム--->
            <form action="{{ route('query.confirm') }}" method="POST" enctype="multipart/form-data" >
             @csrf
                <table border="2">
                    <tr>
                        <td>名前</td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td>
                            <input type="radio" id="men" name="sex" value="男性">
                            <label for="men">男性</label>
                            <input type="radio" id="fmen" name="sex" value="女性">
                            <label for="fmen">女性</label>
                        </td>
                    </tr>
                    <tr>
                        <td>お問い合わせ</td>
                        <td>
                            <input type="checkbox" id="checkbox1" name="cates[]" value="製品について">
                            <label for="checkbox1">1.製品について</label>
                            <br>
                            <input type="checkbox" id="checkbox2" name="cates[]" value="サービスについて">
                            <label for="checkbox2">2.サービスについて</label>
                            <br>
                            <input type="checkbox" id="checkbox3" name="cates[]" value="採用について">
                            <label for="checkbox3">3.採用について</label>
                            <br>
                            <input type="checkbox" id="checkbox4" name="cates[]" value="その他">
                            <label for="checkbox4">4.その他</label>
                        </td>
                    </tr>
                    <tr>
                        <td>住まい</td>
                        <td>
                            <select name="pref">
                                <option value=""></option>
                                <option value="北海道">北海道</option>
                                <option value="東北">東北</option>
                                <option value="関東">関東</option>
                                <option value="中部">中部</option>
                                <option value="近畿">近畿</option>
                                <option value="中国">中国</option>
                                <option value="四国">四国</option>
                                <option value="九州・沖縄">九州・沖縄</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>メッセージ</td>
                        <td>
                            <textarea name="message"></textarea>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-default btn-block">
                    送信する
                </button>
            </form>  
        </body>
</html>

