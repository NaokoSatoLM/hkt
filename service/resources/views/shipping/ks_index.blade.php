<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>index</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<body>
    <div id='statusSelect'>
    ステータスを選択してください<br>
    <form action="ks_index" method="POST">
    @csrf
        <select name="status">
            <option value="untreated">未処理</option>
            <option value="pending">承認待ち</option>
            <option value="registered">登録済み</option>
        </select>
            <input type="submit" value="検索">
        </form>
    </div><br><br><br><br>
    @if(isset($msg))
        {{$msg}}
    @else
    <div id='statusList'>
            <table border="1">
            <tr>
                <th>発注者</th>
                <th>納品先</th>
                <th>金額</th>
                <th>受付日時</th>
                <th>ステータス</th>
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
                    <input type="submit"  value="確認">
                    <input type="hidden" name="company" id="company" value="{{$data['発注者']}}">
                    <input type="hidden" name="place" id="place" value="{{$data['納品先']}}">
                    <input type="hidden" name="confirm_id" id="confirm_id" value="{{$data['id']}}">
                </form>
                </td>
            </tr>
            @endforeach
            </table>
    </div><br>
    @endif
    

        














</body>