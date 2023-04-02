<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Puzzle
 */

?>

<footer id="colophon" class="site-footer">
    <!-- <div class="container"> -->

      <div class="row rowi">
      <p>&copy; <?php echo date(' Y ') ;?> Fusible Inovations</p>
          
      <?php dynamic_sidebar('footer1');?>
		</div>

	<!-- </div> -->
		</footer><!-- #colophon -->

		
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
	var swiper = new Swiper('.swiper-container1', {
    loop: true,
    grabCursor: true,
    pagination: {
    el: '.swiper-pagination1',
    clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      fadeEffect: { crossFade: true 
      },
      virtualTranslate: true,
    //   autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: true,
    //   },
      speed: 1000, 
      effect: "fade"
    });


	var Menu = {
          el: {
          ham: jQuery('.menu-m'),
          menuTop: jQuery('.menu-top'),
          menuMiddle: jQuery('.menu-middle'),
          menuBottom: jQuery('.menu-bottom')
          },
          init: function() {
          Menu.bindUIactions();
          },
          bindUIactions: function() {
          Menu.el.ham
          .on(
          'click',
          function(event) {
          Menu.activateMenu(event);
          event.preventDefault();
          }
          );
          },
          activateMenu: function() {
          Menu.el.menuTop.toggleClass('menu-top-click');
          Menu.el.menuMiddle.toggleClass('menu-middle-click');
          Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
          }
          };
      Menu.init();

	//   jQuery('.menu-item').on('click',function() {
    //     jQuery('.navbar-collapse').collapse('hide');
    //     jQuery('.navbar-toggler').attr("aria-expanded","false");
    //     jQuery('.menu-bottom').removeClass('menu-bottom-click');
    //     jQuery('.menu-top').removeClass('menu-top-click');
    //     jQuery('.menu-middle').removeClass('menu-middle-click');
    //   });
</script>

</body>
</html>