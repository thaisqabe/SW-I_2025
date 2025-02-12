<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03 - php</title>
</head>
<body>
    <?php
        $nome = "fulano";
    ?>
    <p>Oi meu nome é: <?php echo "$nome"; ?></p>
    <p>Oi meu nome é: <?php echo $nome; ?></p>
    <?php echo "<p>oi meu nome é: $nome</p>"; ?>
    <?php echo "<p>oi meu nome é: " .$nome."</p>"; ?>


</body>
</html>