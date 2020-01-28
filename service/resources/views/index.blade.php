<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1">

        <title>index</title>

        <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Css -->
            <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <!-- js -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="{{ asset('js/check.js') }}"></script>
        <!-- Bulma -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
            <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-size:30px;
            }
            .content {
                text-align: center;
                margin: 0px;
            }
            .title{
                border:solid 0px;
                background-color: rgba(0,0,0,0);
                font-size:40px;
            }
            .header{
                padding-top:20px;
                font-size:60px;
                height:200px;
                text-align: center;
            }
            .direction{
                font-size:50px;
                margin:20px;
            }
            .box{
                padding: 0.5em 1em;
                margin: 2em 0;
                font-weight: bold;
                color: #6091d3;/*文字色*/
                background: white;
                border: solid 5px #6091d3;/*線*/
                border-radius: 30px;/*角の丸み*/
            }
            .driver{
                font-size:80px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <nav class="header is-primary has-text-white  has-background-info">
                <div class="header ">
                    受注内容確認システム
                </div>
            </nav>
            <div>
                <div class="direction title is-4" >{{$msg}}</div>
                <div class="columns is-multiline ">
                    <div class="column is-6">
                        <a href="./orders/ks">
                            <div class="box ">
                                <div class="level-item has-text-centered">
                                    <div>
                                        <div class="driver">日通</div>
                                        <p class="leave-act">
                                            未処理：1件<br>
                                            承認待ち：2件
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-6">
                        <a href="./orders/ds">
                            <div class="box">
                                <div class="level-item has-text-centered">
                                    <div>
                                    <div class="driver">備後</div>
                                        <p class="leave-act">
                                            未処理：0件<br>
                                            承認待ち：0件
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-6">    
                        <a href="/orders/ys">
                            <div class="box">
                                <div class="level-item has-text-centered">
                                    <div>
                                    <div class="driver">名鉄</div>
                                        <p class="leave-act">
                                            未処理：0件<br>
                                            承認待ち：0件
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-6">
                        <a href="/orders/sx">
                            <div class="box">
                                <div class="level-item has-text-centered">
                                    <div>
                                    <div class="driver">王子</div>
                                        <p class="leave-act">
                                            未処理：0件<br>
                                            承認待ち：0件
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>