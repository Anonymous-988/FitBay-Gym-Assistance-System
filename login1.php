<?php 

session_start();
include ("includes1/db1.php");

?>
<html>
<head>
	<title>FitBay | Admin Login</title>
	<link rel="stylesheet" type="text/css" href="styles1/login1.css">
</head>
<body style="background-image: url(images1/admin.jpg)">
<h2><a href="index.php">Home</a></h2>
	<h1>Admin Login</h1>


<div>
  <form action="login1.php" method="post">
    <label for="Aemail">Email</label>
    <input type="email" id="Aemail" name="admin_email" placeholder="Your Email...">

    <label for="Apass">Password</label>
    <input type="password" id="Apass" name="admin_pass" placeholder="Your Password...">

  
    <input type="submit" name="Admin_login" value="Login">
  </form>
</div>

</body>
</html>

<?php 

	//Login Script Start
  if (isset($_POST['Admin_login'])){
    $admin_email= ($_POST['admin_email']);
    $admin_password= ($_POST['admin_pass']);
    $select_admin="SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_pass='$admin_password'";
    $run_admin=mysqli_query($con, $select_admin);
    $row_count=mysqli_num_rows($run_admin);
    if ($row_count==1) {
      $_SESSION['admin_email']=$admin_email; //create session variable
      header('location: index1.php');
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End

?>