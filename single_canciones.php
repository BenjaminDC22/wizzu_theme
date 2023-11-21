<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            
            <div class="row">
                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?>
            </div>
            <div class="row">
                <h2 class="my-5"><?php the_field('titulo_blog'); ?></h2>
                <h5><?php the_field('descripcion_blog'); ?></h5>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?php 
                    $image = get_field('imagen_uno_blog');
                    if( !empty( $image ) ): ?>
                        <img class="w-100 my-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php 
                    $image = get_field('imagen_dos_blog');
                    if( !empty( $image ) ): ?>
                        <img class="w-100 my-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <h5><?php the_content(); ?></h5>
            </div>
            
        <?php endwhile; ?>
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>