<html>
	<head>
	<link rel="stylesheet" href="css/index.css"  type="text/css"/> 
<?php
session_start();
?>
		<title>Cadastro de peças</title>	
		
		
		
	</head>
	<body>
		<tr>
		<td>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<h1>Cadastrar danças </h1>
		<div class="bloco">
		<form method="POST" action="gravarInformacoes.php" enctype="multipart/form-data">
		<p><label> Nome da dança: </label>
		<input type ="text" name="nome_danca" placeholder ="Digite o nome da danca"/> <br/></p>
		<p><label> Alunos </label>
		<input type ="text" name="alunos_danca" placeholder ="Digite o nome dos alunos."/> <br/></p>
		<p><label> Data da dança: </label>
		<input type ="date" name="data_dança" placeholder="Digite a data da apresentação"/> <br/></p>
		<label for="imagem">Imagem:</label>
    	<input type="file" name="imagem" id="imagem">


		<input type="submit" value ="Cadastrar" class="submit" />  
		<input type="reset" value ="Limpar" class="submit"/>  
		</div>
</form> 
<div class="voltar">
    <a href="inicio.php">
        <img src="images/arrow.png"></div></p>
	</body>

</html>
