<?php
require '../config/db-config.php';
require '../config/constant-config.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $judulMemo = $_POST["postJudul"];
  $isiMemo = $_POST["postIsi"];
  $tanggalMemo = $_POST["postTanggal"];
  $userid = $_SESSION["userId"];

  $sql = "INSERT INTO memos (judulmemo, isimemo, tanggalmemo, userId)
          VALUES ('$judulMemo','$isiMemo' ,'$tanggalMemo' ,'$userid')";
          
  if ($conn->query($sql) == TRUE) {
    header('Location: '.URL.'daftar-memo.php', TRUE, 302);
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>