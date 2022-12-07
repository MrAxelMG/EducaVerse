$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(document).on("click", ".prevent", function (e) {
        e.preventDefault();
    });

    $(document).on("click", ".comprar", function () {
        let videojuegoid = $(this).data("videojuegoid");
        let precio = $(this).data("precio");
        let cantidad = $(this).data("cantidad");

        $.post({
            url: "/venta/add",
            data: {
                videojuego_id: videojuegoid,
                precio: precio,
                cantidad: cantidad,
            },
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
});
