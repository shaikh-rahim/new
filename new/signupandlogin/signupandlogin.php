<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="signupandlogin.css" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			    <div class="signup">
				<form method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="int" name="studentid" pattern="[0-9]*" placeholder="Enter StudentID" required>
                    <input type="email" name="email" placeholder="Enter Email ID" required>
                    <input type="password" name="password" pattern="[a-z,A-Z,0-9]*" placeholder="Enter Password" required>
					<input type="date" name="date" placeholder="Enter DOB" required="" style="width:60%"><br>
                    <button class="submit" name="submit">Sign up</button>
				</form>
                </div>
                <?php
  $con=mysqli_connect('localhost','root','','database');
  if(isset($_POST['submit']))  
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $studentid=$_POST['studentid'];
    $date=$_POST['date'];
    $query="INSERT INTO signupdata (STUDENTID,EMAIL,PASSWORD,DATE) VALUES ('$studentid','$email','$password','$date')";
    $RUN=mysqli_query($con,$query);
     header("Location:http://localhost/new/homepage.php");
  } 
 
?> 
              <div class="login">
				<form method="POST">
					<label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" pattern="[a-z,A-Z,0-9]*" placeholder="Password" required>
                    <button class="logindata" name="logindata">Login</button>
				</form>
                <a href="http://localhost/new/signupandlogin/forgetpassword.php">
                    <button class="forgot" name="forgot">Forget Password</button>
                </a>
                </div>
 <?php         
  $con=mysqli_connect('localhost','root','','database');
  if(isset($_POST['logindata']))  
{
    $password=$_POST['password'];
    $email=$_POST['email'];
    $query="Select * from signupdata where PASSWORD='$password' && EMAIL='$email'";
    $RUN=mysqli_query($con,$query);
    $count = mysqli_num_rows($RUN);
    if($count == 1) {
        header("Location:http://localhost/new/homepage.php");
   }else {
    echo '<script>alert("Invalid Data login with correct data")</script>';
   }
}
?>

     
			</div>
	
</body>
</html>