<?php
/*
Template Name: Homepage
*/
get_header();
get_post();
?>

<div class="hero-home" style="background-image: url('https://images.pexels.com/photos/685531/pexels-photo-685531.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');">
    <div class="hero-home__content">
        <div class="title">
            Bienvenue chez crossfit j&j
        </div>
        <div class="text">
            Un lieu unique et singulier destiné au CrossFit en plein coeur du
            Val de Marne 94.
        </div>
        <ul class="share-list">
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="10" height="18" viewBox="0 0 10 18">
                    <path d="M9.635,3.257 C9.635,3.257 7.490,3.262 7.490,3.262 C7.168,3.263 6.418,3.778 6.419,4.354 C6.419,4.354 6.420,6.534 6.420,6.534 C6.420,6.534 9.637,6.527 9.637,6.527 C9.637,6.527 9.640,9.795 9.640,9.795 C9.640,9.795 6.423,9.803 6.423,9.803 C6.423,9.803 6.429,17.431 6.429,17.431 C6.429,17.431 3.212,17.438 3.212,17.438 C3.212,17.438 3.206,9.810 3.206,9.810 C3.206,9.810 -0.011,9.817 -0.011,9.817 C-0.011,9.817 -0.014,6.549 -0.014,6.549 C-0.014,6.549 3.203,6.541 3.203,6.541 C3.203,6.541 3.202,4.362 3.202,4.362 C3.200,1.958 5.301,-0.002 7.554,-0.007 C7.554,-0.007 9.632,-0.012 9.632,-0.012 C9.632,-0.012 9.635,3.257 9.635,3.257 Z" id="path-1" class="cls-2" fill-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M2.136,0.034 C2.136,0.034 1.064,0.037 1.064,0.037 C0.471,0.038 -0.008,0.526 -0.008,1.128 C-0.008,1.128 -0.007,2.218 -0.007,2.218 C-0.007,2.218 -0.002,8.756 -0.002,8.756 C-0.002,8.756 0.003,15.294 0.003,15.294 C0.003,15.294 0.004,16.384 0.004,16.384 C0.005,16.987 0.485,17.473 1.078,17.471 C1.078,17.471 2.150,17.469 2.150,17.469 C2.150,17.469 15.018,17.439 15.018,17.439 C15.018,17.439 16.090,17.436 16.090,17.436 C16.682,17.436 17.162,16.947 17.161,16.344 C17.161,16.344 17.160,15.255 17.160,15.255 C17.160,15.255 17.155,8.716 17.155,8.716 C17.155,8.716 17.150,2.178 17.150,2.178 C17.150,2.178 17.149,1.089 17.149,1.089 C17.149,0.487 16.669,0.000 16.076,0.002 C16.076,0.002 15.004,0.004 15.004,0.004 C15.004,0.004 2.136,0.034 2.136,0.034 ZM8.575,6.557 C9.758,6.554 10.720,7.530 10.721,8.732 C10.722,9.933 9.762,10.913 8.578,10.916 C7.395,10.919 6.433,9.943 6.432,8.741 C6.431,7.540 7.392,6.560 8.575,6.557 ZM15.016,15.260 C15.016,15.260 2.148,15.289 2.148,15.289 C2.148,15.289 2.143,8.751 2.143,8.751 C2.143,8.751 4.287,8.747 4.287,8.747 C4.289,11.150 6.216,13.100 8.580,13.095 C10.945,13.089 12.868,11.131 12.866,8.726 C12.866,8.726 15.011,8.721 15.011,8.721 C15.011,8.721 15.016,15.260 15.016,15.260 ZM15.008,5.452 C15.008,5.452 11.791,5.460 11.791,5.460 C11.791,5.460 11.788,2.191 11.788,2.191 C11.788,2.191 15.005,2.183 15.005,2.183 C15.005,2.183 15.008,5.452 15.008,5.452 Z" id="path-1" class="cls-2" fill-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>

    <ul class="partner-logo">
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner-1.png" alt="">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner-2.png" alt="">
            </a>
        </li>
    </ul>

    <div class="arrow">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow.png" alt="">
    </div>
</div>

<div class="container">
    <div class="row strate-intro">
        <div class="col-sm-6">
            <img src="https://images.pexels.com/photos/703012/pexels-photo-703012.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
        </div>
        <div class="col-sm-6">
            <div class="title medium">
                Le CrossFit ... c'est quoi?
            </div>
            <p>
                Le CrossFit est une méthode de préparation physique.  Notre objectif est de vous fournir une condition physique vaste et fonctionnelle.Par vaste nous entendons diversité.Par fonctionnelle,nous entendons transposable dans la vie quotidienne. Pour cela nous utilisons trois familles d'activités Les sports d'endurance,la gymnastique et l'haltérophilie dans des entrainements  constamment  variés effectués à haute intensité.
            </p>

            <a href="#" class="button border">
                Nous contacter
            </a>
        </div>
    </div>
</div>

<div class="strate-video-full">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title medium white">
                    Chez nous
                </div>

                <iframe width="854" height="480" src="https://www.youtube.com/embed/YhmRTh1jD1U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
