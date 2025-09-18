<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $date = $_POST['data'];
    $msg = $_POST['msg'];

    $to = "universidadunipopular@gmail.com
";  // <-- PON AQUÍ EL CORREO DE DESTINO
    $subject = "Nueva solicitud de admisión";
    $message = "
    Nombre: $fname $lname\n
    Email: $email\n
    Teléfono: $phone\n
    Dirección: $address, $city\n
    Fecha: $date\n
    Mensaje: $msg
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "✅ Mensaje enviado correctamente.";
    } else {
        echo "❌ Error al enviar el mensaje.";
    }
}
?>
