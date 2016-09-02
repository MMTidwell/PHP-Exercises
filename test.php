<?php

function compare($a, $b, $strict = true) {
    if ($strict === true) {
        return $a === $b ? 'True' : 'False';
    } else {
        return $a == $b ? 'True' : 'False';
    }
}

echo compare('Madonna', 'Lady Gaga', true);
echo compare('Madonna', 'Lady Gaga');
