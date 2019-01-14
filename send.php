<?php

/* To send a mail to egeobtl@gmail.com */

// form variables
// $_POST es un array que almacena las variables del formulario que se quieren enviar con dicho método

$name = $_POST[ 'name' ] ;
$email = $_POST[ 'email' ] ;
$message = $_POST[ 'message' ] ;

// email address
$to = 'egeobtl@gmail.com' ;
$subject = 'EGEO' ;
$header = 'Form: ' . $email ;
$messageCompleted = "Nombre: $name\n E-mail: $email Mensaje:\n $message" ; 

if ( $_POST[ 'submit' ] ) {
    if ( mail( $to, $subject, $messageCompleted, $header ) ) {
        echo '<script language="javascript">alert( "Tu mensaje ha sido enviado correctamente, pronto te responderemos" ) ;</script>' ;
    } else {
        echo '<script language="javascript">alert(fallo al enviar mensaje) ;</script>' ;
    }
}

?>