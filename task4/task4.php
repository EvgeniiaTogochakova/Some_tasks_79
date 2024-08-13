<?php
$a = 1;
$b = 2;
$b = $a ^ $b;
$a = $a ^ $b;
$b = $a ^ $b;
echo "a = $a, b = $b";
