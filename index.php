<?php  
	
	require_once("config.php");

	//$sql = new Sql();

	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	//echo json_encode($usuarios);

//Carrega um usuário
//	$root = new Usuario();
//	$root->loadbyId(4);
//	echo $root;

//Carrega uma lista de usuário
//	$lista = Usuario::getList();
//	echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//	$search = Usuario::search("jo");
//	echo json_encode($search);	

//Carrega um usuario usando o login e a senha
//	$usuario = new Usuario();
//	$usuario->login("thiagifma", "654321");
//	echo $usuario;	

	//Inset de um usuario novo
	$aluno = new Usuario("aluno", "@luno");
	$aluno->insert();
	echo $aluno;
	//var_dump($aluno);
?>