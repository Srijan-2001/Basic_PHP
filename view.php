<!DOCTYPE html>
<html>
<head>
<title>Viewing Data from Database</title>
</head>
<body>
<center>
    <h3>Fetching Data Mysql PHP</h3>
<table border=1>
<tr>
<th>Roll No. </th><th>Name </th><th>Contact No. </th><th>Address </th>
</tr>

<?php 
$servername='localhost';
$username='root';
$password='Srijan2001';
$dbname = "db1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$sql="select * from tab";
$res=$conn->query($sql);
while($data=mysqli_fetch_assoc($res)): 
?>

<tr>
<td><?=$data['rollno']; ?></td><td><?=$data['name']; ?></td><td><?=$data['contact']; ?></td><td><?=$data['address']; ?></td>
</tr>

<?php endwhile; ?>
</table>
</center>
</body>
</html>
