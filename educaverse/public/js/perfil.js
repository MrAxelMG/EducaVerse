function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".image-upload-wrap").hide();

            $(".file-upload-image").attr("src", e.target.result);
            $(".file-upload-content").show();

            $(".image-title").html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        removeUpload();
    }
}

function removeUpload() {
    $(".file-upload-input").replaceWith($(".file-upload-input").clone());
    $(".file-upload-content").hide();
    $(".image-upload-wrap").show();
}

$(".image-upload-wrap").bind("dragover", function () {
    $(".image-upload-wrap").addClass("image-dropping");
});
$(".image-upload-wrap").bind("dragleave", function () {
    $(".image-upload-wrap").removeClass("image-dropping");
});

$(document).ready(function () {
    let acc = "";

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#PerfilForm").on("submit", function (e) {
        e.preventDefault();
        var url = $(this).attr("action");
        $("#alertMessage").text("");

        $.ajax({
            type: "POST",
            url: url,
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                console.log(result);
                $("#formModal").modal("hide");
                $("#PerfilForm")[0].reset();
                Swal.fire({
                    icon: "success",
                    title: '<h1 style="font-family: Poppins; font-weight: 700;">Perfil actualizado</h1>',
                    html: '<p style="font-family: Poppins">El perfil ha sido actualizado correctamente</p>',
                    confirmButtonText:
                        '<a style="font-family: Poppins">Aceptar</a>',
                    confirmButtonColor: "#01bbcc",
                });

                $("#passInputCheck").prop("checked", false);
                $("#colPassOld").addClass("d-none");
                $("#colPassNew").addClass("d-none");

                $("#perfilNombre").text(result.nombre);
                $("#perfilApellidop").text(result.apellidop);
                $("#perfilApellidom").text(result.apellidom);

                $("#perfilNombreCard").text(result.nombre);
                $("#perfilApellidopCard").text(result.apellidop);

                $("#nombreTitle").text(result.nombre);
                $("#apellidoPatTitle").text(result.apellidop);
                $("#apellidoMatTitle").text(result.apellidom);

                $("#nombreInput").val(result.nombre);
                $("#apellidoPatInput").val(result.apellidop);
                $("#apellidoMatInput").val(result.apellidom);

                $("#imgPerfil").attr(
                    "src",
                    "../images/usuarios/" + result.foto
                );

                $("#imgPerfilNav").attr(
                    "src",
                    "../images/usuarios/" + result.foto
                );

                $("#nombreSide").text(`${result.nombre} ${result.apellidop}`);
                $("#nombreCompletoSide").text(
                    `${result.nombre} ${result.apellidop} ${result.apellidom}`
                );
            },
            error: function (err, exception) {
                console.log(err);
                if (err.responseJSON) {
                    var validacion = err.responseJSON.errors;
                    for (let clave in validacion) {
                        $("#alertMessage").append(
                            `<br>*${validacion[clave][0]}<br><br>`
                        );
                    }
                } else {
                    $("#alertMessage").append(
                        `<span class="badge bg-danger mb-3 py-2 fs-6">${err.responseText}</span>`
                    );
                }
            },
        });
    });

    $(document).on("click", ".editar", function (e) {
        $("#alertMessage").text("");
        acc = "edit";
        e.preventDefault();

        var id = $(this).data("id");

        $("#formModal").modal("show");
        $("#PerfilForm").attr("action", "/admin/perfil/update");
        $("#idInput").val(id);

        $("#btnSubmit").show();
        $("#btnSubmit").text("Editar perfil");
        $("#btnCancel").text("Cancelar");

        var nombre = $("#nombreInput").val();
        $("#nombreTitle").text(nombre);

        var apellidop = $("#apellidoPatInput").val();
        $("#apellidoPatTitle").text(apellidop);

        var apellidom = $("#apellidoMatInput").val();
        $("#apellidoMatTitle").text(apellidom);
    });

    $("#passInputCheck").change(function () {
        if ($("#passInputCheck").is(":checked")) {
            $("#colPassOld").removeClass("d-none");
            $("#passOldInput").prop("required", true);

            $("#colPassNew").removeClass("d-none");
            $("#passNewInput").prop("required", true);
        } else {
            $("#colPassOld").addClass("d-none");
            $("#passOldInput").prop("required", false);

            $("#colPassNew").addClass("d-none");
            $("#passNewInput").prop("required", false);
        }
    });
});

$(".table").addClass("compact nowrap w-100");
