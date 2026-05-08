<?php
require_once 'crud.php';

$novoPhotocards = [
    'membro' => $_POST['membro'],
    'era' => $_POST['era'],
    'versao' => $_POST['versao'],
    'raridade' => $_POST['raridade'],
    'oficial' => $_POST['oficial'],
    'preco_pago' => $_POST['preco_pago'],
    'foto' => ''
];

$idPhotocardsNovo = create($pdo, 'photocards', $novoPhotocards);

$tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];
if(!in_array($_FILES['arquivo']['type'], $tipos_permitidos)) {
  echo "Tipo de arquivo não permitido. Por favor, envie uma imagem JPEG, PNG ou GIF.";
  exit;
}

$tamanho_max = 1 * 1024 * 1024; // 1MB
if($_FILES['arquivo']['size'] > $tamanho_max) {
  echo "O arquivo é muito grande. O tamanho máximo permitido é 1MB.";
  exit;
}

$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
$novonome = "foto_".uniqid().".".$extensao;

$dir = "uploads/";
$caminho = $dir . "$idPhotocardsNovo/";
$file = $caminho . $novonome;
if (!is_dir($caminho)) {
    mkdir($caminho, 0755);
}

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $file)) {
    $fotoUrl = $file;
    update($pdo, 'photocards', ['foto' => $fotoUrl], 
    "id = $idPhotocardsNovo");
    echo "Photocard inserido com sucesso! ID: $idPhotocardsNovo";
    echo "<a href='colecao.php? id=$idPhotocardsNovo'>Ver Photocard</a>";
} else {
    echo "Erro ao enviar a imagem da capa.";
}