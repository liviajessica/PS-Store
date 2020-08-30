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
									<h2 style="font-family: Comic Sans MS; margin-bottom: 10px; font-size=70px;">Sign Up</h2>
									<h10 style="color: grey;">Please fill all the required fields below...</h10>
								</header>
								<form action="" method="post">
									<div>
										<div class="row">
											<div class="col-12">
												<label>Email : <br> </label>
												<input type="email" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												<label>Password : </label> 
												<input type="password" name="password" placeholder="Password" /><br><br>
											</div>
											<div class="col-12">
												<label>Full Name : <br> </label>
												<input type="text" name="fullname" placeholder="Full Name" />
											</div>
											<div class="col-12">
												<label>Phone Number : </label>
												<input type="text" name="phone" placeholder="Phone Number" />
											</div>
											<div class="col-12">
												<label>Address : </label> 
												<input type="text" name="address" placeholder="Address" />
											</div>
											<div class="col-12">
												<label>Province :</label>
												<select name="province" required>
													 <option value="aceh">Aceh</option>
                                                     <option value="Sumut">Sumatera Utara</option>
                                                     <option value="sumbar">Sumatera Barat</option>
                                                     <option value="Riau">Riau</option>
                                                     <option value="Jambi">Jambi</option>
                                                     <option value="Sumsel">Sumatera Selatan</option>
                                                     <option value="Bengkulu">Bengkulu</option>
                                                     <option value="Lampung">Lampung</option>
                                                     <option value="BaBel">Kep. Bangka Belitung</option>
                                                     <option value="kepRiau">Kepulauan Riau</option>
                                                     <option value="Jakarta">Jakarta</option>
                                                     <option value="Jabar">Jawa Barat</option>
                                                     <option value="Banten">Banten</option>
                                                     <option value="Jateng">Jawa Tengah</option>
                                                     <option value="Yogyakarta">Yogyakarta</option>
                                                     <option value="Jatim">Jawa Timur</option>
                                                     <option value="Kalbar">Kalimantan Barat</option>
                                                     <option value="Kalteng">Kalimantan Tengah</option>
                                                     <option value="Kalsel">Kalimantan Selatan</option>
                                                     <option value="Kaltim">Kalimantan Timur</option>
                                                     <option value="Kaltra">Kalimantan Utara</option>
                                                     <option value="Bali">Bali</option>
                                                     <option value="NTT">Nusa Tenggara Timur</option>
                                                     <option value="NTB">Nusa Tenggara Barat</option>
                                                     <option value="Sulut">Sulawesi Utara</option>
                                                     <option value="Sulteng">Sulawesi Tengah</option>
                                                     <option value="Sulsel">Sulawesi Selatan</option>
                                                     <option value="Sultengg">Sulawesi Tenggara</option>
                                                     <option value="Sulbar">Sulawesi Barat</option>
                                                     <option value="Gorontalo">Gorontalo</option>
                                                     <option value="Maluku">Maluku</option>
                                                     <option value="Maluku Utara">Maluku Utara</option>
                                                     <option value="Papua">Papua</option>
                                                     <option value="Papua Barat">Papua Barat</option> 
												</select>
											</div>
											<div class="col-12">
												<label>Postcode :</label>
												<input type="text" name="postcode" placeholder="Postcode"/>
											</div>
											<div class="col-12">
												<label>City : </label> 
												<input type="text" name="city" placeholder="City" />
											</div>
											
											<div class="col-12">
												<input type="submit" value="Submit" style="width:100%;" name="click2" />
											</div>
										</div>
									</div>
								</form>
							</article>

					</div>

				<!-- Footer -->


			</div>
			
			<?php
			    if(isset($_POST['click2'])){
			        if(isset($_POST['email']) && isset($_POST['fullname']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['province']) && isset($_POST['postcode']) && isset($_POST['city']) && isset($_POST['password'])){
			            $data = array(
                                'email' => $_POST['email'],
                                'fullname' => $_POST['fullname'],
                                'phone' => $_POST['phone'],
                                'address' => $_POST['address'],
                                'province' => $_POST['province'],
                                'postcode' => $_POST['postcode'],
                                'city' => $_POST['city'],
                                'pwd' => md5($_POST['password'])
                        );
                        
                        $this->db->insert('users', $data);
                        
				        foreach($signup1 as $row){
				            if($row['email']==$_POST['email']){
				                $this->session->t1 = $row['id'];
				                $session1 = $row['id'];
				                break;
				            }
				        }
				        redirect('home');
			        }
			        else{
			            echo "<script type='text/javascript'>
                        alert('All fields are required...');
            	        </script>";
			        }
			    }
			?>

		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/browser.min.js"></script>
			<script src="../../assets/js/breakpoints.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<script src="../../assets/js/main.js"></script>

	</body>
</html>