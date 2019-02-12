<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
 
        //cargamos la base de datos por defecto
        $this->load->database('default');
        
        //cargamos los agentes para los dispositivos
        $this->load->library('user_agent');

		//cargamos el helper url y el helper form
        $this->load->helper(array('url', 'language'));
        
        //cargamamos la libreria del lenguaje
        $this->lang->load('welcome');

        //cargamos los modelos
        $this->load->model(array('Msecurity'));

    }

	/**/
		/**/
	public function index()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);

		$this->load->view('index', $d);
	
	}
	
		public function mandarmensaje(){
		$d = array();
		$this->Msecurity->url_and_lan($d);
	//public function  sendMessage(){
		$datos= $this->input->post();
		parse_str($this->input->post("fieldsP"), $nuevodato);
        //$nuevodato = $this->Msecurity->sanear_array($nuevodato);
        print_r($nuevodato);

		$subject = "Asunto del email";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$mensaje = '<html>'.
		            '<head><title>Nueva consulta </title></head>'.
		            '<body><h1>Mesaje de la Pagina web Mealla y asociados</h1>'.
		            'el mensaje nuevo  '.
		            $nuevodato["inpmensaje"].
		            '<br>'.
		            ' el numero es ='.
		            $nuevodato["inpnumero"].
		            '<br>'.
		            'Email de contacto: '. $nuevodato["inpemail"].
		            '</body>'.
		            '</html>';

		            echo "$mensaje";
		            $enviado = mail($nuevodato["inpemail"], "nueva consulta", $mensaje, $headers);

/*
foreach ($c as $key => $v) {
	if ($v->con_type_contact=="Email" &&  $v->con_type_contact ) {
		echo "<br> $v->con_detail";
		$enviado = mail($v->con_detail, $titulo, $mensaje, $headers);	
		if($enviado) $countOK++;
		else $countKO++;	
		
	}
}
if(!$countOK)
			echo "<p class='text-danger'>lo siento, no pudimos enviar su email.</p>";
		else
			echo "<p class='text-success'>Se envio con exito su mensaje $countOK veces. y fallo $countKO veces</p>";
 



		echo "aqui llego";*/

	}


	public function error404($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error404', $d);
	
	}

	/**/

	public function error($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}

	/**/

	public function error403($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}


	/**/
}