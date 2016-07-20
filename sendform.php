<?php session_start();

if(isset($_POST['email'])) {

    $programa = $_POST['bookId'];
    $nombres = $_POST['first_name'];
    $apellidos = $_POST['last_name'];
    $telefono = $_POST['telefono'];
    $agencia = $_POST['agencia'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $turno = $_POST['turno'];
    if($turno == 1) {$turno = "Ma?ana";} else {$turno = "Tarde";}    
    $subscribe = $_POST['subscribe'];
    
    date_default_timezone_set("America/Lima");
    $fecha_sal = date("d/m/Y");
    
    $destinatario = 'rrosales@jhonrich.com';
    
    //$destinatario = 'info@goldensupport.com';
    
    $subject = 'Solicitud de Programas / pax : ['.$nombres.",".$apellidos.']';
    $message = "
    <pre>    
    Lima - Miraflores, $fecha_sal
    
    Estimado Ejecutivo, Se ha generado la siguiente solicitud  de Programas : [<strong>$programa</strong>] desde la Pagima WEB.
    
    PAX         : <strong>$nombres,$apellidos<strong>
    Telefono    : <strong>$telefono</strong> 
    Email       : <strong>$email<strong>
    Turno       : <strong>$turno<strong>    
    Mensaje     : <strong>$comentario<strong>
    
    FAVOR DE REALIZAR LA GESTION DE CONTACTO A LA BREVEDAD..!
    
    Area de Gestion WEB
    JHONRICH - AGENCIA DE VIAJES<br />
    
    </pre>          
    ";
    $remitente ="MIME-Version: 1.0\r \n";
    $remitente .="Content-type: text/html; charset=iso-8859-1\r \n";
    $remitente .="X-Priority: 1\r \n";
    $remitente .="X-MSMail-Priority: High\r \n";
    $remitente .="From: <$email>\r \n";
    $remitente .="Reply-To:<$email>\r \n";
    $remitente .="Cc: soporte-melgar@goldensupport.com;\r \n";
   
    /*
    echo "<pre>";
    echo $destinatario;
    echo $subject;
    echo $message;
    echo $remitente;
    echo "</pre>";
    exit;
    */
   
    mail($destinatario, $subject, $message, $remitente) or die("Mensaje no Pudo ser enviado..1!");

  
sleep(1);
echo "<meta http-equiv='refresh' content=\"0; url=http://www.jhonrich.com/index.php\">";
?>
<?php } ?>