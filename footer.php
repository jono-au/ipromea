		</div><!-- /boldthemes_content -->
<?php

if ( BoldThemesFramework::$has_sidebar ) {
	include( get_parent_theme_file_path( 'sidebar.php' ) );					
}

?> 
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->

<?php if (!is_cart() && !is_checkout()) { ?> 
<div class="container-fluid footer-signup">
	<div class="container">
		<div>

			<div class="row">
					<div class="col-lg-5"></div>
					<div class="col-lg-6"><h3>Join the pack</h3></div>
					<div class="col-lg-1"></div>
			</div>

			<div class="row">
				<div class="col-lg-5">
					<ul>
						<li><span>&check;</span>Sign up for 10% off your first order</li>
						<li><span>&check;</span>Receive expert tips from our pet health gurus</li>
						<li><span>&check;</span>Enjoy exclusive promotions and keep up to date with the latest news</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="signupnow">
						<div class="form"><?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]')?></div>
						<p>By clicking 'join', I agree that I'm over 18, I agree to share my information with Ipromea and I agree to the <a href="/privacy-policy/">Privacy Policy</a></p>
					</div>
				</div>
				<div class="col-lg-1">
					<img src="/wp-content/uploads/2023/07/probiotics-for-dogs-45.webp" alt="ipromea">
				</div>
			</div>

		</div>
	</div>
</div>

<?php } ?>


<footer class="SiteFooter">

<div class="container">
	<div class="row">
		<div class="col-lg-2">
			<img src="/wp-content/uploads/2023/09/ipromea_logo-reversed.webp" alt="ipromea">
			<p>Contact us</p>
			<ul>
				<li>30 Blanck Street, Ormeau QLD 4208</li>
				<li><a href="tel:0735188158">07 35188158</a></li>
				<li><a href="mailto:info@ipromea.com.au">info@ipromea.com.au</a></li>
			</ul>
		</div>
		<div class="col-6 col-lg-2">
			<p>Probiotic for pets</p>
			<ul>
				<li><a href="/product-tag/dogs/">Probiotic for dogs</a></li>
				<li><a href="/product-tag/cats/">Probiotic for cats</a></li>
				<li><a href="/shop/">All products</a></li>
			</ul>
		</div>
		<div class="col-6 col-lg-2">
			<p>Quick links</p>
			<ul>
				<li><a href="/contact-us">Contact us</a></li>
				<li><a href="/privacy-policy/">Privacy policy</a></li>
				<li><a href="/refund-policy/">Returns/refund policy</a></li>
				<li><a href="/subscribe-save-terms-conditions">Subscribe & save t&cs</a></li>
				<li><a href="/ipromea-website-terms-conditions/">Website t&cs</a></li>
				<li><a href="/category/pet-care/">Pet care</a></li>
				<li><a href="/category/news/">News & events</a></li>
			</ul>
		</div>
		<div class="col-lg-2">
			<p>Stay connected</p>
			<div class="social-links">
				<a href="https://www.instagram.com/ipromeaprobiotics" target="_blank"><img src="/wp-content/uploads/2023/07/instagram-logo.png" alt="ipromea"></a>
				<a href="https://www.facebook.com/Ipromea" target="_blank"><img src="/wp-content/uploads/2023/07/facebook.logo_.png" alt="ipromea"></a>
			</div>
		</div>
		<div class="col-lg-2">
			<a href="https://www.piaa.net.au/" target="_blank"><img src="/wp-content/uploads/2021/04/PIAA-member-logo-white-no-background.png" alt="ipromea"></a>
		</div>
	</div>
</div>

<div class="container-fluid footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">© 2023 Ipromea</div>
			<div class="col-lg-6">Microbiome Research Group (TMR) Pty Ltd - Ipromea ABN 88 641 964 052</div>
		</div>
	</div>
</div>


</footer>

</div><!-- /pageWrap -->

<?php

wp_footer();

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>

	let body = document.querySelector('body');
 	if (body.classList.contains('single-product')) document.querySelector(".comment-form #submit").value = "Submit your Review";
</script>

<script>
	let ul = document.createElement('ul');

	let li = document.createElement('li');
        li.innerHTML="<a href='/shop'>All products</a>";
        ul.appendChild(li);

	let li2 = document.createElement('li');
        li2.innerHTML="<a href='/product-tag/cats/'>Cats</a>";
        ul.appendChild(li2);

	let li3 = document.createElement('li');
        li3.innerHTML="<a href='/product-tag/dogs/'>Dogs</a>";
        ul.appendChild(li3);

	let parent_node = document.querySelector('.btBox.woocommerce.widget_product_categories');
	let child_node = document.querySelector('ul.product-categories');

	parent_node.insertBefore(ul, child_node);

	document.querySelector('li.cat-item.cat-item-15 a').innerHTML="Uncategorised";
</script>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-carousel', {
        type   : 'loop',
        pauseOnHover: true,
        autoplay: false,
        trimSpace: true,
        perPage    : 3,
        breakpoints: {
            640: {
                perPage: 1,
                    },
			820: {
                perPage: 2,
                    },
                },
    } ).mount();
} );

</script>

<script>
  window.onUsersnapLoad = function(api) {
    api.init();
  }
  var script = document.createElement('script');
  script.defer = 1;
  script.src = 'https://widget.usersnap.com/global/load/d79c8473-1b7a-4dc3-b7e9-d8ef8d12c70e?onload=onUsersnapLoad';
  document.getElementsByTagName('head')[0].appendChild(script);
</script>

</body>
</html>