
<?php

$col = $_POST["cxcol"];
$lin = $_POST["cxlin"];

$contl = 0;
echo"<div>";
echo "<table>";
while ($lin > $contl){
    echo"<tr>";
    $contc = 0;

    while ($col > $contc){
        $numli = $contl + 1;
        $numcol = $contc + 1;
        echo "<td>coluna $numcol da linha $numli</td>";

    $contc++;
    };

    echo "</tr>";
    $contl++;
};

echo "</table>";
echo"</div>";

echo "<style>
    body{
        background-color: rgb(255, 190, 235);

    }
    div{
        display: flex;
        justify-content: center;
        margin-top: 10%;
    }

    table{
        border: 4px solid rgb(0, 0, 0);
        font-size: 1.5rem;
        background-color: rgb(255, 255, 255);
        border-collapse: collapse;
    }
    td{
        border: 1px solid black;
    }

</style>";
?>