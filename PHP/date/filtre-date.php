<?php

//effectuez un tri dans le tableau afin de ne conserver que les valeurs inférieures à $comparisonTimestamp.

$timestamps = [1654863436, 1407673368, 1581337036, 1644495436, 1399724236, 1586521368, 1628598168];

$comparisonTimestamp = 1586521036; //on prend une valeur au hazard

$comparisonFunction = function ($timestamp) use ($comparisonTimestamp) {
    return $timestamp <= $comparisonTimestamp;
};

print_r(array_filter($timestamps, $comparisonFunction));