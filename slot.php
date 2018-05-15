<?php
  $message =  "";

  session_start();

  if(isset($_POST['start'])){
    $message =  "Hello world!";
  }

?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>slot-game</title>
    </head>

    <body>
      <h1>Slot Game</h1>
      <p>
        <form action="slot.php" method="post">
          <input type="submit" name="start" value="start" />
        </form>
       <?php echo $message ?>
      </p>
    </body>
  </html>

