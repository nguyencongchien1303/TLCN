<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?= base_url() ?>index.php/show">1998 Collection</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= base_url() ?>shop/show" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?= base_url() ?>shop/show/shop">Shop</a>
                <a class="dropdown-item" href="<?= base_url() ?>shop/show/product_single">Single Product</a>
                <a class="dropdown-item" href="<?= base_url() ?>shop/show/cart">Cart</a>
                <a class="dropdown-item" href="<?= base_url() ?>shop/show/checkout">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="<?= base_url() ?>shop/show/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="<?= base_url() ?>shop/show/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?= base_url() ?>shop/show/contact" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="<?= base_url() ?>shop/show/login" class="nav-link">Login</a></li>
	          <li class="nav-item cta cta-colored"><a href="<?= base_url() ?>shop/show/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>