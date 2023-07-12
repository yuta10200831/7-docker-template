<?php
$num = 72;

if ($num % 12 == 0 && $num % 24 == 0) {
  echo "numの値は12の倍数かつ、24の倍数です";
} elseif ($num % 12 == 0) {
  echo "numの値は12の倍数です";
} elseif ($num % 24 == 0) {
  echo "numの値は24の倍数です";
}
var_dump($num % 12 == 0 && $num % 24 == 0);