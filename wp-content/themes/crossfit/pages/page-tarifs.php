<?php
/*
Template Name: Tarifs
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
        <div class="col-sm-12">
            <div class="title medium">
                Retrouvez toutes nos formules
            </div>
        </div>
        <div class="col-sm-3">
            <div class="push-tarif">
                <div class="push-tarif__title">
                    Initiations
                </div>
                <div class="push-tarif__price">
                    59€
                </div>
                <div class="push-tarif__description">
                    Module de trois cours,indispensable pour débuter le crossfit en toute sécurité plus un WOD pour découvrir la discipline
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="push-tarif gold">
                <div class="push-tarif__title">
                    12 MOIS
                </div>
                <div class="push-tarif__price">
                    89€/Mois
                </div>
                <div class="push-tarif__description">
                    WOD et Open Gym sans limite,vivez l'experience CrossFit à 100% (engagement 12 mois minimum)
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="push-tarif">
                <div class="push-tarif__title">
                    1 MOIS
                </div>
                <div class="push-tarif__price">
                    119€/Mois
                </div>
                <div class="push-tarif__description">
                    WOD et open gym sans limites, sans engagement
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="push-tarif">
                <div class="push-tarif__title">
                    A la carte (Drop in)
                </div>
                <div class="push-tarif__price">
                    20€
                </div>
                <br/>
                <div class="push-tarif__title">
                    A la carte (Carte 10 WODs)
                </div>
                <div class="push-tarif__price">
                    150€
                </div>

            </div>
        </div>
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
