<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>index</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/konva@4.1.2/konva.min.js"></script>
        <script src="{{ asset('js/firstcheck.js') }}"></script>

        <!-- Bulma -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <meta charset="utf-8">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <!-- Css -->
        <link href="{{ asset('css/firstcheck.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>

        </style>
    </head>
<body>
    <div class="content">
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
    <!-- 画面分割 -->
    

    <div class="columns is-multiline">
        @if($alert != "")
        <div class="column is-12" style="background:yellow;" id="alert">
            アラート！：{{$alert}}
        </div>
        @endif
        <div class="column is-6">
            <div class="title is-4">FAX原本</div>
            <div id="container"></div>
        </div>
        <div class="column is-6">
            <div class="title is-4">確認事項</div>
            <div id='inputForm'>
                <div class="buttons has-addons">
                    <button class="button">
                        発注先:&emsp;&emsp;&emsp;
                        <input type='text' id='order_company'
                                placeholder="{{$request['company']}}" class="set-size check1 fax-field"
                                rect-x="483"
                                rect-y="23"
                                rect-w="250"
                                rect-h="100">
                    </button>
                    <button class="button">
                        <input type="button" id='check1' value="確定" class="check1 button is-small is-selected order_company" for='order_company'><br>
                    </button>
                </div>
                納品先情報<br>
                <div class="buttons has-addons">
                    <button class="button">
                        会社名:&emsp;&emsp;<input type='text' 
                        id='delivery_company'  
                        placeholder="{{$request['company']}}" 
                        class="set-size check2 fax-field"
                        x="483" y="23" width="250" height="100">
                    </button><br>&emsp;
                    <button class="button">
                        郵便番号:&emsp;<input type='text' id="post-code"
                            placeholder="701-0203" class="set-size check1 fax-field">
                    </button><br>&emsp;
                    <button class="button">
                        住所:&emsp;&emsp;&emsp;<input type='text' id="adress"
                            placeholder="{{$request['place']}}" class="set-size check1 fax-field">
                    </button><br>&emsp;
                    <button class="button">
                        電話番号:&emsp;<input type='text' id="phone-num"
                            placeholder="086-281-9558" class="set-size check1 fax-field">
                    </button><br>&emsp;
                    <button class="button">
                        担当者:&emsp;&emsp;<input type='text' id="p-incharge"
                            placeholder="窪田 修" class="set-size check1 fax-field">
                    </button><br>&emsp;
                    <button class="button">
                        <input type="button" id='check2' value="確定" 
                        class="
                            check2 
                            button 
                            is-small
                            delivery_company
                            post-code
                            adress
                            phone-num
                            p-incharge">
                    </button><br>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品希望日:&emsp;<input type='text'   placeholder="2019/9/6" class="set-size-day check8 fax-field" id="deli_date1">
                    </button>
                    <button class="button">
                        <input type="button" id='check8' value="確定" class="check8 button is-small deli_date1">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        発注No.:&emsp;&emsp;&nbsp;<input type='text' id="order-num"  placeholder="235435" class="set-size-day check5 fax-field">
                    </button>
                    <button class="button">
                        <input type="button" value="確定" class="check5 button is-small order-num" id="check5 order-num">
                    </button>
                </div>
                <div class="around-box">
                    <div class="columns is-multiline">
                        <div class="column is-12">
                            <div class="item-detail">
                            注文商品詳細:
                            <table border="1" class="table is-striped is-hoverable" >
                                <tr>
                                    <th style="width:20%;">商品名<br>商品コード</th>
                                    <th style="width:10%;">数量</th>
                                    <th style="width:10%;">入数</th>
                                    <th style="width:15%;">発注数</th>
                                    <th style="width:15%;">単価</th>
                                    <th style="width:15%;">合計金額</th>
                                </tr>
                                @foreach($datas as $data)
                                <tr>
                                    <td><input type="text" 
                                        value="{{$data['商品名']}}" 
                                        class="check6 item-wide check" id="order-item"><br>
                                        <input type="text" value="000-000" class="check6 item-wide" id="order-code">
                                    </td>
                                    <td>
                                        <select class="item-mid"> 
                                            <option selected>{{$data['数量']}}</option>
                                            <option>1kg</option>
                                            <option>5kg</option>
                                            <option>50kg</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="item-mid"> 
                                            <option selected>{{$data['入数']}}</option>
                                            <option>20×10</option>
                                            <option>100×2</option>
                                        </select>
                                    </td>
                                    <td><input type="text" 
                                        value="{{$data['発注数']}}" 
                                        class="check6 item-mini" id="order-count">個
                                    </td>
                                    <td><input type="text" 
                                        value="{{$data['単価']}}" 
                                        class="check6 item-sma" 
                                        id="order-price">円
                                    </td>
                                    <td><input type="text" value="{{$data['合計金額']}}" class="check6 item-sma" id="order-tprice">円</td>
                                </tr>
                                @endforeach
                            </table>
                            <input type="button"  value="確定" id="check6"
                                    class="check6 button is-small order-item order-code order-count order-price order-tprice" >
                        </div>
                    </div>
                </div>
            </div>
            <div style="display:inline-flex">
                <!-- data確認後送付処理 -->
                <form method="GET" action="/index">
                    <!-- 一時保存 -->
                    <input type="submit" value="一時保存" id="temp" class="save button is-gray is-large">&emsp;
                    <!-- 保存 -->
                    <input type="submit" value="確認完了" id="save" class="save button is-gray is-large">&emsp;
                </form>
                <form method="GET" action="/ks_check">
                    <!-- 承認画面へ遷移 -->
                    <input type="submit" value="承認" id="move" class="save button is-gray is-large">&emsp;
                    <input type="hidden" name="confirm_id" id="confirm_id" value="2">
                    <div>
                        <input type="checkbox" class="approve">&emsp;
                        承認画面に進む場合は<br>&emsp;チェックを入れてください
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>