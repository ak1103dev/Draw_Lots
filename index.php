<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8"></meta>
		<meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
		<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
		<meta content="randomKU_CPE Thailand" name="description"></meta>
		<meta content="ak1103" name="author"></meta>
    <title>CPE27&CPE28</title>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Random</a>
				</div>
				<div class="collapse navbar-collapse" id="Menu">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#CPE27">CPE27</a></li>
						<li><a href="#CPE28">CPE28</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="login" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
						<h4 class="modal-title">Login</h4>
					</div>
					<div class="modal-body">
						<form method="post" role="form">
							<div class="form-group">
								<label>Username: </label>
								<input name="username" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Password: </label>
								<input name="password" type="password" class="form-control">
							</div>
							<button type="submit" class"btn btn-primary">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="home" class="container">
				<center>
				<?php 
					for ($i = 0; $i < 5; $i++)
							echo "<br>";
				?>
				<form method="post">
						<button id="random" class="btn btn-info btn-lg" type="submit" name="random">Random</button>
				</form>
				</center>
		</div>
		<div id="CPE27" class="container">
				<h1> CPE27 </h1>
				<center>
				<br><br>
				<img src="bike.jpg" width="640" height="480">
				</center>
		</div>
		<div id="CPE28" class="container">
				<h1> CPE28 </h1>
				<center>
				<br><br>
				<img src="bike.jpg" width="640" height="480">
				</center>
		</div>
  </body>
</html>

<?php
include 'config/db.php';
$host = DB_HOST;
$name = DB_NAME;
$user = DB_USER;
$pass = DB_PASS;
$port = DB_PORT;
$myname = array();
$i = 0;

if (ISSET($_POST['random'])) {
		try {
				$db_conn = new PDO('mysql:host=' . $host . ';dbname=' . $name . ';charset=utf8;port=' . $port, $user, $pass);
				$sql = 'SELECT Name FROM CPE27'; 
				$stmt = $db_conn->query($sql);
				while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
						$myname[$i] = $result['Name'];
						$i++;
				}
				$random = array_rand($myname, 1);
				//echo 'xxx'.$myname[$random];
				//echo '<script> alert(' . $myname[$random] . '); </script>';
				echo "<script> document.getElementById('random').innerHTML = '$myname[$random]'; </script>";
		} catch (PDOException $error) {
				echo 'error: '. $error->getMessage();
		}
}
?>
