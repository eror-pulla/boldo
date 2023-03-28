<?php 
$about_section_first = get_field('about_section_first');
$title=$about_section_first['title'];
$text=$about_section_first['text'];
$paragraph=$about_section_first['paragraph'];
?>
<section class="about p2">
    <div class="about-header">
        <h6><?php echo $title ?></h6>
        <h2><?php echo $text ?></h2>
    </div>
    <div class="about-text">
        <p><?php echo $paragraph ?></p>
    </div>
</section>
<?php
$numbers_section = get_field('numbers_section');
$title=$numbers_section['title'];
?>
<section class="our-nr p3">
    <h6>Our numbers</h6>
    <h3><?php echo $title ?></h3>
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
            <p class="nr"> <?php echo $numbers ?></p >
            <p><?php echo $text ?></p>
        </div>
    <?php  } } ?>
    </div>
</section>
<?php
$about_story_section = get_field('about_story_section');
$title=$about_story_section['title'];
$paragraph=$about_story_section['paragraph'];
?>
<section class="story p4">
    <p>Our story</p>
    <h6><?php echo $title ?></h6>
    <p class="paragraph"><?php echo $paragraph ?></p>
</section>
<?php 
$team_section = get_field('team_section');
$title=$team_section['title'];
$paragraph=$team_section['paragraph'];
?>
<section class="team">
    <div class="lidership p4">
        <p>Our team</p>
        <h6><?php echo $title ?></h6>
        <p class="para"><?php echo $paragraph ?></p>
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
            <img src="<?php echo $img ?>" alt="">
            <p class="name"><?php echo $name ?></p>
            <p><?php echo  $position ?></p>
        </div>
    <?php  } } ?>
    </div>
</section>
<?php 
$values_section = get_field('values_section');
$title=$values_section['title'];
$paragraph=$values_section['paragraph'];
?>
<section class="values p4">
    <div class="lidership">
        <p>Our values</p>
        <h6><?php echo $title ?></h6>
        <p class="para"><?php echo $paragraph ?></p>
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
        <img src="<?php echo $img ?>" alt="">
        <div class="inside-para">
            <h6><?php echo $small_title ?></h6>
            <p><?php echo $small_paragraph ?></p>
        </div>
     </div>
    <?php  } } ?>
</section>