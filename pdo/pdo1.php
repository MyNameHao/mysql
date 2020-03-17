<?php
ini_set('display_errors', 'On');
$user='root';
$pwd='root';
$pdo= new PDO('mysql:dbname=1906;host=127.0.0.1',$user,$pwd);

$sql= "select * from users";

$dbh=$pdo->query($sql);

while($row=$dbh->fetchAll(PDO::FETCH_ASSOC)){
    print_r($row);
}




?>