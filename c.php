<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผล</title>
</head>
<body>
    
</body>
</html>

<?php

if(
    $_POST['submit']

){
$name1 =$_POST['h'];
$name2 =$_POST['g'];
$name3 =$_POST['f'];
$name4 =$_POST['d'];
} else
if($name4<=10000)
{
    $tax=$name4*10/100;
    $com=10% ของยอดขาย
}else
if($name4>50000)
{
    $tax=$name4*30/100;
    $com=30% ของยอดขาย
}else
echo "ชื่อ".$name1"<br>";
echo "ชื่อ".$name2"<br>";
echo "ชื่อ".$name3"<br>";
echo "ชื่อ".$name4"<br>";













?>