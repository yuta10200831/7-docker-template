<?php
class NumberChecker {
  private $num;

  public function __construct($num) {
    $this->num = $num;
  }

  public function checkMultiples() {
    if ($this->num % 12 === 0 && $this->num % 24 === 0) {
        return "numの値は12の倍数かつ、24の倍数です";
    } elseif ($this->num % 12 === 0) {
        return "numの値は12の倍数です";
    } elseif ($this->num % 24 === 0) {
        return "numの値は24の倍数です";
    }
  }
}

$num = 72;
$numberChecker = new NumberChecker($num);
$result = $numberChecker->checkMultiples();
echo $result;




// $num = 72;

// if ($num % 12 == 0 && $num % 24 == 0) {
//   echo "numの値は12の倍数かつ、24の倍数です";
// } elseif ($num % 12 == 0) {
//   echo "numの値は12の倍数です";
// } elseif ($num % 24 == 0) {
//   echo "numの値は24の倍数です";
// }

// numの値は12の倍数かつ、24の倍数です