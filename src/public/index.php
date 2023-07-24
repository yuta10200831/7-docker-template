<?php
class FoodCalculator {
    private int $food;

    public function __construct(int $food) {
        $this->food = $food;
    }

    public function calculateNum(): int {
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

// 出力８
// クラスの引数と返り値に型を指定

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