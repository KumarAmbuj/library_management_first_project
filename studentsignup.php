<?php
include 'dbconnection.php';
error_reporting(0);
if(isset($_POST["signup"]))
{
$getuser=$_POST['username'];
$getbranch=$_POST['branch'];
$getrn=$_POST['rn'];
$getmobile=$_POST['mobile'];
$getpassword=$_POST['pass'];




$check="select * from studentsignup where setrn='$getrn'";
$checkresult=mysqli_query($con,$check);
$countcheck=mysqli_num_rows($checkresult);

$row=mysqli_fetch_array($checkresult);
$getuserrow=$row['setrn'];


if($countcheck!=1)
{
$insert="insert into studentsignup(id,setname,setbranch,setrn,setmobile,setpassword)values('','$getuser','$getbranch','$getrn','$getmobile','$getpassword')";
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
function studentSignup()
{

var getusername=document.getElementById("username1").value;
var getbranch=document.getElementById("branch").value;
var getrn=document.getElementById("rn").value;
var getmobile=document.getElementById("mobile").value;
var getpassword=document.getElementById("pass1").value;
var getpassword1=document.getElementById("pass3").value;


if(getusername=="")
{
alert("please fill name");
username1.focus();
return false;
}
if(getbranch=="")
{
alert("please enter your class/branch");
branch.focus();
return false;
}
if(getrn=="")
{
alert("please enter your rollno.");
rn.focus();
return false;
}
if(getmobile=="")
{
alert("please fill mobile no.");
mobile.focus();
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
pass3.focus();
return false;
}


if(getpassword!=getpassword1)
{
alert("please  enter same password");
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
<div style="margin-top:200px; margin-left:400px;">
<form action="#" method="post" onSubmit="return studentSignup();">
<table border="1" align="center">
<h2 align="center">Student signup</h2>


<tr>
<td>Name</td>
<td><input type="text" name="username"  id="username1" placeholder="enter your  name" autocomplete="off"   style="background:#CCCCCC;"/>
</td>
</tr>
<tr>
<td>Class/Branch</td>
<td><input type="text" name="branch" id="branch"  autocomplete="off"  style="background:#CCCCCC;" placeholder="enter your class/branch" />
</td>
</tr>
<tr>
<td>Class/Univ Roll No.</td>
<td><input type="number" name="rn" id="rn" autocomplete="off" style="background:#CCCCCC;" placeholder="enter your roll no." />
</td></tr>
<tr>
<td>Mobile No.</td>
<td><input type="text" name="mobile"  id="mobile" placeholder="enter mobile no." autocomplete="off"  style="background:#CCCCCC;" onKeyPress="return numbersOnly(event);"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"  id="pass1" placeholder="make password" autocomplete="off"  style="background:#CCCCCC;"/></td>
</tr>
<tr>
<td>confirm password</td>
<td><input type="password"  name="pass2"  id="pass3" autocomplete="off"  style=" background:#CCCCCC;" placeholder="re-enter password"/></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="signup" value="signup" id="signup"  />
</td>
</tr>

</table>
</form>
<div align="center" style="color:#FF0000; font-weight:bold;"><?php echo $msg;?></div>
</div>
</body>
</html>