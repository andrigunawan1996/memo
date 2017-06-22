<?php
require 'config/db-config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Memo</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
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
<body style="background:url(images/b.jpg)">

  <?php 
  if(isset($_SESSION["isLoggedIn"]) && $_SESSION["user"]==TRUE){ 
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
    <a class="navbar-brand naik" href="daftar-memo.php">Memo</a>
  </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="process/logout-user.php" class="naik">Logout</a></li>
    </ul>
  </div>
  </nav>
  </bc>

  <div class="container">
  <?php
    $post_id = $_GET["id"];
    if ($post_id == "") {
    die("Invalid Request");
  }
    $sql = "SELECT * FROM memos WHERE memoId = $post_id";
    $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
        ?>
          <div class="row">
        
          <div class="col-sm-7">
            <h1><?=$row["judulmemo"]?></h1>
            <h2><?=$row["isimemo"]?></h2>
            <h3><?=$row["tanggalmemo"]?></h3>
          </div>
          </div>
      <?php
      }
    }
    else{
        echo "Tidak ada memo";
      }
    ?>
  </div>


  <?php 
  } 
  else if(isset($_SESSION["isLoggedIn"]) && $_SESSION["user"]==FALSE){ 
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
    <a class="navbar-brand naik" href="daftar-memo.php">Memo</a>
  </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="process/logout-user.php" class="naik">Logout</a></li>
    </ul>
  </div>
  </nav>
  </bc>


  <div class="container">
  <?php
    $post_id = $_GET["id"];
    if ($post_id == "") {
    die("Invalid Request");
  }
    $sql = "SELECT * FROM memos WHERE memoId = $post_id";
    $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        ?>
          <div class="row">
          
          <div class="col-sm-7">
            <h1><?=$row["judulmemo"]?></h1>
            <h2><?=$row["isimemo"]?></h2>
            <h3><?=$row["tanggalmemo"]?></h3>
            <form action="update-memo.php" method="post">
              <button class="btn btn-info" name="update" value="<?=$row["memoId"]?>" type="submit">Edit Memo
              </button>
            </form>
            <form action="process/delete-memo.php" method="post"> 
              <input type="hidden" class="form-control" name="postmemoId" value='<?=$row["memoId"]?>'>
              <button class="btn btn-danger" name="cancel" value="<?=$row["memoId"]?>" type="submit">Hapus Memo
              </button>
            </form>
          </div>
          </div>
      <?php
      }
    }
    else{
        echo "Tidak ada memo";
      }
    ?>
  </div>

  <?php 
  } 
  else{ 
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
  <?php 
  } 
  ?>
</body>
</html>