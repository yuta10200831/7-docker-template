<?php
class FoodCalculator {
    private $food;

    public function __construct($food) {
        $this->food = $food;
    }

    public function calculateNum() {
        if ($this->food % 2 === 0) {
            $num = $this->food / 2;
        } else {
            $num = ($this->food - 1) / 2;
            if ($num > 3) {
                $num += 6;
            } else {
                $num += 5;
            }
        }
        return $num;
    }
}

$food = 7;
$foodCalculator = new FoodCalculator($food);
$num = $foodCalculator->calculateNum();
echo $num;



// $food = 7;
// $num = 0;
// if($food % 2 == 0){
//     $num = $food / 2;
// }else{
//     $num = ($food - 1) / 2;
//     if($num > 3){
//         $num += 5;
//     }else{
//         $num += 5;
//     }
// }
// echo $num;