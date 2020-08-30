<!DOCTYPE html>
<html>
    <head>
		<title>PS Gameshop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/login_include/login_css.css" />
	</head>
    <div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div>PlayStation<br/><span>Gameshop</span></div>
	</div>
	<br>
	<div class="login">
	    <form method="POST" action="">
			<input type="text" placeholder="email" name="email"><br>
			<input type="password" placeholder="password" name="password"><br>
			<input type="submit" value="Login" name="click"
			    style="
			        width: 260px;
                	height: 35px;
                	background: #00ab66;
                	border: 1px solid #fff;
                	cursor: pointer;
                	border-radius: 2px;
                	color: #000000;
                	font-family: 'Exo', sans-serif;
                	font-size: 16px;
                	font-weight: 400;
                	padding: 6px;
                	margin-top: 10px;">
		</form><br>
		<button onclick="pindahSignup()"
		        style="
			        width: 260px;
                	height: 35px;
                	background: #00ab66;
                	border: 1px solid #fff;
                	cursor: pointer;
                	border-radius: 2px;
                	color: #000000;
                	font-family: 'Exo', sans-serif;
                	font-size: 16px;
                	font-weight: 400;
                	padding: 6px;
                	margin-top: 10px;">Sign Up</button>
	</div>
	
	<script>
	    function pindahSignup(){
	        location.href="<?php echo site_url('signup'); ?>";
	    }
	</script>
	
	<?php
	    if(isset($_POST['click'])){
            $email = null;
            $password = null;
            $flag=99;
        
        	if(isset($_POST['email'])) 
        		$email = $_POST['email'];
        	
        	if(isset($_POST['password'])) 
        		$password = $_POST['password'];
        		
        	if($email==null && $password==null){
        	    echo "<script type='text/javascript'>
        	             alert('Please Enter Both Your Username and Password...');
        	          </script>";
        	    unset($_POST['email'], $_POST['password']);
        	    redirect('login'); 
        	}
        	else if($email==null || $password==null) {
        	    echo "<script type='text/javascript'>
                        alert('All fields are required...');
            	        </script>";
            	unset($_POST['email'], $_POST['password']);
            	redirect('login'); 
        	}
        	else{
            	foreach($login1 as $row){
            	    if($row['email'] == $email && $row['pwd'] == md5($password) ){
            	        $flag=1;
            	        $this->session->set_userdata('t1',$row['id']);
            	        $session1 = $row['id'];
            	        redirect('home');
            	    }
            	}
            	if(flag==99){
            	    echo "<script type='text/javascript'>
                        alert('Please Enter Both Your Username and Password...');
            	          </script>";
            	        unset($_POST['email'], $_POST['password']);
            	        redirect('login'); 
            	}
        	}
	    }
    ?>
	
</html>