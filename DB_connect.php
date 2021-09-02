<?php																								//DB 연동
	$conn = mysqli_connect("localhost", "root", "123", "wlsdn6609");
	$sql = "SELECT * FROM board order by num desc limit 0, 10";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
								
	$row = mysqli_fetch_array($res);
?>