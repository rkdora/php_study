<?php
  $message = "";

  session_start();

  if(!isset($_SESSION['money']) || !isset($_POST['start'])){
    $_SESSION['money'] = 1000;
  }

  if(isset($_POST['start'])){

    if($_SESSION['money'] > 0){
      
      $_SESSION['money'] -= 100;

      $reel_1 = rand(1,4);
      $reel_2 = rand(1,4);
      $reel_3 = rand(1,4);

      $message = $message. "<font size=\"20\">[".$reel_1."]&nbsp;&nbsp;[".$reel_2."]&nbsp;&nbsp;[".$reel_3."]&nbsp;&nbsp;</font><br /><br />";

      if($reel_1 == $reel_2 && $reel_1 == $reel_3){
        $_SESSION['money'] += 500;
        $message = $message. "<font color=\"red\" size=\"20\">当たり！500円ゲット！</font>";
      }else{
        $message = $message. "・・・ハズレ残念！<br /><br />";
      }

    }else{
      $message = $message."お金が足りないよ！<br /><br />";
    }

    $message = $message."所持金：".$_SESSION['money']."円<br /><br />";
  }

  if($_SESSION['money'] > 0){

    $buttonName = 'start';
    $buttonValue = 'スロットを回す！';

  }else{
    $buttonName = 'replay';
    $buttonvalue = 'ゲームオーバー（再チャレンジする？）';

  }

echo<<<EOD
  <html>
    <head>
      <meta charset="UTF-8">
      <title>slot-game</title>
    </head>

    <body>
      <div style="text-align:center;">
      <h1>Slot Game</h1>
      <p>スロットは一回100円です</p>
        <form action="slot-sample.php" method="post">
          <input type="submit" name="$buttonName" value="$buttonValue" />
        </form>
        $message
      </div>
    </body>
  </html>
EOD;

?>
