<?php
get_header();
?>
    <main>
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <?php
            the_content();

            endwhile; endif;
        ?>
    </main>

<?php
	get_footer();