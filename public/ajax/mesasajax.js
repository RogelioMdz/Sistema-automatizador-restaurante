$(document).on('click', '.btnEditarMesa', function () {
    var fila, tbl_id, tbl_chair, est_id;

    fila = $(this).closest("tr");
    tbl_id = parseInt(fila.find('td:eq(0)').text());
    //alert(tbl_id);
    tbl_chair = fila.find('td:eq(2)').text();
    est_id = fila.find('td:eq(3)').text();

    $("#tbl_id").val(tbl_id);
    $(".tbl_chair").val(tbl_chair);
    $(".est_ac").val(est_id);

    $(".modal-header").css("background-color", "rgb(42, 55, 70)");
    $(".modal-title").css("color", "white");
    $(".modal-title").css("font-family", "monospace");
});
$(document).ready(function () {
    $('input[type="text]').attr('readonly', 'readonly');
})

$(document).ready(function () {
    $('#formModalMesas').validate({
        rules: {
            tbl_id: {
                required: true
            },
            tbl_chair: {
                required: true
            },
            est_ac: {
                required: true
            },
            est_id: {
                required: true
            },
        },
        messages: {
            tbl_id: {
                required: "No debes modificar, ningun campo, si sigues con el proceso sera avisado a tu supervisor"
            },
            tbl_chair: {
                required: "No debes modificar, ningun campo, si sigues con el proceso sera avisado a tu supervisor"
            },
            est_ac: {
                required: "No debes modificar, ningun campo, si sigues con el proceso sera avisado a tu supervisor"
            },
            tbl_chaest_idr: {
                required: "No debes modificar, ningun campo, si sigues con el proceso sera avisado a tu supervisor"
            },
        },
        errorElement: 'span',
        submitHandler: function (form) {
            var datos = $("#formModalMesas").serialize();
            $.ajax({
                url: 'index.php?url=Mesasdisponibles/asignarMesa',
                type: 'post',
                data: datos,
                beforeSend: function () {
                    $("#wrap").hide();
                    $("#box").hide();
                    $("#loader").html("Procesando, espere por favor... <img src='public/img/loader.gif'>");
                },
                success: function (data) {
                    // console.log(data);
                    if (data != "") {
                        var validar = data.split("|");
                        if (validar[0] == 0) {
                            window.location.href = "index.php?url=mesas/index";
                        } else if (validar[0] == 1) {
                            Swal.fire({
                                icon: "error",
                                title: "Alto!",
                                text: "La informacion fue modificada, esta accion sera notificada a tu supervisor",
                                confirmButtonText: 'Continuar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "index.php?url=mesas/index";
                                }
                            });
                        } else if (validar[0] == 2) {
                            Swal.fire({
                                icon: "info",
                                title: "Ups!",
                                text: "Estamos experimentado un error, contacta con los administradores",
                                confirmButtonText: 'Continuar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "index.php?url=main";
                                }
                            });
                        }
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log(XMLHttpRequest);
                    var error;
                    if (XMLHttpRequest.status === 404) error = "Pagina no existe " + XMLHttpRequest.status; // display some page not found error 
                    if (XMLHttpRequest.status === 500) error = "Error del Servidor " + XMLHttpRequest.status; // display some server error 
                    else error = XMLHttpRequest.responseText;
                }
            });
            return false;
        } //FIN DE submitHandler 

    });
});