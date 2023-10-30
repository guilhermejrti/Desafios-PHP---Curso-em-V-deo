<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-30-2023\'&@dataFinalCotacao=\'10-30-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$cotacao = $dados["value"][0]["cotacaoCompra"];

?>


<body>
    
    <div class="loginMenu">
        <div class="form">
          
          <form class="loginForm" action="cotacao.php" method="get">
            <input type="text" placeholder="R$" name="reais">
            <p class="text">Informe quantos reais você tem na carteira / Cotação conforme BCB <?php echo $cotacao;?></p>

            <button type="submit">Converter</button>
          </form>
        </div>
      </div>


</body>
</html>