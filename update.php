<!--PHP code-->
<?php
/*including connection file*/
include("connect.php");
/*Accepting data from previous page*/
$rid=$_REQUEST['rid'];
/*SQL query for select particular record*/
$qry="select * from reg where rid='$rid'";
$sql=mysql_query($qry);
/*Passing record into an array $row*/
$row=mysql_fetch_array($sql);

if(isset($_POST['btn']))
{
 $n=$_POST['txtn'];
 $sn=$_POST['txtsn'];
 $e=$_POST['txte'];
 $c=$_POST['txtc'];
 $cn=$_POST['txtcn'];
 $q=$_POST['txtq'];
 $co=$_POST['txtco'];
 $f=$_POST['txtf'];
 $p=$_POST['txtp'];
 $r=$_POST['txtr'];
 /*Update query */
 $qry="update reg set name='$n',sname='$sn',email='$e',con='$c',cname='$cn',qal='$q',course='$co',fees='$f',paid='$p',remain='$r' where rid='$rid'";
 $sql=mysql_query($qry);
if($sql)
 echo "<script>alert('Data Updated')</script>";
 else
 echo "<script>alert('Data not Updated')</script>";
}
?>
<html>
<head>
<style>
table
{
border-collapse:collapse;
}
BODY
{
background-color:#666633;
}
a
{
color:white;
text-decoration:none;
}
#menu td
{
width:13%;
text-align:center;
background-color:#666699;
color:white;
font-size:20px;
}
#book td
{
width:20%;
}

</style>
</head>
<body>
<!--Header Table-->
<table border="1" width="80%" align="center" height="20%">
<tr>
<td width="10%" bgcolor="#00CCCC">
<img src="image/logo3.jpg" width="150px" height="150px" />
</td>
<td bgcolor="#000000" style="font-size:60px;color:red;font-variant:small-caps;font-family:arial;text-shadow:4px 4px 4px white" align="center">
Student Management System
</td>
</tr>
</table> 
<!--Menubar Table-->
<table border="1" id="menu" width="80%" align="center" height="8%">
<tr>
<td><a href="index.php">HOME</a></td>
<td><a href="reg.php">REGISTRATION</a></td>
<td><a href="view.php">STUDENT RECORD</a></td>
<td><a href="viewdel.php">EDIT</a></td>
</tr>
</table>  

<table border="1" bgcolor="white" width="80%" align="center" height="8%">
<tr>
<td>


<center>
<fieldset style="width:400px;font-size:30px" >
<legend>Registration Form</legend>
<form action="" method="post" oninput="txtr.value=parseInt(txtf.value)-parseInt(txtp.value)" enctype="multipart/form-data">
<table border="0" align="center" width="400px" cellpadding="10" style="color:navy;font-size:20px;">
<tr><td>Name</td><td><input type="text"  name="txtn" value="<?php echo $row['name']; ?>" required/></td></tr>
<tr><td>Surname</td><td><input type="text" name="txtsn" value="<?php echo $row['sname']; ?>" required/></td></tr>
<tr><td>Email</td><td><input type="email" name="txte" value="<?php echo $row['email']; ?>" required/></td></tr>
<tr><td>Contact</td><td><input type="text"  name="txtc" value="<?php echo $row['con']; ?>" required/></td></tr>
<tr><td>College Name</td><td><input type="text"  name="txtcn" value="<?php echo $row['cname']; ?>" required/></td></tr>
<tr><td>Qualification</td><td><input type="text" name="txtq" value="<?php echo $row['qal']; ?>" required/></td></tr>
<tr><td>Course</td><td><input type="text"  name="txtco" value="<?php echo $row['course']; ?>" required/></td></tr>
<tr><td>Fees</td><td><input type="text"  name="txtf" value="<?php echo $row['fees']; ?>" required/></td></tr>
<tr><td>Paid</td><td><input type="text" value="<?php echo $row['paid']; ?>" name="txtp"/></td></tr>
<tr><td>Remaining</td><td><input type="text"  name="txtr" value="<?php echo $row['remain']; ?>" required/></td></tr>
<tr><td></td><td><input type="submit" value="Update" name="btn"/></td>
</tr>
</table>
</form>
</fieldset>
</center>
</td>
</tr>
</table>

</body>
</html>