<?php 
$first_section = get_field('first_section');
$title=$first_section['title'];
$paragraph=$first_section['paragraph'];
$btn_green=$first_section['btn_green'];
$btn_explore=$first_section['btn_explore'];
$big_photo=$first_section['big_photo'];
?>
<section class="home-page-1 m1" data-scroll-section>
    <div class="text-first">
        <h2 data-scroll><?php echo $title ?></h2>
        <p data-scroll><?php echo $paragraph ?></p>
        <div class="btn-wrap" data-scroll>
            <button class="btn-main"><?php echo $btn_green ?></button>
            <button class="btn2"><?php echo $btn_explore ?></button>
        </div>
    </div>
    <div class="imgs-first">
        <div class="img-big">
            <img data-scroll src="<?php echo $big_photo ?>" alt="">
        </div>
        <div class="imgs-more">
            <?php 
                $photo_repeater=$first_section['photo_repeater'];
                $count = count($photo_repeater);
                if( $count ) {
                    foreach($photo_repeater as $photo){
                        $image=$photo['photo'];
            ?>
            <img data-scroll src=" <?php echo $image ?>" alt="">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/group-1.png" alt=""> -->
            <?php  } } ?>
        </div>
    </div>
</section>

<section class="slider-wrap m1" data-scroll-section>
    <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
        <?php 
            $repeater_boldo = $first_section['repeater_boldo'];
            if (!empty($repeater_boldo)) {
                foreach ($repeater_boldo as $photo) {
                $image = $photo['img_brand'];
          ?>
        <div class="swiper-slide">
            <img data-scroll src="<?php echo  $image ?> " alt="">
        </div>
        <?php  } } ?>
        </div>
    </div>
</section>

<section class="card-service m1" data-scroll-section>
    <h4 data-scroll>Our Services</h4>
    <h2 data-scroll >Handshake infographic mass market crowdfunding iteration.</h2>
    <div class="cards-wraper">
   <?php $projectsService =array(
            'posts_per_page'=> 3,
            'order'=> 'asc',
            'post_type'=>'services',
            );
            $services = new WP_Query( $projectsService );
            while ( $services->have_posts() ) : $services->the_post();
            $group = get_field('home_view');
            $img_card=$group['img_card'];
            $explore_text=$group['explore_text'];
            $text_card=$group['text_card'];
            $project_slug = get_post_field( 'post_name',$services->ID );
    ?>
    <div class="card">
            <img data-scroll class="img-card" src="<?php echo  $img_card ?>" alt="">
            <p data-scroll class="title-card"><?php echo the_title(); ?></p>
            <p data-scroll class="text-card"><?php echo $text_card ?></p>
            <div class="explore-arrow" data-scroll>
                <p><a href="<?php echo get_site_url().'/services/'. $project_slug ?>"><?php echo $explore_text?></a></p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="">
            </div>
    </div>
        <?php 
         endwhile;
         wp_reset_postdata();
        ?>
    </div>
</section>
<?php
$second_section = get_field('second_section'); 
$img_main=$second_section['img_main'];
$title=$second_section['title'];
$btn_start=$second_section['btn_start'];
$img_graph=$second_section['img_graph'];
?>
<section class="costumer1 m2" data-scroll-section >
    <div class="img-costumer">
        <img data-scroll src="<?php echo $img_main ?>" alt="">
        <div class="graf-wrap" data-scroll>
            <img data-scroll src="<?php echo $img_graph ?>" alt="">
            <p class="nr-graf">30%</p>
            <p>More income in June</p>
        </div>
    </div>
    <div class="text-costumer">
        <h5 data-scroll><?php echo $title ?></h5>
        <?php 
        if( have_rows('second_section') ): while ( have_rows('second_section') ) : the_row(); 
        if( have_rows('repeater_ticks') ): while ( have_rows('repeater_ticks') ) : the_row();
            $tick=get_sub_field('text');
        ?>
        <div class="ticks-wrap" data-scroll>
            <div class="img-tick">
                <img src="<?php echo get_template_directory_uri(); ?>/images/check.png" alt="">
            </div>
            <p><?php echo $tick  ?></p>
        </div>
        <?php  
        endwhile; endif;
        endwhile; endif;
        ?>
        <button class="btn1" data-scroll>Start Now</button>
    </div>
</section>
<?php 
$third_section = get_field('third_section'); 
$img_main=$second_section['img_main'];
$title=$second_section['title'];
?>
<section class="costumer2 m2" data-scroll-section>
    <div class="text-costumer">
        <h5 data-scroll ><?php echo $title ?></h5>
        <?php 
         if( have_rows('third_section') ): while ( have_rows('third_section') ) : the_row(); 
         if( have_rows('repeater_highlight') ): while ( have_rows('repeater_highlight') ) : the_row();
            $tick=get_sub_field('text');
            ?>
        <div class="ticks-wrap1" data-scroll >
            <img src="<?php echo get_template_directory_uri(); ?>/images/feather.png" alt="">
            <p><?php echo $tick  ?></p>
        </div>

        <?php  
        endwhile; endif;
        endwhile; endif;
        ?>
    </div>
    <div class="img-costumer">
        <img data-scroll src="<?php echo $img_main ?>" alt="">
        <?php 
            if( have_rows('third_section') ): while ( have_rows('third_section') ) : the_row(); 
            if( have_rows('repeater_highlight') ): while ( have_rows('repeater_highlight') ) : the_row();
            $tick=get_sub_field('text');
            $img_graf=get_sub_field('img_graf');
            $nr_graf=get_sub_field('nr_graf');
            $graf_text=get_sub_field('graf_text');
            ?>
        <div class="graf-wrap" data-scroll>
            <img data-scroll class="img-inside-graph" src="<?php echo $img_graf ?>" alt="">
            <p class="nr-graf"><?php echo $nr_graf  ?></p>
            <p><?php echo $graf_text ?></p>
        </div>
        <?php  
        endwhile; endif;
        endwhile; endif;
    ?>
    </div>
