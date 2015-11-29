<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('usuario_modelo');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	function login(){
		$usuario=$this->input->post('usuario');
		$contrasena=$this->input->post('contrasena');
		$prueba=$this->usuario_modelo->login($usuario,$contrasena);
		
		if($prueba){
			$this->session->set_userdata('idUsuario',$usuario);
			$this->load->view('menu');
		}else{
			$this->load->view('index');
			echo "<script>alert('El usuario y/o contraseña son incorrectos');</script>";
		}
	}

	function perfil(){
		$usuario=$this->session->userdata('idUsuario');
		$datos['data']=$this->usuario_modelo->perfil($usuario);
		$this->load->view('perfil',$datos);
	}

	function editarPerfil(){
		$nombre=$this->input->post('nombre');
		$tarjeta=$this->input->post('tarjeta');
		$celular=$this->input->post('celular');
		$direccion=$this->input->post('direccion');
		$correo=$this->input->post('correo');
		$fechaNacimiento=$this->input->post('fechaNacimiento');
		$perfil=$this->input->post('perfil');
		$identificacion=$this->input->post('identificacion');
		$valor=$this->input->post('valor');
		$prueba=$this->usuario_modelo->editarPerfil($nombre,$tarjeta,$celular,$direccion,$correo,$fechaNacimiento,$perfil,$identificacion,$valor);
		if($prueba){
			echo "<script>alert('Los datos  han sido actualizados con exito');</script>";
			$this->load->view('menu');
		}
	}

	function nuevoCliente(){
		$this->load->view('nuevoCliente');	
	}

	function guardarNuevoCliente(){
		$nombre=$this->input->post('nombre');
		$identificacion=$this->input->post('identificacion');
		$celular=$this->input->post('celular');
		$direccion=$this->input->post('direccion');
		$correo=$this->input->post('correo');
		$idUsuario=$this->session->userdata('idUsuario');
		$tipoDoc=$this->input->post('tipoDoc');
		$prueba=$this->usuario_modelo->guardarNuevoCliente($nombre,$identificacion,$celular,$direccion,$correo,$idUsuario,$tipoDoc);
		if($prueba){
			echo "<script>alert('Los datos  han sido agregados con exito');</script>";
			$this->load->view('menu');
		}	
	}

	function nuevoProceso(){
		$usuario=$this->session->userdata('idUsuario');
		$datos['data']=$this->usuario_modelo->terceros($usuario);
		$this->load->view('nuevoProceso',$datos);	
	}

	
	function guardarNuevoProceso(){
		$problema=$this->input->post('problema');
		$tercero=$this->input->post('tercero');
		$definicion=$this->input->post('definicion');
		$tiempo=$this->input->post('tiempo');
		$idUsuario=$this->session->userdata('idUsuario');
		$derecho=$this->input->post('derecho');
		$prueba=$this->usuario_modelo->guardarNuevoProceso($problema,$tercero,$definicion,$tiempo,$idUsuario,$derecho);
		if($prueba){
			echo "<script>alert('Los datos  han sido agregados con exito');</script>";
			$this->load->view('menu');
		}	
	}

	function verTerceros(){
		$this->load->view('verTerceros');	
	}

	function verProceso(){
		$usuario=$this->session->userdata('idUsuario');
		$datos['data']=$this->usuario_modelo->ultimoProceso($usuario);
		$this->load->view('perfil',$datos);
	}

	public function generar() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Israel Parra');
        $pdf->SetTitle('Ejemplo de provincías con TCPDF');
        $pdf->SetSubject('Tutorial TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
 
		// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
 
		// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
		// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
		// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
		// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
		//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
		// ---------------------------------------------------------
		// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
		// Establecer el tipo de letra
 
		//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
		// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('freemono', '', 14, '', true);
 
		// Añadir una página
		// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
		//fijar efecto de sombra en el texto
        $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
 
		// Establecemos el contenido para imprimir
        //$provincia = $this->input->post('provincia');
        //$provincias = $this->pdfs_model->getProvinciasSeleccionadas($provincia);
        $usuario=$this->session->userdata('idUsuario');
		$datos=$this->usuario_modelo->ultimoProceso($usuario);

        //foreach($datos as $fila){
        	//$proc = $fila['idUsuario'];
        //}
        //preparamos y maquetamos el contenido a crear
        $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #fff; font-weight: bold; background-color: #222}";
        $html .= "td{background-color: #AAC7E3; color: #fff}";
        $html .= "</style>";
        $html .= "<h2>Localidades de </h2><h4>Actualmente: ".$datos->idUsuario." localidades</h4>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>Id localidad</th><th>Localidades</th></tr>";
        
        //provincias es la respuesta de la función getProvinciasSeleccionadas($provincia) del modelo
        //foreach ($provincias as $fila) 
        //{
            //$id = $fila['l.id'];
            //$localidad = $fila['l.localidad'];
 
            //$html .= "<tr><td class='id'>" . $id . "</td><td class='localidad'>" . $localidad . "</td></tr>";
        //}
        //$html .= "</table>";
 
// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
 
// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Localidades de .pdf");
        $pdf->Output($nombre_archivo, 'I');
    }



}
