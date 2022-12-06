<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "home.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}

	//área de login 

	include('admin/conexao.php');

	if(isset($_POST['email']) || isset($_POST['senha'])) {
		if(strlen($_POST['email']) == 0){
			echo "Preencha seu e-mail";	
		}else if(strlen($_POST['senha']) == 0){
			echo "Preencha a sua senha";
		} else {
			$email  = $mysqli->real_escape_string($_POST['email']);
			$senha  = $mysqli->real_escape_string($_POST['senha']);

			$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
			$sql_query = $mysqli->query($sql_code) or die ("Falha na execução  do codigo SQL:" . $mysqli->error);

			$quantidade  = $sql_query->num_rows;

			if($quantidade == 1 ){
				
				$usuario = $sql_query ->fetch_assoc();
				if(!isset($_SESSION)){
					session_start();
				}

				$_SESSION['id'] =  $usuario ['id'];
				$_SESSION['nome'] = $usuario['nome'];

				header("Location: pg-entrada.php");
				
			} else{
				echo "<script>alert('Senha ou Email incorretos');</script>";
			}

		}
	}