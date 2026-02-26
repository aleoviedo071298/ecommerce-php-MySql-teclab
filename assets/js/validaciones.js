$(document).ready(function () {
    $("#form_categorias").submit(function () {
        var nombre = $("#nombre_categoria").val();
        if ($.trim(nombre) === '') {
            alert("Debe completar la categoria \nOviedo Alejandro");
            return false;
        }
        return true;
    });

    $("#form_productos").submit(function () {
        var producto = $("#nombre").val();
        var imagen = $("#imagen").val();
        var descripcion = $("#descripcion").val();
        var categoria = $("#categoria").val();

        var errores = [];

        if ($.trim(producto) === '') {
            errores.push("Debe ingresar el nombre del producto");
        };
        if ($.trim(imagen) === '') {
            errores.push("Debe subir una imagen");
        };
        if ($.trim(descripcion) === '') {
            errores.push("Debe ingresar una descripcion");
        };
        if ($.trim(categoria) === '') {
            errores.push("Debe ingresar la categoria del producto");
        };

        if (errores.length > 0) {
            errores.push("Oviedo Alejandro");
            alert(errores.join("\n"));
            return false;
        }
        return true;
    });
});