
<section class="big-service p2" data-scroll-section>
<?php if( have_rows('hero_group') ): ?>
    <?php while( have_rows('hero_group') ): the_row(); 
        $image = get_sub_field('image');
        $paragraph = get_sub_field('paragraph');
    ?>
    <p data-scroll>Services</p>
    <h3 data-scroll>Thoughts and words</h3>
    <div class="wrap-blog">
        <img data-scroll src="<?php echo $image ?>" alt="">
        <div class="blog-text">
            <p data-scroll><?php echo $paragraph ?></p>
        </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
</section>

<section class='gallery-single' data-scroll-section>
    <h3 data-scroll class='heading'>Services</h3>
    <div class="card-wrap p-1">
    <?php 
        $projectServices =new WP_Query(array(
            'posts_per_page'=> 3,
            'order'=> 'asc',
            'post_type'=>'services',
            
            ));
        while ($projectServices->have_posts()) {
            $projectServices->the_post(); 
            $services_page=get_field('services_page');
            $text=$services_page['text'];
            $img_card=$services_page['img_card'];
            $project_slugB = get_post_field( 'post_name',$blogs->ID );
            ?>
        <div class="blog-card1">
            <a href="<?php echo get_site_url().'/services/'. $project_slugB ?>">
                <img data-scroll src="<?php echo $img_card ?>" alt="">
                <p data-scroll><?php echo $text ?></p>
            </a>
        </div>
        <?php } ?>
    </div>
    <div class="btn-1">
        <button data-scroll class='load-more' id='load-more-service'>Load More</button>
    </div>
</section>