<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8"></meta>
		<meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
		<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
		<meta content="randomKU_CPE Thailand" name="description"></meta>
		<meta content="ak1103" name="author"></meta>
    <title>admin-register</title>

		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></link>
		<script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <center>
		<br><h1>Register CPE27</h1><br><br>
    </center>
		<form method="post" enctype="multipart/form-data" role="form" class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<div class="form-group">
				<label for="name">ID:</label>
				<input name="id" type="text" class="form-control" placeholder="Ex. 1111 มาจาก 4 ตัวท้ายของเลขประจำตัว">
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input name="name" type="text" class="form-control" placeholder="Ex. หนึ่ง">
			</div>
			<div class="form-group">
				<label for="image">Image:</label>
				<input type="file" id="imgae_file" accept="image/*">
			</div>
			<button type="submit" class="btn btn-primary">Regist</button>
		</form>
  </body>
</html>

<?php
include '../config/db.php';
include '../class/Register.php';
$register = new Register();
?>
