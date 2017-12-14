<html>
<head>
 <meta charset="utf-8">
 
 
 
 <style type="text/css">
 table {
	background-color: #C93;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	position: relative;
	height: 50%;
	width: 50%;
	top: 30%;
	left: 20%;
	color: #FFF;
}

body {
	background-color: #FC0;
	}
 h3 {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
 
 
 
 </head>
				
		<body>
		<form form name="formtask" action ="conect_task.php" method="POST" onSubmit="return validacao()">
		<table>
			<tr>
			<td colspan="4"><h1><center>Cadastro de Task</center></h1></td>
			<tr>
			<td> Titulo da Tarefa</td>
			<td><input type="text" id="titulo" name="titulo"></td>
			</tr>
			
			<tr>
			<td>Data de inicio</td>
			<td><input type="date" id="datai" name="datai"></td>
			<td>Data progrmada para o fim</td>
			<td><input type="date" id="dataf" name="dataf"></td>
			</tr>
			
			<tr>
			<td>Pessoa responsavel</td>
			<td><input type="text" id="nome_ex" name="nome_ex"></td>
			<td>Arquivos:</td>
			<td><input type="file" name="arquivo" id="arquivo"></td>
			</tr>
			
			<tr>
			<td>Descreva a tarefa</td>
			<td colspan ="4"><textarea rows="10" cols="100" id="descricao" name="descricao">Escreva aqui a descricao</textarea></td>
			</tr>
			
			<tr>
			<td></td>
			<td><input type="button" name="limpar" value="Limpar"></td>
		
			<td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
			<td></td>
			</tr>
			</tr>
		</table>	
		</form>
			
	</body>
	         <h3>Tarefas cadastradas:</h3>
			 <iframe src="exibir.php" width="100%" height="50%" scrolling="yes" frameborder="0" align="center"></iframe>
</html>