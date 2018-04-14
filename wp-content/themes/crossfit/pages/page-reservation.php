<?php
/*
Template Name: Reservations
*/
get_header();
get_post();
$imageHeroID = get_field('image_hero');
$imageHeroURL = wp_get_attachment_image_src($imageHeroID, '2000x1500');

?>

<div class="hero-home hero-home--single" style="background-image: url('<?php echo $imageHeroURL[0]; ?>');">
    <div class="hero-home__content">
        <div class="title">
            <?php echo get_the_title(); ?>
        </div>
        <div class="text">
            <?php echo $textHero; ?>
        </div>

    </div>
</div>

<div class="container">
    <div class="row container-tarifs">
        <iframe width="100%" height="100%" scrolling="auto" src="http://www-crossfitjj-com.filesusr.com/html/258915_2c43f62fb76b5d9908a0f0fcd45ff44f.html"></iframe>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center strate-tarifs-end">
            <a href="#" class="button border">
                Contactez-nous
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
