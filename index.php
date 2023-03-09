<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Arrays</title>
</head>
<body>
    <h1>Trabalhando com Arrays</h1>
    <?php
        //Trabalhando com Arreys:

        $debito = array();
        $credito = array();

        array_push($debito, 0.5);
        array_push($debito, 0.4);

        array_push($credito, 0.3);

        function saldo(array $debitos, array $creditos){
            return array_sum($creditos) - array_sum($debitos);
        }
        
        echo saldo($debito, $credito);
      
    ?>
</body>
</html>