</section>
<?php 
$fourth_section = get_field('fourth_section'); 
$title=$fourth_section['title'];
?>
<section class="slider-custom p1" data-scroll-section>
    <h3 data-scroll ><?php echo  $title ?></h3>
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
        <?php 
            $card_repeater=$fourth_section['card_repeater'];
            $count = count($card_repeater);
            if( $count ) {
                foreach($card_repeater as $card){
                    $rewview_text=$card['rewview_text'];
                    $img_profile=$card['img_profile'];
                    $client_text=$card['client_text'];
                    $client_work=$card['client_work'];
            ?>
            <div class="swiper-slide">
                <div class="card-slider">
                    <p data-scroll ><?php echo $rewview_text ?></p>
                    <div class="profile-wrap">
                        <img data-scroll src="<?php echo  $img_profile ?>" alt="">
                        <div class="text-profile">
                            <p class="name-profile" data-scroll>
                               <?php echo $client_text ?>
                            </p>
                            <p data-scroll ><?php echo $client_work ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php  } } ?>
        </div>
    <div class="pagination-wrap">
        <div class="swiper-button-prev">
            <img class="left" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt="">
        </div>
    </div>
  </div>
</section>
<?php 
$fifth_section = get_field('fifth_section');
$img=$fifth_section['img']; 
$title=$fifth_section['title']; 
?>


<section class="conect-section p1" data-scroll-section>
    <img data-scroll src="<?php echo $img ?>" alt="">  
    <div class="text-conect">
        <div class="wrap-absolute">
            <div class="wrap-text">
                <h3 data-scroll><?php echo $title ?></h3>
            </div>
        </div>
        <div class="collapse-wrap">
        <?php 
            $tick_repeater=$fifth_section['tick_repeater'];
            $count = count($tick_repeater);
            if( $count ) {
                foreach($tick_repeater as $ticks){
                    $title=$ticks['title'];
                    $paragraph=$ticks['paragraph'];
            ?>
            <div class="collapse-menu" data-scroll>
                <div class="click-collapse">
                    <h5 class="title-collapse"><?php echo $title ?></h5>
                    <button class="btn-collapse">
                        <img data-scroll src=" <?php echo get_template_directory_uri(); ?>/images/chevron-down.png" alt="">
                    </button>
                </div>
                <div class="collapse-inside">
                    <p><?php echo $paragraph ?></p>
                </div>
            </div>     
            <?php  } } ?>
        </div>
    </div>
</section>


<section class="blog-section m3" data-scroll-section>
    <h3 data-scroll>Our Blog</h3>
    <h3 data-scroll class="blog-title">Value proposition accelerator product management venture</h3>
    <div class="blog-wrap-home">
    <?php $projectsBlogs =array(
           'posts_per_page'=> 3,
           'order'=> 'asc',
           'post_type'=>'blogs'
            );
            $blogs = new WP_Query( $projectsBlogs );
            while ( $blogs->have_posts() ) : $blogs->the_post();

            $groupB = get_field('home_view');
            $img_card=$groupB['img_card'];
            $profile_name=$groupB['profile_name'];
            $text=$groupB['text'];
            $profile_img=$groupB['profile_img'];

            $project_slugB = get_post_field( 'post_name',$blogs->ID );
            $categories = get_the_category();
               foreach($categories as $category) { 
                $category_slug = $category->slug;
            }
    ?>
        <div class="blog-card-home">
            <a href="<?php echo get_site_url().'/blogs/'. $project_slugB ?>">
                <img data-scroll src="<?php echo $img_card ?>" alt="">
                <div class="cat-wrap">
                    <p data-scroll class="cat"><?php echo $category_slug ?></p>
                    <p data-scroll ><?php echo get_the_date(); ?></p>
                </div>
                <p data-scroll ><?php echo $text ?></p>
                <div class="blog-profile">
                    <img data-scroll class ="profile" src="<?php echo  $profile_img ?>" alt="">
                    <p data-scroll ><?php echo $profile_name ?></p>
                </div>
            </a>   
        </div>

        <?php 
         endwhile;
         wp_reset_postdata();
        ?>
    </div>
    <div class="load-wrap">
        <button data-scroll class="btn-load">Load More</button>
    </div>
    <?php $blogUrl = get_site_url() . '/blog/'; ?>
</section>
