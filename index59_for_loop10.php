<?php
// print numbers from 1 to 50 except 25
for ($i = 1; $i <= 50; $i += 1) {
    if ($i == 25) {
        continue;
    }
    echo $i . "\n";
}