<?php
if($_FILES) {
		echo $_FILES['file']['name'];
}
if(is_uploaded_file($_FILES['file']['tmp_name'])) {
		echo "upload";
/*
		$e = $_FILES['file']['error'];
		if($e != 0) {
			$msg = "";
			if($e == 1 || $e == 2) {
					$msg = "ไฟล์ที่อัปโหลดมีขนาดเกินกำหนด";
			}
			else {
					$msg = "เกิดข้อผิดพลาดในการอัปโหลดไฟล์";
			}
			echo '<script> alert('.$msg.'); </script>';
		}
		else {
 */
				@mkdir("../image/CPE27");
				$target = "../image/CPE27/".$_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], $target);
				/*
				$name = $_FILES['file']['name'];
				$tmp_name = $_FILES['file']['tmp_name'];
				$accept = array("image");
				if(!in_array($type, $accept)) {
						echo '<script> alert("ต้องเป็นไฟล์ภาพเท่านั้น"); </script>';
				}
				$ext =  pathinfo($name, PATHINFO_EXTENSION);
				$newname = "hhhhh" . ".$ext";
				$target = "../image/CPE27/$newname";
				move_uploaded_file($_FILES['file']['tmp_name'], $target);
				echo "<h3>จัดเก็บไฟล์เรียบร้อยแล้ว</h3>";
				 */
		}
}
?>
