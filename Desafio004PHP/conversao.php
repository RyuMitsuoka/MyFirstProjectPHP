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
            $inicio = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url),true);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = $_REQUEST["din"]?? 0;
            $dolar = $real / $cotacao;
            echo "<p> O valor de <strong>R$$real</strong> , voce pode comprar  <strong>USD$dolar</strong> . </p>";
            //$padrao = numfmt_create("pt_BR",NumberFormatter:: CURRENCY);

            //echo "Seus ". numfmt_format_currency($padrao, $real, "BRL",) . "equivalem a ". numfmt_format_currency($padrao, $ien , "JPY")
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>