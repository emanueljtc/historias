<? 
include ("Contacts.html");
$destinatario = "emanueljtc@gmail.com"; 
$asunto = "Form Message";
$nombre=$_POST['nombre']; 
$email=$_POST['email'];
$cuerpo = " 

<html> 
 
<body> 
<h3>You Received A Message to Form one of His Clients</h3> 
<p>
<b>Customer Name:</b> ".$_POST['nombre']." 
<br>
<b>Email Customer:</b> ".$_POST['email']."
<br>
<b>Customer Message:</b> <br> ".$_POST['cuerpo']." 

</p> 
</body> 
</html> 
"; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Feibert Silva <emanueljtc@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);
echo "<script> alert ('Your message was send');</script>";
echo "<meta http-equiv='refresh'content= '2;url=Contacts.html'>";
?>
