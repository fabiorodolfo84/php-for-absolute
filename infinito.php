<?php
/*PHP Infinito

Um valor numérico maior que PHP_FLOAT_MAX é considerado infinito.

PHP possui as seguintes funções para verificar se um valor numérico é finito ou infinito:

    é_finito()
    é_infinito()

No entanto, a função var_dump() do PHP retorna o tipo e o valor dos dados:  */
//Verifique se um valor numérico é finito ou infinito: 

$x = 1.9e411;
var_dump($x);
?> 