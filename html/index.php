<?php
// phpinfo();

function xxx()
{
  return "ppp";
}

$a = "aaa";
echo $a;
$a .= "aaa";
echo $a;
$a .= xxx();
echo $a;

var_dump($a);

