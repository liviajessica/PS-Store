<!DOCTYPE HTML>
<html>
	<head>
		<title>PS Gameshop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/signup_include/main_signup.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2 style="font-family: Comic Sans MS; margin-bottom: 10px; font-size=70px;">Add New Product</h2>
									<h10 style="color: grey;">Please fill all the required fields below...</h10>
								</header>
								<form action="addproduct/insert_action" method="post" id="usrform" enctype="multipart/form-data">
									<div>
										<div class="row">
											<div class="col-12">
												<label>Product Name : <br> </label>
												<input type="text" name="name" placeholder="Product Name" />
											</div>
											<div class="col-12">
												<label>Model Desc : </label> 
												<input type="text" name="namedesc" placeholder="Model Desc" /><br><br>
											</div>
											<div class="col-12">
												<label>Product Desc : <br> </label>
												<textarea rows="4" cols="100" name="longdesc" form="usrform" placeholder="Product Desc"></textarea>
											</div>
											<div class="col-12">
												<label>Stock : </label>
												<input type="number" name="stock" placeholder="Stock" />
											</div>
											<div class="col-12">
												<label>Price : </label> 
												<input type="number" name="price" placeholder="Price" />
											</div>
											<div class="col-12">
												<label>Weight (in kg) : </label> 
												<input type="number" name="weight" placeholder="Weight in kg" />
											</div>
											<div class="col-12">
												<label>Product Type :</label>
												<select name="producttype" required>
													 <option value="Games">PS4 Games</option>
                                                     <option value="Console">PS4 Console</option>
                                                     <option value="Accessories">PS4 Accessories</option>
												</select>
											</div>
											<div class="col-12">
												<label>Release Date :</label>
												<input type="date" name="releasedate"/>
											</div>
											<div class="col-12">
												<label>Upload Product Image :</label>
												<input type="file" name="file">
											</div>
											
											<div class="col-12">
												<input type="submit" value="Submit" style="width:100%;" name="click2" />
											</div>
										</div>
									</div>
								</form>
							</article>
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