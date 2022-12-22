<?php

$insert=false;
if(isset($_POST['register'])){

$server="localhost";
$username="root";
$password="";
$db="cowin";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to" .mysqli_connect_error());
}
echo "Success connecting to the database";

mysqli_select_db($con,$db);


$fullname =$_POST['fullname'];
$mobile =$_POST['mobile'];
$aadharno =$_POST['aadharno'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$dob =$_POST['dob'];
$city =$_POST['city'];
$date =$_POST['date'];
$location =$_POST['location'];
$time =$_POST['time'];




$data= "INSERT INTO cowin(fullname, mobile, aadharno, email, gender, dob, city, date, location, time) VALUES ('$fullname','$mobile','$aadharno','$email','$gender','$dob','$city','$date','$location','$time')";


//echo $data;
if($con->query($data)== true){
    //echo "Successfully inserted";
    $insert=true;
    header("Location:registered.php");
  exit;  
}


else{
    echo "ERROR: ".$data."<br>". $con->error;
}

$con->close();

}



?>










<!DOCTYPE html>
<html>
<head>
	<title>COwination</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poller one:wght@300&display=swap" rel="stylesheet">
  

  <style>

body{
  overflow-x: hidden;
}

 nav span {
margin: 0px 100px;
color:white;
}

.navbar-brand{
  margin-left: 50px;
  font-family: poller one;
  font-size: 40px;
  color: black;
  
}
span img{
  size: 10px;
}
  button{
  margin-right: 60px;
}

.form-submit-button {

background:green;

color: #fff;

border: 1px solid #eee;

border-radius: 5px;

box-shadow: 5px 5px 5px #eee;

text-shadow:none;

}

.form-submit-button:hover {

background: #016ABC;

color: #fff;

border: 1px solid #eee;

border-radius: 5px;

box-shadow: 5px 5px 5px #eee;

text-shadow:none;

}
.main {
        text-align:center;
    }
    .marq {
        padding-top:2px;
        padding-bottom:2px;
    }
    .geek2 {
        font-size:20px;
        font-weight:bold;
        color:black
        padding-bottom:2px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">
<span> &nbsp;&nbsp;&nbsp;Ministry of Health and Family Welfare</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COwination@.org.ac.in  </span>
</nav>
<nav class="navbar navbar-light bg-light" style="height: 100px;">
<a class="navbar-brand" href="#">C<i class="fa fa-plus-circle" aria-hidden="true"></i>wination<br><h5>Let's win the nation back through vaccination.</h5></a><button class="btn btn-primary" data-toggle="modal" data-target="#remo">REGISTER HERE</button>
	
  <!-- Navbar content -->
</nav>

<center><img src="banner.jpg"></center><br>

<div class="w3-container w3-dark-grey" style="padding:50px 80px"> 
<div class="container">
  <div class="row" >
    
    <div class="col-md-6">
    	<br><br><br>
    <img src="injection.jpg" width="500" height="300">

    </div>
     <div class="col-md-6">
<br><br>
<h1 style="text-align:center;color:red">LET'S GET VACCINATED!</h1><br>

    <p><b>The COVID-19 vaccines produce protection against the disease, as a result of developing an immune response to the SARS-Cov-2 virus.  Developing immunity through vaccination means there is a reduced risk of developing the  illness and its consequences. This immunity helps you fight the virus if exposed. Getting vaccinated may also protect people around you, because if you are protected from getting infected and from disease, you are less likely to infect someone else. This is particularly important to protect people at increased risk for severe illness from COVID-19, such as healthcare providers, older or elderly adults, and people with other medical conditions.</b></p>

    </div>
    </div>
    
  </div>

  

  <br><br><br>
   <div class = "main">
    <marquee class="marq" bgcolor = "pink" direction = "left" loop="" >
       <div class="geek1">  </div>
        <div class="geek2">Let's win the nation back through vaccination.</div>
    </marquee>
<br><br><br>


<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p style="color: grey">Copyright &copy; R Developers. All rights reserved!</p>
        
        </div>
      </div>
    </div>
<br><br><br>
    
  </footer>
</div>







            

<div class="modal" id="remo">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

			<h5>Registration Form</h5>
<button class="close" data-dismiss="modal"> &times; </button>

			</div>
			<div class="modal-body">
				
				<form action="index.php" method="post">
 FullName- <input type="text" name="fullname" placeholder="Enter your name" class="form-control" required> <br>
 Mobile No. - <input type="number" name="mobile" placeholder="Enter mobile number" class="form-control" required> <br>
 Aadhar/Pan card no. - <input type="number" name="aadharno" placeholder="Enter number" class="form-control" required> <br>
 Email id - <input type="email" name="email" placeholder="Enter email" class="form-control" required> <br>
 Gender - <input type="radio" name="gender" value="male" required> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other<br><br>
Date of Birth - <input type="Date" name="dob" placeholder="Enter Date of Birth" class="form-control" required> <br>
 City - <input type="text" name="city" placeholder="Enter your city" class="form-control" required> <br>

 <h5>Confirm your Vaccination Slot</h5>
 Date - <input type="Date" name="date" placeholder="Enter Date" class="form-control" required> <br>
  Location - <input type="text" name="location" list="Vaccination center" class="form-control">                                      
 <datalist id="Vaccination center">
 <option value="City Hospital,Akola">
  <option value="City Hospital,Amravati">
<option value="City Hospital,Buldhana">
  <option value="City Hospital,Chandrapur">
<option value="City Hospital,Yavatmal">
  <option value="City Hospital,Washim">
  	<option value="City Hospital,Aurangabad">
  	<option value="City Hospital,Beed">
  	<option value="City Hospital,Jalna">
    <option value="City Hospital,Osmanabad">
    <option value="City Hospital,Nanded">
    	<option value="City Hospital,Latur">
         <option value="City Hospital,Parbhani">
         <option value="City Hospital,Hingoli">
           <option value="City Hospital,Mumbai city">
           <option value="City Hospital,Mumbai suburban">   
           <option value="City Hospital,Thane">
           <option value="City Hospital,Palghar">
           <option value="City Hospital,Raigad">
           <option value="City Hospital,Ratnagiri">
           <option value="City Hospital,Sindhudurg">
           <option value="City Hospital,Bhandara">
           <option value="City Hospital,Gadchiroli">
           <option value="City Hospital,Gondia">
           <option value="City Hospital,Nagpur">
           <option value="City Hospital,Wardha">
           <option value="City Hospital,Dhule">
           	<option value="City Hospital,Jalgaon">
           <option value="City Hospital,Nandurbar">
           	<option value="City Hospital,Nashik">
           	<option value="City Hospital,Ahmednagar">
           	<option value="City Hospital,Kolhapur">
        	<option value="City Hospital,Pune">
         	<option value="City Hospital,Sangli">
         <option value="City Hospital,Satara">
           	<option value="City Hospital,Solapur">
            </datalist> <br>
   Time- 
   <br><input type="radio" name="time" value="morning" required> 8 AM to 10 AM<br>
<input type="radio" name="time" value="Afternoon"> 1 PM to 3 PM<br>
<input type="radio" name="time" value="Evening"> 6 PM to 8 PM<br><br>
<br>
                                                                             
					
<button class="form-submit-button" name="register">Register</button>

				</form>
                                                </div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

</body>
</html>