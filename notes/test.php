<?php
for ($i = 1;$i < 8;$i++) {
    echo "#$i\n";
    if (5 % $i == 0 && $i != 1)
        echo 8 % $i++;
    else
        echo $i++;
}
