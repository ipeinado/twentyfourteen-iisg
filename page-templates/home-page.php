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
				<?php $the_query = new WP_Query( 'showposts=3' ); ?>
				<?php $i = 0; ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                    <div class="front-page-slide" id="slide<?php echo $i; ?>">
                    	<?php the_post_thumbnail(); ?>
                        
                        <div class="front-page-slide-content">
                        	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        	<p><?php the_excerpt(__('(more…)')); ?></p>
                        </div>
                        
                    </div>

                   	<?php $i++; ?>
                <?php endwhile;?>

			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<div class="front-page-sidebar" role="secondary">
		<h1>Sidebar</h1>
	</div>
</div><!-- #main-content -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slideshow.js"></script>

<?php
get_footer();