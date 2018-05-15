<?php
session_start();
if(!isset($_SESSION['count'])) {
      $_SESSION['count'] = 1;
} else {
      $_SESSION['count']++;
}

if($_SESSION['count'] > 10) {
      unset($_SESSION['count']);
          session_destroy();
}

$cou = $_SESSION['count'];

print("<html>\n");
print("<body>\n");
print("session cou = $cou<br>\n");
print("</body>\n");
print("</html>\n");
?>
