<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: userModule/login.php");
    exit;
}
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Academic Certificate Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="style/stylei.css" rel="stylesheet" type="text/css" />
	</head>
<body>
<div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="userModule/reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="userModule/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</div>    
<div id="container">
<div class="bubble">
<div class="rectangle"><h2>Academic Certificate Portal</h2></div>
<div class="triangle-l"></div>    <!-- Left triangle -->
<div class="triangle-r"></div>    <!-- Right triangle -->
<div class="info">
<p>
<h2>Choose Your Design</h2>
<div height="500px"></div><h1>Move your mouse over thumbnails For Larger View</h1>
<div height="500px"></div>
<div class="spa"> put cursor on image below this box </div>

<table>
  <tr> 
	<td><a class="thumb" href="index.php?cert=design1"><img height="100px" width="100px" src="style/designs/design1.jpg" id="design1.jpg"  		alt=""><span><img height="411px" width="617px" src="style/designs/design1.jpg" alt=""></span></td>

	<td><a class="thumb" href="index.php?cert=design2"><img height="100px" width="100px" src="style/designs/design2.jpg" id="design2.jpg" 		alt=""><span><img height="411px" width="617px" src="style/designs/design2.jpg" alt=""></span></td>

	<td><a class="thumb" href="index.php?cert=design3"><img height="100px" width="100px" src="style/designs/design3.jpg" id="design3.jpg"  		alt=""><span><img height="411px" width="617px" src="style/designs/design3.jpg" alt=""></span></td>
	
	<td><a class="thumb" href="index.php?cert=design4"><img height="100px" width="100px" src="style/designs/design4.jpg" id="design4.jpg"  		alt=""><span><img height="411px" width="617px" src="style/designs/design4.jpg" alt=""></span></td>
  </tr>
</table>


</p>
</div>
</div>
</body>
</html>
