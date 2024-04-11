<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $habitacion=$_POST['habitacion'];
    $llegada=$_POST['llegada'];
    $salida=$_POST['salida'];
    $adultos=$_POST['adultos'];
    $ninos=$_POST['ninos'];

    // Configuración del correo electrónico
    $destinatario = "maraurev@gmail.com";
    $asunto = "Nuevo mensaje desde el formulario de reserva";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Celular: $celular\n";
    $contenido .= "Email: $email\n";    
  
    $header='From: HotelAndes maraurev@gmail.com' . "\r\n";
    
    // Enviar correo electrónico
    mail($destinatario, $asunto, $contenido,$header);
    
    // Redireccionar o mostrar un mensaje de éxito
    header("Location: http://localhost/hotel-andino/gracias");
} else {
    // Si se intenta acceder directamente al archivo PHP sin enviar datos del formulario, redireccionar al formulario
    header("Location: https://asgtec.com.pe/contacto");
}
?>
