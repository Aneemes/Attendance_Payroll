<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>
<style>
    <?php include 'css/index.css'; ?>
</style>
<body class="hold-transition login-page">

      <div class = "login-box">
        <p id="date"></p>
        <p id="time" class="bold"></p>

        <div class="login-box-body">
    	    <h1 class="login-box-msg">Admin Login</h1>

            <div>
                <form action="login.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">


                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password">

            
                <input type="submit" name="login">
            </form>
            </div>
        </div>
        <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>