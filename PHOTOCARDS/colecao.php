<?php
require_once 'crud.php';

$photocards = readAll($pdo, 'photocards');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

  header('Location: colecao.php?colecaoadd=1');
  exit;
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <title>Gerenciamento Photocards</title>

</head>

<body>
  <header>
    <nav>
      <ul class="menu-superior">
        <br>
        <img src="./IMAGENS/logo.png" width="70px">

        <li><a href="index.php"><img src="./IMAGENS/home.png" width="35px"></a></li>

        <li><a href="colecao.php"><img src="./IMAGENS/menu.png" width="35px"></a></li>


        <li><a href="cadastro.php"><img src="./IMAGENS/user.png" width="35px"></a></li>

        </div>
        </li>

      </ul>
    </nav>
  </header>


  <main>

    <section>
            <h1 class="titulo3">Coleção: </h1>

      <article class="container">
        
      <?php
foreach ($photocards as $photocard) {
    echo '<a href="./detalhe.php?id=' . $photocard['id'] . '">
            <div class="box-photocards">
                <img src="' . $photocard['foto'] . '" class="fotos_photocard">
                <br><br>
                  <h3 class="preco-photocards">Card de: ' . $photocard['membro'] . '</h3>
                  <h3 class="preco-photocards">Era: ' . $photocard['era'] . '</h3>
                  <h3 class="raridade-photocards">Raridade do Card: ' . $photocard['raridade'] . '</h3>
                  <h3 class="preco-photocards">Qualidade do Card: ' . $photocard['versao'] . '</h3>

                <h3 class="preco-photocards">Preço: R$ ' . $photocard['preco_pago'] . '</h3>
            </div>
          </a>';
}
?>
      </article>
    </section>

    <br> <br>


    <hr>

    <br> <br>



  </main>


</body>

</html>