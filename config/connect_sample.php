<?php
$host='localhost';
$user='root';
$pass='1234';
$dbname= 'mydb';
mysqli_connect($host,$user,$pass,$dbname);
echo "connect success";