<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
$servername='localhost';
$username='root';
$password='Srijan2001';
$dbname = "db1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$roll_no=$_POST['roll'];
$name=$_POST['name'];
$contact=$_POST['mobile'];
$address=$_POST['address'];
$sql="insert into tab values('".$roll_no."','".$name."','".$contact."','".$address."')";
$conn->query($sql);
header('Location: view.php');
?>

    </body>
</html>
