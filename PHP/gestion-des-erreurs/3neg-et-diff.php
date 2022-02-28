<?php

function firstFunction($sales, $charges)
{
    return secondFunction($sales, $charges);
}

function secondFunction($sales, $charges)
{
    return getProfit($sales, $charges);
}

function getProfit($sales, $charges)
{
    if ($sales < $charges) {
        throw new Exception('Attention le résultat est négatif');
    }

    return $sales - $charges;
}

echo '<pre>';

echo firstFunction(10, 15);
