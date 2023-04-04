<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>

	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home_nav">
     <a class="log" href="change_password.php">Change Password</a>
     <a class="log" href="logout.php">Logout</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>