<?php 
/*
*Template Name: launcher
*/
$placeHolder = get_post_meta(get_the_ID(), "placeHolder", true);
$button = get_post_meta(get_the_ID(), "buttonText", true);
$hint = get_post_meta(get_the_ID(), "hint", true);
?>

<?php get_header();?>
	<body <?php body_class();?>>
	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center launcher-banner">
		<h1 id="fh5co-logo"><a href="<?php echo site_url();?>"><?php bloginfo('name') ;?></a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2><?php the_title() ;?></h2>
									<p> <?php the_content();?> </p>
								</div>
							</div>
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo esc_attr($placeHolder);?>">
										<input type="submit" value="<?php echo esc_attr($button);?>" class="btn btn-primary">
										<p class="tip"><?php echo esc_html($hint);?></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>

		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<!-- <ul id="fh5co-social">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-google-plus"></i></a></li>
						<li><a href="#"><i class="icon-pinterest-square"></i></a></li>
					</ul> -->
					<p><?php dynamic_sidebar("social-widgets");?></p>
				</div>
				<div class="col-md-6 fh5co-copyright">
					<p><?php dynamic_sidebar("Copy-right-widgets") ;?></p>
				</div>
			</div>
		</div>
		
	</div>
<?php get_footer();?>

