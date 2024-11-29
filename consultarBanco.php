<?php
$conn = new PDO('mysql:host=localhost;dbname=db_cinebox','root', '');
// 1 parametro -> conexão - parametros são do tipo do banco, onde ele esta servindo e o nome do banco 
// 2 parametro -> usuario do banco 
// 3 parametro -> senha

$query = 'SELECT * FROM tb_filmes';
// query é uma consulta

$resultado = $conn->query($query)->fetchall();
// a função query esta chamando a variavel query
// o fetchall vai me trazer todos os resultados
//  o fetch só um resultado

// echo '<pre>';
// var_dump($resultado);


// comando de depuração - mostrar tudo que esta dentro 
// foreach ele vai pegar uma array e passar para cada casa do array
foreach($resultado as $filme){
    echo '<p style="background-color:tomato">' . $filme['nome'].'</p>';
    echo '<br>';
    // ele escreve - echo
}

?>