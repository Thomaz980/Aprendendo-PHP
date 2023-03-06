<?php
    $name = 'Flavio'; //string defined with single quotes.

    $name = "Flavio"; //string defined with double quotes.

    $test = 'an exemple';

    $exemple = "this is $test"; //This is an exemple

    // e com aspas duplas podemos usar caracteres de escape (pense em novas linhas \n ou tabulações \t):

    $exemple = "this is a line \n This is a line";

    /* 
    Output is:

    This is a line
    This is a line
    */

    // Podemos verificar o comprimento de uma string usando a strlen()função:

    echo strlen($name); //6
  
    // Podemos obter uma parte de uma string usando substr():

    echo substr($name, 2);// primeiro atributo da frente para trás e o segundo de traz para frente.

    // Podemos substituir uma parte de uma string usando str_replace():

    $name = 'Renato';
    echo str_replace('enato', 'icardo', $name); ///Ricardo

    // Atribuir o resultado a uma nova variável:

    $guardar = str_replace('enato', 'icardo', $name);

    echo $guardar;

    
    ?>