<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>index</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Css -->
        <link href="{{ asset('css/check.css') }}" rel="stylesheet">
        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="{{ asset('js/check.js') }}"></script>

        <!-- Bulma -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <meta charset="utf-8">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <!-- Styles -->
        <style>
            .alert {
                color:red;
            }
        </style>
    </head>
<body>


<div class="column is-4">
        <div name="subtitle">過去の注文履歴</div>
        <div class='old_detail'>
            発注者:{{$company}}<br>
            納品先:{{$place}}<br>
            過去注文商品詳細:
            <table border="1" width="450" height="300">
                <tr>
                    <th width="20%">納品先</th>
                    <th width="10%">商品コード</th>
                    <th width="10%">商品名</th>
                    <th width="5%">容量</th>
                    <th width="5%">個数</th>
                    <th width="10%">単価</th>
                    <th width="10%">合計金額</th>
                    <th width="50%">送り状</th>
                </tr>
                <div style="overflow-y:scroll;">
                    @foreach($old_datas as $data)
                    <tr>
                        <td>{{$data['納品先']}}</td>
                        <td></td>
                        <td>{{$data['商品名']}}</td>
                        <td>{{$data['容量']}}</td>
                        <td>{{$data['個数']}}</td>
                        <td>{{$data['単価']}}</td>
                        <td>{{$data['合計金額']}}</td>
                        <td>{{$data['送り状']}}</td>
                    </tr>
                    @endforeach
                </div>
            </table><br>
        </div>
        <form action="index" method="GET">
            <input type="submit" value="戻る">
        </form>
    </body>
</html>