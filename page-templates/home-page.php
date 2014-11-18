<?php
/**
 * Template Name: IISG Home Page
 * Description: Página principal de la página del Instituto de Investigación Sanitaria de Getafe
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area front-page-template">
		<div id="content" class="site-content" role="main">
			<div class="front-page-slideshow">
				<a href="http://localhost/iisg/" class="stop-slideshow-link">Stop slideshow</a>
				<div class="front-page-slide" id="slide0">

					<div class="front-page-slide-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elderly.jpeg" />
					</div>

					<div class="front-page-slide-content">
						<h1>El instituto</h1>
						<p>Curabitur a felis in nunc fringilla tristique. Curabitur a felis in nunc fringilla tristique. Fusce neque.</p>
					</div>
				</div>

				<div class="front-page-slide" id="slide1">

					<div class="front-page-slide-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elderly.jpeg" />
					</div>

					<div class="front-page-slide-content">
						<h1>Infraestructuras</h1>
						<p>Curabitur a felis in nunc fringilla tristique. Curabitur a felis in nunc fringilla tristique. Fusce neque.</p>
					</div>
				</div>

				<div class="front-page-slide" id="slide2">

					<div class="front-page-slide-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elderly.jpeg" />
					</div>

					<div class="front-page-slide-content">
						<h1>Innovación</h1>
						<p>Curabitur a felis in nunc fringilla tristique. Curabitur a felis in nunc fringilla tristique. Fusce neque.</p>
					</div>
				</div>
			</div>

			<div id="latest-news">
				<div id="latest-news-header">
					<h1>Últimas noticias</h1>
					<a href="/iisg/noticias" class="header-link">Todas las noticias</a>
				</div>

				<?php $the_query = new WP_Query( 'showposts=3' ); ?>
               	 	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                		<div class="latest-new">
                			<div class="latest-new-img">
                				<?php the_post_thumbnail(); ?>
                			</div>
                        
                        	<div class="latest-new-content">
                        		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        		<p class="latest-new-date"><?php the_date(); ?></p>
                        		<?php the_excerpt(__('(more…)')); ?>
                        	</div>
                        
                    	</div> <!-- latest-new -->
                <?php endwhile;?>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<div class="front-page-sidebar" role="secondary">
		<h1>Programas</h1>
		<ul class="programs-list">
			<li>
				<a href="http://ec.europa.eu/programmes/horizon2020/" target="_blank" title="Visitar la página de Horizon 2020">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizon2020.jpg" alt="Logo Horizon 2020" />
				</a>
			</li>
			<li>
				<a href="http://www.isciii.es/ISCIII/es/contenidos/fd-investigacion/fd-financiacion/convocatorias-ayudas-accion-estrategica-salud.shtml" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/estrategia-y-plan-2013-2020.jpg" />
				</a>
			</li>
			<li>
				<a href="http://www.fundacionmapfre.org/fundacion/es_es/te-interesa/beca-ayuda/beca-primitivo-vega/default.jsp" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/990x247-primitivo-de-vega_tcm164-34635.jpg" />
				</a>
			</li>
		</ul>
	</div>
</div><!-- #main-content -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slideshow.js"></script>

<?php
get_footer();