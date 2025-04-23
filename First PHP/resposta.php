<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desaio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $n = $_GET ["num"] ?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O numero escolhido foi o <strong>$n</strong>";
            echo "<br>O seu <em>antecessor</em> e $a";
            echo "<br>O seu <em>sucessor</em> e $s";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
