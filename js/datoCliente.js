window.onload = function() {
   $.ajax({
            //url: 'http://sucursal24.com/emanuel/mascota/listar/adopcion',
            type: 'POST',
            dataType: 'JSON',
            success: function (respuesta) {                
                $('#inpRazon').val(respuesta.razon);
                $('#impEmail').val(respuesta.email);
                $('#impIva').val(respuesta.iva);
                $('#impCuit').val(respuesta.cuit);
                $('#impNombre').val(respuesta.nombre);
                $('#impDir').val(respuesta.direccion);
                $('#impCod').val(respuesta.codigo);
                $('#impLoc').val(respuesta.localidad);
                }             
               
            
        })
};
