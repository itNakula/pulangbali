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
	<section class="bg-red py-4 text-white">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3 mb-3">
					<h3>Stay Connected</h3>
				</div>
				<div class="col-12 col-md-5 mb-3">
					<p class="mb-0">Subscribe to our newsletter to stay up to date with our latest news and promos.</p>
				</div>
				<div class="col-12 col-md-4 mb-3">
					<form action="https://nakula.us14.list-manage.com/subscribe/post?u=8b061b9f1fbaed47da7014a31&amp;id=75c01ddfdd&amp;f_id=005182e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate d-flex" target="_self">
						<input type="email" placeholder="Your Email" value="" name="EMAIL" class="form-control form-control-light bg-transparent rounded-0 me-0 required email" id="mce-EMAIL" required>
						<div hidden="true">
							<input type="hidden" name="tags" value="12498918">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true">
							<input type="text" name="b_8b061b9f1fbaed47da7014a31_75c01ddfdd" tabindex="-1" value="">
						</div>
						<div class="clear">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-light rounded-0">
						</div>	  
					</form><!-- form mailchimp -->
				</div>
			</div>
		</div>
	</section>

    <section class="pt-5 mb-8">
		<div class="container">
			<div class="row text-center text-md-start">
				<div class="col-sm-2 mb-3">
					<?php if( get_field('logo_2', 'option') ): ?>
						<img src="<?php the_field('logo_2', 'option'); ?>" alt="logo nakula villas" height="56">
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-nakula.png" alt="logo nakula villas" width="58">
					<?php endif; ?>			
				</div>
				<div class="col-sm-5 mb-3">
					<?php the_field('footer_info_1', 'option'); ?>
				</div>
				<div class="col-sm-5 mb-3">
					<?php the_field('footer_info_2', 'option'); ?>
				</div>
			</div>
		</div>
    </section><!-- section info 2-->
    
    
	<footer class="pt-2 pb-2 fixed-bottom bg-white">
        <div class="container d-lg-none text-center">
            <a href="https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml?showPromotions=1&Hotelnames=ASIAIDHTLAmartaRetre&Clusternames=ASIAIDNAKULAHP" class="linkca" target="_blank">Check Availability</a>
        </div>
      	<div class="container d-none d-lg-block">
        	<form target="dispoprice" name="idForm" class="row gx-3 gy-2 align-items-center">
            	<input type="hidden" id="clusternames" name="clusternames" value="ASIAIDNAKULAHP">
        		<input type="hidden" id="hotelnames" name="hotelnames" value="ASIAIDHTLAmartaRetre">
				<div class="col">
					<label class="form-label mb-0" for="specificSizeInputCheckIn">Check in</label>
					<input type="date" name="arrival" class="form-control rounded-0 border-0 border-bottom" id="specificSizeInputCheckIn" placeholder="Jane Doe">
				</div>
				<div class="col">
					<label class="form-label mb-0" for="specificSizeInputCheckOut">Check out</label>
					<input type="date" name="departure" class="form-control rounded-0 border-0 border-bottom" id="specificSizeInputCheckOut" placeholder="Username">
				</div>
				<div class="col">
					<label class="form-label mb-0" for="specificSizeSelect">Rooms</label>
					<select name="nbdays" class="form-select rounded-0 border-0 border-bottom" id="specificSizeSelect">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
				<div class="col">
					<label class="form-label mb-0" for="specificSizeSelect">Promo Code</label>
					<input type="text" name="AccessCode" class="form-control rounded-0 border-0 border-bottom" id="specificSizeInputPromo" placeholder="HolidayWithAmarta">
				</div>
				<div class="col">
					<input name="B1" type="button" class="btn btn-outline-light rounded-0 w-100" value="Check Availability" onclick="hhotelDispoprice(this.form)" class="submit">
				</div>
        	</form>
      	</div>
    </footer><!--footer-->
	

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
