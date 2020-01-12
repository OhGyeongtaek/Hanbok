<section id="body">
	<section class="cont-up">
		<span><?php echo $menu[$_GET['controller']]; ?></span>
	</section>
	<section class="content">
		<?php include PAGE.$_GET['controller'].'/'.$_GET['method'].'.php'; ?>
	</section>
</section>