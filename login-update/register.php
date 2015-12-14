<?php
/**
 * Register.php
 * 
 * Displays the registration form if the user needs to sign-up,
 * or lets the user know, if he's already logged in, that he
 * can't register another name.
 *
 */
include("include/session.php");
?>

<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<link rel = "stylesheet" type="text/css" href="Form.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Gaming While Intoxicated</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="shows.html">Clan Rules <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../gen_rules.php">General Rules</a></li>
            <li><a href="../new_recruits_rules.php">New Recruits Rules</a></li>
          </ul>
        </li>
        <li><a href="#">Meet the Clan</a>
        <li><a href="main.php">Login Here</a>
      </ul>
    </div>
  </div>
</nav>

<?php
/**
 * The user is already logged in, not allowed to register.
 */
if($session->logged_in){
   echo "<h1>Registered</h1>";
   echo "<p>We're sorry <b>$session->username</b>, but you've already registered. "
       ."<a href=\"main.php\">Main</a>.</p>";
}
/**
 * The user has submitted the registration form and the
 * results have been processed.
 */
else if(isset($_SESSION['regsuccess'])){
   /* Registration was successful */
   if($_SESSION['regsuccess']){
      echo "<h1>Registered!</h1>";
      echo "<p>Thank you <b>".$_SESSION['reguname']."</b>, your information has been added to the database, "
          ."you may now <a href=\"main.php\">log in</a>.</p>";
   }
   /* Registration failed */
   else{
      echo "<h1>Registration Failed</h1>";
      echo "<p>We're sorry, but an error has occurred and your registration for the username <b>".$_SESSION['reguname']."</b>, "
          ."could not be completed.<br>Please try again at a later time.</p>";
   }
   unset($_SESSION['regsuccess']);
   unset($_SESSION['reguname']);
}
/**
 * The user has not filled out the registration form yet.
 * Below is the page with the sign-up form, the names
 * of the input fields are important and should not
 * be changed.
 */
else{
?>
<h1><img src="images/user_add.png" width="32" height="32" alt="Register">Register</h1>
<?php
if($form->num_errors > 0){
   echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
}
?>
<form action="process.php" method="POST">
<table align="left" border="0" cellspacing="0" cellpadding="3">
<tr><td><img src="images/user_info.png" width="42" height="32" alt="Username"></td><td>Username:</td><td><input type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td><?php echo $form->error("user"); ?></td></tr>
<tr><td><img src="images/key.png" width="42" height="32" alt="Password"></td><td>Password:</td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
<tr><td><img src="images/email.png" width="42" height="32" alt="Email"></td><td>Email:</td><td><input type="text" name="email" maxlength="50" value="<?php echo $form->value("email"); ?>"></td><td><?php echo $form->error("email"); ?></td>
</tr>
<tr><td colspan="2" align="right">
<input type="hidden" name="subjoin" value="1">
<input type="submit" value="Register!"></td></tr>
<tr>
  <td colspan="2" align="left"><a href="main.php">Back to Login page</a></td></tr>
</table>
</form>

<?php
}
?>

</body>
</html>
