<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">

    <title>{{$title}}</title>

    <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <!-- Css -->
        {{$css}}
    <!-- js -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        {{$js}}
    <!-- Bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    @yeild('content')
     <!-- 各bladeのbodyタグがここに来る -->
</head>