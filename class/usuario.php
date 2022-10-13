<?php
include_once('basedatos.php');

class usuario extends basedatos {
    private $idUsuario;
    private $nombre_primario_usuario;
    private $nombre_secundario_usuario;
    private $apellido_paterno_usuario;
    private $apellido_materno_usuario;
    private $correo_usuario;
    private $cel_usuario;
    private $fecha_nacimiento_usuario;
    private $cedula_usuario;
    private $tipo_usuario;
    private $clave_usuario;

    function __construct($idUsuario=NULL, $nombre_primario_usuario=NULL, $nombre_secundario_usuario=NULL, $apellido_paterno_usuario=NULL, $apellido_materno_usuario=NULL, $correo_usuario=NULL, $cel_usuario=NULL, $fecha_nacimiento_usuario=NULL, $cedula_usuario=NULL, $tipo_usuario=NULL, $clave_usuario=NULL){
        $this->idUsuario = $idUsuario;
        $this->nombre_primario_usuario = $nombre_primario_usuario;
        $this->nombre_secundario_usuario = $nombre_secundario_usuario;
        $this->apellido_paterno_usuario = $apellido_paterno_usuario;
        $this->apellido_materno_usuario = $apellido_materno_usuario;
        $this->correo_usuario = $correo_usuario;
        $this->cel_usuario = $cel_usuario;
        $this->fecha_nacimiento_usuario = $fecha_nacimiento_usuario;
        $this->cedula_usuario = $cedula_usuario;
        $this->tipo_usuario = $tipo_usuario;
        $this->clave_usuario = md5($clave_usuario);
        $this->tabla = "usuario";
    }

    function getidUsuario() {
        return $this->idUsuario;
    }

    function getnombre_primario_usuario() {
        return $this->nombre_primario_usuario;
    }

    function getnombre_secundario_usuario() {
        return $this->nombre_secundario_usuario;
    }

    function getapellido_paterno_usuario() {
        return $this->apellido_paterno_usuario;
    }

    function getapellido_materno_usuario() {
        return $this->apellido_materno_usuario;
    }

    function getcorreo_usuario() {
        return $this->correo_usuario;
    }

    function getcel_usuario() {
        return $this->cel_usuario;
    }

    function getfecha_nacimiento_usuario() {
        return $this->fecha_nacimiento_usuario;
    }

    function getcedula_usuario() {
        return $this->cedula_usuario;
    }

    function gettipo_usuario() {
        return $this->tipo_usuario;
    }

    function getclave_usuario() {
        return $this->clave_usuario;
    }

    function setidUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setnombre_primario_usuario($nombre_primario_usuario) {
        if($nombre_primario_usuario == ''){
            $this->nombre_primario_usuario = NULL;
        }else{
            $this->nombre_primario_usuario = $nombre_primario_usuario;
        }
    }

    function setnombre_secundario_usuario($nombre_secundario_usuario) {
        if($nombre_secundario_usuario == ''){
            $this->nombre_secundario_usuario = NULL;
        }else{
            $this->nombre_secundario_usuario = $nombre_secundario_usuario;
        }
    }

    function setapellido_paterno_usuario($apellido_paterno_usuario) {
        if($apellido_paterno_usuario == ''){
            $this->apellido_paterno_usuario = NULL;
        }else{
            $this->apellido_paterno_usuario = $apellido_paterno_usuario;
        }
    }

    function setapellido_materno_usuario($apellido_materno_usuario) {
        if($apellido_materno_usuario == ''){
            $this->apellido_materno_usuario = NULL;
        }else{
            $this->apellido_materno_usuario = $apellido_materno_usuario;
        }
    }

    function setcorreo_usuario($correo_usuario) {
        if($correo_usuario == ''){
            $this->correo_usuario = NULL;
        }else{
            $this->correo_usuario = $correo_usuario;
        }
    }

    function setcel_usuario($cel_usuario) {
        if($cel_usuario == ''){
            $this->cel_usuario = NULL;
        }else{
            $this->cel_usuario = $cel_usuario;
        }
    }

    function setfecha_nacimiento_usuario($fecha_nacimiento_usuario) {
        if($fecha_nacimiento_usuario == ''){
            $this->fecha_nacimiento_usuario = NULL;
        }else{
            $this->fecha_nacimiento_usuario = $fecha_nacimiento_usuario;
        }
    }

    function setcedula_usuario($cedula_usuario) { 
         $this->cedula_usuario = $cedula_usuario;
    }

    function settipo_usuario($tipo_usuario) {
        if($tipo_usuario == ''){
            $this->tipo_usuario = NULL;
        }else{
            $this->tipo_usuario = $tipo_usuario;
        }
    }

    function setclave_usuario($clave_usuario) {
        if($clave_usuario == ''){
            $this->clave_usuario = NULL;
        }else{
            $this->clave_usuario = md5($clave_usuario);
        }
    }

