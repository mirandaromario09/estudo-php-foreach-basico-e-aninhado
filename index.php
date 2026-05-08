<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Foreach em PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        hr { border: 1px solid #ccc; margin: 20px 0; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; }
        .exemplo { background: #f9f9f9; padding: 15px; border-left: 4px solid #28a745; margin: 20px 0; }
        .resultado { background: #e8f4e8; padding: 10px; border-radius: 5px; margin-top: 10px; }
    </style>
</head>
<body>

<h1>Foreach em PHP</h1>

<!-- ============================================================ -->
<!-- FOREACH BÁSICO                                                -->
<!-- ============================================================ -->

<h2>1. Foreach — Array indexado simples</h2>
<p>O <strong>foreach</strong> percorre todos os elementos de um array sem precisar de contador.</p>

<div class="exemplo">
    <h4>Exemplo: Lista de frutas</h4>
    <div class="resultado">
        <?php
        $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

        foreach ($frutas as $fruta) {
            echo "$fruta<br>";
        }
        ?>
    </div>
</div>

<div class="exemplo">
    <h4>Exemplo: Com chave e valor</h4>
    <div class="resultado">
        <?php
        $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

        foreach ($frutas as $indice => $fruta) {
            echo "Índice $indice: $fruta<br>";
        }
        ?>
    </div>
</div>

<hr>

<!-- ============================================================ -->
<!-- FOREACH EM ARRAY ASSOCIATIVO                                  -->
<!-- ============================================================ -->

<h2>2. Foreach — Array associativo</h2>
<p>Em arrays associativos, as chaves são strings em vez de números.</p>

<div class="exemplo">
    <h4>Exemplo: Dados de uma pessoa</h4>
    <div class="resultado">
        <?php
        $pessoa = [
            "nome" => "Romario",
            "idade" => 31,
            "cidade" => "Juiz de Fora"
        ];

        foreach ($pessoa as $chave => $valor) {
            echo "$chave: $valor<br>";
        }
        ?>
    </div>
</div>

<hr>

<!-- ============================================================ -->
<!-- FOREACH EM ARRAY MULTIDIMENSIONAL                             -->
<!-- ============================================================ -->

<h2>3. Foreach — Array multidimensional (array de arrays)</h2>
<p>Array multidimensional é um array que contém outros arrays dentro.</p>

<div class="exemplo">
    <h4>Exemplo: Lista de pessoas</h4>
    <div class="resultado">
        <?php
        $pessoas = [
            ["nome" => "Romario", "idade" => 31, "cidade" => "Juiz de Fora"],
            ["nome" => "Natalia", "idade" => 35, "cidade" => "Belo Horizonte"],
            ["nome" => "Carlos", "idade" => 28, "cidade" => "São Paulo"]
        ];

        foreach ($pessoas as $pessoa) {
            echo "Nome: " . $pessoa["nome"] . " | Idade: " . $pessoa["idade"] . " | Cidade: " . $pessoa["cidade"] . "<br>";
        }
        ?>
    </div>
</div>

<hr>

<!-- ============================================================ -->
<!-- FOREACH ANINHADO                                              -->
<!-- ============================================================ -->

<h2>4. Foreach aninhado</h2>
<p>Quando você tem um array multidimensional e quer percorrer <strong>todos</strong> os níveis, usa um foreach dentro de outro.</p>

<div class="exemplo">
    <h4>Exemplo: Lista de pessoas com foreach aninhado</h4>
    <div class="resultado">
        <?php
        $pessoas = [
            ["nome" => "Romario", "idade" => 31, "cidade" => "Juiz de Fora"],
            ["nome" => "Natalia", "idade" => 35, "cidade" => "Belo Horizonte"]
        ];

        foreach ($pessoas as $indice => $pessoa) {
            echo "<strong>Pessoa " . ($indice + 1) . ":</strong><br>";
            foreach ($pessoa as $chave => $valor) {
                echo "$chave: $valor<br>";
            }
            echo "<br>";
        }
        ?>
    </div>
</div>

<div class="exemplo">
    <h4>Exemplo: Produtos com categorias</h4>
    <div class="resultado">
        <?php
        $produtos = [
            "Bebidas" => ["Café", "Suco", "Refrigerante"],
            "Comidas" => ["Hambúrguer", "Pizza", "Salada"],
            "Sobremesas" => ["Sorvete", "Pudim", "Bolo"]
        ];

        foreach ($produtos as $categoria => $itens) {
            echo "<strong>$categoria:</strong><br>";
            foreach ($itens as $item) {
                echo "- $item<br>";
            }
            echo "<br>";
        }
        ?>
    </div>
</div>

<hr>

<!-- ============================================================ -->
<!-- DIFERENÇA FOREACH VS FOR                                      -->
<!-- ============================================================ -->

<h2>5. Foreach vs For</h2>

<ul>
    <li><strong>for</strong>: ideal quando você precisa do índice numérico ou quer controlar manualmente a iteração</li>
    <li><strong>foreach</strong>: mais simples e seguro para percorrer arrays — não precisa de contador, não tem risco de erro nos limites</li>
</ul>

<div class="exemplo">
    <h4>Mesmo resultado com for e foreach:</h4>
    <div class="resultado">
        <strong>Com for:</strong><br>
        <?php
        $numeros = [10, 20, 30, 40];
        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i] . " ";
        }
        ?>
        <br><br>
        <strong>Com foreach:</strong><br>
        <?php
        foreach ($numeros as $num) {
            echo $num . " ";
        }
        ?>
    </div>
</div>

</body>
</html>
