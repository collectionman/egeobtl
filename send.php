<?php

/* To send a mail to egepbtl@gmail.com */

// form variables
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
        echo "<script language='javascript'>
            alert( 'Tu mensaje ha sido enviado correctamente, pronto te responderemos' ) ;
        </script>" ;
    } else {
        echo 'fallo al enviar correo' ;
    }
}

?>