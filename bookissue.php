

<?php
include 'dbconnection.php';
$sql="select * from addbook";
$result=mysqli_query($con,$sql);
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
<table border="1" align="center" style="background:#666666; color:#FFFFFF; margin-top:50px;">
<tr>
<th colspan="7">Book Issue</th>
</tr>

<td>Book Name</td>
<td><input type="text" name="bookname"  id="bookname"  autocomplete="off"   style="background:#CCCCCC;"/></td>
&nbsp;
<td>Book ID</td>
<td><input type="number" name="bookid"  id="bookid"  autocomplete="off"   style="background:#CCCCCC;"/></td>
&nbsp;
<td>Author</td>
<td>
<select name="author">
<option>Author</option>
<?php
$sql="select * from  addauthor";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{?>
<option value="<?php echo $row['setauthorname'];?>"><?php echo $row['setauthorname'];?></option>
<?php
}
?>
</select>

</td>
<td align="center"><input type="submit" name="check" id="check" value="check" /></td>

</tr>
</table>
</table>
<br>
<?php

if(isset($_POST["check"]))
{
$getbookname=$_POST['bookname'];
$getbookid=$_POST['bookid'];
$getauthor=$_POST['author'];

$sqlser="select * from addbook where setbookname='$getbookname' or setbookid='$getbookid' or setauthor='$getauthor'";
$resultrow=mysqli_query($con,$sqlser);
$countser=mysqli_num_rows($resultrow);
?>

<table border="1" align="center" style="background:#666666; color:#FFFFFF;">
<tr>
<th colspan="10">Book Details</th>
</tr>
<tr>
<td><h5>S.N.</h5></td>
<td><h5>Book Id</h5></td>
<td><h5>Book Type</h5></td>
<td><h5>Book Author</h5></td>
<td><h5>Book Name</h5></td>
<td><h5>Book Price</h5></td>
<td><h5>Book Fine</h5></td>
<td><h5>Rack No</h5></td>
<td><h5>Available</h5></td>


<td><h5>Action</h5></td>
</tr>

<?php
}

if($countser>=1)
{
$i=1;
while($row=mysqli_fetch_array($resultrow))
{
?>
<tr>
<td><h5><?php echo $i;?></h5></td>
<td><h5><?php echo $row['setbookid'];?></h5></td>
<td><h5><?php echo $row['setbook'];?></h5></td>
<td><h5><?php echo $row['setauthor'];?></h5></td>
<td><h5><?php echo $row['setbookname'];?></td>
<td><h5><?php echo $row['setprice'];?></td>
<td><h5><?php echo $row['setfine'];?></td>
<td><h5><?php echo $row['setrackno'];?></h5></td>
<td><h5><?php echo $row['stock'];?></td>



<td><h5><a href="javascript:void();" onClick="window.open('issueBook.php?id=<?php echo $row['setbookid'];?>','popup','width=850,height=270,left=100,top=100');" style="text-decoration:none;">Click for issue book</a></h5></td>
</tr>
<?php


}
?>
</table>
<?php
$i++;
}
else
{
?>
<div style="color:#FF0000; font-weight:bold;" align="center">no found any book</div>
<?php
}




?>




</body>
</html>



