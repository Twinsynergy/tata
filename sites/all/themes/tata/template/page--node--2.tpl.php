<div class="container">

	<div id="logo">
		<a href="<?php print $front_page; ?>"><img src="<?php echo $logo; ?>" alt="tata-young">
			<?php echo $site_name;?>
		</a>
	</div>

	<!-- start menu -->
		<?php if ($main_menu): ?>
		<div id="mainmenu">
			<a href="/timeline/2014" class="menu_timeline">timeline</a>
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

	<?php if ($page['sidebar_first']): ?>
		<div class="block-left">	
			<?php print render($page['sidebar_first']); ?>
		</div>
	<?php endif; ?>

	<div class="block-center <?php if ($page['sidebar_first']): ?>two_column<?php endif; ?> aword_page">
		<?php print render($page['help']); ?>
				
		<?php print render($page['content']); ?>
	</div>

</div>