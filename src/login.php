<?php
    session_start();

    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM  estudante WHERE email =  '{$email}' AND senha = '{$senha}' ";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["email"] = $email;

        $nome = $conn->query("SELECT usuario FROM estudante WHERE email = '{$email}'");

        print "<script>location.href='home.php'</script>";
    } else{
        print "<script>alert('Email e/ou senha incorreto(s)');</script>";
        print "<script>location.href='index.php';</script>";
    }