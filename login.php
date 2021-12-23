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

	//reaad from db
			$query = "select * from users where user_name= '$user_name' limit 1";

		$result = 	mysqli_query($con, $query);
		if($result)
    {
      if ($result && mysqli_num_rows($result)>0)
      {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['password']===$password)
        {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
        }
       }	
    
            
       echo "wrong username or pass!";
		} else
		{
			echo "wrong username or pass!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>

<title font color="green">  
 Login </title>

</head>
<body style= "background-image:url(bg.jpg)">


	<style type="text/css">
	
	#text{
    color: black;
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

		background-color: transparent;
		margin: auto;
		width: 900px;
		padding: 80px;
	}

	</style>

	<div id="box" style="text-align:center;width: 300px;margin: 0 auto;border-style: dotted;">
		
		<form method="post">
			<div style="font-size: 30px;margin: 20px;color: black;">your fav inspiration .. </div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>