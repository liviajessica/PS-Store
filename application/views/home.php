<!DOCTYPE HTML>
<html>
	<head>
		<title>PS Gameshop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/home_include/main.css" />
		
		<!--Icon Browser-->
		<!--<link rel="icon" href="../../assets/ps4-logo.png">-->
		<link rel="icon" href="../../assets/ps4-logo6.png">
        <!--<link rel="apple-touch-icon" sizes="180x180" href="../../assets/Icon-Tab-Browser/apple-touch-icon.png">-->
        <!--<link rel="icon" type="image/png" sizes="32x32" href="../../assets/Icon-Tab-Browser/favicon-32x32.png">-->
        <!--<link rel="icon" type="image/png" sizes="16x16" href="../../assets/Icon-Tab-Browser/favicon-16x16.png">-->
        <!--<link rel="icon" type="image/png" style="max-width:200;" href="../../assets/Icon-Tab-Browser/favicon.ico">-->
        <!--<link rel="manifest" href="../../assets/Icon-Tab-Browser/site.webmanifest">-->
        
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<img src="../../assets/home_include/ps_banner1.jpg">
								</header>

							<!-- Banner -->
							    <?php
							    if($session1>=0 || $session1==-1){
    								echo "<section id='banner'>
    									<div class='content'>
    										<header>
    											<h1>Welcome to<br />
    											PlayStation Gameshop</h1>
    											<p>Your partner in-crime for PS4 Products</p>
    										</header>
    										<p>We are providing PS4 games, console, and accessories.<br/>
    										Feel free to browse our online shop...</p>
    									</div>
    									<span class='image object'>
    										<img src='../../assets/home_include/ps_banner2.jpg' alt='' />
    									</span>
    								</section>";
							    }
							    else if($session1<-1){
							        echo "<section id='banner'>
    									<div class='content'>
    										<header>
    											<h1>ADMIN MODE</h1>
    										</header>
    										<p>Make changes to PlayStation Gameshop<br>e-commerce website</p>
    									</div>
    									<span class='image object'>
    										<img src='../../assets/home_include/ps_banner2.jpg' alt='' />
    									</span>
    								</section>";
							    }
								?>

							<!-- Section -->
							    
								<section>
								    <?php
								        if($session1==-1 || $session1>=0){
        									echo "<header class='major'>
        										    <h2>Our Products</h2>
        									      </header>";
								        }
									?>
									<div class="posts">
									    <?php
									        if($session1==-1 || $session1>=0){
    									        foreach($product1 as $row){
    									            echo "
    									            <article>
            											<a class='image'><img src='data:image/jpeg;base64,".base64_encode($row['image'])."'/></a>
            											<h3>".$row['name']."</h3>
            											<p>".$row['namedesc']."</p>
            											<h4>Rp ".number_format($row['price'])."</h4>
            											<ul>
            											    <li><a href='#' class='button'>More</a></li>
            											</ul>
                                                        
            										</article>";
    									        }
									        }
        								?>
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
							        <h1>PlayStation Gameshop </h1>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
									    <?php
									    if($session1==-1){
    										echo" <li><a href=".site_url('home').">Home</a></li>
        										<li>
        											<span class='opener'>Browse Catalogue</span>
        											<ul>
        												<li><a href=".site_url('games').">PS4 Games</a></li>
        												<li><a href=".site_url('console').">PS4 Console</a></li>
        												<li><a href=".site_url('accessories').">PS4 Accessories</a></li>
        											</ul>
        										</li>
        										<li><a href='#'>My Cart</a></li>
        										<li><a href=".site_url('login').">Login</a></li>";
									    }
									    else if($session1>=0){
									        echo" <li><a href=".site_url('home').">Home</a></li>
        										<li>
        											<span class='opener'>Browse Catalogue</span>
        											<ul>
        												<li><a href=".site_url('games').">PS4 Games</a></li>
        												<li><a href=".site_url('console').">PS4 Console</a></li>
        												<li><a href=".site_url('accessories').">PS4 Accessories</a></li>
        											</ul>
        										</li>
        										<li><a href='#'>My Cart</a></li>
        										<li><a href=".site_url('login').">My Account</a></li>
        										<li><a href=".site_url('logout').">Logout</a></li>";
									    }
									    else if($session1<-1){
									        echo" <li><a href=".site_url('home').">Home</a></li>
									            <li><a href=".site_url('addproduct').">Add Product</a></li>
        										<li><a href=".site_url('').">Update Product Stock</a></li>
        										<li><a href=".site_url('').">View Sales Report</a></li>
        										<li><a href=".site_url('logout').">Logout</a></li>";
									    }
										?>
									</ul>
								</nav>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; PSGameshop. All rights reserved.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
            <script src="../../assets/js/jquery.min.js"></script>
            <script src="../../assets/js/browser.min.js"></script>
            <script src="../../assets/js/breakpoints.min.js"></script>
            <script src="../../assets/js/util.js"></script>
            <script src="../../assets/js/main.js"></script>
	</body>
</html>