<?php get_header() ?>

<!--Content-->

<!-- this is the hero section -->

	<section class="hero">
		<div>
			<!--white space-->
		</div>
		<div class="hero__title">
			<div>
				<!--white space-->
			</div>
			<div class="hero__title-text">
				<h2 class="hero__title-text-upper">YO SOY</h2>
				<h1 class="hero__title-text-lower">CAMILA</h1>
			</div>
			<div>
			<!--white space-->
			</div>
		</div>
		<div>
			<!--white space-->
		</div>
	</section>

	<!-- this is the services section-->
	
	<section class="services">
		<div>
			<!--white space-->
		</div>
			<div class="services__readme">
				<div class="container">
					<div class="services__readme__title">
						<h2 class="services__readme__title__item-higher">LO QUE</h2>
						<h2 class="services__readme__title__item-medium">PUEDO HACER</h2>
					</div>
				</div>
				<div>
					<!--white space-->
				</div>
				<div class="services__readme__text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates earum quasi, ex mollitia officia dolorum corrupti voluptatibus quaerat dignissimos. Dolores veniam ipsum esse rerum? Quaerat excepturi omnis fugit et dicta.</p>
				</div>
			</div>
			<div>
				<!--white space-->
			</div>
			<div>
				<!--white space-->
			</div>
			<div class="services__items">
				<div >
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/layers.svg" alt="printed" class="services__items-icon">
					<h4 class="services__items-text">Diseño Gráfico</h4>
				</div>
				<div>
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/responsive-design-symbol.svg" alt="web" class="services__items-icon">
					<h4 class="services__items-text">Diseño Web /App</h4>
				</div>
				<div>
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/logo-design.svg" alt="diseño" class="services__items-icon">
					<h4 class="services__items-text">Branding</h4>
				</div>
			</div>		
		</div>	
		</div>
	</div>
	<div>
		<!--white space-->
	</div>
	</section>

	<!-- this is the about me section-->

	<section class="aboutme">
		<div>
		<!--white space-->
		</div>
		<div class="aboutme__info">
			<div class="container">
				<div class="aboutme__info__title">
					<div>
						<!--white space-->
					</div>
					<div class="container">
						<h2 class="aboutme__info__title-upper">
						SOBRE
						</h2>
						<h3 class="aboutme__info__title-lower">
							MÍ
						</h3>
					</div>
				</div>
			</div>
			<div class="aboutme__info__text">
				<div>
					<!--white space-->
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga eaque eos modi magnam quo totam harum molestias quod velit nam hic expedita earum corporis corrupti, doloremque ea, aut perferendis fugiat.</p>
			</div>	
		</div>
		<div>
		<!--white space-->
		</div>
	</section>
	
	<!-- this is the portfolio section-->
	<section class="portfolio">
		<div class="portfolio__title">
			<h2 class="portfolio__title__upper">PORTA</h2>
			<h2 class="portfolio__title__lower">FOLIO</h2>
		</div>
		<div class="portfolio__side">
			<div class="portfolio__side__menu">
				<ul class="portfolio__side__menu__list">
					<li class="portfolio__side__menu__list-item">TODO</li>
					<li class="portfolio__side__menu__list-item">FOTOGRAFÍA</li>
					<li class="portfolio__side__menu__list-item">GRÁFICOS</li>
					<li class="portfolio__side__menu__list-item">BRANDING</li>
					<li class="portfolio__side__menu__list-item">SITIOS WEB</li>
				</ul>
			</div>
			<div>
				<div class="portfolio__lowerside">
					<div>
						<h3 class="portfolio__lowerside__title">BRANDING</h3>
					</div>
					<div class="portfolio__lowerside__logo">
						<a><img src="<?php echo get_theme_file_uri() ?>/assets/images/logo_camipi.png" alt="LOGOFOLIO"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- this is the contact section -->

	<section class="contact">
		<div class="contact__rightside d-none d-sm-none d-md-none d-lg-block">
			<?php get_template_part('_includes/main', 'section') ?>	
		</div>
		<div class="contact__leftside">
			<div class="contact__leftside__title">
				<h2 class="contact__leftside__title-first">CON</h2>
				<h2 class="contact__leftside__title-second">TACTO</h2>
			</div>
			<div class="container">
				<div class="contact__leftside__info">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/mail.svg" alt="mail" class="contact__leftside__info-icon">
					<p class="contact__leftside__info-text">info@website.com</p>
				</div>
				<div class="contact__leftside__info">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/phone-call.svg" alt="phone" class="contact__leftside__info-icon" class="contact__leftside__info-icon">
					<p class="contact__leftside__info-text">123456789</p>
				</div>
				<div class="contact__leftside__info">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/placeholder.svg" alt="location" class="contact__leftside__info-icon">
					<p class="contact__leftside__info-text">Manuel Rodríguez Norte 881</p>
				</div>
			</div>
		</div>
		<div class="contact__rightside d-sm-block d-md-none">
			<form class="container">
				<div class="contact__rightside__formo">
					<div class="form-group contact__rightside__formo-place">
				    	<input type="text" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Nombre">
				 	</div>
				  	<div class="form-group contact__rightside__formo-place">
				    	<input type="text" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Correo">
				  	</div>
				  	<div class="form-group contact__rightside__formo-place">
				    	<input type="text" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Teléfono">
				  	</div>
				   	<div class="form-group contact__rightside__formo-place">
				    	<textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
				  	</div>
				  	<button class="btn btn-primary btn-sm contact__rightside__formo-button" type="submit">ENVIAR</button>
				</div>
			</form>	
		</div>
	</section>

<?php get_footer() ?>