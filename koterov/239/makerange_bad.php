<?php

//function crange($size)
//{
//    $arr = [];
//    for ($i = 0; $i < $size; $i++) {
//        $arr[] = $i;
//    }
//    return $arr;
//}

function crange($size)
{
    for ($i = 0; $i < $size; $i++) {
        yield $i;
    }
}

$range = crange(1024000);
foreach ($range as $i) {
    echo $i;
}

echo '<br> memory_get_usage: ' . memory_get_usage();