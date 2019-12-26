<?php get_header(); ?>
    <div class="row">
        <aside class="col-md-7">
            <ul class="list-group submenu">
	            <?php wp_nav_menu(
	                array(
	                     'theme_location'=>'sidebar-menu',
                         'menu'=>'Sidebar Menu'
                    )
                ); ?>
<!--                <li class="list-group-item active">Lorem ipsum</li>-->
<!--                <li class="list-group-item"><a href="/donec/">Donec tincidunt laoreet</a></li>-->
<!--                <li class="list-group-item"><a href="/vestibulum/">Vestibulum elit</a></li>-->
<!--                <li class="list-group-item"><a href="/etiam/">Etiam pharetra</a></li>-->
<!--                <li class="list-group-item"><a href="/phasellus/">Phasellus placerat</a></li>-->
<!--                <li class="list-group-item"><a href="/cras/">Cras et nisi vitae odio</a></li>-->
            </ul>
            <div class="panel panel-primary">
                <div class="panel-heading">Our offices</div>
                <div class="panel-body">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" class="img-responsive" alt="Our offices">
                </div>
            </div>
        </aside>
        <section class="col-md-17">
			<?php get_template_part( 'templates/cotation' ); ?>
			<?php get_template_part( 'templates/text' ); ?>
			<?php get_template_part( 'templates/ourteam' ); ?>
        </section>
    </div>
    </div>
<?php get_footer(); ?>