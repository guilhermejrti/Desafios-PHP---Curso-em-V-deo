<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  
  $reais = $_GET["reais"];

  $conversao = $reais/5.01;

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