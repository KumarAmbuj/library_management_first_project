<?php
session_start();
$getsession=$_SESSION['setsession'];
if($getsession=="")
{
header("location:firstpage.php");
}
?>



<?php
include 'dbconnection.php';
error_reporting(0);
if(isset($_POST["add"]))
{
$getbook=$_POST['book'];
$getbookname=$_POST['bookname'];
$getbookid=$_POST['bookid'];
$getauthor=$_POST['author'];

$getrackno=$_POST['rackno'];
$getprice=$_POST['price'];
$getfine=$_POST['fine'];
$getdate=$_POST['date1'];




$check="select * from addbook where setbookid='$getbookid'";
$checkresult=mysqli_query($con,$check);
$countcheck=mysqli_num_rows($checkresult);

$row=mysqli_fetch_array($checkresult);
$getuserrow=$row['setbookid'];


if($countcheck!=1)
{
$insert="insert into addbook(id,setbook,setbookname,setbookid,setauthor,setrackno,setprice,setfine,setdate)values('','$getbook','$getbookname','$getbookid','$getauthor','$getrackno','$getprice','$getfine','$getdate')";
$result=mysqli_query($con,$insert);
if($insert==true)
{
$msg="book successfully added";
}
else
{
$msg="book not added";
}
}
else
{
$msg="book id: Already Exist";
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
table{
background:#666666;
color:#FFFFFF;
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
<form action="#" method="post" >
<table border="1" align="center" style="margin-top:100px;">
<tr>
<td colspan="2" align="center" ><h4>Add Book-Dtail</h4></td>

</tr>


<tr>
<td>Book</td>
<td><input type="text" name="book"  id="book" placeholder="enter book" autocomplete="off"   style="background:#CCCCCC;"/>
</td>
</tr>
<tr>
<td>Book Name</td>
<td><input type="text" name="bookname" id="bookname"  autocomplete="off"  style="background:#CCCCCC;" placeholder="enter book name " />
</td>
</tr>
<tr>
<td>Book Id</td>
<td><input type="text" name="bookid" id="bookid"  autocomplete="off"  style="background:#CCCCCC;" placeholder="enter bookid"  />
</td>
</tr>
<tr>
<td>Author Name</td>
<td><input type="text" name="author"  id="author" placeholder="enter author name" autocomplete="off"  style="background:#CCCCCC;"/></td>
</tr>
<tr>
<td>Rack no.</td>
<td><input type="text"  name="rackno"  id="rackno" autocomplete="off"  style="background:#CCCCCC;" placeholder="enter Rack no"/></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text"  name="price"  id="price" autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Fine</td>
<td><input type="text"  name="fine"  id="fine" autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date"  name="date1"  id="date1" autocomplete="off"  style="background:#CCCCCC;" /></td>
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



