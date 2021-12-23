<?php 

session_start();
	include("connection.php");

include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	//post
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
    //check not empty and not num 
	    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

	//saving
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);
			header("Location: login.php");
            
			die;
		} else
		{
			echo "Please enter some valid information!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<title> Signup </title>

</head>
<body>


	<style type="text/css" >
	
	#text{
    color: white;
		height: 30px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{

		background-color: white;
		margin: auto;
		width: 900px;
		padding: 80px;
	}

	</style>

	<div id="box" style="text-align:center;width: 300px;margin: 0 auto;border-style: dotted;">
		
		<form method="post">
			<div style="font-size: 30px;margin: 20px;color: black;">Join us *.*  </div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>