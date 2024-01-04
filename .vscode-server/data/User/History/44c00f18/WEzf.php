<?php
$count = 0;

while ($count <100)  {
    if ($count ==3) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}