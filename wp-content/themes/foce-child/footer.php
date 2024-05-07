<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
	<footer id="colophon" class="site-footer">
        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">STUDIO KOUKAKI</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- script swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    slideShadows: false,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    watchSlidesProgress: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 50,
        modifier: 1,
    },
    autoplay: {
        delay: 5000,
    },
});
</script>
<!-- script skrollr -->
<script>
skrollr.init({forceHeight: false});
</script>
</body>
</html>
