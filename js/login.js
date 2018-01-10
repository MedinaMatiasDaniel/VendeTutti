$(document).ready(function(){
	
		 $("#btnIniciar").click(function(){
            var datosLogin = validarCamposLogin();
            console.log(datosLogin);

            if (datosLogin.length > 0) { // No es vacio
                $.ajax({
                    data: 'usuario='+datosLogin[0]+'&password='+datosLogin[1],
                    type: "POST",
                    //url: "app/admin/login"
                    url: "app/empleado/iniciar"
                })
                 .done(function( data, textStatus, jqXHR ) {
                     if ( console && console.log ) {
                         console.log( "La solicitud se ha completado correctamente." );
                         console.log(data);
                         //console.log(data.message);
                         if(data.mensaje == "Logueo Correcto") {
                            console.log("Correcto");
                            
                            //$(location).attr('href','app/empleado/restringido');
                            $(location).attr('href','app');
                         }else {
                            alert("usuario o contraseña invalidos");
                            //$("#resultado").html('<div class="alert alert-danger" role="alert">Datos invalidos</div>');
                         }


                     }
                 })
                 .fail(function( jqXHR, textStatus, errorThrown ) {
                    if ( console && console.log ) {
                        console.log( "La solicitud a fallado: " +  textStatus);
                    }
                });

            } else { // Si es vacio, notifica que ingresa datos validos
                console.log("Especifica un valor valido");
            }
        
        });

				


		function validarCamposLogin() {
            var emailLogin = $("#inpRecuperar").val();
            var passwordLogin = $("#inpContraseña").val();


            var datos = new Array(emailLogin, passwordLogin);
            
            return datos;

        }

});