<?php
if (isset($_POST['custo'])) {
    $custo = floatval($_POST['custo']); // pega o custo de fábrica

    // Define as porcentagens de distribuidor e impostos
    if ($custo <= 39999.99) {
        $percDistribuidor = 5;
        $percImposto = 5;
    } elseif ($custo <= 69999.99) {
        $percDistribuidor = 10;
        $percImposto = 15;
    } else { // acima de 69999
        $percDistribuidor = 15;
        $percImposto = 20;
    }

    // Calcula preço final
    $precoFinal = $custo + ($custo * $percDistribuidor / 100) + ($custo * $percImposto / 100);

    echo "<h2>Preço ao consumidor: R$ " . number_format($precoFinal, 2, ',', '.') . "</h2>";
} else {
    echo "Digite um valor de custo de fábrica.";
}
?>