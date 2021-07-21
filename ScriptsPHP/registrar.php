<?php 
	include_once 'conexao.php';

	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$nome = $_GET['nome'];

	/*echo "Email: $email <br>";
	echo "Nome: $nome <br>" ;
	echo "Senha: $senha <br>"; */

	$sql2 = $bdcon->query("SELECT * FROM tblogin WHERE email='$email' AND senha='$senha' AND nome='$nome'");

	if(mysqli_num_rows($sql2)>0){
		echo "login_ok";
	}else {
		//echo "vai continuar";
		$sql3 = $bdcon->query("INSERT INTO tblogin(nome,email,senha) VALUES('$nome','$email','$senha')");

		if ($sql3) {
			echo "registro_ok";
		}else{
			echo "registro_ok";
		}
	}


?>