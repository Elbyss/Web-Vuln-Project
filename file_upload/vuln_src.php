<?php
function getImage ($name) {
	$name = str_replace(' ', '_', $name);
	if (file_exists("img/" . $name) === false)
		return "img/noimage";
	else
		return "img/" . $name;
}

session_start();
$status = "";
$err = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_FILES['image']['tmp_name'])) { //Image
		$uploaddir = "img/";
		$name = $_SESSION['name'];
		$name = str_replace(' ', '_', $name);
		$name = md5($name);

		// echo $filename;
		$filename = $_FILES['image']['name'];
		$filename_ext = strtolower(array_pop(explode('.',$filename)));
		$allow_ext = array("jpg", "png", "hwp", "pptx", "docx", "xlsx", "pdf");
		
		$uploadfile = $uploaddir.$name;
		$ftype = exif_imagetype($_FILES['image']['tmp_name']);
		if ($ftype >= 1 && $ftype <= 18) {
			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))
				if (in_array($filename_ext, $allow_ext))
					$status = "업로드 완료";
			else {
				$status = "에러 발생";
				$err = 1;
			}
		} else {
			$status = "이미지 파일이 아님";
			$err = 1;
		}
	} else { //Name
		$newname = $_POST["name"];
		$newname = substr($newname, 0, 32);
		
		if(preg_match('/[^a-z_\- .0-9]/i', $newname)) {
			$status = "부적절한 이름";
			$err = 1;
		} else {
			$status = "변경 완료";
			if (file_exists("img/" . str_replace(' ', '_', $_SESSION['name']))) {
				rename("img/" . str_replace(' ', '_', $_SESSION['name']), "img/" . str_replace(' ', '_', $newname));
			}
			$_SESSION['name'] = $newname;
		}
	}
}
?>

<body>
	<div style="margin-left:30px; margin-top:20px; font-size: 20px; margin-bottom:10px">
		<?php
			echo '<h4 align="center" ';
			if ($err == 0) {
				echo 'style="color:green;">';
			} else {
				echo 'style="color:red;">';
			}
			echo $status . "</h4>";
		?>
		
		<hr>
		<p style="font-family: sans-serif; font-weight:700; margin-top:10px; font-size: 20px">
			이름: <a style="color: black; opacity: 0.6; text-decoration: none;"><?php echo $_SESSION['name'] ?></a><br>
		</p>
		
		<form action="" method="POST" style="font-family: sans-serif; font-weight:700; margin-top:10px; font-size: 20px">
			<input type="text" maxlength="32" name="name"></input>
			<input type="submit" value="수정"/>
		</form>
		<br>
		<hr>
		<img src="<?php echo getImage($_SESSION['name']); ?>" style="margin-top:20px; width:256px; height:256px;">
		
		<form action="" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
			<input type="file" name="image" />
			<input type="submit" value="업로드"/>
		</form>
	</div>
</body>
