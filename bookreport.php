<?php
include 'dbconnection.php';
$sql="select * from addbook";
$result=mysqli_query($con,$sql);
?>





<html>
<head>

<script>
function Deleteuser(url)
{
var getconf=confirm("Are you sure you want to delete this record ?");
if(getconf==true)
{
location.replace(url);
}}
</script>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li a:hover:not(.active) {
    background-color: #00FFFF;
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

<table border ="1" align="center" style="background:#666666; color:#FFFFFF;  margin-top:100px;" >

<tr>
<th colspan="10" > Book Detail Report</th>
</tr>
<tr>
<td><h5>S.N.</h5></td>
<td><h5>Book </h5></td>
<td><h5>Book Name</h5></td>
<td><h5>Book Id</h5></td>
<td><h5>Author</h5></td>
<td><h5>Rack No.</h5></td>
<td><h5>Price </h5></td>
<td><h5>Fine</h5></td>
<td><h5>Date</h5></td>
<td><h5>Action</h5></td>

</tr>
<?php
$i=1;
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['setbook'];?></td>
<td><?php echo $row['setbookname'];?></td>
<td><?php echo $row['setbookid'];?></td>
<td><?php echo $row['setauthor'];?></td>
<td><?php echo $row['setrackno'];?></td>
<td><?php echo $row['setprice'];?></td>
<td><?php echo $row['setfine'];?></td>
<td><?php echo $row['setdate'];?></td>
<td>
<a href="bookedit.php?id=<?php echo $row['id'];?>">Edit</a>|&nbsp;
<a href="javascript:void();" onClick="Deleteuser('bookdelete.php?id=<?php echo $row['id'];?>');">Delete</a>|&nbsp;
<a href="viewmore.php?id=<?php echo $row['id'];?>">View more</a>
</td>
</tr>
<?php
$i++;
}
?>
</body>
</html>



