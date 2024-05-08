<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <div class="container">

        <div class="from-content">
         <h3 id="title">Calcular Salario semanal de un trabajador</h3>
           

          <form action="index.php" method="post">
                Horas Trabajadas:
                <br><input type="number" name="horas"><br>
                Horas Extras: 
                <br><input type="number" name="horasExtras"><br>
                Euros por hora ordinaria: 
                <br><input type="number" name="pagaPorHora"><br>
                Euros por hora extra: 
                <br><input type="number" name="pagaPorExtra"><br>
                <br>
                <button id="signIn" type="button">Calcular</button>
            </form>
        
             <?php
        
             echo "<br><br>";
        
            if (isset ($_POST['horas'], $_POST['horasExtras'], $_POST['pagaPorHora'], $_POST['pagaPorExtra'])) {
        
            $horas = $_POST['horas'];
            $horasExtras = $_POST['horasExtras'];
            $pagaPorHora = $_POST['pagaPorHora'];
            $pagaPorExtra = $_POST['pagaPorExtra'];

            $resultado = ($horas * $pagaPorHora) + ($pagaPorExtra * $horasExtras);

            echo "El salario total es: ", $resultado;
          }
        
          ?> 
         </div>
        
    </div>

    <script src="script.js"></script>
</body>
</html