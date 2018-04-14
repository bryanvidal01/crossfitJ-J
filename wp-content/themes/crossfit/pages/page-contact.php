<?php
/*
Template Name: Contact
*/
get_header();
get_post();
$imageHeroID = get_field('image_hero');
$imageHeroURL = wp_get_attachment_image_src($imageHeroID, '2000x1500');
$iframe = get_field('iframe_google_map');
$pageID = get_the_id();


if($_GET['send']){
    if($_POST['first-name'] && $_POST['email'] && $_POST['phone']  && $_POST['message']){

        $to = get_field('email_admin');
        $subject = 'Nouveau message depuis le site internet Crossfit J&J';
        $body = 'Nom : ' . $_POST['first-name'] . ' Email : ' . $_POST['email'] . ' Téléphone : ' . $_POST['phone'] . ' Message : ' . $_POST['message'] . '';
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail( $to, $subject, $body, $headers );

        $success = "Votre message a bien été envoyé";
    }else{
        $error = "Tous les champs doivent êtres remplis";
    }

}

?>

<div class="hero-home hero-home--single" style="background-image: url('<?php echo $imageHeroURL[0]; ?>');">
    <div class="hero-home__content">
        <div class="title">
            <?php echo get_the_title(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form class="contact-form" action="<?php echo get_the_permalink($pageID); ?>?send=1" method="post">

                <?php if ($error): ?>
                    <div class="error">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <?php if ($success): ?>
                    <div class="success">
                        <?php echo $success; ?>
                    </div>
                <?php endif; ?>
                <input type="text" name="first-name" placeholder="Nom" />
                <input type="email" name="email" placeholder="Email" />
                <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="phone" placeholder="Téléphone" />
                <textarea name="message" placeholder="Message"></textarea>

                <button type="submit" class="button border">
                    Nous contacter
                </button>
            </form>
        </div>
        <div class="col-sm-6 text-center">
            <div class="map">
                <?php if ($iframe): ?>
                    <?php echo $iframe; ?>
                <?php endif; ?>
            </div>

            <div class="adresse">
                1 rue de la Libération<br/>
                94510 La Queue en Brie<br/>
                Tel: 0631289993
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
