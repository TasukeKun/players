<?php
	require 'mojang-api.class.php';	
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Top players</title>
</head>
	<div id="preloader" class="preloader">
		<div class="loader"></div>
	</div>
	
<body>
	<div class="wrapper">
		<div class="top">
			<div class="top__container container">
				<div class="top__block">
					<h1 class="top__title">Players</h1>
					<div class="top__list">
						<div class="top__item item-top">
							<div class="item-top__head"> 
								<? 
								$uuid = MojangAPI::getUuid('TasukeKun'); 
								$img = '<img src="' . MojangAPI::embedImage(MojangAPI::getPlayerHead($uuid)) . '" alt="Head of TasukeKun">';
								echo ''. $img .'';
								?> 
							
							</div>
							<div class="item-top__nick">
								TasukeKun
							</div>
							<div class="item-top__skills">
								<p>Skills:</p>
								<ul>
									<li>Low cps</li>
									<li>Normal Aim</li>
									<li>Circle strafe</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top__list">
						<div class="top__item item-top">
							<div class="item-top__head"> 
								<? 
								$uuid = MojangAPI::getUuid('vasya_kot367'); 
								$img = '<img src="' . MojangAPI::embedImage(MojangAPI::getPlayerHead($uuid)) . '" alt="Head of vasya_kot367">';
								echo ''. $img .'';
								?> 
							
							</div>
							<div class="item-top__nick">
								<? 
								$history = MojangAPI::getNameHistory($uuid);
								echo ''. reset($history)['name'] . '';	
								?>
							</div>
							<div class="item-top__skills">
								<p>Skills:</p>
								<ul>
									<li>GOD</li>
									<li>High cps</li>
									<li>Good Aim</li>
									<li>straightline</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top__list">
						<div class="top__item item-top">
							<div class="item-top__head"> 
								<? 
								$uuid = MojangAPI::getUuid('SaycelKun'); 
								$img = '<img src="' . MojangAPI::embedImage(MojangAPI::getPlayerHead($uuid)) . '" alt="Head of vasya_kot367">';
								echo ''. $img .'';
								?> 
							
							</div>
							<div class="item-top__nick">
								SaycelKun / KanekiKKG
							</div>
							<div class="item-top__skills">
								<p>Skills:</p>
								<ul>
									<li>GOD</li>
									<li>High cps</li>
									<li>Good Aim</li>
									<li>straightline</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top__list">
						<div class="top__item item-top">
							<div class="item-top__head"> 
								<? 
								$uuid = MojangAPI::getUuid('lunkEdeste'); 
								$img = '<img src="' . MojangAPI::embedImage(MojangAPI::getPlayerHead($uuid)) . '" alt="Head of vasya_kot367">';
								echo ''. $img .'';
								?> 
							
							</div>
							<div class="item-top__nick">
								lunkEdeste
							</div>
							<div class="item-top__skills">
								<p>Skills:</p>
								<ul>
									<li>GOD</li>
									<li>High cps</li>
									<li>Good Aim</li>
									<li>straightline</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top__list">
						<div class="top__item item-top">
							<div class="item-top__head"> 
								<? 
								$uuid = MojangAPI::getUuid('____Simple____'); 
								$img = '<img src="' . MojangAPI::embedImage(MojangAPI::getPlayerHead($uuid)) . '" alt="Head of Rape">';
								echo ''. $img .'';
								?> 
							
							</div>
							<div class="item-top__nick">
								____Simple____ / Rape
							</div>
							<div class="item-top__skills">
								<p>Skills:</p>
								<ul>
									<li>GOD</li>
									<li>High cps</li>
									<li>Good Aim</li>
									<li>straightline</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top__list">
						<div class="top__item item-top">
							<div class="item-top__head"> 
								<? 
								$uuid = MojangAPI::getUuid('killer_people'); 
								$img = '<img src="' . MojangAPI::embedImage(MojangAPI::getPlayerHead($uuid)) . '" alt="Head of killer_people">';
								echo ''. $img .'';
								?> 
							
							</div>
							<div class="item-top__nick">
								killer_people
							</div>
							<div class="item-top__skills">
								<p>Skills:</p>
								<ul>
									<li>GOD</li>
									<li>High cps</li>
									<li>Good Aim</li>
									<li>straightline</li>
								</ul>
							</div>
						</div>
					</div>
					<p class="info__block-top">
						Если хотите оказаться здесь: пишите мне в <a href="https://vk.com/everydaynottoday">лс</a> свой ник и свои скиллы
					</p>
				</div>
			</div>
		</div>
		<a class="btn-back" href="../index.html" name="do_signup">← back</a>
	</div>
	<script src="js/script.js"></script>
	<script src="js/preloader.js"></script>
</body>

</html>
