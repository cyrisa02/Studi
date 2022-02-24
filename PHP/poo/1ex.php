<?php

$product = json_decode(base64_decode('eyJuYW1lIjoiQ2FydGUgbVx1MDBlOHJlIiwic3RvY2siOiIxMiIsImJyYW5kIjoiQXN1cyJ9'), true);

var_dump($product);

echo $product['name'].$product['stock'].$product['brand'];
echo '<br>';
echo $product['name'].' ('.$product['brand'].') : '.$product['stock'];
