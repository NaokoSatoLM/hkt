<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>index</title>
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
    </head>
<body>
    <div class="contents">
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
        @if($alert != "")
        <div class=" notification is-warning" id="alert">
            アラート！：{{$alert}}
        </div>
        @endif
        <div class="columns is-multiline">
            <div class="column is-12 title is-4">確認事項</div>
            <div class="column is-4 position">
                <div class="buttons has-addons">
                    <button class="button">
                        発注者:&emsp;&emsp;&emsp;
                        <input type='text' id='ordering_company' 
                                placeholder="藤徳物産株式会社" class="set-size check1">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        郵便番号:&emsp;&emsp;<input type='text' id='delivery_place'  placeholder="701-203" class="set-size check2">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品先:&emsp;&emsp;&emsp;<input type='text' id='delivery_place'  placeholder="岡山県岡山市南区古新田 1283-3" class="set-size check2">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        受注日:&emsp;&emsp;&emsp;<input type='text' placeholder="2019/9/6" class="set-size-large check3">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品希望日:&emsp;<input type='text'   placeholder="2019/9/6" class="set-size-large check8" id="deli_date2">
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        納品確定日:&emsp;<input type='text'   placeholder="2019/9/6" class="set-size-large check4" id="deli_date3">
                    </button>
                </div>
            </div>
            <div class="column is-4 position">
                <div class="buttons has-addons">
                    <button class="button">
                        発注No.:&emsp;&emsp;&nbsp;<input type='text'   placeholder="235435" class="set-size-large check5">
                    </button>
                </div>
                <div class="check11">
                    <div class="buttons has-addons">
                        <button class="button">
                            【請求区分】&emsp;&nbsp;
                            <input type="radio" name="hyouka" class="radio" value="当月">&nbsp;当月&emsp;
                            <input type="radio" name="hyouka" class="radio" value="翌月">&nbsp;翌月&emsp;
                            <input type="radio" name="hyouka" class="radio" value="なし">&nbsp;なし&emsp;
                            <br>
                        </button>
                    </div>
                    <div class="buttons has-addons">
                        <button class="button">
                            【請求書】&emsp;&emsp;&nbsp;
                            <input type="radio" class="radio" value="請求書" >&nbsp;要&emsp;
                            <input type="radio" class="radio" value="請求書" >&nbsp;不要&emsp;
                            <br>
                        </button>
                    </div>
                    <div class="buttons has-addons">
                        <button class="button">
                            【時間指定】&emsp;&nbsp;
                            <input type="radio" class="radio" value="時間指定">&nbsp;なし&emsp;
                            <input type="radio" class="radio" value="時間指定">&nbsp;必着&emsp;
                            <input type="radio" class="radio" value="時間指定">&nbsp;指定&emsp;
                            <br>
                        </button>
                    </div>
                </div>
            </div>
            <div class="column is-4 position">
                <div class="buttons has-addons">
                    <button class="button">
                        【出荷案内書】&nbsp;
                        <input type="radio" class="radio" value="出荷案内書">&nbsp;要&emsp;
                        <input type="radio" class="radio" value="出荷案内書">&nbsp;不要&emsp;
                        <br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        【納品書】&emsp;&emsp;&nbsp;
                        <input type="radio" class="radio" value="納品書">&nbsp;要&emsp;
                        <input type="radio" class="radio" value="納品書">&nbsp;不要&emsp;
                        <br>
                        </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        【出荷報告】&emsp;&nbsp;
                        <input type="radio" class="radio" value="出荷報告">&nbsp;要&emsp;
                        <input type="radio" class="radio" value="出荷報告">&nbsp;不要&emsp;
                        <br>
                    </button>
                </div>
                <div class="buttons has-addons">
                    <button class="button">
                        【売上区分】&emsp;&nbsp;
                        <select class="set-size-large"><option class="radio"></option></select>
                        <br>
                    </button>
                </div>
            </div>
            <div class="around-box">
                <div class="column is-12">
                    <div class="item-detail">
                        <p class="subtitle is-5">注文商品詳細:</p>
                        <!-- 初回購入の時のアラート -->
                        @if($alert != "")
                            <div class="alert">
                                <span class="icon has-text-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>{{$alert}}
                            </div>
                        @endif
                        <table border="1" class="table is-striped is-hoverable" >
                            <tr>
                                <th class="th">商品名<br>商品コード</th>
                                <th class="th">数量</th>
                                <th class="th">入数</th>
                                <th class="th">発注数</th>
                                <th class="th">単価</th>
                                <th class="th">合計金額</th>
                                <th class="th">各倉庫在庫数</th>
                                <th class="th">最大発注数<br>最小発注数<br>直近発注数<br>平均発注数</th>
                            </tr>
                            @foreach($datas as $data)
                            <tr>
                                <td><input type="text" value="{{$data['商品名']}}" class="check6 item"><br><input type="text" value="{{$data['商品コード']}}" class="check6 item"></td>
                                <td><input type="text" value="{{$data['数量']}}" class="check6 item"></td>
                                <td><input type="text" value="{{$data['入数']}}" class="check6 item"></td>
                                <td><input type="text" value="{{$data['発注数']}}" class="check6 item">個</td>
                                <td><input type="text" value="{{$data['単価']}}" class="check6 item">円</td>
                                <td><input type="text" value="{{$data['合計金額']}}" class="check6 item">円</td>
                                <td>日通：100個<br>備後：0個<br>名鉄：0個<br>王子：0個<br></td>
                                <td>100個<br>0個<br>0個<br>0個<br></td>
                            </tr>
                            @endforeach
                        </table>
                        《合計》<br>
                        <div >
                            オーダーNo.：&nbsp;<input type="text" class="under-table" placeholder="○○○○○○">&emsp;
                            受注金額：&nbsp;<input type="text" class="under-table" placeholder="130,000-">&emsp;
                            消費税：&nbsp;<input type="text" class="under-table" placeholder="13,000-">&emsp;
                            税込み金額：&nbsp;<input type="text" class="under-table" placeholder="143,000-"><br>
                        </div>
                        <div class="table-summary">
                            数量：&emsp;<input type="text" class="under-table" placeholder="××××××個">&emsp;
                            重量：&nbsp;&emsp;<input type="text" class="under-table" placeholder="×××g">&emsp;
                            伝送：&nbsp;&emsp;
                            <input type="radio" class="radio">&nbsp;なし
                            <input type="radio" class="radio">&nbsp;あり
                        </div>
                    </div>
                </div>
            </div>
            <div class="memos column is-12">
                <div class="memo column is-4">
                &emsp;&emsp;送り状の内容を記入してください<br>
                    <textarea name="invoice"  id="invoice" class="set-size-invoice"></textarea>
                </div>
                <div class="memo column is-4">
                &emsp;&emsp;社内メモ<br>
                    <textarea name="invoice"   class="set-size-invoice"></textarea>
                </div>
                <div class="memo column is-4">
                    &emsp;&emsp;マル秘メモ<br>
                    <textarea name="invoice" class="set-size-invoice"></textarea>
                </div>
            </div>
            <div class="column is-12 title is-4">
                <div style="display:inline-flex">
                    <!-- data確認後送付処理 -->
                    <!-- 一時保存 -->
                    <input type="button" value="一時保存" id="save" class="save button is-gray is-large">&emsp;
                    <!-- 保存 -->
                    @if($confirm_id == "1" or "2")
                        <input type="button" value="承認する" id="save" class="save button is-gray is-large">&emsp;
                    @elseif($confirm_id == "3")
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
    </div>
</body>
</html>