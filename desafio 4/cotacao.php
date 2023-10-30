<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
//API DE COTAÇÃO DO DOLAR
$inicio = date("m/d/Y", strtotime("-7 days"));
$fim = date("m/d/Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$cotacao = $dados["value"][0]["cotacaoCompra"];

?>


<body>

  <?php
  
  $reais = $_GET["reais"];

  $conversao = $reais/$cotacao;

  $conversao = number_format($conversao, 2, '.', '');
  
  ?>
    <div class="loginMenu">
        <div class="form">
          
            
            <p class="text">O seu saldo em dólares é de: $<?php echo $conversao;?></p>

          </form>
        </div>
      </div>


</body>
</html>