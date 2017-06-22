<?php
require 'config/db-config.php';
session_start();
?>
<html>
<head>
  <title>Memo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .card {
      height: 450px;
    }
    .card-image {
      max-height: 300px;
      max-width: 350px;
      width: auto;
    }
    .image-display {
      height: 300px;
      width: auto;
    }
    .image-caption {
      height: 100px;
}
    .row{
    margin-top:50px;
    }
  </style>
</head>

<body style="background : url(images/b.jpg)">

<?php 
if(isset($_SESSION["isLoggedIn"]) && $_SESSION["user"] == TRUE){ 
?>
  <bc>
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand naik" href="#">Memo</a>
  </div>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="process/logout-user.php" class="naik">Logout</a></li>
    </ul>
  </div>
</nav>
</bc>

<h3>
  <div class="container">
  <div class="row">
  <?php
    $sql = "SELECT * FROM memos";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $post_link_detail = 'memo.php?id='.$row["memoId"];
  ?>
    <div class="col-sm-4 card">
    <center><img src="images/a.ico"  style="width:304px;height:228px;"></center>
    <div class="image-caption">
        <center>
        <a href='<?=$post_link_detail?>'><h1><?=$row["judulmemo"]?></h1></a>
        </center>
    </div>
    </div>
    <?php
    }
  }
  else {
    echo "Tidak ada memo";
  }
  $conn->close();
  ?> 
  </div>
  </div>
  
<?php } 
else if(isset($_SESSION["isLoggedIn"]) && $_SESSION["user"] == FALSE)
{ ?>
  <bc>
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand naik" href="#">Memo</a>
  </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="tambah-memo.php" class="naik">Tambah Memo</a></li>
      <li><a href="process/logout-user.php" class="naik">Logout</a></li>
    </ul>
  </div>
</nav>
</bc>

<div class="container">
<div class="row">
<?php
  $sql = "SELECT * FROM memos where userId = $_SESSION[userId]";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $post_link_detail = 'memo.php?id='.$row["memoId"];
?>
  <div class="col-sm-4 card">
  <center><img src="images/a.ico"  style="width:304px;height:228px;"></center>
  <div class="image-caption">
    <center>
    <a href='<?=$post_link_detail?>'><h1><?=$row["judulmemo"]?></h1></a>
    </center>
  </div>
  </div>
  <?php
    }
  } else {
    echo "Tidak Ada memo";
  }
  $conn->close();
?>
</div>
</div>
<?php 
  } 
  else{ 
     echo "Anda belum login";
} 
?> 
</h3>
</body>
</html>