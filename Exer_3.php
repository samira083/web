<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CALCULO DO SALÁRIO FIXO</title>
        </head>
        <body>
        <form method="post">
            <label>Digite o valor do seu salário</label>
            <input type="number" step="0.01" name="salario" id="salario">
            
            <label>Digite quantas vendas foram feitas</label>
            <input type="number" step="1" name="venda" id="venda">
            <button type="submit">Calcular</button>
        </form>
            
            <?php
    if(isset($_POST['salario'])) {
        $salario = floatval(($_POST['salario']));
        $venda = floatval(($_POST['venda']));
        
        $resultado = ($venda * 0.04) + $salario;
        echo "O salário final é: R$" . $resultado;
    }
    ?>
    </body>
</html>