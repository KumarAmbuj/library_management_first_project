<?php
include 'dbconnection.php';
$getid=$_REQUEST['id'];
$del="delete from addbook where id='$getid'";
$result=mysqli_query($con,$del);
if($result==true)
{
?>
<script>
alert("book successfully deleted");
location.replace("bookreport.php");
</script>
<?php
}
?>