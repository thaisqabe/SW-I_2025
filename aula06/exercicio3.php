<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<style>
    body{
        background-color: rgb(220, 190, 255);
    }
    div{
        display: flex;
        justify-content: center;
        margin-top: 10%;
    }
    h1{
        text-align: center;
        font-size: 3rem;
    }
    table{
        border: 4px solid rgb(0, 0, 0);
        font-size: 2rem;
        text-align: center;
        border-collapse: collapse;

    }

    td{
        border: 1px solid black;
        padding: 10px;
        
        
    }

    th{
        border: 2px solid black;
        background-color: rgb(238, 238, 238);

    }
    

    .instrumento{
        background-color: rgb(255, 173, 231);
    }
    .mídia{
        background-color: rgb(173, 188, 255);
    }
    .acessório{
        background-color: rgb(173, 255, 234);
    }
    .equipamento{
        background-color: rgb(255, 226, 173);
    }
    .material{
        background-color: rgb(188, 138, 221);
    }

</style>
<body>

    <?php
    $dadosp = [
        [
            "nome" => "violão",
            "preco" => 1500.00,
            "categoria" => "instrumento"

        ],
        [
            "nome" => "disco vinil",
            "preco" => 190.90,
            "categoria" => "mídia musical"
        ],

        [
            "nome" => "palhetas",
            "preco" => 15.50,
            "categoria" => "acessório"
        ],

        [
            "nome" => "microfone",
            "preco" => 500.00,
            "categoria" => "equipamento áudio"
        ],
        [
            "nome" => "cd",
            "preco" => 45.55,
            "categoria" => "mídia musical"
        ],
        [
            "nome" => "partitura",
            "preco" => 29.99,
            "categoria" => "material"
        ],

        [
            "nome" => "caixa de som",
            "preco" => 800.00,
            "categoria" => "equipamento áudio"
        ],
    ];
    ?>
    <h1>Exercício 3</h1>
    <div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Categoria</th>
            </tr>

            <?php
            foreach ($dadosp as $item) {
                echo "<tr class='" . ($item['categoria']) . "' >";
                echo "<td>{$item['nome']}</td>";
                echo "<td>R&#36;{$item['preco']}</td>";
                echo "<td>{$item['categoria']}</td>";
                echo "</tr>";
            }
            ;
            ?>

        </table>
    </div>
</body>

</html>