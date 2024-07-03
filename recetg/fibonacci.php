<?php
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    
    if ($numero < 0) {
        echo 'Por favor, informe um número positivo.';
        exit;
    }
    
    $resultado = calcularFibonacci($numero);
    echo 'Sequência de Fibonacci até o ' . $numero . 'º termo: ' . implode(', ', $resultado);
} else {
    echo 'Número não informado.';
}

function calcularFibonacci($n) {
    $fibonacci = [];
    
    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    if ($n >= 2) {
        $fibonacci[] = 1;
    }
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}
?>
