<?php 
$about_section_first = get_field('about_section_first');
$title=$about_section_first['title'];
$text=$about_section_first['text'];
$paragraph=$about_section_first['paragraph'];
?>
<section class="about" data-scroll-section>
    <div class="about-header">
        <h6 data-scroll><?php echo $title ?></h6>
        <h2 data-scroll><?php echo $text ?></h2>
    </div>
    <div class="about-text">
        <p data-scroll><?php echo $paragraph ?></p>
    </div>
</section>
<?php
$numbers_section = get_field('numbers_section');
$title=$numbers_section['title'];
?>
<section class="our-nr p3" data-scroll-section>
    <h6 data-scroll>Our numbers</h6>
    <h3 data-scroll><?php echo $title ?></h3>
    <div class="wrap-numbers">
    <?php 
        $repeater_numbers=$numbers_section['repeater_numbers'];
        $count = count($repeater_numbers);
        if( $count ) {
            foreach($repeater_numbers as $nr){
                $numbers=$nr['numbers'];
                $text=$nr['text'];
    ?>
        <div class="nr-wrap">
            <p data-scroll class="nr"> <?php echo $numbers ?></p >
            <p data-scroll ><?php echo $text ?></p>
        </div>
    <?php  } } ?>
    </div>
</section>
<?php
$about_story_section = get_field('about_story_section');
$title=$about_story_section['title'];
$paragraph=$about_story_section['paragraph'];
?>
<section class="story p4" data-scroll-section>
    <p data-scroll>Our story</p>
    <h6 data-scroll><?php echo $title ?></h6>
    <p data-scroll class="paragraph"><?php echo $paragraph ?></p>
</section>
<?php 
$team_section = get_field('team_section');
$title=$team_section['title'];
$paragraph=$team_section['paragraph'];
?>
<section class="team" data-scroll-section>
    <div class="lidership p4">
        <p data-scroll>Our team</p>
        <h6 data-scroll><?php echo $title ?></h6>
        <p data-scroll class="para"><?php echo $paragraph ?></p>
    </div>
    <div class="position p5">
    <?php 
        $card_team_repeater=$team_section['card_team_repeater'];
        $count = count($card_team_repeater);
        if( $count ) {
            foreach($card_team_repeater as $card){
                $img=$card['img'];
                $name=$card['name'];
                $position=$card['position'];
    ?>
        <div class="position-card">
            <img data-scroll src="<?php echo $img ?>" alt="">
            <p data-scroll class="name"><?php echo $name ?></p>
            <p data-scroll><?php echo  $position ?></p>
        </div>
    <?php  } } ?>
    </div>
</section>
<?php 
$values_section = get_field('values_section');
$title=$values_section['title'];
$paragraph=$values_section['paragraph'];
?>
<section class="values p4" data-scroll-section>
    <div class="lidership">
        <p data-scroll>Our values</p>
        <h6 data-scroll><?php echo $title ?></h6>
        <p data-scroll class="para"><?php echo $paragraph ?></p>
    </div>
    <?php 
        $repeater_values=$values_section['repeater_values'];
        $count = count($repeater_values);
        if( $count ) {
            foreach($repeater_values as $val){
                $img=$val['img'];
                $small_title=$val['small_title'];
                $small_paragraph=$val['small_paragraph'];
    ?>
     <div class="wrap-values">
        <img data-scroll src="<?php echo $img ?>" alt="">
        <div class="inside-para">
            <h6 data-scroll><?php echo $small_title ?></h6>
            <p data-scroll><?php echo $small_paragraph ?></p>
        </div>
     </div>
    <?php  } } ?>
</section>