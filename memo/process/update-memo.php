<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_judul = $_POST["postJudul"];
  $post_isi = $_POST["postIsi"];
  $post_tanggal = $_POST["postTanggal"];
  $post_memo_id = $_POST["postmemoId"];

  $sql = "UPDATE memos
SET judulmemo = '$post_judul', isimemo = '$post_isi', tanggalmemo = '$post_tanggal'
WHERE memoId = $post_memo_id;";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'memo.php?id='.$post_memo_id, TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>