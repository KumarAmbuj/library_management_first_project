
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>book issue column</title>
</head>

<body>
<?php
$getdate=date('d/m/Y',time());
include 'dbconnection.php';
error_reporting(0);
$getbookid=$_REQUEST['id'];

$check="select * from addbook where setbookid='$getbookid'";
$checkresult=mysqli_query($con,$check);
$row=mysqli_fetch_array($checkresult);


if(isset($_POST['issuebook']))
{
$getsturollno=$_POST['sturoll'];
$getbooktype=$_POST['booktype'];
$getbookid=$_POST['bookid'];
$getbookauthor=$_POST['bookname'];
$getbookname=$_POST['bookname'];
$getreturndate=$_POST['returndate'];

echo $check1="select * from bookissue where bookId='$getbookid' and setrn='$getsturollno'";
$checkresult1=mysqli_query($con,$check1);
$countcheck1=mysqli_num_rows($checkresult1);
$row1=mysqli_fetch_array($checkresult1);
$getstatus=$row1['status'];

if($getstatus=="false")
{

$insert="insert into bookissue(id,setrn,bookType,authorName,bookName,bookId,issuedate1,returndate1,status)values('','$getsturollno','$getbooktype','$getbookauthor','$getbookname','$getbookid','$getdate','$getreturndate','0')";
$result=mysqli_query($con,$insert);
if($insert==true)
{
$msg="Book successfully issued";
}
}
else
{
$msg="This book id : ".$getbookid." already issued!!!!";
}
}
?>
<form action="#" method="post">
<table border="1" align="center" style="background:#8F8F8F;">
<tr>
<th colspan="5">Student Details</th>
</tr>
<tr>
<td>Student Roll :</td>
<td><input type="number" name="sturoll"/></td>&nbsp;
<td>Return Date :</td>
<td><input type="date" name="returndate"/></td>&nbsp;

</tr>
</table>
<br />
<hr />

<table style="border:1px solid #EBEBEB; background:#8F8F8F;" align="center">
<tr>
<th colspan="9">Book Details</th>
</tr>
<tr>
<td>Book Type :</td>
<td><input type="text" name="booktype" readonly style="border:none" value="<?php echo $row['setbook'];?>" /></td>
<td>Book ID :</td>
<td><input type="text" name="bookid" readonly style="border:none" value="<?php echo $row['setbookid'];?>" /></td>
<td>Book Author :</td>
<td><input type="text" name="bookname" readonly style="border:none" value="<?php echo $row['setauthor'];?>" /></td>
</tr>

<tr>
<td>Book Name :</td>
<td><input type="text" name="booktype" readonly style="border:none" value="<?php echo $row['setbookname'];?>" /></td>
<td>Book Price :</td>
<td><input type="text" name="bookid" readonly style="border:none" value="<?php echo $row['setprice'];?>" /></td>
<td>Book Fine :</td>
<td><input type="text" name="bookname" readonly style="border:none" value="<?php echo $row['setfine'];?>" /></td>
</tr>

<tr>
<td>Rack No :</td>
<td><input type="text" name="booktype" readonly style="border:none" value="<?php echo $row['setrackno'];?>" /></td>
<td>Avilable :</td>
<td><input type="text" name="bookid" readonly style="border:none;background:#002800; color:#FFFFFF; font-weight:bold;" value="<?php echo $row['stock'];?>"/></td>

</tr>

<tr>
<td colspan="8" align="center">
<input type="submit" value="Issue Book" name="issuebook" /></td>
</tr>

</table>
<div align="center" style="color:#FF0000; font-weight:bold;"><?php echo @$msg;?></div>
</form>
</body>
</html>
