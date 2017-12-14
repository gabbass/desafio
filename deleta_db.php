<html>
 <head>
   <style type="text/css">

body {
	background-color: #FC0;
}
</style>
<?php
					$id_task = $_POST['id_task'];
					$titulo = $_POST['titulo'];
					$datai = $_POST['datai'];
					$dataf = $_POST['dataf'];
					$nome_ex = $_POST['nome_ex'];
					$racf_ex = $_POST['racf_ex'];
					$descricao = $_POST['descricao'];


$strcon = mysqli_connect('localhost','root','admin','cadastro') or die('Impossível deletar agora. Por favor tente mais tarde');
					$sql = "DELETE FROM tarefa WHERE id_task='$id_task'";
					mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
					mysqli_close($strcon);
					echo "Tarefa deletada com sucesso! <p><a href='exibir.php'>Voltar</a>";
					
?></head>
 <body>
</body>
</html>