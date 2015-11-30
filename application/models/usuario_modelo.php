<?php class Usuario_modelo extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function login($usuario,$contrasena){
		$this->db->select('idUsuario');
		$this->db->from('usuario');
		$this->db->where('idUsuario',$usuario);
		$this->db->where('contrasenaUsuario',$contrasena);
		$consulta = $this->db->get();
		if($consulta->num_rows()==1){
			return $consulta->result();
		}else{
			return false;
		}
	}

	function perfil($usuario){
		$this->db->from('usuario');
		$this->db->where('idUsuario',$usuario);
		$consulta = $this->db->get();
		return $consulta->row();
	}

	function editarTercero($usuario, $idTercero){
		$this->db->from('tercero');
		$this->db->where('idUsuario',$usuario);
		$this->db->where('identificacionTercero',$idTercero);
		$consulta = $this->db->get();
		return $consulta->row();
	}

	function terceros($usuario){
		$this->db->from('tercero');
		$this->db->where('idUsuario',$usuario);
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizarTercero($usuario,$nombre,$identificacion,$celular,$direccion,$correo){
		$data=array(
			'nombresTercero'=>$nombre,
			'identificacionTercero'=>$identificacion,
			'celularTercero'=>$celular,
			'direccionTercero'=>$direccion,
			'correoTercero'=>$correo);
		$this->db->where('idUsuario',$usuario);
		$this->db->where('identificacionTercero',$identificacion);
		return $this->db->update('tercero',$data);
	}

	function editarPerfil($nombre,$tarjeta,$celular,$direccion,$correo,$fechaNacimiento,$perfil,$identificacion,$valor){
		$data=array(
			'nombresUsuario'=>$nombre,
			'tarjetaProfesionalUsuario'=>$tarjeta,
			'celularUsuario'=>$celular,
			'direccionUsuario'=>$direccion,
			'correoUsuario'=>$correo,
			'fechaNacimientoUsuario'=>$fechaNacimiento,
			'descripcionUsuario'=>$perfil,
			'identificacionUsuario'=>$identificacion,
			'valorHoraUsuario'=>$valor);
		$this->db->where('correoUsuario',$correo);
		return $this->db->update('usuario',$data);
	}

	function guardarNuevoCliente($nombre,$identificacion,$celular,$direccion,$correo,$idUsuario,$tipoDoc){
		$data=array(
			'nombresTercero'=>$nombre,
			'identificacionTercero'=>$identificacion,
			'celularTercero'=>$celular,
			'direccionTercero'=>$direccion,
			'correoTercero'=>$correo,
			'idUsuario'=>$idUsuario,
			'idTipoDocumento'=>$tipoDoc);
		
		return $this->db->insert('tercero',$data);
	}

	function guardarNuevoProceso($problema,$tercero,$definicion,$tiempo,$idUsuario,$derecho){
		$data=array(
			'descripcionProceso'=>$problema,
			'idTercero'=>$tercero,
			'descripcionConJuridicoProceso'=>$definicion,
			'tiempoProceso'=>$tiempo,
			'idUsuario'=>$idUsuario,
			'idAreaDerecho'=>$derecho);
		
		return $this->db->insert('proceso',$data);
	}

	function ultimoProceso($usuario){
		$this->db->select_max('idProceso', 'idProceso');
		//$this->db->select('descripcionProceso');
		$this->db->from('proceso');
		//$this->db->where('idUsuario',$usuario);
		//$this->db->group_by('idProceso,descripcionProceso');
		$consulta = $this->db->get();
		return $consulta->row();
	}

}?>