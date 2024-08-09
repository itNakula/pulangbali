<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NakulaVilla
 */

?>
	

    <section class="pt-5 mb-8">
		<div class="container">
			<div class="row text-center text-md-start">
				<div class="col-sm-2 mb-3">
					<?php if( get_field('logo_2', 'option') ): ?>
						<img src="<?php the_field('logo_2', 'option'); ?>" alt="logo nakula villas" height="105">
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-nakula.png" alt="logo nakula villas" width="105">
					<?php endif; ?>			
				</div>
				<div class="col-sm-5 mb-3">
					<?php //the_field('footer_info_1', 'option'); ?>
				</div>
				<div class="col-sm-5 mb-3">
					<?php the_field('footer_info_2', 'option'); ?>
				</div>
			</div>
		</div>
    </section><!-- section info 2-->
    
    
	
	

<?php wp_footer(); ?>
<script>
    
    function call(id) {
    const items = Array.from(document.getElementsByClassName("filter"));
    items.map(function (item, index) {
      console.log(item);
      if (id === "all") {
        item.classList.remove('d-none');
        item.classList.add('fadeIn');
        setTimeout(clean,500);
      } else {
        const check = items[index].classList.contains(id);
        console.log(check);

        if (check) {
          item.classList.remove('d-none');
          item.classList.add('fadeIn');
        } else {
          item.classList.add('d-none');
          item.classList.remove('fadeIn');
        }
      }
    })
  }

  function clean() {
    const items = Array.from(document.getElementsByClassName("filter"));
    items.map(function (item, index) {
      item.classList.remove('fadeIn');
    })
  }
</script>
</body>
</html>
