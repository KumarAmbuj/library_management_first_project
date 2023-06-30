<?php
include 'dbconnection.php';
error_reporting(0);
$getid=$_REQUEST['id'];
$ser="select * from addstudent where id='$getid'";
$resultser=mysqli_query($con,$ser);
$row=mysqli_fetch_array($resultser);

if(isset($_POST['edit']))
{
$getfirstname=$_POST['firstname'];
$getmiddlename=$_POST['middlename'];
$getlastname=$_POST['lastname'];
$getfathername=$_POST['fathername'];
$getbranch=$_POST['branch'];
$getbatch=$_POST['batch'];
$getrn=$_POST['rn'];
$getlibcard=$_POST['card'];
$getmobile=$_POST['mobile'];
$getemail=$_POST['email'];

$updt="update addstudent set setfirstname='$getfirstname',setmiddlename='$getmiddlename',setlastname='$getlastname', setfathername='$getfathername', setbranch='$getbranch', setbatch='$getbatch', setrn='$getrn', setlibcard='$getlibcard', setmobile='$getmobile',setemail='$getemail' where id='$getid'";
$result=mysqli_query($con,$updt);
if($result==true)
{
$msg= "student successfully updated";
}
else
{
$msg="student not updated";
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
    background-color: #111;
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
    background-color: red;
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
<div style="margin-top:-40px; margin-left:1100px;">
<h3>Welcome:- Admin</h3>
</div>


<div style=" margin-left:10px; margin-top:10px;">
<?php include 'menu.php';?>
</div>

<form action="#" method="post" enctype="multipart/form-data">
<table border="1" align="center" style="background:#666666; color:#FFFFFF; margin-top:100px;">
 
<tr>
<th colspan="2">Student Edit</th>
</tr>
<tr>
<td>First Name</td>
<td>
<input type="text" name="firstname" value="<?php echo $row['setfirstname'];?>" /></td>
</tr>

<tr>
<td>Middlename</td>
<td><input type="text" name="middlename" value="<?php echo $row['setmiddlename'];?>" /></td></tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="lastname" value="<?php echo $row['setlastname'];?>" /></td></tr>

<tr>
<td>Farher's Name</td>
<td><input type="text" name="fathername" value="<?php echo $row['setfathername'];?>" /></td></tr>
<tr>


<tr>
<td>Branch</td>
<td><input type="text" name="branch" value="<?php echo $row['setbranch'];?>" /></td></tr>
<tr>
<td>Batch</td>
<td><input type="text" name="batch" value="<?php echo $row['setbatch'];?>" /></td></tr>
<td>Roll No.</td>
<td><input type="text" name="rn" value="<?php echo $row['setrn'];?>" /></td></tr>
<tr>
<td>Lib. Card No.</td>
<td><input type="text" name="card" value="<?php echo $row['setlibcard'];?>" /></td></tr>
<td>mobile</td>
<td><input type="number" name="mobile" value="<?php echo $row['setmobile'];?>" /></td></tr>
<td>Email</td>
<td><input type="email" name="email" value="<?php echo $row['setemail'];?>" /></td></tr>
<td colspan="2" align="center">
<input type="submit" name="edit" value="edit" />
</td>
</tr>
</table>
</form>
<div align="center" style="color:#00FF00; font-weight:bold;"><?php echo $msg;?></div>


</body>
</html>



