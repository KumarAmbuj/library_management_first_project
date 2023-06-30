<?php
include 'dbconnection.php';
error_reporting(0);
$getid=$_REQUEST['id'];
$ser="select * from addbook where id='$getid'";
$resultser=mysqli_query($con,$ser);
$row=mysqli_fetch_array($resultser);

if(isset($_POST['edit']))
{
$getbook=$_POST['book'];
$getbookname=$_POST['bookname'];
$getbookid=$_POST['bookid'];
$getauthor=$_POST['author'];
$getrackno=$_POST['rackno'];
$getprice=$_POST['price'];
$getfine=$_POST['fine'];
$getdate=$_POST['date1'];

$updt="update addbook set setbook='$getbook',setbookname='$getbookname', setbookid='$getbookid', setauthor='$getauthor', setrackno='$getrackno', setprice='$getprice', setfine='$getfine', setdate='$getdate' where id='$getid'";
$result=mysqli_query($con,$updt);
if($result==true)
{
$msg= "book successfully updated";
}
else
{
$msg="book not updated";
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
<th colspan="2">Book details</th>
</tr>
<tr>
<td>Book</td>
<td>
<input type="text" name="book" value="<?php echo $row['setbook'];?>" /></td>
</tr>

<tr>
<td>Book Name</td>
<td><input type="text" name="bookname" value="<?php echo $row['setbookname'];?>" /></td></tr>
<tr>
<td>Book Id</td>
<td><input type="text" name="bookid" value="<?php echo $row['setbookid'];?>" /></td></tr>

<tr>
<td>Author</td>
<td><input type="text" name="author" value="<?php echo $row['setauthor'];?>" /></td></tr>

<tr>
<td>Rack No.</td>
<td><input type="text" name="rackno" value="<?php echo $row['setrackno'];?>" /></td></tr>
<tr>
<td>Price.</td>
<td><input type="text" name="price" value="<?php echo $row['setprice'];?>" /></td></tr>
<tr>
<td>Fine</td>
<td><input type="text" name="fine" value="<?php echo $row['setfine'];?>" /></td></tr>
<td>Date</td>
<td><input type="date" name="date1" value="<?php echo $row['setdate'];?>" /></td></tr>

<td colspan="2" align="center">
<input type="submit" name="edit" value="edit" />
</td>
</tr>
</table>
</form>
<div align="center" style="color:#00FF00; font-weight:bold;"><?php echo $msg;?></div>


</body>
</html>



