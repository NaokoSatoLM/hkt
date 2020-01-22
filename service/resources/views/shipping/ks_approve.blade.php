<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>
    </div>
  </section>

<!-- サンプル２ -->
  <section class="section has-background-primary">
  <h2 class="title">セクションタイトル</h2>

  <div class="container">
    <h1 class="title">タイトル1</h1>
    <div class="box">
      Foo
    </div>
  </div>

  <div class="container">
    <h1 class="title">タイトル2</h1>
    <div class="box content">
      Bar
    </div>
  </div>

  <div class="container">
    <h1 class="title">タイトル3</h1>
    <div class="box content">
      Baz
    </div>
  </div>
  </section>
<!-- サンプル３ -->

  <div class="columns notification is-primary is-mobile  is-multiline">
                <div class="column is-8" style="border: 1px solid;">最下部の要素7</div>
                <div class="column is-3" style="border: 1px solid;">最下部の要素8</div>
                <div class="column"      style="border: 1px solid;">最下部の要素9</div>
                <div class="column" style="border: 1px solid;">最下部の要素10</div>
                <div class="column is-4" style="border: 1px solid;">最下部の要素11</div>
                <div class="column is-4" style="border: 1px solid;">最下部の要素12</div>
                <div class="column is-4" style="border: 1px solid;">最下部の要素13</div>
            </div>

<!-- サンプル4 -->
    <div class="container">
    <p style="text-align: center;margin: 20px">以下columnsクラスで全要素が囲まれています。</p>
    <!--以下からwrapperクラス-->
    <div class="columns">
        <!--以下からネストしたクラス-->
        <div class="column">
            <div class="columns notification is-primary">
                <!--ネストした最下部のブロッククラス１-->
                <div class="column has-text-centered">最下部の要素1</div>
            </div>
            <!--ネストした中部ブロッククラス１-->
            <div class="columns notification is-primary">
                <!--ネストした最下部のブロッククラス2-->
                <div class="column has-text-centered">最下部の要素2</div>
            </div>
        </div>
        <!--以下からネストしたクラス-->
        <div class="column sample2">
            <div class="columns notification is-primary has-text-centered">
                <!--ネストした最下部のブロッククラス3-->
                <div class="column">最下部の要素3</div>

            </div>
            <div class="columns notification is-primary has-text-centered">
                <!--ネストした最下部のブロッククラス4-->
                <div class="column">最下部の要素4</div>

            </div>
        </div>
    </div>
    <p style="text-align: center;margin: 20px">is-mobileでMBにもグリッドシステムを適用</p>
    <div class="columns">
        <div class="column sample1">
            <div class="columns notification is-primary is-mobile">
                <div class="column" style="border: 1px solid;">最下部の要素1
                    <!-- 以下はFont Awesomeを利用 -->
                    <button class="fas fa-spinner fa-pulse"></button>
                </div>
                <div class="column" style="border: 1px solid;">最下部の要素2
                    <!--以下はFont Awesomeを利用-->
                    <button class="fas fa-male fa-pulse"></button>
                </div>
                <div class="column" style="border: 1px solid;">最下部の要素3</div>
                <div class="column" style="border: 1px solid;">最下部の要素4</div>
                <div class="column" style="border: 1px solid;">最下部の要素5</div>
                <div class="column" style="border: 1px solid;">最下部の要素6</div>
            </div>
            <div class="columns notification is-primary is-mobile  is-multiline">
                <div class="column is-8" style="border: 1px solid;">最下部の要素7</div>
                <div class="column is-3" style="border: 1px solid;">最下部の要素8</div>
                <div class="column" style="border: 1px solid;">最下部の要素9</div>
                <div class="column" style="border: 1px solid;">最下部の要素10</div>
                <div class="column" style="border: 1px solid;">最下部の要素11</div>
                <div class="column" style="border: 1px solid;">最下部の要素12</div>
            </div>
        </div>
    </div>
<!-- サンプル5 -->
<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Tweets</p>
      <p class="title">3,456</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Following</p>
      <p class="title">123</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Followers</p>
      <p class="title">456K</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Likes</p>
      <p class="title">789</p>
    </div>
  </div>
</nav>
</div>
<!-- サンプル6 -->
<nav class="level ">
  <p class="level-item has-text-centered is-flex">
    <a class="link is-info">Home</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Menu</a>
  </p>
  <p class="level-item has-text-centered">
    <img src="https://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Reservations</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Contact</a>
  </p>
</nav>
</section>
  </body>
</html>