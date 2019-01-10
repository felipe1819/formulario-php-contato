

<?php
require_once 'formulario.php';
if($_POST) {
    //var_dump($_POST);
    $pdo = new PDO('sqlite:contatos.sqlite3');
    $sth = $pdo->prepare(
        'INSERT INTO contato '.
        '(nome, telefone, mensagem) '.
        'VALUES (?, ?, ?)'
    );

    
    $sth->execute([$_POST['nome'], $_POST['telefone'], $_POST['mensagem']]);
    echo "em breve entraremos em contato!";
}