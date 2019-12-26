<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
            <h2>Search result for: <?php the_search_query(); ?></h2>
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
				    <div class="sear-result">
					    <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <hr>
                    </div>
				<?php endwhile; endif; ?>
<!--				--><?php //get_search_form(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php get_footer();