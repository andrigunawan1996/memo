<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Username_post = $_POST["Username"];
	$Email_post = $_POST["email"];
	$Password_post = $_POST["Password"];

  $sql = "INSERT INTO users (Username, email, Password)
VALUES ('$Username_post', '$Email_post' ,'$Password_post')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'index.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>