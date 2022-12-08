$(document).ready(function () {
    let acc = "";

    var table = $("#videojuegosTable").DataTable({
        ajax: "videojuegos/show",
        columns: [
            { data: "nombre" },
            { data: "categoria" },
            { data: "materiaNombre" },
            { data: "plataforma" },
            { data: "jugadores" },
            { data: "btn" },
        ],
        responsive: {
            breakpoints: [
                {
                    name: "desktop",
                    width: Infinity,
                },
                {
                    name: "tablet",
                    width: 1024,
                },
                {
                    name: "fablet",
                    width: 768,
                },
                {
                    name: "phone",
                    width: 480,
                },
            ],
        },
        language: {
            processing: "Procesando...",
            lengthMenu: "Mostrar _MENU_ videojuegos",
            zeroRecords: "No se encontraron resultados",
            emptyTable: "No se ha registrado ningúna videojuego",
            infoEmpty:
                "Mostrando videojuegos del 0 al 0 de un total de 0 videojuegos",
            infoFiltered: "(filtrado de un total de _MAX_ videojuegos)",
            search: "Buscar:",
            infoThousands: ",",
            loadingRecords: "Cargando...",
            paginate: {
                first: "Primero",
                last: "Último",
                next: ">",
                previous: "<",
            },
            aria: {
                sortAscending:
                    ": Activar para ordenar la columna de manera ascendente",
                sortDescending:
                    ": Activar para ordenar la columna de manera descendente",
            },
            buttons: {
                copy: "Copiar",
                colvis: "Visibilidad",
                collection: "Colección",
                colvisRestore: "Restaurar visibilidad",
                copyKeys:
                    "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br /> <br /> Para cancelar, haga clic en este mensaje o presione escape.",
                copySuccess: {
                    1: "Copiada 1 fila al portapapeles",
                    _: "Copiadas %d fila al portapapeles",
                },
                copyTitle: "Copiar al portapapeles",
                csv: "CSV",
                excel: "Excel",
                pageLength: {
                    "-1": "Mostrar todas las filas",
                    1: "Mostrar 1 fila",
                    _: "Mostrar %d filas",
                },
                pdf: "PDF",
                print: "Imprimir",
            },
            autoFill: {
                cancel: "Cancelar",
                fill: "Rellene todas las celdas con <i>%d</i>",
                fillHorizontal: "Rellenar celdas horizontalmente",
                fillVertical: "Rellenar celdas verticalmentemente",
            },
            decimal: ",",
            searchBuilder: {
                add: "Añadir condición",
                button: {
                    0: "Constructor de búsqueda",
                    _: "Constructor de búsqueda (%d)",
                },
                clearAll: "Borrar todo",
                condition: "Condición",
                conditions: {
                    date: {
                        after: "Despues",
                        before: "Antes",
                        between: "Entre",
                        empty: "Vacío",
                        equals: "Igual a",
                        notBetween: "No entre",
                        notEmpty: "No Vacio",
                        not: "Diferente de",
                    },
                    number: {
                        between: "Entre",
                        empty: "Vacio",
                        equals: "Igual a",
                        gt: "Mayor a",
                        gte: "Mayor o igual a",
                        lt: "Menor que",
                        lte: "Menor o igual que",
                        notBetween: "No entre",
                        notEmpty: "No vacío",
                        not: "Diferente de",
                    },
                    string: {
                        contains: "Contiene",
                        empty: "Vacío",
                        endsWith: "Termina en",
                        equals: "Igual a",
                        notEmpty: "No Vacio",
                        startsWith: "Empieza con",
                        not: "Diferente de",
                    },
                    array: {
                        not: "Diferente de",
                        equals: "Igual",
                        empty: "Vacío",
                        contains: "Contiene",
                        notEmpty: "No Vacío",
                        without: "Sin",
                    },
                },
                data: "Data",
                deleteTitle: "Eliminar regla de filtrado",
                leftTitle: "Criterios anulados",
                logicAnd: "Y",
                logicOr: "O",
                rightTitle: "Criterios de sangría",
                title: {
                    0: "Constructor de búsqueda",
                    _: "Constructor de búsqueda (%d)",
                },
                value: "Valor",
            },
            searchPanes: {
                clearMessage: "Borrar todo",
                collapse: {
                    0: "Paneles de búsqueda",
                    _: "Paneles de búsqueda (%d)",
                },
                count: "{total}",
                countFiltered: "{shown} ({total})",
                emptyPanes: "Sin paneles de búsqueda",
                loadMessage: "Cargando paneles de búsqueda",
                title: "Filtros Activos - %d",
            },
            select: {
                1: "%d fila seleccionada",
                _: "%d filas seleccionadas",
                cells: {
                    1: "1 celda seleccionada",
                    _: "$d celdas seleccionadas",
                },
                columns: {
                    1: "1 columna seleccionada",
                    _: "%d columnas seleccionadas",
                },
            },
            thousands: ".",
            datetime: {
                previous: "Anterior",
                next: "Proximo",
                hours: "Horas",
                minutes: "Minutos",
                seconds: "Segundos",
                unknown: "-",
                amPm: ["am", "pm"],
            },
            editor: {
                close: "Cerrar",
                create: {
                    button: "Nuevo",
                    title: "Crear Nuevo Registro",
                    submit: "Crear",
                },
                edit: {
                    button: "Editar",
                    title: "Editar Registro",
                    submit: "Actualizar",
                },
                remove: {
                    button: "Eliminar",
                    title: "Eliminar Registro",
                    submit: "Eliminar",
                    confirm: {
                        _: "¿Está seguro que desea eliminar %d filas?",
                        1: "¿Está seguro que desea eliminar 1 fila?",
                    },
                },
                error: {
                    system: 'Ha ocurrido un error en el sistema (<a target="\\" rel="\\ nofollow" href="\\">Más información&lt;\\/a&gt;).</a>',
                },
                multi: {
                    title: "Múltiples Valores",
                    info: "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                    restore: "Deshacer Cambios",
                    noMulti:
                        "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
                },
            },
            info: "Mostrando de _START_ a _END_ de _TOTAL_ videojuegos",
        },
    });

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#videojuegoForm").on("submit", function (e) {
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
            success: function () {
                $("#formModal").modal("hide");
                $("#videojuegoForm")[0].reset();
                table.ajax.reload(null, false);
                if (acc == "new") {
                    Swal.fire({
                        icon: "success",
                        title: '<h1 style="font-family: Poppins; font-weight: 700;">Videojuego añadido</h1>',
                        html: '<p style="font-family: Poppins">La videojuego ha sido añadida correctamente</p>',
                        confirmButtonText:
                            '<a style="font-family: Poppins">Aceptar</a>',
                        confirmButtonColor: "#01bbcc",
                    });
                } else if (acc == "edit") {
                    Swal.fire({
                        icon: "success",
                        title: '<h1 style="font-family: Poppins; font-weight: 700;">Videojuego actualizado</h1>',
                        html: '<p style="font-family: Poppins">La videojuego ha sido actualizada correctamente</p>',
                        confirmButtonText:
                            '<a style="font-family: Poppins">Aceptar</a>',
                        confirmButtonColor: "#01bbcc",
                    });
                }
            },
            error: function (err, exception) {
                var validacion = err.responseJSON.errors;
                for (let clave in validacion) {
                    $("#alertMessage").append(`*${validacion[clave][0]}<br>`);
                }
            },
        });
    });

    $(document).on("click", ".new", function (e) {
        $("#videojuegoForm").attr("action", "videojuegos/add");
        $("#alertMessage").text("");
        $("#formModal").modal("show");
        acc = "new";
        $("#videojuegoForm")[0].reset();

        $("#idInput").val("");

        $("#nombreInput").prop("readonly", false);
        $("#descripcionInput").prop("readonly", false);
        $("#jugadoresInput").prop("disabled", false);
        $("#materiaIdInput").prop("disabled", false);
        $("#precioIdInput").prop("disabled", false);

        $("#windowsInput").prop("disabled", false);
        $("#macInput").prop("disabled", false);
        $("#xboxInput").prop("disabled", false);
        $("#playstationInput").prop("disabled", false);
        $("#androidInput").prop("disabled", false);

        var categoriacant = $(this).data("categoriacant");
        categoriacant = categoriacant.split(",");

        for (let i = 0; i < categoriacant.length; i++) {
            if (categoriacant[i] > 0) {
                $(`#${categoriacant[i]}`).prop("disabled", false);
            }
        }

        $("#modalTitle").text("Añadir videojuego");
        $("#btnSubmit").text("Añadir videojuego");

        $("#btnSubmit").show();
        $("#btnCancel").text("Cancelar");
    });

    $(document).on("click", ".view", function (e) {
        e.preventDefault();
        $("#alertMessage").text("");
        acc = "view";
        $("#videojuegoForm")[0].reset();

        $("#modalTitle").text("Vista previa");

        var nombre = $(this).data("nombre");
        $("#nombreInput").val(nombre);
        $("#nombreInput").prop("readonly", true);

        var jugadores = $(this).data("jugadores");
        $("#jugadoresInput").val(jugadores);
        $("#jugadoresInput").prop("disabled", true);

        var descripcion = $(this).data("descripcion");
        $("#descripcionInput").val(descripcion);
        $("#descripcionInput").prop("disabled", true);

        var materiaid = $(this).data("materiaid");
        $("#materiaIdInput").val(materiaid);
        $("#materiaIdInput").prop("disabled", true);

        var precio = $(this).data("precio");
        $("#precioInput").val(precio);
        $("#precioInput").prop("readonly", true);

        $("#windowsInput").prop("disabled", true);
        $("#macInput").prop("disabled", true);
        $("#xboxInput").prop("disabled", true);
        $("#playstationInput").prop("disabled", true);
        $("#androidInput").prop("disabled", true);

        var plataformas = $(this).data("plataformas");
        plataformas = plataformas.split(",");

        for (let i = 0; i < plataformas.length; i++) {
            if (plataformas[i] == "Windows") {
                $("#windowsInput").prop("checked", true);
            }
            if (plataformas[i] == "Mac") {
                $("#macInput").prop("checked", true);
            }
            if (plataformas[i] == "Xbox") {
                $("#xboxInput").prop("checked", true);
            }
            if (plataformas[i] == "Playstation") {
                $("#playstationInput").prop("checked", true);
            }
            if (plataformas[i] == "Android") {
                $("#androidInput").prop("checked", true);
            }
        }

        var categoriaid = $(this).data("categoriaid");
        categoriaid = categoriaid.split(",");

        for (let i = 0; i < categoriaid.length; i++) {
            if (categoriaid[i] == categoriaid[i] && categoriaid[i] > 0) {
                $(`#${categoriaid[i]}`).prop("checked", true);
            }
        }

        var categoriacant = $(this).data("categoriacant");
        categoriacant = categoriacant.split(",");

        for (let i = 0; i < categoriacant.length; i++) {
            if (categoriacant[i] > 0) {
                $(`#${categoriacant[i]}`).prop("disabled", true);
            }
        }

        $("#formModal").modal("show");
        $("#btnCancel").text("Cerrar vista previa");
        $("#btnSubmit").hide();
    });

    $(document).on("click", ".edit", function (e) {
        e.preventDefault();
        $("#alertMessage").text("");
        acc = "edit";
        $("#videojuegoForm")[0].reset();
        var id = $(this).data("id");

        $("#formModal").modal("show");
        $("#videojuegoForm").attr("action", "videojuegos/update");

        $("#idInput").val(id);

        var nombre = $(this).data("nombre");
        $("#nombreInput").val(nombre);
        $("#nombreInput").prop("readonly", false);

        var descripcion = $(this).data("descripcion");
        $("#descripcionInput").val(descripcion);
        $("#descripcionInput").prop("disabled", false);

        var jugadores = $(this).data("jugadores");
        $("#jugadoresInput").val(jugadores);
        $("#jugadoresInput").prop("disabled", false);

        var materiaid = $(this).data("materiaid");
        $("#materiaIdInput").val(materiaid);
        $("#materiaIdInput").prop("disabled", false);

        var precio = $(this).data("precio");
        $("#precioInput").val(precio);
        $("#precioInput").prop("readonly", false);

        $("#windowsInput").prop("disabled", false);
        $("#macInput").prop("disabled", false);
        $("#xboxInput").prop("disabled", false);
        $("#playstationInput").prop("disabled", false);
        $("#androidInput").prop("disabled", false);

        var plataformas = $(this).data("plataformas");
        plataformas = plataformas.split(",");

        for (let i = 0; i < plataformas.length; i++) {
            if (plataformas[i] == "Windows") {
                $("#windowsInput").prop("checked", true);
            }
            if (plataformas[i] == "Mac") {
                $("#macInput").prop("checked", true);
            }
            if (plataformas[i] == "Xbox") {
                $("#xboxInput").prop("checked", true);
            }
            if (plataformas[i] == "Playstation") {
                $("#playstationInput").prop("checked", true);
            }
            if (plataformas[i] == "Android") {
                $("#androidInput").prop("checked", true);
            }
        }

        var categoriaid = $(this).data("categoriaid");
        categoriaid = categoriaid.split(",");

        for (let i = 0; i < categoriaid.length; i++) {
            if (categoriaid[i] == categoriaid[i] && categoriaid[i] > 0) {
                $(`#${categoriaid[i]}`).prop("checked", true);
            }
        }

        var categoriacant = $(this).data("categoriacant");
        categoriacant = categoriacant.split(",");

        for (let i = 0; i < categoriacant.length; i++) {
            if (categoriacant[i] > 0) {
                $(`#${categoriacant[i]}`).prop("disabled", false);
            }
        }

        $("#modalTitle").text(`Editar videojuego: ${nombre}`);
        $("#btnSubmit").show();
        $("#btnSubmit").text("Editar videojuego");
        $("#btnCancel").text("Cancelar");
    });

    $(document).on("click", ".delete", function (e) {
        e.preventDefault();
        $("#alertMessage").text("");
        var id = $(this).data("id");

        Swal.fire({
            title: '<h1 style="font-family: Poppins; font-weight: 700;">Eliminar videojuego</h1>',
            html: '<p style="font-family: Poppins">¿Estás seguro de eliminar esta videojuego? esta opción no se puede deshacer</p>',
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: '<a style="font-family: Poppins">Eliminar</a>',
            confirmButtonColor: "#01bbcc",
            cancelButtonText: '<a style="font-family: Poppins">Cancelar</a>',
            cancelButtonColor: "#dc3545",
        }).then((result) => {
            if (result.value) {
                $.post("videojuegos/delete", { id: id }, function () {
                    table.ajax.reload(null, false);
                    Swal.fire({
                        icon: "success",
                        title: '<h1 style="font-family: Poppins; font-weight: 700;">Videojuego eliminado</h1>',
                        html: '<p style="font-family: Poppins">El videojuego se ha eliminado correctamente</p>',
                        confirmButtonText:
                            '<a style="font-family: Poppins">Aceptar</a>',
                        confirmButtonColor: "#01bbcc",
                    });
                });
            }
        });
    });
});

$(".table").addClass("compact nowrap w-100");
