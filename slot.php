<?php
  $reel = "";
  $message =  "";

  session_start();

  if(isset($_POST['start'])){
    $reel_1 = rand(1,3);
    $reel_2 = rand(1,3);
    $reel_3 = rand(1,3);
    $reel = $reel_1."&nbsp;".$reel_2."&nbsp;".$reel_3;

    if($reel_1 == $reel_2 && $reel_1 == $reel_3){
      $message = "<font color=\"red\">YOU WIN!</font>";
    }else { 
      $message = "<font color=\"blue\">YOU LOSE!</font>";
    }
  }


echo<<<EOD

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>slot-game</title>
    </head>

    <body>
      <div style = "text-align: center;">
        <h1>Slot Game</h1>
        <p>
           <form action="slot.php" method="post">
             <input type="submit" name="start" value="start" />
          </form>
        </p>
        <p><font size="10">$reel</font></p>
        <p>$message</p>
      </div>
    </body>
  </html>

EOD;

?>
