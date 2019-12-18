<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package orahino
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
			<div class="header-background">
				<div class="content-flex">
					<h1>Инновационный <span>продукт<br> на российском</span> рынке</h1>
					<p class="content-slogan">Является полноценной заменой грецкого и фисташкового орехов, фундука и миндаля
					</p>
					<a href="#" class="content-button">Посмотреть наши продукты </a>
				</div>
			</div>
			<div class="cаtalog">
				<h2 class="catalog-name">Наши продукты</h2>
				<div class="container">
					<div class="product-name">
						<div class="card-flex">
							<div class="card">
								<div class="card-box pistachio">
									<div class="brand-name">orahino</div>
									<div class="brand-description">Фисташки</div>
								</div>
							</div>
							<div class="card">
								<div class="card-box walnut">
									<div class="brand-name">orahino</div>
									<div class="brand-description">Грецкий орех</div>
								</div>
							</div>
							<div class="card">
								<div class="card-box hazelnut">
									<div class="brand-name">orahino</div>
									<div class="brand-description">Фундук</div>
								</div>
							</div>

						</div>
					</div>
					<!--end product-name  -->
					<div class="card-description">
						<div class="card-description_item">
							<div class="name-product">
								Описание продукта
							</div>

							<div class="substitute">Заменитель<br>
								Фисташек</div>
							<p>Упаковка 200 грамм <br>25 шт в коробке<br>срок годности 24 месяца</p>
							<a href="#" class="card-button">Получить предложение</a>
						</div>
						<div class="card-description_item">
							<div class="name-product">
								Описание продукта
							</div>

							<div class="substitute">Заменитель<br>
								Грецкого Ореха</div>
							<p>Упаковка 200 грамм <br>25 шт в коробке<br>срок годности 24 месяца</p>
							<a href="#" class="card-button">Получить предложение</a>
						</div>
						<div class="card-description_item">
							<div class="name-product">
								Описание продукта
							</div>

							<div class="substitute">Заменитель<br>
								Фундука</div>
							<p>Упаковка 200 грамм <br>25 шт в коробке<br>срок годности 24 месяца</p>
							<a href="#" class="card-button">Получить предложение</a>
						</div>
					</div>
					<!-- end card-description -->
			</div>
			<!-- end catalog -->
			<div class="container">
			<?php
			if (have_posts()) :

				if (is_home() && !is_front_page()) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
			<?php
				endif;

				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
					get_template_part('template-parts/content', get_post_type());

				endwhile;

				the_posts_navigation();

			else :

				// get_template_part('template-parts/content', 'none');

			endif;
			?>
			</div>
			
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
