<?php
$getdate=date('d/m/Y',time());
?>
<?php
include 'dbconnection.php';
$sql="select * from addstudent";
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

<table border ="1" align="center" style="background:#666666; color:#FFFFFF;  margin-top:100px;" >

<tr>
<th colspan="12" > Student Report</th>
</tr>
<tr>
<td><h5>S.N.</h5></td>
<td><h5>First Name </h5></td>
<td><h5>Middle Name</h5></td>
<td><h5>Last Name</h5></td>
<td><h5>Father's Name</h5></td>
<td><h5>Gender</h5></td>
<td><h5>Branch</h5></td>
<td><h5>Batch </h5></td>
<td><h5>Roll No. </h5></td>
<td><h5>Lib Card No.</h5></td>
<td><h5>Mobile No.</h5></td>
<td><h5>Email</h5></td>
<td><h5>Action</h5></td>

</tr>
<?php
$i=1;
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['setfirstname'];?></td>
<td><?php echo $row['setmiddlename'];?></td>
<td><?php echo $row['setlastname'];?></td>
<td><?php echo $row['setfathername'];?></td>
<td><?php echo $row['setgender'];?></td>
<td><?php echo $row['setbranch'];?></td>
<td><?php echo $row['setbatch'];?></td>
<td><?php echo $row['setrn'];?></td>
<td><?php echo $row['setlibcard'];?></td>
<td><?php echo $row['setmobile'];?></td>
<td><?php echo $row['setemail'];?></td>
<td>
<a href="studentedit.php?id=<?php echo $row['id'];?>">Edit</a>|&nbsp;
<a href="javascript:void();" onClick="Deleteuser('studentdelete.php?id=<?php echo $row['id'];?>');">Delete</a>|&nbsp;
<a href="viewmore.php?id=<?php echo $row['id'];?>">View more</a>
</td>
</tr>
<?php
$i++;
}
?>


</body>
</html>



