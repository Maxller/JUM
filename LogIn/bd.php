<?php
	class BD_JUM{
		public $con;
		
		public function __construct(){ 
			$this -> con = new PDO('mysql:host=192.168.0.40;dbname=joghurtundmehr','root','th3kill3r'); 
		}

		public function ingreso($usr, $pass){
			$sql = $this -> con -> prepare("SELECT id_usuario FROM Usuario where binary Usuario = '".$usr."' and cast(aes_decrypt(contrasenia,'AES') as char)='".$pass."'");
			$sql -> execute();
			$res = $sql -> fetchAll();
			if(count($res) > 0) return true;
			else return false;
		}

		public function newUser($name, $lastName, $code, $user, $pass){
			$sql = $this -> con -> prepare("INSERT INTO usuario(Nombre, Apellido, Codigo, Usuario, Contrasenia) VALUES ('".$name."', '".$lastName."', '".$code."', '".$user."',AES_ENCRYPT('".$pass."','AES'))");
			$sql -> execute();
		}

		public function checkUser($user){
			$sql = $this -> con -> prepare("SELECT Usuario FROM Usuario");
			$sql -> execute();
			$res = $sql -> fetchAll();
			if (count ($res) > 0){
				foreach ($res as $cUser) {
					if ($user == $cUser) return 1;
				}
			}
			return 0;
		}

		public function getClient(){
			$sql = $this -> con -> prepare("SELECT * FROM info_clientes");
			$sql -> execute();
			$res = $sql -> fetchAll();
			return $res;
		}
	}
?>