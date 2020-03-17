<?php
ini_set('display_errors', 'On');
$user='root';
$pwd='root';
$pdo= new PDO('mysql:dbname=1906;host=127.0.0.1',$user,$pwd);
//$id=$_GET['id'];
//echo $id;echo '<br>';
//$sql="insert into users (u_name,u_email,u_pwd) values ('$name','$email','$pwd')";
//$res=$pdo->exec($sql);
//echo $res;
$name=$_GET['name'];
$email=$_GET['email'];
$pwd=$_GET['pwd'];
$sql="insert into users (u_name,u_email,u_pwd) values (?,?,?)";
$stmt=$pdo->prepare($sql);

$stmt->bindParam(1,$name);
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$pwd);
//var_dump($stmt);die;
$stmt->execute();
$res=$pdo->lastInsertId();
echo $res;
?>