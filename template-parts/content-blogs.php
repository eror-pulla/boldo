<?php 
$id = get_the_ID();
$projectB =new WP_Query(array(
    'post_type'=>'blogs',
    'posts_per_page'=> 1,
    // 'order' => 'ASC',
    'p' => $id
    ));
    if ( $projectB->have_posts() ) : 
    while ( $projectB->have_posts() ) : $projectB->the_post();
    $single_service=get_field('single_blogs');

    // $heading=$single_service['heading'];
    // $image=$single_service['image'];
    // $paragraph=$single_service['paragraph'];
    ?>
<section class="blog-section p-5" data-scroll-section>
    <h4 data-scroll><?php the_title(); ?></h4>
    <div class="date-section">
        <p class='date' data-scroll> <?php echo get_the_date(); ?> </p>
    </div>
    <img data-scroll class="img-baner" src=" <?php echo the_post_thumbnail(); ?>
</section>
<?php 
if( have_rows('single_blogs') ): while ( have_rows('single_blogs') ) : the_row(); 
if( have_rows('repeater_blog') ): while ( have_rows('repeater_blog') ) : the_row();
    // $text=get_sub_field('text');
    $header=get_sub_field('heading');
    $image=get_sub_field('image');
    $paragraph=get_sub_field('paragraph');
?>
<div class="blog-content p-5" data-scroll-section>
    <h4 data-scroll><?php echo $header?></h4>
    <p data-scroll><?php echo $paragraph ?></p>
    <img data-scroll src="<?php echo $image?>" alt="">
</div>
<?php  
    endwhile; endif;
    endwhile; endif;
?>
<div class="wrap-tag" data-scroll-section>
    <div class="tags-wrap p-5" data-scroll>
        <h4  data-scroll>Post Tags - </h4>
        <?php 
        $post_tags= wp_get_post_tags(); ?>
        <?php wp_tag_cloud(array('orderby' => 'name', 'format' => 'list')); ?>
    </div>
</div>
<?php endwhile; ?>

<?php wp_reset_postdata();  ?>
<?php endif; ?>

<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
?>
<div class="post-navigation" data-scroll-section>
<?php if(!empty($prev_post)): ?>
    <div class="prev" style="margin-right:auto; " data-scroll>
    <span>Previous Post</span>
        <h5 style="margin-top: 0px"><a href="<?php echo esc_url(get_the_permalink($prev_post->ID)) ?>"><?php echo esc_attr($prev_post->post_title) ?></a></h5>
    </div>
    <?php endif; ?>
    <?php if(!empty($next_post)): ?>
    <div class="next" data-scroll>
    <span>Next Post</span>
        <h5 style="margin-top: 0px"><a href="<?php echo esc_url(get_the_permalink($next_post->ID)) ?>"><?php echo esc_attr($next_post->post_title) ?></a></h5>
    </div>
<?php endif; ?>
</div>