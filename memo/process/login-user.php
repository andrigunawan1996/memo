<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username_post = $_POST["Username"];
  $Password_post = $_POST["Password"];
  $sql = "SELECT * FROM users WHERE Username = '$Username_post' AND Password = '$Password_post'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
     session_start();
      $_SESSION["isLoggedIn"] = TRUE;
      $_SESSION["Username"] = $row["Username"];
      $_SESSION["userId"] = $row["userId"];
      if($row["Username"]=='admin'){
        $_SESSION["user"]=TRUE;
      }
      else{
        $_SESSION["user"]=FALSE; 
      }
      echo "Halo ".$row["Username"]." ".$row["Password"];
    }
    header('Location: '.URL.'daftar-memo.php', TRUE, 302);
  } else {
    echo '<center>"Username/Password Salah"</center>';
  }
  $conn->close();
}
?>

