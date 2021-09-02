<?php
include './sql/session.php';
include "./db.php";
include './map/map.php';

if(isset($_SESSION['user_id'])) $id = $_SESSION['user_id'];
if(isset($_SESSION['user_name'])) $name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<meta name="viewport" content="initial-scale=1.0,user-scalable=no">
		<meta charset="utf-8">
		<link href="./css/basic.css" type="text/css" rel="stylesheet" />		<!--스타일 시트 적용-->
		<title> 순다방</title> 
	</head>

	<body>
		<header>
			<?php include './header.php'; ?>
		</header>
		<div class="clear"></div>
		</div>
		<div class="slide">
			<img id="back" src="./img/back.png" alt="" width="50">
			<ul>
				<li><img src="./img/slide1.png"></li>
				<li><img src="./img/slide2.png"></li>
				<li><img src="./img/slide3.png"></li>
				<li><img src="./img/slide4.png"></li>
			</ul>
			<img id="next" src="/img/next.png" alt="" width="50">
		</div>
		<div class="home">
			<div class="main">
				<div class="contents_map">
					<h2>순다방 지도</h2>
					<p>순다방의 다양한 매물을 만나보세요.</p>
					<div id="map_canvas" style="background-color: #f0e7db; width: 100%; height: 600px; margin-top: 30px; text-align:center"></div>
				</div>	
				
				<div class="index_board">
						<article>
							<div class="right">
								<h2>자유 게시판</h2>
								<ul>
									<li><a href="#">제목<p>2020-10-25</p><a></li>
									<li><a href="#">제목<p>2020-10-25</p><a></li>
									<li><a href="#">제목<p>2020-10-25</p><a></li>
								</ul>
								<a href="./board/board_list.php">+</a>
							</div>
						</article>	
				</div>
			
			</div>	
		</div>
		<footer>
			<?php include './footer.php'; ?>
		</footer>
	</body>
	<script type="text/javascript" src="./js/index.js"></script>
</html>

