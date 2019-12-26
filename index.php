<?php get_header(); ?>
<?php // задаем нужные нам критерии выборки данных из БД
// задаем нужные нам критерии выборки данных из БД
$ourCurentPage = get_query_var('page');
$args = array(
	'post_type' => 'post',
	'posts_per_page'=> 3,
	'page' => $ourCurentPage
);

$query = new WP_Query ( $args );
if ( $query->have_posts() ): while ( $query->have_posts() ):$query->the_post();
	?>
    <li>
	    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
<?php endwhile;
echo paginate_links(array(
	'total'=>$query->max_num_pages
));

else:endif; ?>

<?php get_footer(); ?>