<?php

require_once 'crud.php';

$id = $_GET['id'];

delete($pdo, 'photocards', "id = $id");

header('Location: colecao.php');
exit;