    <?php
        echo "Hello World!";

        //As variáveis ​​em PHP começam com o cifrão $, seguido por um identificador, que é um conjunto de caracteres alfanuméricos e o _caractere de sublinhado.

        $nome = "João";
        $ege = 19;

        /*PHP tem os seguintes tipos:

        *bool valores booleanos (verdadeiro/falso);
        *int números inteiros (sem casas decimais);
        *float números de ponto flutuante (decimais)
        *string;
        *array;
        *object;
        *null um valor que significa “nenhum valor atribuído.
         */

         //Imprimindo o valor de uma variável:

         $name = "Flavio";

         var_dump($name); //Informa o tipo, a quantidade de caracteres e o valor da variável.

        var_dump($ege);

        //Operadores:

        $base = 20;
        $height = 10;

        $area = $base * $height;

        /* Para começar, aqui estão os operadores aritméticos: +, -, *, /(divisão), %(resto) e **(exponencial) */
        
        //Temos o operador de atribuição (=).
        
        /*Em seguida, temos operadores de comparação, como <, >, <=, >=. Aqueles funcionam como eles fazem em matemática. */

        $teste = 2 < 1;
        $teste2 = 1 <= 1;
        $teste3 = 1<= 2;

        var_dump($teste);

        // == retorna verdadeiro se os dois operandos forem iguais.

        1 == '1'; //true

        // === retorna verdadeiro se os dois operandos forem idênticos.

        1 === '1'; //false;

        // Também temos !=que detectar se os operandos não são iguais:

        1 != 1; //false
        1 != '1'; //false
        1 != 2; //true

        // !== e !==para detectar se os operandos não são idênticos:

        1 !== 1; //false
        1 !== '1'; //true

        // Os operadores lógicos trabalham com valores booleanos:

        // Logical AND with && or "and"

        true && true; //true
        true && false; //false
        false && true; //false
        false && false; //false

        true and true; //true
        true and false. //false
        false and true; //false
        false and false; //false

        // Logical OR with || or "or"

        true || true; //true
        true || false; //true
        false || true; //true
        false || false; //false

        true or true; //true
        true or false; //true
        false or true; //true
        false or false; //false

        // Logical XOR (one of the two is true, but not both)

        true xor true; //true
        true xor false; //false
        false xor true; //false
        false xor false; //false

        // Também temos o operador not:

        $test = true;

        !$test // false

        // O PHP também possui 2 operadores unários: ++e --:

        $ege = 20;
        $ege++; //ege is now 21

        $ege--; //ege is now 20

        ?>
