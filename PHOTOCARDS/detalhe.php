<?php
require_once 'crud.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // 1. Busca os dados atuais
    $sql = "SELECT * FROM photocards WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $photocard = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$photocard) {
        header("Location: detalhe.php");
        exit;
    }

    // 2. Lógica para DELETAR
    if (isset($_POST['delete'])) {
        $del = $pdo->prepare("DELETE FROM photocards WHERE id = :id");
        $del->bindValue(':id', $id);
        $del->execute();
        header("Location: colecao.php");
        exit;
    }

    // 3. Lógica para SALVAR (Update)
    if (isset($_POST['membro'])) {
        $sqlUp = "UPDATE photocards SET 
                    membro = :membro, 
                    era = :era, 
                    versao = :versao, 
                    raridade = :raridade,
                    oficial = :oficial,
                    preco_pago = :preco_pago
                  WHERE id = :id";

        $stmtUp = $pdo->prepare($sqlUp);
        $stmtUp->execute([
            ':membro' => $_POST['membro'],
            ':era' => $_POST['era'],
            ':versao' => $_POST['versao'],
            ':raridade' => $_POST['raridade'],
            ':oficial' => $_POST['oficial'],
            ':preco_pago' => $_POST['preco_pago'],
            ':id' => $id
        ]);

        // Recarrega os dados para atualizar a tela
        header("Location: colecao.php?id=$id&colecao=sucesso");
        exit;
    }

} else {
    header("Location: ./index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Detalhes: <?php echo $photocard['membro']; ?></title>
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




            <div>

                <form action="detalhe.php?id=<?php echo $photocard['id']; ?>" method="POST" class="boxcad">

                    <h2 class="titulo2">Editar Figurinha</h2>



                    <?php if (!empty($saved)): ?>

                        <p class="sub-titulo">Dados atualizados na sessão.</p>

                    <?php endif; ?>



                    <label>
                        <p class="sub-titulo">Membro:</p><br>

                        <input type="text" name="membro" value="<?php echo $photocard['membro']; ?>" required
                            class="cadinput">

                    </label><br>



                    <label>
                        <p class="sub-titulo">era:</p><br>

                        <input type="text" name="era" value="<?php echo $photocard['era']; ?>" required
                            class="cadinput">

                    </label><br>




                    <label>
                        <p class="sub-titulo">Versao:</p><br>

                        <input type="text" name="versao" value="<?php echo $photocard['versao']; ?>" min="0" required
                            class="cadinput">

                    </label><br>


                    <label>
                        <p class="sub-titulo">Raridade:</p><br>

                        <input type="text" name="raridade" value="<?php echo $photocard['raridade']; ?>" required
                            class="cadinput">
                    </label><br>


                    <label>
                        <p class="sub-titulo">Oficial:</p><br>

                        <input type="text" name="oficial" value="<?php echo $photocard['oficial']; ?>" required
                            class="cadinput">
                    </label><br>


                    <label>
                        <p class="sub-titulo">Preço pago:</p><br>

                        <input type="text" name="preco_pago" value="<?php echo $photocard['preco_pago']; ?>" required
                            class="cadinput">
                    </label><br><br>


                    <label><p class="sub-titulo">Link da Foto:</p>
                    <input type="file" name="arquivo" value="<?php echo $photocard['foto']; ?>" >
                </label> <br><br>

                    <button type="submit" class="cadbtn2">Salvar</button>

                    <button type="submit" name="delete" value="1" style="margin-left: 12px;"
                        class="cadbtn2">Deletar</button><br><br>

                </form>

        </section>
    </main>
</body>

</html>