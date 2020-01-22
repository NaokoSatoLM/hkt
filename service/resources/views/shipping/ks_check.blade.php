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
        <script src="{{ asset('js/check.js') }}"></script>

        <!-- Bulma -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <meta charset="utf-8">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <!-- Css -->
        <link href="{{ asset('css/check.css') }}" rel="stylesheet">
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
                        発注者:&emsp;&emsp;
                        <input type='text' id='ordering_company' 
                                placeholder="{{$request['company']}}" class="set-size check1">
                    </button>
                    <button class="button">
                        <input type="button" id='check1' value="確定" class="check1 button is-small is-selected "><br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品先:&emsp;&emsp;<input type='text' id='delivery_place'  placeholder="{{$request['place']}}" class="set-size check2">
                    </button>
                    <button class="button">
                            <input type="button" id='check2' value="確定" class="check2 button is-small"><br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        受注日:&emsp;&emsp;<input type='text' placeholder="{{$request['date']}}" class="set-size-day check3">
                    </button>
                    <button class="button">
                        <input type="button" id='deli_date1' value="確定" class="check3 button is-small">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品希望日:<input type='text'   placeholder="{{$request['date']}}" class="set-size-day check8" id="deli_date2">
                    </button>
                    <button class="button">
                        <input type="button" id='check8' value="確定" class="check8 button is-small">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品確定日:<input type='text'   placeholder="{{$request['date']}}" class="set-size-day check4" id="deli_date3">
                    </button>
                    <button class="button">
                        <input type="button" id='check4' value="確定" class="check4 button is-small"><br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        発注No.:&emsp;&nbsp;<input type='text'   placeholder="{{$request['date']}}" class="set-size-day check5 ">
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
                                    <th>商品名<br>商品コード</th>
                                    <th>入り方</th>
                                    <th>個数</th>
                                    <th>単価</th>
                                    <th>合計金額</th>
                                    <th>在庫数</th>
                                </tr>
                                @foreach($datas as $data)
                                <tr>
                                    <td><input type="text" value="{{$data['商品名']}}" class="check6 item"><br><input type="text" value="000-000" class="check6 item"></td>
                                    <td><input type="text" value="{{$data['容量']}}" class="check6 item"></td>
                                    <td><input type="text" value="{{$data['個数']}}" class="check6 item">個</td>
                                    <td><input type="text" value="{{$data['単価']}}" class="check6 item">円</td>
                                    <td><input type="text" value="{{$data['合計金額']}}" class="check6 item">円</td>
                                    <td><input type="text" value="20" class="check6 item">個</td>
                                </tr>
                                @endforeach
                            </table>
                            《合計》<br>
                            オーダーNo.：<input type="text"><br>
                            受注金額：&emsp;&nbsp;<input type="text">
                            消費税：<input type="text">
                            税込み金額：<input type="text"><br>
                            数量：&emsp;&emsp;&emsp;&nbsp;<input type="text">
                            重量：&emsp;<input type="text">
                            伝送：&emsp;&emsp;
                            <input type="radio" class="radio">なし
                            <input type="radio" class="radio">あり
                            </div>
                            <input type="button"  value="確定" class="check6 button is-small" id="check6">
                            <!-- 初回購入の時のアラート -->
                            @if($alert != "")
                                <div class="alert">
                                    <span class="icon has-text-warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>{{$alert}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="check11">
                【請求区分】&emsp;&nbsp;
                <input type="radio" class="radio" value="請求区分">当月
                <input type="radio" class="radio" value="請求区分">翌月
                <input type="radio" class="radio" value="請求区分">なし
                <br>
                【請求書】&emsp;&emsp;&nbsp;
                <input type="radio" class="radio" value="請求書">要
                <input type="radio" class="radio" value="請求書">不要
                <br>
                【時間指定】&emsp;&nbsp;
                <input type="radio" class="radio" value="時間指定">なし
                <input type="radio" class="radio" value="時間指定">必着
                <input type="radio" class="radio" value="時間指定">指定
                <br>
                【出荷案内書】&nbsp;
                <input type="radio" class="radio" value="出荷案内書">要
                <input type="radio" class="radio" value="出荷案内書">不要
                <br>
                【納品書】&emsp;&emsp;&nbsp;
                <input type="radio" class="radio" value="納品書">要
                <input type="radio" class="radio" value="納品書">不要
                <br>
                【出荷報告】&emsp;&nbsp;
                <input type="radio" class="radio" value="出荷報告">要
                <input type="radio" class="radio" value="出荷報告">不要
                <br>
                【売上区分】&emsp;&nbsp;
                <select><option class="radio">選択してください</option></select>
                <br>
            </div>
            <div class="around-box">
                <div name="invoice">
                    <textarea name="invoice"  id="invoice" class="set-size-invoice">送り状の内容を記入してください</textarea>
                    <input type="button"  value="確定" class="check7 button is-small"><br><br>
                </div>
            </div>
            <div class="around-box">
                <div name="memo">
                    <textarea name="invoice"   class="set-size-invoice">社内メモ</textarea>
                    <input type="button"  value="確認" class="check9 button is-small" id="inhouse-memo"><br><br>
                </div>
            </div>
            <div class="around-box">
                <div name="memo">
                    <textarea name="invoice" class="set-size-invoice">マル秘メモ</textarea>
                    <input type="button"  value="確認" class="check10 button is-small" id="secret-memo"><br><br>
                </div>
            </div>
            <div style="display:inline-flex">
                <!-- data確認後送付処理 -->
                <!-- 一時保存 -->
                <input type="button" value="一時保存" id="save" class="save button is-gray is-large">&emsp;
                <!-- 保存 -->
                @if($confirm_id == "1")
                    <input type="button" value="承認する" id="save" class="save button is-gray is-large">&emsp;
                @elseif($confirm_id == "2")
                    <input type="button" value="確認完了" id="save" class="save button is-gray is-large">&emsp;
                @endif
                <!-- 過去の注文見る場合 -->
                <div class="show_old_order">
                    <form action="/past_order_detail" method="GET">
                        <input type="submit" value="過去の注文履歴を見る" class="button is-danger">
                        <input type="hidden" value="{{$confirm_id}}" name="confirm_id">
                        <input type="hidden" value="{{$request['company']}}" name="company">
                        <input type="hidden" value="{{$request['place']}}" name="place">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>