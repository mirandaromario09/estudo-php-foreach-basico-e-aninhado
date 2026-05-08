<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de While e For em PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        hr { border: 1px solid #ccc; margin: 20px 0; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>

    <h1>Estudo de While e For em PHP</h1>

    <!-- ============================================================ -->
    <!-- WHILE                                                         -->
    <!-- ============================================================ -->

    <h2>1. While — Estrutura básica</h2>
    <p>O <strong>while</strong> repete um bloco ENQUANTO a condição for verdadeira.</p>

    <?php
    echo "<h3>Exemplo 1: Contar de 1 a 5</h3>";
    $i = 1;
    while ($i <= 5) {
        echo $i . " ";
        $i++;
    }
    ?>

    <?php
    echo "<h3>Exemplo 2: Tabuada do 4</h3>";
    $i = 1;
    while ($i <= 10) {
        echo "4 x $i = " . (4 * $i) . "<br>";
        $i++;
    }
    ?>

    <?php
    echo "<h3>Exemplo 3: Somar números de 1 a 100</h3>";
    $i = 1;
    $soma = 0;
    while ($i <= 100) {
        $soma += $i;
        $i++;
    }
    echo "Soma de 1 a 100 = $soma";
    ?>

    <?php
    echo "<h3>Exemplo 4: Mostrar apenas pares de 1 a 20</h3>";
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    }
    ?>

    <hr>

    <!-- ============================================================ -->
    <!-- FOR                                                           -->
    <!-- ============================================================ -->

    <h2>2. For — Estrutura básica</h2>
    <p>O <strong>for</strong> é como o while, mas tudo fica entre parênteses: <br>
    <code>for (inicialização; condição; incremento)</code></p>

    <?php
    echo "<h3>Exemplo 5: Contar de 1 a 5 com for</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo $i . " ";
    }
    ?>

    <?php
    echo "<h3>Exemplo 6: Tabuada do 7 com for</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . (7 * $i) . "<br>";
    }
    ?>

    <?php
    echo "<h3>Exemplo 7: Somar números de 1 a 100 com for</h3>";
    $soma = 0;
    for ($i = 1; $i <= 100; $i++) {
        $soma += $i;
    }
    echo "Soma de 1 a 100 = $soma";
    ?>

    <?php
    echo "<h3>Exemplo 8: Mostrar apenas ímpares de 1 a 20 com for</h3>";
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    ?>

    <hr>

    <!-- ============================================================ -->
    <!-- FOR com array                                                 -->
    <!-- ============================================================ -->

    <h2>3. For com Array</h2>
    <p>O for é muito útil para percorrer arrays usando o índice.</p>

    <?php
    echo "<h3>Exemplo 9: Percorrer array indexado</h3>";
    $frutas = ["Maçã", "Banana", "Laranja", "Uva", "Morango"];

    for ($i = 0; $i < count($frutas); $i++) {
        echo "Índice $i: " . $frutas[$i] . "<br>";
    }
    ?>

    <?php
    echo "<h3>Exemplo 10: Calcular média da turma com for</h3>";
    $alunos = [
        ["nome" => "João", "nota" => 8.5],
        ["nome" => "Maria", "nota" => 9.0],
        ["nome" => "Pedro", "nota" => 7.5],
        ["nome" => "Ana", "nota" => 6.0]
    ];

    $soma = 0;
    for ($i = 0; $i < count($alunos); $i++) {
        echo $alunos[$i]["nome"] . " - Nota: " . $alunos[$i]["nota"] . "<br>";
        $soma += $alunos[$i]["nota"];
    }
    $media = $soma / count($alunos);
    echo "<br><strong>Média da turma: " . number_format($media, 2, ",", ".") . "</strong>";
    ?>

    <hr>

    <!-- ============================================================ -->
    <!-- DIFERENÇA PRÁTICA                                             -->
    <!-- ============================================================ -->

    <h2>4. Quando usar cada um?</h2>

    <ul>
        <li><strong>while</strong>: quando você <em>não sabe</em> quantas repetições vai ter. Ex: ficar pedindo senha até o usuário acertar.</li>
        <li><strong>for</strong>: quando você <em>sabe</em> quantas repetições vai ter. Ex: percorrer um array de 10 itens.</li>
    </ul>

    <?php
    echo "<h3>Exemplo prático — while (não sabe quantas vezes):</h3>";
    echo "Simulação: sortear um número até sair maior que 8<br>";

    $tentativas = 0;
    $sorteado = 0;
    while ($sorteado <= 8) {
        $sorteado = rand(1, 10);
        $tentativas++;
        echo "Tentativa $tentativas: sorteou $sorteado<br>";
    }
    echo "<br>Precisou de $tentativas tentativas para sair um número > 8.";
    ?>

    <?php
    echo "<h3>Exemplo prático — for (sabe quantas vezes):</h3>";
    echo "Exibir os 5 primeiros múltiplos de 3<br>";

    for ($i = 1; $i <= 5; $i++) {
        echo $i . "º múltiplo: " . (3 * $i) . "<br>";
    }
    ?>

</body>
</html>
