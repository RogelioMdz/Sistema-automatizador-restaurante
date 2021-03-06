$(document).ready(function () {
	$('#formLogin').validate({
		rules: {
			employee_id: {required: true},
			employee_key: {required: true}
		},
		messages: {
			employee_id: {
				required: "Debes colocar tu ID"
			},
			employee_key: {
				required: "Coloca tu clave de acceso"
			},
		},  
        errorElement: 'span',
        submitHandler: function(form){
            var datos = $("#formLogin").serialize(); 
            $.ajax({
                url: 'index.php?url=Main/accessEmployee',
                type: 'post',
                data: datos,
                beforeSend: function (){
                    $("#wrap").hide();
                    $("#formLogin").hide();
                    $("#box").hide();
                    $("#loader").html("<img src='public/img/loader3G.gif'>");
                        },
                        success: function (data) {
                            // console.log(data);
                            if (data != "") {
                                var validar = data.split("|");
                                if (validar[0] == 0) {
                                    window.location.href = "index.php?url=dashboard";
                                }else if (validar [0] == 1 ) {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Rayos!",
                                        text: "Persiste un error interno, contacta con soporte",
                                        footer: 'Error E00x2464',
                                        confirmButtonText: 'Continuar',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "index.php?url=main";
                                        }
                                    });
                                }else if (validar [0] == 2 ) {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Rayos!",
                                        text: "No nos fue posible encontrar tu registro",
					footer: 'Error E00x0621',
                                        confirmButtonText: 'Continuar',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "index.php?url=main";
                                        }
                                    });
                                }else if (validar [0] == 3 ) {
                                    Swal.fire({
                                        icon: "info",
                                        title: "Ups!",
                                        text: "Tu contrase??a es incorrecta, intantelo nuevamente",
                                        confirmButtonText: 'Continuar',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "index.php?url=main";
                                        }
                                    });
                                }else if (validar [0] == 4 ) {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error",
                                        text: "Tu usuario se encuentra bloqueado, comunicaselo a tu supervisor",
                                        confirmButtonText: 'Continuar',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "index.php?url=main";
                                        }
                                    });
                                }
                            } 
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
