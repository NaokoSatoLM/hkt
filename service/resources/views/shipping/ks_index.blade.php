<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>受注検索</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bulma -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <meta charset="utf-8">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            font-size: 40px;
        }

        .content {
            text-align: center;
            margin: 0px;
        }

        .header {
            padding-top: 40px;
            font-size: 60px;
            height: 200px;
        }

        .header-btn {
            margin-left: 93%;
        }

        .box {
            margin: 0 auto;
            padding-top: 1em;
            width: 90%;
            /*幅の調節*/
            color: #666666;
            /*文字色*/
            border: 1px solid #ccc;
            /*線の太さ・色*/
            border-radius: 5px;
            /*角の丸み*/
        }

        .title {
            margin-top: 20px;
        }

        .set-size {
            height: 50px;
            width: 10%;
            font-size: 40px;
        }

        .table {
            font-size: 40px;
        }
    </style>

</head>

<body>
    <div class="content">
        <div>
            <nav class="header is-primary has-text-white  has-background-info">
                受注内容確認システム
                <div class="header-btn">
                    <a href="./index">
                        <div class="button">
                            <div class="level-item has-text-centered">
                                TOP画面に戻る
                            </div>
                        </div>
                    </a>
                </div>
            </nav>
        </div>
        <div class="title is-4">
            【{{ $name }}】　受注検索
        </div>
        <div class="box is-centered">
            <div id='statusSelect'>
                <form action="/ks_index" method="POST">
                    @csrf
                    ステータスを選択してください<br>
                    <select name="status" class="set-size">
                        <option value="untreated">未処理</option>
                        <option value="pending">承認待ち</option>
                        <option value="registered">登録済み</option>
                    </select><br><br>
                    <div class="search">
                        日時を選択してください<br>
                        <input type="date" value="{{ old('now1', $now1)}}" id="now1" name="now1" class="set-size">～
                        <input type="date" value="{{ old('now2', $now2)}}" id="now2" name="now2" class="set-size">
                        <input type="submit" value="検索" class="button is-info">
                        <input type="hidden" value="{{ $name }}" name="driver">
                    </div>
                </form>
            </div>
        </div>
        <div class="title is-4">
            検索結果一覧
        </div>
        <div class="box">
            <!-- 対象がなければエラーメッセージ -->
            @if(isset($msg))
            {{$msg}}
            @else
            <div id='statusList'>
                <table class="table is-striped is-hoverable" border="1">
                    <tr>
                        <th>発注者</th>
                        <th>納品先</th>
                        <th>金額</th>
                        <th>受付日時</th>
                        <th>ステータス</th>
                        <th></th>
                    </tr>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{$data['発注者']}}</td>
                        <td>{{$data['納品先']}}</td>
                        <td>{{$data['金額']}}</td>
                        <td>{{$data['受付日時']}}</td>
                        <td>{{$data['ステータス']}}</td>
                        <td>
                            <form action="/ks_check" method="GET">
                                <input type="submit" value="確認" class="button is-info">
                                <input type="hidden" name="company" id="company" value="{{$data['発注者']}}">
                                <input type="hidden" name="place" id="place" value="{{$data['納品先']}}">
                                <input type="hidden" name="confirm_id" id="confirm_id" value="{{$data['id']}}">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif
        </div>
    </div>

</body>