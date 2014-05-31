<?php
include_once ("Controller.php");
include ("apiSmarty.php");

class email extends Controller{
    
	private $objSmarty;
	
	
	function __construct()
	{	
		$this->objSmarty = new ApiSmarty();
		$this->objSmarty->template_dir = "../View/templates";

	}
	
	function executeSendMail(){
		$sbNombre = $_REQUEST['sbName'];
		$sbCorreo = $_REQUEST['sbEmail'];
		$sbAsunto = $_REQUEST['sbSubject'];
		$sbMesaje = $_REQUEST['sbMessage'];

		$sbPara = 'info@scriptsteam.com';
		$sbCabeceras = 'From: '.$sbCorreo. "\r\n" .
					   'Reply-To: info@scriptsteam.com' . "\r\n" .
					   'X-Mailer: PHP/' . phpversion();
       
		$bolMail = mail($sbPara, $sbAsunto, $sbMesaje, $sbCabeceras);
		
		if($bolMail){
			echo '<b>Enviado</b>';
		}else{
			echo '<br><b>Error</b>';
		}
	
	}
	
}

$objEmail = new email();
$sbAction = $_REQUEST['action'];
$objEmail->execute( $objEmail , $sbAction );
?>