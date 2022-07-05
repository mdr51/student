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

<!--Menubar table-->
<table border="1" id="menu" width="80%" align="center" height="8%">
<tr>
<td><a href="index.php">HOME</a></td>
<td><a href="reg.php">REGISTRATION</a></td>
<td><a href="view.php">STUDENT RECORD</a></td>
<td><a href="viewdel.php">EDIT</a></td>
</tr>
</table>   
<!--Display record table-->
<table border="1" bgcolor="white" width="80%" align="center" height="8%">
<tr>
<td valign="top">

<table border="1" align="center" width="100%" cellpadding="10" style="color:navy;font-size:20px;">
<tr style="background-color:#003366;color:white">
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Contact</td>
<td>College Name</td>
<td>Qualification</td>
<td>Course</td>
<td>Fees</td>
<td>Paid</td>
<td>Remaining</td>
</tr>
<?php
/*including connection file*/
include("connect.php");
$qry="select * from reg";
$sql=mysql_query($qry);
/*Accessing all record from database using loop*/
while($row=mysql_fetch_array($sql))
{
/*Filling data into cells*/
?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['con']; ?></td>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['qal']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['fees']; ?></td>
<td><?php echo $row['paid']; ?></td>
<td><?php echo $row['remain']; ?></td>

</tr>
<?php
}
?>
</table>
</td>
</tr>
</table>
</body>
</html>