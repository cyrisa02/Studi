<?php

//Pour attraper une exception, il faut entourer le code par un bloc try/catch :

//Un bloc finally peut être ajouté après le bloc catch. Celui-ci permettra d'exécuter du code, qu'importe qu'une exception ait ou non été attrapée.

//Une exception est attrapée si elle est levée dans le code exécuté au sein du bloc try.

//Le bloc catch permet de traiter cette exception.

//Le bloc finally permet quant à lui d'exécuter du code systématiquement.

try {
    echo 'Exécution du bloc try'.PHP_EOL;
    getProfit(180, 200);
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
} finally {
    echo 'Exécution du bloc finally'.PHP_EOL;
}

echo 'Exécution du reste du code'.PHP_EOL;

function getProfit($sales, $charges)
{
    if ($sales < $charges) {
        throw new Exception('Attention le résultat est négatif<br>');
    }

    return $sales - $charges;
}
