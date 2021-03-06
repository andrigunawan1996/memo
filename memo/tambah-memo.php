<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		a:visited {
			color: white;
		}
	</style>
</head>

<body style="background:url(images/b.jpg)">
<div class="container">
  <h1>Add New Memo!</h1>
  <form method="post" action="process/tambah-memo.php">
    <div class="form-group">
      <label for="postJudul">Judul:</label>
      <input type="text" class="form-control" id="postJudul" name="postJudul">
    </div>
    <div class="form-group">
      <label for="postIsi">Isi Memo:</label>
      <textarea class="form-control" rows="5" id="postIsi" name="postIsi"></textarea>
    </div>
    <div class="form-group">
      <label for="postTanggal">Date (YYYY-MM-DD):</label>
      <input type="text" class="form-control" id="postTanggal" name="postTanggal">
    </div>
    <button type="submit" class="btn btn-default">Save</button>
  </form>
</div>
</body>
</html>