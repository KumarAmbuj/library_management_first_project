<?php
include 'dbconnection.php';
if(isset($_POST['login']))
{
$getstudentid=$_POST['studentid'];
$getpass=$_POST['pass'];
$sql="select * from studentsignup where setrn='$getstudentid' and setpassword='$getpass'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{

header("location:studenthome.php");
}
else
{
echo  'user and password invalid';
}}

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
table
{
background:#666666;
color:#FFFFFF;
}
</style>
<script>
 function lettersOnly(evt) 
{
            var charCode = evt.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))

                return true;
            else
			alert("Please enter letters only.");
			
                return false;
}

function studentlogin()
{
var getstudentid=document.getElementById("studentid").value;
var getpass=document.getElementById("pass1").value;
if(getstudentid=="")
{
alert("please enter your id");
studentid.focus();
return false;
}
if(getpass=="")
{
alert("please enter password");
pass1.focus();
return false;
}}

</script>
<title>login</title>
<style>
table, th, td {
    border: 1px solid black;
}
h2{
align="center";
}
</style>
</head>
<body>
<a href="firstpage.php"><h3>Back</h3></a>
<div style="margin-top:200px; margin-left:400px;">

<form action="#" method="post" onSubmit="return studentlogin();">

<table border="1" align="center">

<h2 align="center">Student login</h2>
<tr>
<td>Student Id</td>
<td>
<input type="text" name="studentid" id="studentid"   autocomplete="off" placeholder="enter user name" style="background:#CCCCCC;" />
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" id="pass1"  autocomplete="off" placeholder="enter password" style="background:#CCCCCC;"  /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="login" id="login" />
</td>
</tr>
</table>
</form>
</div>
</body>
</html>