<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - While e For</title>
</head>
<body>

<h1>Exercício: While e For</h1>

<div class="exercicio">
    <h3>📌 Exercício 1 — Tabuada completa (for + while)</h3>
    <p>Use <strong>for</strong> para gerar as tabuadas de 1 a 5.<br>
    Dentro de cada tabuada, use <strong>while</strong> para multiplicar de 1 a 10.</p>
    <div class="resultado">
        <?php
        for ($tabuada = 1; $tabuada <= 5; $tabuada++) {
            echo "<strong>Tabuada do $tabuada:</strong><br>";
            $i = 1;
            while ($i <= 10) {
                echo "$tabuada x $i = " . ($tabuada * $i) . "<br>";
                $i++;
            }
            echo "<br>";
        }
        ?>
    </div>
</div>

<div class="exercicio">
    <h3>📌 Exercício 2 — Números pares e ímpares (for com condição)</h3>
    <p>Use <strong>for</strong> para percorrer de 1 a 30. Mostre quais são pares e quais são ímpares.</p>
    <div class="resultado">
        <?php
        for ($i = 1; $i <= 30; $i++) {
            if ($i % 2 == 0) {
                echo "$i é par<br>";
            } else {
                echo "$i é ímpar<br>";
            }
        }
        ?>
    </div>
</div>

<div class="exercicio">
    <h3>📌 Exercício 3 — Soma acumulada (while)</h3>
    <p>Use <strong>while</strong> para somar todos os números de 1 até 50. Mostre o resultado final.</p>
    <div class="resultado">
        <?php
        $i = 1;
        $soma = 0;
        while ($i <= 50) {
            $soma += $i;
            $i++;
        }
        echo "Soma de 1 a 50 = $soma";
        ?>
    </div>
</div>

<div class="exercicio">
    <h3>📌 Exercício 4 — Cardápio com for em array</h3>
    <p>Dado um array de produtos com nome e preço, use <strong>for</strong> para exibir todos em uma lista.</p>
    <div class="resultado">
        <?php
        $cardapio = [
            ["nome" => "Hambúrguer", "preco" => 25.90],
            ["nome" => "Pizza", "preco" => 39.90],
            ["nome" => "Refrigerante", "preco" => 8.50],
            ["nome" => "Suco", "preco" => 10.00],
            ["nome" => "Sorvete", "preco" => 12.50]
        ];

        for ($i = 0; $i < count($cardapio); $i++) {
            echo $cardapio[$i]["nome"] . " - R$ " . number_format($cardapio[$i]["preco"], 2, ",", ".") . "<br>";
        }
        ?>
    </div>
</div>

<div class="exercicio">
    <h3>📌 Exercício 5 — Sorteio até acertar (while com rand)</h3>
    <p>Use <strong>while</strong> para sortear números de 1 a 20 até sair o número 15. Mostre quantas tentativas foram necessárias.</p>
    <div class="resultado">
        <?php
        $tentativas = 0;
        $sorteado = 0;
        while ($sorteado != 15) {
            $sorteado = rand(1, 20);
            $tentativas++;
            echo "Tentativa $tentativas: $sorteado<br>";
        }
        echo "<br><strong>Precisou de $tentativas tentativas para sair 15!</strong>";
        ?>
    </div>
</div>

</body>
</html>
