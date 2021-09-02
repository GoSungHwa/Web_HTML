<?php
include '../sql/session.php';
include '../db.php';

$num = $_REQUEST["num"];

$row = mysqli_fetch_array(mq("select * from sale where num ='".$num."'"));
$num = $row["num"];
$title = $row["title"];
$contents = $row["contents"];
$date = $row["date"];
$viewer = $row["viewer"] + 1;
$good = $row["good"];
$area = $row["area"];
$price = $row["price"];
$tel = $row["tel"];

$fet = mq("update sale set viewer = '".$viewer."' where num = '".$num."'");

if(isset($_SESSION['user_id'])) $id = $_SESSION['user_id'];
else unset($id);
if(isset($_SESSION['user_name'])) $name = $_SESSION['user_name'];
else unset($name);
?>

<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title><?=$area?>구역</title>
      <link href="/css/basic.css" type="text/css" rel="stylesheet" />      <!--스타일 시트 적용-->
	  <link href="../css/zone_board.css" type="text/css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> <!--CDN 링크 -->
      <style type="text/css">
			A:link {text-decoration:none}
			A:visited {text-decoration:none}
			A:hover {text-decoration:none}  
      </style>      
   </head>
   <body>
   		<header>
		  	<?php include './sale_header.php'; ?>
		</header>
		<div class="clear"></div>
		</div>
			<div class="home">
				<div class = "main">
            <div class="contents">
               <div class="title">
                  <a class="name">
                     <?="<h2>[".$area."구역] <span>".$title."</span<</h2>";?>
                     <a class="more"><?=$date?></a> <br>
                     <hr>
                     <?="<h3>조회수 : ".$viewer.  "  추천수 : ".$good."</h3>";?>
                  </a>
               </div>
               <hr>
               <table class="table_" border = "1" cellspacing="0">
                  <tr>
                     <td>상권명</td>
                     <td><?=$title?></td>
                  <tr>
                  <tr>
                     <td>연락처</td>
                     <td><?=$tel?></td>
                  <tr>
                  <tr>
                     <td>방세</td>
                     <td><?=$price?></td>
                  <tr>
                  <tr>
                     <td>옵션</td>
                     <td><?=$contents?></td>
                  <tr>
               </table><br>
					<div class="image_map"><img src="../img/zone_<?=$area?>/<?=$title."위치"?>.PNG" alt="img"><br></div>
					<div class="image_">
						<img src="../img/zone_<?=$area?>/<?=$title."_1"?>.jpg" alt="img">
						<img src="../img/zone_<?=$area?>/<?=$title."_2"?>.jpg" alt="img">
					</div>
				<hr>
				<div class="button">
					<button type="button" onclick="location.href='sale_zone_<?=$area?>.php'">목록</button>
				</div>
			</div>
         </div>
         <footer>
			<div class="top">
				<div class="clear"></div>
			</div>
			<div class="btm">
				<div class="btm_header">
					<img src="../img/logo_foot.png" width="130">					</div>
				<div class="btm_bottom">
				<ul>
				<li>순천향대학교(신대방동, 전문건설회관 27층)</li>
				<li>Tel 080-000-0000</li>
				<li>관리자 순다방</li>
				<li>E-mail soondabang@sch.com</li>
				</ul>
				<address>Copyright 2020 SOONDABANG All rights reserved.</address>
			</div>
			</div>
		</footer>
      </div>
   </body>
</html>