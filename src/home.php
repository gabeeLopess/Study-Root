<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhor Aplicativo de Estudo</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styleindex.css">
</head>
<body>

<?php
session_start();
if(empty($_SESSION)){
  print "<script>location.href='index.php'</script>";
}

?>

    <aside class="sidebar"> 
        
            <form  class ="buscas" role ="search">
                <input  class ="buscador" type ="text" placeholder ="Assunto desejado" aria-label ="Search">
                <button class ="botao-pesquisa" type ="submit" >Buscar</button>
            </form> 
           
            <nav>
               <a href="./assunto.php"> <button class="bts">
                    <span>
                        <span>nome assunto01</span>
                    </span>
                </button>
            </a>
                <button class="bts">
                    <span>
                        <span>nome assunto02</span>
                    </span>
                </button>
                <button class="bts">
                    <span>
                        <span>nome assunto03</span>
                    </span>
                </button>
            </nav>

            <button type="button" class ="botao-cadastro" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cadastrar</button>

        </header>
    <?php
      
       print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
    ?>
    </aside>

    
    <img src="./img/logo.jpeg" class="logo">
    

      <!-- Modal -->
      <div class="modal fade modale" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 titulo" id="staticBackdropLabel">Adicionar Assunto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input  class ="nome-assunto" type ="search" placeholder ="Nome" aria-label ="Search">
            </div>
            <div class="modal-footer">
              <div class="modal-body">
              <input  class ="descricao-assunto" type ="search" placeholder ="Descrição" aria-label ="Search">
            </div>

              <button type="button" class="botao-concluir">Concluir</button>
            </div>
          </div>
        </div>
      </div>


    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
</body>
</html>