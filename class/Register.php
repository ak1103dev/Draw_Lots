<?php
class Register
{
		public function __construct()
		{
				$this->insert_data();
		}

		private function insert_data()
		{
				$host = DB_HOST;
				$name = DB_NAME;
				$user = DB_USER;
				$pass = DB_PASS;
				$port = DB_PORT;

				if ($_SERVER['REQUEST_METHOD'] == "POST") {
						try {
								$db_conn = new PDO('mysql:host=' . $host . ';dbname=' . $name . ';charset=utf8;port=' . $port, $user, $pass);
								$sql = 'INSERT INTO CPE27 VALUES(:id, :name)'; 
								$stmt = $db_conn->prepare($sql);
								$stmt->execute(array(
										':id' => $_POST['id'] ,
										':name' => $_POST['name'])
								);
						} catch (PDOException $error) {
								echo 'error: '. $error->getMessage();
						}
				}
		}
}
