@include('shop.layout.header', ['title' => '404!'])
@include('shop.layout.navbar')
@include('shop.layout.search-area')
@include('shop.layout.breadcrumb-section',['description' => 'Fresh and Organic','name' => '404 - Not Found'])

        <!-- error section -->
		<div class="full-height-section error-section">
			<div class="full-height-tablecell">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 text-center">
							<div class="error-text">
								<i class="far fa-sad-cry"></i>
								<h1>Oops! Not Found.</h1>
								<p>The page you requested for is not found.</p>
								<a href={{route('shop-index')}} class="boxed-btn">Back to Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end error section -->

@include('shop.layout.logo')
@include('shop.layout.footer')
