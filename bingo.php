<?php

  $nums = [];

  for ($i = 0; $i < 5; $i++) {
    $col = range($i * 15 + 1, $i * 15 + 15);
    shuffle($col);
    $nums[$i] = array_slice($col, 0, 5);
  }

  $nums[2][2] = "FREE";

  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BINGO!</title>
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      font-size: 16px;
    }
    .container {
      margin: 0 auto;
      width: 322px;
    }
    td, th {
      width: 60px;
      height: 45px;
    }

    td {
      background: #F06292;
      color: #fff;
    }

    th {
      color: #F06292;
      font-size: 22px;
    }
  </style>
</head>
<body>
  <div class="container">
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for ($i = 0; $i < 5; $i++) : ?>
      <tr> 
        <?php for ($j = 0; $j < 5; $j++) : ?>
        <td><?= h($nums[$j][$i]); ?></td>
       <?php endfor; ?>
      </tr>
      <?php endfor; ?>
   </table>
  </div>
</body>
</html>
