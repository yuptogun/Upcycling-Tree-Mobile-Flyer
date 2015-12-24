<?php include('template/header.php'); ?>
				<div class="pages navbar-through toolbar-through">
					<div data-page="index" class="page layout-white no-tabbar">
						<div class="page-content">
							<div id="wrapper">
								<img src="http://c-festival.com/itpr/wp-content/uploads/img_02.jpg" class="pure-img lazy mainposter" />
								<div class="content-block first">
									<div class="row">
										<div class="col-100">
											<h1>업사이클링 트리 아트전</h1>
											<h2>버려진 것들을 위한, 버려진 것들에 의한 업사이클링 아트.</h2>
											<p>자연을 사랑하는 따뜻한 마음을 담아 업사이클링 아티스트 및 기업 12개 그룹이 폐자재를 활용해 만드는 크리스마스 트리와 함께 의미 있는 크리스마스를 보내세요.</p>
										</div>
									</div>
									<div class="row logos">
										<div class="col-20">
											<h3>주최</h3>
										</div>
										<div class="col-80">
											<p>
												<img src="http://www.coex.co.kr/wp-content/themes/twentyfifteen/images/common/logo_m.png">
											</p>
										</div>
									</div>
									<div class="row logos">
										<div class="col-20">
											<h3>후원</h3>
										</div>
										<div class="col-80">
											<p>
												<img src="http://www.me.go.kr/images/web/common/logo.jpg">
												<img src="http://www.prixmedia.co.kr/images/partnership/partners_17.gif">
											</p>
										</div>
									</div>
									<?php foreach ($data as $team) { ?>
									<div class="card team-index">
										<div class="card-header color-white no-border" style="background-image:url('<?php echo $team[9]; ?>');">
											<div valign="bottom" class="undercover" data-team="<?php echo $team[0]; ?>">
												<p class="tree-name">
													<?php echo $team[3]; ?><br />
													<em><?php echo $team[4]; ?></em>
												</p>
											</div>
										</div>
										<div class="card-content">
											<div class="card-content-inner">
												<p class="team-name">
													<?php echo $team[1]; ?> <small>(<?php echo $team[2]; ?>)</small>
												</p>
											</div>
										</div>
										<div class="card-footer">
											<a class="link"></a>
											<a href="/detail?tree=<?php echo $team[0]; ?>" class="external link">더 알아보기</a>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .pages -->
<?php include('template/footer.php'); ?>