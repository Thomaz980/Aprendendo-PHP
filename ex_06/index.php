<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo Variáveis</title>
</head>
<body>
    <?php
    #comentário!
    //comentário!

    $nome = "Maria";
    $sobrenome = "Santos";
    const PAIS = "Brasil";

    $nome = "João";
    
    echo "Muito prazer, $nome $sobrenome! Você mora no " .PAIS ;

    $idade = 43;
    $peso = 118.5;
    $casado = false;

    echo $casado;
    include("ex_03");
    ?>
</body>
</html>