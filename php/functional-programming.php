<?php
/**
 * Estudos de pŕogramação funcional em PHP.
 * Feito a partir do sitio 'PHP do Jeito Certo'
 * http://br.phptherightway.com/
 * **/

$input = array(1, 2, 3, 4, 5, 6);

// cria uma função anônima e atribuí a uma variável
$filter_even = function($item) {
    return ($item % 2) == 0;
};

/**
 * A função embutida array_filter pede a entrada de array (data) e uma
 * função (uma estratégia ou um callback) usada como um filtro para 
 * cada item do array.
 */

 // constrói o array_filter com os dados e a função
$output = array_filter($input, $filter_even);

// a função não precisa ser atribuída a uma variável. Assim também é válido:
$output2 = array_filter($input, function($item){
    return ($item % 2) == 0;
});

print_r($output);
echo "</br>";
print_r($output2);
echo "</br>";