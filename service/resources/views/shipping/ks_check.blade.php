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

    </head>
<body>
<!-- 画面分割 -->
 <div style="display:table;  width:100%;">
    <div style="display:table-cell; width:600px;">
        <div id='originalFax' >
            /////////////FAX原本///////////////////<br>
            <div class="ordering_company">発注書</div><br> 
            <div class="our_company">伯方塩業株式会社御中</div><br>
            <div class="delivery_place">納品先</div><br>
            <div class="delivery_date">納品希望日</div><br>
            <div class="item-detail">商品名</div><br>
            <div class="item-detail">容量</div><br>
            <div class="item-detail">個数</div><br>
            <div class="item-detail">単価</div><br>
            <div class="item-detail">金額</div><br>
            <div class="ordering-dep">発注担当部署</div><br>
            
            /////////////FAX原本///////////////////
        </div>
    </div>
    <div style="display:table-cell; width:500px;">
    <div name="subtitle">確認事項</div>
        <div id='inputForm'>
            発注者:<input type='text' id='ordering_company' placeholder="{{$request['company']}}"  class="ordering_company">
                <input type="button" id='check1' value="確定" class="check1"><br>

            納品先:<input type='text' id='delivery_place'  placeholder="{{$request['place']}}" class="delivery_place">
                <input type="button" id='check2' value="確定" class="check2"><br>

            納品希望日:<input type='text' id='delivery_date'  placeholder="{{$request['date']}}" class="delivery_date">
            <input type="button" id='check2' value="確定" class="check3"><br>

            注文商品詳細:
            <table border="1">
                <tr>
                    <th>商品名</th>
                    <th>容量</th>
                    <th>個数</th>
                    <th>単価</th>
                    <th>合計金額</th>
                </tr>
                @foreach($datas as $data)
                <tr>
                    <td class="item-detail">{{$data['商品名']}}</td>
                    <td class="item-detail">{{$data['容量']}}</td>
                    <td class="item-detail">{{$data['個数']}}</td>
                    <td class="item-detail">{{$data['単価']}}</td>
                    <td class="item-detail">{{$data['合計金額']}}</td>
                    <td class="item-detail">
                            <input type="button"  value="確定" class="check4">
                    </td>
                </tr>
                @endforeach
                </table><br>
            <div name="invoice">
                <textarea name="invoice" rows="4" cols="40" class="invoice">送り状の内容を記入してください</textarea>
            </div>
            <input type="button"  value="確定" class="check5"><br><br>
            <div style="display:inline-flex">
                <form action='approval' method="GET" >
                    <input type="submit" value="承認">
                </form>
                <form action='save' method="GET" >　  
                    <input type="submit" value="保存して終了">
                </form>
            </div>
        </div>
    </div>
    <div style="display:table-cell; width:700px;">
    <div name="subtitle">過去の注文履歴
    </div>
    <div id='old_detail'>
        発注者:{{$request['company']}}<br>
        納品先:{{$request['place']}}<br>
        過去注文商品詳細:
        <table border="1">
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
        </table><br>
    </div>
    <div id='old_detail'>
        倉庫在庫:
        <table border="1">
            <tr>
                <th width="10%">倉庫名</th>
                <th width="10%">商品コード</th>
                <th width="10%">商品名</th>
                <th width="5%">容量</th>
                <th width="5%">個数</th>
            </tr>
            @foreach($old_datas as $data)
            <tr>
                <td>KS</td>
                <td></td>
                <td>{{$data['商品名']}}</td>
                <td>{{$data['容量']}}</td>
                <td>{{$data['個数']}}</td>
            </tr>
            @endforeach
        </table><br>
    </div>
</body>