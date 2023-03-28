<?php 
$first_section = get_field('first_section');
$title=$first_section['title'];
$paragraph=$first_section['paragraph'];
$btn_green=$first_section['btn_green'];
$btn_explore=$first_section['btn_explore'];
$big_photo=$first_section['big_photo'];
?>
<section class="home-page-1 m1">
    <div class="text-first">
        <h2><?php echo $title ?></h2>
        <p><?php echo $paragraph ?></p>
        <div class="btn-wrap">
            <button class="btn1"><?php echo $btn_green ?></button>
            <button class="btn2"><?php echo $btn_explore ?></button>
        </div>
    </div>
    <div class="imgs-first">
        <div class="img-big">
            <img src="<?php echo $big_photo ?>" alt="">
        </div>
        <div class="imgs-more">
            <?php 
                $photo_repeater=$first_section['photo_repeater'];
                $count = count($photo_repeater);
                if( $count ) {
                    foreach($photo_repeater as $photo){
                        $image=$photo['photo'];
            ?>
            <img src=" <?php echo $image ?>" alt="">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/group-1.png" alt=""> -->
            <?php  } } ?>
        </div>
    </div>
</section>
<section class="slider-wrap m1">
    <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
        <?php 
                $repeater_boldo=$first_section['repeater_boldo'];
                $count = count($repeater_boldo);
                if( $count ) {
                    foreach($repeater_boldo as $photo){
                        $image=$photo['img_brand'];
            ?>
        <div class="swiper-slide">
            <img src="<?php echo  $image ?> " alt="">
        </div>
        <?php  } } ?>
        </div>
    </div>
</section>
<section class="card-service">
    <h4>Our Services</h4>
    <h2>Handshake infographic mass market crowdfunding iteration.</h2>
    <div class="cards-wraper">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <p>Cool feature title</p>
            <div class="explore-arrow">
                <p><a href="">Explore page</a></p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="">
            </div>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-2.png" alt="">
            <p>Even cooler feature</p>
            <div class="explore-arrow">
                <p><a href="">Explore page</a></p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="">
            </div>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-3.png" alt="">
            <p>Cool feature title</p>
            <div class="explore-arrow">
                <p><a href="">Explore page</a></p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="">
            </div>
        </div>
    </div>
</section>
<?php
$second_section = get_field('second_section'); 
$img_main=$second_section['img_main'];
$title=$second_section['title'];
$btn_start=$second_section['btn_start'];
$img_graph=$second_section['img_graph'];
?>
<section class="costumer1 m2">
    <div class="img-costumer">
        <img src="<?php echo $img_main ?>" alt="">
        <div class="graf-wrap">
            <img src="<?php echo $img_graph ?>" alt="">
            <p class="nr-graf">30%</p>
            <p>More income in June</p>
        </div>
    </div>
    <div class="text-costumer">
        <h5><?php echo $title ?></h5>
        <?php 
            $repeater_ticks=$second_section['repeater_ticks'];
            $count = count($repeater_ticks);
            if( $count ) {
                foreach($repeater_ticks as $ticks){
                    $tick=$ticks['text'];
            ?>
        <div class="ticks-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/check.png" alt="">
            <p><?php echo $tick  ?></p>
        </div>
        <?php  } } ?>
        <button class="btn1">Start Now</button>
    </div>
