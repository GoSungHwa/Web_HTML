<?php
	header('Content-Type: text/html; charset=utf-8');

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
	$conn = new mysqli("localhost","root","","wlsdn6609");
	if ($conn->connect_errno) {
		echo "<script>alert(\"DB연결 실패!\");</script>";
	}
	$conn->set_charset("utf8");

	function mq($sql)
	{
		global $conn;
		return $conn->query($sql);
	}
	
	/*$host = 'localhost';//Host 주소
    $user = 'wlsdn6609';//DB 아이디
    $passWord = 'wls6609!';//DB 패스워드
    $dbName = 'wlsdn6609';//DB 이름

    $conn = new mysqli($host,$user,$passWord,$dbName);
    $conn->set_charset("utf8");

    try {
        //PDO 객체 생성 & DB접속
        $pdo = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8',$user,$passWord);
        //속성지정 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
    }*/
?>

