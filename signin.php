<?php
$con=mysqli_connect("148.72.232.176:3306","login_and_signup","Abhi84200@1","dball");
if($con)
{
	echo "";
}
else
{
	echo "Server Error !! Go Back\n";
}
  
    $email = $_POST['email'];  
    $password = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email= mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from usertable where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location: notes1.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1><br><br> Go back and Login again.";  
             
            
		}     
		
//////////////////////////// forget password code starts  /////////////////////////////////////////////

	
?>  