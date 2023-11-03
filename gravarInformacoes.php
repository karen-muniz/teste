<?php
session_start();
include_once("conexao.php");

// Dados do formulário
$nome_peca = filter_input(INPUT_POST, 'nome_peca', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$diretor = filter_input(INPUT_POST, 'diretor', FILTER_SANITIZE_STRING);
$data_peca = filter_input(INPUT_POST, 'data_peca', FILTER_SANITIZE_STRING);
$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
$resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
$nome_danca = filter_input(INPUT_POST, 'nome_danca', FILTER_SANITIZE_STRING);
$alunos_danca = filter_input(INPUT_POST, 'alunos_danca', FILTER_SANITIZE_STRING);
$data_danca = filter_input(INPUT_POST, 'data_danca', FILTER_SANITIZE_STRING);

// Upload de imagem

if(isset($_FILES['arquivo'])){

$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "images/banco"; //define o diretorio para onde enviaremos o arquivo

move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

$resultado = "INSERT INTO eventos (nome_peca, autor, diretor, data_peca, tema, resumo, nome_danca, alunos_danca, data_danca, caminho_imagem) VALUES ('$nome_peca', '$autor', '$diretor', '$data_peca', '$tema', '$resumo','$nome_danca', '$alunos_danca','$data_danca', '$link_imagem')";
$resultado_banco = mysqli_query($conn, $resultado);

if($resultado->query($resultado_banco))
  $msg = "Arquivo enviado com sucesso!";
else
  $msg = "Falha ao enviar arquivo.";

}

header("Location: cadastro_peca.php");



