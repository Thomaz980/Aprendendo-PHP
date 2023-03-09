<?php
    // Interface de Linha de comando

    if ($arg !== 2){
        echo "Uso: php hello.php <nome>.\n";
        exit(1);
    }
    $name = $argv[1];
    echo "Hello, $name\n";
    
?>