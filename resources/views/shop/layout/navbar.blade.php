

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href={{route('shop-index')}}>
								<img src="{{asset('assets/img/logo.png')}}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href={{route('shop-index')}}>Home</a>
								</li>
								<li><a href={{route('about-page')}}>About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href={{route('404-error')}}>404 page</a></li>
										<li><a href={{route('about-page')}}>About</a></li>
										<li><a href={{route('cart-page')}}>Cart</a></li>
										<li><a href={{route('checkout-page')}}>Check Out</a></li>
										<li><a href={{route('contact-page')}}>Contact</a></li>
										<li><a href={{route('news-page')}}>News</a></li>
										<li><a href={{route('shop-page')}}>Shop</a></li>
									</ul>
								</li>
								<li><a href={{route('news-page')}}>News</a>
									<ul class="sub-menu">
										<li><a href={{route('news-page')}}>News</a></li>
										<li><a href={{route('singleNews-page')}}>Single News</a></li>
									</ul>
								</li>
								<li><a href={{route('contact-page')}}>Contact</a></li>
								<li><a href={{route('shop-page')}}>Shop</a>
									<ul class="sub-menu">
										<li><a href={{route('shop-page')}}>Shop</a></li>
										<li><a href={{route('checkout-page')}}>Check Out</a></li>
										<li><a href={{route('product-page', ['id' => 1])}}>Single Product</a></li>
										<li><a href={{route('cart-page')}}>Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href={{route('cart-page')}}><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

