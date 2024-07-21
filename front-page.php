<?php

get_header();
?>
    <main id="primary" class="site-main">
        <section class="banner entrance">
        <!-- video background -->    
            <video id="background-video" autoplay loop muted>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/mp4/video.mp4'; ?>" type="video/mp4" media="(min-width: 769px)">
            </video>
            <div class="container-img entrance">
                <img class="sticky float" src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="story" class="story entrance">
        <h2 id="nogap" class="animationTitre">
            <span>L</span>
            <span>'</span>
            <span>histoire</span>
        </h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <!-- section personages avec swipper -->
            <?php 
            get_template_part( 'template-parts/swiper' ); 
            ?>
            <article id="place" class="entrance">
                <div>
                    <h3 class="animationTitre">
                        <span>Le</span>
                        <span>Lieu</span>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="big_cloud" data-bottom-top="transform:translate(0px, 0px)" data-top-bottom="transform:translate(300px, 0px)"></div>
                <div class="little_cloud" data-bottom-top="transform:translate(0px, 0px)" data-top-bottom="transform:translate(300px, 0px)"></div>
            </article>
        </section>
        <section id="studio-top"></section>
        <section id="studio" class="entrance">
            <h2 class="animationTitre">
                <span>Studio</span>
                <span>Koukaki</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->


<?php
get_footer();
