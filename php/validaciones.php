<?php 
 $aErrores = array();
 $aMensajes = array();
 // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):



function validarNombre($id){
	 
    // Patrón para usar en expresiones regulares (admite letras y espacios):
     $patron_texto = "/^[a-zA-Z\s]+$/";

     if( isset($_POST[$id]) )
        {
            // Nombre:
             if( empty($_POST['txtNombre']) )
                $aErrores[] = "Debe especificar el nombre";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 if( preg_match($patron_texto, $_POST['txtNombre']) )
                    $aMensajes[] = "Nombre: [".$_POST['txtNombre']."]";
                else
                    $aErrores[] = "El nombre sólo puede contener letras";
            }
}

function validarContraseña(){
	 
    // Patrón para usar en expresiones regulares (6 a 15 digitos, al menos una mayuscula, al menos una minuscula, al menos un digito):
     $patron_contraseña =  "/ ^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/";

     if( isset($_POST['txtContraseña']))
        {
            // Contraseña:
             if( empty($_POST['txtContraseña']) )
                $aErrores[] = "Debe especificar una contraseña";
            else
            {
                // Comprobar mediante una expresión regular
                 if( preg_match($patron_contraseña, $_POST['txtContraseña']) )
                    $aMensajes[] = "Contraseña: [".$_POST['txtContraseña']."]";
                else
                    $aErrores[] = "La contraseña debe tener: de 6 a 15 digitos, al menos una mayuscula y al menos un número ";
            }
}

function validarHora(){
	 
    // Patrón para usar en expresiones regulares (Zona horaria de 24hs):
     $patron_hora =  "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";

     if( isset($_POST['txtHora']))
        {
            // Hora:
             if( empty($_POST['txtHora']) )
                $aErrores[] = "Debe especificar una Hora";
            else
            {
                // Comprobar mediante una expresión regular
                 if( preg_match($patron_hora, $_POST['txtHora']) )
                    $aMensajes[] = "Hora: [".$_POST['txtHora']."]";
                else
                    $aErrores[] = "Debe utilizar zona horaria de 24hs";
            }
}




function validarFecha(){
	 
    // Patrón para usar en expresiones regulares (dd/mm/aaaa):
     $patron_fecha =  "^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$";

     if( isset($_POST['txtfecha']))
        {
            // Fecha:
             if( empty($_POST['txtFecha']) )
                $aErrores[] = "Debe especificar una Fecha";
            else
            {
                // Comprobar mediante una expresión regular
                 if( preg_match($patron_fecha, $_POST['txtFecha']) )
                    $aMensajes[] = "Fecha: [".$_POST['txtFecha']."]";
                else
                    $aErrores[] = "Utilizar Formato dd/mm/aaaa";
      
      }
}

function validarDni(){
	 
    // Patrón para usar en expresiones regulares (DNI sin puntos):
     $patron_dni =  "/[0-9]{8}/";

     if( isset($_POST['txtDni']))
        {
            // DNI:
             if( empty($_POST['txtDni']) )
                $aErrores[] = "Debe especificar un numero de DNI";
            else
            {
                // Comprobar mediante una expresión regular
                 if( preg_match($patron_fecha, $_POST['txtDni']) )
                    $aMensajes[] = "DNI: [".$_POST['txtDni']."]";
                else
                    $aErrores[] = "ingresar Dni sin puntos";
      
      }
}












