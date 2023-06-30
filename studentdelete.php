<?php
include 'dbconnection.php';
$getid=$_REQUEST['id'];
$del="delete from addstudent where id='$getid'";
$result=mysqli_query($con,$del);
if($result==true)
{
?>
<script>
alert("Student successfully deleted");
location.replace("studentreport.php");
</script>
<?php
}
?>
