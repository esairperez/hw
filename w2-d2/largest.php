<?php

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $res = max($a);

    foreach($a as $v) {
        if($res < $v)
            $res = $v;
    }

    echo $res;
?>
