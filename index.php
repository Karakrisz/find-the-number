<?php
$arr = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 12, 12, 13, 14, 14];

foreach ((checkOut($arr)) as $k => $v) {
    if ($v <= 1) {
        echo $k . "<br>";
    }
}

function checkOut($arr)
{

    return (array_count_values($arr));
}
