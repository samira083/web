<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Valor do Carro</title>
</head>
<body>
    <h2>Calculadora de Valor do Carro</h2>
    
    <form action="" method="post">
        <label>Digite o valor do carro:</label>
        <input type="number" step="0.01" name="custo" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['custo'])) {
        $custo = floatval($_POST['custo']);

        if ($custo <= 39999.99) {
            $percDistribuidor = 5;
            $percImposto = 5;
        } elseif ($custo <= 69999.99) {
            $percDistribuidor = 10;
            $percImposto = 15;
        } else {
            $percDistribuidor = 15;
            $percImposto = 20;
        }

        $precoFinal = $custo + ($custo * $percDistribuidor / 100) + ($custo * $percImposto / 100);

        echo "<h2>Preço ao consumidor: R$ " . number_format($precoFinal, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
