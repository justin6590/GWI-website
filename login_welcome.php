<!doctype html>
<html>
<head>
  <title>Bootstrap Case</title>
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
            <li><a href="gen_rules.php">General Rules</a></li>
            <li><a href="new_recruits_rules.php">New Recruits Rules</a></li>
          </ul>
        </li>
        <li><a href="#">Meet the Clan</a>
        <li><a href="register.php">Register Here</a>
      </ul>
    </div>
  </div>
</nav>

<p><center>Thank you for registering for Gaming While Intoxicated, please add the following members to your friends list, justin6590, AlabamaReaper, BigColt345. Thank you for joining and lets kick some ass. Please log in below </center><br /> </p>

    <h1>Login In Here</h1>
      <form action="" method="POST">
       <table>
        <tr>
         <td>UserName :</td> <td><input type="text" name="username"></td><br>
        </tr>
        <tr>
         <td>Password :</td> <td><input type="password" name="password"><br>
        </tr>
        <tr>
         <td><input type="submit" value="Login" name="submit"></td>
        </tr>
       </table>
   	  </form>
<?php
if(isset($_POST["submit"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$con=mysql_connect('localhost','root','Janyga0440') or die(mysql_error());
		mysql_select_db('gamingwhileintoxicated') or die("cannot select DB");

		$query=mysql_query("SELECT * FROM login WHERE username='".$username."' AND password='".$password."'");
		$numrows=mysql_num_rows($query);
		if($numrows!=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
			}

		if($username == $dbusername && $password == $dbpassword)
		{
			session_start();
			$_SESSION['sess_user']=$username;

			/* Redirect browser */
			header("Location: index.php");
		}
		} else {
			echo "Invalid username or password!";
		}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>