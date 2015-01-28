<div id="timeline">
	<!-- Start Content -->
	<div class="container">

		<div id="logo">
			<a href="<?php print $front_page; ?>"><img src="<?php echo $logo; ?>" alt="tata-young">
				<?php echo $site_name;?>
			</a>
		</div>

		<!-- start menu -->
		<?php if ($main_menu): ?>
		<div id="mainmenu">
			<a href="/timeline/2014" class="menu_timeline active">timeline</a>
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'clearfix')))); ?>
		</div>
		<div id="social">
			<ul>
				<li class="fb"><a href="#">facebook</a></li>
				<li class="ig"><a href="#">instragram</a></li>
				<li class="you"><a href="#">youtube</a></li>
			</ul>
		</div>
		<?php endif; ?>
		<!-- end menu -->

		<!-- Block Biography -->
		<div id="left_sidebar" class="clearfix">

			<?php if ($page['sidebar_first']): ?>
				<div class="sidebar_first">
					<?php print render($page['sidebar_first']); ?>
				</div>
			<?php endif; ?>

			<div class="content_inner">
				<?php print render($page['help']); ?>
				<script src="<?php echo $base_path; ?>cycle.js"></script>
				<?php print render($page['content']); ?>
			</div>
		
		</div>
		<!-- End Content -->
	</div>
</div>