</section>
<?php 
$third_section = get_field('third_section'); 
$img_main=$second_section['img_main'];
// $img_graph=$second_section['img_graph'];
$title=$second_section['title'];
?>
<section class="costumer2 m2">
    <div class="text-costumer">
        <h5><?php echo $title ?></h5>
        <?php 
            $repeater_highlight=$third_section['repeater_highlight'];
            $count = count($repeater_highlight);
            if( $count ) {
                foreach($repeater_highlight as $highlight){
                    $tick=$highlight['text'];
                    $img_graf=$highlight['img_graf'];
                    $nr_graf=$highlight['nr_graf'];
                    $graf_text=$highlight['graf_text'];
            ?>
        <div class="ticks-wrap1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/feather.png" alt="">
            <p><?php echo $tick  ?></p>
        </div>
        <?php  } } ?>
    </div>
    <div class="img-costumer">
        <img src="<?php echo $img_main ?>" alt="">
        <?php 
            $repeater_highlight=$third_section['repeater_highlight'];
            $count = count($repeater_highlight);
            if( $count ) {
                foreach($repeater_highlight as $highlight){
                    $tick=$highlight['text'];
                    $img_graf=$highlight['img_graf'];
                    $nr_graf=$highlight['nr_graf'];
                    $graf_text=$highlight['graf_text'];
            ?>
        <div class="graf-wrap">
            <img src="<?php echo $img_graf ?>" alt="">
            <p class="nr-graf"><?php echo $nr_graf  ?></p>
            <p><?php echo $graf_text ?></p>
        </div>
        <?php  } } ?>
    </div>
</section>
<?php 
$fourth_section = get_field('fourth_section'); 
$title=$fourth_section['title'];
?>
<section class="slider-custom p1">
    <h3><?php echo  $title ?></h3>
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
                    <p><?php echo $rewview_text ?></p>
                    <div class="profile-wrap">
                        <img src="<?php echo  $img_profile ?>" alt="">
                        <div class="text-profile">
                            <p class="name-profile">
                               <?php echo $client_text ?>
                            </p>
                            <p><?php echo $client_work ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php  } } ?>
        </div>
    <div class="pagination-wrap">
        <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png" alt="">
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
<section class="conect-section p1">
    <img src="<?php echo $img ?>" alt="">  
    <div class="text-conect">
        <div class="wrap-text">
            <h3><?php echo $title ?></h3>
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
            <div class="collapse-menu">
                <div class="click-collapse">
                    <h5 class="title-collapse"><?php echo $title ?></h5>
                    <button class="btn-collapse">
                        <img src=" <?php echo get_template_directory_uri(); ?> /images/chevron-down.png" alt="">
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

<section class="blog-section m3">
    <h4>Our Blog</h4>
    <h3 class="blog-title">Value proposition accelerator product management venture</h3>
    <div class="blog-wrap">

        <div class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <div class="cat-wrap">
                <p class="cat">Category</p>
                <p>November 22, 2021</p>
            </div>
            <p>Pitch termsheet backing validation focus release.</p>
            <div class="blog-profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                <p>Chandler Bing</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <div class="cat-wrap">
                <p class="cat">Category</p>
                <p>November 22, 2021</p>
            </div>
            <p>Pitch termsheet backing validation focus release.</p>
            <div class="blog-profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                <p>Chandler Bing</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <div class="cat-wrap">
                <p class="cat">Category</p>
                <p>November 22, 2021</p>
            </div>
            <p>Pitch termsheet backing validation focus release.</p>
            <div class="blog-profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                <p>Chandler Bing</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <div class="cat-wrap">
                <p class="cat">Category</p>
                <p>November 22, 2021</p>
            </div>
            <p>Pitch termsheet backing validation focus release.</p>
            <div class="blog-profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                <p>Chandler Bing</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <div class="cat-wrap">
                <p class="cat">Category</p>
                <p>November 22, 2021</p>
            </div>
            <p>Pitch termsheet backing validation focus release.</p>
            <div class="blog-profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                <p>Chandler Bing</p>
            </div>
        </div>
        <div class="blog-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-1.png" alt="">
            <div class="cat-wrap">
                <p class="cat">Category</p>
                <p>November 22, 2021</p>
            </div>
            <p>Pitch termsheet backing validation focus release.</p>
            <div class="blog-profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                <p>Chandler Bing</p>
            </div>
        </div>

    </div>
    <div class="load-wrap">
        <button class="btn-load">Load More</button>
    </div>
</section>