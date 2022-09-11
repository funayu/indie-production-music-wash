<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

// データ格納
$to = $_POST["email"];//メール送信先の設定
$subject = "【MUSIC WASH】お問い合わせありがとうございます";//メールの件名
$header = "From: info@tdp.com";//送信元アドレス
$header .= "\n";//改行
$header .= "Bcc: tiro349@moimoi.re";//確認メール管理者受信用
//$header .= "Bcc: tdp@sairafactory.com";//確認メール管理者受信用
$message = "この度はお問い合わせいただきありがとうございます。" . "\n" . "お問い合わせ内容は下記となります。" . "\n" .
"\n" .
"お名前：" . $_POST["name"] . "\n" .
"メールアドレス：" . $_POST["email"] . "\n" .
"お問い合わせ内容：" . $_POST["inquiry_detail"] . "\n" .

"\n" .
"※2営業日以内に返信がない場合は、お手数ですがcontact@music-wash.comまでご連絡ください。";

// メール送信
mb_send_mail($to, $subject, $message, $header);

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/script.js" defer></script>
</head>

<body class="contact contact-complete">
  <!-- ハンバーガークリックで表示されるレイヤー -->
  <div id="coverlayer"></div>
  <!--ハンバーガーボタン-->
  <div class="btnHamburger">
    <span class="line line_01"></span>
    <span class="line line_02"></span>
    <span class="line line_03"></span>
  </div>
  <!--.btnHamburgerの終了タグ-->
  <header>
    <div class="inner">
      <h1>
        <a href="index.html">
          <img src="images/logo/logotypo.svg" alt="長野県軽井沢の軽井沢中央スキー場で2022年9月3日・4日の2日間開催される音楽フェスティバル「MUSIC WASH」のロゴ" />
        </a>
      </h1>
      <a href="index.html#ticket" class="btnTicket"><i class="fa-solid fa-ticket-simple icon"></i>TICKET</a>
    </div>
  </header>
  <aside>
    <div class="drawer_menu">
      <nav>
        <ul>
          <li><img src="images/nav/news_icon.svg" alt="" /><a href="index.html#news">NEWS</a></li>
          <li><img src="images/nav/artist-icon.svg" alt="" /><a href="index.html#artists">ARTISTS</a></li>
          <li><img src="images/nav/time_table_icon.svg" alt="" /><a href="index.html#time_table">TIME&nbsp;TABLE</a>
          </li>
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
          <a href="https://www.facebook.com/facebook/?brand_redir=123739327653840"><img
              src="images/sns/facebook_blue.svg" alt="Facebookアイコン" /></a>
        </div>
      </div>
    </div>
    <!--.sns_linkの終了タグ-->
  </aside>
  <main>
    <article>
      <div class="inner">
        <h2><span>C</span>ONTACT</h2>
        <div class="message">
          <p>お問い合わせいただきありがとうございます。<br>
            2営業日以内にご返信させていただきますので<br class="sp">
            今しばらくお待ち下さい。
          </p>
        </div>
        <div class="main_button">
          <input type="button" value="戻る" onClick="location.href='index.html'">
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