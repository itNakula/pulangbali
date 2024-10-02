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
					<form action="https://nakula.us14.list-manage.com/subscribe/post?u=8b061b9f1fbaed47da7014a31&amp;id=8c48551105&amp;f_id=001db9e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate d-flex" target="_self">
						<input type="email" placeholder="Your Email" value="" name="EMAIL" class="form-control form-control-light bg-transparent rounded-0 me-0 required email" id="mce-EMAIL" required>
						<div hidden="true">
							<input type="hidden" name="tags" value="12498918">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true">
							<input type="text" name="b_8b061b9f1fbaed47da7014a31_8c48551105" tabindex="-1" value="">
						</div>
						<div class="clear">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-light rounded-0">
						</div>	  
					</form><!-- form mailchimp -->
				</div>
			</div>
		</div>
	</section>

    <section class="bg-footer">
		<div class="container">
			<div class="row text-center text-md-start">
				<div class="col-sm-3 mb-3">
					<?php if( get_field('logo_1', 'option') ): ?>
						<img src="<?php the_field('logo_1', 'option'); ?>" alt="logo nakula villas" height="44">
					<?php else: ?>
						<h4>Villa Pulang Bali</h4>
					<?php endif; ?>
					
					<?php the_field('footer_info_1', 'option'); ?>		
				</div>
				<div class="col-sm-3 mb-3">
					<h6 class="fw-light">Stay</h6>
					<p><a href="/stay/#the-villa">The Villa</a><br>
					<a href="/stay/#quick-facts">Quick Facts</a><br>
					<a href="/stay/#rates">Rates &amp; Availability</a><br>
					<a href="/stay/#reviews">Reviews</a></p>
				</div>
				<div class="col-sm-3 mb-3">
					<h6 class="fw-light">Experiences</h6>
					<p><a href="/experiences/#butler">Butler &amp; Concierge</a><br>
					<a href="/experiences/#dining">In-Villa Dining</a><br>
					<a href="/experiences/#wellness">Healthy and Wellness</a><br>
					<a href="/experiences/#activities">Activities</a><br>
					<a href="/experiences/#destination">Destination Guide &amp; Highlights</a></p>
				</div>
				<div class="col-sm-3 mb-3">
					<?php the_field('footer_info_2', 'option'); ?>
				</div>
			</div><hr />
			<div class="row text-center text-md-start">
				
				<div class="col-sm-12 mb-3 text-center">
					<p>© 2024 – <a href="https://nakula.com/" target="_blank">Nakula</a>. All rights reserved.</p>
				</div>
			</div>
		</div>
    </section><!-- section info 2-->
    
    
    <div class="<?php the_field('header_setting'); ?>">
		<footer class="pt-2 pb-2 fixed-bottom <?php the_field('disable_form', 'option'); ?>">
			<div class="container d-lg-none text-center">
				<a href="https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml?showPromotions=1&Hotelnames=<?php the_field('book_now', 'option'); ?>&Clusternames=ASIAIDNAKULAHP" class="linkca" target="_blank">Check Availability</a>
			</div>
			<div class="container d-none d-lg-block">
				<form target="dispoprice" name="idForm" class="row gx-3 gy-2 align-items-center">
					<input type="hidden" id="clusternames" name="clusternames" value="ASIAIDNAKULAHP">
					<input type="hidden" id="hotelnames" name="hotelnames" value="<?php the_field('book_now', 'option'); ?>">
					<div class="col">
						<label class="form-label mb-0" for="specificSizeInputCheckIn">Check in</label>
						<input type="date" name="arrival" class="form-control rounded-0 border-0 border-bottom" id="specificSizeInputCheckIn" placeholder="Jane Doe">
					</div>
					<div class="col">
						<label class="form-label mb-0" for="specificSizeInputCheckOut">Check out</label>
						<input type="date" name="departure" class="form-control rounded-0 border-0 border-bottom" id="specificSizeInputCheckOut" placeholder="Username">
					</div>
					<div class="col">
						<label class="form-label mb-0" for="specificSizeSelect">Adults</label>
						<select name="adulteresa" class="form-select rounded-0 border-0 border-bottom" id="specificSizeSelect">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					<div class="col">
						<label class="form-label mb-0" for="specificSizeSelect">children</label>
						<select name="enfantresa" class="form-select rounded-0 border-0 border-bottom" id="specificSizeSelect">
							<option value="0">0</option>	
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
					<div class="col">
						<label class="form-label mb-0" for="specificSizeSelect">Promo Code</label>
						<input type="text" name="AccessCode" class="form-control rounded-0 border-0 border-bottom" id="specificSizeInputPromo" placeholder="">
					</div>
					<div class="col">
						<input name="B1" type="button" class="btn btn-outline-light rounded-0 w-100" value="Check Availability" onclick="hhotelDispoprice(this.form)" class="submit">
					</div>
				</form>
			</div>
		</footer><!--footer-->
	</div>
<?php wp_footer(); ?>
<!-- Start of Qontak Webchat Script -->
<script>
// const qchatInit = document.createElement('script');
// qchatInit.src = "https://webchat.qontak.com/qchatInitialize.js";
// const qchatWidget = document.createElement('script');
// qchatWidget.src = "https://webchat.qontak.com/js/app.js";
// document.head.prepend(qchatInit);
// document.head.prepend(qchatWidget);
// qchatInit.onload = function () {qchatInitialize({ id: '1de18629-8bd9-4519-82b6-1bf2a982ea40', code: 'tw1qv_j3kwVOxemVEk2Gww' })};
</script>
<!-- End of Qontak Webchat Script -->
</body>
</html>
