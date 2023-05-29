<?php 
$id = get_the_ID();
$projectServices =new WP_Query(array(
    'posts_per_page'=> 1,
    'p' => $id ,
    'post_type'=>'services'
    ));
    if ( $projectServices->have_posts() ) : 
    while ( $projectServices->have_posts() ) : $projectServices->the_post();
    $single_service=get_field('single_service');

    // $header=$single_service['header'];
    // $image=$single_service['image'];
    // $paragraph=$single_service['paragraph'];
    ?>
<section class="wraper-services" data-scroll-section>

    <section class="services-section ">
        <h4 data-scroll><?php echo get_the_title(); ?></h4>
        <p data-scroll class='date'><?php echo get_the_date(); ?></p>
        <img data-scroll src=" <?php echo get_the_post_thumbnail(); ?>
    </section>
    <?php 
        if( have_rows('single_service') ): while ( have_rows('single_service') ) : the_row(); 
        if( have_rows('repeater_contet') ): while ( have_rows('repeater_contet') ) : the_row();
            $tick=get_sub_field('text');
            $header=get_sub_field('header');
            $image=get_sub_field('image');
            $paragraph=get_sub_field('paragraph');
        ?>
    <section class="content-services">
        <h4 data-scroll class="p6"><?php echo $header ?></h4>
        <p data-scroll class="p6"><?php echo $paragraph ?></p>
        <img data-scroll src="<?php echo $image ?>" alt="">
    </section> 
    <?php  
        endwhile; endif;
        endwhile; endif;
    ?>
</section>
<?php endwhile; ?>

<?php wp_reset_postdata();  ?>
<?php endif; ?>

<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
?>
<section class="post-navigation1" data-scroll-section>
<?php if(!empty($prev_post)): ?>
    <div class="prev" style="margin-right:auto;" data-scroll>
    <span>Previous Service</span>
        <h5 style="margin-top: 0px"><a href="<?php echo esc_url(get_the_permalink($prev_post->ID)) ?>"><?php echo esc_attr($prev_post->post_title) ?></a></h5>
    </div>
    <?php endif; ?>
    <?php if(!empty($next_post)): ?>
    <div class="next" data-scroll>
    <span>Next Service</span>
        <h5 style="margin-top: 0px"><a href="<?php echo esc_url(get_the_permalink($next_post->ID)) ?>"><?php echo esc_attr($next_post->post_title) ?></a></h5>
    </div>
<?php endif; ?>
</section>