    public function insertar(){
        $campos = array("nombre_primario_usuario", "nombre_secundario_usuario", "apellido_paterno_usuario", "apellido_materno_usuario", "correo_usuario", "cel_usuario", "fecha_nacimiento_usuario", "cedula_usuario", "tipo_usuario", "clave_usuario");
        $valores = array(
            array(
                $this->nombre_primario_usuario,
                $this->nombre_secundario_usuario,
                $this->apellido_paterno_usuario,
                $this->apellido_materno_usuario,
                $this->correo_usuario,
                $this->cel_usuario,
                $this->fecha_nacimiento_usuario,
                $this->cedula_usuario,
                $this->tipo_usuario,
                $this->clave_usuario
            )
        );
        $resultado = $this->insertarRegistros($campos, $valores);
        $this->desconectar();
        if($resultado[0] == "OK"){
            return true;
        }else{
            return false;
        }
    }
    public function consultar(){
        $sql =  "SELECT * FROM usuario WHERE idUsuario = :cod";
        $parametros = array(":cod"=>$this->idUsuario);
        if($this->consultaSQL($sql, $parametros)){
            $res = $this->cargarRegistro();
            $this->setidUsuario($res['idUsuario']);
            $this->setnombre_primario_usuario($res['nombre_primario_usuario']);
            $this->setnombre_secundario_usuario($res['nombre_secundario_usuario']);
            $this->setapellido_paterno_usuario($res['apellido_paterno_usuario']);
            $this->setapellido_materno_usuario($res['apellido_materno_usuario']);
            $this->setcorreo_usuario($res['correo_usuario']);
            $this->setcel_usuario($res['cel_usuario']);
            $this->setfecha_nacimiento_usuario($res['fecha_nacimiento_usuario']);
            $this->setcedula_usuario($res['cedula_usuario']);
            $this->settipo_usuario($res['tipo_usuario']);
            $this->setclave_usuario($res['clave_usuario']);
            $this->desconectar();
        }
    }
    public function actualizar(){
        $campos = array("idUsuario", "nombre_primario_usuario", "nombre_secundario_usuario", "apellido_paterno_usuario", "apellido_materno_usuario", "correo_usuario", "cel_usuario", "fecha_nacimiento_usuario", "cedula_usuario", "tipo_usuario");
        $valores = array(
            $this->idUsuario,
            $this->nombre_primario_usuario,
            $this->nombre_secundario_usuario,
            $this->apellido_paterno_usuario,
            $this->apellido_materno_usuario,
            $this->correo_usuario,
            $this->cel_usuario,
            $this->fecha_nacimiento_usuario,
            $this->cedula_usuario,
            $this->tipo_usuario
        );
        $llaveprimaria = "idUsuario";
        $valorllaveprimaria = $this->idUsuario;
        $res = $this->actualizarRegistros($campos, $valores, $llaveprimaria, $valorllaveprimaria);
        $this->desconectar();
        return $res;
    }
    public function eliminar(){
        $sql = "DELETE FROM usuario WHERE idUsuario = :cod";
        $parametros = array(":cod"=>$this->idUsuario);
        $res = $this->consultaSQL($sql,$parametros);
        $this->desconectar();
        return $res;
    }
    public function listar(){
        $sql = "SELECT * FROM usuario";
        $this->consultaSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }
	/*
		Autor: Daniela Mejia
		Fecha: 07/10/2022
		Parámetros: Sin Parámetros - Se debe enviar la cedula y la clave por Set
		Descripción: Validación de los datos de logueo de un usuario . Retorna verdadero si es correcta
	*/
	public function validarSesion(){
		$sql = "SELECT idUsuario FROM usuario WHERE cedula_usuario = :ced and clave_usuario = :cla";
		$parametros = array(":ced"=>$this->cedula_usuario, ":cla"=>$this->clave_usuario);
		if($this->consultaSQL($sql, $parametros)){
			$res = $this->cargarRegistro();
			$this->desconectar();
			if($res==NULL){
				return false;
			}else{
				$this->idUsuario = $res['idUsuario'];
				return true;
			}
		}
		$this->desconectar();
		return true;
	}
	/*
	   Autor: Orlando Lopez
	  Fecha: 02/10/2017
	  Parámetros: Se debe enviar el código por set y la nueva clave
	  Descripción: Cambiar clave usuarios
	 */
	public function cambiarClave($nuevaclave){
		 $sql =  "UPDATE administrativo SET clave_usuario = :cla WHERE Adm_Codigo = :cod";
		 $parametros = array(":cla"=>hash('sha256', $nuevaclave), ":cod"=>$this->codigo);
	   $this->consultaSQL($sql, $parametros);
	   $this->desconectar();
	 }
}
?>