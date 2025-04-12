<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<style>
    body{
        font-size: 2rem;
    }
    .cor1{
        background-color: #f72585;

    }

    .cor2{
        background-color: #c77dff;

    }
    div{
        display: flex;
        justify-content: center;
        margin-top: 10%;
    }

    table{
        border: 4px solid rgb(0, 0, 0);
        border-collapse: collapse;

    }

    td,th{
        border: 1px solid black;
    }

    h1{
        text-align: center;
    }
</style>
<body>
<h1>Exercício 1</h1>
    <div>
        
    <table>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>


        </tr>
        <?php
        for ($i = 1; $i <= 8; $i++) {

            if ($i%2 == 0){
                echo '<tr class="cor1">';
            } else{
                echo '<tr class="cor2">';
            }
            echo "
                        <td>coluna 1 da linha $i</td>
                        <td>coluna 2 da linha $i</td>
                        <td>coluna 3 da linha $i</td>
                        <td>coluna 4 da linha $i</td>
                    </tr>
                ";
        
        }
        ?>

    </table>
    </div>
</body>

</html>