<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../index.html">
    <p class="white-text">retorna para o menu principal</p>
  </a>
  <br>
  <P>Esse o e id do produto no banco de dados</P>
    <?php
     require("conexao.php");
     $id = $_GET["id"];
     $pdo  = new db();
     $pdo->mysql->beginTransaction();
     $rs = $pdo->mysql->query("select * from produtos where id = {$id}");
     foreach ($rs as $listas) {
        $listas["Nome"];
        $listas["Preco"];
     }
     echo
           "<td>" . $listas["id"] .  "</td>"
    ?>
            <form class ="cad-produto" method="POST" action="php/cadastra2.php">

            <br><br>
            <!--Receber informações do produto-->
            <div class="row">
                <div class="input-field car-produto">
                    <label for="nomeProduto">Nome do Produto</label><br><br>
                    <input placeholder="nome do produto" id="nome" type="text" class="validate" name="nome">
                </div><br>
                <div class="input-field car-produto">
                    <label for="valorProduto">Preço</label><br><br>
                    <input placeholder="valor do produto" id="preco" type="text" class="validate" name="preco">
                    
                </div>
            </div><br>
            <!--Botão para cadastro do protuto-->
            <button class="btn waves-effect waves-light" type="submit" name="action">confirma</button>
        </form>
    
</body>
</html>