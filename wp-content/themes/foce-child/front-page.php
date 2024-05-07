<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video  class="banner__video" autoplay muted loop poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?> ">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/Studio-Koukaki-video.mp4'?> " alt="" > 
            </video>
            <div class="banner__parallax" data-center-top ="bottom: 80%" data-top="bottom: 15%" >
                <img class="floating-Y"  src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="">
            </div>
        </section>
        
        <section id="story" class="story">
            
            <article id="" class="story__article">
                <h2><span class="hidden">L'histoire</span></h2>
                    
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
        </section>
            <!-- template characters -->
            <?php get_template_part( 'templates/characters', get_post_type() );
            ?>
        <section class="story">
            <article id="place">
                <div id="place__banner">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Studio_Koukaki-image_place.png'; ?>" alt="">
                    
                    <div id="place__text" >
                        <h3><span class="hidden">Le </span>&nbsp;<span class="hidden title__fadeIn-delayed">Lieu</span></h3>
                        <p><?php echo get_theme_mod('place'); ?></p>
                    </div>
                    <div class="nuages" data-center-top ="left: 60%" data-top="left:20%">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/nuages.png'; ?>" alt="">
                    </div>
                    
                </div>
            </article>
        </section>
        

        <section>
            <article id="studio">
                <h2><span class="hidden">Studio</span>&nbsp;<span class="hidden title__fadeIn-delayed">Koukaki</span></h2>
                <div>
                    <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                    <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
                </div>
            </article>
            </section>     
        </section>  
        <!-- template oscars -->
<?php   get_template_part( 'templates/oscars', get_post_type() ); ?>


</main><!-- #main -->


<?php
get_footer();
