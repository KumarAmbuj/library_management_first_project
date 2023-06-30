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

<form action="#" method="post" >
<table border="1" align="center" style="margin-top:100px;">
<tr>
<td colspan="2" align="center" ><h4>Add Book-Dtail</h4></td>

</tr>


<tr>
<td>Student Roll No.</td>
<td><input type="number" name="rn"  id="rn"  autocomplete="off"   style="background:#CCCCCC;"/>
</td>
</tr>
<tr>
<td>Book Name</td>
<td><input type="text" name="bookname" id="bookname"  autocomplete="off"  style="background:#CCCCCC;" />
</td>
</tr>
<tr>
<td>Book Id</td>
<td><input type="text" name="bookid" id="bookid"  autocomplete="off"  style="background:#CCCCCC;"   />
</td>
</tr>
<tr>
<td>Author Name</td>
<td><input type="text" name="authorname"  id="authorname"  autocomplete="off"  style="background:#CCCCCC;"/></td>
</tr>
<tr>
<td>Book Type</td>
<td><input type="text"  name="booktype"  id="booktype" autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Issue Date</td>
<td><input type="issuedate"  name="issuedate"  id="price" autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Return Date</td>
<td><input type="text"  name="returndate"  id="returndate" autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr>
<td>Fine</td>
<td><input type="fine"  name="fine1"  id="fine" autocomplete="off"  style="background:#CCCCCC;" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="submit" id="submit"  />
</td>
</tr>

</table>
</form>

</body>
</html>



