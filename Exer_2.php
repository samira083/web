
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> CALCULADORA DE INVESTIMENTO</title>
</head>
<body>
    <h1>CALCULADORA DE INVESTIMENTO</h1>
    <h2>Selecione o tipo de investimento:</h2>
    <form action="" method="post">
        <input type="radio" id="poupanca" name="escolha" value="3" required>
        <label for="poupanca">Poupança</label><br>

        <input type="radio" id="renda_fixa" name="escolha" value="4" required>
        <label for="renda_fixa">Fundos de renda fixa</label><br>

        <h2>Digite o valor de investimento:</h2>
        <input type="number" step="0.01" name="valor" required>
        <button type="submit">Calcular</button>
    </form>

<?php 
if (isset($_POST['valor']) && isset($_POST['escolha'])) {
    $custo = floatval($_POST['valor']);
    $percentual = floatval($_POST['escolha']);
    $resultado = $custo + ($custo * $percentual / 100);

    echo "<h3>Valor final do investimento: R$ " . number_format($resultado, 2, ',', '.') . "</h3>";
}
?>
</body>
</html>