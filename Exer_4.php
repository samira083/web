<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CALCULO DA ÁREA DO TRAPÉZIO</title>
    </head>
    <body>
        <form method="post">
            <label>Digite a base maior</label>
            <input type="number" step="0.01" name="base_maior" id="base_maior">

            <label>Digite a base menor</label>
            <input type="number" step="0.01" name="base_menor" id="base_menor">

            <label>Digite a altura do trapézio</label>
            <input type="number" step="0.01" name="altura" id="altura">

            <button type="submit">Calcular</button>
        </form>


    <?php
    if(isset($_POST['base_maior'])) {
        $base_maior = (floatval($_POST['base_maior']));
        $base_menor = (floatval($_POST['base_menor']));
        $altura = (floatval($_POST['altura']));

        $resultado= (($base_maior + $base_menor) * $altura / 2);

        echo "A área do trapézio é:" . $resultado;
    }
    ?>

    </body>
    </html>