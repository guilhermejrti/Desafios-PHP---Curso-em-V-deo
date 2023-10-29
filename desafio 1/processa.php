<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>

      
<style>
body{
    width: 400px;
    align-items: center;
    margin: 0 auto;
}

</style>


<body>
    <?php
    $numero = $_GET["numero"];
    $antecessor = $numero-1;
    $sucessor = $numero+1;
    ?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Resultado</h5>
    <p class="card-text">O número escolhido foi: <?php echo $numero;?> <br>
                        O número antecessor é: <?php echo $antecessor;?><br>
                        O número sucessor é: <?php echo $sucessor;?></p>
  </div>
</div>

</body>
</html>