<?php

require_once 'crud.php';

$id = $_GET['id'];

if ($_POST) {

    $dados = [
        'membro' => $_POST['membro'],
        'versao' => $_POST['versao'],
        'era' => $_POST['era'],
        'raridade' => $_POST['raridade'],
        'oficial' => $_POST['oficial'],
        'preco' => $_POST['preco']
    ];

    update($pdo, 'photocards', $dados, "id = $id");

    $mensagem = "
    <div class='mensagem'>
        <p>Figurinha atualizada!</p>
        <a href='select.php?id=$id' class='button'>Ver Figurinha</a>
    </div>
    ";
}

$figurinha = read($pdo, 'photocards', "id = $id");

?>


