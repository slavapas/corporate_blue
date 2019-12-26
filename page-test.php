/*
 * Template Name: Test
*/
<?php get_header(); ?>
<a href="<?php echo get_post_type_archive_link( 'team' ); ?>">Team</a>
<?php // задаем нужные нам критерии выборки данных из БД
// задаем нужные нам критерии выборки данных из БД
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'team'

);

$query = new WP_Query( $args );

// Цикл
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
} else {
	// Постов не найдено
}
// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();

?>

<!---
<?php if( have_posts()): while( have_posts()):the_post();  ?>
			 <h1><?php the_title(); ?></h1>
			    <?php the_content();  ?>
		    <?php endwhile;else:endif;  ?>
-->
<?php get_footer(); ?>
