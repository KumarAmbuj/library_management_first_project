<?php
session_start();
$getsession=$_SESSION['setsession'];
if($getsession=="")
{
header("location:firstpage.php");
}
?>




<?php
$getdate=date('d/m/Y',time());
?>

<?php
include 'dbconnection.php';
error_reporting(0);
if(isset($_POST["add"]))
{
$getfirstname=$_POST['firstname'];
$getmiddlename=$_POST['middlename'];
$getlastname=$_POST['lastname'];
$getfathername=$_POST['fathername'];
$getgender=$_POST['gender'];
$getbranch=$_POST['branch'];
$getbatch=$_POST['batch'];
$getrn=$_POST['rn'];
$getlibcard=$_POST['card'];
$getmobile=$_POST['mobile'];
$getemail=$_POST['email'];




$check="select * from addstudent where setrn='$getrn'";
$checkresult=mysqli_query($con,$check);
$countcheck=mysqli_num_rows($checkresult);

$row=mysqli_fetch_array($checkresult);
$getuserrow=$row['setrn'];


if($countcheck!=1)
{

 $insert="insert into addstudent(id,setfirstname,setmiddlename,setlastname,setfathername,setgender,setbranch,setbatch,setrn,setlibcard,setmobile,setemail)values('','$getfirstname','$getmiddlename','$getlastname','$getfathername','$getgender','$getbranch','$getbatch','$getrn','$getlibcard','$getmobile','$getemail')";
$result=mysqli_query($con,$insert);
if($insert==true)
{
$msg="student successfully added";
}
else
{
$msg="student not added";
}
}
else
{
$msg=$getrn."  Already Exist";
}
}
?>


<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li a:hover:not(.active) {
    background-color:#00FFFF;
}

.active {
    background-color: #4CAF50;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:#00FF00;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

body
{
background-image:url("books-library-students-12064.jpg");
background-attachment:fixed;
left=0px;
background-size:cover;
}
</style>
<title>home</title>
</head>
<body >

<div style="margin-top:10px; margin-left:500px;"><h1>LIBRARY SYSTEM</h1></div>
<div style="margin-top:-70px; margin-left:1100px;">
<h3>Welcome:- Admin</h3>

<?php echo $getdate;?>
</div>


<div style=" margin-left:10px; margin-top:10px;">

<?php include 'menu.php';?>
<form action="#" method="post" >
<table border="1" align="center" style="background:#666666; color:#FFFFFF; margin-top:40px;">
<tr>
<td colspan="2" align="center">
<h2 align="center">Add Student </h2></td>
</tr>

<tr>
<td>First Name</td>
<td><input type="text" name="firstname"  id="firstname" autocomplete="off"   style="background:#CCCCCC;"/>
</td>
</tr>
<tr>
<td>Middle Name</td>
<td><input type="text" name="middlename" id="middle"  autocomplete="off"  style="background:#CCCCCC;"  />
</td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="lastname" id="lastname" autocomplete="off" style="background:#CCCCCC;"  />
</td></tr>
<tr>
<td>Father's Name</td>
<td><input type="text" name="fathername"  id="fathername"  autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr >
<td class="tr">Gender</td>
<td class="tr">Male
<input type="radio" name="gender" id="gender1" value="male" />Female<input type ="radio" name="gender" id="gender1" value="female"  />

</td>
</tr>
<tr>
<td>Branch</td>
<td><input type="text" name="branch"  id="branch"  autocomplete="off"  style="background:#CCCCCC;"/></td>
</tr>
<tr>
<td>Batch</td>
<td><input type="text"  name="batch"  id="batch" autocomplete="off"  style=" background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Roll No.</td>
<td><input type="text"  name="rn"  id="rn" autocomplete="off"  style=" background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Lib. Card No.</td>
<td><input type="text"  name="card"  id="card" autocomplete="off"  style=" background:#CCCCCC;" /></td>
</tr>
<td>Mobile No.</td>
<td><input type="number"  name="mobile"  id="mobile" autocomplete="off"  style=" background:#CCCCCC;" /></td>
</tr>
<td>Email</td>
<td><input type="email"  name="email"  id="email" autocomplete="off"  style=" background:#CCCCCC;" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="add" value="add" id="add"  />
</td>
</tr>
</table>
</form>
<div align="center" style="color:#FF0000; font-weight:bold;"><?php echo $msg;?></div>
</body>
</html>



