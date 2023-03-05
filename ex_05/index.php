<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando variáveis em PHP</title>
</head>
<body>
    <h1>
    <?php 
        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "Eu adoro o " . CANAL;

        $nom = "Rodrigo";
        $snom = "Nogueira";
        //echo "$nom 'Minotauro' $snom"

        //Resolvendo o problema das aspas
        //Sequência de escape

        echo "$nom\"Minotauro\"$snom";
        ?>
        <h1>
</body>
</html>