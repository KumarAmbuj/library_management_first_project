<?php
$getdate=date('d/m/Y',time());
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
</div>

<form action="#" method="post">

<table border="1" align="center" style="background:#666666; color:#FFFFFF; margin-top:40px;">
<tr>
<td colspan="2" align="center" >Search Student</th>
</tr>
<tr>
<td>Roll no.</td>
<td><input type="number" name="rn" id="sch" /></td>
</tr>
<tr>
<td>or Email</td>
<td><input type="email" name="email" id="emailsch" /></td>
</tr>
<tr>
<td>or Mobile No.</td>
<td><input type="number" name="mobile" id="mobilesch" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="search" value="search" id="search" /></td>
</tr>

</table>
</form>
<?php
include 'dbconnection.php';
if(isset($_POST['search']))
{
$getrn=$_POST['rn'];
$getemail=$_POST['email'];
$getmobile=$_POST['mobile'];
$ser="select * from addstudent where setrn='$getrn' or setemail='$getemail' or setmobile='$getmobile'  ";
$result=mysqli_query($con,$ser);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($count==1)
{
?>
<table border="1" align="center" style="background:#666666; color:#FFFFFF; margin-top:10px;">
<tr><th colspan="2" >Student Details</th></tr>
<tr>
<td>First Name</td>
<td><?php echo $row['setfirstname'];?></td></tr>
<tr>
<td>Middle Name</td>
<td><?php echo $row['setmiddlename']?></td></tr>
<tr>
<td>Last Name</td>
<td><?php echo $row['setlastname'];?></td></tr>
<tr>
<td>Father's Name</td>
<td><?php echo $row['setfathername'];?></td></tr>
<tr>
<td>Branch</td>
<td><?php echo $row['setbranch'];?></td></tr>
<tr>
<td>Batch</td>
<td><?php echo $row['setbatch'];?></td></tr>
<tr>
<td>Roll No.</td>
<td><?php echo $row['setrn'];?></td></tr>
<tr>
<td>Lib. Card No.</td>
<td><?php echo $row['setlibcard'];?></td></tr>
<tr>
<td>Mobile No.</td>
<td><?php echo $row['setmobile'];?></td></tr>
<tr>
<td>Email</td>
<td><?php echo $row['setemail'];?></td></tr>
<tr>
<td colspan="2" align="center" ><input type="submit" value="print" onClick="print();" /></td></tr>
</table>
<?php
}
else
{
?>
<div align="center">record not found</div>
<?php
}
}?>


</body>
</html>



