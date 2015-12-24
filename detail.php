<?php include('template/header.php');
if ((!isset($_GET['tree']) && !isset($_GET['team'])) || (isset($_GET['tree']) && isset($_GET['team']))) { ?>
<script>
alert('비정상적인 접근입니다!');
location.href = 'http://upcyclingtree.dothome.co.kr';
</script>
<?php } else {
	if (isset($_GET['tree'])) {
		$tree = $_GET['tree'];
		$showtree = ' active';
		$showteam = '';
	}
	if (isset($_GET['team'])) {
		$tree = $_GET['team'];
		$showtree = '';
		$showteam = ' active';
	}
} ?>
				<div class="pages navbar-through toolbar-through">
					<div data-page="detail" class="page layout-white">
						<div class="page-content">
							<div id="wrapper" class="tabs">
								<div class="tab<?php echo $showtree; ?>" id="tab_tree">
									<img src="<?php echo $data[$tree][9]; ?>" class="pure-img mainposter" />
									<div class="content-block">
										<div class="buttons-row">
											<a href="#" data-tab=".tree-kr" class="tab-link button active">한국어</a>
											<a href="#" data-tab=".tree-en" class="tab-link button">English</a>
										</div>
									</div>
									<div class="tabs">
										<div class="tab tree-kr active">
											<div class="content-block">
												<h1><?php echo $data[$tree][3]; ?><br /><small><?php echo $data[$tree][1]; ?> 제작</small></h1>
											</div>
											<div class="content-block-title">트리 기획의도</div>
											<div class="content-block">
												<p><?php echo $data[$tree][5]; ?></p>
											</div>
											<div class="content-block-title">제작 재료 및 기법</div>
											<div class="content-block">
												<p><?php echo $data[$tree][7]; ?></p>
											</div>
										</div>
										<div class="tab tree-en">
											<div class="content-block">
												<h1><?php echo $data[$tree][4]; ?><br /><small>Created by <?php echo $data[$tree][2]; ?></small></h1>
											</div>
											<div class="content-block-title">Main Concept</div>
											<div class="content-block">
												<p><?php echo $data[$tree][6]; ?></p>
											</div>
											<div class="content-block-title">Materials and Techniques</div>
											<div class="content-block">
												<p><?php echo $data[$tree][8]; ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab<?php echo $showteam; ?>" id="tab_team">
									<img src="<?php echo $data[$tree][10]; ?>" class="team-logo pure-img" />
									<div class="content-block">
										<p><?php echo $data[$tree][11]; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .pages -->
<?php include('template/footer.php'); ?>