<?php
$x=5;

function myTest($x)
{
  echo $y + $x['name'];
}

myTest($a);

$query = "select * from" .$_GET['input'];
$result = mysqli_query($query);

