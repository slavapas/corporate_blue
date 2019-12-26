<?php get_header(); ?>

<?php
//check if this single post has a thumbnail, IF NOT we assign the default picture to it
if ( has_post_thumbnail() ) {
	$featureimage = get_the_post_thumbnail_url();

} else {
	$featureimage = 'PATH-TO-DEFAULT-IMAGE';
}

//check if there is a such custom filed
if ( get_field( 'dob' ) ) {
	$dob = get_field( 'dob' );

	//$realDob = new DateTime( $dob );
} else{
	echo 'Error DOB!!!!!!!';
}

// check if there is such field
if ( get_field( 'duration' ) ) {
	$duration = get_field( 'ducation' );
}

// check if there is such field
if ( get_field( 'movies' ) ) {
	$movies = get_field( 'movies' );
	echo $movies;
}
?>
    <!--    //***********************-->
    <!--    // display the Custom Fileds-->
    <!--    //************************-->

    <section>

        <p>
			<?php if ( have_posts() ): while ( have_posts() ):
			the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="col-lg-7">
			<?php echo '<img src="' . $featureimage . '">'; ?>
        </div><!--end of col-lg-7-->
        <div class="col-lg-17">
			<?php the_content(); ?>

            <!--	Display the Movies gender		-->
            <div class="col-lg-17">
                <div class="mytitle"> Movies</div>
                <ul class="mymovies">
					<?php foreach ( $movies as $movie ) { ?>
                        <li><?php echo $movie; ?> </li>
					<?php } ?> <!--end foreach  -->
                </ul>
				<?php endwhile;
				endif; ?>
            </div>
            <col-lg-17>
                <div class="mytitle"> Date of Birth </div>
	            <?php echo $dob; ?>
				<br>
				<a href="http://<?php echo the_field('movie'); ?>">Facebook</a>
            </col-lg-17>
        </div> <!--end of col-lg-17-->
        </p>

    </section>


<?php get_footer(); ?>