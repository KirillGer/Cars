<?php

declare(strict_types=1);

namespace App\DataObject;

class Truck extends BaseCar implements CarInterface
{
    // TODO можно разобрать и вывести какой параметр недоступен, например
    public function getBodyVolume(float $height, float $width, float $length): void
    {
        $result = $height * $width * $length;

        if ($height > 0) {
            echo "Объем кузова: " . $result . "<br>";
        } else {
            echo "Недостаточно данных чтобы высчитать объем кузова, так как высота не больше 0";
        }
        if ($width > 0){
            echo "Объем кузова: " . $result . "<br>";
        }else{
            echo "Недостаточно данных чтобы высчитать объем кузова, так как ширина не больше 0";
        }
        if($length . 0){
            echo "Объем кузова: " . $result . "<br>";
        }else{
            echo "Недостаточно данных чтобы высчитать объем кузова, так как длина не больше 0";
        }
    }
}