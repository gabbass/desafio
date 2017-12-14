<html>
<head>

<meta name="google-signin-client_id" content="tasks-188901.apps.googleusercontent.com">
<script language=javascript type="text/javascript">
			function validacao() {
				
				var racf = formulario.racf.value;
				var senha = formulario.senha.value;
				
						//Tratativa
							//racf
							if (racf == "") {
							alert('Preencha uma racf');
							formulario.racf.focus();
							return false;
							}
											
								
															
							//Senha
							if (senha == "") {
							alert('Preencha uma senha');
							formulario.senha.focus();
							return false;
							}
														
							else{
							return true;
							}
							
							}
							
							
							
							
			</script>
            
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            
            <script>
			
			function onSignIn(googleUser) {
			  var profile = googleUser.getBasicProfile();
			  console.log('nome: ' + profile.getName());
			  console.log('email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
			}
			
			</script>
            
            
 <style type="text/css">
 
 
 table {
	position: relative;
	height: 40%;
	width: 40%;
	top: 80%;
	right: 20%;
	left: 30%;
	bottom: 20%;
	clip: rect(50%,auto,auto,auto);
	background-color: #0059B2;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #FFF;
}
tr {
	background-color: #0059B2;
}
 body,td,th {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: bold;
	background-color: #00BFFF;
}
 
 td {
	background-color: #0059B2;
}
 </style>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
				
		<body>
        
       
        
		<form name="formulario" action ="autentica.php" method="POST" onSubmit="return validacao()">
		<table border="0" width="50%">
		<tr>
		<td colspan="4"><h1><center> Bem Vindo!</center><h1></td>
		</tr>
		<tr>
		<td colspan="2">E-mail</td>
		<td colspan="2"><input type="text" id="email" name="email"></td>
		<tr>	
			
		<tr>	
		<td colspan="2"> Senha</td>
		<td colspan="2"><input type="password" id="senha" name="senha"></td>
		<tr>
<tr>	
		<td> <input type="reset" name="limpar" value="Limpar"></td>
		<td> <input type="submit" name="enviar" value="Enviar"></td>
		<td><a href="change.html"><input type="button" name="Cadastro" value="Cadastro">		</a></td>
        <td><div class="g-signin2" data-onsuccess="onSignIn"></div></td>
		<tr>
		
		</table>
		
		<center></center>
		<center>
		
		
		
		
		
		<center>
		</form>
        
		
		</body>
	
</html>