<?php include('array.php'); ?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white">
		<title>2015 COEX 윈터페스티벌 :: 업사이클링 크리스마스 트리 Zone</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.3.5/css/framework7.ios.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.3.5/css/framework7.ios.colors.min.css">
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
		<link rel="stylesheet" type="text/css" href="../css.css">
	</head>
	<body class="theme-red">
		<div class="statusbar-overlay"></div>
		<div class="panel-overlay"></div>
		<div class="panel panel-left panel-reveal theme-dark">
			<div class="content-block">
				<div class="closer">
					<a class="close-panel">×</a>
				</div>
				<p>2015 COEX WINTER FESTIVAL<br />업사이클링 트리 아트 모바일 브로셔</p>
			</div>
			<div class="list-block layout-dark">
				<div class="content-block-title">전시 작품 소개</div>
				<ul>
					<?php foreach ($data as $team) { ?>
					<li class="menu-tree<?php echo ' '.$team[0]; ?>">
						<a href="/detail?tree=<?php echo $team[0]; ?>" class="item-link item-content external">
							<div class="item-inner">
								<div class="item-title"><?php echo $team[3]; ?></div>
							</div>
						</a>
					</li><?php } ?>
				</ul>
				<div class="content-block-title">참가 팀/아티스트 소개</div>
				<ul><?php
					foreach ($data as $team) { ?>
					<li class="menu-team<?php echo ' '.$team[0]; ?>">
						<a href="/detail?team=<?php echo $team[0]; ?>" class="item-link item-content external">
							<div class="item-inner">
								<div class="item-title"><?php echo $team[1]; ?></div>
							</div>
						</a>
					</li><?php } ?>
				</ul>
				<div class="list-block-label">
					<?php copyright('COEX & Monster Factory'); ?>
				</div>
			</div>
		</div>
		<div class="views">
			<div class="view view-main">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="left">
							<a href="#" class="link icon-only open-panel"><i class="fa fa-bars"></i></a>
						</div>
						<div class="center sliding"><a href="#">업사이클링 크리스마스 트리</a></div>
						<div class="right">
							<a href="http://upcyclingtree.dothome.co.kr/" class="link icon-only external"><i class="fa fa-home"></i></a>
						</div>
					</div>
				</div><!-- .navbar -->