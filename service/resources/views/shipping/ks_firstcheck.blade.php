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
                        発注者:&emsp;&emsp;&emsp;
                        <input type='text' id='ordering_company' 
                                placeholder="{{$request['company']}}" class="set-size check1">
                    </button>
                    <button class="button">
                        <input type="button" id='check1' value="確定" class="check1 button is-small is-selected "><br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品先:&emsp;&emsp;&emsp;<input type='text' id='delivery_place'  placeholder="{{$request['place']}}" class="set-size check2">
                    </button>
                    <button class="button">
                            <input type="button" id='check2' value="確定" class="check2 button is-small"><br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品希望日:&emsp;<input type='text'   placeholder="{{$request['date']}}" class="set-size-day check8" id="deli_date2">
                    </button>
                    <button class="button">
                        <input type="button" id='check8' value="確定" class="check8 button is-small">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        発注No.:&emsp;&emsp;&nbsp;<input type='text'   placeholder="{{$request['date']}}" class="set-size-day check5 ">
                    </button>
                    <button class="button">
                        <input type="button" value="確定" class="check5 button is-small" id="check5">
                    </button>
                </div>
                <div class="around-box">
                    <div class="columns is-multiline">
                        <div class="column is-12">
                            <div class="item-detail">
                            注文商品詳細:
                            <table border="1" class="table is-striped is-hoverable" >
                                <tr>
                                    <th class="th">商品名<br>商品コード</th>
                                    <th class="th">数量</th>
                                    <th class="th">入数</th>
                                    <th class="th">発注数</th>
                                    <th class="th">単価</th>
                                    <th class="th">合計金額</th>
                                </tr>
                                @foreach($datas as $data)
                                <tr>
                                    <td><input type="text" value="{{$data['商品名']}}" class="check6 item"><br><input type="text" value="000-000" class="check6 item"></td>
                                    <td><input type="text" value="{{$data['数量']}}" class="check6 item"></td>
                                    <td><input type="text" value="{{$data['入数']}}" class="check6 item"></td>
                                    <td><input type="text" value="{{$data['発注数']}}" class="check6 item">個</td>
                                    <td><input type="text" value="{{$data['単価']}}" class="check6 item">円</td>
                                    <td><input type="text" value="{{$data['合計金額']}}" class="check6 item">円</td>
                                </tr>
                                @endforeach
                            </table>
                            <input type="button"  value="確定" class="check6 button is-small" id="check6">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display:inline-flex">
                <!-- data確認後送付処理 -->
                <form method="GET" action="/index">
                    <!-- 一時保存 -->
                    <input type="submit" value="一時保存" id="save" class="save button is-gray is-large">&emsp;
                    <!-- 保存 -->
                    <input type="submit" value="確認完了" id="save" class="save button is-gray is-large">&emsp;
                </form>
            </div>
        </div>
    </div>
</body>
</html>