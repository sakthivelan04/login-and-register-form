<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="website icon" type="jpg" href="image/cathy-pham-3jAN9InapQI-unsplash.jpg">
    
</head>
<body>
    <audio  autoplay controls loop hidden src="abstract-future-bass-162604.mp3"  ></audio>
   
   
    <div class="main">
        <div class="navbar">

            <div class="icon">
                <h2 class="logo">UPA</h2>
            </div>
            <div class="menu">
            
                <ul>
                    <!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
		<div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="servce.html">SERVCE</a></li>
                    <li><a href="call.html">CONTACT</a></li>
					<li>Welcome <strong><?php echo $_SESSION['username']; ?></strong></li>
					<li><button class="m"><a href="index.php?logout='1'" style="color: black;">logout</a> </button>
			</li></ul>
            </div>
    	
    <?php endif ?>
</div>
                </ul>
            </div>
            <div class="con">
			<h1>pencil  <span>sketch</span></h1>
			<br>
            <p class="pa">pencil drawing, drawing executed with an instrument composed of graphite enclosed in 
				a wood casing and intended either as a sketch for a more elaborate work in another medium, an exercise in visual expression, or a finished work.</p>
                <button class="n"><a href="#">JOIN US</a></button>
            </div>
        </div>
        
            
               
        
    <div>
	
       
    </div>
        
        

    </div>

    <footer class="footer">
        <p>&copy; 2024 Unique Pencil Art All rights.</p>
    </footer>   
  
</body>
</html>
