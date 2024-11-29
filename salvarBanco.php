<?php
$conn = new PDO('mysql:host=localhost;dbname=db_cinebox','root', '');

$dados = $_GET;


var_dump($dados);

$query = 'INSERT INTO tb_filmes (nome, classificacao_indicativa, valor_ingresso) VALUE (:nome, :classificacao_indicativa, :valor_ingresso)';

// o que esta dentro do value são variaveis temporarios

$preparando = $conn-> prepare($query);
// função prepare funcione para prepara e executar 0a variavel query 

$preparando->execute([
    ':nome' => $dados['nome'],
    ':classificacao_indicativa' => $dados['indicativa'],
    ':valor_ingresso' => $dados['valor']
    // => é para identificação de informações 
])

?>