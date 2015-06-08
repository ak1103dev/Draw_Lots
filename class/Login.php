<?php
class Login
{
		private $db_connection = null;

		public function __construct()
	 	{
				session_start();
				if (isset($_GET["logout"])) {
						$this->doLogout();
				}
				else if (isset($_POST["login"])) {
						echo "login ";
						$this->dologinWithPostData();
				}
		}

		private function dologinWithPostData()
		{
				if (empty($_POST['username'])) {
						echo "<script> alert('Username field was empty.'); </script>";
				}
				else if (empty($_POST['password'])) {
						echo "<script> alert('Password field was empty.'); </script>";
				}
				else if (!empty($_POST['password']) && !empty($_POST['username'])) {
								echo 'beforeConnect ';
								$this->conn_db();
								echo 'afterConnect ';
								$sql = "SELECT * FROM Account"; 
								$this->split_data($sql);
								/*
						try {
								$username = $_POST['username'];
								$password = $_POST['password'];
								//$sql = "SELECT COUNT(*) AS cnt FROM Account WHERE Username='$username' && Password='$password'"; 
								$stmt = $this->$db_connection->query($sql);
								//echo $stmt;
								//echo $stmt->fetch()['cnt'];
								if ($stmt->rowCount() == 1) {
										echo "true";
								}
								else {
										echo "false";
								}
						} catch (PDOException $e) {
								echo "A database problem has occurred : $e->getMessege()";
						}
								 */
				}
		}

		private function doLogout()
		{
				$_SESSION = array();
				session_destroy();
		}

		private function conn_db()
		{
				try {
						$host = DB_HOST;
						$name = DB_NAME;
						$user = DB_USER;
						$pass = DB_PASS;
						$this->$db_connection = new PDO("mysql:host=$host;dbname=$name;port=80;charset=utf8", $user, $pass);
				} catch (PDOException $e) {
						echo "Could not connect to database";
						exit;
				}
		}

		private function split_data($mysql)
		{
				try {
						$stmt = $this->db_connection->query($mysql);
						while ($row = $stmt->fetch()) {
								echo $row['Username'] . ' by ' . $row['Password'] . "\n";
						}
				} catch (PDOException $e) {
						echo "A database problem has occurred : $e->getMessege()";
				}
		}
}
