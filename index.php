<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index</h1>
    <!-- quando quiser usar comandos php  -->
    <?php
        // echo comando de escreva
        echo '<strong>Eu estou aparecendo pelo php</strong>';
        // tag strong 
        // terminar a cada comando ponto e virgula
        // o simbolo de $ declara a variavel no php
        $conn = "variavel de conexão";
        echo $conn;

    ?>
    <!-- action é para eu quero enviar-->
    <form action="salvarBanco.php" method="get">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="indicativa" placeholder="classificação indicativa">
        <input type="text" name="valor" placeholder="valor ingresso">
        <input type="submit">
    </form>
</body>
</html>