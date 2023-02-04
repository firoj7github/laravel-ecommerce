<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 01781-129819</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> fkfiroj02@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Ns Road Kushtia</a></li>
					</ul>
					<ul class="header-links pull-right">
					<li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/">Home</a>
                     </li>
					 <li class="nav-item">
                        <a class="nav-link" href="{{url('myorder')}}">My Orders</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="/login" >Login</a>
                     </li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">

							<h2 class="logo mt-4 text-white">Banko.</h2>
								
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									
									<select class="input-select">
										
										<option >category</option>
										
									</select>
									
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="{{url('wishlist')}}">
										<i class="fa fa-heart-o"></i>
										<span>Wishlist</span>
										<div class="qty wishlistcount">0</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a href="{{url('cart')}}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Cart</span>
										<div class="qty cartcount">0</div>
									</a>
									<div class="cart-dropdown">
										
										
					                        <div class="cart-btns">
											<a href="{{url('cart')}}">View Cart</a>
											<a href="{{url('checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>












<!-- <nav class="navbar navbar-expand-lg nav-control ">
  <div class="container-fluid ">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link d-inline " href="{{url('cart')}}">Cart</a>
          <span class="badge badge-pill bg-success d-inline cartcount">0</span>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link d-inline" href="{{url('wishlist')}}">Wishlist</a>
          <span class="badge badge-pill bg-primary d-inline wishlistcount">0</span>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="{{url('myorder')}}">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login" >Login</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>  -->