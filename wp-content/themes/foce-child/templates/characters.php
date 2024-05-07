<?php
            $args = array(
                'post_type' => 'characters', 
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <section class="story">
                <article id="characters">

                <div class="main-character">
                    <h3><span class="hidden">Les</span>&nbsp;<span class="hidden title__fadeIn-delayed">personnages</span></h3> 
                    <div class="container">

                      <div class="swiper mySwiper">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/Kawaneko.png'; ?>" alt="">      
                              </div>
                              <div class="swiper-slide">
                                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/Orenjiiro.png'; ?>" alt="">      
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/Pinku.png'; ?>" alt="">      
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/Tenshi.png'; ?>" alt="">      
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/characters/Jaakuna.png'; ?>" alt="">      
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </article>
            </section>

