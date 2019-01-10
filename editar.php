<?php

    
    $pdo = new PDO('sqlite:contatos.sqlite3');
    $sth = $pdo->prepare(
        'UPDATE contato'.
            'SET nome = ?'.
            'SET telefone = ?' .
            'SET mensagem = ?'
    );

$sth->execute([$_GET['id']]);
?>