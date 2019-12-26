<?php get_header();?>
	<div class="main-heading">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="row">
		<aside class="col-md-7">
			<ul class="list-group submenu">
				<?php wp_nav_menu(
					array(
						'theme_location'=>'sidebar-menu'
					)
				); ?>
				<!--                <li class="list-group-item active">Lorem ipsum</li>-->
				<!--                <li class="list-group-item"><a href="/donec/">Donec tincidunt laoreet</a></li>-->
				<!--                <li class="list-group-item"><a href="/vestibulum/">Vestibulum elit</a></li>-->
				<!--                <li class="list-group-item"><a href="/etiam/">Etiam pharetra</a></li>-->
				<!--                <li class="list-group-item"><a href="/phasellus/">Phasellus placerat</a></li>-->
				<!--                <li class="list-group-item"><a href="/cras/">Cras et nisi vitae odio</a></li>-->
			</ul>
		</aside>
        <div class="col-xs-12 nlrp">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo('url');?>">Home</a></li>
				<?php
				$categories = get_the_category($the_postid);
				$separator = ' ';
				$output = '';
				if (!empty($categories)) {
					foreach ($categories as $category) {
						$output .= '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>' . $separator;
					}
					echo trim($output, $separator);
				}
				?>
                <li class="breadcrumb-item current"><?php echo $post_title;?></li>
            </ul>
        </div>
		<div class="col-md-17">
			<?php //get_sidebar();?>
				<section>
					<?php while (have_posts()): the_post();?>
						<?php the_content();?>
						<?php
			//			if ( comments_open() || get_comments_number() ) {
			//				comments_template();
			//			}
						?>
					<?php endwhile; ?>
				</section>
		</div>
	</div>
<?php get_footer(); ?>