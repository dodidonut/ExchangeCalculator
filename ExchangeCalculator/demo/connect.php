<?php  
	// if (@_SERVER['HTTP_HOST'=='localhost']) {
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'root';
		$DB_PASS_READER ='';
		// $DB_USER_READER = 'dodidonut';
		// $DB_PASS_READER ='sJADVXa29WRGHRHL';
		$DB_NAME = 'db102_exchangerate';
		// echo "localhost";
		// $DB_NAME = 'exchang_rate';
	// } else {
	// 	// บนserver imsu.co
		// $DB_SERVER = 'localhost';
		// $DB_USER_READER = 'u13580201';
		// $DB_PASS_READER ='yVpJiS4ecu';
		// $DB_NAME = 'db13580201';
	// }

	//คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);
	//การตรวจสอบว่าต่อสำเร็จไหม
	if ($conn -> connect_error) {
		die("connention failed".$conn -> connect_error);
	}

	mysqli_set_charset($conn,"utf8");
?>