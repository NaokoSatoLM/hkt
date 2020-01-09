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
<body >


<!-- 画面分割 -->
<div class="columns is-multiline">
    <div class="column is-12" style="background:yellow;">
    アラート出す部分
    </div>
    <div class="column is-6">
        <div id='originalFax'>
            <canvas id="sample1" height="600" width="550">
            </canvas>
        </div>
    </div>
    <div class="column is-6">
        <div name="subtitle">確認事項</div>
        <div id='inputForm'>
            発注者:<input type='text' id='ordering_company' placeholder="{{$request['company']}}"  class="ordering_company">
                <input type="button" id='check1' value="確定" class="check1"><br>

            納品先:<input type='text' id='delivery_place'  placeholder="{{$request['place']}}" class="delivery_place">
                <input type="button" id='check2' value="確定" class="check2"><br>

            納品希望日:<input type='text' id='delivery_date'  placeholder="{{$request['date']}}" class="delivery_date">
                <input type="button" id='check3' value="確定" class="check3"><br>

            注文商品詳細:
            <table border="1">
                <tr>
                    <th>商品名</th>
                    <th>商品コード</th>
                    <th>容量</th>
                    <th>個数</th>
                    <th>単価</th>
                    <th>合計金額</th>
                    <th>在庫数</th>
                </tr>
                @foreach($datas as $data)
                <tr>
                    <td class="item-detail">{{$data['商品名']}}</td>
                    <td class="item-detail"></td>
                    <td class="item-detail">{{$data['容量']}}</td>
                    <td class="item-detail">{{$data['個数']}}</td>
                    <td class="item-detail">{{$data['単価']}}</td>
                    <td class="item-detail">{{$data['合計金額']}}</td>
                    <td class="item-detail">20</td>
                    </td>
                </tr>
                @endforeach
            </table>
            <!-- 初回購入の時のアラート -->
            <div class="alert">{{$alert}}</div>
                <input type="button"  value="確定" class="check4"><br>
            <div name="invoice">
                <textarea name="invoice" rows="4" cols="40" class="invoice">送り状の内容を記入してください</textarea>
            </div>
            <input type="button"  value="確定" class="check5"><br><br>
            <div style="display:inline-flex">
                <!-- data確認後送付処理 -->
                <!-- 承認の場合 -->
                <form action='ks_approve' method="GET" >
                    <input type="checkbox" value="承認" id="ok" name="ok">承認する
                </form>
                <!-- 保存のみの場合 -->
                <form action='index' method="GET" >　  
                    <input type="button" value="保存して終了" id="save" class="save">
                </form>
            </div>
        </div>
        <div class="show_old_order">
        <form action="/past_order_detail" method="GET">
            <input type="submit" value="過去の注文履歴を見る">
            <input type="hidden" value="{{$confirm_id}}" name="confirm_id">
            <input type="hidden" value="{{$request['company']}}" name="company">
            <input type="hidden" value="{{$request['place']}}" name="place">
        </form>
        </div>
    </div>
</div>
<!-- キャンバス上に表す図形の作成 -->
<div class="square1" id="square1"></div>
<div class="square2" id="square2"></div>
<div class="square3" id="square3"></div>
<div class="square4" id="square4"></div>
</body>
</html>