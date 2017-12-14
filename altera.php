<html>
<style type="text/css">
table {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #FFF;
	background-color: #F30;
	position: relative;
	height: 30%;
	width: 50%;
	top: 50%;
	left: 20%;
}
body {
	background-color: #FC0;
}
</style>

<script language=javascript type="text/javascript">
			function validacao() {
				var titulo = formulario.titulo.value;
				var email = formulario.email.value;
				var datai = formulario.datai.value;
				var dataf = formulario.dataf.value;
				var nome_ex = formulario.nome_ex.value;
				var descricao = formulario.descricao.value;

						//Tratativa
							//Nome
							if (titulo == "") {
							alert('Preencha o titulo da task');
							formulario.nome.focus();
							return false;
							}
							//email
							if (email == "") {
							alert('Preencha um e-mail');
							formulario.email.focus();
							return false;
							}
							//Email	
							if (datai == "") {
							alert('Preencha a data inicial');
							formulario.datai.focus();
							return false;
							}
							
							//data							
							if (dataf == "") {
							alert('Preencha a data final');
							formulario.dataf.focus();
							return false;
							}
								
																
							//Senha
							if (nome_ex == "") {
							alert('Preencha um nome');
							formulario.nome_Ex.focus();
							return false;
							}
							
							//descrição
							if (descricao == "") {
							alert('Digite novamente sua senha!');
							formulario.descricao.focus();
							return false;
							}
							
							
							else{
							return true;
							}
							
							}
			</script>


<header>
<?php
// Conecta
$strcon = mysqli_connect('localhost','root','admin','cadastro') or die('Impossível cadastrar agora. Por favor tente mais tarde');

//
$sql = "SELECT id_task, titulo, datai, dataf, nome_ex, arquivo, descricao FROM tarefa";
$query = $strcon->query($sql);
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

					
while ($dados = $query->fetch_assoc()) {
		$id_task = $dados["id_task"];
		$titulo  = $dados["titulo"];
		$dataf  = $dados["dataf"];
		$datai = $dados["datai"];
		$nome_ex = $dados["nome_ex"];
		$arquivo = $dados["arquivo"];
		$descricao = $dados["descricao"];}
		
		mysqli_close($strcon);
?>


</header>
<body>

<form form name="formalt" action ="alter_db.php" method="POST" onSubmit="return validacao()">
		
		<table>
					
			<tr>
			<td colspan="4"><h1><center>Alteração de Task</center></h1></td>
			<tr>
			
			<tr>
			<td colspan="4"><center><input type="text" id="id_task" name="id_task" value="<?php echo $id_task; ?>" readonly ></center></td>
			<tr>
			
			<td> Titulo da Tarefa</td>
			<td><input type="text" id="titulo" name="Titulo" value="<?php echo $titulo; ?>"></td>
			</tr>
			
			<tr>
			<td>Data de inicio</td>
			<td><input type="date" id="datai" name="datai" value="<?php echo $datai; ?>"></td>
			
			<td>Data progrmada para o fim</td>
			<td><input type="date" id="dataf" name="dataf" value="<?php echo $dataf; ?>"></td>
			</tr>
			
			<tr>
			<td>Pessoa responsavel</td>
			<td><input type="text" id="nome_ex" name="nome_ex" value="<?php echo $nome_ex; ?>"></td>
			<td>Arquivos</td>
            <td><input type="file" name="arquivo" id="arquivo" value="<?php echo $arquivos; ?>"></td>
			</tr>
			
			<tr>
			<td>Descreva a tarefa</td>
			<td colspan ="4"><textarea rows="10" cols="100" id="descricao" name="descricao" "><?php echo $descricao; ?></textarea></td>
			</tr>
			
			<tr>
			<td></td>
			<td><input type="reset" name="limpar" value="Limpar"></td>
		
			<td><input type="submit" name="enviar" value="Enviar"></td>
			<td></td>
			</tr>
			</tr>
		</table>	
		</form>
</body>
</html>
