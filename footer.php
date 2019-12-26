<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 twitter">
                <h3>Twitter feed</h3>
                <time datetime="2012-10-23"><a href="#">23 oct</a></time>
                <p>
                    In ultricies pellentesque massa a porta. Aliquam ipsum enim, hendrerit ut porta nec, ullamcorper et
                    nulla. In eget mi dui, sit amet scelerisque nunc. Aenean aug
                </p>
            </div>
            <div class="col-md-4 sitemap">
                <h3>Sitemap</h3>
                <div class="row">
                    <div class="col-md-12">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu1',
								'container_class' => 'mymenu-class'

							) ); ?>
                        <!--						<a href="/home/">Home</a>-->
                        <!--						<a href="/about/">About</a>-->
                        <!--						<a href="/services/">Services</a>-->
                    </div>
                    <div class="col-md-12">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu2'

							) );
						?>
                        <!--						<a href="/partners/">Partners</a>-->
                        <!--						<a href="/customers/">Support</a>-->
                        <!--						<a href="/contact/">Contact</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4 social">
                <h3>Social networks</h3>
                <a href="http://twitter.com/" class="social-icon twitter"></a>
                <a href="http://facebook.com/" class="social-icon facebook"></a>
                <a href="http://plus.google.com/" class="social-icon google-plus"></a>
                <a href="http://vimeo.com/" class="social-icon-small vimeo"></a>
                <a href="http://youtube.com/" class="social-icon-small youtube"></a>
                <a href="http://flickr.com/" class="social-icon-small flickr"></a>
                <a href="http://instagram.com/" class="social-icon-small instagram"></a>
                <a href="/rss/" class="social-icon-small rss"></a>
            </div>
            <div class="col-md-8 footer-logo">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png"
                                 alt="Whitesquare logo"></a>
                <p>
                    Copyright &copy; 2012 Whitesquare. A
                    <a href="http://pcklab.com">pcklab</a> creation
                </p>
            </div>
        </div>
    </div>
	<?php wp_footer(); ?>
</footer>
</body>
</html>

