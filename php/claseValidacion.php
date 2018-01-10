<?php



class ValidarFormularios{
 
private $resultado;
 
    public function __construct(){
    }
    
    // VALIDANDO CAMPOS CON LETRAS Y ESPACIOS(Campo nombre)
    public function validarNombre($nombre){
        $patron_nombre= "/^[a-zA-Z\s]+$/";
        if(!empty($nombre) || $nombre != "" or $nombre != NULL (if (preg_match($patron_nombre,$nombre)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }

        // VALIDANDO CONTRASEÑAS
    public function validarContraseña( $contraseña){
        $patron_Contraseña =  "/ ^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/";
        if(!empty $contraseña) ||  $contraseña != "" or $contraseña != NULL (if (preg_match($patron_Contraseña, $contraseña)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }


          // VALIDANDO HORA
    public function validarHora( $hora){
         $patron_hora =  "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";
        if(!empty $hora) ||  $hora != "" or $hora != NULL (if (preg_match($patron_hora, $hora)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }

           // VALIDANDO  FECHA
    public function validarFecha( $fecha){
        $patron_fecha = "/^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$/";
        if(!empty $fecha) ||  $fecha != "" or $fecha != NULL (if (preg_match($patron_fecha, $fecha)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }

             // VALIDANDO  DNI
    public function validarDni( $dni){
        $patron_dni =  "/[0-9]{8}/"
        if(!empty $dni) ||  $dni != "" or $dni != NULL (if (preg_match($patron_dni, $dni)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }



              // VALIDANDO  CUIT
    public function validarCuit( $cuit){
        $patron_cuit = "/^[0-9]{2}-[0-9]{8}-[0-9]$/"
        if(!empty $cuit) ||  $cuit != "" or $cuit != NULL (if (preg_match($patron_cuit, $cuit)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }


          // VALIDANDO  EMAIL
    public function validarEmail( $email){
        $patron_email = "/^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/";
        if(!empty $email) ||  $email != "" or $email != NULL (if (preg_match($patron_email, $email)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }

        //VALIDANDO CODIGO POSTAL y AREA
    public function validarEmail( $postal){
        $patron_postal = "/[0-9]{4}/";
        if(!empty $postal) ||  $postal != "" or $postal != NULL (if (preg_match($patron_postal, $postal)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }


        //VALIDACION PARA Descripcion/Observaciones/RazonSocial/Marca/Localidad/Direccion(NUMEROS Y LETRAS)

    public function validarEmail( $numerosLetras){
        $patron_nl = "/^[0-9]{2}-[0-9]{8}-[0-9]$/";
        if(!empty $numerosLetras) ||  $numerosLetras != "" or $numerosLetras != NULL (if (preg_match($patron_nl, $numerosLetras)) )){
            $resultado = TRUE;
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }


















    
    
}
?>
 
