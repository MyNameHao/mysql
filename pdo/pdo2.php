<?php
ini_set('display_errors', 'On');
$user='root';
$pwd='root';
$pdo= new PDO('mysql:dbname=1906;host=127.0.0.1',$user,$pwd);
//$id=$_GET['id'];
//$id=intval($id);
//$sql= "select * from users where u_id=$id";
$name=$_GET['name'];
//$name=intval($name);
$sql='select * from users where u_name="'.$name.'"';
//echo $sql;die;
$dbh=$pdo->query($sql);

while($row=$dbh->fetchAll(PDO::FETCH_ASSOC)){
    print_r($row);
}




?>