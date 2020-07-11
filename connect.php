<?php 
session_start();     
    $host = 'sql111.epizy.com';  
    $user = 'epiz_26235835';  
    $password = 'nIg0oQqLz4V4';
   
    $db_name = 'epiz_26235835_XXX';  
    $con = mysqli_connect($host, $user, $password, $db_name);   
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
      
      
        $sql = "select * from student where username = '$username' and password = '$password'";  
        $result = mysqli_query($con,$sql);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
		{  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
		         echo "<h1><center> Invalid username or password.</center></h1>";
         
			header('location:index.html');
        }   

?>  

<html>
<head>
<style>
h1{
color:white;
}
p{
	background-color=#fff;
}
body
{
background-image: url(https://image.freepik.com/free-photo/blue-gradient-abstract-background-empty-room_1258-4436.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>

<h1>STUDENT PROFILE PAGE</h1>

<marquee behavior="scroll" direction="left"  scrollamount="10"><p style="color:white;">LOTS OF PEOPLE THINK THEY DESERVE SUCESS AS SOME SORT OF A RIGHT. BUT HERE'S THE TRUTH...
SUCCESS IS SOMETHING YOU NEED TO EARN THROUGH EFFORT.</p></marquee>

 
<?php
     $con=mysqli_connect('sql111.epizy.com','epiz_26235835','nIg0oQqLz4V4');
    $db_name = "epiz_26235835_XXX"; 
	$sql = "select *from student where username = '$username'";  
	$result = mysqli_query($con, $sql);
	$finalres= mysqli_fetch_row($result);
	echo "<br>";
	echo "<br>";
	echo "<br> NAME : ". $finalres[2];
	echo "<br>";
	echo "<br> ROLL NUM : ". $finalres[3];
	echo "<br>";
	echo "<br> DEPARTMENT : ". $finalres[4];
	echo "<br>";
	echo "<br> PERCENTAGE : ". $finalres[5];
	echo "<br>";
	echo "<br> MOBILE NUMBER: ". $finalres[6];
	echo "<br>";
	echo "<br> ADDRESS : ". $finalres[7];
	echo "<br>";
	

?>
<br>
<br>
<form action="index.html">
    <input type="submit" value="Logout!" />
</form>
</body>
</html>


