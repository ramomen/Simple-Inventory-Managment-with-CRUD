<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style>
    body{
     background: #2980B9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }
</style>
</head>
<body>
    <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col"></div>
  <div class="mdl-cell mdl-cell--4-col"> 
  <!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('../assets/demos/welcome_card.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
.login-form{
    padding:20px;
}
.main-form{
    margin-top:30%;
}
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp main-form" style="padding:30px;">
    <h2>User Register</h2>
   <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" class="mdl-textfield__input" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email"class="mdl-textfield__input" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password"class="mdl-textfield__input" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" class="mdl-textfield__input"name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit"  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
 
</div>
  </div>
  <div class="mdl-cell mdl-cell--4-col"></div>
</div>
    
    
    
    

 
</body>
</html>



