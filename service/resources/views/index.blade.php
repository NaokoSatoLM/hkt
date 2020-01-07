<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <title>index</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
                margin: 20px;
            }

            .title{
            border:solid 0px;
            background-color: rgba(0,0,0,0);
            cursor:pointer;
            }

        </style>
    </head>
    <body>
            <div class="content">
                <div>{{$msg}}</div>
                    </div>
                    <nav class="level ">
                        <div class="level-item has-text-centered is-gapless">
                            <div>
                            <p class="heading">日通</p>
                            <form action="ks_index" method="GET" name="ks" id=ks>
                                <input type="submit" name="ks" value="ks" class="title">
                            </form>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                            <p class="heading">備後</p>
                            <form action="ds_index" method="GET" name="ds" id="ds" >
                                <input type="submit" name="ds" value="ds" class="title">
                            </form>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                            <p class="heading">名鉄</p>
                            <form action="ys_index" method="GET" name="ys" id="ys">
                                <input type="submit" name="ys" value="ys" class="title">
                            </form>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                            <p class="heading">王子</p>
                            <form action="sx_index" method="GET" name="sx" id="sx">
                                <input type="submit" name="sx" value="sx" class="title">
                            </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
    </body>
</html>
