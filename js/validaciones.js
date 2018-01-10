var expNombre= "/^[a-zA-Z\s]+$/";
var  expMail= "/^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/";
var expContrasena =  "/ ^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/";
var expHora =  "/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/";
var expFecha =  "/^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$/";
var expDni =  "/[0-9]{8}/";
var expCuit="/^[0-9]{2}-[0-9]{8}-[0-9]$/";
var expArea="/[0-9]{4}/";
var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
var expPatente= "/^[A-Z]{3}\d{3}$/"



///VALIDACION ABM ARTICULOS//

$("#inpNomb").blur(function(){	
	var id=$("#inpNomb").val();
	var texto=$("#campo1");
	var expNombre= "/^[a-zA-Z\s]+$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNombre.test(id)==0){
		texto.html("<p>Debe completar un nombre valido</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#impMarca").blur(function(){	
	var id=$("#impMarca").val();
	var texto=$("#campo2");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});


$("#impDesc").blur(function(){	
	var id=$("#impDesc").val();
	var texto=$("#campo3");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});


//ABM CAMIONES//


$("#inpModelo").blur(function(){	
	var id=$("#inpModelo").val();
	var texto=$("#campo1");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpMarca").blur(function(){	
	var id=$("#inpMarca").val();
	var texto=$("#campo2");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});


$("#inpPatente").blur(function(){	
	var id=$("#inpPatente").val();
	var texto=$("#campo3");
	var expPatente= "/^[A-Z]{3}\d{3}$/"
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expPatente.test(id)==0){
		texto.html("<p>Solo puede ingresar  3 letras y 3  numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpChofer").blur(function(){	
	var id=$("#inpChofer").val();
	var texto=$("#campo4");
	var expNombre= "/^[a-zA-Z\s]+$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNombre.test(id)==0){
		texto.html("<p>Debe completar un nombre valido</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});


//VALIDACIONES ABM CLIENTES//


$("#inpRazon").blur(function(){	
	var id=$("#inpRazon").val();
	var texto=$("#campo1");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpEmail").blur(function(){	
	var id=$("#inpEmail").val();
	var texto=$("#campo2");
	var  expMail= "/^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>SDebe ingresar un mail valido</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpNomb").blur(function(){	
	var id=$("#inpNomb").val();
	var texto=$("#campo5");
	var expNombre= "/^[a-zA-Z\s]+$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNombre.test(id)==0){
		texto.html("<p>Debe completar un nombre valido</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpDir").blur(function(){	
	var id=$("#inpDir").val();
	var texto=$("#campo6");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpCod").blur(function(){	
	var id=$("#inpCod").val();
	var texto=$("#campo7");
	var expArea="/[0-9]{4}/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Debe ingresar 4 numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#inpLoc").blur(function(){	
	var id=$("#inpLoc").val();
	var texto=$("#campo8");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});
//ABM ORDENES DE ENVIO//


$("#inpCliente").blur(function(){	
	var id=$("#inpCliente").val();
	var texto=$("#campo1");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}
});




$("#inpDir").blur(function(){	
	var id=$("#inpDir").val();
	var texto=$("#campo14");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}
        });
        
$("#inpLoc").blur(function(){	
	var id=$("#inpLoc").val();
	var texto=$("#campo5");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}
});


$("#impArt").blur(function(){	
	var id=$("#impArt").val();
	var texto=$("#campo8");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}
        });

$("#impObser").blur(function(){	
	var id=$("#impObser").val();
	var texto=$("#campo9");
	var expNumerosLetras="/^[a-zA-Z\s0-9]*$/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Solo puede ingresar letras y numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}
        });


//AMB ZONAS//

$("#impNumero").blur(function(){	
	var id=$("#impNumero").val();
	var texto=$("#campo1");
	var expPatente= "/^[A-Z]/"
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expPatente.test(id)==0){
		texto.html("<p>Solo puede ingresar  3 letras y 3  numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});

$("#impArea").blur(function(){	
	var id=$("#impArea").val();
	var texto=$("#campo2");
	var expArea="/[0-9]{4}/";
	if (id =="") {
		texto.html("<p>El campo no puede estar vacio</p>");
		id.focus();
		return false;
	}else if (expNumerosLetras.test(id)==0){
		texto.html("<p>Debe ingresar solo numeros</p>");
		id.focus();
		return false;
	}else{
		texto.html("");
		return true;
	}

});
