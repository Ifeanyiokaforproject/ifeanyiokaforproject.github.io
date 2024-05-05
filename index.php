<?php require_once('syscon.php'); ?>
<?php
 	function check($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
    return $data;
    }

if ((isset($_POST["process"])) && ($_POST["process"] == "yes")) {

$firstname=check($_POST['firstname']);
$lasttname=check($_POST['lasttname']);
$email=check($_POST['email']);
$password=check($_POST['password']);
  
    
$pfm = mysqli_query($con, "INSERT INTO users(fname, lname, email, password, date)VALUE('$firstname', '$lasttname', '$email', md5('$password'), '".time()."')");
 
 
header("Location: ". "login.php?do=success"); }else{ } 
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Project Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <script src="index.js"></script>
</head>
<body>
    <nav>
        <h1>Master Project</h1>
        <div>
            <div>
                <a href="login.php">
                    <button class="login_btn">Login</button>
                </a>
                <a href="index.php">
                    <button class="register_btn">Register</button>
                </a>
            </div>
        </div>
    </nav>

    <section>
        
    </section>
    <h1 class="header">Create an Account</h1>
    <div class="form_container">
        <form action="" method="post">
            <div class="formgroup1">
                <div class="firstname_input_container">
                    <label for="firstname">First name</label> <br>
                    <input type="text" id="firstname" name="firstname" placeholder="Eg: John" required>
                </div>
                
                <div class="lastname_input_container">
                    <label for="lastname">Last name</label> <br>
                    <input type="text" id="lasttname" name="lasttname" placeholder="Eg: Doe" required>
                </div>
            </div>

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
                <button class="register_form_btn">Register</button>
                <p style="text-align: center;">Already have an account? <a href="login.php" class="tertiary_btn">Login</a></p>
            </div>
             <input type="hidden" name="process" value="yes">
        </form>
    </div>

    <footer>
        <p>Project By: Okafor Ifeanyi</p>
    </footer>
</body>
</html>