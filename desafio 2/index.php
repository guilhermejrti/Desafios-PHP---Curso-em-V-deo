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
   
  
    define("INFERIOR",0);
    define("SUPERIOR",100);
    $numero = rand(INFERIOR, SUPERIOR);
    
    ?>

<form action="index.php">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Sortear um número entre 0 e 100</h5>
    <button type="submit">Sortear</button>
  </div>
</div>
</form>
<h3>O número sorteado foi: <?php echo $numero;?></h3>

</body>
</html>