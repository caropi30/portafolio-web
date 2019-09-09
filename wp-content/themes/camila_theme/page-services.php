<?php get_header() ?>
	<!-- this is the hero section -->
	<section class="services_page">
		<div>
			<!--white space-->
		</div>
		<div class="services_page__readme">
			<div class="container">
				<div class="services_page__readme__title">
					<h2 class="services_page__readme__title__item-higher">LO QUE</h2>
					<h2 class="services_page__readme__title__item-medium">PUEDO HACER</h2>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<article class="graphic_content">

	<?php
		$arg = array(
			'post_type'		 => 'post',
			'category_name'	 => '',
			'posts_per_page' => 3
		);
	
		$get_arg = new WP_Query( $arg );
	
		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
			
			<div>
				<!--white space-->	
			</div>
			<div class="graphic_content__first">
				<div>
					
				</div>
				<div class="graphic_content__first__side1">
					<div class="graphic_content__first__side1__title">
						<h2><?php the_title() ?></h2>
					</div>
					<div>
						<p><?php the_excerpt() ?></p>
						<p><a href="<?php the_permalink() ?>" class="btn btn-outline-pink graphic_content__first__side1__button px-3 py-3">Ver más</a></p>	
					</div>
				</div>
				<div class="graphic_content__first__logo container">
					<?php the_post_thumbnail('portfolio_image', array('class' => 'graphic_content__first__logo__image')); ?>
				</div>
			</div>
	
		<?php } wp_reset_postdata();
	?>
	<?php the_post() ?>
	
		</article>
	</section>
<?php get_footer() ?>