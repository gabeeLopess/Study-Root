<?php
    session_start();

    require_once('config.php');

    if(isset($_POST['cadastrar'])){
        $idAnotacao = $_POST['idAnotacao'];
        $estudante = $_SESSION['id'];
        $texto = $_POST['texto'];
        $paginaQueEnviou = $_POST['pagina'];

        $row = $conn->query("UPDATE anotacao SET conteudo = '$texto' WHERE id_anotacao = $idAnotacao AND id_estudante_fk = $estudante");

        if($row){
            print "<script>location.href='../telas/$paginaQueEnviou'</script>";
        } else{
            print "<script>alert('Não foi possível salvar o texto, tente denovo depois.'); location.href='../telas/$paginaQueEnviou'</script>";
        }
    }
?>