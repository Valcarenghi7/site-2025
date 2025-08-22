<?php
	/* 
	O que são operadores?
		- Símbolos que realizam operações em valores (operando).

		* Aritméticos:
		+ (adição), - (subtração), * (multiplicação), / (divisão), % (módulo -  resto da divisão).

		* Atribuição:
		= (atribuição), +=, -=, *=, /=, %=, **= (atribuições combinadas)

		* Comparação:
		== (igual), === (idêntico - igual valor e tipo), != ou <> (diferente), !== (não idêntico), > (maior que), < (menor que), >= (maior ou igual a), <= (menor ou igual a).

		* Lógicos:
		&& ou AND (E lógico), || ou OR (OU lógico), ! ou NOT (NÃO lógico).
	*/

	// --> Operadores Aritméticos: Usados para realizar operações matemáticas.

	$num1 = 10;
	$num2 = 5;

	$soma = $num1 + $num2; // Adição
	$subtracao = $num1 - $num2; // Subtração
	$multiplicacao = $num1 * $num2; // Multiplicação
    $divisao = $num1 / $num2; // Divisão
    $modulo = $num1 % $num2; // Módulo (resto da divisão)
    $potencia = $num1 ** $num2; // Exponenciação

    echo "Soma: " . $soma . "<br>"; // Saída: Soma: 15
    echo "Subtração: " . $subtracao . "<br>"; // Saída: Subtração: 5
    echo "Multiplicação: " . $multiplicacao . "<br>"; // Saída: Multiplicação: 50
    echo "Divisão: " . $divisao . "<br>"; // Saída: Divisão: 2
    echo "Módulo: " . $modulo . "<br>"; // Saída: Módulo: 0
    echo "Potência: " . $potencia . "<br>"; // Saída: Potência: 100000

    echo "<hr>";

    // --> Operadores de Atribuição: Usados para atribuir valores a variáveis.

    $x = 10;
    $y = 20;

    $x += 5; // 15
    $y -= 3; // 17
    $x *= 2; // 30
    $y /= 4; // 4.25
    $x %= 3; // 0


    echo "Valor de x: " . $x . "<br>"; // Saída: Valor de x: 0
    echo "Valor de y: " . $y . "<br>"; // Saída: Valor de y: 4.25

    echo "<hr>";

    // --> Operador de Comparação: Usados para comparar valores; O resultado é sempre um valor booleano (true ou false)

    $a = 8;
    $b = "8";
    $c = 12;

    var_dump($a == $b); // Igual (valor): true
    echo "<br>";

    var_dump($a === $b); // Idêntico (valor e tipo): false
    echo "<br>";

    var_dump($a != $c); // (a - c) Diferente (valor): true
    echo "<br>";

    var_dump($a !== $c); // (a - c) Não idêntico (valor e tipo): true
    echo "<br>";

    var_dump($a > $c); // (a - c) Maior que: false
    echo "<br>";

    var_dump($a < $c); // (a - c) Menor que: true
    echo "<br>";

    var_dump($c >= 12); // (c - 12) Maior ou igual a: true
    echo "<br>";

    var_dump($a <= 5); // (a - 5) Menor ou igual a: false
    echo "<br>";

    echo "<hr>";

    // --> Operadores Lógicos: Usados para combinadr expres~~oes booleanas
    $idade = 17;
    $temCarteira = true;

    if ($idade >= 18) { // AND (e): ambas as condições devem ser verdadeiras
        echo "Pode dirigir"; // Saída: Pode dirigir!
    } elseif ($temCarteira) {
        echo "Pode dirigir de novo";
    } else {
        echo "Não pode dirigir"; // Saída: Não pode dirigir!
    }

    echo "<br>";

    $temDesconto = true;
    $eClienteNovo = false;

    if ($temDesconto || $eClienteNovo) {
        echo "Tem direito ao desconto"; // Aqui
    } else {
        echo "Não tem direiro ao desconto"; 
    }

    echo "<br>";

    $estaChovendo = false;

    if (!$estaChovendo) {
        echo "O dia está ensolarado";
    } else {
        echo "Está chovendo";
    }

    echo "<hr>";

    // --> Operadores de Incremento/Decremento: Usados para aumentar ou diminuir o valor de uma variável numérica em 1.

    $contador = 0;

    echo $contador++; // Pós-incremento: retornar o valor atual e depois incrementa (Saída: 0)
    echo "<br>";
    echo $contador; // Saída: 1
    echo "<br>";

    echo ++$contador; // Pré-incremento: incrementa e depois retornar o valor (Saída: 2)
    echo "<br>";

    echo $contador--; // Pós-decremento: retorna o valor atual e depois decrementa (Saída: 2)
    echo "<br>";
    echo $contador; // Saída: 1
    echo "<br>";

    echo --$contador; // Pré-decremento: decrementa e depois retorna o valor (Saída: 0)

    echo "<hr>";

    // --> Operador de Concatenação de String: Usado para juntar strings.

    $nome = "William";
    $sobrenome = "Alexandre Ferreira";
    $nomeCompleto = $nome." ".$sobrenome; // Concatenação com um espaço no meio

    echo $nomeCompleto; // Saída: William Alexandre Ferreira

    $mensagem = "Olá, ";
    $mensagem .= $nome; // Equivalente a $mensagem = $mensagem . $nome;
    echo "<br>" . $mensagem;
    // Saída: Olá, William
?>