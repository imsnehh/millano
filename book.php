<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$connection=mysqli_connect("localhost","root","","msan_db");
$a=$_REQUEST['uname'];
$b=$_REQUEST['emailid'];
$c=$_REQUEST['date'];
$d=$_REQUEST['choose'];
$e=$_REQUEST['massege'];
$s1="INSERT INTO booking(uname,emailid,date,choose,massege)values('$a','$b','$c','$d','$e')";
if(mysqli_query($connection,$s1))
echo "inserted";
else echo mysqli_error($connection);
echo "submitted";
?>
</body>
</html>



