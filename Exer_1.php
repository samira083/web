<?php
if(isset($_GET['valor'])) {
    $x = $_GET['valor'];

    if ($x <= 39999.99) {
        $soma_1 = 0.05 * $x;
        $resultado = $soma_1 + $x;
    } elseif($x > 40000 && $x <= 69999.99) {
        $soma_2 = 0.10* $x;
        $soma_3 = 0.15* $x;
        $resultado = $soma_3 + $soma_2 + $x;
    } elseif( $x > 69999.99){
        $soma_4 = 0.15 * $x;
        $soma_5 = 0.20 * $x;
        $resultado = $soma_5 + $soma_4 + $x;
    } else {
        echo "defina um valor correto.";
        exit;
    }

    echo"O valor final é R$" . number_format($resultado,0,",",".");
}
?>

