<div id="page-wrapper"><div id="page">
	<div class="header-bar"></div>
	<div class="header">
		<div class="container" >
			
			<div class="page-header">
				<img class="header-image" src="http://localhost/localsite/sites/default/files/Banner.jpg">
				<div class="bottom-left">
					<div class="img-text">
					<p class="site_name">International Wildlife Convention 2014</p>
					<span class="event_location">15th July 08:30 AM to 18th July 18:00 PM </span>
					<span class="event_date"> | Shanghai International Convention Center </span>
					</div>
				</div>
			</div>
			
		</div> 
	</div>
	<div id="space_over">
		<div id="space"></div>
	</div>
	<div class="navigation" id="nav">
		<div class="container" >
			<div class="row main-menu-row">
			<?php if ($main_menu): ?>
				<div id="main-menu" class="navigation">
					<?php print theme('links__system_main_menu', array(
						'links' => $main_menu,
						'attributes' => array(
							'id' => 'main-menu-links',
							'class' => array('links', 'clearfix'),
						),
						'heading' => array(
							'text' => t('Main menu'),
							'level' => 'h2',
							'class' => array('element-invisible'),
						),
					)); ?>
				</div> <!-- /#main-menu -->
			<?php endif; ?>
			</div>
		</div>
	</diV>
	<div id="main-wrapper" class="clearfix">
		<div  class="container clearfix">
			<div class="row">
			<?php if ($breadcrumb): ?>
				<div id="breadcrumb"><?php print $breadcrumb; ?></div>
			<?php endif; ?>
			<div id="content" class="column"><div class="section">
				<a id="main-content"></a>
				<?php print render($title_prefix); ?>
				<?php if ($title): ?>
					<h1 class="title" id="page-title">
						<?php print $title; ?>
					</h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
				<?php if ($tabs): ?>
					<div class="tabs">
						<?php print render($tabs); ?>
					</div>
				<?php endif; ?>
				<?php if ($action_links): ?>
					<ul class="action-links">
						<?php print render($action_links); ?>
					</ul>
				<?php endif; ?>
				<?php print render($page['content']); ?>
			</div></div> <!-- /.section, /#content -->
			</div>
		</div>
	</div>
	<section class="section-news-speakers">
		<div class="container news-speaker-container clearfix">
			<div class="row news-row">
				<div class="col-xs-6 col-sm-6 col-lg-6">
					<?php print render($page['prefooter_firstcolumn']); ?>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-6">
					<?php print render($page['prefooter_secondcolumn']); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="footer-wrapper">
		<div class="footer">
			<div class="Footer-text"> © Copyright International Wildlife Convention 2014 . All Rights Reserved. </div>
			<div id="build-with-gsi">
				<a href="http://sites.globalsignin.com" target="_blank" style="color:#5E5D5D; text-decoration:none;">
				<span style="position:relative; top:-17px;">Built with:&nbsp;&nbsp;</span><img src="http://localhost/localsite/sites/default/files/footer.jpg" border="0"><span style="font-weight:bold;position:relative; top:-17px;">&nbsp;&nbsp;GSI Sites </span></a>
			</div>
		</div>
	</div>
</div></div>
