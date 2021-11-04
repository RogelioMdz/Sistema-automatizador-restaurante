$(document).ready(function () {
	$('#form').validate({
		rules: {
			nombre: {required: true, minlength: 3, maxlength: 15},
			apellido: {required: true,  minlength: 3, maxlength: 15},
			telefono: {required: true, digits: true},
			genero: {required: true},
			correo: {required: true, email: true},
			contra: {required: true},
			confirmar_contra: {required: true, equalTo: contra},
			flexCheckDefault:{required: true}
		},
		messages: {
			nombre: {
				required: "Coloca tu nombre",
				minlength: "El nombre es demasiado corto",
				maxlength:  "El nombre es demasiado largo"
			},
			apellido: {
				required: "Coloca tu apellido",
				minlength:  "El apellido es demasiado corto",
				maxlength:  "El apellido es demasido largo"
			}, 
			telefono:{
				required: "Coloca tu numero telefonico",
				digits:  "El numero es invalido"
			},
			genero: {
				required: "Selecciona un genero"
			},
			correo: {
				required: "Coloca tu correo electronico",
				email: "El correo es invalido"
			},
			contra: {
				required: "Coloca la contraseña",
			},
			confirmar_contra: {
				required: "Necesitas confirmar la contraseña",
				equalTo: "Las contraseñas no coinciden"
			},
			flexCheckDefault: "Debes aceptar"
		},  submitHandler: function(form){
            var datos = $("#form").serialize(); 
            $.ajax({
                url: 'Sistema.php?url=Registro/registrarUsuario',
                type: 'post',
                data: datos,
                beforeSend: function (){
                    $("#botonera").hide();
                    $("#loading-data2").html("Procesando, espere por favor... <img src='public/img/loader.gif'>");
                        },
                success: function(data){
                   // console.log(data);
                    if(data != ""){
                        var validar = data.split("|");
                        if(validar[0] == 0){
                            $("#botonera").show("slow");
                            $("#loading-data2").html("");
                            alertify.alert(validar[1],function(e){
                                if(e){
                                    //location.reload();
									location.href = "Sistema.php?url=main/index";
                                }
                            });
                        }else{
                            $("#botoner").show("slow");
                            $("#loading-data2").html('');
                            //apprise("Error ce accesos. Datos incorrectos", {'animate':true});
                            $('#mensaje').html('<div id="alert" class="alert alert-danger alert-dismissable"></div>');
                            $('#alert').hide(0).html('<li class="icon fa fa-ban"></li>'+validar[1]);
                            $('#alert').slideDown(900);
                            setTimeout(function(){
                                $('#alert').slideUp(1000);
                            },5000);	
                        }
                    }; 
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    //console.log(XMLHttpRequest);
                    var error;
                    if (XMLHttpRequest.status === 404) error="Pagina no existe "+XMLHttpRequest.status;// display some page not found error 
                    if (XMLHttpRequest.status === 500) error="Error del Servidor "+XMLHttpRequest.status; // display some server error 
                    else error = XMLHttpRequest.responseText;
                }    
            });
            return false;
        }//FIN DE submitHandler 
		
	});


	
});