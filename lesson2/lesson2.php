<?php
    //1
    $a = 2;
    $b = 3;

    if ($a > 0 && $b > 0) {
        echo $a - $b;
    } elseif ($a < 0 && $b < 0) {
        echo $a * $b;
    } else {
        echo $a + $b;
    }

    echo "<br>";
    //2
    $a2 = rand(0, 15);

    switch ($a2) {
        case 0:
            echo "0 ";
        case 1:
            echo "1 ";
        case 2:
            echo "2 ";
        case 3:
            echo "3 ";
        case 4:
            echo "4 ";
        case 5:  
            echo "5 ";
        case 6:
            echo "6 ";
        case 7:
            echo "7 ";
        case 8:
            echo "8 ";
        case 9:
            echo "9 ";
        case 10:
            echo "10 ";
        case 11:
            echo "11 ";
        case 12:
            echo "12 ";
        case 13:
            echo "13 ";
        case 14:
            echo "14 ";
        case 15:
            echo "15 ";
    }

    echo "<br>";
    //3
    function plus($a, $b) {
        return $a + $b;
    }

    function minus($a, $b) {
        return $a - $b;
    }

    function umnojenie($a, $b) {
        return $a * $b;
    }

    function delenie($a, $b) {
        return $a / $b;
    }

    echo "<br>";
    //4
    function mathOperation($arg1, $arg2, $operation) {
        $r = 0;

        switch($operation) {
            case "+":
                $r = plus($arg1, $arg2);
                break;

            case "-":
                $r = minus($arg1, $arg2);
                break;

            case "*":
                $r = umnojenie($arg1, $arg2);
                break;

            case "/":
                $r = delenie($arg1, $arg2);
                break;
        }

        return $r;
    }