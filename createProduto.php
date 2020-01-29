<?php


    echo('<pre>');
    print_r($_GET);
    echo('</pre>');
    
    $erro = false;


    $nome = $_GET['nome'];
    $descricao = $_GET['descricao'];
    $preco = $_GET['preco'];

    if (!isset($_GET) || empty($_GET)){
        $erro = 'Nada foi enviado';
    }
    
    if(!isset(empty($nome) && !$erro)){
        $erro = 'campo nome esta em branco.';
    }

    if(is_numeric($preco)){
        $erro = 'campos esta incorreto digite apenas numeros';
    }
    
  






// echo('<pre>');
// print_r($nome);
// print_r($descricao);
// print_r($preco);
// echo('</pre>');


require("./includes/menu.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tela Produto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cadastroProduto.css">
  </head>
  <body>

    
    <header class="topo">
        tela produto
    </header>

    <div class="formulario container"> 
        <form action="" method="get">
            <span class="titulo">Nome</span>
            <input class='form-control col-lg-6 campos' type="text" name="nome" id="nome">

            <span class="titulo">Preço</span>
            <input class='form-control col-lg-2 campos' type="text" name="preco" id="preco">
            
            <span class="titulo">Descrição produto</span>
            <div class="form-group">
            <label for=""></label>
            <textarea class="form-control col-sm-6 campos" name="descricao" id="descricao" rows="3"></textarea>
            </div>
            <span class="titulo">Carregar foto</span>
            <input class='form-control col-lg-6 campos' type="file" name="file" id="nome">
            <button type="submit" class="btn btn-primary">Submit</button>    
        
        </form>
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>