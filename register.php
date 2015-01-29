<!DOCTYPE html>
<html>
<head>
<title>Sign up for the best food in bloomington</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style1.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="http://www.freshdesignweb.com" target="_blank">Home</a>
                <span class="right">
                    <a href="index.php">
                        <strong>Home</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				
            </header>       
      <div  class="form">
    		<form method="post" action="register.php"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email (username)</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
          		 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 
       
  
             <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
          <?php
     $con=mysql_connect("localhost","root","chinmay") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("customer",$con) or die("Failed to connect to MySQL: " . mysql_error());




 
         // $con=mysqli_connect("localhost","root","chinmay","customer");

    // Check connection
    if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
else
{
   // echo "database connection successful";
function NewUser()
{
   
	   $pass=$_POST['password'];
        $repass=$_POST['repassword'];
        if($pass==$repass)
        {
            $flag=1;
        }
        else
        {
            $flag=0;
        }
        if($flag==1)
        {
        $fullname = $_POST['name'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
        $contact= $_POST['phone'];
	$query = "INSERT INTO customer (Fname,telephone,email,password) VALUES ('$fullname','$contact','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
            echo "<a href='signin.php'>Log in </a>";
	}
        }
        else
        {
            echo "password do not match";
        }
}

function SignUp()
{
if(!empty($_POST['email']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM customer WHERE email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error());
       
	if(!$row = mysql_fetch_array($query))
	{
           
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
   
	SignUp();
}
}
?>



          
          
</div>      
</div>

</body>
</html>
