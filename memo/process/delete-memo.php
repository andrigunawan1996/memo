<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $sql = "DELETE FROM memos
          WHERE memoId = $_POST[cancel]";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'daftar-memo.php', TRUE, 302);
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>