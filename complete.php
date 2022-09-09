<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$inquiry_detail = isset($_POST["inquiry_detail"])? $_POST["inquiry_detail"] : "";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="description" content="MUSIC WASHへのお問い合わせはこちらからお願いします。" />
  <title>【MUSIC WASH】お問い合わせフォーム 完了画面</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/script.js" defer></script>
</head>

<body class="contact confirm">
  <!-- ハンバーガークリックで表示されるレイヤー -->
  <div id="coverlayer"></div>
  <header>
    <div class="inner">
      <!--ハンバーガーボタン-->
      <div class="btnHamburger">
        <span class="line line_01"></span>
        <span class="line line_02"></span>
        <span class="line line_03"></span>
      </div>
      <!--.btnHamburgerの終了タグ-->
      <h1>
        <a href="index.html">
          <img src="images/logo/logotypo.svg" alt="長野県軽井沢の軽井沢中央スキー場で2022年9月3日・4日の2日間開催される音楽フェスティバル「MUSIC WASH」のロゴ" />
        </a>
      </h1>
      <a href="index.html#ticket" class="btnTicket"><i class="fa-solid fa-ticket-simple icon"></i>TICKET</a>
    </div>
  </header>
  <div class="drawer_menu">
    <nav>
      <ul>
        <li><img src="images/nav/news_icon.svg" alt="" /><a href="index.html#news">NEWS</a></li>
        <li><img src="images/nav/artist-icon.svg" alt="" /><a href="index.html#artists">ARTISTS</a></li>
        <li><img src="images/nav/time_table_icon.svg" alt="" /><a href="index.html#time_table">TIME&nbsp;TABLE</a></li>
        <li><img src="images/nav/ticket_icon.svg" alt="" /><a href="index.html#ticket">TICKET</a></li>
        <li><img src="images/nav/goods_icon.svg" alt="" /><a href=index.html#goods">GOODS</a></li>
        <li><img src="images/nav/access_icon.svg" alt="" /><a href="index.html#access">ACCESS</a></li>
        <li><img src="images/nav/contact_icon.svg" alt="" /><a href="#">CONTACT</a></li>
      </ul>
    </nav>
    <div class="sns_link">
      <div>
        <a href="https://twitter.com/twitterjp"><img src="images/sns/twitter_blue.svg" alt="Twitterアイコン" /></a>
      </div>
      <div>
        <a href="https://www.instagram.com/instagram/"><img src="images/sns/Instagram_gradient@96.png"
            alt="Instagramアイコン" /></a>
      </div>
      <div>
        <a href="https://www.facebook.com/facebook/?brand_redir=123739327653840"><img src="images/sns/facebook_blue.svg"
            alt="Facebookアイコン" /></a>
      </div>
    </div>
  </div>
  <!--.sns_linkの終了タグ-->
  <main>
    <article>
      <div class="inner">
        <h2><span>C</span>ONTACT</h2>
        <form action="complete.php" method="post" id="contact">
          <!-- input:hiddenの内容 -->
          <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
          <input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
          <input type="hidden" name="inquiry_detail"
            value="<?php echo htmlspecialchars($inquiry_detail,ENT_QUOTES,"UTF-8"); ?>">
          <!-- input:hiddenの内容ここまで -->
          <dl>
            <dt>お名前</dt>
            <dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
            <dt>メールアドレス</dt>
            <dd><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?></dd>
            <dt>お問い合わせ内容</dt>
            <dd><?php echo htmlspecialchars($inquiry_detail,ENT_QUOTES,"UTF-8"); ?></dd>
          </dl>
          <div class="submit_button"><input type="submit" value="送信する" /></div>
          <div class="back_button">
            <input type="button" value="戻る" onClick="history.back()">
          </div>
        </form>
      </div>
      <!-- .innerの修了タグ -->
    </article>
  </main>
  <footer>
    <div class="logo"><img src="images/logo/logomark_white.svg" alt="MUSIC WASH FESTIVALのロゴマーク" /></div>
    <div class="sns_link">
      <div>
        <a href="https://twitter.com/twitterjp"><img src="images/sns/twitter_white.svg" alt="Twitterアイコン" /></a>
      </div>
      <div>
        <a href="https://www.instagram.com/instagram/"><img src="images/sns/instagram_white.svg"
            alt="Instagramアイコン" /></a>
      </div>
      <div>
        <a href="https://www.facebook.com/facebook/?brand_redir=123739327653840"><img
            src="images/sns/facebook_white.svg" alt="Facebookアイコン" /></a>
      </div>
    </div>
    <small>Copyright &copy; MUSIC WASH FESTIVAL</small>
  </footer>
</body>

</html>