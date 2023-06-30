<?php
include 'dbconnection.php';
error_reporting(0);
if(isset($_POST["signup"]))
{
$getuser=$_POST['username'];
$getteacherid=$_POST['tid'];
$getmobile=$_POST['mobile'];
$getpassword=$_POST['pass'];




$check="select * from adminsignup where setteacherid='$getteacherid'";
$checkresult=mysqli_query($con,$check);
$countcheck=mysqli_num_rows($checkresult);

$row=mysqli_fetch_array($checkresult);
$getuserrow=$row['setteacherid'];


if($countcheck!=1)
{
$insert="insert into adminsignup(id,setname,setteacherid,setmobile,setpassword)values('','$getuser','$getteacherid','$getmobile','$getpassword')";
$result=mysqli_query($con,$insert);
if($insert==true)
{
$msg="user successfully registered";
}
else
{
$msg="user not registered";
}
}
else
{
$msg=" id: Already Exist";
}
}
?>


<html>
<head>
<style>
body
{
background-image:url("paper-3146955_1920.jpg");
background-attachment:fixed;
left=0px;
background-size:cover;
}
</style>
<script>
 function numbersOnly(e)
{
    var unicode=e.keyCode;
    //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
		{
		alert("Please enter only number....");
		
            return false //disable key press
 }
 }
 
 
 function lettersOnly(evt) 
{
            var charCode = evt.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))

                return true;
            else
			{
			alert("Please enter letters only.");
			
                return false;
}}
function adminSignup()
{

var getusername=document.getElementById("username1").value;

var getpassword=document.getElementById("pass1").value;
var getpassword1=document.getElementById("pass3").value;
var getteacherid=document.getElementById("tid").value;
var getmobile=document.getElementById("mobile").value;



if(getusername=="")
{
alert("please fill name");
username1.focus();
return false;
}
if(getteacherid=="")
{
alert("please enter dob");
dob1.focus();
return false;
}
 
if(getpassword=="")
{
alert("please fill password");
pass1.focus();
return false;
}
if(getpassword1=="")
{
alert("please re-enter password");
pass2.focus();
return false;
}


if(getpassword!=getpassword1)
{
alert("please please enter same password");
pass3.focus();
return false;
}
}
</script>
<style>
table{
background:#666666;
color:#FFFFFF;
}
</style>
<title>signup</title>
</head>
<body>
<a href="firstpage.php"><h3>Back</h3></a>
<div style="margin-top:200px; margin-left:-550px;">
<table border="1" align="center">
<h2 align="center">Admin signup</h2>
<form action="#" method="post" onSubmit="return adminSignup();">

<tr>
<td>Name</td>
<td><input type="text" name="username"  id="username1" placeholder="enter your user name" autocomplete="off"   style="background:#CCCCCC;"/>
</td>
</tr>
<tr>
<td>Teacher Id No.</td>
<td><input type="text" name="tid" id="tid"  autocomplete="off"  style="background:#CCCCCC;" placeholder="enter your Id" />
</td>
</tr>
<tr>
<td>Mobile No.</td>
<td><input type="text" name="mobile" id="mobile"  autocomplete="off"  style="background:#CCCCCC;" placeholder="enter your mobile no." onKeyPress="return numbersOnly(event);" />
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"  id="pass1" placeholder="make password" autocomplete="off"  style="background:#CCCCCC;"/></td>
</tr>
<tr>
<td>confirm password</td>
<td><input type="password"  name="pass2"  id="pass3" autocomplete="off"  style="background:#CCCCCC;" placeholder="re-enter password"/></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="signup" value="signup" id="signup"  />
</td>
</tr>
</form>
</table>
<div align="center" style="color:#FF0000; font-weight:bold;"><?php echo $msg;?></div>
</div>
</body>
</html>