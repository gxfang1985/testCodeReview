<?php
$x=5;

function myTest($x)
{
  echo $y + $x['name'] + $z;
}

myTest($a);

$query = "select * from" .$_GET['input'];
$result = mysqli_query($query);

echo 'test1';