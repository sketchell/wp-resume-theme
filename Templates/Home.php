<?php 
// Template Name: Home
get_header(); 
?>

    <main id="main" role="main">
        <?php if (have_posts()): ?>
            <?php
            the_post();
                        
            $post_fields = function_exists('get_fields') ? get_fields() : null;
                            the_content();
            ?>
        
        <?php endif; ?>      
        <?php $query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>
            <?php if ( $query->have_posts() ) : ?>
                <!-- the loop -->
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                  <?php the_title(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                  <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    </main>

<?php get_footer(); ?>