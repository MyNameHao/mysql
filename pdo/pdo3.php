<?php
ini_set('display_errors', 'On');
$user='root';
$pwd='root';
$pdo= new PDO('mysql:dbname=1906;host=127.0.0.1',$user,$pwd);
$id=$_GET['id'];
echo $id;echo '<br>';
//$sql="";
$stmt=$pdo->prepare('select * from users where u_id=:id');
$stmt->bindParam(':id',$id);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    print_r($row);
}

?>