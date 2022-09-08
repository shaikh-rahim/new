<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="forgetpassword.css" rel="stylesheet">
    <title>ForgetPassword</title>
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST">
            <div class="login__field">
                 <i class="login__icon fas fa-lock"></i>
                 <input type="text" name="studentid" class="login__input" placeholder="StudentID">
            </div>
            <div class="login__field">
                 <i class="login__icon fas fa-user"></i>
                 <input type="email" name="email" class="login__input" placeholder=" Email">
            </div>
            <div class="login__field">
                 <i class="login__icon fas fa-lock"></i>
                 <input type="date" name="date" class="login__input">
            </div>
            <div class="login__field">
                 <i class="login__icon fas fa-lock"></i>
                 <input type="password" name="newpassword" class="login__input" placeholder="Enter New Password">
            </div>
            <button  name="submit" class="button login__submit">
            <span class="button__text">Change Password</span>
            <i class="button__icon fas fa-chevron-right"></i> </button>
								
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','database');
if(isset($_POST['submit']))
{
    $studentid = $_POST['studentid'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $newpassword = $_POST['newpassword'];
    $query="Select * from signupdata where EMAIL='$email'&& STUDENTID='$studentid' && DATE='$date'";
    $RUN=mysqli_query($con,$query);
    $count = mysqli_num_rows($RUN);
    if($count == 1) {
        $query1 = "UPDATE signupdata SET PASSWORD=$newpassword where STUDENTID='$studentid' ";
        $RUN=mysqli_query($con,$query1);
      header("location:http://localhost/new/signupandlogin/signupandlogin.php");
   }else {
    echo '<script>alert("Invalid Data login with correct data")</script>';
   }
}
 
?>
