<?php
	include '../sql/session.php';
	include '../db.php';

	if(isset($_SESSION['user_id'])) $id = $_SESSION['user_id'];
	else unset($id);
	if(isset($_SESSION['user_name'])) $name = $_SESSION['user_name'];
	else unset($name);
?>

<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>BEST 구역</title>
		<link href="/css/basic.css" type="text/css" rel="stylesheet" />			<!--스타일 시트 적용-->
		<link href="../css/sale_best.css" type="text/css" rel="stylesheet" />
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
			<div class="main">
				
				
				<div class="contents">
						<section class="info_box">
							<h2>1구역 조회수 <span>BEST</span></h2>
							<ul style="list-style-type: none;">
<?php
// area - 1
$res = mq("select * from sale where area = 1 order by viewer desc limit 0,4");

while($row = mysqli_fetch_array($res)) {
$num = $row["num"];
$title = $row["title"];
$contents = $row["contents"];
$date = $row["date"];
$viewer = $row["viewer"];
$good = $row["good"];
$area = $row["area"];
$price = $row["price"];
$tel = $row["tel"];
?>
								<li>
									<a href="sale_zone_board.php?num=<?=$num?>">
										<em><img src="../img/zone_<?=$area?>/<?=$title?>.jpg" alt="img"></em>
										<div class="temp">
											<?="<h3>".$title."</h3>";?>
											<p><?=$contents?></p>
											<span class="ico no1"><?=$area."구역";?></span>
										</div>
								
									<div class="container">
										<div class="text_">
											<?="<p>조회수 : ".$viewer."</p>";?>
											<?="<p>추천 : ".$good."</p>";?>
										</div>
									</div>
									</a>
									<div>
									<a href="sale_good.php?num=<?=$num?>">
										<span style="color:#FF0000"><i class="fas fa-heart fa-lg fa-fw"></i></span>
									</a>
									</div>
								</li>
<?php
}
?>
							</ul>
							<div class="btn_center">
								<a href = "sale_zone_1.php" class="btn_more">더보기 +</a>
							</div>
						</section>
						
						<section class="info_box">
							<h2>2구역 조회수 <span>BEST</span></h2>
							<ul style="list-style-type: none;">
<?php
// area - 2

$res = mq("select * from sale where area = 2 order by viewer desc limit 0,4");
while($row = mysqli_fetch_array($res)) {

$num = $row["num"];
$title = $row["title"];
$contents = $row["contents"];
$date = $row["date"];
$viewer = $row["viewer"];
$good = $row["good"];
$area = $row["area"];
$price = $row["price"];
$tel = $row["tel"];
?>
								<li>
									<a href="sale_zone_board.php?num=<?=$num?>">
										<em><img src="../img/zone_<?=$area?>/<?=$title?>.jpg" alt="img"></em>
										<div class="temp">
											<?="<h3>".$title."</h3>";?>
											<p><?=$contents?></p>
											<span class="ico no2"><?=$area."구역";?></span>
										</div>
								
									<div class="container">
										<div class="text_">
											<?="<p>조회수 : ".$viewer."</p>";?>
											<?="<p>추천 : ".$good."</p>";?>
										</div>
									</div>
									</a>
									<div>
									<a href="sale_good.php?num=<?=$num?>">
										<span style="color:#FF0000"><i class="fas fa-heart fa-lg fa-fw"></i></span>
									</a>
									</div>
								</li>
<?php
}
?>
							</ul>
							<div class="btn_center">
								<a href = "sale_zone_2.php" class="btn_more">더보기 +</a>
							</div>
						</section>
						
						<section class="info_box">
							<h2>3구역 조회수 <span>BEST</span></h2>
							<ul style="list-style-type: none;">
<?php
// area - 3

$res = mq("select * from sale where area = 3 order by viewer desc limit 0,4");
while($row = mysqli_fetch_array($res)) {

$num = $row["num"];
$title = $row["title"];
$contents = $row["contents"];
$date = $row["date"];
$viewer = $row["viewer"];
$good = $row["good"];
$area = $row["area"];
$price = $row["price"];
$tel = $row["tel"];
?>
								<li>
									<a href="sale_zone_board.php?num=<?=$num?>">
										<em><img src="../img/zone_<?=$area?>/<?=$title?>.jpg" alt="img"></em>
										<div class="temp">
											<?="<h3>".$title."</h3>";?>
											<p><?=$contents?></p>
											<span class="ico no3"><?=$area."구역";?></span>
										</div>
								
									<div class="container">
										<div class="text_">
											<?="<p>조회수 : ".$viewer."</p>";?>
											<?="<p>추천 : ".$good."</p>";?>
										</div>
									</div>
									</a>
									<div>
									<a href="sale_good.php?num=<?=$num?>">
										<span style="color:#FF0000"><i class="fas fa-heart fa-lg fa-fw"></i></span>
									</a>
									</div>
								</li>
<?php
}
?>
							</ul>
							<div class="btn_center">
								<a href = "sale_zone_3.php" class="btn_more">더보기 +</a>
							</div>
						</section>
						
						<section class="info_box">
							<h2>4구역 조회수 <span>BEST</span></h2>
							<ul style="list-style-type: none;">
<?php
// area - 4

$res = mq("select * from sale where area = 4 order by viewer desc limit 0,4");
while($row = mysqli_fetch_array($res)) {

$num = $row["num"];
$title = $row["title"];
$contents = $row["contents"];
$date = $row["date"];
$viewer = $row["viewer"];
$good = $row["good"];
$area = $row["area"];
$price = $row["price"];
$tel = $row["tel"];
?>
								<li>
									<a href="sale_zone_board.php?num=<?=$num?>">
										<em><img src="../img/zone_<?=$area?>/<?=$title?>.jpg" alt="img"></em>
										<div class="temp">
											<?="<h3>".$title."</h3>";?>
											<p><?=$contents?></p>
											<span class="ico no4"><?=$area."구역";?></span>
										</div>
								
									<div class="container">
										<div class="text_">
											<?="<p>조회수 : ".$viewer."</p>";?>
											<?="<p>추천 : ".$good."</p>";?>
										</div>
									</div>
									</a>
									<div>
									<a href="sale_good.php?num=<?=$num?>">
										<span style="color:#FF0000"><i class="fas fa-heart fa-lg fa-fw"></i></span>
									</a>
									</div>
								</li>
<?php
}
?>
							</ul>
							<div class="btn_center">
								<a href = "sale_zone_4.php" class="btn_more">더보기 +</a>
							</div>
						</section>
						
						
               <div style="cleaer: both;"> </div>
            </div>   
		</div>
		<footer>
			<?php include './sale_footer.php'; ?>
		</footer>
	</body>
</html>