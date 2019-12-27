<?php
/**
 * Template Name: Actors
 */
?>
<?php get_header(); ?>
<?php

$ourCurentPage = get_query_var( 'paged' );
$args          = array(
	'post_type'      => 'team',
	'posts_per_page' => 3,
	'paged'          => $ourCurentPage
);

$query = new WP_Query ( $args );
if ( $query->have_posts() ): while ( $query->have_posts() ):$query->the_post();
	?>
    <div class="wrapper clearfix">
        <h3 class="ps_title ">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="col-md-6">
            <li class="ps_post_thumbnails">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </li>
        </div>
        <div class="col-md-18">
			<?php the_excerpt(); ?>
            <span class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></span>
        </div>
    </div>
<?php endwhile;
	?>
    <div class="ps_pagination">
		<?php
		echo paginate_links( array(
			'total' => $query->max_num_pages
		) );
		?>
    </div>
<?php else:endif; ?>

<?php get_footer(); ?>