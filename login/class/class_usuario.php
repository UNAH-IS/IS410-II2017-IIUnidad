<?php

	class Usuario{

		private $codigoUsuario;
		private $nombreUsuario;
		private $correo;
		private $contrasena;
		private $codigoTipoUsuario;

		public function __construct($codigoUsuario,
					$nombreUsuario,
					$correo,
					$contrasena,
					$codigoTipoUsuario){
			$this->codigoUsuario = $codigoUsuario;
			$this->nombreUsuario = $nombreUsuario;
			$this->correo = $correo;
			$this->contrasena = $contrasena;
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getCodigoTipoUsuario(){
			return $this->codigoTipoUsuario;
		}
		public function setCodigoTipoUsuario($codigoTipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function __toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" NombreUsuario: " . $this->nombreUsuario . 
				" Correo: " . $this->correo . 
				" Contrasena: " . $this->contrasena . 
				" CodigoTipoUsuario: " . $this->codigoTipoUsuario;
		}

		public static function verificarUsuario($conexion, $correo,$contrasena){
				$sql = sprintf(
						"SELECT codigo_usuario, codigo_tipo_usuario, 
								correo, nombre, contrasena FROM tbl_usuarios 
						WHERE  correo = '%s' AND contrasena = '%s'",
						$correo,
						$contrasena
					);
				//echo ($sql);
				$resultado = $conexion->ejecutarConsulta($sql);

				$cantidadRegistros = $conexion->cantidadRegistros($resultado);
				$respuesta=array();
				if ($cantidadRegistros==1){
					$fila = $conexion->obtenerFila($resultado);
					$_SESSION["codigo_usuario"] = $fila["codigo_usuario"];
					$_SESSION["correo"] = $fila["correo"];
					$_SESSION["nombre"] = $fila["nombre"];
					$respuesta["status"]=1;
					$respuesta["mensaje"]="Si tiene acceso" ;
					$respuesta["codigo_tipo_usuario"]=$fila['codigo_tipo_usuario'];
				}else{
					$respuesta["status"]=0;
					$respuesta["mensaje"]="No tiene acceso" ;
				}

				echo json_encode($respuesta);
		}
	}
?>

