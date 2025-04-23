<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio3 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
        $cotacao = 24.44;
        $real = $_REQUEST["din"]?? 0;
        $ien = $real * $cotacao;
        echo "<p> O valor de <strong>R$$real</strong> , voce pode comprar  <strong>JPY$ien</strong> . </p>";
        //$padrao = numfmt_create("pt_BR",NumberFormatter:: CURRENCY);

        //echo "Seus ". numfmt_format_currency($padrao, $real, "BRL",) . "equivalem a ". numfmt_format_currency($padrao, $ien , "JPY")
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>