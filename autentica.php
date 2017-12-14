
<?php
    $host = "localhost";
	$user = "root";
	$pass = "admin";
	$banco = "cadastro";
	$conexao = mysql_connect($host,$user,$pass) or die (mysql_error());
   mysql_select_db($banco) or die (mysql_error());
?>
   <html>
   <head>
   
   <script type="text/javascript">
   
   	function loginsuccessfully(){
		setTimeout("window.location='cadastro_task.php'", 1);
			
		}
	function loginfailed(){
			
	setTimeout("window.location='login.php'", 1);
		}
		
   </script>
   
   </head>
   
   <body>
   <?php   
   $email=$_POST["email"];
   $senha=$_POST ["senha"];
   $sql = mysql_query("SELECT * FROM contatos WHERE email= '&email' and senha= '$senha'");
   $row = mysql_num_rows($sql);
   if($row = 1){
	   session_start();
	   $_SESSION['email']=$POST['email'];
	   $_SESSION['senha']=$POST['senha'];
	   
	   echo "Atenticado com sucesso";
	   
	   echo "<script>loginsuccessfully();
	   </script> ";	   
	   
	   }
	   
	   if($row = 0){
		    echo "Nome de usuario ou senha invalida";
		   
		    echo "  <script>loginfailed();  
	   </script> ";			   	   		   
		   }
   
   
   ?>
   
</body>
</html>