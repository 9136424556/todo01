<?php
$count = 0;

while ($count <20)  {
    if ($count ==3) {
        $count++;
        continue;
    }
    echo $count . '<br />';
}