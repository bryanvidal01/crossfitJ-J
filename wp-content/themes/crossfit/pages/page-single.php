<?php
/*
Template Name: Single
*/
get_header();
get_post();
$imageHeroID = get_field('image_hero');
$imageHeroURL = wp_get_attachment_image_src($imageHeroID, '2000x1500');

$textHero = get_field('text-hero');

?>

<div class="hero-home hero-home--single" style="background-image: url('<?php echo $imageHeroURL[0]; ?>');">
    <div class="hero-home__content">
        <div class="title">
            <?php echo get_the_title(); ?>
        </div>
        <div class="text">
            <?php echo $textHero; ?>
        </div>

        <a href="#" class="button border">
            Nous contacter
        </a>
    </div>
</div>

<div class="container">



    <?php
    // check if the flexible content field has rows of data
    if( have_rows('strates') ):

         // loop through the rows of data
        while ( have_rows('strates') ) : the_row();

            if( get_row_layout() == 'strate_text_left' ):
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $imgID = get_sub_field('image');
                $imgUrl = wp_get_attachment_image_src($imgID, '600x400');
            ?>

            <div class="row strate">
                <div class="col-sm-6 visible-xs">
                    <img src="<?php echo $imgUrl[0]; ?>" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="bloc-text-image">
                        <?php if ($title): ?>
                            <div class="title medium">
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>
                        <p>
                            <?php echo $text; ?>
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 hidden-xs">
                    <img src="<?php echo $imgUrl[0]; ?>" alt="">
                </div>
            </div>

        <?php elseif( get_row_layout() == 'strate_text_right' ):

            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $imgID = get_sub_field('image');
            $imgUrl = wp_get_attachment_image_src($imgID, '600x400');

            ?>

            <div class="row strate">
                <div class="col-sm-6">
                    <img src="<?php echo $imgUrl[0]; ?>" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="bloc-text-image">
                        <?php if ($title): ?>
                            <div class="title medium">
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>
                        <p>
                            <?php echo $text; ?>
                        </p>
                    </div>
                </div>

            </div>

        <?php elseif( get_row_layout() == 'strate_iframe' ):
            $iframe = get_sub_field('iframe');
        ?>
        <div class="row strate">
            <div class="col-sm-10 col-sm-offset-1">
                <?php echo $iframe; ?>
            </div>
        </div>

    <?php elseif( get_row_layout() == 'strate_button' ):
            $linkButton = get_sub_field('link_button');
            $textButton = get_sub_field('text_button');
        ?>

        <div class="row strate">
            <div class="col-sm-12 text-center">
                <a href="<?php echo $linkButton; ?>" class="button border">
                    <?php echo $textButton; ?>
                </a>
            </div>
        </div>

        <?php endif;

        endwhile;

    endif;

    ?>
</div>

<?php get_footer(); ?>
