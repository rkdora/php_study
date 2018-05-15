<?php
  //セッション開始
  session_start();

  //リセット
  if(isset($_POST['reset'])){
    unset($_SESSION['sessions']);
    unset($_SESSION['clicks']);
  }

  //初期化＆カウントアップ
  if(!isset($_SESSION['sessions'])){
    $message = "Session start!!<br>";
    $_SESSION['sessions'] = 1;
    $_SESSION['clicks'] = 0;
  }else {
    $message = "Session running now!!<br>";
    $_SESSION['sessions']++;
    //クリックされた時
    if(isset($_POST['click'])){
      $_SESSION['clicks']++;
    }
  }

  $sessions = $_SESSION['sessions'];
  $clicks = $_SESSION['clicks'];

  echo<<<EOD

    <html>
      <head>
        <meta charset = "UTF-8">
        <title>session study</title>
      </head>
      <body>
        <div style = "text-align: center;">
          <h1>Session Study</h1>
          <h2>$message</h2>
            <p> Sessions:  $sessions</p>
            <form action = "session.php" method = "post">
              <input type = "submit" name = "click" value = "click" />
            </form>
            <p>clicks: $clicks</p>
            <form action = "session.php" method = "post">
              <input type = "submit" name = "reset" value = "reset" />
            </form>
        </div>
      </body>
    </html>
EOD;

?>
