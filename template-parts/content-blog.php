<section class="big-blog p2" data-scroll-section>
 <?php 
        $projectsBlog =new WP_Query(array(
            'posts_per_page'=> 1,
            'order'=> 'asc',
            'post_type'=>'blogs',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms' => 'main-blog'
                    ) 
                )
            ));
        while ($projectsBlog->have_posts()) {
            $projectsBlog->the_post(); 
            $projects_preview=get_field('single_blog_view');
            $text=$projects_preview['text'];
            $image=$projects_preview['image'];
            $profile_img=$projects_preview['profile_img'];
            $client_name=$projects_preview['client_name'];
            $categories = get_the_category();
               foreach($categories as $category) { 
                $category_slug = $category->slug;
            }
            ?>
    <p data-scroll>Blog</p>
    <h3 data-scroll>Thoughts and words</h3>
    <div class="wrap-blog">
        <img data-scroll src="<?php echo $image ?>" alt="">
        <div class="blog-text">
            <div class="cat-wrap">
                <p data-scroll class='cat'><?php echo $category_slug ?></p>
                <p data-scroll class='date'><?php echo get_the_date(); ?></p>
            </div>
            <h5 data-scroll ><?php echo $text ?></h5>
            <div class="prof-wrap">
                <img data-scroll src="<?php echo $profile_img ?>" alt="">
                <p data-scroll ><?php echo $client_name ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
<section class='gallery-single' data-scroll-section>
    <h3 data-scroll class='heading1'>Latest news</h3>
    <div class="card-wrap p-1">
    <?php 
        $projectsBlog =new WP_Query(array(
            'posts_per_page'=> 3,
            'order'=> 'asc',
            'post_type'=>'blogs'
            ));
        while ($projectsBlog->have_posts()) {
            $projectsBlog->the_post(); 

            $projects_preview=get_field('single_blog_view');
            $text=$projects_preview['text'];
            $image=$projects_preview['image'];
            $profile_img=$projects_preview['profile_img'];
            $client_name=$projects_preview['client_name'];
            
            $project_slugB = get_post_field( 'post_name',$blogs->ID );
            $categories = get_the_category();
               foreach($categories as $category) { 
                $category_slug = $category->slug;
            }
            ?>
        <div class="blog-card">
            <a href="<?php echo get_site_url().'/blogs/'. $project_slugB ?>">
                <img data-scroll src="<?php echo $image ?>" alt="">
                <div class="cat-wrap">
                    <p data-scroll class='cat'><?php echo  $category_slug ?></p>
                    <p data-scroll class='date'><?php echo get_the_date(); ?></p>
                </div>
                <p data-scroll s><?php echo $text ?></p>
                <div class="prof-wrap">
                    <img data-scroll src="<?php echo $profile_img ?>" alt="">
                    <p data-scroll><?php echo $client_name?></p>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
    <div class="btn-1">
        <button data-scroll class='load-more' id='load-more-blog'>Load More</button>
    </div>
</section>