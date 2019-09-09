<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<section class="single hide">
			<section class="single__rightside">
				<div class="single__rightside">
					<?php the_post_thumbnail('portfolio_image', array('class' => 'single__rightside__image')); ?>
				</div>
			</section>	
		 
			<section class="single__leftside">
				<div>
					<div class="single__rightside-title">
						<h2><?php the_title() ?></h2>
			
						<p><?php the_content() ?></p>
					</div>
					<p><a href="/services" class="btn btn-outline-pink graphic_content__first__side1__button px-3 py-3">Volver</a></p>	
			</section>	
		</section>
		

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>