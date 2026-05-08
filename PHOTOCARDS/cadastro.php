<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de figurinhas</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>


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


<body>
    <form action="insert.php" method="post" enctype="multipart/form-data" class="boxcad2">

        <label for="Membro" class="sub-titulo">Membro:</label>
        <select name="membro" required class="cadinput">
            <option>Kim Namjoon</option>
            <option>Kim Seokjin</option>
            <option>Min Yoongi</option>
            <option>Jung Hoseok</option>
            <option>Park Jimin</option>
            <option>Jeon Jungkook</option>
        </select><br><br>



        <label for="Era" class="sub-titulo">Era:</label>
        <select name="era" required class="cadinput">
            <option>Love Yourself 承 'Her' </option>
            <option>Love Yourself 轉 'Tear'</option>
            <option>Love Yourself 結 'Answer'</option>
        </select><br><br>


        <label for="Versao" class="sub-titulo">Versão:</label>
        <select name="versao" required class="cadinput">
            <option>Normal</option>
            <option>Holográfico </option>
            <option>Lenticular </option>
            <option>Transparent Card</option>
            <option>Unit Card</option>
        </select><br><br>


        <label for="raridade" class="sub-titulo">Raridade:</label>
        <select name="raridade" required class="cadinput">
            <option>Comum</option>
            <option>Raro</option>
            <option>Ultra Raro</option>
        </select><br><br>

        <label for="oficial" class="sub-titulo">Oficial?:</label>
        <select name="oficial" required class="cadinput">
            <option>Sim</option>
            <option>Não, Fanmade</option>
        </select><br><br>

        <label for="preco_pago" class="sub-titulo">Preco pago:</label>
        <input type="text" name="preco_pago" required class="cadinput"><br><br>

        <label for="arquivo" class="sub-titulo">Selecione uma imagem do Photocard:</label><br><br>
        <input type="file" name="arquivo" accept="image/*" required><br><br>

        <button type="submit" class="cadbtn">Inserir Photocard</button>

    </form>
</body>

</html>