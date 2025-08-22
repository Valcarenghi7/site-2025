<?php
	/*
	O que são estruturas de controle?
		- Mecanismos para controlar o fluxo de execução do código, permitindo que diferentes bloco de código sejam executados sob certas condições ou repetidamente.

		* Estruturas condicionais:
			if: Executa um bloco de código se uma condição for verdadeira.

			if...else: Executa um bloco de código se a condição for verdadeira e outro bloco se for falsa.

			if...elseif...else: Permite verificar múltiplas condições sequencialmente.

			switch: Seleciona um bloco de código para executar com base no valor de uma expressão.

		* Estruturas de Repetição (loops):
			while: Executa um bloco de código enquanto uma condição for verdadeira.

			do...while: Similar ao while, mas garante que o bloco de código seja executado pelo menos uma vez.

			for: Executa um bloco de código um número específico de vezes.

			foreach: Especificamente para percorrer arrays e objetos.
	*/

	// --> Estrutura Condicional if, else, elseif: Permite executarcódigo diferente com base em uma condição.

	$nota = 7.5;

	if ($nota >= 7) {
		echo "Você está aprovado!"; // Executado se for aprovado (verdadeiro)
	} elseif ($nota >= 5) {
		echo "Você está em recuperação!";
	} else {
		echo "Você está reprovado!";// Executado se for reprovado (falso)
	}

	echo "<br><br>";

	$idade = 17;

	if ($idade >= 18) {
		echo "Maior de idade.";
	} else {
		echo "Menor de idade.";
	}

	echo "<hr>";

	// --> Estrutura Condicional switch: Uma alternativa para múltiplos elseif quando você precisa comparar uma variável com diferentes valores.

	$diaSemana = 3;

	switch ($diaSemana) {
		case 1:
			echo "Domingo";
			break; // Importante para sair do switch após a condição ser atendida.
		case 2:
			echo "Segunda-feira";
			break;
		case 3:
			echo "Terça-feira"; // Saída: Terça-feira
			break;
		case 4:
            echo "Quarta-feira";
            break;
        case 5:
            echo "Quinta-feira";
            break;
        case 6:
            echo "Sexta-feira";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia da semana inválido.";
	}

	echo "<br>";

	$cor = "azul";

	switch ($cor) {
		case "vermelho":
			echo "A cor é vermelha";
			break;
		case "azul":
            echo "A cor é azul."; // Saída: A cor é azul.
            break;
        case "verde":
            echo "A cor é verde.";
            break;
        default:
            echo "Cor não reconhecida.";
	}

	echo "<hr>";

	// --> Estrutura de Repetição while: Executa um bloco de código repetidamente enquanto a condição for verdadeira.

	$contador = 0;

	while ($contador < 5) {
		echo "O contador é: ".$contador. "<br>";
		$contador++;
	}

	/* Saída:
		O contador é: 0
		O contador é: 1
		O contador é: 2
		O contador é: 3
		O contador é: 4
	*/

	echo "<br>";

	// --> Estrutura de Repetição do...while: Similar ao while, mas garante que o bloco de código seja executado ao menos uma vez.

	$tentativas = 0;
	$senhaCorreta = "secreto";
	$senhaDigitada = "errada";

	    do {
        echo "Tentativa de login número: " . ($tentativas + 1) . "<br>";
        $tentativas++;
        // Em uma aplicação real, aqui você receberia a entrada do usuário para a senha
        if ($tentativas == 6) {
            $senhaDigitada = "secreto"; // Simula o usuário digitando a senha correta na terceira tentativa
        }
    } while ($senhaDigitada != $senhaCorreta && $tentativas < 5);

    if ($senhaDigitada == $senhaCorreta) {
        echo "Login bem-sucedido!"; // Saída: Login bem-sucedido!
    } else {
        echo "Número máximo de tentativas excedido.";
    }

    echo "<hr>";

    // --> Estrutura de Repetição for: Útil quando você sabe quantas vezes precisa que um bloco de código seja executado.
    for ($i = 1; $i <= 5; $i++) {
        echo "O valor de i é: " . $i . "<br>";
    }
    /* Saída:
       O valor de i é: 1
       O valor de i é: 2
       O valor de i é: 3
       O valor de i é: 4
       O valor de i é: 5 */

    echo "<br>";

    $nomes = ["Carlos", "Mariana", "Lucas"];
    for ($i = 0; $i < count($nomes); $i++) {
    	echo "Nome na posição ".$i.": ".$nomes[$i]."<br>";
    }

    /* Saída:
       Nome na posição 0: Carlos
       Nome na posição 1: Mariana
       Nome na posição 2: Lucas */

    echo "<hr>";

    // --> Estrutura de Repetição foreach: Projetada especificamente para iterar sobre arrays e objetos.
    $cores = ["vermelho", "azul", "verde"];
    foreach ($cores as $cor) {
    	echo "A cor é: ".$cor."<br>";
    }
    /* Saída:
       A cor é: vermelho
       A cor é: azul
       A cor é: verde */

    echo "<br>";

    $pessoa = ["nome" => "William", "idade" => 27, "cidade" => "Novo Hamburgo"];

   	foreach ($pessoa as $p => $vlr) {
   		echo $p.": ".$vlr."<br>";
   	}

    /* Saída:
       nome: William
       idade: 27
       cidade: Novo Hamburgo */




?>