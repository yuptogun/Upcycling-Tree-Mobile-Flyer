				<div class="toolbar tabbar tabbar-labels" id="the_toolbar">
					<div class="toolbar-inner">
						<a href="#tab_tree" class="tab-link tab-tree<?php echo $showtree; ?>">
							<i class="fa fa-tree"></i>
							<span class="tabbar-label">작품</span>
						</a>
						<a href="#" class="tab-link tab-photos">
							<i class="fa fa-picture-o"></i>
							<span class="tabbar-label">사진</span>
						</a>
						<a href="#tab_team" class="tab-link tab-team<?php echo $showteam; ?>">
							<i class="fa fa-user"></i>
							<span class="tabbar-label">팀/아티스트</span>
						</a>
					</div>
				</div><!-- .tabbar -->
			</div><!-- .view-main -->
		</div><!-- .views -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.3.5/js/framework7.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../js.js"></script>
		<script type="text/javascript">
		<?php if(isset($_GET['team']) || isset($_GET['tree'])) { ?>
		var myPhotoBrowserPopup = myApp.photoBrowser({
			backLinkText: '닫기',
			ofText: ' / ',
			photos: [
			<?php $images = $data[$tree]['images'];
			foreach ($images as $img) { ?>
				'<?php echo $img; ?>',
			<?php } ?>
			],
			type: 'popup'
		});
		$$('.tab-photos').on('click', function () {
			myPhotoBrowserPopup.open();
		});
		<?php } else { ?>
		myApp.hideToolbar('#the_toolbar');
		<?php } ?></script>
	</body>
</html>