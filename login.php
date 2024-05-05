<?php require_once('syscon.php'); ?>
<?php
 // *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}
 function check($data) {
$data = trim($data);
$data = htmlspecialchars($data);
$data = htmlentities($data);
return $data;
}

    //Login
    if(isset($_POST['login_submit'])) {
        $con;
        $email = check($_POST['email']);
		$password = md5(check($_POST['password']));
		//echo $password;
		//exit();
$result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'") or die(mysqli_error($con));    
		
		if(mysqli_num_rows($result) < 1) {  
		    
		 
			$msg =  '<div  style="font-size: 14px; color: #842029; border-color: #f5c2c7;  position: relative; color: #822029;
  background-color: #eec0c4;padding: 10px; width: 235px; border-radius: 15px;">Incorrect Email or Password 
			 <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
    
  </span>
  </div>';
		}
		else {
			$row = mysqli_fetch_array($result);
			$_SESSION['user'] = $email;
				// echo $_SESSION['user'];
		  //  exit();
				if(isset($_SESSION['user'])){
 $msg =  '<div style="font-size: 14px; color: #0f5132; border-color: #badbcc;  position: relative;  
  background-color: #c1e1d2;padding: 10px; width: 200px; border-radius: 15px;" role="alert"> Logged in Successfully
				    	<span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                         
                      </span>
                      </div>
				   <script>  setTimeout(function(){window.location.href="softwareproject.php";},3000); </script>';
			}
			
				
		}
    }
 
 
 
  
if ((isset($_GET["do"])) && ($_GET["do"] == "success")) {
 
  $msg =  '<div style="font-size: 14px; color: #ffffff; border-color: #badbcc;  position: relative;  
  background-color: #3c7b5e;padding: 10px; width: 560px; border-radius: 15px;" role="alert"> Account Created Successfully, You can now login to your account!
				    	<span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                         
                      </span>
                      </div>';
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
 <style>
 .aller{
 font-size: 14px;
 color: #842029;
  border-color: #f5c2c7;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
  border-radius: var(--bs-alert-border-radius);
  }
   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Project Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <script src="index.js"></script>
         <link rel="stylesheet" href="assets/alert/css/alertify.min.css" />
	<link rel="stylesheet" href="assets/alert/css/themes/default.min.css" />
	<script src="assets/alert/alertify.min.js"></script>
</head>
<body>
    <nav>
        <h1>Master Project</h1>
        <div>
            <a href="login.php">
                <button class="login_btn">Login</button>
            </a>
            <a href="index.php">
                <button class="register_btn">Register</button>
            </a>
        </div>
    </nav>

    <section>
        
    </section>
    <h1 class="header">Hi, Welcome Back</h1>
    
    
    <div class="form_container">
     
        <form action="login.php" method="post">
			<?php echo $msg; ?>
            <div class="formgroup2">
                <label for="email">Email address</label> <br>
                <input type="email" id="email" name="email" placeholder="Eg: Johndoe@gmail.com" required>
            </div>
            
            <div class="formgroup2">
                <label for="password">Password</label> <br>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>

            <br>

            <div class="formgroup2">
                <button class="register_form_btn">Login</button>
                <p style="text-align: center;">Don't have an account? <a href="index.php" class="tertiary_btn">Register</a></p>
            </div>
            <input type="hidden" name="login_submit" >
        </form>
    </div>

    <footer>
        <p>Project By: Okafor Ifeanyi</p>
    </footer>
    
    
    <!-- jQuery -->
		<script src="assets/js/jquery-3.6.1.min.js"></script>
</body>
</html>