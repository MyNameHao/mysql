<?php
ini_set('display_errors', 'On');
$user='root';
$pwd='root';
$pdo= new PDO('mysql:dbname=1906;host=127.0.0.1',$user,$pwd);
//$id=$_GET['id'];
//echo $id;echo '<br>';
$name=$_GET['name'];
$email=$_GET['email'];
$pwd=$_GET['pwd'];
$sql="insert into users (u_name,u_email,u_pwd) values ('$name','$email','$pwd')";
$res=$pdo->exec($sql);
echo $res;
//$sql="insert into users (u_name,u_email,u_pwd) values (:name,:emial,:pwd)";
//$stmt=$pdo->prepare($sql);
//$stmt->bindParam(':name',$name);
//$stmt->bindParam(':email',$email);
//$stmt->bindParam(':pwd',$pwd);
//
//$stmt->execute();


?>